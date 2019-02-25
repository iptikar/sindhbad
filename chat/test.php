<?php



	// Connection
	// Required connection_aborted()
	require_once('ajax/php/server.php');
	
	// Get the connection 
	$db_connection = MysqliConnection();
	
	
	$phpsessid = '456';
	$fingerprint = '123';

	$statement = $db_connection->prepare( "UPDATE users SET phpsessid = ?, fingerprint = ? ,last_activitiy = NOW() WHERE fingerprint = ? and phpsessid = ?");
	
	printf("Error: %s.\n", $db_connection->error);
	
	$statement->bind_param( "ssss", $phpsessid, $fingerprint, $fingerprint, $phpsessid);
	
	// Execute the statement 
	$statement->execute();
	
	// Close the statement 
	 $statement->close();
	



?>