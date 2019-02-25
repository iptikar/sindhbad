<?php

function fetchUsers()
{
	require('ajax/php/server.php');
	// Get the connection 
	$db_connection = MysqliConnection();
	
	

	
	// Prepare statement 
	$statement = $db_connection->query( "SELECT sender, receiver, fingerprint, message, chat_date from livechat where sender != 'server'  group by sender order by chat_date asc");
	
	if(!$statement)
	{
		die($db_connection->error);
	}
	
	$child_elment = '';
	// Fetch the data 
	$i = 0;
	
	
	while($row = $statement->fetch_object())
	{
	
		$is_active = '';
		if($i == 0)
		{
			$is_active = 'active';
		}
		
		$child_elment .= '<li class="nav '.$is_active.'">
							<span class = "new-message">
								<i class = "fa fa-envelope"></i>
							</span>
					<a class = "custom14 " href = "#'.$row->sender.'" data-toggle="tab" onclick = "fetchMessage(this)">'.$row->sender.' 
					<span class = "nav-close-button"><i class="fa fa-close icon-remove" icon-id = "'.$row->sender.'"></i></span></a>
</li>';
	
		$i++;
	}
	
	 
	 // Close the db Connection 
	$db_connection->close();
	
	// Return the element 
	return  $child_elment;
}

function fetchMessagesInChatBox()
{
	
	// Get the connection 
	$db_connection = MysqliConnection();
	
	// Prepare statement 
	$statement = $db_connection->query( "SELECT sender, receiver, fingerprint, message, chat_date from livechat where sender != 'server' group by sender order by chat_date");
	
	if(!$statement)
	{
		die($db_connection->error);
	}
	
	$child_elment = '';
	// Fetch the data 
	$i = 0;
	
	while($row = $statement->fetch_object())
	{
	
		// Defining var 
		$is_active = '';
		
		if($i == 0)
		{
			$is_active = 'active';
		}	
		
		$child_elment .= '<div class="tab-pane fade in '.$is_active.'" id="'.$row->sender.'">
        
        <div class="chat">
			
			<div class="chat-history" id  = "chat-history-'.$row->sender.'">
				
				<div class="chat-message clearfix">
					
					<img src="http://lorempixum.com/32/32/people" alt="" width="32" height="32">

					<div class="chat-message-content clearfix">
						
						<span class="chat-time">'.$row->chat_date.'</span>

						<h5>'.$row->sender.'</h5>

						<p>'.$row->message.'</p>


				<hr>

					</div> <!-- end chat-message-content -->

				</div> <!-- end chat-message -->
			

				<hr>

				

			</div> <!-- end chat-history -->

			<p class="chat-feedback">Your partner is typing…</p>

			
				<fieldset>
					
					<input type="text" placeholder="Type your message…" autofocus class = "form-control chat-text" user = "'.$row->sender.'">
					<input type="hidden">

				</fieldset>

			

		</div> <!-- end chat -->


        
        </div>
';
        
	
	
	// Increase $i
	$i++;
	}
	
	 
	 // Close the db Connection 
	$db_connection->close();
	
	// Return the element 
	return  $child_elment;
}


?>