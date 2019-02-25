

jQuery(function () {
               jQuery('#date-available-to').datetimepicker({
                    locale: 'ru'
                });
	
    	jQuery('#date-available-from').datetimepicker({
                    locale: 'ru'
                });
			
			
		jQuery('#special-price-from').datetimepicker({
                    locale: 'ru'
                });
	
    	jQuery('#special-price-to').datetimepicker({
                    locale: 'ru'
                });

		jQuery("#form_sample_1").on('click', '.addSpecificationBtn', function(){
			
				// Checking the length of elements 
				var specifications = jQuery("input[name='spcification-title[]'").length;
				
				// If greater then 10
				if(specifications > 9 ) {
					
					// Return false 
					jQuery("#info-spe").text('Maximinum only 9 filed allowed');
					
					return false;
					}
				
				jQuery("#CloneSpecification").append('<div class = "form-group addedFrom"><label class="col-md-2 control-label"> Key </label> <div class = "col-md-3"> <input type="text" name= "spcification-title[]" class="specification-key form-control"> </div> <label class="col-md-2 control-label"> Value </label><div class = "col-md-3"><input type="text" name="spcification-value[]" class="form-control"></div><div class = "col-md-2"><button type="button" class="btn btn-default removeSpecification"><i class="fa fa-minus"></i></button></div></div>');
								
				
			})	
			
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
					jQuery("#append_city").html('<label class="col-md-2 control-label">City<span class="required"> * </span></label> <div class="col-md-2"><select name = "city" class = "form-control"><option value = "abu dhabi">Abu Dhabi</option><option value = "ajman">Ajman</option><option value = "dubai">Dubai</option><option value = "fujairah">fujairah</option><option value = "ras al khaimah">Ras Al Khaimah</option><option value = "umm al auwain">Umm Al Quwain</option></select></div><label class="col-md-2 control-label">P.O. Box<span class="required"> * </span></label><div class="col-md-2"><input type="text" class="form-control" name="poboxno" placeholder="Post Box No." > </div>');
					
					jQuery("#country-code").val("AE");
					
			} else {
				
				jQuery("#append_city").html('');
				
				}
		});


 });
 
