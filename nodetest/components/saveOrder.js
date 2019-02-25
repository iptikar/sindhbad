var uniqid = require('uniqid')

var OrderConfirmation = {

  ConfirmOrder: function (req, res, db) {
    return new Promise(function (resolve, reject) {
      // Read file

      try {
        var SaveOrder = ''

        resolve(SavingOrder(req, res, db))
      } catch (error) {
        reject(error)
      }
    }).then(function (SaveOrder) {
      return new Promise(function (resolve, reject) {
      // Read file

        try {
          var SaveOrder = ''

          resolve(SendOrderConfirmation(req, res, db))
        } catch (error) {
          reject(error)
        }
      })
    })
  }

}

// Write differnet function
function SavingOrder (req, res, db) {
  var orderid = uniqid()
		 let IfCartExists = req.cookies.ShoppingCart
  let buyerSession = req.session.buyer
  let ShoppingCartTotal = req.cookies.ShoppingCartTotal

		 if (typeof req.body.paymentmethod !== 'undefined' &&
		 typeof IfCartExists !== 'undefined' &&
		 typeof buyerSession !== 'undefined') {
    // Get the cart cookie
    let cart = req.cookies.ShoppingCart

    // Date
    let today = new Date()

    // buyer email
    let buyer_email = buyerSession.IsBuyerIsLoggedIn

    // Ip address
    let ipv4_address = req.connection.remoteAddress

    // tax amotn
    let taxamount = ShoppingCartTotal.tax

    // tax percentage
    let taxpercentage = 5

    // currency
    let currency = 'AED'

    // shipping cost
    let shippingcost = ShoppingCartTotal.shippingCost === 'free' ? 0 : 20

    // shipping address
    let shippingaddress = req.cookies.shipping_address

    // Billing
    let billingAddress = typeof req.body['billing-address-same-as-shipping'] !== 'undefined' ? req.cookies.shipping_address : ''

    // status
    let status = 'inprocess'

    // Purchase point
    // Will change letter
    let purchasePoint = 'sindhbad'

    let payment = req.body.paymentmethod

    // seen
    let seen = '0'

    // Discount
    let discount = ShoppingCartTotal.totaldiscount

    // total qty
    let totalqty = ShoppingCartTotal.totalqty

    let data = 	{

      order_id: orderid,
      ipv4_address: ipv4_address,
      ipv6_address: ipv4_address,
      tax_amount: taxamount,
      tax_persentage: taxpercentage,
      discount: discount,
      totalqty: totalqty,
      totaldiscount: discount,
      currency: currency,
      shipping_cost: shippingcost,
      status: status,
      shipping_address: shippingaddress,
      billing_address: billingAddress,
      purchase_date: today,
      purchase_point: purchasePoint,
      payment: payment,
      seen: seen,
      buyer_email: buyerSession.username
    }

    // Save document to order table
    db.collection('order').save(data, (err, result) => {
      if (err) {
				 // Throw error
				 console.log(err)
      } else {
        // Object to save
        var returnObject = { result: {

          IfCartExists: IfCartExists,
          IsBuyerIsLoggedIn: buyerSession,
          ShoppingCartTotal: ShoppingCartTotal,
          getToken: req.csrfToken(),
          shipto: req.cookies.shipping_address,
          orderId: orderid

        }
        }

        // Append some data
        for (var key in req.cookies.ShoppingCart) {
          // Append order id
          req.cookies.ShoppingCart[key]['orderid'] = orderid
        }

        // Order details
        let orderDetails = req.cookies.ShoppingCart

        // Save multiple document to orderdetails
        db.collection('orderdetails').insert(orderDetails, (err1, result1) => {
          if (err1) {
            // Console error
            console.log(err1)
          }
        })

        // We need to send order confirmation details to buyer
        // We need to send sms to the user about the id

        // Need to insert to another table

        res.render('order-confirmation', returnObject)
      }
    })
  }
}

function SavingOrderDetails (req, res, db) {

}

// Send order confirmation
function SendOrderConfirmation (req, res, db) {

}
