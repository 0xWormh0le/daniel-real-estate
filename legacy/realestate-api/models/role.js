export default (sequelize, Sequelize) => {
  class Role extends Sequelize.Model {
  }

  const fields = {
    name: Sequelize.STRING,
    description: Sequelize.STRING
  }

  const options = {
    sequelize
  }

  Role.init(fields, options);

  return Role;
}
