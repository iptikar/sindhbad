<?php
function fetchUsers()
{
	require_once('server.php');
	// Get the connection 
	$db_connection = MysqliConnection();
	
	$fingerprint = $_POST['fingerprint'];
	
	$fingerprint = str_replace('#','', $fingerprint);
	// Prepare statement 
	$statement = $db_connection->query("select sender, receiver, message, chat_date from livechat where sender = '$fingerprint' and receiver = 'server' or sender = 'server' and receiver = '$fingerprint' order by chat_date");
	
	if(!$statement)
	{
		die($db_connection->error);
	}
	
	$child_elment = '';
	$identify = '';
	$avatar = '';
	
	while($row = $statement->fetch_object())
	{
		
		
		if($row->sender == 'server') {
			// Change the avatar 
			$avatar = '<img src="http://localhost/chat/img/avatar1.jpg" alt="" width="32" height="32">';
			
			$identify = 'You';
			
		} else {
			// Change the avatar 
			$avatar = '<img src="http://localhost/chat/img/avatar.png" alt="" width="32" height="32">';
			
			$identify = 'Client';
		}
		
	
		$child_elment .= '<div class="chat-message clearfix">
					
					'.$avatar.'

					<div class="chat-message-content clearfix">
						
						<span class="chat-time">'.$row->chat_date.'</span>

						<h5>'.$identify.'</h5>

						<p>'.$row->message.'</p>


				

					</div> <!-- end chat-message-content -->

				</div> <!-- end chat-message -->
				<hr>';
	}
	
	 // Close the db Connection 
	//$db_connection->close();
	
	// Formate data to return 
	$data = ['id' =>$fingerprint, 'html' => $child_elment];
	
	// Encode to json 
	$data = json_encode($data);
	
	// Return the element 
	return  $data;
}

echo fetchUsers();
?>