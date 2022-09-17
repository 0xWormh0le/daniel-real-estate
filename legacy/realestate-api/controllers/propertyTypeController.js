import models from 'models'


const getPropertyTypeFormatted = function (type) {
  return {
    id: type.id,
    name: type.name
  }
}


const searchPropertyType = function (req, res, next) {
  models.PropertyType.findAll()
    .then(types => Promise.all(
      types.map(getPropertyTypeFormatted)
    ))
    .then(data => res.json(data))
    .catch(err => {
      console.log(err);
      res.status(500).send(err);
    });
}


const createPropertyType = function (req, res, next) {
  const { id, name } = req.body;

  const getType = id
    ? models.PropertyType.findByPk(id)
    : models.PropertyType.create()

    getType.then(type => {
    if (!type) {
      if (id) {
        return Promise.reject(404);
      } else {
        return Promise.reject(500);
      }
    }

    if (name !== undefined) {
      type.name = name;
    }

    return type.save();
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

const deletePropertyType = function (req, res, next) {
  const id = req.params.id;

  Promise.all([
    models.PropertyType.destroy({ where: { id } }),
  ]).then(() => {
    return res.json({ code: 'success' })
  }).catch(err => {
    console.log(err);
    return res.status(500).send(err);
  });
}


export {
  searchPropertyType,
  createPropertyType,
  deletePropertyType
};
