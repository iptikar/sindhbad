function TrackViewer(el) {
	 
	
	// Get the sku 
	var sku = $(el).data("product-sku");
	
	// Category id 
	var category_id = $(el).data("category-id");
	
	// Json data to send the user request 
	var data = {sku:sku, category_id:category_id};
	
	// Url to send the request 
	var url = 'http://localhost/ajax/track-buyer-activities.php'; 

	
	 $.ajax({
			  type: 'POST',
			  url: url,
			  data: data,
			  dataType: "text",
			  success: function(resultData) { 
				  
			 
			  //$('#cart-msg').html(resultData);
				//alert(resultData);
		  
		  }
});

	
 }


function DiscriptionTrackViewer() {
	
	// Get the element value 
	var sku = $('#traker-sku').val();
	
	// Category id 
	var category_id = $('#traker-category-id').val();
	
	// Json data to send the user request 
	var data = {sku:sku, category_id:category_id};
	
	// Url to send the request 
	var url = 'http://localhost/ajax/track-buyer-activities.php'; 

	
	 $.ajax({
			  type: 'POST',
			  url: url,
			  data: data,
			  dataType: "text",
			  success: function(resultData) { 
				  
			 
			  //$('#cart-msg').html(resultData);
				//alert(resultData);
		  
		  }
});

	
}
