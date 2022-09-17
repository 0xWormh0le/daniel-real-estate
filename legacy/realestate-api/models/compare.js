export default (sequelize, Sequelize) => {
  class Compare extends Sequelize.Model {
  }

  const fields = {
    user_id: Sequelize.INTEGER,
    property_id: Sequelize.INTEGER
  }

  const options = {
    sequelize
  }

  Compare.init(fields, options);

  return Compare;
}
