import hash from 'object-hash';
import models from 'models'

import { createJWToken } from '../libs/auth'


const authenticate = function (req, res, next) {
  const { email, password } = req.body;
  const where = {
    email: email,
    password: hash(password)
  }

  models.User.findOne({where: where})
    .then(user => {
      if (user) {
        res.status(200).json({
          success: true,
          user: {
            token: createJWToken({
              sessionData: user,
              maxAge: 3600
            }),
            id: user.id,
            email: user.email,
            company_id: user.company_id,
            user_type: user.user_type,
            first_name: user.first_name,
            last_name: user.last_name
          }
        })
      } else {
        res.status(404).json({
          success: false
        })
      }
    })
    .catch((e) => {
      console.log(e);
      return res.status(401).send('auth failed');
    })
}

const checkToken = function (req, res, next) {
  res.status(200).json({success: true})
}

export {
  authenticate,
  checkToken
};
