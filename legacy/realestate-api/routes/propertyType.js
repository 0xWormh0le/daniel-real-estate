import express from 'express';
import {
  searchPropertyType,
  createPropertyType,
  deletePropertyType,
} from 'controllers/propertyTypeController';


const router = express.Router();

router.get("/", searchPropertyType);

router.post("/", createPropertyType);

router.delete("/:id", deletePropertyType);

export default router;
