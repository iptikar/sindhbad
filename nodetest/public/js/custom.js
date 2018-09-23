$(document).ready(function(){
	
	
	$('#category-first120').change(function(){
		
		
		
		
		
		// Need to send ajax request 
		firstCatName = $('#category-first120').val();
		
		// Get csrf token 
		var csrf = $("#_csrf").val();
		
		
		// Url 
		var url = 'http://localhost:8080/getCategory';
		
		var data = {categoryname:firstCatName, _csrf:csrf};
		
		
		
		$.ajax({
      type: 'POST',
      url: url,
      data: data,
      success: function(resultData) { 
			
			// Get the result data 
			
			
			
			$('#test21').html('<label class = "col-md-2 control-label">Sub Category<span class = "#525dfdff"> * </span></label><div class = "col-md-4"><select class = "form-control" name = "sub-sub-category" id = "sub-sub-category" pattern=".{2,150}" required><option value = "" selected>Sub Category</option>"'+IritateObject(resultData)+'</select></div>');
			
			//alert(resultData)
		 
		}
});

		
});

	
});

$(document).on({
  change: function() {
  
  var label=$('#sub-sub-category :selected').parent().attr('data-raw-category-id');
	
	// set this value to 
	$("#sub-category5656").val(label);
  }
}, '#sub-sub-category');


function IritateObject(obj) {
	
		var optgroup = '';
		var optionValue = '';
		
		for(var i in obj) {
			
			let label = i.split('#2e3615a020749')[0].toUpperCase();
			
			optgroup += '<optgroup label="'+label+'" data-raw-category-id = "'+i+'">';
			
				// Get each 
			if(obj.hasOwnProperty(i)) {
				
				// Again iritate 
				for(var j in obj[i]) {
					
					let childLabel = obj[i][j].split('#2e3615a020749')[0];
						// Get it's value in option value 
					optgroup += '<option value = "'+obj[i][j]+'">'+childLabel+'</option>'
				}
				
				
			}
			
			optgroup += '</optgroup>';		
		}
		
		return optgroup;
	
	}



