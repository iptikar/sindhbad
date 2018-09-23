

$(function () {

	$('#review-btn').click(function(){
	
	})
	
	$('#btn-p-inqueri').click(function(){
	
		// Get the message 
		var msg_subject = $('#msg-subject').val();
		
		// 
		var msg_product = $('#msg-product').val();
		
		var sku = $('#ajax-p-sku').val();
		
		// Get the product name 
		var p_name = $('#ajax-p-name').val();
		
		// Get the product link 
		var product_uri = $('#script-uri').val();
		
		// Image of the product 
		var img_uri = $('#p-image-url').val();
		
		
		
		//console.log(msg_subject + msg_product + sku);
	
		// Send the ajax message 
		
		var url = 'http://localhost/ajax/buyer-message-product.php';
		
		// data store 
		var data = {sku:sku, message: msg_product, subject: msg_subject,p_name: p_name, product_uri:product_uri, image_uri:img_uri};
		
	 $.ajax({
      type: 'POST',
      url: url,
      data: data,
      dataType: "text",
      success: function(resultData) { 
		  
		  $('#msg-subject').val('');
		  $('#msg-product').val('');
		  $('#msg-id56').html(resultData);
		  
		 
		 
		 
		  }
});



});
	
	$('#add-to-cart-btn').click(function() {
		
		
		
			// Get the element that is required 
			var sku = $('#ajax-p-sku').val();
		
			// Get the product name 
			var p_name = $('#ajax-p-name').val();
			
			// Get the product image 
			var p_p_img = $('#p_p_image').val(); 
			
			// Get the quentity 
			var qty = $('#qty').val();
			
			// Get the price 
			var price = $('#cart-price').val();
			
			// Get the id of the product 
			var id = $('#cart-p-id').val();
			
			// quentity must be number 
			var data = {sku:sku, name:p_name, image:p_p_img, qty:qty, price:price, id:id};
			
			
			
			var url = 'http://localhost/ajax/add-to-cart-ajax.php';
			
			
			
			 $.ajax({
			  type: 'POST',
			  url: url,
			  data: data,
			  dataType: "text",
			  success: function(resultData) { 
				  
			 
			  $('#cart-msg').html(resultData);
		 
		  }
});


			
			
		});
	
	
	// mincart-id-253 mincart id 
	$('#min-cart-triger').click(function() {
		
			// 
			$( "#mincart-id-253" ).toggle( "slow", function() {
				// Animation complete.
			});
		})
	
	
 
	
});



