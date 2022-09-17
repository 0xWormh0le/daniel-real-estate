import jwt from "jsonwebtoken";
import models from "models";
import { request } from "http";

export default (req, res, next) => {
  const token = req.headers["x-access-token"] || req.headers["authorization"];

  if (!token) {
    console.log('No token given')
    next();
    return;
  }
  try {
    //if can verify the token, set req.user and pass to next middleware
    const decoded = jwt.verify(token, process.env.JWT_SECRET);
    
    models.User.findByPk(decoded.data.uid)
      .then(user => {
        req.user = user;
        next();
      }).catch(err => {
        next();
      });
  } catch (ex) {
    console.log(ex);
    if (request.user)
      delete request.user;
    next();
  }
}

export const authRequired = callback => {
  return (req, res) => {
    if (req.user == undefined) {
      return res.status(401).send({
        error: "Auth required"
      })
    }

    callback(req, res)
  }
}
