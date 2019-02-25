function registerCloseEvent() {

$(".chat-close").click(function () {
    
		 // Get finger print 
	 var FP = GetfingerPrint();
	 
	 // Get the message 
	
	 
	 $.ajax({
		url:'ajax/php/exit-client-chat.php',
		data:{"fingerprint":FP},
		type:'post',
		success: function(responceText)
		{
			//alert(responceText);
		}
		
		
		});
	
	
});
 
 }
	
function FetchCurrentUsers()
{
	setInterval( function() {
    $('#users-tab-nav').load('fetch-users.php');
}, 3000);
}
	
function FetchCurrentUsersList()
{
	setInterval( function() {
    $('#chat-sidebar-first').load('fetchUsersList.php');
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
			
			// Get the lement 
			
			if(responceText.html == '') {
			
				//var doc = document.getElementById(responceText.id);
				
				//$(doc).remove((":contains("+ responceText.id +")"));
				 element.innerHTML = '<div class="chat-message clearfix"> <img src="http://localhost/chat/img/avatar.png" alt="" width="32" height="32"> <div class="chat-message-content clearfix"> <span class="chat-time">'+ Date() +'</span> <h5>Notice</h5> <p>User Disconnected</p> </div> <!-- end chat-message-content --> </div> <!-- end chat-message --> <hr>'
			 	
				 console.log(responceText.html);
				
				
			} else {
			
				element.innerHTML = responceText.html;
			}
			
			
			
			

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

function process(e,el) {
    var code = (e.keyCode ? e.keyCode : e.which);
    if (code == 13) { //Enter keycode
        
		// Get the user id 
		var id = el.getAttribute('user');
		
		// Get message 
		var message = el.value;
		
		 $.ajax({
		url:'ajax/php/insert-data-by-server.php',
		data:{"fingerprint":id, "message":message},
		type:'post',
		success: function(responceText)
		{
			el.value = '';
			play();
		}


		});
    }
	 
}

function scrooldown(el) {
	
	
	$("#chat-history-"+el.id+"").stop().animate({ scrollTop: $("#chat-history-"+el.id+"")[0].scrollHeight}, 1000);
	
}
	
function play(){
       var audio = document.getElementById("audio");
       audio.play();
   }

$(document).ready(function(){

	 FetchCurrentUsersList();
 	startActivityRefresh();
 	registerCloseEvent();
 	MessageByAjax();
})

