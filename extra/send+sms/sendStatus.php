<?php
include("includeSettings.php");			//Include this file to get the general settings
$resultType = 0;						//This variable determine the type of the result
										//0: Returns API result as a number.
										//1: Returns API result as meaningful text.
										
//Call sendStatus function to check Sending Status
echo sendStatus($resultType);
?>