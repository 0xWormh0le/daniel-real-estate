import models from 'models'


const getPropertyStatus = function (status) {
  return {
    id: status.id,
    name: status.name
  }
}


const searchPropertyStatus = function (req, res, next) {
  models.PropertyStatus.findAll()
    .then(status => Promise.all(
      status.map(getPropertyStatus)
    ))
    .then(data => res.json(data))
    .catch(err => {
      console.log(err);
      res.status(500).send(err);
    });
}


const createPropertyStatus = function (req, res, next) {
  const { id, name } = req.body;

  const getStatus = id
    ? models.PropertyStatus.findByPk(id)
    : models.PropertyStatus.create()

    getStatus.then(status => {
    if (!status) {
      if (id) {
        return Promise.reject(404);
      } else {
        return Promise.reject(500);
      }
    }

    if (name !== undefined) {
      status.name = name;
    }

    return status.save();
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

const deletePropertyStatus = function (req, res, next) {
  const id = req.params.id;
  const where = { property_status_id: id }

  Promise.all([
    models.PropertyStatus.destroy({ where: { id } }),
    models.PropertyStatusPivot.destroy({ where })
  ]).then(() => {
    return res.json({ code: 'success' })
  }).catch(err => {
    console.log(err);
    return res.status(500).send(err);
  });
}


export {
  searchPropertyStatus,
  createPropertyStatus,
  deletePropertyStatus
};
