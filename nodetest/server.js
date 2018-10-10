var LoadedModules = require('./required-modules');

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


// Defined routes 
var AllRoutes = require('./app/routes/index.js');

app.use('/', AllRoutes);



// Product discription





/* Route that is required for the application sindhbad application */
/* Rout Name 									 Paramaters 				Function */
/* Register => 										Get						Registration purpose
 * Login =>											GET						For login
 * user-buyer-14e1813e3d0cf9da1a9dafc6afadff37  	POST						Buyer Dash Board
 * user-admin-14e1813e3d0cf9da1a9dafc6afadff37		POST						Seller Dash Board
 * category/{Cagegory_name}/{Category_id}			GET							Get product by category name and id
 * discription/{name}/{id}/{sku}					GET							Product discription
 * Cart												GET							USER Cart
 *
 * ROUT BY THE BACKEND
 * ====================================================================================
 *
 * create-product										POST							Create product by seller
 * register-requist										POST							User Registration
 * verify-user?timestamp={}&email={}&usertype = {} 		GET								Register user verification
 * read-product-by-id									NONE(METHOD)
 * login-request										POST							For user login
 * lougout-request										POST							Logout the user
 * ProductMessageBySku()								POST							Sending Messge to the seller
 *
 * */


app.listen(app.get('port'), function() {

	console.log('listening on 8888')

})


