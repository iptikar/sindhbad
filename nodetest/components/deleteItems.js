var Remove = {
	
	DeleteItems: function (req, res, cart) {
		
			// var index 
	var i = 0;
	
	var found = false;
	
	// Loop each data 
	if(cart.length > 0) {
		
		cart.forEach(function(element, index) {
		
		if(element.id === req.body.id) {
			
			found = i;
		}
	i++;
	
	});
	}
	
	
	if(found !== false){
		
			// Get cart value 
			found = parseInt(found);
			
			cart.splice(found, 1);
			
			// Sort cart 
			cart.sort();
			
			// Set new cookie 
			if(cart.length === 0){
				
					res.clearCookie("ShoppingCart");
			} else {
				
				res.cookie('ShoppingCart',cart);
			}
			
			
		}
	
	}
	
}


module.exports.Remove = Remove;
	
