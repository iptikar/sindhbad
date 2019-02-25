

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
			
			var seller_email = $('#seller_email120').val(); 
			
			// quentity must be number 
			var data = {sku:sku, name:p_name, image:p_p_img, qty:qty, price:price, id:id, seller_email: seller_email};
			
			
			
			var url = 'http://localhost/ajax/add-to-cart-ajax.php';
			
			
			
			 $.ajax({
			  type: 'POST',
			  url: url,
			  data: data,
			  dataType: "text",
			  success: function(resultData) { 
				  
<<<<<<< HEAD
			 
			  $('#cart-msg').html(resultData);
=======
			 $('#cart-msg').css('visibility', 'visible');
			  $('#cart-msg1').text(resultData);
>>>>>>> 5d8c4809778abca623285086c9c8e91046f04d18
		 
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
	
<<<<<<< HEAD
=======
	$(".selectpicker").change(function (){

		// Send the ajax request 
		var data = {lan:$(this).val()};

		var url = 'http://localhost/ajax/setLan.php';

		

			 $.ajax({
			  type: 'POST',
			  url: url,
			  data: data,
			  dataType: "text",
			  success: function(resultData) { 
				  
			 
			 window.location.reload();
			  //$('#cart-msg').html(resultData);
		 
		  }
});

	})
>>>>>>> 5d8c4809778abca623285086c9c8e91046f04d18
	
	
 
	
});


function SendItemToCart(el) {
		
			// get 
			// Get the data attribute 
	var data = $(el).attr('data-cart');
	
	// parse json 
	data = JSON.parse(data);
	
	
	// Get the element that is required 
	var sku = data.sku;

	// Get the product name 
	var p_name = data.name;

	// Get the product image 
	var p_p_img = data.image; 

	// Get the quentity 
	var qty = data.qty

	// Get the price 
	var price = data.price;

	// Get the id of the product 
	var id = data.id;

	var seller_email = data.seller_email; 
			
	// quentity must be number 
	var data = {sku:sku, name:p_name, image:p_p_img, qty:qty, price:price, id:id, seller_email: seller_email};



	var url = 'http://localhost/ajax/add-to-cart-ajax.php';
	
	
	 $.ajax({
			  type: 'POST',
			  url: url,
			  data: data,
			  dataType: "text",
			  success: function(resultData) { 
				  
			 
			 window.location.href = "http://localhost/cart";
			  //$('#cart-msg').html(resultData);
		 
		  }
});



	
}

