import { toTypeObject } from './helpers';

const _type = [
  'Admin',
  'CompanyAdmin',
  'PropertyManager',  // agent
  'Realtor',          // agent
  'Rentor',
  'Buyer'
]

export const userType = toTypeObject(_type);

export const agentType = toTypeObject([_type[2], _type[3]]);

export default (sequelize, Sequelize) => {
  class User extends Sequelize.Model {
  }

  const fields = {
    email: Sequelize.STRING,
    password: Sequelize.STRING,
    company_id: Sequelize.INTEGER,
    user_type: Sequelize.ENUM(_type),
    first_name: Sequelize.STRING,
    last_name: Sequelize.STRING
  }

  const options = {
    sequelize
  }

  User.init(fields, options);

  User.type = userType;

  User.agentType = agentType;

  User.associate = function (models) {
    User.hasOne(models.UserProfile, {
      as: 'Profile', foreignKey: 'user_id'
    });

    User.belongsTo(models.Company, {
      as: 'Company', foreignKey: 'company_id'
    });

    User.belongsToMany(models.Property, {
      through: 'user_favorites',
      as: {
        singular: 'favorite',
        plural: 'favorites'
      },
      foreignKey: 'user_id',
      otherKey: 'property_id',
      timestamps: false
    });
  }

  return User;
}
