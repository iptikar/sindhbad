var timer;
var seconds = 1; // how often should we refresh the DIV?

function startActivityRefresh() {
    timer = setInterval(function() {
        $('#chat-history').load('ajax/php/chat-history.php');
    }, seconds*1000)
}

function cancelActivityRefresh() {
    clearInterval(timer);
}


function registerCloseEvent() {

$(".chat-close").click(function () {
    
		 // Get finger print 
	 var FP = GetfingerPrint();
	 
	 // Get the message 
	
	 
	 $.ajax({
		url:'ajax/php/client-exit-chat.php',
		data:{"fingerprint":FP},
		type:'post',
		success: function(responceText)
		{
			//alert(responceText);
		}
		
		
		});
	
	
});
 
 }
 
// Return milisecound 
function MicroTime1()
{
	// Get the new date
	var d = new Date();
	
	// Get the milliseconds 
	var n = d.getMilliseconds();
	
	return  n;
}

function addZero(x, n) {
    while (x.toString().length < n) {
        x = "0" + x;
    }
    return x;
}


function MicroTime() {
    var d = new Date();
    var h = addZero(d.getHours(), 2);
    var m = addZero(d.getMinutes(), 2);
    var s = addZero(d.getSeconds(), 2);
    var ms = addZero(d.getMilliseconds(), 3);
    var uniqueid =  h + ":" + m + ":" + s + ":" + ms;
    
    return uniqueid;
}
 
// Return fingerprint of client 
function GetfingerPrint()
{
	// Get the finger print 
	 var fingerprint = new Fingerprint().get();
	 
	 // Return the variable 
	 return fingerprint;
}

function CheckUserActivities() {
    timer = setInterval(function() {
       
		$.ajax({
		url:'ajax/php/CheckUserActivities.php',
		data:{"fingerprint":'Not required'},
		type:'post',
		success: function(responceText)
		{
			
		}
		});
	}, seconds*1000)
}

function play(){
 
	// Get audio element 
	var audio = document.getElementById("audio");
    
	// Play the audio
	audio.play();
 }
		
function SendMessageAjax() {

	$('.chat-text').keypress(function (e) {
 var key = e.which;
 if(key === 13)  // the enter key code
  {
	  
	 var gav = $(this).attr("user");
	 
	 // Get finger print 
	 var FP = GetfingerPrint();
	 
	 // Get the message 
	 var message = document.getElementById("message").value;
	 
	
	 $.ajax({
		url:'ajax/php/client-chat-message.php',
		data:{message:message,"fingerprint":FP},
		type:'post',
		success: function(responceText)
		{
			// Message 
			$('.chat-text').val('');
			play();
		}
		
		
		});
	
	 
	 //alert("Finger Pring :"+FP+ "message"+message);
  }
	 
	 $(".chat-history").stop().animate({ scrollTop: $(".chat-history")[0].scrollHeight}, 1000);
}); 

}
		

function RemoveOldMessage() {

	var FP = GetfingerPrint();
	
	 $.ajax({
		url:'ajax/php/RemoveOldMessage.php',
		data:{"fingerprint":FP},
		type:'post',
		success: function(responceText){
		//alert(responceText);
		}
		
		});
	
	
}

$(document).ready(function(){
	
	 RemoveOldMessage();
	 registerCloseEvent();
	 CheckUserActivities();
	 startActivityRefresh();
	 SendMessageAjax();
	 
 })
