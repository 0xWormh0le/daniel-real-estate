import express from 'express';
import {
  searchPropertyStatus,
  createPropertyStatus,
  deletePropertyStatus,
} from 'controllers/propertyStatusController';


const router = express.Router();

router.get("/", searchPropertyStatus);

router.post("/", createPropertyStatus);

router.delete("/:id", deletePropertyStatus);

export default router;
