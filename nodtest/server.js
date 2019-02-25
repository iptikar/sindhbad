

var express = require('express')
, bodyParser= require('body-parser')
, app = express();


app.use(express.static('public'))

app.use(bodyParser.urlencoded({extended: true}))
app.set('view engine', 'ejs')


app.listen(8080, function() {
  console.log('listening on 8080')
})

const mongo = require('mongodb');
const MongoClient = mongo.MongoClient

//var url = "mongodb://localhost:27017/mydb";

var url = "mongodb://bharatrosedb:ThisIsMyLife123@ds163480.mlab.com:63480/mydb59589";


var db = MongoClient.connect(url);

app.get('/', (req, res) => {
	
	var myquery = {_id: new mongo.ObjectId("5b573251cec01c08b7788493")};
	
	
	
  db.collection('quotes').find(myquery).toArray((err, result) => {
    if (err) return console.log(err)
    // renders index.ejs
    res.render('index.ejs', {quotes: result})
  })
  
  
  

  
  
  /*
  // Just testing to update the data 
  var myquery = {name: "holy" };
  var newvalues = { $set: {name: "My name is hloy", quote: "I am" } };
  
  
  db.collection("quotes").updateOne(myquery, newvalues, function(err, res) {
    if (err) throw err;
    console.log("1 document updated");
    //db.close();
  });
  
  */
  
  var myquery = {name: 'My name is hloy' };
  db.collection("quotes").deleteOne(myquery, function(err, obj) {
    if (err) throw err;
    console.log("1 document deleted");
    //db.close();
  });
  
  
})


// Updating record 



var db

MongoClient.connect(url, (err, client) => {
  if (err) return console.log(err)
  db = client.db('mydb59589') // whatever your database name is
  console.log('listening on 8080')
})





app.post('/quotes', (req, res) => {
  db.collection('quotes').save(req.body, (err, result) => {
    if (err) return console.log(err)

    console.log('saved to database')
    res.redirect('/')
  })
})
