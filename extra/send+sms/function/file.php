<?php
//License Sender's Name API using file method
function addSender($userAccount, $passAccount, $sender,$type, $viewResult=1)
{	
	global $arrayAddSender;
	$contextPostValues = http_build_query(array('mobile'=>$userAccount, 'password'=>$passAccount, 'sender'=>$sender, 'type'=>$type));
	$contextOptions['http'] = array('method' => 'POST', 'header'=>'Content-type: application/x-www-form-urlencoded', 'content'=> $contextPostValues, 'max_redirects'=>0, 'protocol_version'=> 1.0, 'timeout'=>10, 'ignore_errors'=>TRUE);
	$contextResouce  = stream_context_create($contextOptions);
	$url = "http://doo.ae/api/addSender.php";
	$arrayResult = file($url, FILE_IGNORE_NEW_LINES, $contextResouce);
	$result = $arrayResult[0];

	if($viewResult)
		$result = printStringResult(trim($result), $arrayAddSender, 'Normal');
	return $result;
}

//Check your Balance API using file method
function balanceSMS($userAccount, $passAccount, $viewResult=1)
{
	global $arrayBalance;
	$contextPostValues = http_build_query(array('mobile'=>$userAccount, 'password'=>$passAccount));
	$contextOptions['http'] = array('method' => 'POST', 'header'=>'Content-type: application/x-www-form-urlencoded', 'content'=> $contextPostValues, 'max_redirects'=>0, 'protocol_version'=> 1.0, 'timeout'=>10, 'ignore_errors'=>TRUE);
	$contextResouce  = stream_context_create($contextOptions);
	$url = "http://doo.ae/api/balance.php";
	$arrayResult = file($url, FILE_IGNORE_NEW_LINES, $contextResouce);
	$result = $arrayResult[0];

	if($viewResult)
		$result = printStringResult(trim($result), $arrayBalance, 'Balance');
	return $result;
}

//Retrieve your password API using file method
function forgetPassword($userAccount, $sendType, $viewResult=1)
{
	global $arrayForgetPassword;
	$contextPostValues = http_build_query(array('mobile'=>$userAccount, 'type'=>$sendType));
	$contextOptions['http'] = array('method' => 'POST', 'header'=>'Content-type: application/x-www-form-urlencoded', 'content'=> $contextPostValues, 'max_redirects'=>0, 'protocol_version'=> 1.0, 'timeout'=>10, 'ignore_errors'=>TRUE);
	$contextResouce  = stream_context_create($contextOptions);
	$url = "http://doo.ae/api/forgetPassword.php";
	$arrayResult = file($url, FILE_IGNORE_NEW_LINES, $contextResouce);
	$result = $arrayResult[0];
	
	if($viewResult)
		$result = printStringResult(trim($result), $arrayForgetPassword);
	return $result;
}

//Send SMS API using file method
function sendSMS($userAccount, $passAccount, $numbers, $sender, $msg, $timeSend=0, $dateSend=0, $viewResult=1, $MsgID=0)
{
	global $arraySendMsg;
	$applicationType = "24";  
    $msg = convertToUnicode($msg);
	$sender = urlencode($sender);
	$domainName = $_SERVER['SERVER_NAME'];
	$contextPostValues = http_build_query(array('mobile'=>$userAccount, 'password'=>$passAccount, 'numbers'=>$numbers, 'sender'=>$sender, 'msg'=>$msg, 'timeSend'=>$timeSend, 'dateSend'=>$dateSend, 'applicationType'=>$applicationType,'msgId'=>$MsgID));
	$contextOptions['http'] = array('method' => 'POST', 'header'=>'Content-type: application/x-www-form-urlencoded', 'content'=> $contextPostValues, 'max_redirects'=>0, 'protocol_version'=> 1.0, 'timeout'=>10, 'ignore_errors'=>TRUE);
	$contextResouce  = stream_context_create($contextOptions);
	$url = "http://doo.ae/api/msgSend.php";
	$arrayResult = file($url, FILE_IGNORE_NEW_LINES, $contextResouce);
	$result = $arrayResult[0];

	if($viewResult)
		$result = printStringResult(trim($result), $arraySendMsg);
	return $result;
}

//Send Formatted SMS API using file method
function sendSMSWK($userAccount, $passAccount, $numbers, $sender, $msg, $msgKey, $timeSend=0, $dateSend=0, $viewResult=1)
{
	global $arraySendMsgWK;
	$applicationType = "24";  
    $msg = convertToUnicode($msg);
	$msgKey = convertToUnicode($msgKey);
	$sender = urlencode($sender);
	$domainName = $_SERVER['SERVER_NAME'];
	$contextPostValues = http_build_query(array('mobile'=>$userAccount, 'password'=>$passAccount, 'numbers'=>$numbers, 'sender'=>$sender, 'msg'=>$msg, 'msgKey'=>$msgKey, 'timeSend'=>$timeSend, 'dateSend'=>$dateSend, 'applicationType'=>$applicationType));
	$contextOptions['http'] = array('method' => 'POST', 'header'=>'Content-type: application/x-www-form-urlencoded', 'content'=> $contextPostValues, 'max_redirects'=>0, 'protocol_version'=> 1.0, 'timeout'=>10, 'ignore_errors'=>TRUE);
	$contextResouce  = stream_context_create($contextOptions);
	$url = "http://doo.ae/api/msgSendWK.php";
	$arrayResult = file($url, FILE_IGNORE_NEW_LINES, $contextResouce);
	$result = $arrayResult[0];

	if($viewResult)
		$result = printStringResult(trim($result) , $arraySendMsgWK);
	return $result;
}

//Check Send Status API using file method
function sendStatus($viewResult=1)
{
	global $arraySendStatus;
	$contextOptions['http'] = array('method' => 'GET', 'max_redirects'=>0, 'protocol_version'=> 1.0, 'timeout'=>10, 'ignore_errors'=>TRUE);
	$contextResouce  = stream_context_create($contextOptions);
	$url = "http://doo.ae/api/sendStatus.php";
	$arrayResult = file($url, FILE_IGNORE_NEW_LINES, $contextResouce);
	$result = $arrayResult[0];
	
	if($viewResult)
		$result = printStringResult(trim($result), $arraySendStatus);
	return $result;
}

//Get your Senders Names API using file method
function senderAvailability($userAccount, $type=0, $viewResult=1)
{	
	global $arraySenderAvailability;
	$contextPostValues = http_build_query(array('mobile'=>$userAccount, 'type'=>$type));
	$contextOptions['http'] = array('method' => 'POST', 'header'=>'Content-type: application/x-www-form-urlencoded', 'content'=> $contextPostValues, 'max_redirects'=>0, 'protocol_version'=> 1.0, 'timeout'=>10, 'ignore_errors'=>TRUE);
	$contextResouce  = stream_context_create($contextOptions);
	$url = "http://doo.ae/api/senderAvailability.php";
	$arrayResult = file($url, FILE_IGNORE_NEW_LINES, $contextResouce);
	$result = $arrayResult[0];

	if($viewResult)
		$result = printStringResult(trim($result) , $arraySenderAvailability);
	return $result;
}
?>