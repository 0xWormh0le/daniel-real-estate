import models from 'models';
import {getPropertyFormatted} from 'libs/formatting';

const getFavorites = function (req, res, next) {
  if (req.user == undefined) {
    res.status(401).send('');
    return;
  }
  req.user.getFavorites()
    .then(properties => Promise.all(
      properties.map(getPropertyFormatted)
    )).then(data => {
      res.json(data)
    })
    .catch(err => {
      console.log(err);
      // res.status(500).send(err);
    });
}

const addToFavorites = function(req, res, next) {
  const id = req.body.id;
  models.Property.findByPk(id)
    .then(property => {
      console.log(property);
      req.user.addFavorite(property)
    })
    .then(() => {
      return res.json({ code: 'success' });
    }).catch(err => {
      res.status(500).send(err);
    });
}

const deleteFavorite = function (req, res, next) {
  const id = req.params.id;

  models.Property.findByPk(id)
    .then(property => {
      req.user.removeFavorite(property);
      return res.json({ code: 'success' });
    }).catch(err => {
      res.status(500).send(err);
    });
}



export {
  getFavorites,
  addToFavorites,
  deleteFavorite,
};
