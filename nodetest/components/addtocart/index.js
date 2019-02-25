const LoadedModules = require('../../required-modules')
var MisFunctions = require('../../components/functions.js')

// get the session
const session = LoadedModules.session

var cart = {

  AddToCart: function (req, res, sku, name, image, qty, price, id) {
    // Var object
    var obj = {}

    // Set the cookie name
    obj.CartCookieName = 'SetCartCooki565656'

    obj.sku = sku
    obj.name = name
    obj.image = image
    obj.qty = qty
    obj.price = price
    obj.id = id

    // Get seller email as well
    var seller_email = req.body.seller_email

    // Get the discount
    var discount = req.body.discount

    // Setting incoming data
    var Incomingdata = {

      'sku': sku,
      'name': name,
      'image': image,
      'qty': qty,
      'price': price,
      'id': id,
      'total': price * qty,
      'discount': discount,
      'seller_email': seller_email

    }

    var data = []

    // Setting new data to array
    data[0] = {
      'sku': sku,
      'name': name,
      'image': image,
      'qty': qty,
      'price': price,
      'id': id,
      'total': price * qty,
      'discount': discount,
      'seller_email': seller_email

    }

    // Check if not cookies set
    if (req.cookies.ShoppingCart === undefined) {
      // Set cart data to the cookie
      res.cookie('ShoppingCart', data)

      // Retur true
      return true
    }

    // If product is same
    var SameItem = false

    // Setting index
    var j = 0

    // Iritate each array
    Object.keys(req.cookies.ShoppingCart).forEach(function (key) {
      // Set variable to each items
      let eachItems = req.cookies.ShoppingCart[key]

      // Check if key and value is same
      if (eachItems['id'] === id) {
        // Change the variable to ture
        SameItem = true

        // Get the price
        let getPrice = eachItems['price']

        // Get quentity
        let getQty = eachItems['qty']

        // Get the discount
        let getDiscount = eachItems['discount']

        if (getDiscount === '') {
          getDiscount = 0
        }

        // Parse string to integer
        let newQty = parseInt(qty) + parseInt(getQty)

        // Total discount
        let totalDiscount = parseInt(eachItems['discount']) * newQty

        // Set new amount
        let newTotalAmount = newQty * getPrice

        // Set new array value
        req.cookies.ShoppingCart[j]['qty'] = newQty

        // Set new array amout
        req.cookies.ShoppingCart[j]['total'] = newTotalAmount

        // Set new array amout
        req.cookies.ShoppingCart[j]['discount'] = totalDiscount

        // Set new cookie with updated cookie value
        res.cookie('ShoppingCart', req.cookies.ShoppingCart)

        return
      }

      // Increate j by ++
      j++
    })

    // check if the product is not same
    if (SameItem !== true) {
      // Set local variable to cookie
      let GetCart = req.cookies.ShoppingCart

      // Get the cart pushed to arrrary
      GetCart.push(Incomingdata)

      // Set new cookie
      res.cookie('ShoppingCart', GetCart)
    }
  },

  GetCartTotal: function (req, res, cartcookie) {
    let totalCart = MisFunctions.SumArrayColumn(cartcookie, 'total').toFixed()
    let totalQty = MisFunctions.SumArrayColumn(cartcookie, 'qty')

    let totalDiscount = MisFunctions.SumArrayColumn(cartcookie, 'discount')

    // calculate tax
    let tax = parseInt(((totalCart / 100) * 5))

    // Shipping cost
    let shippingCost = totalCart > 99 ? 'free' : 20

    // Parse to integer
    totalCart = parseInt(totalCart)

    // Set again those things as cookie
    let data = {
      totalcart: totalCart,
      totalqty: totalQty,
      totaldiscount: totalDiscount,
      tax: tax,
      shippingCost: shippingCost
    }

    // Responce new cookie value
    res.cookie('ShoppingCartTotal', data)
  }

}

module.exports.cart = cart
