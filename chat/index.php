<?php
require 'ajax/php/fetch-message-by-fp.php'; 
session_start();

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

	
<audio id="audio" src="http://localhost/chat/media/hide-and-seek.ogg" ></audio>

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
	<script src="js/custom-chat-script.js"></script>


    
 
  
	
</body>

</html>
