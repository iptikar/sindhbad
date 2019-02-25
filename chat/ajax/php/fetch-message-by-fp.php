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
		
	$sessid = $_COOKIE['PHPSESSID'];
	// Prepare statement 
	$statement = $db_connection->query("select sender, receiver, message, chat_date,phpsessid from livechat where sender = '$fingerprint' and phpsessid = '$sessid' and receiver = 'server' or sender = 'server' and receiver = '$fingerprint' order by chat_date");
	
	if(!$statement)
	{
		die($db_connection->error);
	}
	
	$child_elment = '';
	
	while($row = $statement->fetch_object())
	{
	
		$identify = '';
		
		if($row->sender == 'server') {
			// Change the avatar 
			$avatar = '<img src="http://localhost/chat/img/avatar1.jpg" alt="" width="32" height="32">';
			
			$identify = 'Maya';
			
		} else {
			// Change the avatar 
			$avatar = '<img src="http://localhost/chat/img/avatar.png" alt="" width="32" height="32">';
			
			$identify = 'You';
		}
		
		$child_elment .= '
				
				<div class="chat-message clearfix">
					
					'.$avatar.'

					<div class="chat-message-content clearfix">
						
						<span class="chat-time">'.$row->chat_date.'</span>

						<h5>'.$identify.'</h5>

						<p>'.$row->message.'</p>
				
					</div> 

				</div>
				<hr>
		
	';
	}
	
	 // Close the db Connection We are using 
	// Presistent connection
	//$db_connection->close();
	
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
					
					<img src="http://localhost/chat/img/avatar1.jpg" alt="" width="32" height="32">

					<div class="chat-message-content clearfix">
						
						<span class="chat-time">'.date('Y-m-d H:i:s').'</span>

						<h5>Maya</h5>

						<p>Hi This is Maya how can i help you.</p>
				
					</div> 

				</div>
				<hr>';
		
	
		$data = ['id' =>'', 'html' => $data];
		
		$data = json_encode($data);
		
		return $data;
	}
	
}

function fetchMessageById($fingerprint)
{
	require_once('server.php');
	
	if(isset($_SESSION['chat_session']))
	{
		// Get the connection 
	$db_connection = MysqliConnection();
	$sessid = $_COOKIE['PHPSESSID'];
	// Prepare statement 
	$statement = $db_connection->query("select sender, receiver, message, chat_date,phpsessid from livechat where sender = '$fingerprint' and phpsessid = '$sessid' and receiver = 'server' or sender = 'server' and receiver = '$fingerprint' order by chat_date");
	
	if(!$statement)
	{
		die($db_connection->error);
	}
	
	$child_elment = '';
	
	while($row = $statement->fetch_object())
	{
		$identify = '';
		
		if($row->sender == 'server') {
			// Change the avatar 
			$avatar = '<img src="http://localhost/chat/img/avatar1.jpg" alt="" width="32" height="32">';
			
			$identify = 'You';
			
		} else {
			// Change the avatar 
			$avatar = '<img src="http://localhost/chat/img/avatar.png" alt="" width="32" height="32">';
			
			$identify = 'Client';
		}
	
		$child_elment .= '
				
				<div class="chat-message clearfix">
					
					'.$avatar.'

					<div class="chat-message-content clearfix">
						
						<span class="chat-time">'.$row->chat_date.'</span>

						<h5>'.$identify.'</h5>

						<p>'.$row->message.'</p>
				
					</div> 

				</div>
				<hr>
		
	';
	}
	
	 // Close the db Connection We are using 
	// Presistent connection
	//$db_connection->close();
	
	// Formate data to return 
	$data = ['id' =>$fingerprint, 'html' => $child_elment];
	
	// Encode to json 
	// Return the element 
	return  $data;
	
	} 
	
	else 
	{
	
			// Static html data 
			$data = '<div class="chat-message clearfix">
					
				<img src="http://localhost/chat/img/avatar1.jpg" alt="" width="32" height="32">

					<div class="chat-message-content clearfix">
						
						<span class="chat-time">'.date('Y-m-d H:i:s').'</span>

						<h5>Ben</h5>

						<p>Hi This is ben how can i help you.</p>
				
					</div> 

				</div>
				<hr>';
		
	
		$data = ['id' =>'', 'html' => $data];
		
		
		
		return $data;
	}
	
}


?>