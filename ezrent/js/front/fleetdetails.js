$(document).ready(function(){
	$('#enquireBtn').click(function(){
		$('#enquireBtn').hide();
		$.ajax({
			method: "POST",
			url: $('#enquire_url').val(),
			data: {
				id_fleet:parseInt($('#id_fleet').val()),
			  	name: $('#name').val(),
			  	phone: $('#phone').val(),
			  	email: $('#email').val(),
			  	address: $('#address').val(),
			  	details: $('#details').val(),
			  	captcha: $('#captcha').val()
			}
		})
		.done(function(data){
			$('#enquireBtn').show();
			if(data.name_error!=""){
				$('#nameError').html(data.name_error);
				$('#name').addClass('errorBorder');
			}
			else{
				$('#nameError').html('');
				$('#name').removeClass('errorBorder');
			}
			if(data.phone_error!=""){
				$('#phoneError').html(data.phone_error);
				$('#phone').addClass('errorBorder');
			}
			else{
				$('#phoneError').html('');
				$('#phone').removeClass('errorBorder');
			}
			if(data.email_error!=""){
				$('#emailError').html(data.email_error);
				$('#email').addClass('errorBorder');
			}
			else{
				$('#emailError').html('');
				$('#email').removeClass('errorBorder');
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
				$('#enquireFormHolder').html('<p id="enquiryIsDone">Thanks for your interest. We will get back to you soon.</p>');
		});
	});
});