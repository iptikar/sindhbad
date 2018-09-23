<?php



function fetchUsers()
{
	require('ajax/php/server.php');
	// Get the connection 
	$db_connection = MysqliConnection();
	
	

	
	// Prepare statement 
	$statement = $db_connection->query( "SELECT sender, receiver, fingerprint, message, chat_date from livechat where sender != 'server'  group by sender order by chat_date");
	
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
		
		$child_elment .= '<li class="nav '.$is_active.'"><a href = "#'.$row->sender.'" data-toggle="tab" onclick = "fetchMessage(this)">'.$row->sender.'  <i class="icon-remove" icon-id = "'.$row->sender.'">X</i></a></li>';
	
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
	$statement = $db_connection->query( "SELECT sender, receiver, fingerprint, message, chat_date from livechat group by sender order by chat_date");
	
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
						
						<span class="chat-time">13:35</span>

						<h5>John Doe</h5>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, explicabo quasi ratione odio dolorum harum.</p>


				<hr>

					</div> <!-- end chat-message-content -->

				</div> <!-- end chat-message -->
				<div class="chat-message clearfix">
					
					<img src="http://gravatar.com/avatar/2c0ad52fc5943b78d6abe069cc08f320?s=32" alt="" width="32" height="32">

					<div class="chat-message-content clearfix">
						
						<span class="chat-time">13:37</span>

						<h5>Marco Biedermann</h5>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis, nulla accusamus magni vel debitis numquam qui tempora rem voluptatem delectus!</p>

					</div> <!-- end chat-message-content -->

				</div> <!-- end chat-message -->

				<hr>

				<div class="chat-message clearfix">
					
					<img src="http://lorempixum.com/32/32/people" alt="" width="32" height="32">

					<div class="chat-message-content clearfix">
						
						<span class="chat-time">13:38</span>

						<h5>John Doe</h5>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

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