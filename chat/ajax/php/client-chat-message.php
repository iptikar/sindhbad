<?php
// Get the session 
session_start();

// Post the finger  print
$fingerprint = $_POST["fingerprint"];

// Post the message 
$message = $_POST["message"];


// Required the message 
require 'functions.php';

if(isset($_POST['close_chat']) && $_POST['close_chat'] == 'yes')
{
	unset($_SESSION['chat_session']);
	
	// Remove conversation from database 
}

// Destroy if session is not active for 5 Minutes 

if( DestroySessionInserting('chat_session', 'chat-started-at', 120, $fingerprint) !== true) {
	
	exit();
}

// check if session set 

if(!isset($_SESSION["chat_session"]))
{
	// get the value 
	$_SESSION["chat_session"] = $fingerprint;
	
	// set the session time 
	$_SESSION['chat-started-at'] = time();
	
	// start conversation in database 
	InsertMessage();
	
	// Exit the first time 
	exit();
	
} else {

	// Set the session time  
	$_SESSION['chat-started-at'] = time();
	
	// Set the function 
	echo InsertMessage();
	
	}


 
?>