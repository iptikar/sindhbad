<?php
include("includeSettings.php");			//Include this file to get the general settings
$mobile = "";							//Your mobile number, as registered in Doo.ae.

$type = "";								//1 or 2, 1 means UAE senders names, while 2 means KSA senders names
										//In case you didn't pass this parameter, you will get all your active senders names.

$resultType = 0;						//This variable determine the type of the result
										//0: Returns API result as a number.
										//1: Returns API result as meaningful text.								
										
										
//Call senderAvailability function to get your sender(s) name(s) in Doo.ae.
echo senderAvailability($mobile,$type,$resultType);
?>