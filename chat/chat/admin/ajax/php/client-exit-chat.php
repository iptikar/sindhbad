<?php
// Start the sesssion 
session_start();

// Unset the session by finger print 
unset($_SESSION['chat_session']);

// Post finger print 
$fingerprint = $_POST['fingerprint'];

// Get the connection 
// Required connection_aborted()
require_once('server.php');
	
// Get the connection 
$db_connection = MysqliConnection();
	
// Receiver
// Accept the request 
	$fingerprint =$db_connection->real_escape_string($_POST["fingerprint"]);
	
	
	// Prepare statement 
	$statement = $db_connection->prepare( "DELETE FROM livechat where sender = ? or receiver = ?");
	
	printf("Error: %s.\n", $statement->error);
	
	$statement->bind_param( "ii", $fingerprint, $fingerprint);
	 
	 // Execute the statement 
	$statement->execute();
	
	
	// Close the statement 
	 $statement->close();
	 
	 // Close the db Connection 
	$db_connection->close();

?>

?>