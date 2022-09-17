import cryptoRandomString from 'crypto-random-string';
import Jimp from 'jimp';
import fs from 'fs';
import models from 'models';

const SMALL_IMAGE_SIZE = 256
const MEDIUM_IMAGE_SIZE = 512
const BIG_IMAGE_SIZE = 1024

const getAttachment = function (req, res, next) {
  const id = req.params.id;

  models.Attachment.findByPk(id)
    .then(attachment => {
      if (!attachment) {
        return Promise.reject(404);
      }
      
      return {
        id: attachment.id,
        ... attachment.getFullUrls()
      }
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


const createAttachment = function (req, res, next) {
  const attachment = req.files && req.files.attachment;
  const { id, link } = req.body;

  const getAttachment = id
    ? models.Attachment.findByPk(id)
    : models.Attachment.create()

  getAttachment.then(att => {
    if (!att) {
      if (id) {
        return Promise.reject(404);
      } else {
        return Promise.reject(500);
      }
    }

    if (attachment) {
      return Promise.all([att, Jimp.read(attachment.tempFilePath)])
    } else {
      att.small = link
      return [ att ]
    }
  }).then(([att, lenna]) => {
    if (lenna) {
      const small_file = 'uploads/galleries/small/' + cryptoRandomString({ length: 15 }) + '.jpg';
      const medium_file = 'uploads/galleries/medium/' + cryptoRandomString({ length: 15 }) + '.jpg';
      const big_file = 'uploads/galleries/big/' + cryptoRandomString({ length: 15 }) + '.jpg';
      
      lenna.resize(SMALL_IMAGE_SIZE, SMALL_IMAGE_SIZE)
        .quality(60)
        .write(small_file);
  
      lenna.resize(MEDIUM_IMAGE_SIZE, MEDIUM_IMAGE_SIZE)
        .quality(60)
        .write(medium_file);
  
      lenna.resize(BIG_IMAGE_SIZE, BIG_IMAGE_SIZE)
        .quality(60)
        .write(big_file);
  
      att.small = small_file;
      att.medium = medium_file;
      att.big = big_file;
    }

    return att.save();
  }).then(att => {
    return res.json({ code: 'success', id: att.id });
  }).catch(err => {
    if (err === 404) {
      res.status(404).send('No Data');
    } else {
      console.log(err);
      return res.status(500).send(err);
    }
  }).finally(() => {
    attachment && fs.unlink(attachment.tempFilePath, () => {});
  })
}


const deleteAttachment = function (req, res, next) {
  const id = req.params.id;

  models.Attachment
    .destroy({ where: { id } })
    .then(() => {
      return res.json({ code: 'success' })
    }).catch(err => {
      console.log(err);
      return res.status(500).send(err);
    });
}


export {
  getAttachment,
  createAttachment,
  deleteAttachment
};
