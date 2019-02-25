<?php
session_start();

// Required connection_aborted()
	require_once('server.php');
	
	// Get the connection 
	$db_connection = MysqliConnection();
	
	// Receiver
	$sender = 'server';
	
	// Accept the request 
	$fingerprint =$db_connection->real_escape_string($_POST["fingerprint"]);
	
	// Message
	$message = $db_connection->real_escape_string($_POST["message"]);
	
	
	// Prepare statement 
	$statement = $db_connection->prepare( "INSERT INTO livechat(sender, receiver, fingerprint, message) VALUES(?,?,?,?)");
	
	printf("Error: %s.\n", $statement->error);
	
	$statement->bind_param( "ssss", $sender, $fingerprint, $fingerprint, $message);
	 
	 // Execute the statement 
	$statement->execute();
	
	
	// Close the statement 
	 $statement->close();
	 
	 // Close the db Connection 
	$db_connection->close();
	
	//echo "Inserted";
	
?>