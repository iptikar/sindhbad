<?php

function fetchUsers()
{
	require_once('server.php');
	
	if(isset($_SESSION['chat_session']))
	{
		// Get the connection 
	$db_connection = MysqliConnection();
	
	$fingerprint = $_SESSION['chat_session'];
	
	$fingerprint = str_replace('#','', $fingerprint);
	// Prepare statement 
	$statement = $db_connection->query("select sender, receiver, message, chat_date from livechat where sender = '$fingerprint' and receiver = 'server' or sender = 'server' and receiver = '$fingerprint' order by chat_date");
	
	if(!$statement)
	{
		die($db_connection->error);
	}
	
	$child_elment = '';
	
	while($row = $statement->fetch_object())
	{
	
		$child_elment .= '
				
				<div class="chat-message clearfix">
					
					<img src="http://lorempixum.com/32/32/people" alt="" width="32" height="32">

					<div class="chat-message-content clearfix">
						
						<span class="chat-time">'.$row->chat_date.'</span>

						<h5>'.$row->sender.'</h5>

						<p>'.$row->message.'</p>
				
					</div> 

				</div>
				<hr>
		
	';
	}
	
	 // Close the db Connection 
	$db_connection->close();
	
	// Formate data to return 
	$data = ['id' =>$fingerprint, 'html' => $child_elment];
	
	// Encode to json 
	$data = json_encode($data);
	
	// Return the element 
	return  $data;
	
	} 
	
	else 
	{
	
			// Static html data 
			$data = '<div class="chat-message clearfix">
					
					<img src="http://lorempixum.com/32/32/people" alt="" width="32" height="32">

					<div class="chat-message-content clearfix">
						
						<span class="chat-time">'.date('Y-m-d H:i:s').'</span>

						<h5>Ben</h5>

						<p>Hi This is ben how can i help you.</p>
				
					</div> 

				</div>
				<hr>';
		
	
		$data = ['id' =>'', 'html' => $data];
		
		$data = json_encode($data);
		
		return $data;
	}
	
}


?>