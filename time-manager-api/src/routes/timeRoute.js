const express = require('express');
const router = express.Router();
const controller = require('../controllers/timeController');

router.get('/', controller.getAll);
router.post('/', controller.post);
router.delete('/', controller.delete);
router.get('/:start/:end', controller.getTimes);

module.exports = router;