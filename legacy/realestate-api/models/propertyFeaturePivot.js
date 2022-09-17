export default (sequelize, Sequelize) => {
  class PropertyFeaturePivot extends Sequelize.Model {
  }

  const fields = {
    property_id: Sequelize.INTEGER,
    property_feature_id: Sequelize.INTEGER
  }

  const options = {
    sequelize,
    tableName: 'property_feature_pivot'
  }

  PropertyFeaturePivot.init(fields, options);

  return PropertyFeaturePivot;
}
