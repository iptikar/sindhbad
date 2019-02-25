// db1.js
var MongoClient = require('mongodb').MongoClient;


module.exports = {
  FindinCol1: function() {
    return new Promise(function(resolve, reject) {
      MongoClient.connect('mongodb://bharatrosedb:ThisIsMyLife123@ds163480.mlab.com:63480/mydb59589', function(err, db) {
        if (err) {
          reject(err);  
        } else {
          resolve(db);
        }        
      }
    }).then(function(db) {
      return new Promise(function(resolve, reject) {
        var collection = db.collection('buyer_address');
        
       finbyInArray = {email:'bharatrose1@gmail.com'}
        
        collection.find(finbyInArray).toArray(function(err, items) {
          if (err) {
            reject(err);
          } else {
            console.log(items);
            resolve(items);
          }          
        });
      
      
      });
    });
  }
};
