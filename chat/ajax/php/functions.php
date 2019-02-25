<?php
function InsertMessage()
{
	
	// Required connection_aborted()
	require_once('server.php');
	
	// Get the connection 
	$db_connection = MysqliConnection();
	
	// Receiver
	$receiver = 'server';
	
	// Accept the request 
	$fingerprint =$db_connection->real_escape_string($_POST["fingerprint"]);
	
	// Message
	$message = $db_connection->real_escape_string($_POST["message"]);
	
	
	// Prepare statement 
	$statement = $db_connection->prepare( "INSERT INTO livechat(sender, receiver, fingerprint, message,chat_date,phpsessid) VALUES(?,?,?,?,?,?)");
	
	printf("Error: %s.\n", $statement->error);
	
	$statement->bind_param( "ssssss", $fingerprint, $receiver, $fingerprint, $message, date('Y-m-d H:i:s'),$_COOKIE['PHPSESSID']);
	 
	 // Execute the statement 
	$statement->execute();
	
	// Update the users table 
	
	
	// Close the statement 
	 $statement->close();
	 
	 // Close the db Connection Presistent connection
	//$db_connection->close();
	
	//echo "Inserted";
	/* Session date need to update */
	/* Session time need to update from here */
	
	//DestroySessionInserting('chat-started-at',6);
	
	
}

function DestroySession($sessionname, $sessiontime)
{
	
	/* Check the session */
	if (!isset($_SESSION[$sessionname])) 
	{
    
    	/* Set session value to current time */
   		 $_SESSION[$sessionname] = time();
	
	} else if ( isset($_SESSION[$sessionname]) &&
				time() - $_SESSION[$sessionname] < $sessiontime) 
	{
    
    	/* Regenerate session id for updating */
    	session_regenerate_id(true); 
   		
   		/* Set the session */ 
   	    $_SESSION[$sessionname] = time();  
	
	} else {
		
		
		/* Unset the session */ 
		unset($_SESSION[$sessionname]);
		
		/* Destroy the session */
		session_destroy();
	}
}

function DeleteRecordIfSessionExpired($sessionValue) {

	// Connection
	// Required connection_aborted()
	require_once('server.php');
	
	// Get the connection 
	$db_connection = MysqliConnection();
	
	$statement = $db_connection->prepare( "DELETE FROM livechat where sender = ? or receiver = ?");
	
	printf("Error: %s.\n", $statement->error);
	
	$statement->bind_param( "ii", $sessionValue, $sessionValue);
	 
	 // Execute the statement 
	$statement->execute();
	
	
	// Close the statement 
	 $statement->close();
	
}


function DestroySessionInserting($sessionname1, $sessionname, $sessiontime){
	
if (isset($_SESSION[$sessionname]) &&
	time() - $_SESSION[$sessionname] > $sessiontime) {
	
		// Get the finger print to remove data 
		DeleteRecordIfSessionExpired($_SESSION[$sessionname1]);
		
		// Unse the session 
		unset($_SESSION[$sessionname]);
		unset($_SESSION[$sessionname1]);
		session_gc();
	
		// Return ture 
		return false;
		
	}
	
	return true;
}

// Start the session 
function GetSessionStats()
{
	if(session_status() != 'PHP_SESSION_ACTIVE')
	{
		// start the session 
		session_start();
	}
}

function ChatSessionName()
{
	return 'chat-started-at';
	
}