import { toTypeObject } from './helpers';

const _fields = [
  'uuid', 'type', 'city', 'state', 'zipcode', 'neighborhood', 'street', 'lat', 'lng', 'address',
  'price_dollar_sale', 'price_dollar_rent', 'price_euro_sale', 'price_euro_rent',
  'bedrooms', 'bathrooms', 'garages', 'area', 'year', 'ratings_count', 'ratings_value',
  'published', 'views'
]

export const fields = toTypeObject(_fields);

export default (sequelize, Sequelize) => {
  class PropertyDetail extends Sequelize.Model {
  }

  const fields = {
    property_id: Sequelize.INTEGER,
    name: Sequelize.STRING,
    value: Sequelize.STRING
  }

  const options = {
    sequelize
  }

  PropertyDetail.init(fields, options);

  PropertyDetail.fields = toTypeObject(_fields);

  return PropertyDetail;
}
