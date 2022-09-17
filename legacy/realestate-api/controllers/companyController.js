import cryptoRandomString from 'crypto-random-string';
import Jimp from 'jimp'
import fs from 'fs'
import models from 'models'


const getCompanyFormatted = function (company) {
  return {
    id: company.id,
    name: company.name,
    address1: company.address1,
    address2: company.address2,
    logo: company.logo,
    city: company.city,
    state: company.state,
    zip: company.zip,
    phone1: company.phone1,
    phone2: company.phone2,
    fax: company.fax,
    email: company.email,
    description: company.description
  }
}

const searchCompany = function (req, res, next) {
  models.Company.findAll()
    .then(companies => companies.map(getCompanyFormatted))
    .then(data => res.json(data))
    .catch(err => {
      console.log(err);
      res.status(500).send(err);
    });
}


const getCompany = function (req, res, next) {
  const id = req.params.id;

  models.Company.findByPk(id)
    .then(property => {
      return property || Promise.reject(404);
    })
    .then(getCompanyFormatted)
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


const deleteComapny = function (req, res, next) {
  const id = req.params.id;
  
  models.Company.destroy({
    where: { id },
    individualHooks: true
  })
    .then(() => {
      return res.json({ code: 'success' })
    })
    .catch(err => {
      console.log(err);
      return res.status(500).send(err);
    })
}


const createComapany = function (req, res, next) {
  const { id } = req.body;
  const attachment = req.files && req.files.attachment;
  const fields = [
    'name', 'address1', 'address2', 'logo', 'city', 'state', 'zip',
    'phone1', 'phone2', 'fax', 'email', 'description', 'about_us'
  ]

  const company = id
    ? models.Company.findByPk(id)
    : models.Company.create()

  company.then(cp => {
    if (!cp) {
      if (id) {
        return Promise.reject(404);
      } else {
        return Promise.reject(500);
      }
    }

    fields.forEach(f => {
      if (req.body[f] !== undefined) {
        cp[f] = req.body[f];
      }
    });
    
    return Promise.all([
      cp.save(),
      attachment && attachment.size && Jimp.read(attachment.tempFilePath)
    ]);
  })
  .then(([cp, lenna]) => {
    if (!lenna) {
      return true;
    }

    const logo_file = 'uploads/company-logos/' + cryptoRandomString({ length: 15 }) + '.jpg';

    lenna.resize(256, 256)
      .quality(60)
      .write(logo_file);

    cp.logo = logo_file;
    return cp.save();
  })
  .then(cp => res.json({ code: 'success', id: cp.id }))
  .catch(err => {
    if (err === 404) {
      res.status(404).send('No Data');
    } else {
      console.log(err);
      return res.status(500).send(err);
    }
  })
  .finally(() => {
    attachment && fs.unlink(attachment.tempFilePath, () => {})
  })
}


export {
  getCompany,
  searchCompany,
  createComapany,
  deleteComapny,
};
