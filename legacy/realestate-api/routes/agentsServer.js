var express = require('express');
var router = express.Router();
var app = express();
var agents_controller = require('../controllers/agentsController');

/// USER ROUTES ///
/* GET request for creating a user. NOTE This must come before route that displays user (uses id) */
router.get("/:companyId/create", agents_controller.agents_create_get);

/* POST request for creating user. */
router.post("/:companyId", agents_controller.agents_create_post);

/* GET request to delete user. */
router.get("/:id/:companyId/delete", agents_controller.agents_delete_get);

// POST request to delete user
router.post("/:id/:companyId/delete", agents_controller.agents_delete_post);

/* GET request to update user. */
router.get("/:id/:companyId/update", agents_controller.agents_update_get);

// POST request to update user
router.post("/:id/:companyId/update", agents_controller.agents_update_post);

/* GET request for one user. */
router.get('/:id/:companyId', agents_controller.agents_detail);

/* GET request for list of all user. */
router.get("/:companyId", agents_controller.agents_list);

router.get("/:companyId/agentsbycompany", agents_controller.agents_list_bycompany);

module.exports = router;