
			$(function() {
				
						
			$("#form_sample_1").on('click', '.addButton', function() {
				
			// We need to count the element 
			var images = $('input[name="option[]"]').length;
			
			// IF length more then five then return false 
			if(images > 5 ) {
					
					$('#mx-fl-up').html('Note: Max number of file only 5 allowed.')
					return;
			}
			
			
            var $template = $('#optionTemplate'),
                $clone    = $template
                                .clone()
                                .removeClass('hide')
                                .removeAttr('id')
                                .insertBefore($template),
                $option   = $clone.find('[name="option[]"]');

            // Add new field
            $('#form_sample_1').formValidation('addField', $option);
        })
        
			// Remove button click handler
        $("#form_sample_1").on('click', '.removeButton', function() {
            var $row    = $(this).parents('.form-group'),
                $option = $row.find('[name="option[]"]');

            // Remove element containing the option
            $row.remove();

            // Remove field
            $('#surveyForm').formValidation('removeField', $option);
        })
	
				
							
		});

		
