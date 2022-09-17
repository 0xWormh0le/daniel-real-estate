export default (sequelize, Sequelize) => {
  class PropertyStatus extends Sequelize.Model {
  }

  const fields = {
    name: Sequelize.STRING,
  }

  const options = {
    sequelize
  }

  PropertyStatus.init(fields, options);

  return PropertyStatus;
}
