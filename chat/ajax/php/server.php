<?php
function MysqliConnection()
{
	// Create resourcew 
	$mysqli = new mysqli('localhost','root','a','chat');
	
	// Check the connection 
	if(!$mysqli)
	{
		// Return the error 
		return $mysqli->error();
	}
	
	return $mysqli;
}
?>