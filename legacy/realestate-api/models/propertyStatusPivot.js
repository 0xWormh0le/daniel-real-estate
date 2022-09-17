export default (sequelize, Sequelize) => {
  class PropertyStatusPivot extends Sequelize.Model {
  }

  const fields = {
    property_id: Sequelize.INTEGER,
    property_status_id: Sequelize.INTEGER
  }

  const options = {
    sequelize,
    tableName: 'property_status_pivot'
  }

  PropertyStatusPivot.init(fields, options);

  return PropertyStatusPivot;
}
