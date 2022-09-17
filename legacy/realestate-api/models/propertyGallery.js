import fs from 'fs';
import { toTypeObject } from './helpers';

const _type = [
  'Image', 'Video'
]

export const galleryType = toTypeObject(_type);

export default (sequelize, Sequelize) => {
  class PropertyGallery extends Sequelize.Model {
  }

  const fields = {
    property_id: Sequelize.INTEGER,
    plan_id: Sequelize.INTEGER,
    type: Sequelize.ENUM('Image', 'Video'),
    name: Sequelize.STRING,
    attachment_id: Sequelize.INTEGER
  }

  const options = {
    sequelize
  }

  PropertyGallery.init(fields, options);

  PropertyGallery.associate = function (models) {
    PropertyGallery.belongsTo(models.Attachment, {
      as: 'Attachment', foreignKey: 'attachment_id'
    });
  }

  PropertyGallery.type = galleryType;

  return PropertyGallery;
}
