import fs from "fs"

export default (sequelize, Sequelize) => {
  class Company extends Sequelize.Model {
  }

  const fields = {
    name: Sequelize.STRING,
    address1: Sequelize.STRING,
    address2: Sequelize.STRING,
    logo: Sequelize.STRING,
    city: Sequelize.STRING,
    state: Sequelize.INTEGER,
    zip: Sequelize.STRING,
    phone1: Sequelize.STRING,
    phone2: Sequelize.STRING,
    fax: Sequelize.STRING,
    email: Sequelize.STRING,
    description: Sequelize.STRING,
    about_us: Sequelize.STRING
  }

  const options = {
    sequelize
  }

  Company.init(fields, options);

  Company.addHook('beforeDestroy', (company, options) => {
    company.logo && fs.unlink(company.logo, () => {});
  });

  return Company;
}
