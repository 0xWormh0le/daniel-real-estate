import express from 'express';
import {
  getCompany,
  searchCompany,
  createComapany,
  deleteComapny
} from 'controllers/companyController';


const router = express.Router();

router.get("/:id", getCompany);

router.get("/", searchCompany);

router.post("/", createComapany);

router.delete("/:id", deleteComapny);

export default router;
