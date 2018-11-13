

jQuery(function () {
               jQuery('#date-available-to').datepicker({
                    format: 'yyyy-mm-dd'
                    
                });
	
    	jQuery('#date-available-from').datepicker({
                   format: 'yyyy-mm-dd'
                });
			
			
		jQuery('#special-price-from').datepicker({
                    format: 'yyyy-mm-dd'
                });
	
    	jQuery('#special-price-to').datepicker({
                     format: 'yyyy-mm-dd'
                });

		jQuery("#form_sample_1").on('click', '.addSpecificationBtn', function(){
			
				// Checking the length of elements 
				var specifications = jQuery("input[name='spcification-title[]'").length;
				
				// If greater then 10
				if(specifications > 30 ) {
					
					// Return false 
					jQuery("#info-spe").text('Maximinum only 30 filed allowed');
					
					return false;
					}
				
				jQuery("#CloneSpecification").append('<div class = "form-group addedFrom"><label class="col-md-2 control-label"> Key </label> <div class = "col-md-3"> <input type="text" name= "spcification-title[]" class="specification-key form-control" pattern = ".{2,}" oninvalid="this.setCustomValidity(\'Please enter specification title.\')" oninput="setCustomValidity(\'\')" required> </div> <label class="col-md-2 control-label"> Value </label><div class = "col-md-3"><input type="text" name="spcification-value[]" class="form-control" pattern = ".{2,}" oninvalid="this.setCustomValidity(\'Please enter specification value.\')" oninput="setCustomValidity(\'\')" required></div><div class = "col-md-2"><button type="button" class="btn btn-default removeSpecification"><i class="fa fa-minus"></i></button></div></div>');
								
				
			})	
			
			
			
			jQuery("#form_sample_1").on('click', '.addButton', function(){
				
				// We need to count the element 
				var images = jQuery('input[name="option[]"]').length;
			
				// Max five files 
				if(images > 6 ) {
					
					jQuery("#file-alert-140").text('Maximun only 5 files allowed.')
					return false ;
					
					}
				
				jQuery("#add-file-120").append('<div class = "form-group" ><label class = "col-md-2 control-label"></label><div class = "col-xs-4"><input type = "file" name = "option[]" accept="image/*" required></div><div class = "col-xs-4"><button type = "button" class = "btn btn-default removeButton"><i class = "fa fa-minus"></i></button></div></div>');

				
				
				});
			

         // Removing the file 
         jQuery("#form_sample_1").on('click', '.removeButton', function(e){
				
				$(this).parents('.form-group').remove();
				//var $row    = $(this).parents('.form-group'),
                //$option = $row.find('[name="option[]"]');

            // Remove element containing the option
            //$row.remove();
			
			});                                      
	
			
		jQuery("#form_sample_1").on('click', '.removeSpecification', function(e){
				
				$(this).parents('.addedFrom').remove();
				//var $row    = $(this).parents('.form-group'),
                //$option = $row.find('[name="option[]"]');

            // Remove element containing the option
            //$row.remove();
			
			});
		
	
		jQuery( "#country" ).change(function() {
			
			// Get the value of select 
			var country = jQuery(this).val();
			
			
			// If country is AE
			if(country == 'AE') {
					
					//alert(country)
					// Add new filed to the html dom
					jQuery("#append_city").html('<label class="col-md-2 control-label">City<span class="required"> * </span></label> <div class="col-md-2"><select name = "city" class = "form-control" pattern = ".{2,}" oninvalid="this.setCustomValidity(\'Please select city.\')" oninput="setCustomValidity(\'\')" required><option value = "">Select</option><option value = "abu dhabi">Abu Dhabi</option><option value = "ajman">Ajman</option><option value = "dubai">Dubai</option><option value = "fujairah">fujairah</option><option value = "ras al khaimah">Ras Al Khaimah</option><option value = "umm al auwain">Umm Al Quwain</option></select></div><label class="col-md-2 control-label">P.O. Box<span class="required"> * </span></label><div class="col-md-2"><input type="text" class="form-control" name="poboxno" placeholder="Post Box No." required> </div>');
					
					jQuery("#country-code").val("AE");
					
			} else {
				
				jQuery("#append_city").html('');
				
				}
		});


 });
 
