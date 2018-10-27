// db1.js
var MongoClient = require('mongodb').MongoClient

module.exports = {

  FindinCol1: function (collectionName, finbyInArray) {
	  return new Promise(function (resolve, reject) {
      MongoClient.connect('mongodb://bharatrosedb:ThisIsMyLife123@ds163480.mlab.com:63480/mydb59589', function (err, client) {
        if (err) {
          reject(err)
        } else {
          var database = client.db('mydb59589')
          resolve(database)
        }
      })
    }).then(function (database) {
      return new Promise(function (resolve, reject) {
        

        database.collection(collectionName).find(finbyInArray).toArray(function (err, items) {
          if (err) {
            reject(err)
          } else {
            
            // Need to unescape all data 
            // Esacpe all string 
			
           //console.log(items)
            resolve(items)
          }
        })
      })
    })
  }


}
