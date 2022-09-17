import dotenv from 'dotenv';
import Sequelize from 'sequelize';

import user from './user';
import userProfile from './userProfile';
import company from './company';
import compare from './compare';
import role from './role';
import property from './property';
import propertyDetail from './propertyDetail';
import propertyType from './propertyType';
import propertyStatus from './propertyStatus';
import propertyFeature from './propertyFeature';
import propertyGallery from './propertyGallery';
import propertyPlan from './propertyPlan';
import propertyAdditionalFeature from './propertyAdditionalFeature';
import propertyFeaturePivot from './propertyFeaturePivot';
import propertyStatusPivot from './propertyStatusPivot';
import attachment from './attachment';


dotenv.config();

const dbHost = process.env.DB_HOST;
const dbPassword = process.env.DB_PASSWORD;
const dbName = process.env.DB_NAME;
const dbPort = process.env.DB_PORT;
const dbUser = process.env.DB_USER;

const sequelize = new Sequelize(
  `mysql://${dbUser}:${dbPassword}@${dbHost}:${dbPort}/${dbName}`, {
    pool: { },
    define: {
      underscored: true
    }
  }
);

const User = user(sequelize, Sequelize);
const UserProfile = userProfile(sequelize, Sequelize);
const Company = company(sequelize, Sequelize);
const Compare = compare(sequelize, Sequelize);
const Role = role(sequelize, Sequelize);
const Property = property(sequelize, Sequelize);
const PropertyDetail = propertyDetail(sequelize, Sequelize);
const PropertyType = propertyType(sequelize, Sequelize);
const PropertyStatus = propertyStatus(sequelize, Sequelize);
const PropertyFeature = propertyFeature(sequelize, Sequelize);
const PropertyGallery = propertyGallery(sequelize, Sequelize);
const PropertyPlan = propertyPlan(sequelize, Sequelize);
const PropertyAdditionalFeature = propertyAdditionalFeature(sequelize, Sequelize);
const PropertyFeaturePivot = propertyFeaturePivot(sequelize, Sequelize);
const PropertyStatusPivot = propertyStatusPivot(sequelize, Sequelize);
const Attachment = attachment(sequelize, Sequelize);

const models = {
  User,
  UserProfile,
  Company,
  Compare,
  Role,
  Property,
  PropertyDetail,
  PropertyType,
  PropertyStatus,
  PropertyFeature,
  PropertyGallery,
  PropertyPlan,
  PropertyAdditionalFeature,
  PropertyFeaturePivot,
  PropertyStatusPivot,
  Attachment
}

Object.keys(models).forEach(name => {
  if (models[name].associate) {
    models[name].associate(models);
  }
})

export default models;
