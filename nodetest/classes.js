var LoadedModules = require('./required-modules')
const express = LoadedModules.express
const bodyParser = LoadedModules.bodyParser
const kill = LoadedModules.kill
const csurf = LoadedModules.csurf
const cookieParser = LoadedModules.cookieParser
const session = LoadedModules.session
const flash = LoadedModules.flash
const handlebars = LoadedModules.handlebars
const validation = LoadedModules.validation
const sessionStore = LoadedModules.sessionStore
const crypto = LoadedModules.crypto
const fileUpload = LoadedModules.fileUpload

const nodemailer = require('nodemailer')

const bcrypt = LoadedModules.bcrypt
const validUrl = LoadedModules.validUrl
const fs = LoadedModules.fs
const randomstring = LoadedModules.randomstring
const compression = LoadedModules.compression
const routeValidator = LoadedModules.routeValidator
const MongoDB = LoadedModules.MongoDB
const MongoClient = LoadedModules.MongoClient
const ObjectID = LoadedModules.ObjectID

class MarketPlace {
  constructor () {
    this.username = 'This is username'
    this.pasword = 'Thi is my password'

    Object.defineProperties(this, {
      username: {
        enumerable: false, // "Hides" the property
        configurable: false, // Prevents deletion of the property
        writable: false, // Prevents the value from being changed
        value: 'type your username'
      },
      password: {
        enumerable: false, // "Hides" the property
        configurable: false, // Prevents deletion of the property
        writable: false, // Prevents the value from being changed
        value: 'type your username'
      }

    })
  }

  // Sending Mail to the client
  SendMaileToClient (vFrom, vTo, vSubject, vText, vHtml) {
    let transporter = nodemailer.createTransport({
      host: 'mail.sindhbad.com',
      port: 587,
      secure: false, // true for 465, false for other ports
      auth: {
        user: 'info@sindhbad.com', // generated ethereal user
        pass: '123@husABIDjust' // generated ethereal password
      },
      tls: {
        // do not fail on invalid certs
        rejectUnauthorized: false
      }
    })

    // setup email data with unicode symbols
    let mailOptions = {
      from: vFrom, // sender address
      to: vTo, // list of receivers
      subject: vSubject, // Subject line
      text: vText, // plain text body
      html: vHtml // html body
    }

    // send mail with defined transport object
    transporter.sendMail(mailOptions, (error, info) => {
      if (error) {
        return console.log(error)
      }
      const nodemailer = require('nodemailer')

      console.log('Message sent: %s', info.messageId)
      // Preview only available when sending through an Ethereal account
      console.log('Preview URL: %s', nodemailer.getTestMessageUrl(info))

      // Message sent: <b658f8ca-6296-ccf4-8306-87d57a0b4321@example.com>
      // Preview URL: https://ethereal.email/message/WaQKMgKddxQDoou...
    })
  }

  // Handle database connection
  DBConnection (username, password) {
    // Get the username
    username = this.username

    console.log(username + this.username)
  }

  // Creat mongodb Modele
  CreateModels (db) {
    // Designiner Seller modle
    db.createCollection('seller', {
      validator: {
        $jsonSchema: {
          bsonType: 'object',
          properties: {
            website: {
              bsonType: 'string'
            },

            email: {
              bsonType: 'string'
            },

            group_id: {
              bsonType: 'int'
            },

            store_id: {
              bsonType: 'int'
            },

            create_at: {
              bsonType: 'date'
            },

            updated_at: {
              bsonType: 'date'
            },

            prifix: {
              bsonType: 'string'
            },

            firstname: {
              bsonType: 'string'
            },

            lastname: {
              bsonType: 'string'
            },

            gender: {
              enum: ['male', 'female', 'others']
            },

            customer_entity: {
              bsonType: 'string'

            },

            DOB: {
              bsonType: 'date'
            },

            password: {
              bsonType: 'string'
            },

            password_hashed: {
              bsonType: 'string'
            },

            verified: {
              enum: ['0', '1']
            },

            customer_type: {
              enum: ['0', '1']
            }

          }
        }
      }
    })

    // Designing buyer model
    db.createCollection('buyer', {
      validator: {
        $jsonSchema: {
          bsonType: 'object',
          properties: {
            website: {
              bsonType: 'string'
            },

            email: {
              bsonType: 'string'
            },

            group_id: {
              bsonType: 'int'
            },

            store_id: {

              bsonType: 'int'
            },

            create_at: {
              bsonType: 'date'
            },

            updated_at: {
              bsonType: 'date'
            },

            prifix: {
              bsonType: 'string'
            },

            firstname: {
              bsonType: 'string'
            },

            lastname: {
              bsonType: 'string'
            },

            gender: {
              enum: ['male', 'female', 'others']
            },

            customer_entity: {
              bsonType: 'string'
            },

            DOB: {
              bsonType: 'date'
            },

            password: {
              bsonType: 'string'
            },

            password_hashed: {
              bsonType: 'string'
            },

            verified: {
              enum: ['0', '1']
            },

            customer_type: {
              enum: ['0', '1']
            }

          }
        }
      }
    })

    // Designing ProductCatelog model
    db.createCollection('product_catelog', {

      validator: {
        $jsonSchema: {
          bsonType: 'object',
          properties: {
            name: {
              bsonType: 'string'
            },

            seller_email: {
              bsonType: 'string'
            },

            sku: {
              bsonType: 'string'
            },

            category_id: {
              bsonType: 'int'
            },

            discription: {
              bsonType: 'string'
            },

            short_discription: {
              bsonType: 'string'
            },

            avaibility_from: {
              bsonType: 'date'
            },

            avaibility_to: {
              bsonType: 'date'
            },

            regular_price: {
              bsonType: 'double'
            },

            product_condition: {
              bsonType: 'string'
            },

            items_available: {
              bsonType: 'int'
            },

            supplier_sku: {
              bsonType: 'string'
            },

            published: {
              enum: ['0', '1']
            },

            phonenumber: {
              bsonType: 'int'
            },

            seller_type: {
              enum: ['0', '1']
            },

            product_unite: {
              bsonType: 'string'
            },

            unite_amount: {
              bsonType: 'string'
            },

            size: {
              bsonType: 'string'
            },

            delivery_service: {
              bsonType: 'string'
            },

            delivery_period: {
              bsonType: 'string'
            },

            seller_id: {
              bsonType: 'string'
            },

            delivery_period: {
              bsonType: 'string'
            },

            shipping_cost: {
              bsonType: 'string'
            },

            seller_note: {
              bsonType: 'string'
            },

            warranty: {
              bsonType: 'string'
            },

            specifications_key: {
              bsonType: 'array'
            },

            specifications_value: {
              bsonType: 'array'
            },

            product_article_html: {
              bsonType: 'string'
            },

            images: {
              bsonType: 'array'
            },

            product_categlog_attributes: {

				 bsonType: 'array'

				 }

          }
        }
      }
    })

    // Creating seller address model
    // Designiner Seller modle
    db.createCollection('seller_address', {
      validator: {
        $jsonSchema: {
          bsonType: 'object',
          properties: {
            seller_id: {
              bsonType: 'string'
            },

            country: {
              bsonType: 'string'
            },

            city: {
              bsonType: 'string'
            },

            email: {
              bsonType: 'string'
            },

            area: {
              bsonType: 'string'
            },

            street_no: {
              bsonType: 'int'
            },

            building_no: {
              bsonType: 'string'
            },

            floor_no: {
              bsonType: 'string'
            },

            landmark: {
              bsonType: 'string'
            },

            location_type: {
              enum: ['male', 'female', 'others']
            },

            mobile_no: {
              bsonType: 'int'
            },

            land_line_no: {
              bsonType: 'int'
            },

            lattitude: {
              bsonType: 'string'
            },

            longititude: {
              bsonType: 'string'
            },

            shipping_note: {
              bsonType: 'string'
            },

            document_link: {
              enum: ['0', '1']
            }

          }
        }
      }
    })

    // Designing buyer address details
    db.createCollection('buyer_address', {
      validator: {
        $jsonSchema: {
          bsonType: 'object',
          properties: {
            seller_id: {
              bsonType: 'string'
            },

            country: {
              bsonType: 'string'
            },

            city: {
              bsonType: 'string'
            },

            email: {
              bsonType: 'string'
            },

            area: {
              bsonType: 'string'
            },

            street_no: {
              bsonType: 'int'
            },

            building_no: {
              bsonType: 'string'
            },

            floor_no: {
              bsonType: 'string'
            },

            landmark: {
              bsonType: 'string'
            },

            location_type: {
              enum: ['male', 'female', 'others']
            },

            mobile_no: {
              bsonType: 'int'
            },

            land_line_no: {
              bsonType: 'string'
            },

            lattitude: {
              bsonType: 'string'
            },

            longititude: {
              bsonType: 'string'
            },

            shipping_note: {
              bsonType: 'string'
            },

            document_link: {

              bsonType: 'string'
            }

          }
        }
      }
    })
  }

  // Getting post request where user willl upload the product
  ValidateUserData (PostData) {

    // will be on this formate

  }

  // Capatalizing string
  capitalizeFirstLetter (string) {
    // Return the string
	    return string.charAt(0).toUpperCase() + string.slice(1)
  }

  // Valadating data against the server
  IsDataValid (incomingData, ValidData) {
    var allValid = true
    // Loop each incoming data
    for (var k in ValidData) {
      // If incoming data has property
      if (incomingData.hasOwnProperty(k)) {
        if (ValidData[k] !== '') {
          // Get regression value
          var regression = ValidData[k]

          // console.log(incomingData[k]);

          // Validate aginst the data
					 if (!(regression.test(incomingData[k]))) {
            // Change variable that data is not valid
            allValid = incomingData[k]

            // Break the loop
            break
						 }
        }
      }
    }

    // If all data is not valid
    if (allValid !== true) {
      // Only this characters allowed with returning message
      var OnlyThisAllowed = /[^a-zA-Z]/

      // Return message with with data is not valid
      return 'Please enter valid ' + this.capitalizeFirstLetter(k).replace(OnlyThisAllowed, ' ') + ' ' + incomingData[k] + ''
    }

    // return true
    return true
  }

  ServerKey () {
    return 'da1a9dafc6afadff37'
  }

  // Getting Rows data in column
  filterByProperty (array, prop, value) {
    // Hold return value
    var batKicks = []

    // Loop json data size
    for (var i = 0; i < array.length; i++) {
      // If key and value matched
      if (array[i][prop] === value) {
        // Push the value to array
        batKicks.push(array[i])
      }
    }

    return batKicks.sort()
  }

  // Sorting json object by number
  HighToLowNumber (json, prop) {
    // Sort the json object
    var fun = json.sort(function (obj1, obj2) {
      // Ascending: first age less than the previous
      return obj2[prop] - obj1[prop]
    })

    return fun
  }

  // Sorting  json object numerice hight to low
  LowToHighNumber (json, prop) {
    var fun = json.sort(function (obj1, obj2) {
      // Ascending: first age less than the previous
      return obj1[prop] - obj2[prop]
    })

    return fun
  }

  GetRecordFromTo (from, to) {
    // Return json data
    return json.splice(from, to)
  }

  // Image manipulation
  ImageManipulation () {
    $.getJSON('static-product/product-cataloges.json', function (json) {
      // console.log(filterByProperty(json, 'category_id', '314'));
      // console.log(json);
      // console.log(LowToHighNumber(json, 'regular_price'));

      json.forEach(function (data) {
        // console.log(data.images);
        // Get the image s
        var images = data.images

        // All images
        var AllJsonImage = JSON.parse(images)

        // Parse the json code
        var parsejson = JSON.parse(images)[0]

        // var image link
        var imgLink = 'http://localhost/img/product-images'

        // var img link
        var PrimaryImage = imgLink + '/' + parsejson

        // append this images to the object with new property

        data.primar_image = PrimaryImage

        // Get rest of image link
        var GRIL = []

        // Rest of images as well required for product discription page
        if (AllJsonImage.length > 1) {
          // Skip the first image and get rest of image
          var restOfJsonImg = AllJsonImage.slice(1)

          // Just like this
          // console.log(restOfJsonImg);

          restOfJsonImg.forEach(function (restOfImages) {
            // Get the images
            // console.log(restOfImages);

            var RestImagesLink = PrimaryImage + '/' + restOfImages

            GRIL.push(RestImagesLink)
          })

          data.restOfImage = GRIL
        }

        console.log(data)
      })
    })
  }

  // check if the seller is logged in
  IsSellerIsLoggedIn (req) {
    // If variable is undefined
    if (req.session.seller) {
      // return seller session data
      return req.session.seller
    }

    return false
  }

  // check if the seller is logged in
  IsBuyerIsLoggedIn (req) {
    // if(typeof req.session.user !== "undefined" || req.session.user === true){}
    // If variable is undefined
    if (typeof req.session.buyer === 'undefined' || req.session.buyer !== true) {
      // return seller session data
      return false
    } else {
      return req.session.buyer
    }
  }

  // Get seller session data
  GetSellerSessionData (req) {
    // return object
    return req.session.seller
  }

  // Individual Data Validation
  ValidateDate (data, regrex) {
    // Using test
    return regrex.test(data)
  }

  // If incoming data is not empty
  InvalidDataWithError (req, message, data, regx) {
    // Check seller type
    if (data === '') {
      // Session flash error message and redirect
      req.session.sessionFlash = {

        type: 'error',
        message: { 'posted': req.body, 'error': message }
      }

      return false
    }

    // Return true
    return true
  }

  // If data not matched
  IfValueNoteMatchRegx (req, data, regrex, message) {
    // Validate
    if (this.ValidateDate(data, regrex) !== true) {
      // Session flash error message and redirect
      req.session.sessionFlash = {

        type: 'error',
        message: { 'posted': req.body, 'error': message }
      }

      // Return false
      return false
    }

    // return true
    return true
  }

  // Get the category json file
  getCategoryJson (fs) {
    // Link for the json data
    var link = 'assets/categories.json'

    // Content of json data
    var contents = JSON.parse(fs.readFileSync(link, 'utf8'), true)

    return contents
  }
  // Read category.json file for category display
  GetCategoryFirstDimesion (link, fs) {
    // Link for the json data
    var link = 'assets/categories.json'

    // Content of json data
    var contents = JSON.parse(fs.readFileSync(link, 'utf8'), true)

    // Get first dimesion
    var GetFirstDime = []

    // Loop each
    for (var k in contents) {
      GetFirstDime.push(k)
    }

    // Return contnet
    return GetFirstDime
  }

  // Upload images
  UploadImages (req, Ename, randomstring) {
    // Need to check if file is set
    if (!req.files[Ename]) {
      // Require session
      return 'Please select the images.'
    }

    // The name of the input field (i.e. "sampleFile") is used to retrieve the uploaded file
    let product_images = req.files[Ename]

    // To append filenames
    let GetFileName = []

    // Check if index is undefined
    if (typeof product_images.length === 'undefined') {
      // Append images
      product_images = [product_images]
    }

    // Check dbimages
    var DbImagesName = []

    // Loop each images
    for (var i = 0; i < product_images.length; i++) {
      var name = product_images[i].name

      // Get the size sampleFile[i].name
      var size = product_images[i].data.length

      // IF size is bigger then 50 kb
      if (size > 50 * 1024) {
        // Return messsage
        return 'File size only allowed to 50KB Check filename :' + name + ' Check  file index Number ' + i
      }

      // Get the file type
      var mimetype = product_images[i].mimetype

      // Valid files
      var ValidImages = ['image/jpeg', 'image/gif', 'image/jpg', 'image/bmp', 'image/png']

      // If mimetype is in array then
      var IsImageValid = ValidImages.indexOf(mimetype)

      // If it's -1 then
      if (IsImageValid == -1) {
        return 'Invalid image file type : ' + name + mimetype + ' only jpg,png,jpeg,bmp files are accepted'
      }

      // Push images name to array
      GetFileName.push(size)

      // Get the random string
      let randomStr = randomstring.generate(5)
      // Rename images name
      name = new Date().getTime() + randomStr + name

      // Upload images
      product_images[i].mv('public/img/' + name + '', function (err) {
        if (err) {
          // Return error
          return err
        }
      })

      // Get the renamed images names for db
      DbImagesName.push(name)
    }

    // console.log(DbImagesName);

    // Return db name
    return DbImagesName
  }

  // Is files is valid i was not ready to write, too strict program
  // But i was unable to convince to my self, i should write
  IsFilesValid (req, Ename) {
    var allValidFiles = []

    // Need to check if file is set
    if (!req.files[Ename]) {
      // Require session
      allValidFiles.push('Please select images.')

      // return
      return allValidFiles
    }

    // The name of the input field (i.e. "sampleFile") is used to retrieve the uploaded file
    let product_images = req.files[Ename]

    // To append filenames
    let GetFileName = []

    // If all valid

    // Check if index is undefined
    if (typeof product_images.length === 'undefined') {
      // Append images
      product_images = [product_images]
    }

    // Loop each images
    for (var i = 0; i < product_images.length; i++) {
      var name = product_images[i].name

      // Get the size sampleFile[i].name
      var size = product_images[i].data.length

      // IF size is bigger then 50 kb
      if (size > 50 * 1024) {
        // Return messsage
        allValidFiles.push('Image size exceeds, only 51200 KB images size allowed')

        // Break the loop
        break
      }

      // Get the file type
      var mimetype = product_images[i].mimetype

      // Valid files
      var ValidImages = ['image/jpeg', 'image/gif', 'image/jpg', 'image/bmp', 'image/png']

      // If mimetype is in array then
      var IsImageValid = ValidImages.indexOf(mimetype)

      // If it's -1 then
      if (IsImageValid == -1) {
        allValidFiles.push('Only images type jpeg, gif, jpg, bmp, png are allowed')

        // Break the loop
        break
      }

      // return true
      allValidFiles.push(true)
    }

    return allValidFiles
  }

  // Checking current value
  ifTrue (currentValue) {
    return currentValue === true
  }

  // Removing array value
  removeIfExists (array, element) {
    const index = array.indexOf(element)

    if (index !== -1) {
      array.splice(index, 1)
    }

    return array
  }

  // Find multiple data
  FindDataByKey (db, collectionname, finbyInArray, callback)	{
    // Db collection
    var r = db.collection(collectionname).find(finbyInArray).toArray((err, result) => {
      if (err) throw err
      // renders index.ejs
      return callback(result)
    })

    return r
  }

  // Find one data
  FindDataByKeyOne (db, collectionname, finbyInArray, callback)	{
    // Db collection
    var r = db.collection(collectionname).findOne(finbyInArray, function (err, result) {
      if (err) throw err
      // renders index.ejs
      return callback(result)
    })

    return r
  }

  // Get all collcetion
  GetCollection (db, categoryId, limitBy, SkipFrom, collectioName, callback) {
    try {
      // Get current date
      var utc = new Date().toJSON().slice(0, 10).replace(/-/g, '-')

      // Run the database collection

      /* Before i had in find paramaters /*
          'date-available-from': { $lte: utc },
          'date-available-to': { $gte: utc },
        */


      var records = db.collection(collectioName).find(
        {
          'categoryId': categoryId,


          'status': '1',
          'avaibility': '1'
        }, {
          projection:
							{
							  product_name: 1,
							  categoryId: 1,
							  images: 1,
							  'regular-price': 1,
							  'special-price': 1,
							  sku: 1,
							  subCategoryId: 1,
							  subSubCategoryId: 1

							} }
      ).skip(SkipFrom).limit(limitBy).toArray(function (err, result) {
        if (err) throw err

        // Check not empty result
        if (result.length < 1) {
          result = 'No record found by the id ' + categoryId + '.'
		  } else {
		  // If result is object
          if (typeof result === 'object') {
            var discount = ''
            // Iritate each object

            for (var i in result) {
              var RegularPrice = result[i]['regular-price']

              // Special price
              var SpecialPrice = result[i]['special-price']

              // If
              if (SpecialPrice !== '' && SpecialPrice < RegularPrice) {
                // Calculate discount
                discount = (((RegularPrice - SpecialPrice) / RegularPrice) * 100)

                // var DiscountPresent = discount.toFixed(0);
                var parse = parseFloat(discount)

                result[i]['discount'] = parse.toFixed(0)
              }
            }
          }
        }

        // Return call back
        return callback(result)
      })
    } catch (error) {
      console.log(error)
    }

	    return records
  }
}

// Export module
module.exports = MarketPlace
