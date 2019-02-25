$(document).ready(function(){
	$('#confirmBooking').click(function(){
		$('#confirmBooking').hide();
		$.ajax({
			method: "POST",
			url: $('#confirm_booking_url').val(),
			data: {
			  	name: $('#name').val(),
			  	phone: $('#phone').val(),
			  	email: $('#email').val(),
			  	address: $('#address').val(),
			  	details: $('#details').val(),
			  	captcha: $('#captcha').val()
			}
		})
		.done(function(data){
			$('#confirmBooking').show();
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
				$('#enquireFormHolder').html('<p id="enquiryIsDone">Thanks for booking with us. We will get back to you soon.</p>');
		});
	});
	//
	$('#goToBookForm').click(function(){
		$.ajax({
			method: "POST",
			url: $('#save_dates_url').val(),
			data: {
				pickup_location: $('#pickup_location').val(),
				dropoff_location: $('#dropoff_location').val(),
				pickup_date: $('#pickup_date').val(),
				dropoff_date: $('#dropoff_date').val()
			}
		})
		.done(function(data){
			$('#bookingTab').trigger('click');
			$('#tab-3').addClass('currrentDiv');
			$('#selectedDateLoc').removeClass('displayNone');
			$('#selectedPickupLoc').html(data.pickup_location);
			$('#selectedPickupDate').html(data.pickup_date);
			$('#selectedDropoffLoc').html(data.dropoff_location);
			$('#selectedDropoffDate').html(data.dropoff_date);
		});
	});
	//
});
function chooseFleet(id_fleet){
	$('.vehList li').removeClass('active');
	$('#fleet'+id_fleet).addClass('active');
	//
	$.ajax({
		method: "POST",
		url: $('#save_fleet_url').val(),
		data: {
			id_fleet:id_fleet
		}
	})
	.done(function(data){
		$('#bookingTab').trigger('click');
		$('#tab-3').addClass('currrentDiv');
		$('#selectedFleetHolder').removeClass('displayNone');
		if(data.picture!='')
			$('#selectedFleetPic').attr('src','uploads/fleet/255x127/'+data.picture);
		else
			$('#selectedFleetPic').remove();
		$('#selectedFleetTitle').html(data.title);
	});	
}