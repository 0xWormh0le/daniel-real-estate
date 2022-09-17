export default (sequelize, Sequelize) => {
  class PropertyType extends Sequelize.Model { }

  const fields = {
    name: Sequelize.STRING,
  }

  const options = {
    sequelize
  }

  PropertyType.init(fields, options);

  return PropertyType;
}
