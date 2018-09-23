<?php
session_start();
$fingerprint = $_POST['fingerprint'];

require_once('server.php');


if(!isset($_SESSION['chat_session']) && !isset($_SESSION['chat-started-at'])){
		// Get the connection 
	$db_connection = MysqliConnection();
	
	
	$statement = $db_connection->query("DELETE FROM livechat where sender = '$fingerprint ' or receiver = '$fingerprint '");
	
	// IF failed 
	if(!$statement) {
	
		die($statement->error); 
	}
	
}
