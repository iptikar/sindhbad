<?php
require('functions.php');
GetSessionStats();
//unset($_SESSION['client-chat-session-created']);
//return ;
//DestroySession(ChatSessionName(), 5);

//include('ajax/php/server.php');
//$db_connection = MysqliConnection();
// Prepare statement 
//$statement = $db_connection->query( "select sender, receiver, message, chat_date from livechat where sender = '2063596466' and receiver = 'server' or sender = 'server' and receiver = '2063596466' order by chage_date");

/*
function fetchUsers($fingerprint)
{
	
	// Get the connection 
	$db_connection = MysqliConnection();
	
	
	$fingerprint = $_GET['fingerprint'];
	
	// Prepare statement 
	$statement = $db_connection->query("select sender, receiver, message, chat_date from livechat where sender = '$fingerprint' and receiver = 'server' or sender = 'server' and receiver = '$fingerprint' order by chat_date");
	
	if(!$statement)
	{
		die($db_connection->error);
	}
	
	
	$child_elment = '';
	
	while($row = $statement->fetch_object())
	{
	
		$child_elment .= $row->sender."::".$row->message."<br/>";
	}
	
	 
	 // Close the db Connection 
	$db_connection->close();
	
	// Return the element 
	return  $child_elment;
}
*/
//echo fetchUsers();

//echo "Current Session Data ".$_SESSION[ChatSessionName()]. "<br/>";

//echo "Current Time".time();
?>