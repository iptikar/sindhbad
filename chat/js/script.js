(function() {

	$('#live-chat header').on('click', function() {

		$('.chat').slideToggle(300, 'swing');
		$('.chat-message-counter').fadeToggle(300, 'swing');

	});

	$('.chat-close').on('click', function(e) {

		// Send the ajax request that user closed the chat box 
		
		
		
		$.ajax({
		url:'../ajax/php/client-chat-message.php',
		data:{close_chat:"yes"},
		type:'post',
		success: function(responceText)
		{
			alert(responceText);
		}
		
		
		});
		e.preventDefault();
		$('#live-chat').fadeOut(300);
		

	});

}) ();