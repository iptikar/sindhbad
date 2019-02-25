<?php
include("includeSettings.php");			//Include this file to get the general settings
$mobile = ""; 							//Your mobile number, as registered in Doo.ae.
$password = "";							//Your password, as registered in Doo.ae.
$sender = "doo";						//Sender name that you want to license.
										//Sender name must be a component of characters only (English letters and numbers), and the length of sender's name must not be more than 11 characters.
										
$type="";								//1 or 2
										//1: means you want to license the sender's name to be used for sending SMS to UAEs mobile numbers.
										//2: means the you want to license the sender's name to be used for sending SMS to KSAs mobile numbers.

										
$resultType = 0;						//This variable determine the type of the result
										//0: Returns API result as a number.
										//1: Returns API result as meaningful text.	

//Call addSender function, to license Sender Name
echo addSender($mobile, $password ,$sender,$type,$resultType);
?>