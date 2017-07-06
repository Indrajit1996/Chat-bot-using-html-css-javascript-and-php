var http = require("http");
var express = require("express");
var fs = require("fs-extra");
var bodyParser = require('body-parser');

var app = express();
app.use(bodyParser.urlencoded({ extended: true }));
app.use(bodyParser.json());
app.use(express.static(__dirname));

var router = express.Router();

app.get('/open', function (req, res) {
  // open file
  var name = req.query.name;
  fs.readFile(name + '.txt','utf-8', function (err, data) {
    if (err) throw err;
    console.log(data);
  });
  console.log("Success");
  res.send();
});

app.get('/delete', function(req,res) {
  var name = req.query.name;
  fs.unlink('./'+name+'.txt', function(err,data) {
       if (err) throw err;
       console.log('DELETED');
   });
});

app.get('/create/folder', function(req,res) {
   var name = req.query.name;
   fs.mkdir('./'+name, function() {
        console.log('Folder Created');
      });
});

app.get('/delete/folder', function(req,res) {
    var name = req.query.name;
    fs.ensureDir('./'+name, function(err) {
          if (!err) {
              console.log(data);
              fs.remove('./'+name,function(err) {
                 if (err) throw err;
                 console.log('Folder Deleted');
              });
          }
          else
              console.log("Folder is not empty");
       });
});

app.listen(3000);
console.log('App Server is listening on port 3000');

server.js
Displaying server.js.
