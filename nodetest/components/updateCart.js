
var UpdateCart = {
	
	AddToCart: function(req, res, cart, getsku, qty){
		
		// Cart 
	var cart = req.cookies.ShoppingCart;
	
	// var index 
	var i = 0;
	
	var found = false;
	
	// Loop each data 
	if(cart.length > 0) {
		
		cart.forEach(function(element, index) {
		
		if(element.sku === getsku) {
			
			found = i;
		}
	i++;
	
	});
	}
	
	// Check if index containe something 
	if(found !== false){
		
			// Set new value of qty 
			let newIndex = cart[found];
			
			// Get the price 
			let price = cart[found]['price'];
			
			// Set new amount 
			let newTotalAmount = qty * price;
			
			let PerDisocunt = parseInt (cart[found]['discount']) / parseInt(cart[found]['qty']);
			
			let totalDiscount =  PerDisocunt * qty;

			// Set new array value 
			newIndex['qty'] = qty;
			
			// Set new array amout 
			newIndex['total'] = newTotalAmount;
			
			// Set new array amout 
			newIndex['discount'] = totalDiscount;
			
			// Index need to add 
			cart[found] = newIndex;
			
			// Set cart new cookie 
			res.cookie('ShoppingCart',cart);
			
		}
	
}
	
	

}

module.exports.UpdateCart = UpdateCart;
