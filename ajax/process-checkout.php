<?php
session_start();
// Require the controller 
require '../controller/controller.php';

// get the object 
$obj = new MarketPlace();

// Get process check 
if($obj->process_checkout() === false ) {
	
		// Throw the message 
		exit( '<div class="message error"><div> Please login as buyer.</div></div>');
}
