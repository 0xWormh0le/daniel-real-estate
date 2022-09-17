"use strict";
/*------------  Set up components and variables ----------------- */
import express from "express";
import path from "path";
import fileUpload from "express-fileupload";
import bodyParser from "body-parser";
import compression from "compression";
import cors from "cors";
import logger from "morgan";
import http from "http";
import dotenv from 'dotenv';

import auth from "routes/auth";
import user from "routes/user";
import property from "routes/property";
import propertyType from "routes/propertyType";
import propertyStatus from "routes/propertyStatus";
import company from "routes/company";
import favorite from "routes/favorite";
import attachment from "routes/attachment";
import jsonUpload from "routes/jsonUpload";

import jwtAuth from "middlewares/jwt-auth";

dotenv.config();

const app = express();
const port = process.env.PORT || 3000;
const environment = process.env.NODE_ENV;

app.use(
  bodyParser.urlencoded({
    extended: true
  })
);

app.use(fileUpload({
  useTempFiles: true,
  tempFileDir: './tmp'
}));

app.use(bodyParser.json());
app.use(compression());
app.use(logger("dev"));
app.use(cors());
app.use(express.static(path.resolve(__dirname, "./dist")));

app.use(jwtAuth);

app.use("/auth", auth);
app.use("/users", user);
app.use("/properties", property);
app.use("/property-types", propertyType);
app.use("/property-status", propertyStatus);
app.use("/companies", company);
app.use("/json-upload", jsonUpload);
app.use("/favorites", favorite);
app.use("/attachments", attachment);
app.use('/uploads', express.static('uploads'))


/*------------  Cranking up Node ----------------- */

console.log('About to crank up node');
console.log('PORT=' + port);
console.log('NODE_ENV=' + environment);

app.get('/ping', function (req, res, next) {
    console.log(req.body);
    res.send('pong');
});

app.get('/validate_token', (req, res, next) => {
  if (req.user == undefined) {
    res.status(200).json({
      status: false
    });
  } else {
    res.status(200).json({
      status: true
    });
  }
});

const server = http.Server(app);

// catch 404 and forward to error handler
app.use(function(req, res, next) {
  var err = new Error("Not Found");
  err.status = 404;
  next(err);
});

// error handler
app.use(function(err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get("env") === "development" ? err : {};

  // render the error page
  res.status(err.status || 500);

  res.json({
    message: res.locals.message,
    error: {}
  });
  //  res.render('error');
});



/**
 * Listen on provided port, on all network interfaces.
 */
var debug = require('debug')('mean-app:server');
server.listen(port);
server.on('error', onError);
server.on('listening', onListening);

function normalizePort(val) {
  var port = parseInt(val, 10);

  if (isNaN(port)) {
    // named pipe
    return val;
  }

  if (port >= 0) {
    // port number
    return port;
  }

  return false;
}

/**
 * Event listener for HTTP server "error" event.
 */

function onError(error) {
  if (error.syscall !== "listen") {
    throw error;
  }

  var bind = typeof port === "string" ? "Pipe " + port : "Port " + port;

  // handle specific listen errors with friendly messages
  switch (error.code) {
    case "EACCES":
      console.error(bind + " requires elevated privileges");
      process.exit(1);
      break;
    case "EADDRINUSE":
      console.error(bind + " is already in use");
      process.exit(1);
      break;
    default:
      throw error;
  }
}

/**
 * Event listener for HTTP server "listening" event.
 */

function onListening() {
  var addr = server.address();
  var bind = typeof addr === "string" ? "pipe " + addr : "port " + addr.port;
  debug("Listening on " + bind);
}

/*------------ node.js listener to port ----------------- */
// server.listen(port, function () {
//   console.log('Express server listening on port ' + port);
//   console.log('\n__dirname = ' + __dirname + '\nprocess.cwd = ' + process.cwd());
// });
