export default (sequelize, Sequelize) => {
  class PropertyFeature extends Sequelize.Model {
  }

  const fields = {
    name: Sequelize.STRING,
  }

  const options = {
    sequelize
  }

  PropertyFeature.init(fields, options);

  return PropertyFeature;
}
