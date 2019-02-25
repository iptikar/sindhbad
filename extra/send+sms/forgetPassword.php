<?php
include("includeSettings.php");			//Include this file to get the general settings
$mobile = ""; 							//Your mobile number, as registered in Doo.ae.
$sendtype = 1;							//1 or 2
										//1: the password will be sent to your mobile number
										//2: the password will be sent to your email Determine where to send the password (in this case you should have been specified it in your Personal Info page at you account)

$resultType = 0;						//Determine type result from gate
										//0: Returns the result as they are at the gate
										//1: Returns the meaning of the result returned from the gate

//Call forgetPassword function, to retrieve your password
echo forgetPassword($mobile, $sendtype, $resultType);
?>