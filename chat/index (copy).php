<?php
require 'ajax/php/fetch-message-by-fp.php';

// Start the session 
session_start();

// Json encode 
//$json_convert = json_decode(fetchUsers(), false);



?>
<!doctype html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Live Chat</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" href="css/style.css" media = "all">
	

</head>
<body>


<div id="live-chat">
		
		<header class="clearfix">
			
			<a href="#" class="chat-close">x</a>

			<h4>Chat With Us</h4>

			<span class="chat-message-counter">1</span>

		</header>

		<div class="chat">
			
			<div class="chat-history" id = "chat-history">
			
			</div> <!-- end chat-history -->

			<p class="chat-feedback">Your partner is typing…</p>

			

				<fieldset>
					
					<input type="text" placeholder="Type your message…" class = "chat-text" user = "bharatrose1@gmail.com" id = "message"autofocus>
					<input type="hidden">

				</fieldset>

			

		</div> <!-- end chat -->

	</div> <!-- end live-chat -->

	<script src="js/jquery-1.10.2.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	
	<script src="node_modules/fingerprintjs/fingerprint.js"></script>
	
	
	<script>


var timer;
var seconds = 1; // how often should we refresh the DIV?

function startActivityRefresh() {
    timer = setInterval(function() {
        $('#chat-history').load('ajax/php/chat-history.php');
    }, seconds*1000)
}

function cancelActivityRefresh() {
    clearInterval(timer);
}


function registerCloseEvent() {

$(".chat-close").click(function () {
    
	 // Get finger print 
	 var FP = GetfingerPrint();
	 
	 // Get the message 
	
	 
	 $.ajax({
		url:'ajax/php/client-exit-chat.php',
		data:{"fingerprint":FP},
		type:'post',
		success: function(responceText)
		{
			//alert(responceText);
		}
		
		
		});
});
 
 }
 
// Return milisecound 
function MicroTime1()
{
	// Get the new date
	var d = new Date();
	
	// Get the milliseconds 
	var n = d.getMilliseconds();
	
	return  n;
}

function addZero(x, n) {
    while (x.toString().length < n) {
        x = "0" + x;
    }
    return x;
}

function CloseTabe()
{
	
}

function MicroTime() {
    var d = new Date();
    var h = addZero(d.getHours(), 2);
    var m = addZero(d.getMinutes(), 2);
    var s = addZero(d.getSeconds(), 2);
    var ms = addZero(d.getMilliseconds(), 3);
    var uniqueid =  h + ":" + m + ":" + s + ":" + ms;
    
    return uniqueid;
}
 
// Return fingerprint of client 
function GetfingerPrint()
{
	// Get the finger print 
	 var fingerprint = new Fingerprint().get();
	 
	 // Return the variable 
	 return fingerprint;
}


 $(document).ready(function(){
	 
	 registerCloseEvent();
	 
 })
 
 startActivityRefresh();
 
 $('.chat-text').keypress(function (e) {
 var key = e.which;
 if(key === 13)  // the enter key code
  {
	  
	 var gav = $(this).attr("user");
	 
	 // Get finger print 
	 var FP = GetfingerPrint();
	 
	 // Get the message 
	 var message = document.getElementById("message").value;
	 
	
	 $.ajax({
		url:'ajax/php/client-chat-message.php',
		data:{message:message,"fingerprint":FP},
		type:'post',
		success: function(responceText)
		{
			// Message 
		}
		
		
		});
	
	 
	 //alert("Finger Pring :"+FP+ "message"+message);
  }
}); 

</script>
	
</body>

</html>