import express from 'express';
import {
  searchUser,
  getUser,
  createUser,
  signup,
  deleteUser,
  changePassword
} from '../controllers/userController';
import { authRequired } from 'middlewares/jwt-auth';


const router = express.Router();


router.get("/", searchUser);

router.get("/:id", getUser);

router.post("/signup", signup);

router.post("/", authRequired(createUser));

router.post("/:id/change-pwd", authRequired(changePassword));

router.delete("/:id", authRequired(deleteUser));


// /// USER ROUTES ///
// /* GET request for creating a user. NOTE This must come before route that displays user (uses id) */
// router.get('/create', user_controller.user_create_get);

// /* POST request for creating user. */
// router.post('/:companyId', user_controller.user_create_post);

// /* GET request to delete user. */
// router.get("/:id/:companyId/delete", user_controller.user_delete_get);

// // POST request to delete user
// router.post("/:id/:companyId/delete", user_controller.user_delete_post);

// /* GET request to update user. */
// router.get("/:id/:companyId/update", user_controller.user_update_get);

// // POST request to update user
// router.post("/:id/:companyId/update", user_controller.user_update_post);

// /* GET request for one user. */
// router.get("/:id:companyId", user_controller.user_detail);

// /* GET request for list of all user. */
// router.get("/:companyId", user_controller.user_list);

// router.get("/:companyId/usersbycompany", user_controller.users_bycompany);

// router.get("/:companyId/usersbytype", user_controller.user_bytype_get);

// /* GET request for list roles. */
// router.get("/:companyId/roles", user_controller.user_roles_get);

// router.get("/:companyId/rolesbyuserid", user_controller.user_roles_byuserid);

export default router;
