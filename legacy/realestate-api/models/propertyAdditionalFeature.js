export default (sequelize, Sequelize) => {
  class PropertyAdditionalFeature extends Sequelize.Model {
  }

  const fields = {
    property_id: Sequelize.INTEGER,
    name: Sequelize.STRING,
    value: Sequelize.STRING
  }

  const options = {
    sequelize
  }

  PropertyAdditionalFeature.init(fields, options);

  return PropertyAdditionalFeature;
}
