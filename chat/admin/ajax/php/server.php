<?php
function MysqliConnection()
{
	// Create resourcew using presistent connection
	$mysqli = new mysqli('p:localhost','root','a','chat');

	// Check the connection
	if(!$mysqli)
	{
		// Return the error
		return $mysqli->error();
	}

	return $mysqli;
}
?>
