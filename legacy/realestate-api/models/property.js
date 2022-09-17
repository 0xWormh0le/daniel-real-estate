import { galleryType } from './propertyGallery'

export default (sequelize, Sequelize) => {
  class Property extends Sequelize.Model {
    getDetail = function () {
      const data = {}
      
      return this.getPropertyDetails()
        .then(detail => {
          detail.forEach(({ name, value }) => {
            switch (name) {
              case 'neighborhood':
              case 'street':
                data[name] = value.split('|');
                break;
              default:
                data[name] = value;
            }
          });
          
          data.formattedAddress = `${data.address}, ${data.city}, ${data.state} ${data.zipcode}, USA`;
          return data;
        });
    }

    getImages = function () {
      return this.getGalleries({
        where: { plan_id: 0, type: galleryType.image }
      });
    }
  }

  const fields = {
    title: Sequelize.STRING,
    description: Sequelize.STRING,
    featured: Sequelize.INTEGER,
    user_id: Sequelize.INTEGER,
    property_type_id: Sequelize.INTEGER
  }
  
  const options = {
    sequelize
  }
  
  Property.init(fields, options);
  
  Property.associate = function (models) {
    Property.hasMany(models.PropertyDetail);

    Property.belongsTo(models.User, {
      as: 'User', foreignKey: 'user_id'
    });

    Property.belongsTo(models.PropertyType, {
      as: 'Type', foreignKey: 'property_type_id'
    });
    
    Property.hasMany(models.PropertyGallery, {
      as: 'Galleries'
    });

    Property.hasMany(models.PropertyPlan, {
      as: 'Plans'
    });

    Property.hasMany(models.PropertyAdditionalFeature, {
      as: 'AdditionalFeatures'
    });

    Property.belongsToMany(models.PropertyStatus, {
      as: 'Status',
      through: 'property_status_pivot'
    });
    
    Property.belongsToMany(models.PropertyFeature, {
      as: 'Features',
      through: 'property_feature_pivot'
    });
  }

  return Property;
}
