// Express, bodyParser, app
var express = require('express')

var bodyParser = require('body-parser')

var app = express()

/* Something need to kill port */
const kill = require('kill-port')

// Form CSRF Protection
const csurf = require('csurf')

// Using CookieParser
const cookieParser = require('cookie-parser')

// Session module
const session = require('express-session')

// Express flash for message
const flash = require('express-flash')

const handlebars = require('express-handlebars')

// Validation for any data server incounter
const validation = require('validator')

// Sesssion storage
const sessionStore = new session.MemoryStore()

// To Create Crypto string
const crypto = require('crypto')

// Express fileupload
const fileUpload = require('express-fileupload')

const nodemailer = require('nodemailer')

// Bycrypt password hasing
const bcrypt = require('bcrypt')

// Common url validation methods
const validUrl = require('valid-url')

// File systme
const fs = require('fs')

// Using random string
const randomstring = require('randomstring')

// Compressing all data in server side
const compression = require('compression')

// Rout Validation
const routeValidator = require('express-route-validator')

// Mongodb module
const MongoDB = require('mongodb')

// Mongo Client
const MongoClient = MongoDB.MongoClient

// Getting object id
const ObjectID = MongoDB.ObjectID

// require classes
const MarketPlace = require('./classes.js')

module.exports = {
  express: express,
  bodyParser: bodyParser,
  kill: kill,
  csurf: csurf,
  cookieParser: cookieParser,
  session: session,
  flash: flash,
  handlebars: handlebars,
  validation: validation,
  sessionStore: sessionStore,
  crypto: crypto,
  fileUpload: fileUpload,
  nodemailer: nodemailer,
  bcrypt: bcrypt,
  validUrl: validUrl,
  fs: fs,
  randomstring: randomstring,
  compression: compression,
  routeValidator: routeValidator,
  MongoDB: MongoDB,
  MongoClient: MongoClient,
  ObjectID: ObjectID,
  MarketPlace: MarketPlace

}
