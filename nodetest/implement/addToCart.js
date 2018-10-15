// Require addto cart module 
var GetCart = require ('../components/addtocart/index.js')

var AddToCart = function AddItemToCart(req, res, sku, name, image, qty, price, id) {
	
		// Return new promises 
		return new Promise (function (fullfill, reject ) {
			
				// Read file 
				try {
						
						fullfill(GetCart.cart.AddToCart(req, res, sku, name, image, qty, price, id));
					
					} catch (ex) {
							
						reject (ex)
					}
			
			})
	}

module.exports = AddToCart;
