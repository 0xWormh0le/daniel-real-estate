import express from 'express';
import {
  getAttachment,
  createAttachment,
  deleteAttachment,
} from 'controllers/attachmentController';


const router = express.Router();

router.get("/:id", getAttachment);

router.post("/", createAttachment);

router.delete("/:id", deleteAttachment);

export default router;
