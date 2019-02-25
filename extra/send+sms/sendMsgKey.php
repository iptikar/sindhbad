<?php
include("includeSettings.php");									//Include this file to get the general settings
$mobile = ""; 													//Your mobile number, as registered in Doo.ae.
$password = "";													//Your password, as registered in Doo.ae.
$sender = "sms Msg";											//Message sender, will be encoded to urlencode automatically

$numbers = "";													//the mobile number or set of mobiles numbers that the SMS message will be sent to them, each number must be in international format, without zeros or symbol (+), and separated from others by the symbol (,).
																//Note: numbers count must be equal to messages count in the msgKey

$msg = "Welcome to (1)¡ your subscription will ends on (2)";    //Message Template

$msgKey = "(1),*,mohammad,@,(2), *,12/10/2008***(1),*,Ahmad,@,(2),*,10/10/2008";	//The set of values that will replace the symbols in the template message text
																				/*
																				Definition of Symbols:
																				(1), (2)…: the symbols where the values will be replaced with it.
																				*: separate between the symbol and the value that will replace it.
																				@: separate between each definition of the symbol and its value.
																				***: separate between each SMS definitions.
																				*/
									
$timeSend = 0;							//Determine the send time, 0 means send now

$MsgID = rand(1,99999);					//Random number that will be attached with the posting, just in case you want to send same message in less than one hour from the first one
										//doo.ae prevents recurrence send the same message within one hour of being sent, except in the case of sending a different value with each send operation
										
										//Standard format hh:mm:ss

$dateSend = 0;							//Determine the send date, 0 means send now
										//Standard format mm:dd:yyyy
										
$resultType = 0;						//This variable determine the type of the result
										//0: Returns API result as a number.
										//1: Returns API result as meaningful text.

//Call sendStatus function to check Sending Status
echo sendSMSWK($mobile, $password, $numbers, $sender, $msg, $msgKey, $timeSend, $dateSend, $resultType);
?>