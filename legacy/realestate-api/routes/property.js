import express from 'express';
import {
  getProperty,
  searchProperty,
  createProperty,
  deleteProperty,
  createPlan,
  deletePlan,
  createGallery,
  deleteGallery
} from 'controllers/propertyController';
import { authRequired } from 'middlewares/jwt-auth';


const router = express.Router();

router.get("/:id", getProperty);

router.get("/", searchProperty);

router.post("/", authRequired(createProperty));

router.delete("/:id", authRequired(deleteProperty));

router.post("/:property/plans/", authRequired(createPlan));

router.delete("/:property/plans/:id", authRequired(deletePlan));

router.post("/:property/galleries/", authRequired(createGallery));

router.delete("/:property/galleries/:id", authRequired(deleteGallery));

export default router;
