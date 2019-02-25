$(document).ready(function(){
	$('#contactBtn').click(function(){
		$('#contactBtn').val('Validating Form...');
		$.ajax({
			method: "POST",
			url: $('#contact_url').val(),
			data: {
			  name: $('#name').val(),
			  phone: $('#phone').val(),
			  email: $('#email').val(),
			  subject: $('#subject').val(),
			  message: $('#message').val(),
			  captcha: $('#captcha').val()
			}
		})
		.done(function(data){
			$('#contactBtn').val('Send Message');
			if(data.name_error!=""){
				$('#nameError').html(data.name_error);
				$('#name').addClass('errorBorder');
			}
			else{
				$('#nameError').html('');
				$('#name').removeClass('errorBorder');
			}
			if(data.email_error!=""){
				$('#emailError').html(data.email_error);
				$('#email').addClass('errorBorder');
			}
			else{
				$('#emailError').html('');
				$('#email').removeClass('errorBorder');
			}
			if(data.message_error!=""){
				$('#messageError').html(data.message_error);
				$('#message').addClass('errorBorder');
			}
			else{
				$('#messageError').html('');
				$('#message').removeClass('errorBorder');
			}
			if(data.captcha_error!=""){
				$('#captchaError').html(data.captcha_error);
				$('#captcha').addClass('errorBorder');
			}
			else{
				$('#captchaError').html('');
				$('#captcha').removeClass('errorBorder');
			}
			//if no errors
			if(data.valid=='yes')
				$('#contFormHolder').html('Thanks for your interest. We will get back to you soon.');
		});
	});
});