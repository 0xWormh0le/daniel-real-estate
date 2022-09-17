export default (sequelize, Sequelize) => {
  class UserProfile extends Sequelize.Model {
  }

  const fields = {
    user_id: Sequelize.INTEGER,
    description: Sequelize.STRING,
    organization: Sequelize.STRING,
    phone: Sequelize.STRING,
    facebook: Sequelize.STRING,
    twitter: Sequelize.STRING,
    linkedin: Sequelize.STRING,
    instagram: Sequelize.STRING,
    website: Sequelize.STRING,
    ratings_count: Sequelize.INTEGER,
    ratings_value: Sequelize.INTEGER,
    image: Sequelize.STRING,
    cc_num: Sequelize.STRING,
    cvv: Sequelize.INTEGER,
    expire_date: Sequelize.DATE,
  }

  const options = {
    sequelize
  }

  UserProfile.init(fields, options);

  return UserProfile;
}
