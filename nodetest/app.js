// Need to write module for mongdb database connection details 

// Express, bodyParser, app
var express = require('express')
, bodyParser= require('body-parser')
, app = express();

/* This block is exporting modules to class moduel */
// Setting app prot 
app.set('port', 8888);

/* Something need to kill port */

const kill = require('kill-port')




// Form CSRF Protection
const csurf = require('csurf');

// Using CookieParser
var cookieParser = require('cookie-parser');

// Session module
var session = require('express-session');
// http://expressjs-book.com/index.html%3Fp=128.html
// https://www.tutorialspoint.com/mongodb/mongodb_relationships.htm

// Express flash for message
var flash = require('express-flash');

var handlebars = require('express-handlebars')

// Validation for any data server incounter
var validation    =     require("validator");

// Sesssion storage
var sessionStore = new session.MemoryStore;


// To Create Crypto string
var crypto = require('crypto');

// Express fileupload
const fileUpload = require('express-fileupload');

var nodemailer = require('nodemailer');

// Bycrypt password hasing
const bcrypt = require('bcrypt');

// Common url validation methods
var validUrl = require('valid-url');

// File systme
const fs = require('fs');

// Using random string
var randomstring = require("randomstring");

// Compressing all data in server side
var compression = require('compression')

// Rout Validation
var routeValidator = require('express-route-validator');

// Csrf middle waredf
const csrfMiddleware = csurf({
  cookie: true
});


// In production
debug = require('debug')('http');


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

