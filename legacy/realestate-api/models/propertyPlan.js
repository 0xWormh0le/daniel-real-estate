export default (sequelize, Sequelize) => {
  class PropertyPlan extends Sequelize.Model {
  }

  const fields = {
    property_id: Sequelize.INTEGER,
    name: Sequelize.STRING,
    description: Sequelize.STRING,
    area: Sequelize.INTEGER,
    rooms: Sequelize.INTEGER,
    baths: Sequelize.INTEGER
  }

  const options = {
    sequelize
  }

  PropertyPlan.init(fields, options);

  return PropertyPlan;
}
