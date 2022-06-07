var app = express();
var mysql = require('mysql');

var express = require('express');
var bodyParser = require('body-parser');


app.use(bodyParser.text());
app.use(bodyParser.urlencoded({ extended: false}))
app.use(bodyParser.json())

app.get('/', function (req, res) {
return res.send({ error: true, message: 'hello' })
});

var dbConn = mysql.createConnection({
host: 'localhost',
user: 'root',
password: '',
database: '1410inventory'
});



//----Crud---//


