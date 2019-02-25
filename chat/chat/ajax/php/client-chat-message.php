<?php
session_start();
$fingerprint = $_POST["fingerprint"];
$message = $_POST["message"];

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
	$statement = $db_connection->prepare( "INSERT INTO livechat(sender, receiver, fingerprint, message) VALUES(?,?,?,?)");
	
	printf("Error: %s.\n", $statement->error);
	
	$statement->bind_param( "ssss", $fingerprint, $receiver, $fingerprint, $message);
	 
	 // Execute the statement 
	$statement->execute();
	
	
	// Close the statement 
	 $statement->close();
	 
	 // Close the db Connection 
	$db_connection->close();
	
	//echo "Inserted";
	/* Session date need to update */
	/* Session time need to update from here */
	
	DestroySessionInserting('client-chat-session-created',6);
	
	
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

function DestroySessionInserting($sessionname, $sessiontime)
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
	
	} 
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
	return 'client-chat-session-created';
	
}

if(isset($_POST['close_chat']) && $_POST['close_chat'] == 'yes')
{
	unset($_SESSION['chat_session']);
	
	// Remove conversation from database 
}
// check if session set 
if(!isset($_SESSION["chat_session"]))
{
	// get the value 
	$_SESSION["chat_session"] = $fingerprint;
	
	// start conversation in database 
	InsertMessage();
	
	
}

echo InsertMessage();


 
?>