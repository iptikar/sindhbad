<?php
session_start();
echo "<pre>";
print_R($_SESSION);
echo "</pre>";
require('fetch-chat.php');
?>

<!doctype html>
<html lang="en">
<head>
<title>Chat with client </title>
<link rel="stylesheet" href="../css/style.css" media = "all">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">

	
</head>

<body>

<div class="container">
    <ul class="nav nav-tabs" id = "users-tab-nav">
    
         
    <?php
    	echo fetchUsers();
    ?>
   
   <!--
        <li class="nav active"><a href = "#2063596466" data-toggle="tab" >Bharatrose1 <i class="icon-remove">X</i></a></li>
        <li class="nav"><a  data-toggle="tab" href = "#3945121563">Arabemirate <i class="icon-remove">X</i></a></li>
        <li class="nav"><a  data-toggle="tab" href = "#4252426504">Thankyou <i class="icon-remove">X</i></a></li>
  -->
    </ul>

    <!-- Tab panes -->
    <div class="tab-content" id = "chat-history">
    <?php
        echo fetchMessagesInChatBox();
        ?>
       <!-- 
    <div class="tab-pane fade in active" id="2063596466">2063596466</div>
      <div class="tab-pane fade in" id="3945121563">3945121563</div>
      <div class="tab-pane fade in" id="4252426504">4252426504</div>
      -->
    
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>



<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<script>

function FetchCurrentUsers()
{
	setInterval( function() {
    $('#users-tab-nav').load('fetch-users.php');
}, 3000);
}

function MessageByAjax(el)
{
	var chl = document.getElementsByClassName("chat-history");
	
	//var ge = Array.prototype.slice.call( chl  )
	//alert(ge);
	
	// Get it's length 
	for(var i = 0; i < chl.length; i++)
	{
		// Get each element id 
		var elid = chl[i].id;
		
		// replace chat-history- width nothing 
		var removeStr = 'chat-history-';
		
		var fingerprint = elid.replace(removeStr, '');
		
		// Send the ajax request 
		$.ajax({
		url:'ajax/php/fetch-message-by-id-ajax.php',
		data:{"fingerprint":fingerprint},
		type:'post',
		dataType: 'json',
		success: function(responceText)
		{
			// We will get same id and message like before 
			
			var element = document.getElementById('chat-history-'+responceText.id);
			
			element.innerHTML = responceText.html;
			
		}
		
		
		});

		
	}
}


var timer;
var seconds = 1; // how often should we refresh the DIV?

function startActivityRefresh() {
    timer = setInterval(function() {
       MessageByAjax();
    }, seconds*1000)
}

function cancelActivityRefresh() {
    clearInterval(timer);
}

function fetchMessage(el)
{
	var fingerprint = el.getAttribute("href")
	
	// Send ajax request 
	$.ajax({
		url:'ajax/php/fetch-message-by-id.php',
		data:{"fingerprint":fingerprint},
		dataType:'json',
		type:'post',
		success: function(responceText)
		{
			// Append the message by id 
			var element = document.getElementById('chat-history-'+responceText.id);
			
			// append the value 
			element.innerHTML = responceText.html;
			
			
		}
		
		
		});

	
	
}


function registerCloseEvent() {

$(".icon-remove").click(function () {

	// Get the id of the icon
	var fingerprint = $(this).attr('icon-id');
	
	// Send the ajax request 
	 $.ajax({
		url:'ajax/php/client-exit-chat.php',
		data:{"fingerprint":fingerprint},
		type:'post',
		success: function(responceText)
		{
			alert(responceText);
		}
		
		
		});

	
    //there are multiple elements which has .closeTab icon so close the tab whose close icon is clicked
    var tabContentId = $(this).parent().attr("href");
    $(this).parent().parent().remove(); //remove li of tab
    $('#myTab a:last').tab('show'); // Select first tab
    $(tabContentId).remove(); //remove respective tab content

});
 }
 
 $(document).ready(function(){
 	
 	startActivityRefresh();
 	registerCloseEvent();
 	MessageByAjax();
 	
 })
 
 
 $('.chat-text').keypress(function (e) {
 var key = e.which;
 if(key == 13)  // the enter key code
  {
	 var FP = $(this).attr("user");
	 
	 var message = $(this).val();
	 
	 // send ajax request 
	 $.ajax({
		url:'ajax/php/insert-data-by-server.php',
		data:{"fingerprint":FP, "message":message},
		type:'post',
		success: function(responceText)
		{
			alert(responceText);
		}
		
		
		});

  
  }
}); 
</script>


</body>
<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	
</html>