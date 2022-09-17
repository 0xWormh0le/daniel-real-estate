import models from 'models'
import hash from 'object-hash';
import Jimp from 'jimp';
import fs from 'fs';
import cryptoRandomString from 'crypto-random-string';
import { Op } from 'sequelize'
import { getUserFormatted } from '../libs/formatting'


const getUser = function (req, res, next) {
  const id = req.params.id;

  if (req.user.user_type !== 'Admin' &&
      req.user.user_type !== 'CompanyAdmin' &&
      req.user.id !== id) {
    return res.status(404, 'Unauthorized')
  }

  models.User.findByPk(id)
    .then(user => {
      if (!user) {
        return Promise.reject(404);
      }

      if (req.user.user_type === 'CompanyAdmin' &&
          req.user.company_id !== user.company_id) {
        return Promise.reject(404);
      }

      return getUserFormatted(user);
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
}

const signup = function (req, res, next) {
  const image = req.files && req.files.image
  const {
    email,
    user_type,
    first_name,
    last_name,
    description,
    organization,
    password,
    phone,
    facebook,
    twitter,
    linkedin,
    instagram,
    website
  } = req.body

  if (!email) {
    return res.status(400).send('Email is required')
  } else if (!user_type) {
    return res.status(400).send('User type is required')
  } else if (user_type !== 'Buyer' && user_type !== 'Rentor') {
    return res.status(400).send('Cannot signup as an user other than buyer or rentor')
  }

  const where = { email }
  models.User.findOne({ where })
    .then(emailDuplicated => {
      if (emailDuplicated) {
        return Promise.reject({ code: 400, message: 'Duplicated Email' })
      } else {
        return models.User.create()
      }
    }).then(user => {
      if (!user) {
        return Promise.reject({ code: 500, message: 'Internal server error' })
      } else {
        return Promise.all([user, models.UserProfile.create()])
      }
    }).then(([user, profile]) => {
      user.password = hash(password === undefined ? '123456789' : password)
      user.email = email
      user.user_type = user_type

      if (first_name !== undefined) {
        user.first_name = first_name
      }

      if (last_name !== undefined) {
        user.last_name = last_name
      }

      if (description !== undefined) {
        profile.description = description
      }

      if (organization !== undefined) {
        profile.organization = organization
      }

      if (phone !== undefined) {
        profile.phone = phone
      }

      if (facebook !== undefined) {
        profile.facebook = facebook
      }

      if (twitter !== undefined) {
        profile.twitter = twitter
      }

      if (linkedin !== undefined) {
        profile.linkedin = linkedin
      }

      if (instagram !== undefined) {
        profile.instagram = instagram
      }

      if (website !== undefined) {
        profile.website = website
      }

      if (image) {
        return Promise.all([
          user.save(),
          profile,
          Jimp.read(image.tempFilePath)
        ])
      } else {
        return Promise.all([
          user.save(),
          profile
        ])
      }
    }).then(([user, profile, lenna]) => {
      if (lenna) {
        const avatar_path = 'uploads/user-avatars/' + cryptoRandomString({ length: 15 }) + '.jpg'
        lenna.resize(256, 256).quality(60).write(avatar_path);
        profile.image && fs.unlink(profile.image, () => {})
        profile.image = avatar_path;
        image && fs.unlink(image.tempFilePath, () => {})
      }
      
      profile.user_id = user.id
      return profile.save()
    }).then(profile => {
      return res.json({ code: 'success', id: profile.user_id });
    }).catch(e => {
      console.log(e)
      const { code, message } = e
      console.log(code, message)
      res.status(code).send(message);
    })
}

const createUser = function (req, res, next) {
  const image = req.files && req.files.image
  const {
    id,
    email,
    company_id,
    user_type,
    first_name,
    last_name,
    description,
    organization,
    phone,
    facebook,
    twitter,
    linkedin,
    instagram,
    website
  } = req.body

  if (req.user.user_type === 'Admin') {
    if (!id) {
      if (!email) {
        return res.status(400).send('email is required')
      } else if (!company_id) {
        return res.status(400).send('company_id required')
      } else if (!first_name) {
        return res.status(400).send('first_name required')
      } else if (!last_name) {
        return res.status(400).send('last_name required')
      }
    }
  } else if (req.user.user_type === 'CompanyAdmin') {
    if (user_type === 'Admin') {
      return res.status(400).send('Cannot create admin')
    } else if (id) {
      if (req.user.company_id !== parseInt(company_id)) {
        return res.status(400).send('Invalid company_id')
      }
    } else {
      if (!email) {
        return res.status(400).send('email is required')
      } else if (!first_name) {
        return res.status(400).send('first_name required')
      } else if (!last_name) {
        return res.status(400).send('last_name required')
      } else if (company_id && parseInt(company_id) !== req.user.company_id) {
        return res.status(400).send('Invalid company_id')
      }
    }
  } else if (user_type === 'Admin' || user_type === 'CompanyAdmin') {
    return res.status(400).send('Cannot create Admin or Company Admin')
  } else if (!id) {
    return res.status(400).send('User creation unauthorized')
  } else if (req.user.id !== parseInt(id)) {
    return res.status(400).send('User modification unauthorized')
  } else if (company_id && parseInt(company_id) !== req.user.company_id) {
    return res.status(400).send('Invalid company_id')
  } else if (user_type && user_type !== req.user.user_type) {
    return res.status(400).send('Invalid user_type')
  } else if (email && email !== req.user.email) {
    return res.status(400).send('Invalid email')
  }

  const promises = []

  if (company_id) {
    promises.push(models.Company.findByPk(company_id))
  } else {
    promises.push(true)
  }

  if (!id) {
    const where = { email }
    promises.push(models.User.findOne({ where }))
  } else {
    promises.push(false)
  }

  Promise.all(promises)
    .then(([ company, emailDuplicated ]) => {
      if (!company) {
        return Promise.reject({ code: 400, message: 'Invalid company_id' })
      }
      if (emailDuplicated) {
        return Promise.reject({ code: 400, message: 'Duplicated Email' })
      }

      return id
        ? models.User.findByPk(id)
        : models.User.create()
    }).then(user => {
      if (user) {
        if (req.user.user_type === 'CompanyAdmin' &&
            user.company_id !== req.user.company_id &&
            id) {
          return Promise.reject({ code: 404, message: 'Unauthorized user modification' })
        }
      } else if (id) {
        return Promise.reject({ code: 404, message: 'User not found' })
      } else {
        return Promise.reject({ code: 500, message: 'Internal server error' })
      }

      if (id) {
        return Promise.all([user, user.getProfile()])
      } else {
        return Promise.all([user, models.UserProfile.create()])
      }
    }).then(([user, profile]) => {
      if (!id) {
        user.password = hash('123456789')
        user.user_type = 'Realtor'
        user.email = email
      }

      if (company_id !== undefined) {
        user.company_id = company_id;
      }

      if (user_type !== undefined) {
        user.user_type = user_type
      }

      if (first_name !== undefined) {
        user.first_name = first_name
      }

      if (last_name !== undefined) {
        user.last_name = last_name
      }

      if (description !== undefined) {
        profile.description = description
      }

      if (organization !== undefined) {
        profile.organization = organization
      }

      if (phone !== undefined) {
        profile.phone = phone
      }

      if (facebook !== undefined) {
        profile.facebook = facebook
      }

      if (twitter !== undefined) {
        profile.twitter = twitter
      }

      if (linkedin !== undefined) {
        profile.linkedin = linkedin
      }

      if (instagram !== undefined) {
        profile.instagram = instagram
      }

      if (website !== undefined) {
        profile.website = website
      }

      if (image) {
        return Promise.all([
          user.save(),
          profile,
          Jimp.read(image.tempFilePath)
        ])
      } else {
        return Promise.all([
          user.save(),
          profile
        ])
      }
    }).then(([user, profile, lenna]) => {
      if (lenna) {
        const avatar_path = 'uploads/user-avatars/' + cryptoRandomString({ length: 15 }) + '.jpg'
        lenna.resize(256, 256).quality(60).write(avatar_path);
        profile.image && fs.unlink(profile.image, () => {})
        profile.image = avatar_path;
        image && fs.unlink(image.tempFilePath, () => {})
      }
      
      profile.user_id = user.id
      return profile.save()
    }).then(profile => {
      return res.json({ code: 'success', id: profile.user_id });
    }).catch(e => {
      console.log(e)
      const { code, message } = e
      console.log(code, message)
      res.status(code).send(message);
    })
}


const deleteUser = function (req, res, next) {
  const id = req.params.id;
  const where = { user_id: id};

  if (req.user.user_type !== 'Admin' &&
      req.user.user_type !== 'CompanyAdmin' &&
      req.user.id !== id) {
    return res.status(404, 'Unauthorized')
  }

  models.User.findByPk(id)
    .then(user => {
      if (req.user.user_type === 'CompanyAdmin' &&
          req.user.company_id !== user.company_id) {
        return Promise.reject(500)
      }

      return Promise.all([
        models.User.destroy({ where: { id } }),
        models.UserProfile.destroy({ where })
      ])
    }).then(() => {
      return res.json({ code: 'success' })
    }).catch(err => {
      console.log(err);
      return res.status(500).send(err);
    });
}


const changePassword = function (req, res, next) {
  const { currentPwd, newPwd } = req.body
  const id = req.params.id;

  if (req.user.user_type !== 'Admin' &&
      req.user.user_type !== 'CompanyAdmin' &&
      req.user.id !== id) {
    return res.status(404, 'Unauthorized')
  }

  const where = {
    id,
    password: hash(currentPwd)
  }

  models.User.findOne({ where })
    .then(user => {
      if (req.user.user_type === 'CompanyAdmin' &&
          req.user.company_id !== user.company_id) {
        return Promise.reject(401)
      }
      
      user.password = hash(newPwd)
      return user.save()
    })
    .then(() => res.json({ code: 'success' }))
    .catch(() => {
      res.status(401).send('Invalid password')
    })
}


const searchUser = function (req, res, next) {
  const { company, type } = req.query
  const where = {}

  if (company) {
    where.company_id = company;
  }

  if (type) {
    where.user_type = type;
    if (type === 'agent') {
      where.user_type = {
        [Op.or]: ['PropertyManager', 'Realtor']
      }
    }
  }

  models.User.findAll({ where })
    .then(users => Promise.all(
      users.map(getUserFormatted)
    ))
    .then(data => res.json(data))
    .catch(err => {
      console.log(err);
      res.status(500).send(err);
    });
}

export {
  searchUser,
  getUser,
  createUser,
  changePassword,
  signup,
  deleteUser
};
