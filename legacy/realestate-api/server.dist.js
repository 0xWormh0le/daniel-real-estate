/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 20);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports) {

module.exports = require("express");

/***/ }),
/* 1 */
/***/ (function(module, exports) {

module.exports = require("sequelize");

/***/ }),
/* 2 */
/***/ (function(module, exports) {

module.exports = require("fs");

/***/ }),
/* 3 */
/***/ (function(module, exports) {

module.exports = require("crypto-random-string");

/***/ }),
/* 4 */
/***/ (function(module, exports) {

module.exports = require("http");

/***/ }),
/* 5 */
/***/ (function(module, exports) {

module.exports = require("jsonwebtoken");

/***/ }),
/* 6 */
/***/ (function(module, exports) {

module.exports = require("dotenv");

/***/ }),
/* 7 */
/***/ (function(module, exports) {

module.exports = require("lodash/camelCase");

/***/ }),
/* 8 */
/***/ (function(module, exports) {

module.exports = require("jimp");

/***/ }),
/* 9 */
/***/ (function(module, exports) {

module.exports = require("body-parser");

/***/ }),
/* 10 */
/***/ (function(module, exports) {

module.exports = require("@babel/runtime/helpers/defineProperty");

/***/ }),
/* 11 */
/***/ (function(module, exports) {

module.exports = require("path");

/***/ }),
/* 12 */
/***/ (function(module, exports) {

module.exports = require("express-fileupload");

/***/ }),
/* 13 */
/***/ (function(module, exports) {

module.exports = require("compression");

/***/ }),
/* 14 */
/***/ (function(module, exports) {

module.exports = require("cors");

/***/ }),
/* 15 */
/***/ (function(module, exports) {

module.exports = require("morgan");

/***/ }),
/* 16 */
/***/ (function(module, exports) {

module.exports = require("lodash");

/***/ }),
/* 17 */
/***/ (function(module, exports) {

module.exports = require("object-hash");

/***/ }),
/* 18 */
/***/ (function(module, exports) {

module.exports = require("lodash/startCase");

/***/ }),
/* 19 */
/***/ (function(module, exports) {

module.exports = require("debug");

/***/ }),
/* 20 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);

// EXTERNAL MODULE: external "express"
var external_express_ = __webpack_require__(0);
var external_express_default = /*#__PURE__*/__webpack_require__.n(external_express_);

// EXTERNAL MODULE: external "path"
var external_path_ = __webpack_require__(11);
var external_path_default = /*#__PURE__*/__webpack_require__.n(external_path_);

// EXTERNAL MODULE: external "express-fileupload"
var external_express_fileupload_ = __webpack_require__(12);
var external_express_fileupload_default = /*#__PURE__*/__webpack_require__.n(external_express_fileupload_);

// EXTERNAL MODULE: external "body-parser"
var external_body_parser_ = __webpack_require__(9);
var external_body_parser_default = /*#__PURE__*/__webpack_require__.n(external_body_parser_);

// EXTERNAL MODULE: external "compression"
var external_compression_ = __webpack_require__(13);
var external_compression_default = /*#__PURE__*/__webpack_require__.n(external_compression_);

// EXTERNAL MODULE: external "cors"
var external_cors_ = __webpack_require__(14);
var external_cors_default = /*#__PURE__*/__webpack_require__.n(external_cors_);

// EXTERNAL MODULE: external "morgan"
var external_morgan_ = __webpack_require__(15);
var external_morgan_default = /*#__PURE__*/__webpack_require__.n(external_morgan_);

// EXTERNAL MODULE: external "http"
var external_http_ = __webpack_require__(4);
var external_http_default = /*#__PURE__*/__webpack_require__.n(external_http_);

// EXTERNAL MODULE: external "dotenv"
var external_dotenv_ = __webpack_require__(6);
var external_dotenv_default = /*#__PURE__*/__webpack_require__.n(external_dotenv_);

// EXTERNAL MODULE: external "object-hash"
var external_object_hash_ = __webpack_require__(17);

// EXTERNAL MODULE: external "sequelize"
var external_sequelize_ = __webpack_require__(1);
var external_sequelize_default = /*#__PURE__*/__webpack_require__.n(external_sequelize_);

// EXTERNAL MODULE: external "lodash/camelCase"
var camelCase_ = __webpack_require__(7);
var camelCase_default = /*#__PURE__*/__webpack_require__.n(camelCase_);

// CONCATENATED MODULE: ./models/helpers.js

const toTypeObject = type => Object.assign({}, ...type.map(t => ({
  [camelCase_default()(t)]: t
})));
// CONCATENATED MODULE: ./models/user.js

const _type = ['Admin', 'CompanyAdmin', 'PropertyManager', // agent
'Realtor', // agent
'Rentor', 'Buyer'];
const userType = toTypeObject(_type);
const user_agentType = toTypeObject([_type[2], _type[3]]);
/* harmony default export */ var models_user = ((sequelize, Sequelize) => {
  class User extends Sequelize.Model {}

  const fields = {
    email: Sequelize.STRING,
    password: Sequelize.STRING,
    company_id: Sequelize.INTEGER,
    user_type: Sequelize.ENUM(_type),
    first_name: Sequelize.STRING,
    last_name: Sequelize.STRING
  };
  const options = {
    sequelize
  };
  User.init(fields, options);
  User.type = userType;
  User.agentType = user_agentType;

  User.associate = function (models) {
    User.hasOne(models.UserProfile, {
      as: 'Profile',
      foreignKey: 'user_id'
    });
    User.belongsToMany(models.Property, {
      through: 'user_favorites',
      as: {
        singular: 'favorite',
        plural: 'favorites'
      },
      foreignKey: 'user_id',
      otherKey: 'property_id',
      timestamps: false
    });
  };

  return User;
});
// CONCATENATED MODULE: ./models/userProfile.js
/* harmony default export */ var userProfile = ((sequelize, Sequelize) => {
  class UserProfile extends Sequelize.Model {}

  const fields = {
    user_id: Sequelize.INTEGER,
    description: Sequelize.STRING,
    organization: Sequelize.STRING,
    phone: Sequelize.STRING,
    facebook: Sequelize.STRING,
    twitter: Sequelize.STRING,
    linkedin: Sequelize.STRING,
    instagram: Sequelize.STRING,
    website: Sequelize.STRING,
    ratings_count: Sequelize.INTEGER,
    ratings_value: Sequelize.INTEGER,
    image: Sequelize.STRING,
    cc_num: Sequelize.STRING,
    cvv: Sequelize.INTEGER,
    expire_date: Sequelize.DATE
  };
  const options = {
    sequelize
  };
  UserProfile.init(fields, options);
  return UserProfile;
});
// EXTERNAL MODULE: external "fs"
var external_fs_ = __webpack_require__(2);
var external_fs_default = /*#__PURE__*/__webpack_require__.n(external_fs_);

// CONCATENATED MODULE: ./models/company.js

/* harmony default export */ var models_company = ((sequelize, Sequelize) => {
  class Company extends Sequelize.Model {}

  const fields = {
    name: Sequelize.STRING,
    address1: Sequelize.STRING,
    address2: Sequelize.STRING,
    logo: Sequelize.STRING,
    city: Sequelize.STRING,
    state: Sequelize.INTEGER,
    zip: Sequelize.STRING,
    phone1: Sequelize.STRING,
    phone2: Sequelize.STRING,
    fax: Sequelize.STRING,
    email: Sequelize.STRING,
    description: Sequelize.STRING,
    about_us: Sequelize.STRING
  };
  const options = {
    sequelize
  };
  Company.init(fields, options);
  Company.addHook('beforeDestroy', (company, options) => {
    company.logo && external_fs_default.a.unlink(company.logo, () => {});
  });
  return Company;
});
// CONCATENATED MODULE: ./models/compare.js
/* harmony default export */ var compare = ((sequelize, Sequelize) => {
  class Compare extends Sequelize.Model {}

  const fields = {
    user_id: Sequelize.INTEGER,
    property_id: Sequelize.INTEGER
  };
  const options = {
    sequelize
  };
  Compare.init(fields, options);
  return Compare;
});
// CONCATENATED MODULE: ./models/role.js
/* harmony default export */ var role = ((sequelize, Sequelize) => {
  class Role extends Sequelize.Model {}

  const fields = {
    name: Sequelize.STRING,
    description: Sequelize.STRING
  };
  const options = {
    sequelize
  };
  Role.init(fields, options);
  return Role;
});
// EXTERNAL MODULE: external "@babel/runtime/helpers/defineProperty"
var defineProperty_ = __webpack_require__(10);
var defineProperty_default = /*#__PURE__*/__webpack_require__.n(defineProperty_);

// CONCATENATED MODULE: ./models/propertyGallery.js


const propertyGallery_type = ['Image', 'Video'];
const galleryType = toTypeObject(propertyGallery_type);
/* harmony default export */ var propertyGallery = ((sequelize, Sequelize) => {
  class PropertyGallery extends Sequelize.Model {}

  const fields = {
    property_id: Sequelize.INTEGER,
    plan_id: Sequelize.INTEGER,
    type: Sequelize.ENUM('Image', 'Video'),
    name: Sequelize.STRING,
    attachment_id: Sequelize.INTEGER
  };
  const options = {
    sequelize
  };
  PropertyGallery.init(fields, options);

  PropertyGallery.associate = function (models) {
    PropertyGallery.belongsTo(models.Attachment, {
      as: 'Attachment',
      foreignKey: 'attachment_id'
    });
  };

  PropertyGallery.type = galleryType;
  return PropertyGallery;
});
// CONCATENATED MODULE: ./models/property.js


/* harmony default export */ var models_property = ((sequelize, Sequelize) => {
  class Property extends Sequelize.Model {
    constructor(...args) {
      super(...args);

      defineProperty_default()(this, "getDetail", function () {
        const data = {};
        return this.getPropertyDetails().then(detail => {
          detail.forEach(({
            name,
            value
          }) => {
            switch (name) {
              case 'neighborhood':
              case 'street':
                data[name] = value.split('|');
                break;

              default:
                data[name] = value;
            }
          });
          data.formattedAddress = `${data.address}, ${data.city}, ${data.state} ${data.zipcode}, USA`;
          return data;
        });
      });

      defineProperty_default()(this, "getImages", function () {
        return this.getGalleries({
          where: {
            plan_id: 0,
            type: galleryType.image
          }
        });
      });
    }

  }

  const fields = {
    title: Sequelize.STRING,
    description: Sequelize.STRING,
    featured: Sequelize.INTEGER,
    user_id: Sequelize.INTEGER,
    property_type_id: Sequelize.INTEGER
  };
  const options = {
    sequelize
  };
  Property.init(fields, options);

  Property.associate = function (models) {
    Property.hasMany(models.PropertyDetail);
    Property.belongsTo(models.User, {
      as: 'User',
      foreignKey: 'user_id'
    });
    Property.belongsTo(models.PropertyType, {
      as: 'Type',
      foreignKey: 'property_type_id'
    });
    Property.hasMany(models.PropertyGallery, {
      as: 'Galleries'
    });
    Property.hasMany(models.PropertyPlan, {
      as: 'Plans'
    });
    Property.hasMany(models.PropertyAdditionalFeature, {
      as: 'AdditionalFeatures'
    });
    Property.belongsToMany(models.PropertyStatus, {
      as: 'Status',
      through: 'property_status_pivot'
    });
    Property.belongsToMany(models.PropertyFeature, {
      as: 'Features',
      through: 'property_feature_pivot'
    });
  };

  return Property;
});
// CONCATENATED MODULE: ./models/propertyDetail.js

const _fields = ['uuid', 'type', 'city', 'state', 'zipcode', 'neighborhood', 'street', 'lat', 'lng', 'address', 'price_dollar_sale', 'price_dollar_rent', 'price_euro_sale', 'price_euro_rent', 'bedrooms', 'bathrooms', 'garages', 'area', 'year', 'ratings_count', 'ratings_value', 'published', 'views'];
const propertyDetail_fields = toTypeObject(_fields);
/* harmony default export */ var propertyDetail = ((sequelize, Sequelize) => {
  class PropertyDetail extends Sequelize.Model {}

  const fields = {
    property_id: Sequelize.INTEGER,
    name: Sequelize.STRING,
    value: Sequelize.STRING
  };
  const options = {
    sequelize
  };
  PropertyDetail.init(fields, options);
  PropertyDetail.fields = toTypeObject(_fields);
  return PropertyDetail;
});
// CONCATENATED MODULE: ./models/propertyType.js
/* harmony default export */ var propertyType = ((sequelize, Sequelize) => {
  class PropertyType extends Sequelize.Model {}

  const fields = {
    name: Sequelize.STRING
  };
  const options = {
    sequelize
  };
  PropertyType.init(fields, options);
  return PropertyType;
});
// CONCATENATED MODULE: ./models/propertyStatus.js
/* harmony default export */ var propertyStatus = ((sequelize, Sequelize) => {
  class PropertyStatus extends Sequelize.Model {}

  const fields = {
    name: Sequelize.STRING
  };
  const options = {
    sequelize
  };
  PropertyStatus.init(fields, options);
  return PropertyStatus;
});
// CONCATENATED MODULE: ./models/propertyFeature.js
/* harmony default export */ var propertyFeature = ((sequelize, Sequelize) => {
  class PropertyFeature extends Sequelize.Model {}

  const fields = {
    name: Sequelize.STRING
  };
  const options = {
    sequelize
  };
  PropertyFeature.init(fields, options);
  return PropertyFeature;
});
// CONCATENATED MODULE: ./models/propertyPlan.js
/* harmony default export */ var propertyPlan = ((sequelize, Sequelize) => {
  class PropertyPlan extends Sequelize.Model {}

  const fields = {
    property_id: Sequelize.INTEGER,
    name: Sequelize.STRING,
    description: Sequelize.STRING,
    area: Sequelize.INTEGER,
    rooms: Sequelize.INTEGER,
    baths: Sequelize.INTEGER
  };
  const options = {
    sequelize
  };
  PropertyPlan.init(fields, options);
  return PropertyPlan;
});
// CONCATENATED MODULE: ./models/propertyAdditionalFeature.js
/* harmony default export */ var propertyAdditionalFeature = ((sequelize, Sequelize) => {
  class PropertyAdditionalFeature extends Sequelize.Model {}

  const fields = {
    property_id: Sequelize.INTEGER,
    name: Sequelize.STRING,
    value: Sequelize.STRING
  };
  const options = {
    sequelize
  };
  PropertyAdditionalFeature.init(fields, options);
  return PropertyAdditionalFeature;
});
// CONCATENATED MODULE: ./models/propertyFeaturePivot.js
/* harmony default export */ var propertyFeaturePivot = ((sequelize, Sequelize) => {
  class PropertyFeaturePivot extends Sequelize.Model {}

  const fields = {
    property_id: Sequelize.INTEGER,
    property_feature_id: Sequelize.INTEGER
  };
  const options = {
    sequelize,
    tableName: 'property_feature_pivot'
  };
  PropertyFeaturePivot.init(fields, options);
  return PropertyFeaturePivot;
});
// CONCATENATED MODULE: ./models/propertyStatusPivot.js
/* harmony default export */ var propertyStatusPivot = ((sequelize, Sequelize) => {
  class PropertyStatusPivot extends Sequelize.Model {}

  const fields = {
    property_id: Sequelize.INTEGER,
    property_status_id: Sequelize.INTEGER
  };
  const options = {
    sequelize,
    tableName: 'property_status_pivot'
  };
  PropertyStatusPivot.init(fields, options);
  return PropertyStatusPivot;
});
// CONCATENATED MODULE: ./models/attachment.js


/* harmony default export */ var models_attachment = ((sequelize, Sequelize) => {
  class Attachment extends Sequelize.Model {}

  const fields = {
    small: Sequelize.STRING,
    medium: Sequelize.STRING,
    big: Sequelize.STRING
  };
  const options = {
    sequelize
  };
  Attachment.init(fields, options);
  Attachment.addHook('beforeDestroy', (attachment, options) => {
    attachment.small && external_fs_default.a.unlink(attachment.small, () => {});
    attachment.medium && external_fs_default.a.unlink(attachment.medium, () => {});
    attachment.big && external_fs_default.a.unlink(attachment.big, () => {});
  });
  return Attachment;
});
// CONCATENATED MODULE: ./models/index.js


















external_dotenv_default.a.config();
const dbHost = process.env.DB_HOST;
const dbPassword = process.env.DB_PASSWORD;
const dbName = process.env.DB_NAME;
const dbPort = process.env.DB_PORT;
const dbUser = process.env.DB_USER;
const models_sequelize = new external_sequelize_default.a(`mysql://${dbUser}:${dbPassword}@${dbHost}:${dbPort}/${dbName}`, {
  pool: {},
  define: {
    underscored: true
  }
});
const User = models_user(models_sequelize, external_sequelize_default.a);
const UserProfile = userProfile(models_sequelize, external_sequelize_default.a);
const models_Company = models_company(models_sequelize, external_sequelize_default.a);
const Compare = compare(models_sequelize, external_sequelize_default.a);
const Role = role(models_sequelize, external_sequelize_default.a);
const models_Property = models_property(models_sequelize, external_sequelize_default.a);
const models_PropertyDetail = propertyDetail(models_sequelize, external_sequelize_default.a);
const PropertyType = propertyType(models_sequelize, external_sequelize_default.a);
const PropertyStatus = propertyStatus(models_sequelize, external_sequelize_default.a);
const PropertyFeature = propertyFeature(models_sequelize, external_sequelize_default.a);
const PropertyGallery = propertyGallery(models_sequelize, external_sequelize_default.a);
const PropertyPlan = propertyPlan(models_sequelize, external_sequelize_default.a);
const PropertyAdditionalFeature = propertyAdditionalFeature(models_sequelize, external_sequelize_default.a);
const PropertyFeaturePivot = propertyFeaturePivot(models_sequelize, external_sequelize_default.a);
const PropertyStatusPivot = propertyStatusPivot(models_sequelize, external_sequelize_default.a);
const models_Attachment = models_attachment(models_sequelize, external_sequelize_default.a);
const models = {
  User,
  UserProfile,
  Company: models_Company,
  Compare,
  Role,
  Property: models_Property,
  PropertyDetail: models_PropertyDetail,
  PropertyType,
  PropertyStatus,
  PropertyFeature,
  PropertyGallery,
  PropertyPlan,
  PropertyAdditionalFeature,
  PropertyFeaturePivot,
  PropertyStatusPivot,
  Attachment: models_Attachment
};
Object.keys(models).forEach(name => {
  if (models[name].associate) {
    models[name].associate(models);
  }
});
/* harmony default export */ var models_0 = (models);
// EXTERNAL MODULE: external "jsonwebtoken"
var external_jsonwebtoken_ = __webpack_require__(5);
var external_jsonwebtoken_default = /*#__PURE__*/__webpack_require__.n(external_jsonwebtoken_);

// EXTERNAL MODULE: external "lodash"
var external_lodash_ = __webpack_require__(16);
var external_lodash_default = /*#__PURE__*/__webpack_require__.n(external_lodash_);

// CONCATENATED MODULE: ./libs/auth.js


function verifyJWTToken(token) {
  return new Promise((resolve, reject) => {
    external_jsonwebtoken_default.a.verify(token, process.env.JWT_SECRET, (err, decodedToken) => {
      if (err || !decodedToken) {
        return reject(err);
      } else {
        resolve(decodedToken);
      }
    });
  });
}
function createJWToken(details) {
  if (typeof details !== 'object') {
    details = {};
  }

  if (!details.maxAge || typeof details.maxAge !== 'number') {
    details.maxAge = 3600;
  }

  const sessionData = external_lodash_default.a.reduce(details.sessionData || {}, (memo, val, key) => {
    if (typeof val !== "function" && key !== "password") {
      memo[key] = val;
    }

    return memo;
  }, {});

  details.sessionData = {
    uid: details.sessionData.id
  };
  let token = external_jsonwebtoken_default.a.sign({
    data: details.sessionData
  }, process.env.JWT_SECRET, {
    expiresIn: details.maxAge,
    algorithm: 'HS256'
  });
  return token;
}
// CONCATENATED MODULE: ./controllers/authController.js




const authenticate = function (req, res, next) {
  const {
    email,
    password
  } = req.body;
  const where = {
    email: email,
    password: password //hash(password)

  };
  models_0.User.findOne({
    where: where
  }).then(user => {
    if (user) {
      res.status(200).json({
        success: true,
        user: {
          token: createJWToken({
            sessionData: user,
            maxAge: 3600
          }),
          email: user.email,
          company_id: user.company_id,
          user_type: user.user_type,
          first_name: user.first_name,
          last_name: user.last_name
        }
      });
    } else {
      res.status(404).json({
        success: false
      });
    }
  }).catch(e => {
    console.log(e);
    return res.status(401).send('auth failed');
  });
};

const register = function (req, res, next) {
  const {
    first_name,
    last_name,
    email,
    password,
    confirm,
    user_type
  } = req.body;
  const where = {
    email: email
  };
  models_0.User.findOne({
    where: where
  }).then(user => {
    if (user) {
      res.status(401).json({
        success: false,
        message: 'Email already used'
      });
    } else {
      nUser = models_0.User.create(req.body).then(nu => {
        res.status(200).json({
          success: true
        });
      });
    }
  });
};


// CONCATENATED MODULE: ./routes/auth.js


const router = external_express_default.a.Router();
router.post("/auth", authenticate);
router.post("/register", register);
/* harmony default export */ var auth = (router);
// CONCATENATED MODULE: ./libs/formatting.js
function getPropertyFormatted(property) {
  return Promise.all([property.getUser(), property.getType(), property.getStatus(), property.getFeatures(), property.getAdditionalFeatures(), property.getGalleries(), property.getPlans(), property.getDetail()]).then(([propertyUser, propertyType, propertyStatus, propertyFeatures, propertyAdditionalFeatures, propertyGalleries, propertyPlans, propertyDetail]) => Promise.all([propertyUser, propertyType, propertyStatus, propertyFeatures, propertyAdditionalFeatures, propertyGalleries, propertyPlans, propertyDetail, Promise.all(propertyGalleries.map(g => g.getAttachment()))])).then(([propertyUser, propertyType, propertyStatus, propertyFeatures, propertyAdditionalFeatures, propertyGalleries, propertyPlans, propertyDetail, propertyAttachments]) => {
    const gallery = [];
    const videos = [];
    const planImages = [];
    propertyGalleries.forEach((item, key) => {
      if (item.plan_id) {
        planImages.push({
          id: item.plan_id,
          image: process.env.API_URL + (propertyAttachments[key].small || propertyAttachments[key].medium || propertyAttachments[key].big)
        });
      } else if (item.type === 'Image') {
        gallery.push({
          small: process.env.API_URL + propertyAttachments[key].small,
          medium: process.env.API_URL + propertyAttachments[key].medium,
          big: process.env.API_URL + propertyAttachments[key].big
        });
      } else {
        videos.push({
          name: item.name,
          link: process.env.API_URL + (propertyAttachments[key].small || propertyAttachments[key].medium || propertyAttachments[key].big)
        });
      }
    });
    const plans = propertyPlans.map(plan => {
      const image = planImages.filter(({
        id
      }) => id === plan.id);
      return {
        name: plan.name,
        desc: plan.description,
        rooms: plan.rooms,
        baths: plan.baths,
        image: image.length ? process.env.API_URL + image[0].image : undefined,
        area: {
          value: plan.area,
          unit: 'ft'
        }
      };
    });
    return {
      id: property.id,
      title: property.title,
      description: property.description,
      featured: property.featured,
      type: propertyType ? propertyType.name : undefined,
      status: propertyStatus.map(status => status.name),
      features: propertyFeatures.map(feature => feature.name),
      additional_features: propertyAdditionalFeatures.map(({
        name,
        value
      }) => ({
        name,
        value
      })),
      updated_at: property.updated_at,
      company_id: propertyUser.company_id,
      gallery,
      videos,
      plans,
      ...propertyDetail
    };
  }).then(data => ({
    id: data.id,
    uuid: data.uuid,
    title: data.title,
    desc: data.description,
    propertyType: data.type,
    propertyStatus: data.status,
    city: data.city,
    zipCode: data.zipcode,
    neighborhood: data.neighborhood,
    street: data.street,
    location: {
      lat: data.lat,
      lng: data.lng
    },
    formattedAddress: data.formattedAddress,
    features: data.features,
    featured: data.featured,
    company_id: data.company_id,
    priceDollar: {
      sale: data.price_dollar_sale,
      rent: data.price_dollar_rent
    },
    priceEuro: {
      sale: data.price_euro_sale,
      rent: data.price_euro_rent
    },
    bedrooms: data.bedrooms,
    bathrooms: data.bathrooms,
    garages: data.garages,
    area: {
      value: data.area,
      unit: 'ft²'
    },
    yearBuilt: data.year,
    ratingsCount: data.ratings_count,
    ratingsValue: data.ratings_value,
    additionalFeatures: data.additional_features,
    gallery: data.gallery,
    plans: data.plans,
    videos: data.videos,
    published: data.published,
    views: data.views,
    lastUpdate: data.updated_at
  }));
}
const getUserFormatted = function (user) {
  return Promise.all([user, user.getProfile()]).then(([user, profile]) => {
    return {
      id: user.id,
      email: user.email,
      company_id: user.company_id,
      user_type: user.user_type,
      first_name: user.first_name,
      last_name: user.last_name,
      description: profile.description,
      phone: profile.phone,
      facebook: profile.facebook,
      twitter: profile.twitter,
      linkedin: profile.linkedin,
      instagram: profile.instagram,
      website: profile.website,
      ratings_count: profile.ratings_count,
      ratings_value: profile.ratings_value,
      image: process.env.API_URL + profile.image
    };
  });
};
// CONCATENATED MODULE: ./controllers/userController.js




const getUser = function (req, res, next) {
  const id = req.params.id;
  models_0.User.findByPk(id).then(user => {
    if (!user) {
      return Promise.reject(404);
    }

    return getUserFormatted(user);
  }).then(data => res.json(data)).catch(err => {
    if (err === 404) {
      res.status(404).send('No Data');
    } else {
      console.log(err);
      return res.status(500).send(err);
    }
  });
};

const deleteUser = function (req, res, next) {
  const id = req.params.id;
  const where = {
    user_id: id
  };
  Promise.all([models_0.User.destroy({
    where: {
      id
    }
  }), models_0.UserProfile.destroy({
    where
  })]).then(() => {
    return res.json({
      code: 'success'
    });
  }).catch(err => {
    console.log(err);
    return res.status(500).send(err);
  });
};

const searchUser = function (req, res, next) {
  const {
    company,
    type
  } = req.query;
  const where = {};

  if (company) {
    where.company_id = company;
  }

  if (type) {
    where.user_type = type;

    if (type === 'agent') {
      where.user_type = {
        [external_sequelize_["Op"].or]: ['PropertyManager', 'Realtor']
      };
    }
  }

  models_0.User.findAll({
    where
  }).then(users => Promise.all(users.map(getUserFormatted))).then(data => res.json(data)).catch(err => {
    console.log(err);
    res.status(500).send(err);
  });
};


// CONCATENATED MODULE: ./routes/user.js


const user_router = external_express_default.a.Router();
user_router.get("/", searchUser);
user_router.get("/:id", getUser);
user_router.delete("/:id", deleteUser); // /// USER ROUTES ///
// /* GET request for creating a user. NOTE This must come before route that displays user (uses id) */
// router.get('/create', user_controller.user_create_get);
// /* POST request for creating user. */
// router.post('/:companyId', user_controller.user_create_post);
// /* GET request to delete user. */
// router.get("/:id/:companyId/delete", user_controller.user_delete_get);
// // POST request to delete user
// router.post("/:id/:companyId/delete", user_controller.user_delete_post);
// /* GET request to update user. */
// router.get("/:id/:companyId/update", user_controller.user_update_get);
// // POST request to update user
// router.post("/:id/:companyId/update", user_controller.user_update_post);
// /* GET request for one user. */
// router.get("/:id:companyId", user_controller.user_detail);
// /* GET request for list of all user. */
// router.get("/:companyId", user_controller.user_list);
// router.get("/:companyId/usersbycompany", user_controller.users_bycompany);
// router.get("/:companyId/usersbytype", user_controller.user_bytype_get);
// /* GET request for list roles. */
// router.get("/:companyId/roles", user_controller.user_roles_get);
// router.get("/:companyId/rolesbyuserid", user_controller.user_roles_byuserid);

/* harmony default export */ var routes_user = (user_router);
// CONCATENATED MODULE: ./controllers/propertyController.js




const propertySlides = function (req, res, next) {
  const companyId = req.query.company;
  const propertyTypeId = req.query.propertyType;
  const userId = req.query.agent;
  const agentType = req.query.agentType;
  const featured = req.query.featured;
  const where = {};
  const include = [];

  if (propertyTypeId) {
    where.property_type_id = propertyTypeId;
  }

  if (userId) {
    where.user_id = userId;
  }

  if (featured) {
    where.featured = 1;
  }

  if (companyId || agentType) {
    include.push({
      association: 'User'
    });

    if (companyId) {
      include[0].where = {
        company_id: companyId
      };
    }

    if (agentType) {
      include[0].where = {
        user_type: agentType
      };
    }
  }

  models_0.Property.findAll({
    where,
    include
  }).then(properties => Promise.all(properties.map(prop => Promise.all([prop, prop.getDetail(), prop.getImages()])))).then(properties => properties.map(([prop, detail, galleries]) => {
    const {
      formattedAddress,
      priceDollarSale,
      priceDollarRent,
      priceEuroSale,
      priceEuroRent
    } = detail;
    return {
      id: prop.id,
      title: prop.title,
      location: formattedAddress,
      priceDollar: {
        sale: priceDollarSale,
        rent: priceDollarRent
      },
      priceEuro: {
        sale: priceEuroSale,
        rent: priceEuroRent
      },
      image: galleries.length > 0 ? galleries[0].small : undefined
    };
  })).then(data => res.json(data)).catch(err => {
    console.log(err);
    res.status(500).send(err);
  });
};

const searchProperty = function (req, res, next) {
  const companyId = req.query.company;
  const propertyTypeId = req.query.propertyType;
  const userId = req.query.agent;
  const agentType = req.query.agentType;
  const featured = req.query.featured;
  const where = {};
  const include = [];

  if (propertyTypeId) {
    where.property_type_id = propertyTypeId;
  }

  if (userId) {
    where.user_id = userId;
  }

  if (featured) {
    where.featured = 1;
  }

  if (companyId || agentType) {
    include.push({
      association: 'User'
    });

    if (companyId) {
      include[0].where = {
        company_id: companyId
      };
    }

    if (agentType) {
      include[0].where = {
        user_type: agentType
      };
    }
  }

  models_0.Property.findAll({
    where,
    include
  }).then(properties => Promise.all(properties.map(getPropertyFormatted))).then(data => res.json(data)).catch(err => {
    console.log(err);
    res.status(500).send(err);
  });
};

const getProperty = function (req, res, next) {
  const id = req.params.id;
  models_0.Property.findByPk(id).then(property => {
    if (!property) {
      return Promise.reject(404);
    }

    return getPropertyFormatted(property);
  }).then(data => res.json(data)).catch(err => {
    if (err === 404) {
      res.status(404).send('No Data');
    } else {
      console.log(err);
      return res.status(500).send(err);
    }
  });
};

const createPlan = function (req, res, next) {
  const {
    id,
    property,
    name,
    description,
    area,
    rooms,
    baths,
    attachment_id
  } = req.body;
  const getPlan = id ? models_0.PropertyPlan.findByPk(id) : models_0.PropertyPlan.create();
  getPlan.then(plan => {
    if (!plan) {
      if (id) {
        return Promise.reject(404);
      } else {
        return Promise.reject(500);
      }
    }

    if (!id) {
      plan.property_id = property;
    }

    if (name !== undefined) {
      plan.name = name;
    }

    if (description !== undefined) {
      plan.description = description;
    }

    if (area !== undefined) {
      plan.area = area;
    }

    if (rooms !== undefined) {
      plan.rooms = rooms;
    }

    if (baths !== undefined) {
      plan.baths = baths;
    }

    return plan.save();
  }).then(plan => {
    const where = {
      plan_id: plan.id
    };
    const defaults = {
      property_id: plan.property_id
    };

    if (!attachment_id) {
      return true;
    }

    return models_0.PropertyGallery.findOrCreate({
      where,
      defaults
    }).then(planGallery => {
      planGallery[0].attachment_id = attachment_id;
      return planGallery[0].save();
    });
  }).then(() => {
    return res.json({
      code: 'success'
    });
  }).catch(err => {
    if (err === 404) {
      res.status(404).send('No Data');
    } else {
      console.log(err);
      return res.status(500).send(err);
    }
  }).finally(() => {});
};

const deletePlan = function (req, res, next) {
  const id = req.params.id;
  Promise.all([models_0.PropertyPlan.destroy({
    where: {
      id
    }
  }), models_0.PropertyGallery.destroy({
    where: {
      plan_id: id
    },
    individualHooks: true
  })]).then(() => {
    return res.json({
      code: 'success'
    });
  }).catch(err => {
    console.log(err);
    return res.status(500).send(err);
  });
};

const createGallery = function (req, res, next) {
  const {
    id,
    property,
    type,
    name,
    attachment_id
  } = req.body;
  const getGallery = id ? models_0.PropertyGallery.findByPk(id) : models_0.PropertyGallery.create();
  getGallery.then(gallery => {
    if (!gallery) {
      if (id) {
        return Promise.reject(404);
      } else {
        return Promise.reject(500);
      }
    }

    if (!id) {
      gallery.property_id = property;
    }

    if (name !== undefined) {
      gallery.name = name;
    }

    if (type !== undefined) {
      gallery.type = type;
    }

    gallery.plan_id = 0;
    return Promise.all([gallery.save(), attachment_id]);
  }).then(([gallery, attachment_id]) => {
    if (!attachment_id) {
      return true;
    }

    gallery.attachment_id = attachment_id;
    return gallery.save();
  }).then(() => {
    return res.json({
      code: 'success'
    });
  }).catch(err => {
    if (err === 404) {
      res.status(404).send('No Data');
    } else {
      console.log(err);
      return res.status(500).send(err);
    }
  });
};

const deleteGallery = function (req, res, next) {
  const id = req.params.id;
  const where = {
    id
  };
  models_0.PropertyGallery.destroy({
    where,
    individualHooks: true
  }).then(() => {
    return res.json({
      code: 'success'
    });
  }).catch(err => {
    console.log(err);
    return res.status(500).send(err);
  });
};

const deleteProperty = function (req, res, next) {
  const id = req.params.id;
  const where = {
    property_id: id
  };
  Promise.all([models_0.Property.destroy({
    where: {
      id
    }
  }), models_0.PropertyAdditionalFeature.destroy({
    where
  }), models_0.PropertyDetail.destroy({
    where
  }), models_0.PropertyPlan.destroy({
    where
  }), models_0.PropertyStatusPivot.destroy({
    where
  }), models_0.PropertyFeaturePivot.destroy({
    where
  }), models_0.PropertyGallery.destroy({
    where,
    individualHooks: true
  })]).then(() => {
    return res.json({
      code: 'success'
    });
  }).catch(err => {
    console.log(err);
    return res.status(500).send(err);
  });
};

const createProperty = function (req, res, next) {
  if (req.user == undefined) {
    return res.status(401).send({
      error: "Error validating access token: Session has expired."
    });
  }

  const {
    id,
    title,
    description,
    featured,
    user,
    property_type,
    // basic
    additional_features,
    features,
    status,
    // associated
    details // detail

  } = req.body;
  console.log(req.body);
  const property = id ? models_0.Property.findByPk(id) : models_0.Property.create();
  property.then(prop => {
    if (!prop) {
      if (id) {
        return Promise.reject(404);
      } else {
        return Promise.reject(500);
      }
    }

    if (title !== undefined) {
      prop.title = title;
    }

    if (description !== undefined) {
      prop.description = description;
    }

    if (property_type !== undefined) {
      prop.property_type_id = property_type;
    }

    if (featured !== undefined) {
      prop.featured = featured;
    }

    if (user !== undefined) {
      // if (false) { // has modifying user right
      prop.user_id = user; // }
    } else {
      prop.user_id = req.user.id;
    }

    return prop.save();
  }).then(prop => {
    const fields = Object.keys(models_0.PropertyDetail.fields);
    const promises = Object.keys(details).map(param => {
      if (fields.includes(camelCase_default()(param))) {
        const where = {
          property_id: prop.id,
          name: param
        };
        return models_0.PropertyDetail.findOrCreate({
          where
        }).then(([instance]) => {
          instance.value = details[param];
          return instance.save();
        });
      } else {
        return true;
      }
    });

    if (features !== undefined) {
      const setFeatures = models_0.PropertyFeaturePivot.destroy({
        where: {
          property_id: prop.id
        }
      }).then(() => {
        models_0.PropertyFeaturePivot.bulkCreate(features.map(feature => ({
          property_id: prop.id,
          property_feature_id: feature
        })));
      });
      promises.push(setFeatures);
    }

    if (status !== undefined) {
      const setStatus = models_0.PropertyStatusPivot.destroy({
        where: {
          property_id: prop.id
        }
      }).then(() => {
        models_0.PropertyStatusPivot.bulkCreate(status.map(st => ({
          property_id: prop.id,
          property_status_id: st
        })));
      });
      promises.push(setStatus);
    }

    if (additional_features !== undefined) {
      const setAdditionalFeatures = models_0.PropertyAdditionalFeature.destroy({
        where: {
          property_id: prop.id
        }
      }).then(() => {
        models_0.PropertyAdditionalFeature.bulkCreate(additional_features.map(feature => ({
          property_id: prop.id,
          name: feature.name,
          value: feature.value
        })));
      });
      promises.push(setAdditionalFeatures);
    }

    return Promise.all(promises);
  }).then(() => res.json({
    code: 'success'
  })).catch(err => {
    if (err === 404) {
      res.status(404).send('No Data');
    } else {
      console.log(err);
      return res.status(500).send(err);
    }
  });
};


// CONCATENATED MODULE: ./routes/property.js


const property_router = external_express_default.a.Router();
property_router.get("/:id", getProperty);
property_router.get("/", searchProperty);
property_router.post("/", createProperty);
property_router.delete("/:id", deleteProperty);
property_router.post("/plans/", createPlan);
property_router.delete("/plans/:id", deletePlan);
property_router.post("/galleries/", createGallery);
property_router.delete("/galleries/:id", deleteGallery);
/* harmony default export */ var routes_property = (property_router);
// CONCATENATED MODULE: ./controllers/propertyTypeController.js


const getPropertyTypeFormatted = function (type) {
  return {
    id: type.id,
    name: type.name
  };
};

const searchPropertyType = function (req, res, next) {
  models_0.PropertyType.findAll().then(types => Promise.all(types.map(getPropertyTypeFormatted))).then(data => res.json(data)).catch(err => {
    console.log(err);
    res.status(500).send(err);
  });
};

const createPropertyType = function (req, res, next) {
  const {
    id,
    name
  } = req.body;
  const getType = id ? models_0.PropertyType.findByPk(id) : models_0.PropertyType.create();
  getType.then(type => {
    if (!type) {
      if (id) {
        return Promise.reject(404);
      } else {
        return Promise.reject(500);
      }
    }

    if (name !== undefined) {
      type.name = name;
    }

    return type.save();
  }).then(() => {
    return res.json({
      code: 'success'
    });
  }).catch(err => {
    if (err === 404) {
      res.status(404).send('No Data');
    } else {
      console.log(err);
      return res.status(500).send(err);
    }
  });
};

const deletePropertyType = function (req, res, next) {
  const id = req.params.id;
  Promise.all([models_0.PropertyType.destroy({
    where: {
      id
    }
  })]).then(() => {
    return res.json({
      code: 'success'
    });
  }).catch(err => {
    console.log(err);
    return res.status(500).send(err);
  });
};


// CONCATENATED MODULE: ./routes/propertyType.js


const propertyType_router = external_express_default.a.Router();
propertyType_router.get("/", searchPropertyType);
propertyType_router.post("/", createPropertyType);
propertyType_router.delete("/:id", deletePropertyType);
/* harmony default export */ var routes_propertyType = (propertyType_router);
// CONCATENATED MODULE: ./controllers/propertyStatusController.js


const getPropertyStatus = function (status) {
  return {
    id: status.id,
    name: status.name
  };
};

const searchPropertyStatus = function (req, res, next) {
  models_0.PropertyStatus.findAll().then(status => Promise.all(status.map(getPropertyStatus))).then(data => res.json(data)).catch(err => {
    console.log(err);
    res.status(500).send(err);
  });
};

const createPropertyStatus = function (req, res, next) {
  const {
    id,
    name
  } = req.body;
  const getStatus = id ? models_0.PropertyStatus.findByPk(id) : models_0.PropertyStatus.create();
  getStatus.then(status => {
    if (!status) {
      if (id) {
        return Promise.reject(404);
      } else {
        return Promise.reject(500);
      }
    }

    if (name !== undefined) {
      status.name = name;
    }

    return status.save();
  }).then(() => {
    return res.json({
      code: 'success'
    });
  }).catch(err => {
    if (err === 404) {
      res.status(404).send('No Data');
    } else {
      console.log(err);
      return res.status(500).send(err);
    }
  });
};

const deletePropertyStatus = function (req, res, next) {
  const id = req.params.id;
  const where = {
    property_status_id: id
  };
  Promise.all([models_0.PropertyStatus.destroy({
    where: {
      id
    }
  }), models_0.PropertyStatusPivot.destroy({
    where
  })]).then(() => {
    return res.json({
      code: 'success'
    });
  }).catch(err => {
    console.log(err);
    return res.status(500).send(err);
  });
};


// CONCATENATED MODULE: ./routes/propertyStatus.js


const propertyStatus_router = external_express_default.a.Router();
propertyStatus_router.get("/", searchPropertyStatus);
propertyStatus_router.post("/", createPropertyStatus);
propertyStatus_router.delete("/:id", deletePropertyStatus);
/* harmony default export */ var routes_propertyStatus = (propertyStatus_router);
// EXTERNAL MODULE: external "crypto-random-string"
var external_crypto_random_string_ = __webpack_require__(3);
var external_crypto_random_string_default = /*#__PURE__*/__webpack_require__.n(external_crypto_random_string_);

// EXTERNAL MODULE: external "jimp"
var external_jimp_ = __webpack_require__(8);
var external_jimp_default = /*#__PURE__*/__webpack_require__.n(external_jimp_);

// CONCATENATED MODULE: ./controllers/companyController.js





const getCompanyFormatted = function (company) {
  return {
    id: company.id,
    name: company.name,
    address1: company.address1,
    address2: company.address2,
    logo: '/' + company.logo,
    city: company.city,
    state: company.state,
    zip: company.zip,
    phone1: company.phone1,
    phone2: company.phone2,
    fax: company.fax,
    email: company.email,
    description: company.description
  };
};

const searchCompany = function (req, res, next) {
  models_0.Company.findAll().then(companies => companies.map(getCompanyFormatted)).then(data => res.json(data)).catch(err => {
    console.log(err);
    res.status(500).send(err);
  });
};

const getCompany = function (req, res, next) {
  const id = req.params.id;
  models_0.Company.findByPk(id).then(property => {
    return property || Promise.reject(404);
  }).then(getCompanyFormatted).then(data => res.json(data)).catch(err => {
    if (err === 404) {
      res.status(404).send('No Data');
    } else {
      console.log(err);
      return res.status(500).send(err);
    }
  });
};

const deleteComapny = function (req, res, next) {
  const id = req.params.id;
  models_0.Company.destroy({
    where: {
      id
    },
    individualHooks: true
  }).then(() => {
    return res.json({
      code: 'success'
    });
  }).catch(err => {
    console.log(err);
    return res.status(500).send(err);
  });
};

const createComapany = function (req, res, next) {
  const {
    id
  } = req.body;
  const attachment = req.files.attachment;
  const fields = ['name', 'address1', 'address2', 'logo', 'city', 'state', 'zip', 'phone1', 'phone2', 'fux', 'email', 'description', 'about_us'];
  const company = id ? models_0.Company.findByPk(id) : models_0.Company.create();
  company.then(cp => {
    if (!cp) {
      if (id) {
        return Promise.reject(404);
      } else {
        return Promise.reject(500);
      }
    }

    fields.forEach(f => {
      if (req.body[f] !== undefined) {
        cp[f] = req.body[f];
      }
    });
    return Promise.all([cp.save(), attachment.size && external_jimp_default.a.read(attachment.tempFilePath)]);
  }).then(([cp, lenna]) => {
    if (!lenna) {
      return true;
    }

    const logo_file = 'uploads/company-logo/' + external_crypto_random_string_default()({
      length: 15
    }) + '.jpg';
    lenna.resize(256, 256).quality(60).write(logo_file);
    cp.logo = logo_file;
    return cp.save();
  }).then(() => res.json({
    code: 'success'
  })).catch(err => {
    if (err === 404) {
      res.status(404).send('No Data');
    } else {
      console.log(err);
      return res.status(500).send(err);
    }
  }).finally(() => {
    external_fs_default.a.unlink(attachment.tempFilePath, () => {});
  });
};


// CONCATENATED MODULE: ./routes/company.js


const company_router = external_express_default.a.Router();
company_router.get("/:id", getCompany);
company_router.get("/", searchCompany);
company_router.post("/", createComapany);
company_router.delete("/:id", deleteComapny);
/* harmony default export */ var routes_company = (company_router);
// CONCATENATED MODULE: ./controllers/favoriteController.js



const getFavorites = function (req, res, next) {
  if (req.user == undefined) {
    res.status(401).send('');
    return;
  }

  req.user.getFavorites().then(properties => Promise.all(properties.map(getPropertyFormatted))).then(data => {
    res.json(data);
  }).catch(err => {
    console.log(err); // res.status(500).send(err);
  });
};

const addToFavorites = function (req, res, next) {
  const id = req.body.id;
  models_0.Property.findByPk(id).then(property => {
    console.log(property);
    req.user.addFavorite(property);
  }).then(() => {
    return res.json({
      code: 'success'
    });
  }).catch(err => {
    res.status(500).send(err);
  });
};

const deleteFavorite = function (req, res, next) {
  const id = req.params.id;
  models_0.Property.findByPk(id).then(property => {
    req.user.removeFavorite(property);
    return res.json({
      code: 'success'
    });
  }).catch(err => {
    res.status(500).send(err);
  });
};


// CONCATENATED MODULE: ./routes/favorite.js


const favorite_router = external_express_default.a.Router();
favorite_router.get("/", getFavorites);
favorite_router.post("/", addToFavorites);
favorite_router.delete("/:id", deleteFavorite);
/* harmony default export */ var favorite = (favorite_router);
// CONCATENATED MODULE: ./controllers/attachmentController.js




const SMALL_IMAGE_SIZE = 256;
const MEDIUM_IMAGE_SIZE = 512;
const BIG_IMAGE_SIZE = 1024;

const attachmentController_getAttachment = function (req, res, next) {
  const id = req.params.id;
  models_0.Attachment.findByPk(id).then(attachment => {
    if (!attachment) {
      return Promise.reject(404);
    }

    return {
      id: attachment.id,
      small: process.env.API_URL + attachment.small,
      medium: process.env.API_URL + attachment.medium,
      big: process.env.API_URL + attachment.big
    };
  }).then(data => res.json(data)).catch(err => {
    if (err === 404) {
      res.status(404).send('No Data');
    } else {
      console.log(err);
      return res.status(500).send(err);
    }
  });
};

const createAttachment = function (req, res, next) {
  const attachment = req.files.attachment;
  const {
    id
  } = req.body;
  const getAttachment = id ? models_0.Attachment.findByPk(id) : models_0.Attachment.create();
  getAttachment.then(att => {
    if (!att) {
      if (id) {
        return Promise.reject(404);
      } else {
        return Promise.reject(500);
      }
    }

    if (!attachment.size) {
      return true;
    }

    return Promise.all([att, external_jimp_default.a.read(attachment.tempFilePath)]);
  }).then(([att, lenna]) => {
    const small_file = 'uploads/small/' + external_crypto_random_string_default()({
      length: 15
    }) + '.jpg';
    const medium_file = 'uploads/medium/' + external_crypto_random_string_default()({
      length: 15
    }) + '.jpg';
    const big_file = 'uploads/big/' + external_crypto_random_string_default()({
      length: 15
    }) + '.jpg';
    lenna.resize(SMALL_IMAGE_SIZE, SMALL_IMAGE_SIZE).quality(60).write(small_file);
    lenna.resize(MEDIUM_IMAGE_SIZE, MEDIUM_IMAGE_SIZE).quality(60).write(medium_file);
    lenna.resize(BIG_IMAGE_SIZE, BIG_IMAGE_SIZE).quality(60).write(big_file);
    att.small = small_file;
    att.medium = medium_file;
    att.big = big_file;
    return att.save();
  }).then(att => {
    return res.json({
      code: 'success',
      id: att.id
    });
  }).catch(err => {
    if (err === 404) {
      res.status(404).send('No Data');
    } else {
      console.log(err);
      return res.status(500).send(err);
    }
  }).finally(() => {
    external_fs_default.a.unlink(attachment.tempFilePath, () => {});
  });
};

const deleteAttachment = function (req, res, next) {
  const id = req.params.id;
  models_0.Attachment.destroy({
    where: {
      id
    }
  }).then(() => {
    return res.json({
      code: 'success'
    });
  }).catch(err => {
    console.log(err);
    return res.status(500).send(err);
  });
};


// CONCATENATED MODULE: ./routes/attachment.js


const attachment_router = external_express_default.a.Router();
attachment_router.get("/:id", attachmentController_getAttachment);
attachment_router.post("/", createAttachment);
attachment_router.delete("/:id", deleteAttachment);
/* harmony default export */ var routes_attachment = (attachment_router);
// EXTERNAL MODULE: external "lodash/startCase"
var startCase_ = __webpack_require__(18);

// CONCATENATED MODULE: ./controllers/jsonUploadController.js


const html = `<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <form method="post" action="/api/json-upload/" enctype="multipart/form-data">
      <label for="file">Choose Scrapping JSON file</label>
      <br/>
      <br/>
      <input type="file" id="file" name="attachment"/>
      <br/>
      <br/>
      <button>Submit</button>
    </form>
  </body>
  </html>`;

const seedPropertyDetail = async function () {
  const city = ['Chester', 'Clairton', 'Corry', 'Hazleton', 'Johnstown', 'Latrobe', 'Pittston', 'Sharon', 'Washington', 'Warren', 'Parker'];
  const street = ['E Venango St', 'Eddington St', 'Erwin St', 'Gerry St', 'Harpers Pl', 'Inwood Ln', 'Kirkwood Rd', 'Linmore Ave', 'Marigold Ln', 'Morning Glory Rd', 'N Convent Ln', 'Napfle St', 'Oak Lane Rd'];
  const lat = 41;
  const lng = 77;
  const dummy = 'Lorem ipsum dolor sit amet consectetuer adipiscing elit Aenean commodo ligula eget dolor Aenean massa Cum sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus Donec quam felis ultricies nec pellentesque eu pretium quis sem Nulla consequat massa quis enim Donec pede justo fringilla vel aliquet nec vulputate eget arcu In enim justo rhoncus ut imperdiet a venenatis vitae justo Nullam dictum felis eu pede mollis pretium Integer tincidunt Cras dapibus Vivamus elementum semper nisi Aenean vulputate eleifend tellus Aenean leo ligula porttitor eu consequat vitae eleifend ac enim Aliquam lorem ante dapibus in viverra quis feugiat a tellus Phasellus viverra nulla ut metus varius laoreet Quisque rutrum Aenean imperdiet Etiam ultricies nisi vel augue Curabitur ullamcorper ultricies nisi Nam eget dui Etiam rhoncus Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet adipiscing sem neque sed ipsum Nam quam nunc blandit vel luctus pulvinar hendrerit id lorem Maecenas nec odio et ante tincidunt tempus Donec vitae sapien ut libero venenatis faucibus Nullam quis ante Etiam sit amet orci eget eros faucibus tincidunt Duis leo Sed fringilla mauris sit amet nibh Donec sodales sagittis magna Sed consequat leo eget bibendum sodales augue velit cursus nunc';
  const dummyWords = dummy.split(' ');

  const getRandomDummyWord = () => dummyWords[parseInt(Math.random() * 1000) % dummyWords.length];

  for (let i = 0; i < 15; i++) {
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'city',
      value: city[i % city.length]
    });
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'zipcode',
      value: 15 + parseInt(Math.random() * 1000)
    });
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'neighborhood',
      value: getRandomDummyWord() + ' ' + getRandomDummyWord() + ' ' + getRandomDummyWord()
    });
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'street',
      value: street[i % street.length]
    });
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'lat',
      value: lat + Math.round(Math.random() * 10000) / 10000
    });
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'lng',
      value: lng + Math.round(Math.random() * 10000) / 10000
    });
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'address',
      value: getRandomDummyWord() + ' ' + getRandomDummyWord() + ' ' + getRandomDummyWord()
    });
    const price_dollar_sale = Math.round(Math.random() * 1000000) + 80000;
    const price_dollar_rent = parseInt(price_dollar_sale / (Math.random() * 150) + 400);
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'price_dollar_sale',
      value: price_dollar_sale
    });
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'price_dollar_rent',
      value: price_dollar_rent
    });
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'price_euro_sale',
      value: parseInt(price_dollar_sale / 1.2)
    });
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'price_euro_rent',
      value: parseInt(price_dollar_rent / 1.2)
    });
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'bedrooms',
      value: parseInt(Math.random() * 4 + 2)
    });
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'bathrooms',
      value: parseInt(Math.random() * 2 + 1)
    });
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'garages',
      value: parseInt(Math.random() * 2 + 1)
    });
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'area',
      value: parseInt(Math.random() * 5000 + 1500)
    });
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'year',
      value: parseInt(Math.random() * 18 + 2000)
    });
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'ratings_count',
      value: parseInt(Math.random() * 30)
    });
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'ratings_value',
      value: Math.round(Math.random() * 5 * 100) / 100
    });
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'published',
      value: parseInt(Math.random() * 10 + 2009) + '-' + parseInt(Math.random() * 12 + 1) + '-' + parseInt(Math.random() * 29)
    });
    await models_0.PropertyDetail.create({
      property_id: i + 1,
      name: 'views',
      value: parseInt(Math.random() * 150)
    });
  }
};

const seedGallery = async function () {
  const name = ['apartment', 'flat1', 'flat2', 'house1', 'house2', 'house3', 'office1', 'office2', 'apartment', 'flat1', 'flat2', 'house1', 'house2', 'house3', 'office1'];
  const imageCount = [5, 4, 5, 6, 4, 4, 6, 6, 5, 4, 5, 6, 4, 4, 6];

  for (let i = 0; i < 15; i++) {
    await models_0.PropertyGallery.create({
      property_id: i + 1,
      plan_id: i * 2 + 1,
      type: 'Image',
      small: 'uploads/properties/small/plan-1.jpg',
      medium: 'uploads/properties/medium/plan-1.jpg',
      big: 'uploads/properties/big/plan-1.jpg'
    });
    await models_0.PropertyGallery.create({
      property_id: i + 1,
      plan_id: i * 2 + 2,
      type: 'Image',
      small: 'uploads/properties/small/plan-2.jpg',
      medium: 'uploads/properties/medium/plan-2.jpg',
      big: 'uploads/properties/big/plan-2.jpg'
    });
    await models_0.PropertyGallery.create({
      property_id: i + 1,
      plan_id: 0,
      name: 'Video Overview',
      type: 'Video',
      small: 'uploads/properties/video/video-1.mp4'
    });

    for (let j = 0; j < imageCount[i]; j++) {
      await models_0.PropertyGallery.create({
        property_id: i + 1,
        plan_id: 0,
        type: 'Image',
        small: 'uploads/properties/small/' + name[i] + '-' + (j + 1) + '.jpg',
        medium: 'uploads/properties/medium/' + name[i] + '-' + (j + 1) + '.jpg',
        big: 'uploads/properties/big/' + name[i] + '-' + (j + 1) + '.jpg'
      });
    }
  }
};

const showJsonUpload = async function (req, res) {
  // await seedPropertyDetail();
  // await seedGallery();
  res.setHeader("Content-Type", "text/html");
  res.send(html);
};
const jsonUpload = function (req, res) {
  const scrape = req.files.scrape;
  const data = JSON.parse(scrape.data.toString());

  for (let companyName in data) {
    models_0.Company.findOrCreate({
      where: {
        name: companyName
      }
    }).then(([company]) => {
      for (let uuid in data[companyName]) {
        const propertyInformation = data[companyName]['Property Information'];
        const marketLandValuation = data[companyName]['Market Land Valuation'];
      }
    });
  }
};
const controller = {
  showJsonUpload,
  jsonUpload
};
/* harmony default export */ var jsonUploadController = (controller);
// CONCATENATED MODULE: ./routes/jsonUpload.js


const jsonUpload_router = external_express_default.a.Router();
jsonUpload_router.get('/', showJsonUpload);
jsonUpload_router.post('/', jsonUpload);
/* harmony default export */ var routes_jsonUpload = (jsonUpload_router);
// CONCATENATED MODULE: ./middlewares/jwt-auth.js



/* harmony default export */ var jwt_auth = ((req, res, next) => {
  const token = req.headers["x-access-token"] || req.headers["authorization"];

  if (!token) {
    console.log('No token given');
    next();
    return;
  }

  try {
    //if can verify the token, set req.user and pass to next middleware
    const decoded = external_jsonwebtoken_default.a.verify(token, process.env.JWT_SECRET);
    models_0.User.findByPk(decoded.data.uid).then(user => {
      req.user = user;
      next();
    }).catch(err => {
      next();
    });
  } catch (ex) {
    console.log(ex);
    if (external_http_["request"].user) delete external_http_["request"].user;
    next();
  }
});
// CONCATENATED MODULE: ./app.js

/*------------  Set up components and variables ----------------- */




















external_dotenv_default.a.config();
const app = external_express_default()();
const port = process.env.PORT || 3000;
const environment = "production";
app.use(external_body_parser_default.a.urlencoded({
  extended: true
}));
app.use(external_express_fileupload_default()({
  useTempFiles: true,
  tempFileDir: './tmp'
}));
app.use(external_body_parser_default.a.json());
app.use(external_compression_default()());
app.use(external_morgan_default()("dev"));
app.use(external_cors_default()());
app.use(external_express_default.a.static(external_path_default.a.resolve(__dirname, "./dist")));
app.use(jwt_auth);
app.use("/auth", auth);
app.use("/users", routes_user);
app.use("/properties", routes_property);
app.use("/property-types", routes_propertyType);
app.use("/property-status", routes_propertyStatus);
app.use("/companies", routes_company);
app.use("/json-upload", routes_jsonUpload);
app.use("/favorites", favorite);
app.use("/attachments", routes_attachment);
app.use('/uploads', external_express_default.a.static('uploads'));
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
const server = external_http_default.a.Server(app); // catch 404 and forward to error handler

app.use(function (req, res, next) {
  var err = new Error("Not Found");
  err.status = 404;
  next(err);
}); // error handler

app.use(function (err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get("env") === "development" ? err : {}; // render the error page

  res.status(err.status || 500);
  res.json({
    message: res.locals.message,
    error: {}
  }); //  res.render('error');
});
/**
 * Listen on provided port, on all network interfaces.
 */

var debug = __webpack_require__(19)('mean-app:server');

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

  var bind = typeof port === "string" ? "Pipe " + port : "Port " + port; // handle specific listen errors with friendly messages

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

/***/ })
/******/ ]);