<?php
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
	return 'chat-session-created';
	
}
?>