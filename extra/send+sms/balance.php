<?php
include("includeSettings.php");			//Include this file to get the general settings
$mobile = ""; 							//Your mobile number, as registered in Doo.ae.
$password = "";							//Your password, as registered in Doo.ae.

$resultType = 0;						//This variable determine the type of the result
										//0: Returns API result as a number.
										//1: Returns API result as meaningful text.	

//Call balanceSMS function, to check your balance
echo balanceSMS($mobile, $password, $resultType);
?>