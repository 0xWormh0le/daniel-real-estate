import express from 'express';
import {
  showJsonUpload,
  jsonUpload
} from 'controllers/jsonUploadController';


const router = express.Router();

router.get('/', showJsonUpload);

router.post('/', jsonUpload);

export default router;
