const express = require('express');
const bodyParser = require('body-parser');
const app = express();

app.use(bodyParser.json());

//Rotas
const index = require('./routes/index');
const timeRoute = require('./routes/timeRoute');

app.use('/', index);
app.use('/times', timeRoute);

module.exports = app;