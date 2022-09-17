import models from 'models';
import camelCase from 'lodash/camelCase';
import {getPropertyFormatted} from 'libs/formatting';


const propertySlides = function (req, res, next) {
  const companyId = req.query.company;
  const propertyTypeId = req.query.propertyType
  const userId = req.query.agent;
  const agentType = req.query.agentType;
  const featured = req.query.featured;
  
  const where = {}
  const include = []

  if (propertyTypeId) {
    where.property_type_id = propertyTypeId;
  }

  if (userId) {
    where.user_id = userId;
  }

  if (featured) {
    where.featured = 1;
  }
  
  if (companyId || agentType) {
    include.push({ association: 'User' });
    
    if (companyId) {
      include[0].where = { company_id: companyId }
    }
  
    if (agentType) {
      include[0].where = { user_type: agentType }
    }
  }

  models.Property.findAll({ where, include })
    .then(properties => Promise.all(
      properties.map(prop => Promise.all([
        prop,
        prop.getDetail(),
        prop.getImages()
      ]))
    ))
    .then(properties => properties.map(([
      prop, detail, galleries
    ]) => {
      const {
        formattedAddress,
        priceDollarSale,
        priceDollarRent,
        priceEuroSale,
        priceEuroRent
      } = detail;
      
      return {
        id: prop.id,
        title: prop.title,
        location: formattedAddress,
        priceDollar: {
          sale: priceDollarSale,
          rent: priceDollarRent
        },
        priceEuro: {
          sale: priceEuroSale,
          rent: priceEuroRent
        },
        image: galleries.length > 0 ? galleries[0].small : undefined
      }
    }))
    .then(data => res.json(data))
    .catch(err => {
      console.log(err);
      res.status(500).send(err);
    });
}

const searchProperty = function (req, res, next) {
  const companyId = req.query.company;
  const propertyTypeId = req.query.propertyType
  const userId = req.query.agent;
  const agentType = req.query.agentType;
  const featured = req.query.featured;
  
  const where = {}
  const include = []

  if (propertyTypeId) {
    where.property_type_id = propertyTypeId;
  }

  if (userId) {
    where.user_id = userId;
  }

  if (featured) {
    where.featured = 1;
  }
  
  if (companyId || agentType) {
    include.push({ association: 'User' });
    
    if (companyId) {
      include[0].where = { company_id: companyId }
    }
  
    if (agentType) {
      include[0].where = { user_type: agentType }
    }
  }

  models.Property.findAll({ where, include })
    .then(properties => Promise.all(
      properties.map(getPropertyFormatted)
    ))
    .then(data => res.json(data))
    .catch(err => {
      console.log(err);
      res.status(500).send(err);
    });
}


const getProperty = function (req, res, next) {
  const id = req.params.id;

  models.Property.findByPk(id)
    .then(property => {
      if (!property) {
        return Promise.reject(404);
      }
      
      return getPropertyFormatted(property);
    })
    .then(data => res.json(data))
    .catch(err => {
      if (err === 404) {
        res.status(404).send('No Data');
      } else {
        console.log(err);
        return res.status(500).send(err);
      }
    });
};


const createPlan = function (req, res, next) {
  const {
    id,
    name,
    description,
    area,
    rooms,
    baths,
    attachment_id
  } = req.body;
  const property = req.params.property

  const getPlan = id
    ? models.PropertyPlan.findByPk(id)
    : models.PropertyPlan.create()

  getPlan.then(plan => {
    if (!plan) {
      if (id) {
        return Promise.reject(404);
      } else {
        return Promise.reject(500);
      }
    }

    if (!id) {
      plan.property_id = property;
    }
    if (name !== undefined) {
      plan.name = name;
    }
    if (description !== undefined) {
      plan.description = description;
    }
    if (area !== undefined) {
      plan.area = area;
    }
    if (rooms !== undefined) {
      plan.rooms = rooms;
    }
    if (baths !== undefined) {
      plan.baths = baths;
    }

    return plan.save();
  }).then(plan => {
    const where = { plan_id: plan.id }
    const defaults = { property_id: plan.property_id }

    if (!attachment_id) {
      return true;
    }

    return models.PropertyGallery
      .findOrCreate({ where, defaults })
      .then(planGallery => {
        planGallery[0].attachment_id = attachment_id;
        return planGallery[0].save();
      });
  }).then(() => {
    return res.json({ code: 'success' });
  }).catch(err => {
    if (err === 404) {
      res.status(404).send('No Data');
    } else {
      console.log(err);
      return res.status(500).send(err);
    }
  }).finally(() => {})
}


const deletePlan = function (req, res, next) {
  const id = req.params.id;

  Promise.all([
    models.PropertyPlan.destroy({ where: { id } }),
    models.PropertyGallery.destroy({
      where: { plan_id: id }
    })
  ]).then(() => {
    return res.json({ code: 'success' })
  }).catch(err => {
    console.log(err);
    return res.status(500).send(err);
  });
}


const createGallery = function (req, res, next) {
  const property = req.params.property
  const { id, type, name, attachment_id } = req.body;

  const getGallery = id
    ? models.PropertyGallery.findByPk(id)
    : models.PropertyGallery.create()

  getGallery.then(gallery => {
    if (!gallery) {
      if (id) {
        return Promise.reject(404);
      } else {
        return Promise.reject(500);
      }
    }

    if (!id) {
      gallery.property_id = property;
    }
    if (name !== undefined) {
      gallery.name = name;
    }
    if (type !== undefined) {
      gallery.type = type;
    }
    gallery.plan_id = 0;

    return Promise.all([
      gallery.save(),
      attachment_id
    ])
  }).then(([gallery, attachment_id]) => {
    if (!attachment_id) {
      return true;
    }

    gallery.attachment_id = attachment_id;

    return gallery.save();
  }).then(() => {
    return res.json({ code: 'success' });
  }).catch(err => {
    if (err === 404) {
      res.status(404).send('No Data');
    } else {
      console.log(err);
      return res.status(500).send(err);
    }
  })
}


const deleteGallery = function (req, res, next) {
  const id = req.params.id;
  const where = { id }

  models.PropertyGallery
    .destroy({ where })
    .then(() => {
      return res.json({ code: 'success' })
    }).catch(err => {
      console.log(err);
      return res.status(500).send(err);
    });
}


const deleteProperty = function (req, res, next) {
  const id = req.params.id;
  const where = { property_id: id }
  
  Promise.all([
    models.Property.destroy({ where: { id } }),
    models.PropertyAdditionalFeature.destroy({ where }),
    models.PropertyDetail.destroy({ where }),
    models.PropertyPlan.destroy({ where }),
    models.PropertyStatusPivot.destroy({ where }),
    models.PropertyFeaturePivot.destroy({ where }),
    models.PropertyGallery.destroy({ where }),
  ])
    .then(() => {
      return res.json({ code: 'success' })
    })
    .catch(err => {
      console.log(err);
      return res.status(500).send(err);
    })
}


const createProperty = function (req, res, next) {
  const {
    id, title, description, featured, user, property_type, // basic
    additional_features, features, status, // associated
    details, // detail
    clear
  } = req.body;

  const property = id
    ? models.Property.findByPk(id)
    : models.Property.create()

  property.then(prop => {
    if (!prop) {
      if (id) {
        return Promise.reject(404);
      } else {
        return Promise.reject(500);
      }
    }

    if (title !== undefined) {
      prop.title = title;
    }
    if (description !== undefined) {
      prop.description = description;
    }
    if (property_type !== undefined) {
      prop.property_type_id = property_type
    }
    if (featured !== undefined) {
      prop.featured = featured;
    }
    if (user !== undefined) { 
      // if (false) { // has modifying user right
      prop.user_id = user;
      // }
    } else {
      prop.user_id = req.user.id;
    }
    
    return prop.save()
  })
  .then(prop => {
    const fields = Object.keys(models.PropertyDetail.fields)
    const detail = Object.keys(details).map(param => {
      if (fields.includes(camelCase(param))) {
        const where = {
          property_id: prop.id,
          name: param
        }
        return models.PropertyDetail
          .findOrCreate({ where })
          .then(([ instance ]) => {
            instance.value = details[param];
            return instance.save();
          })
      } else {
        return true;
      }
    });

    const promises = [prop.id].concat(detail)

    if (id && clear) {
      const where = { property_id: id }
      const deletePlan = models.PropertyPlan.destroy({ where })
      const deleteGallery = models.PropertyGallery.destroy({ where })
      
      promises.push(deletePlan)
      promises.push(deleteGallery)
    }

    if (features !== undefined) {
      const setFeatures =
        models.PropertyFeaturePivot.destroy({
          where: { property_id: prop.id }
        }).then(() => {
          models.PropertyFeaturePivot.bulkCreate(
            features.map(feature => ({
              property_id: prop.id,
              property_feature_id: feature
            }))
          );
        });
      promises.push(setFeatures);
    }

    if (status !== undefined) {
      const setStatus =
        models.PropertyStatusPivot.destroy({
          where: { property_id: prop.id }
        }).then(() => {
          models.PropertyStatusPivot.bulkCreate(
            status.map(st => ({
              property_id: prop.id,
              property_status_id: st
            }))
          );
        });
      promises.push(setStatus);
    }

    if (additional_features !== undefined) {
      const setAdditionalFeatures =
        models.PropertyAdditionalFeature.destroy({
          where: { property_id: prop.id }
        }).then(() => {
          models.PropertyAdditionalFeature.bulkCreate(
            additional_features.map(feature => ({
              property_id: prop.id,
              name: feature.name,
              value: feature.value
            }))
          );
        });
      promises.push(setAdditionalFeatures);
    }

    return Promise.all(promises);
  })
  .then(([ id ]) => res.json({ code: 'success', id }))
  .catch(err => {
    if (err === 404) {
      res.status(404).send('No Data');
    } else {
      console.log(err);
      return res.status(500).send(err);
    }
  });
}


export {
  getProperty,
  searchProperty,
  createProperty,
  deleteProperty,
  createPlan,
  deletePlan,
  createGallery,
  deleteGallery
};
