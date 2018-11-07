var LoadedModules = require('../../required-modules');

const express = LoadedModules.express;
const bodyParser = LoadedModules.bodyParser;
const app = express();
const kill = LoadedModules.kill;
const csurf = LoadedModules.csurf;
const cookieParser = LoadedModules.cookieParser;
const session = LoadedModules.session;
const flash = LoadedModules.flash;
const handlebars = LoadedModules.handlebars;
const validation = LoadedModules.validation;
const sessionStore = LoadedModules.sessionStore;
const crypto = LoadedModules. crypto;
const fileUpload = LoadedModules.fileUpload;
const nodemailer = LoadedModules.nodemailer;
const bcrypt = LoadedModules.bcrypt;
const validUrl = LoadedModules.validUrl;
const fs = LoadedModules.fs;
const randomstring = LoadedModules.randomstring;
const compression = LoadedModules.compression;
const routeValidator = LoadedModules.routeValidator;
const MongoDB = LoadedModules.MongoDB;
const MongoClient = LoadedModules.MongoClient;
const ObjectID = LoadedModules.ObjectID;
const MarketPlace = LoadedModules.MarketPlace;
const querystring = require('querystring');
const buffer = require('buffer');

var router = express.Router();

// Generating unique id
var uniqid = require('uniqid');

// Generating order id 
const oid = require('order-id')('mysecret');



// Generate 

const getOrderId = oid.generate()

// Require addto cart module
var GetCart = require ('../../components/addtocart/index.js')

var AddToCart = require ('../../implement/addToCart.js');

// Require function
var MisFunctions = require ('../../components/functions.js');

// Require update cart module
var EditCart = require ('../../components/updateCart.js');

// Remove items from the cart moudle
var RemoveItems = require ('../../components/deleteItems.js');

// Request
const request = require("request");


// Require function
var mysqlDate = require ('../../components/getMysqlDate.js'); 


const GetBuyerShipping = require('../../db1');

// Create required modules modules
const models = require('../../model/order');

// Administrator model 
const administrator = require('../../model/administartor-user');


// Module check if mobile is UAE number 
const IsUAEMobileNumber = require ('../../components/IsUAEMobileNumber');

const http = require('http');

const async = require('async');

// Csrf middle waredf
const csrfMiddleware = csurf({
  cookie: true
});



// In production
debug = require('debug')('http');
app.set('port', 8888);
app.use(express.static(__dirname + '/public'));


/* Use session */
// App use fileupdate with validation
app.use(fileUpload({
  limits: { fileSize: 50 * 1024 * 1024, abortOnLimit:true,safeFileNames: true, preserveExtension: true },
}));



// App user session
app.use(session({
    cookie: { maxAge: 1000 * 60 * 24 },
    store: sessionStore,
    saveUninitialized: true,
    resave: 'true',
    secret: 'secret'
}));

// App use flash
app.use(flash());

// App use public statci
app.use(express.static('public'))

// Body parser urlencoded
app.use(bodyParser.urlencoded({extended: true}))

// App use cookieParser
app.use(cookieParser());

// App use form csrf protection
app.use(csrfMiddleware);

// Using compression
app.use(compression());
// Set the template to ejs
app.set('view engine', 'ejs')



// Use app session flash
app.use(function(req, res, next){
    // if there's a flash message in the session request, make it available in the response, then delete it
    res.locals.sessionFlash = req.session.sessionFlash;
    delete req.session.sessionFlash;
    next();
});


// Url for mongodb
var url = "mongodb://bharatrosedb:ThisIsMyLife123@ds163480.mlab.com:63480/mydb59589";

// Obtain object
let All = new MarketPlace;

var db;

MongoClient.connect(url, (err, client) => {
  if (err) return console.log(err)
  db = client.db('mydb59589') // whatever your database name is

})

router.get('/', (req, res) => {



		// Select product
		var categoryId = '93';

		// No of result
		var limitBy = 10;

		// No of filed

		// Skip from
		var SkipFrom = 0;

		// Var collectioname
		var collectioName = 'product_catelog';

		// Get the records
		var getRecords = '';

		// Module All
		All.GetCollection(db, categoryId, limitBy, SkipFrom, collectioName, function (records) {

		res.render('index.ejs', {records:records})
});



});


// Product by category
router.get('/category/:name/:id', (req, res) => {

	// Collection name
	let GetCollect = 'product_catelog';

	// How many data need
	let howMany = 10;

	// Indexes that is required
	let IndexNeed = {};

	// Category id

	db.collection('quotes').find().toArray((err, result) => {
    if (err) return console.log(err)
    // renders index.ejs
    res.render('index1.ejs', {quotes: result, select:select})
  })
	res.render('category.ejs')

});

// App get index url
router.get('/index1', (req, res) => {

	//let name = 'I am result of debut';
 //debug('booting %o', name);
	//console.log(randomstring.generate(7));
	/*
	 * async function check(req, res) {
  async function getData(){
  const a = await someFunction().catch((error)=>console.log(error));
  const b = await someOtherFunction().catch((error)=>console.log(error));
  if (a && b) console.log("some result")
}
}
	 * */


	var vFrom = '"Ronnie Shah 👻" <info@sindhbad.com>';
	var vTo = 'akashche72@gmail.com';
	var vSubject = '✥ Thank your for you registration  ✔ ✔ ✔';
	var vText = 'Hello world?'; // plain text body;
	var vHtml = '<b>I will really hunt your dream@</b>'; // html body;


	// Defining nodejs sending email property
	//console.log(All.SendMaileToClient(vFrom, vTo, vSubject, vText, vHtml));
	//console.log(All.DBConnection('username', 'password'));

	//All.CreateModels(db);
	//var secret = 'abcdefg';
	/*
	var hash = crypto.createHmac('sha256', secret)
                   .update('I love cupcakes')
                   .digest('hex')
    */

   //console.log(hash)

	//delete req.session.userId

	// Deleting cookies
	//res.clearCookie("username");

	// res.cookie('cookieName',randomNumber, { maxAge: 900000, httpOnly: true });

	//req.session.userId = hash;

	// Set another session
	//var testing = 46565665;

	//req.session.username46565665 = 'bharatrose1';

	// Here setting cookies
	//res.cookie('username',hash, { maxAge: 1000 * 60 * 24 , httpOnly: true });

    //getData();


	var select = '';

  db.collection('quotes').find().toArray((err, result) => {
    if (err) return console.log(err)
    // renders index.ejs
    res.render('index1.ejs', {quotes: result, select:select})
  })

  // Link

  //console.log('CSRF'+req.csrfToken());
  let collectionname = 'seller';
  let finbyInArray = {email:'bharatrose1@gmail.com'};

  /*
  All.FindDataByKey(db, collectionname, finbyInArray, function(sum){

		//console.log(sum)
	  });
*/


})


router.post('/quotes', (req, res) => {
  db.collection('quotes').save(req.body, (err, result) => {
    if (err) return console.log(err)

    console.log('saved to database')
    res.redirect('/')
  })
})

router.all('/action', (req, res) => {

	var id = req.query.id;

	//({_id: new mongodb.ObjectID('4d512b45cc9374271b00000f')})
	var myquery =  {_id: new MongoDB.ObjectID(id)}

	db.collection("quotes").deleteOne(myquery, function(err, obj) {

    console.log(obj.result.nModified);
    if (err) { consol.log (err); throw err; } else {


		}

  });

  req.session.sessionFlash = {
        type: 'success',
        message: 'This is a flash message using custom middleware and express-session.'+id+''
	};


    res.redirect('/');
});

router.get('/update', (req, res) => {

  var result = '';

  // Get the id
  var id = req.query.id;

 var query = {_id: new MongoDB.ObjectID(id)};

  /*
  db.collection('quotes').save(req.body, (err, result) => {
    if (err) return console.log(err)

    console.log('saved to database')
    res.redirect('/')
  })
	*/
	 db.collection('quotes').find(query).toArray((err, result) => {
    if (err) throw err;
    console.log(result);
    res.render('update.ejs', {quotes: result})
  });

})

router.post('/updateNode', (req, res) => {

	var id = req.body.id;
	var myquery = {_id: new MongoDB.ObjectID(id)};

	// Get the body
	var name = req.body.name;
	var quote = req.body.quote;

	// var reg
	var regexp = /[A-Za-z ]/gi;

	if(!name.match(regexp)) {

		req.session.sessionFlash = {
        type: 'error',
        message: 'Invalid name!'
		};

		return res.redirect('/update?id='+id+'');

	}





	var newvalues = {$set: {name: name, quote: quote }};

	db.collection("quotes").updateOne(myquery, newvalues, function(err, res) {
    if (err) throw err;


  });

   req.session.sessionFlash = {
        type: 'success',
        message: 'Document successfully updated'
		};

   res.redirect('/');

	});



router.get('/users', function (req, res) {

	res.render('session.ejs', {quotes: req.cookies})

});

router.get('/login', function (req, res) {

	// Render the
	res.render('login.ejs', {getToken:req.csrfToken()});

	});


router.get('/register', function (req, res) {

	// Render the
	res.render('register.ejs', {getToken:req.csrfToken()});

});

// Registration request

router.post('/register-request', function (req, res) {

	/* This rout will receive following data
	 * {
	   "form_key":"57g6R7P6vtWiTl3X",
	   "success_url":"",
	   "error_url":"",
	   "firstname":"really",
	   "lastname":"make",
	   "is_subscribed":"1",
	   "registered_as":"1",
	   "email":"what@gmail.com",
	   "password":"ThisIsMyLife123",
	   "password_confirmation":"ThisIsMyLife123",
	   "submit":""
	}
	 * */

	 // Valid server data
	 var ValidData = {
					   "form_key":"",
					   "success_url":"",
					   "error_url":"",
					   "firstname":/[a-zA-Z ]{2,}$/,
					   "lastname":/[a-zA-Z ]{2,}$/,
					   "is_subscribed":"",
					   "registered_as":"",
					   "email":/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/i,
					   "password":/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/,
					   "password_confirmation":"",
					   "submit":""
					}

		// Get the all data
		var RequestData = req.body;

		// Require all data validate if true
		if(All.IsDataValid(RequestData, ValidData) !== true) {

		 // Set the error the session flash
			req.session.sessionFlash = {

				type: 'error',
				message: {'posted' :req.body, 'error' : All.IsDataValid(RequestData, ValidData)}
				};

		// Return redirection
		return res.redirect('/register');

	}

		// Some index need to check additionally
		if(typeof req.body.registered_as === 'undefined') {

			// Set the error the session flash
			req.session.sessionFlash = {

				type: 'error',
				message: {'posted' :req.body, 'error' : 'Please select user type.'}
				};

			// Return to the  page
			return res.redirect('/register');
		}

		// Both password must be same
		if(req.body.password !== req.body.password_confirmation) {

			// Set the error the session flash
			req.session.sessionFlash = {

				type: 'error',
				message: {'posted' :req.body, 'error' : 'Both password did not matched.'}
				};

			// Return to the  page
			return res.redirect('/register');

		}


		// Get if user is subscribed
		var isUserSubs = req.body.s_subscribed;

		// Document name
		var document = '';

		// Document address
		var document_address = '';

		// req.body.registered_as = 1 seller 0 = buyer
		if(req.body.registered_as === '1') {

				// Store document to seller db
				document = 'seller';

				// Seller address
				document_address = 'seller_address';


		} else {

				// Inser to buyer document
				document = 'buyer';

				// Seller address
				document_address = 'buyer_address';
			}

		// Set incoming data to variable
		var firstname = req.body.firstname;
		var lastname = req.body.lastname;
		var email = req.body.email;


		// Before doing anything check if email address exits in db
		var query = {email: email}

		db.collection(document).find({email:email}).toArray(function(err, result) {

		if (err) throw err;

			// Get the number for row that is affected
			var num_rows = result.length;

			// Must be 0 for registration
			if(num_rows !== 0) {

				// Require the session
				req.session.sessionFlash = {
					type: 'posteddata',
					message: {'posted': req.body, 'error': 'Email address '+ email +' is already registred!. <br/> If you forgot password please check the link below.'}
				};


				// Redirect to the page
				return res.redirect('/register');

			}

		});


		// Has password
		let hash = bcrypt.hashSync(req.body.password, 10);
		// Insert the document to document


		var myobj = {
						firstname: req.body.firstname,
						lastname: req.body.lastname,
						email: req.body.email

					};


		// Some document need ot edit
		req.body.password = hash;

		var objectId = '';

		// Add some activated
		req.body.activated = 0;

		// Save the docuemtn
		db.collection(document).save(req.body, (err, result) => {
		if (err) return console.log(err)

			// Get the object id
			objectId = req.body._id;

			// Insert to the table

			// Insert to next db
			var query = {id: objectId, email: email};

			// Insert to another database
			db.collection(document_address).insertOne(query, function(err, res) {

			// Throw error
			if (err) throw err;

			//console.log("1 document inserted");

		});

	})



		//user-activation/:timestapm/:userid/:usertype
		//var dateObj = Date.now();
		var days = 86400000 * 3;


		// create a new Date object, using the adjusted time
		var dateObj = Date.now(); // 1534596948489
		//var followingDay = dateObj.getTime() + days;

		// 1534856045298

		// 86400000 * 3 = 259096809
		// 				  259200000

		//var addThreeDays = dateObj + days;

		var activationLink = 'http://localhost:8888/user-activation/'+dateObj+'/'+req.body._id+'/'+req.body.registered_as+'';

		// http://localhost:8888/user-activation/1534599498533/5b78214a6048204305935e17/0

		//console.log(activationLink);

		//alert(dateObj);
		/*
		 * var vFrom = '"Ronnie Shah 👻" <info@sindhbad.com>';
		var vTo = 'bharatrose1@gmail.com';
		var vSubject = '✥ Thank your for you registration  ✔ ✔ ✔';
		var vText = 'Hello world?'; // plain text body;
		var vHtml = '<b>I will really hunt your dream@</b>'; // html body;
		* */

		// Send verification email
		var vFrom = '"Sindhbad.com 👻" <info@sindhbad.com>';
		var vTo = email;
		var vSubject = '✥ Thank your for you registration  ✔ ✔ ✔'
		var vText = 'Hello World';
		var vHtml = '<h1>Please click the link below the verify you account.</h1><a href = "'+activationLink+'">Click Here</a>';

		// Send mail to the client
		All.SendMaileToClient(vFrom, vTo, vSubject, vText, vHtml);



		// Else set the success message
		req.session.sessionFlash = {
        type: 'success',
        message: "Registration sucessfull"
		};

		// Send the verification email to the users


		// Render the
		return res.redirect('/register');




});


// Login request
router.post('/login-request', function (req, res) {


	 var email = req.body.login.username;
	 var password = req.body.login.password;

	 var Reg  = /^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/i;

	 // Validate username
	 if(!(Reg.test(email))) {

		// Throw error
		req.session.sessionFlash = {
        type: 'error',
        message: 'Please enter valid email address'
		};
	}

	// Check usertype
	if(typeof req.body.login_as == 'undefined') {

		req.session.sessionFlash = {
        type: 'error',
        message: 'Please check user type'
		};

		// Render the
		return res.redirect('/login');

	}

	var document = '';

	// document to select
	if(req.body.login_as == '0') {

			// Buyer login
			document = 'buyer';
	} else {

			document = 'seller';
		}

	// Lets do query
	db.collection(document).find({email:email, activated:1}).toArray(function(err, result) {

    // If error occured
    if (err) throw err;

    // Length of object must be 1
    if(result.length !== 1) {

			// Flash the error
		req.session.sessionFlash =
			{
			type: 'error',
			message: 'Unable to find username '+email
			};

			// Redirect
			return res.redirect('/login');

	} else {

			// Get the password
			var hashed_password = (result[0].password);

			// Using bcrypt for password validation
			var IsValidPass = bcrypt.compareSync(password, hashed_password); // true

			// Check if password
			if(IsValidPass === true ) {

				// Get server key
				var serverKey = All.ServerKey();

				var SessionData = {
									"username":email,
									"password":hashed_password,
									"usertype":req.body.login_as
								}
				// Set the session value
					// Username
					// Password
					// Usertype



					//req.session.userId = hash;
					// If buyer
					if(req.body.login_as == '0') {

						req.session.regenerate(function(errSession) {
							// Buyer session
							if(errSession) {

								console.log(errSession);

								}


							})

						req.session.buyer  = SessionData;

						return res.redirect('/user-buyer-14e1813e3d0cf9da1a9dafc6afadff37');


						} else {

							// Regenerating session id
							req.session.regenerate(function(errSession) {

							if(errSession)  {

								console.log(errSession);
							}
								// will have a new session here
								// Seller session


							})

							req.session.seller  = SessionData;
							return res.redirect('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37');

							}

					// Return responce to the header

			} else {

					req.session.sessionFlash =
					{
						type: 'error',
						message: 'Invalid password'
					};

					// Redirect to login page
					return res.redirect('/login');
				}



		}

	// Get the password
	//var password = result[password'];

    //c

  });

	//
	// Responce
	//return res.redirect('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37');

});

// Inde1 page


// Seller administrator dashborad
router.get('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37', function (req, res) {

	// Seller must be logged in
	if(All.IsSellerIsLoggedIn(req) === false) {

		// Redirect to loginPage
		return res.redirect('/login');

	}

	res.render('user-admin-14e1813e3d0cf9da1a9dafc6afadff37/index.ejs');


});

// Uplode user product from here
router.get('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product', function (req, res) {

	if(All.IsSellerIsLoggedIn(req) === false) {

		// Redirect to loginPage
		return res.redirect('/login');

	}

	// We need to show category from our database to fronend ejs template
	// Link for the json data
	var link  = 'assets/categories.json';

	// All category

	let FirstDimesionCat = All.GetCategoryFirstDimesion(link, fs);


	res.render('user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product.ejs', {users:FirstDimesionCat, getToken:req.csrfToken()});


});


// Post rout to upload the product
router.post('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product-request', function (req, res) {

	if(All.IsSellerIsLoggedIn(req) === false) {

		// Redirect to loginPage
		return res.redirect('/login');

	}

	/* Find product sku is already exists */

	/* Category need to be modifiend as it's */

	/*
	 *  "category": "Phones & Accessories#2e3615a0207493",
		"sub-category": "Mobile Phones#2e3615a02074931",
		"sub-sub-category": "Smart Phone#2e3615a020749315",
	 *
	 * */





	// Expected data
	var incomming_data = 	{

					"_csrf":/.{2,150}/,
				   "product_name": /.{2,150}/,
				   "discription": /.{2,150}/,
				   "short-discription":/.{2,150}/,
				   "date-available-from":/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[ ][\d]{2}:[\d]{2}$/,
				   "date-available-to":/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[ ][\d]{2}:[\d]{2}$/,
				   "category":/.{2,150}/,
				   "sub-category":/.{2,150}/,
				   "sub-sub-category":/.{2,150}/,
					"sku":/[0-9a-zA-Z_\-]{2,50}$/,
				   "regular-price":/[0-9]{1,}$/,
				   "special-price":"",
				   "special-price-from":"",
				   "special-price-to":"",
				   "items-available":/[0-9]$/,
				   "seller-type":/[0-9a-zA-Z ]$/,
				   "avaibility":/[0-9a-zA-Z ]$/,
				   "min-order":/[0-9A-Za-z]{1,}$/,
				   "tax-class":/[0-9a-zA-Z ]$/,
				   "shipping_cost":/[0-9A-Za-z ]{1,}$/,
				   "status":/[0-9a-zA-Z ]$/,
				   "unite-amount":/[0-9a-zA-Z ]$/,
				   "product-unite":/[0-9a-zA-Z ]$/,
				   "product-condition":/[0-9a-zA-Z ]$/,
				   "country":/[0-9a-zA-Z ]$/,
				   "country-phone-code":/[0-9a-zA-Z\+ ]$/,
				   "phone":/[0-9 ]{10,15}$/,
				   "warrenty":/[0-9A-Za-z ]{1,}$/,
				   "delivery_period":/[0-9A-Za-z ]{1,}$/,
				   "spcification-title[]":"",
				   "spcification-value[]":"",
				   "weblink":"",
				   "youtube-link":"",
				   "facebook-link":"",
				   "saller-note":"",
				   "latitude":/^(\+|-)?(?:90(?:(?:\.0{1,8})?)|(?:[0-9]|[1-8][0-9])(?:(?:\.[0-9]{1,8})?))$/,
				   "longitude":/^(\+|-)?(?:180(?:(?:\.0{1,8})?)|(?:[0-9]|[1-9][0-9]|1[0-7][0-9])(?:(?:\.[0-9]{1,8})?))$/,
				   "product-articles-html":"",
				   "meta_title":"",
				   "meta_keywords":"",
				   "meta_description":"",
				   "submit":""
};

  // Validate all incomming data
	if(All.IsDataValid(req.body, incomming_data) !== true) {

		// Session flash error message and redirect
		req.session.sessionFlash = {

				type: 'error',
				message: {"posted":req.body, "error":All.IsDataValid(req.body, incomming_data)}
			};

		// Return redirect
		return res.redirect('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product');
	}





	let special_price   	=    req.body["special-price"];
	let special_price_from  =    req.body["special-price-from"];
	let  special_price_to 	=    req.body["special-price-to"];
	let weblink   			=    req.body["weblink"];
	let youtube_link   		=    req.body["youtube-link"];
	let facebook_link   	=    req.body["facebook-link"];
	let saller_note   		=    req.body["saller-note"];
	let product_articles_html   =    req.body["product-articles-html"];
	let meta_title   		=    req.body["meta_title"];

	// Testing Panel
	let  spcification_title  =    req.body["spcification-title[]"];

	let  spcification_value  =    req.body["spcification-value[]"];

	// All Specification is valid or not
	let AllSpeciValid = true;

	// All Specification title
	let AllTitleValid = true;

	// Regression
	let regress = /.{1,150}/;


	// if specification value is array length is greater then 2


	// Setting
	if(special_price !== '') {

		// Validating speical price
		var regrex = /[0-9]{1,}/;


		if(All.IfValueNoteMatchRegx(req, special_price, regrex, 'Please enter valid special price') !== true) {

			return res.redirect('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product');
		}

		// Validating speical price
		regrex = /^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])[ ][\d]{2}:[\d]{2}$/;

		// Validate from when

		if(All.IfValueNoteMatchRegx(req, special_price_from, regrex, 'Please enter valid special price starting date.') !== true) {

			return res.redirect('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product');
		}


		// Validate from when

		if(All.IfValueNoteMatchRegx(req, special_price_to, regrex, 'Please enter valid special price ending date.') !== true) {

			return res.redirect('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product');
		}

	}

	// check if delivery service is defind
	if(typeof req.body["delivery-service"] === 'undefined') {

		req.session.sessionFlash = {

				type: 'error',
				message: {"posted":req.body, "error":"Please select delivery service."}
			};

		// Return redirection
		return res.redirect('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product');

	}

	// Validation of specification key and value
	if(spcification_title.length > 1) {

		// If user setting  more value then
		for(var i = 0; i < spcification_title.length; ++i) {

		// Validate with regression
			if(!(regress.test(spcification_title[i]))) {

					// Change variable value true to value
					AllSpeciValid = spcification_title[i];

					// Break
					break;
			}
		}

		// If user setting  more value then
		for(var i = 0; i < spcification_value.length; ++i) {

		// Validate with regression
			if(!(regress.test(spcification_value[i]))) {

					// Change variable value true to value
					AllTitleValid = spcification_value[i];

					// Break
					break;
			}
		}



	} else if(spcification_title.length === 1) {

			// If value containe something then only
			if(spcification_title[0] !== ''){

				// Validate data
				if(!(regress.test(spcification_title[0]))) {

					// change the variable value
					AllSpeciValid = spcification_title[0];
				}

			}

			// Specification value
			if(spcification_value[0] !== ''){

				// Validate data
				if(!(regress.test(spcification_value[0]))) {

					// change the variable value
					AllTitleValid = spcification_value[0];
				}

			}




	} else {}


	// If variable is not true
	if(AllSpeciValid !== true) {

		// Return message
		// Session flash error message and redirect
		req.session.sessionFlash = {

				type: 'error',
				message: {"posted":req.body, "error":"Invalid specification title "+AllSpeciValid}
			};

		// Return redirection
		return res.redirect('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product');

	}

	// Check if specification value is valid
	if(AllTitleValid !== true) {

			req.session.sessionFlash = {

				type: 'error',
				message: {"posted":req.body, "error":"Invalid specification key "+AllSpeciValid}
			};

			// Return redirection
			return res.redirect('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product');
	}

	// Seller Note
	if(saller_note !== ''){

		// Regression
		 let regrex = /.{2,150}/;

		 // Validate
		if(!(regrex.test(saller_note))) {

			// Require session flash
			req.session.sessionFlash = {

				type: 'error',
				message: {"posted":req.body, "error":"Please enter valid web link address."}
			};

			// Return redirection
			return res.redirect('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product');

			}
	}

	// Check if weblink exists something
	if(weblink !== '') {

			// Check if url is valid
		if (!(validUrl.isUri(youtube_link))){

			req.session.sessionFlash = {

				type: 'error',
				message: {"posted":req.body, "error":"Please enter valid web link address."}
			};

			// Return redirection
			return res.redirect('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product');


		}

	}

	// youtube link
	// Check if weblink exists something
	if(youtube_link !== '') {

			// Check if url is valid
		if (!(validUrl.isUri(youtube_link))){

			req.session.sessionFlash = {

				type: 'error',
				message: {"posted":req.body, "error":"Please enter valid youtube link address."}
			};

			// Return redirection
			return res.redirect('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product');


		}

	}


	if(facebook_link !== '') {

			// Check if url is valid
		if (!(validUrl.isUri(facebook_link))){

			req.session.sessionFlash = {

				type: 'error',
				message: {"posted":req.body, "error":"Please enter valid facebook link address."}
			};

			// Return redirection
			return res.redirect('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product');


		}

	}

	// product_articles_html If there is any article
	if(product_articles_html !== '') {

		// Regression
		 let regrex = /.{2,150}/;

		 // Validate
		if(!(regrex.test(product_articles_html))) {

			// Require session flash
			req.session.sessionFlash = {

				type: 'error',
				message: {"posted":req.body, "error":"Please type valid product articles"}
			};

			// Return redirection
			return res.redirect('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product');

			}
	}

	// Category names need to be changed
	var CategoryKey = '#2e3615a02074';

	// Categoryname
	var categoryName = req.body.category.split(CategoryKey)[0];

	// Sub Category Name
	var subCategoryName = req.body["sub-category"].split(CategoryKey)[0];

	// Sub Sub Category name
	var subSubCategoryName = req.body["sub-sub-category"].split(CategoryKey)[0];



	// Categoryname
	var categoryId = req.body.category.split(CategoryKey)[1];

	// Sub Category Name
	var subCategoryId = req.body["sub-category"].split(CategoryKey)[1];

	// Sub Sub Category name
	var subSubCategoryId = req.body["sub-sub-category"].split(CategoryKey)[1];


	// Setting variable to body request

	// Category name
	req.body.categoryName = categoryName;

	// Sub Category name
	req.body.subCategoryName = subCategoryName;

	// Sub Sub Category name
	req.body.subSubCategoryName = subCategoryName;

	// Category id
	req.body.categoryId = categoryId;

	// Sub Category name
	req.body.subCategoryId = subCategoryId;

	// Sub Sub Category name
	req.body.subSubCategoryId = subSubCategoryId;


	// Get the seller session email address
	let seller_email = All.IsSellerIsLoggedIn(req).username;


	// Valid image before processing
	var IsAllValid = (All.IsFilesValid(req, 'option[]'));

	// Check that if any image have error
	if(IsAllValid.every(All.ifTrue) !== true){


		// Remove true, some image can be valie
		var OnlyErrorArray = IsAllValid.filter(word => word !== true);



		// Join error with <br/>
		var ShowError = OnlyErrorArray.join('<br/>');


		// Flash session flash message
		req.session.sessionFlash = {

			type: 'error',
			message: {"posted":req.body, "error": ShowError}
		};

			// Return redirect
		return res.redirect('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product');


	}

	// Check if images upload
	let images = All.UploadImages(req, 'option[]', randomstring);

	// If all valid function returning object images names
	// Which storing in database
	if( typeof images !== 'object') {

			req.session.sessionFlash = {

				type: 'error',
				message: {"posted":req.body, "error":images}
			};

		// Return redirect
		return res.redirect('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product');

		}


	// Set the images name to request body
	req.body.images = images;

	// Seller sesseion name
	req.body.seller_email = All.IsSellerIsLoggedIn(req).username;


	// Sku exist
	var skuexists = false ;

	db.collection('product_catelog').find({sku:req.body.sku}).toArray(function(err, result) {

		if (err) throw err;

			// Get the number for row that is affected
			var num_rows = result.length;

			// Must be 0 for registration
			if(num_rows !== 0) {

				// Require the session
				req.session.sessionFlash = {
					type: 'error',
					message: {'posted': req.body, 'error': 'Product sku '+req.body.sku+' already exists, please input somthing else numbers, letters_-.'}
				};


				// Redirect to the page
				return res.redirect('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product');


			} else {

			// Save the document
	db.collection('product_catelog').save(req.body, (err, result) => {

		if (err) {

			// Session flahs message
			req.session.sessionFlash = {
			type: 'error',
			message: {"posted":req.body, "error": err}

	}



	} else {


		// Get the current id
		let insertID = req.body._id;

		/* Insert data to relation database by it's id */
		// Model is not created yet create from here

		var product_attri_table = {
								product_categlog_id: insertID,
								review: "0",
								tag: null,
								youtube_link:youtube_link,
								facebook_link: facebook_link,
								web_link: weblink,
								rate:0,
								latitude:'',
								longititude:'',
								images:images
							};

		db.collection("product_attributes").insertOne(product_attri_table, function(err, res) {
					if (err) throw err;

				});

		// Session flahs message
		req.session.sessionFlash = {

					type: 'success',
					message: {"message":"Product sucessfully uploaded", 'posted': req.body}
			}

		//res.render('user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product.ejs', {users:JSON.stringify(req.body)});
		return res.redirect('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product');

	}




  })


				}

		});




});


// Upload product request
router.post('/upload', function(req, res) {

  if (!req.files.sampleFile) {

    req.session.sessionFlash = {
        type: 'error',
        message: 'Please select the file'
		};

   res.redirect('/');
 }


  // The name of the input field (i.e. "sampleFile") is used to retrieve the uploaded file
  var sampleFile = req.files.sampleFile;

  var GetFileName = [];

  // IF only one file is selected then
  // sampleFile is not comming as array multiple
  if(typeof sampleFile.length == 'undefined') {

	  sampleFile = [sampleFile];

	}

  for(var i = 0; i < sampleFile.length; i++) {

	var name = sampleFile[i].name;

	// Get the size sampleFile[i].name
	var size = sampleFile[i].data.length;

	// IF size is bigger then 50 kb
	if(size > 50 * 1024) {

		req.session.sessionFlash = {
        type: 'error',
        message: 'File size only allowed to 50KB Check filename :'+name+' Check  file index Number '+i
		};

		return res.redirect('/')

		}

	// Get the file type
	var mimetype = sampleFile[i].mimetype;

	// Valid files
	var ValidImages = ['image/jpeg', 'image/gif', 'image/jpg', 'image/bmp', 'image/png'];

	// If mimetype is in array then
	var IsImageValid = ValidImages.indexOf(mimetype);

	console.log(IsImageValid);

	// If it's -1 then
	if(IsImageValid == -1) {

		req.session.sessionFlash = {
        type: 'error',
        message: 'Invalid image file type : '+name+mimetype+' only jpg,png,jpeg,bmp files are accepted'

		};

		return res.redirect('/')
	}


	//
	GetFileName.push(size)
	//var size = element.size;

	 name = new Date().getTime()+name;

	 sampleFile[i].mv('images/'+name+'', function(err) {

    if (err){
     req.session.sessionFlash = {
        type: 'error',
        message: err
		};

	res.redirect('/');

}


  });





	}


	req.session.sessionFlash = {
        type: 'success',
        message: 'File uploaded sucessfully !'
		};

   res.redirect('/');

});

router.post('/user-buyer-14e1813e3d0cf9da1a9dafc6afadff37', function (req, res) {

	 // var get the incoming data and convert to json
	 var incomingData = req.body;

	 //console.log(incomingData);
	 var count =  0;






	// Some message error
	req.session.sessionFlash = {
        type: 'error',
        message: 'Form get some error from here'
		};

	req.session.sessionFlash = {
        type: 'posteddata',
        message: {'posted' :req.body, 'error' : JSON.stringify(req.body)}
		};

	// Render the
	res.redirect('/user-admin-14e1813e3d0cf9da1a9dafc6afadff37/upload-my-product');


});

router.get('/user-buyer-14e1813e3d0cf9da1a9dafc6afadff37', function (req, res) {

	if(typeof req.session.buyer === 'undefined' || req.session.buyer === null) {

			res.redirect('/login')
		}

	res.render('user-buyer-14e1813e3d0cf9da1a9dafc6afadff37/index.ejs', {users:JSON.stringify(req.session)});


});

var both  = {

	RoutAndFunction: function (req, res, collectionName, finbyInArray, URLToRedirect) {

				return new Promise(function (resolve, reject) {

					GetBuyerShipping.FindinCol1(collectionName, finbyInArray).then(function(items) {

					resolve(items);
					}, function(err) {
					reject (err, err.stack);
					});

					}).then(function (items) {

						return new Promise(function (resolve, reject) {

						GetBuyerShipping.FindinCol1('buyer', finbyInArray).then(function(buyer) {

						let bna = {buyer:buyer,buyeraddress:items};

						resolve(bna);
						}, function(err) {
						reject (err, err.stack);
						});


					})


					})



					.then(function (bna) {

						return new Promise(function (resolve, reject) {


							resolve(res.render(URLToRedirect, {users:JSON.stringify(req.session), getToken:req.csrfToken(), ShippingAddress:bna}));

					})


					})

			}

	}



router.get('/user-buyer-14e1813e3d0cf9da1a9dafc6afadff37/shipping-address', function (req, res) {


	if(typeof req.session.buyer === 'undefined' || req.session.buyer === null) {

			res.redirect('/login')
		}


	// Get the username
	let username = req.session.buyer.username;


    let collectionName = 'buyer_address';

    let finbyInArray = {email:username};

    URLToRedirect = 'user-buyer-14e1813e3d0cf9da1a9dafc6afadff37/shipping-address.ejs';


    // Write again new promisess

	both.RoutAndFunction(req, res, collectionName, finbyInArray, URLToRedirect);
});

// Send the userdetails
router.post('/user-buyer-14e1813e3d0cf9da1a9dafc6afadff37/updateBuyerShipp', function (req, res) {

	/* Expected data from this router */
	/*
	 * {
		   "_csrf":"XqpR5LAA-6TEGG50Cs548hxZB1-n7dRgs34c",
		   "first-name":"",
		   "last-name":"",
		   "country":"United Arab Emirates",
		   "city":"Fujairah",
		   "AddressArea":"Taweelah",
		   "country1":"AE",
		   "city1":"FJR",
		   "AddressArea1":"1294",
		   "street":"",
		   "building-name":"",
		   "floor-no":"",
		   "apartment-no":"",
		   "landmark":"",
		   "locationtype":"",
		   "mobile-no":"",
		   "land-line-no":"",
		   "latitude":"",
		   "longitude":"",
		   "shipping-note":"",
		   "submit":""
}
	 * */

	 // Unset some variable
	 delete req.body.submit;

	 // Esacpe all string
	 for(var i in req.body) {

			req.body[i] = escape(req.body[i]);
	}

	 // Get the username of buyer
	 var email = req.session.buyer.username;

	 var newvalues = {$set: req.body};
	 var myquery = {email:email};

	 console.log(req.body);

	 // update buyer table
	 var buyerValue = {$set: {firstname: req.body['first-name'], lastname: req.body['last-name']} };

	db.collection("buyer").updateOne(myquery, buyerValue, function(err, res) {

		if (err) console.log( err);
		console.log(res);
	});


	db.collection("buyer_address").updateOne(myquery, newvalues, function(err, res) {
    if (err) throw err;

	req.session.sessionFlash = {
        type: 'success',
        message: 'Information updated sucessfully.'
		};
  });



	res.redirect('/user-buyer-14e1813e3d0cf9da1a9dafc6afadff37/shipping-address');
})




router.get('/user-buyer-14e1813e3d0cf9da1a9dafc6afadff37/logout', function (req, res) {


		// Check if session set
		if(typeof req.session.buyer !== 'undefined' || req.session.buyer !== null) {

				// Unset the session variable
				delete req.session.buyer;

				res.redirect('/login');
		}
});

// Buyer shipping address


// User activation link
router.get('/user-activation/:timestapm/:userid/:usertype', function (req, res) {



	//console.log(req.params.timestapm);
	// Check all variable must run to execute the code
	if(
			typeof req.params.timestapm != 'undefined' &&
			typeof req.params.userid != 'undefined' &&
			typeof req.params.usertype!= 'undefined'

		) {

		// Get the variable
		var timestapm = req.params.timestapm;
		var userid = req.params.userid;
		var usertype = req.params.usertype;

		// Collection to select
		document = '';

		if(usertype == '0') {

			// Seller
			document = 'buyer';
		} else {

			// Document buyer
			document = 'seller';
		}

		var currentTime = Date.now()

		// Valid time is 3 days millisecound
		var days = 86400000 * 3;

		// Add to the timestapm
		var isValidtime = parseInt(timestapm) + days;

		// Check time must be lesst then current time
		if(currentTime > isValidtime) {

			// Set the error the session flash
			req.session.sessionFlash = {

				type: 'error',
				message: "Reqest validation expired, Please obtaine new request."
				};

			// Return redirection
			return res.render('user-activation.ejs');
			// http://localhost:8888/user-activation/1534667153479/5b792991c1030854d5150bb0/0

		}


		// Create object id with string
		var myquery = {_id:new ObjectID(userid) };

		// New values to set
		var newvalues = { $set: {activated:1} };

		// Db Collection to set
		db.collection(document).updateOne(myquery, newvalues, function(err, res1) {

		// If error occured
		if (err) throw err;


		// res.result.nModified containe
		if(res1.result.nModified == 1) {

			// Set the error the session flash
			req.session.sessionFlash = {

				type: 'success',
				message: 'You account has been sucessfully activated'
			};


		}

		// Responce with view
		return res.render('user-activation.ejs');

		});

		} else {
					// Response to the register
					res.redirect('/register');
				}



});

// Product discription rout with params /name/id/sku

router.get('/discription/:name/:id/:sku', routeValidator.validate({
  params: {
    name: { isRequired: true},
    id:{isRequired: true, isMongoId: true},
    sku:{isRequired: true}
  }
}),function (req, res){

    // Get the params
    var Product_Name = req.params.name;

    // Get Product mongdb id
    var Product_Id = req.params.id;

    // Get sku
    var Product_SKU = req.params.sku;
    // console.log(Product_SKU);
    // Query
    var finbyInArray = {sku:Product_SKU}
    // Find the product and return back
    // Product collection
    var collectionname = 'product_catelog';

   //console.log(req.cookies.ShoppingCart);
    // Get collection
    var getCol = '';
  // Using try cache
  try{

  var GetCol = All.FindDataByKeyOne(db, collectionname, finbyInArray, function(result){

      // Return collection
      // Res with ejs template
      //console.log(req)

      res.render('discription', {result : result, getToken:req.csrfToken(), 'url':req.url});

  });

} catch(error) { throw error }


});

// To Provide child category using this route
router.post('/getCategory', function (req, res) {


	// Post category name
	var categoryName = req.body.categoryname;

	// Get all it's child elements
	var allCategoryjson = All.getCategoryJson(fs);

	// Get the child
	var getChild = false;



	// Loop each data
	for(let i in allCategoryjson) {

			// Find the match
			if(i === categoryName) {

					getChild = allCategoryjson[i];
					// Break
					break;
				}
		}

	// Check if variable is not false
	if(getChild !== false ){

		return res.send(getChild);
	}


	return res.send('No child category found!.');

});



// Add cart rout addtocart addtocart
router.post('/addtocart', function(req, res){


	// Defining some variable
	//console.log(JSON.stringify(req.session.SetCartCooki565656));

	let id = req.body.p_mongo_id;
	let price = req.body.p_price;
	let sku = req.body.sku;
	let name = req.body.name;
	let image = req.body.img_uri;
	let qty = req.body.qty;


	GetCart.cart.AddToCart(req, res, sku, name, image, qty, price, id);


	// Return res
	req.session.sessionFlash = {

		type: 'success',
		message: "Product added to the cart"
	};



	//GetCart.cart.GetCartTotal(req, res, req.cookies.ShoppingCart);
	//console.log(req.cookies.ShoppingCart);

	res.redirect(req.body.durl);
});


// Route
router.get('/cart', function (req, res){

		// Get the cookie data
		let CartObject = '';

		// Get cookie value
		CartObject = req.cookies.ShoppingCart;

		// Get the total
		CartTotal = req.cookies.ShoppingCartTotal;

		// Sum amount
		//let carttotal = MisFunctions.SumArrayColumn(CartObject, 'total');

		res.render('cart', {cart: CartObject, cartTotal: CartTotal, getToken:req.csrfToken()});
	});

router.get('/cookietest', function(req, res){

	// Clear cookie
	//res.clearCookie("ShoppingCartTotal");
	//res.clearCookie("ShoppingCart");
//console.log(req.cookies.ShoppingCartTotal);
//res.cookie('test1', 'test1');
//res.cookie('test2', 'test2');

//res.send(req.cookies.test1 + req.cookies.test1);

//res.send(JSON.stringify(req.cookies.ShoppingCartTotal))
res.send(JSON.stringify(req.cookies.ShoppingCart));
});


router.post('/carttotal', function(req, res){

	// if cart cookie set
	if(typeof req.cookies.ShoppingCart === 'undefined' ){

		res.send('');
		return;
	}

	//GetCartTotal: function(req, res, cartcookie)
	GetCart.cart.GetCartTotal(req, res, req.cookies.ShoppingCart);

	// Send empty string
	res.send('');

});

// Edit cart
router.post('/editcart', function(req, res){

	// Get the required paramaters
	var getsku = req.body.sku;
	let id = req.body.id;
	let qty = req.body.qty;

	// Reg
	let reg = new RegExp(/^[1-9]{1,100}$/);;

	// Move ahead finding
	if(!reg.test(qty)) {

		res.send('Invalid Quantity.');
	}

	// Cart
	var cart = req.cookies.ShoppingCart;

	// Edit cart using module
	EditCart.UpdateCart.AddToCart(req, res, cart, getsku, qty);

	res.send('');
})


// Removing cart itmes
router.post('/remove-item', function (req, res) {

	// Cart
	var cart = req.cookies.ShoppingCart;

	// Remove items from the cart
	RemoveItems.Remove.DeleteItems(req,res, cart);

	res.send('');
})

// Empty cart rout
router.post('/emptyCart', function (req, res) {

		res.clearCookie("ShoppingCart");
		res.send('');

});

var BuyerAddress  = {

	Shipping: function (req, res, collectionName, finbyInArray, URLToRedirect, returnObject) {

				return new Promise(function (resolve, reject) {

					GetBuyerShipping.FindinCol1(collectionName, finbyInArray).then(function(items) {

					resolve(items);
					}, function(err) {
					reject (err, err.stack);
					});

					}).then(function (items) {

						return new Promise(function (resolve, reject) {

							// IF new return contain
							if(typeof returnObject === 'object'){

								returnObject.result.items = items;

								resolve(res.render(URLToRedirect, returnObject));

							} else {

									resolve(res.render(URLToRedirect, returnObject));
								}


					})


					})

			}

	}



router.all('/checkout', function (req, res) {



		let IfCartExists = req.cookies.ShoppingCart;
		let buyerSession = req.session.buyer;
		let ShoppingCartTotal = req.cookies.ShoppingCartTotal;

		var shippingAddress = '';
		var collectionName = 'buyer_address';
		var URLToRedirect = 'checkout';

		var returnObject = { result: {

									IfCartExists: IfCartExists,
									IsBuyerIsLoggedIn: buyerSession,
									ShoppingCartTotal: ShoppingCartTotal,
									getToken:req.csrfToken()

								}
									};



		// If user is logged in
		if(typeof buyerSession !== 'undefined') {

				// var username
				let username = buyerSession.username;

				var finbyInArray = {email:username};

				// Run promise to get the result
				BuyerAddress.Shipping(req, res, collectionName, finbyInArray, URLToRedirect, returnObject);



		} else {

			res.render('checkout', { result: {

									IfCartExists: IfCartExists,
									IsBuyerIsLoggedIn: buyerSession,
									ShoppingCartTotal: ShoppingCartTotal,
									getToken:req.csrfToken()

								}
									}

					);
			}





});


// Checkout already registered users
router.post('/chekoutRegisteredUser', function (req, res) {


		// get the form shipping-details-52

		let shippingCookies = req.body['shipping-details-52'];

		// Set to cookie
		res.cookie('shipping_address', shippingCookies);

		// Redirect to payment
		res.redirect('/payment');
})


// Testing sending sms
function SendSMSOrderConfirmation( orderid, mob_no ){


  var message = 'Your order has been confirmed ! <br/> Order ID: '+orderid+'';
  var url = 'http://mshastra.com/sendurlcomma.aspx?user=20088619&pwd=b2n6i6&senderid=ABC&mobileno='+mob_no+'&msgtext='+message+'&CountryCode=971';

   request(url, function (error, response, body) {
    if (!error && response.statusCode == 200) {
        console.log(body) // Print the google web page.
     }
})



}


// Guest Register and checkout
router.post('/guestcheckout', function (req, res)  {

	// Check if string is valid
	let reg = new RegExp(/^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/i);


	 // Validate username
	 if(!(reg.test(req.body.email))) {

		// Throw error
		req.session.sessionFlash = {
        type: 'error',
        message: {'error':'Please enter valid email address', 'posted': req.body}
		};

		 return res.redirect('/checkout');
	}


	// Check passowrd
	if(req.body.password.length < 8 || req.body.password.length > 15) {

		// Throw error
		req.session.sessionFlash = {
        type: 'error',
        message: {'error':'Password length must be between 8 to 15 characters', 'posted' : req.body}
		};

		return res.redirect('/checkout');
	}


	// Check both password
	if(req.body.password !== req.body['confirm-password']) {

		// Throw error
		req.session.sessionFlash = {
        type: 'error',
        message: {'error': 'Both password did not matched', 'posted': req.body}
		};

		return res.redirect('/checkout');
	}




	// Check email address is already exists

	// Before doing anything check if email address exits in db
		var query = {email: req.body.email}

		db.collection('buyer').find(query).toArray(function(err, result) {

		if (err) throw err;

			// Get the number for row that is affected
			var num_rows = result.length;

			// Must be 0 for registration
			if(num_rows !== 0) {

				// Require the session
				req.session.sessionFlash = {
					type: 'error',
					message: {'posted': req.body, 'error': 'Email address '+ req.body.email +' is already registred!. <br/> If you forgot password please check the link below.'}
				};


				// Redirect to the page
				return res.redirect('/checkout');


			} else {

				//console.log(req.body);

				// Some indexes need to delete
				delete req.body['confirm-password'];
				delete req.body['submit'];

				// Has password
				let hash = bcrypt.hashSync(req.body.password, 10);
				// Insert the document to document


				var myobj = {
						firstname: req.body['first-name'],
						lastname: req.body['last-name'],
						email: req.body.email

						};


				// Some document need ot edit
				req.body.password = hash;

				var objectId = '';

				// Add some activated
				req.body.activated = 0;

				// escape all vairable
				for (var key in req.body) {
						
						if(key === 'password') {
							
								continue;
						}
						req.body[key] = escape(req.body[key]);
					}

				var document_address = 'buyer_address';

				var document = 'buyer';

				var email = req.body.email;

				// Save the docuemtn
				db.collection(document).save(req.body, (err, result) => {
				if (err) return console.log(err)

					// Get the object id
					objectId = req.body._id;

					// Insert to the table

					// Insert to next db
					var query = {id: objectId, email: email};

					// Insert to another database
					db.collection(document_address).insertOne(query, function(err, res) {

					// Throw error
					if (err) throw err;

					//console.log("1 document inserted");

				});

			})

				// Threed days interval
				var days = 86400000 * 3;


				// Regsiter as
				var registered_as = 0;

				// Create date object
				var dateObj = Date.now(); // 1534596948489

				// Activation links
				var activationLink = 'http://localhost:8888/user-activation/'+dateObj+'/'+req.body._id+'/'+registered_as+'';

				// http://localhost:8888/user-activation/1534599498533/5b78214a6048204305935e17/0

				//console.log(activationLink);

				//alert(dateObj);
				/*
				 * var vFrom = '"Ronnie Shah 👻" <info@sindhbad.com>';
				var vTo = 'bharatrose1@gmail.com';
				var vSubject = '✥ Thank your for you registration  ✔ ✔ ✔';
				var vText = 'Hello world?'; // plain text body;
				var vHtml = '<b>I will really hunt your dream@</b>'; // html body;res.redirect
				* */

				// Send verification email
				var vFrom = '"Sindhbad.com 👻" <info@sindhbad.com>';
				var vTo = req.body.email;
				var vSubject = '✥ Thank your for you registration  ✔ ✔ ✔'
				var vText = 'Hello World';
				var vHtml = '<h1>Please click the link below the verify you account.</h1><a href = "'+activationLink+'">Click Here</a>';


				// Send mail to the client
				All.SendMaileToClient(vFrom, vTo, vSubject, vText, vHtml);


				var SessionData = {
									"username":email,
									"password":hash,
									"usertype":0
								}


				req.session.regenerate(function(errSession) {
							// Buyer session
							if(errSession) {

								console.log(errSession);

							}


							})

				req.session.buyer  = SessionData;

				delete req.body.password;
				delete req.body['confirm-password'];
				delete req.body['submit'];

				let shippingCookies = JSON.stringify(req.body);

				// Set to cookie
				res.cookie('shipping_address', shippingCookies);

				// Render the
				return res.redirect('/payment');



			}

		});



	/*

	// Loop each email address
	for(var key in req.body){

			req.body[key] = escape(req.body[key]);
		}

	// Unset some variable
	*/




});


// Paymeht view
router.get('/payment', function (req, res) {

		let IfCartExists = req.cookies.ShoppingCart;
		let buyerSession = req.session.buyer;
		let ShoppingCartTotal = req.cookies.ShoppingCartTotal;

		var shippingAddress = '';
		var collectionName = 'buyer_address';
		var URLToRedirect = 'checkout';

		var returnObject = { result: {

									IfCartExists: IfCartExists,
									IsBuyerIsLoggedIn: buyerSession,
									ShoppingCartTotal: ShoppingCartTotal,
									getToken:req.csrfToken(),
									shipto: req.cookies.shipping_address

								}
									};
		res.render('payment', returnObject);
	})


// Confirm order
router.all('/order-confirmation', function (req, res) {

		 var orderid = oid.getTime(getOrderId);
		 var IfCartExists = req.cookies.ShoppingCart;
		var buyerSession = req.session.buyer;
		var ShoppingCartTotal = req.cookies.ShoppingCartTotal;
		var buyerShippingAddress = req.cookies.shipping_address;
		
		
		// Object to save
			var returnObject = { result: {

						IfCartExists: IfCartExists,
						IsBuyerIsLoggedIn: buyerSession,
						ShoppingCartTotal: ShoppingCartTotal,
						getToken:req.csrfToken(),
						shipto: req.cookies.shipping_address,
						orderId :orderid

					}
						};



		 if(typeof req.body.paymentmethod !== 'undefined' &&
		 typeof IfCartExists !== 'undefined' &&
		 typeof buyerSession !== 'undefined') {



			// Get the cart cookie
			let cart = req.cookies.ShoppingCart;

			// Date
			let today = new Date();

			// buyer email
			let buyer_email = buyerSession.IsBuyerIsLoggedIn;

			// Ip address
			let ipv4_address = req.connection.remoteAddress;

			// tax amotn
			let taxamount = ShoppingCartTotal.tax;

			// tax percentage
			let taxpercentage = 5;

			// currency
			let currency = 'AED';

			// shipping cost
			let shippingcost = ShoppingCartTotal.shippingCost === 'free' ? 0 : 20;

			// shipping address
			let shippingaddress = req.cookies.shipping_address;

			// Billing
			let billingAddress = typeof req.body['billing-address-same-as-shipping'] !== 'undefined' ? req.cookies.shipping_address : '';

			// status
			let status = 'inprocess';

			// Purchase point
			// Will change letter
			let purchasePoint = 'sindhbad';


			let payment = req.body.paymentmethod;

			// seen
			let seen = '0';

			// Discount
			let discount = ShoppingCartTotal.totaldiscount;

			// total qty
			let totalqty = ShoppingCartTotal.totalqty;

			let data = 	{

							order_id:orderid,
							ipv4_address: ipv4_address,
							ipv6_address: ipv4_address,
							tax_amount : taxamount,
							tax_persentage : taxpercentage,
							discount : discount,
							totalqty : totalqty,
							totaldiscount : discount,
							currency : currency,
							shipping_cost : shippingcost,
							status : status,
							shipping_address : shippingaddress,
							billing_address : billingAddress,
							purchase_date : today,
							purchase_point : purchasePoint,
							payment : payment,
							seen : seen,
							buyer_email :buyerSession.username
					}

			var saveOrder = new Promise(function(resolve, reject){
					
					db.collection('order').save(data, (err, result) => {
						
							if(err) {
									
									reject(err)
								} else {
									
										resolve(result);
									}
					});
			});
			
			
			// Save order details 
			var saveOrderDetails = new Promise(function(resolve, reject){
						
					

						// Append some data
						for(var key in req.cookies.ShoppingCart) {

								// Append order id
								req.cookies.ShoppingCart[key]['orderid'] = orderid;
							}

						// Order details
						let orderDetails = req.cookies.ShoppingCart;
						
						db.collection('orderdetails').insert(orderDetails, (err, result) => {
							
								if(err) {
									
										reject(err)
									} else {
										
											resolve(result);
										}
						})
						
				});
			
			
			// Send Order confirmmation 
			
			var sendOrderConfirmation = new Promise( function ( resolve, reject ) {
				
					// send order confirmation details to the client 
								IfCartExists = JSON.stringify(IfCartExists);
								buyerSession = JSON.stringify(buyerSession);
								ShoppingCartTotal = JSON.stringify(ShoppingCartTotal);
								buyerShippingAddress = req.cookies.shipping_address
								//let orderid = JSON.stringify('56565');
								
								
								var DataToSend = 	{ 	
													IfCartExists: IfCartExists,
													IsBuyerIsLoggedIn: buyerSession,
													ShoppingCartTotal: ShoppingCartTotal,
													getToken:req.csrfToken(),
													shipto: buyerShippingAddress,
													orderid: orderid
												}
												
								
								// Promise two 
								request.post({
									headers: {'content-type': 'application/json'},
									url: 'http://localhost:8888/orderConfirmationTemplate',
									form: DataToSend
								}, function(error, response, body){


				
								if( error ) {
										
										reject(error)
									} else {
										
										resolve(All.SendMaileToClient(
								'info@sindhbad.com',
								req.session.buyer.username,
								'Thank you for your shopping.',
								'Your order has been confirmed !.',
								body));
										
									}
										
								
				
				})
				
				
				})
				
				
			// Send text sms 
			var sendTextSMS = new Promise( function (resolve, reject ) {
				
					var buyerShippingAddress = req.cookies.shipping_address
					
					var ParseAddress = JSON.parse(buyerShippingAddress);

					var mobile_no = ParseAddress['mobile-no'];
					var country = ParseAddress['country'];

					if(IsUAEMobileNumber.UAENumber(country, mobile_no) === true ){

					
					// Then send sms 
						//resolve(SendSMSOrderConfirmation(orderid, mobile_no));

					}
								
				})
				
				
				
			Promise.all([saveOrder, saveOrderDetails, sendOrderConfirmation, sendTextSMS]).then(function(values) {
			
				console.log(values);
			});
			
			// Delete cookies 
			res.clearCookie("ShoppingCart");
			res.clearCookie("ShoppingCartTotal");
			res.clearCookie("shipping_address");
			
			res.render('order-confirmation', returnObject);
			
			
			
		
		} else {
			
				console.log(returnObject);
				res.render('order-confirmation', returnObject);
			
			}
			// Send text message 
			
})

// Creating models
router.all('/create-required-models', function (req, res){

	models.orderModel.createOrderModel(req, res, db);
	models.orderModel.createOrderDetailsMode(req, res, db);

	res.send('created');
})


router.get('/allcookies', function (req, res) {
	
	
	
	//console.log(IsUAEMobileNumber.UAENumber(country, number));
	
	res.send(req.cookies);
	//console.log('Hi Hi ha');
	//res.send(req.cookies);
	//console.log(buffer.length);
})




// Writing promises for three function
/*
 * 	Save the order record in order table
 * 	Save the order record in orderdetails table
 * 	Send Order confirmation email with template
 *
 * */



router.get('/PostOrderConfirmationTemplate', function (req, res) {

let IfCartExists = JSON.stringify(req.cookies.ShoppingCart);
let buyerSession = JSON.stringify(req.session.buyer);
let ShoppingCartTotal = JSON.stringify(req.cookies.ShoppingCartTotal);
let buyerShippingAddress = req.cookies.shipping_address
let orderid = JSON.stringify('56565');

var result = 	{ 		IfCartExists: IfCartExists,
						IsBuyerIsLoggedIn: buyerSession,
						ShoppingCartTotal: ShoppingCartTotal,
						getToken:req.csrfToken(),
						shipto: buyerShippingAddress,
						orderid: orderid
				}



console.log(result);
var data = '{"hello":"World"}';
//var json_obj = JSON.parse(result);
request.post({
    headers: {'content-type': 'application/json'},
    url: 'http://localhost:8888/orderConfirmationTemplate',
    form: result
}, function(error, response, body){



/*
  console.log(All.SendMaileToClient(
								'info@sindhbad.com',
								'bharatrose1@gmail.com',
								'Order confirmation ',
								'Your order confirmed',
								body));

*/

res.send(body);
});




})





router.get('/getOrderConfirmationTemplateGet', function (req, res) {

let IfCartExists = JSON.stringify(req.cookies.ShoppingCart);
let buyerSession = JSON.stringify(req.session.buyer);
let ShoppingCartTotal = JSON.stringify(req.cookies.ShoppingCartTotal);
let buyerShippingAddress = req.cookies.shipping_address
var orderid = '565656';

var result = { 			IfCartExists: IfCartExists,
						IsBuyerIsLoggedIn: buyerSession,
						ShoppingCartTotal: ShoppingCartTotal,
						getToken:req.csrfToken(),
						shipto: buyerShippingAddress,
						orderid: orderid
		}


request.get({url: "http://localhost:8888/orderConfirmationTemplate", qs: {data: result}}, function(err, response, body) {


    res.send(body);
})



})


/* Administrator section start from here */
// Admin login route
router.get('/admin-14e1813e3d0cf9da1a9dafc6afadff37/login', function (req, res) {
	
	res.render('admin-14e1813e3d0cf9da1a9dafc6afadff37/login.ejs', {result: {getToken:req.csrfToken()}});
})


// Login post request 
router.post('/admin-14e1813e3d0cf9da1a9dafc6afadff37/admin_login_request', function (req, res) {
	
	// expected data 
	/*
	 * { _csrf: 'Gw7mb7cI-ksJfmG25Vz2LDuRWXQ26raQHagM',
  username: '',
  password: '',
  remember: '1' }
	 * */
	
	console.log(req.body);
	
	var email = req.body.username;
	 var password = req.body.password;

	 var Reg  = /^\S+@[\w\d.-]{2,}\.[\w]{2,6}$/i;

	 // Validate username
	 if(!(Reg.test(email))) {

		// Throw error
		req.session.sessionFlash = {
        type: 'error',
        message: 'Please enter valid email address'
		};
	}

	// Lets do query
	db.collection('admin_user').find({email:email}).toArray(function(err, result) {

    // If error occured
    if (err) throw err;

    // Length of object must be 1
    if(result.length !== 1) {

			// Flash the error
		req.session.sessionFlash =
			{
			type: 'error',
			message: 'Unable to find username '+email
			};
			
			console.log(`No user found with ${email}`)
			// Redirect
			return res.redirect('/admin-14e1813e3d0cf9da1a9dafc6afadff37/login');

	} else {

			// Get the password
			var hashed_password = (result[0].password);

			// Using bcrypt for password validation
			var IsValidPass = bcrypt.compareSync(password, hashed_password); // true

			// Check if password
			if(IsValidPass === true ) {

				// Get server key
				var serverKey = All.ServerKey();

				var SessionData = {
									"username":email,
									"password":hashed_password,
									"usertype":'administartor'
								}
								
				

				req.session.regenerate(function(errSession) {

							if(errSession)  {

								console.log(errSession);
							}
				})

				req.session.administartor  = SessionData;
				
				return res.redirect('/admin-14e1813e3d0cf9da1a9dafc6afadff37/');
				
				

			} else {

					req.session.sessionFlash =
					{
						type: 'error',
						message: 'Invalid password'
					};
					
					console.log('login failed')
					// Redirect to login page
					return res.redirect('/admin-14e1813e3d0cf9da1a9dafc6afadff37/login');
				}



		}

	// Get the password
	//var password = result[password'];


  });
  
  
	
})

// create admin model


// Sindhbad admin index rount 
router.get('/admin-14e1813e3d0cf9da1a9dafc6afadff37/', function (req, res) {
	
	// check admin session is set 
	if(typeof req.session.administartor === 'undefined') {
		
			res.redirect('/admin-14e1813e3d0cf9da1a9dafc6afadff37/login');
		}
	res.render('admin-14e1813e3d0cf9da1a9dafc6afadff37/index.ejs');
})

// Order rout 
router.get('/admin-14e1813e3d0cf9da1a9dafc6afadff37/orders', function (req, res) {
	
	res.render('admin-14e1813e3d0cf9da1a9dafc6afadff37/orders.ejs');
})


// Get order by order id route
router.get('/admin-14e1813e3d0cf9da1a9dafc6afadff37/order-details', function (req, res) {
	
	res.render('admin-14e1813e3d0cf9da1a9dafc6afadff37/order-details.ejs');
})


// Create administrator model 

router.get('/admin-14e1813e3d0cf9da1a9dafc6afadff37/createAdminModel', function (req, res) {
	
	/*
	// Whenever need try to make that point of time 
	
	var password = bcrypt.hashSync('123@husABID', 10);
	var date = mysqlDate.mysqldate(new Date());
	var email = 'admin@sindhbad.com';
	
	// Moving to un profession way 
	db.collection('admin_user').insert({
		  user_id:1,
		  firstname: '',
		  lastname: '',
		  email: email,
		  username: 'sindhbad',
		  password: password,
		  create_at: date,
		  update_at: date,
		  logdate: date,
		  is_active: 0,
		  firstfailure: date,
		  status: 0,
		  refresh_token:'',
		  failure_number:''
  
});

	*/
})




router.get('/testing1', function (req, res) {

console.log(JSON.stringify('Helo 5656'));
/*
request.post({
  headers: {'content-type' : 'application/x-www-form-urlencoded'},
  url:     'http://localhost:8888/testing2',
  body:    "mes=heydude"
}, function(error, response, body){
  console.log(body);
});

*/

})



router.post('/testing2', function (req, res) {


	//res.send('fuck you')
	//res.send(req.body);
	res.send(JSON.stringify(req.body));
	console.log(req.body)


})


// For testing pourpose remove all doc 
router.get('/remove', function (req, res) {
	
	db.collection('buyer').remove({})
	db.collection('buyer_address').remove({})

	
		
	
	})

// If url not matched with server defiend route
router.get('/test', function(req, res){

let hash = bcrypt.hashSync('thisismylife', 10);

console.log(escape('$2b$10$/JI1oE8X6/Lu10l9.6DnGe7FnaJ3nFTTxlHSDc/k6mg9OiXoOeg3m'));
//res.render('test.ejs');
  //var orderid = '98955655656';
  //var mob_no = '0565973854';
  

 // console.log(SendSMSOrderConfirmation(orderid, mob_no));
 
});



// Testing one

// If url not matched with server defiend route
router.get('*', function(req, res){



	var fullUrl = req.protocol + '://' + req.get('host') + req.originalUrl;

	res.render('404.ejs', {url:fullUrl})
});






module.exports = router;
