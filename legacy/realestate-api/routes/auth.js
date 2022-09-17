import express from 'express';
import {
  authenticate,
  checkToken
} from 'controllers/authController';
import { authRequired } from 'middlewares/jwt-auth';


const router = express.Router();

router.post("/auth", authenticate);

router.get("/check-token", authRequired(checkToken))

export default router;
