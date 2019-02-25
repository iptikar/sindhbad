<?php
//License Sender's Name API using fsockopen method
function addSender($userAccount, $passAccount, $sender,$type, $viewResult=1)
{	
	global $arrayAddSender;
	$stringToPost = "mobile=".$userAccount."&password=".$passAccount."&sender=".$sender."&type=".$type;
	$stringToPostLength = strlen($stringToPost);
	$fsockParameter = "POST /api/addSender.php HTTP/1.0 \r\n";
	$fsockParameter.= "Host: doo.ae \r\n";
	$fsockParameter.= "Content-type: application/x-www-form-urlencoded \r\n";
	$fsockParameter.= "Content-length: $stringToPostLength \r\n\r\n";
	$fsockParameter.= "$stringToPost"; 

	$fsockConn = fsockopen("http://doo.ae", 80, &$errno, &$errstr, 30);
	fputs($fsockConn,$fsockParameter);
	
	$result = ""; 
	$clearResult = false; 
	
	while(!feof($fsockConn))
	{
		$line = fgets($fsockConn, 10240);
		if($line == "\r\n" && !$clearResult)
		$clearResult = true;
		
		if($clearResult)
			$result .= trim($line); 
	}

	if($viewResult)
		$result = printStringResult(trim($result), $arrayAddSender, 'Normal');
	return $result;
}

//Check your Balance API using fsockopen method
function balanceSMS($userAccount, $passAccount, $viewResult=1)
{
	global $arrayBalance;
	$stringToPost = "mobile=".$userAccount."&password=".$passAccount;
	$stringToPostLength = strlen($stringToPost);
	$fsockParameter = "POST /api/balance.php HTTP/1.0 \r\n";
	$fsockParameter.= "Host: doo.ae \r\n";
	$fsockParameter.= "Content-type: application/x-www-form-urlencoded \r\n";
	$fsockParameter.= "Content-length: $stringToPostLength \r\n\r\n";
	$fsockParameter.= "$stringToPost";

	$fsockConn = fsockopen("http://doo.ae", 80, &$errno, &$errstr, 5);
	fputs($fsockConn,$fsockParameter);
	
	$result = ""; 
	$clearResult = false; 
	while(!feof($fsockConn))
	{
		$line = fgets($fsockConn, 10240);
		if($line == "\r\n" && !$clearResult)
		$clearResult = true;
		
		if($clearResult)
			$result .= trim($line); 
	}

	if($viewResult)
		$result = printStringResult(trim($result), $arrayBalance, 'Balance');
	return $result;
}

//Retrieve your password API using fsockopen method
function forgetPassword($userAccount, $sendType, $viewResult=1)
{
	global $arrayForgetPassword;
	$stringToPost = "mobile=".$userAccount."&type=".$sendType;
	$stringToPostLength = strlen($stringToPost);
	$fsockParameter = "POST /api/forgetPassword.php HTTP/1.0 \r\n";
	$fsockParameter.= "Host: doo.ae \r\n";
	$fsockParameter.= "Content-type: application/x-www-form-urlencoded \r\n";
	$fsockParameter.= "Content-length: $stringToPostLength \r\n\r\n";
	$fsockParameter.= "$stringToPost";

	$fsockConn = fsockopen("http://doo.ae", 80, &$errno, &$errstr, 5);
	fputs($fsockConn,$fsockParameter);
	
	$result = ""; 
	$clearResult = false; 
	while(!feof($fsockConn))
	{
		$line = fgets($fsockConn, 10240);
		if($line == "\r\n" && !$clearResult)
		$clearResult = true;
		
		if($clearResult)
			$result .= trim($line); 
	}
	
	if($viewResult)
		$result = printStringResult(trim($result) , $arrayForgetPassword);
	return $result;
}

//Send SMS API using fsockopen method
function sendSMS($userAccount, $passAccount, $numbers, $sender, $msg, $timeSend=0, $dateSend=0, $viewResult=1, $MsgID=0)
{
	global $arraySendMsg;
	$applicationType = "24";  
    $msg = convertToUnicode($msg);
	$sender = urlencode($sender);
	$domainName = $_SERVER['SERVER_NAME'];
	$stringToPost = "mobile=".$userAccount."&password=".$passAccount."&numbers=".$numbers."&sender=".$sender."&msg=".$msg."&timeSend=".$timeSend."&dateSend=".$dateSend."&applicationType=".$applicationType."&msgId=".$MsgID;
	$stringToPostLength = strlen($stringToPost);
	$fsockParameter = "POST /api/msgSend.php HTTP/1.0 \r\n";
	$fsockParameter.= "Host: doo.ae \r\n";
	$fsockParameter.= "Content-type: application/x-www-form-urlencoded \r\n";
	$fsockParameter.= "Content-length: $stringToPostLength \r\n\r\n";
	$fsockParameter.= "$stringToPost";

	$fsockConn = fsockopen("http://doo.ae", 80, &$errno, &$errstr, 30);
	fputs($fsockConn, $fsockParameter);
		
	$result = ""; 
	$clearResult = false; 
	
	while(!feof($fsockConn))
	{
		$line = fgets($fsockConn, 10240);
		if($line == "\r\n" && !$clearResult)
		$clearResult = true;
		
		if($clearResult)
			$result .= trim($line); 
	}

	if($viewResult)
		$result = printStringResult(trim($result) , $arraySendMsg);
	return $result;
}

//Send Formatted SMS API using fsockopen method
function sendSMSWK($userAccount, $passAccount, $numbers, $sender, $msg, $msgKey, $timeSend=0, $dateSend=0, $viewResult=1)
{
	global $arraySendMsgWK;
	$applicationType = "24";  
    $msg = convertToUnicode($msg);
	$msgKey = convertToUnicode($msgKey);
	$sender = urlencode($sender);
	$domainName = $_SERVER['SERVER_NAME'];
	$stringToPost = "mobile=".$userAccount."&password=".$passAccount."&numbers=".$numbers."&sender=".$sender."&msg=".$msg."&msgKey=".$msgKey."&timeSend=".$timeSend."&dateSend=".$dateSend."&applicationType=".$applicationType;
	$stringToPostLength = strlen($stringToPost);
	$fsockParameter = "POST /api/msgSendWK.php HTTP/1.0 \r\n";
	$fsockParameter.= "Host: doo.ae \r\n";
	$fsockParameter.= "Content-type: application/x-www-form-urlencoded \r\n";
	$fsockParameter.= "Content-length: $stringToPostLength \r\n\r\n";
	$fsockParameter.= "$stringToPost";

	$fsockConn = fsockopen("http://doo.ae", 80, &$errno, &$errstr, 30);
	fputs($fsockConn, $fsockParameter);
		
	$result = ""; 
	$clearResult = false; 
	
	while(!feof($fsockConn))
	{
		$line = fgets($fsockConn, 10240);
		if($line == "\r\n" && !$clearResult)
		$clearResult = true;
		
		if($clearResult)
			$result .= trim($line); 
	}

	if($viewResult)
		$result = printStringResult(trim($result) , $arraySendMsgWK);
	return $result;
}

//Check Send Status API using fsockopen method
function sendStatus($viewResult=1)
{
	global $arraySendStatus;	
	$fsockParameter = "POST /api/sendStatus.php HTTP/1.0 \r\n";
	$fsockParameter.= "Host: doo.ae \r\n";
	$fsockParameter.= "Content-type: application/x-www-form-urlencoded \r\n";
	$fsockParameter.= "Content-length: 0 \r\n\r\n";

	$fsockConn = fsockopen("http://doo.ae", 80, &$errno, &$errstr, 5);
	fputs($fsockConn,$fsockParameter);
	
	$result = ""; 
	$clearResult = false; 
	
	while(!feof($fsockConn))
	{
		$line = fgets($fsockConn, 10240);
		if($line == "\r\n" && !$clearResult)
		$clearResult = true;
		
		if($clearResult)
			$result .= trim($line); 
	}

	if($viewResult)
		$result = printStringResult(trim($result) , $arraySendStatus);
	return $result;
}

//Get your Senders Names API using fsockopen method
function senderAvailability($userAccount, $type=0, $viewResult=1)
{	
	global $arraySenderAvailability;
	$stringToPost = "mobile=".$userAccount."&type=".$type;
	$stringToPostLength = strlen($stringToPost);
	$fsockParameter = "POST /api/senderAvailability.php HTTP/1.0 \r\n";
	$fsockParameter.= "Host: doo.ae \r\n";
	$fsockParameter.= "Content-type: application/x-www-form-urlencoded \r\n";
	$fsockParameter.= "Content-length: $stringToPostLength \r\n\r\n";
	$fsockParameter.= "$stringToPost";

	$fsockConn = fsockopen("http://doo.ae", 80, &$errno, &$errstr, 30);
	fputs($fsockConn,$fsockParameter);
	
	$result = ""; 
	$clearResult = false; 
	
	while(!feof($fsockConn))
	{
		$line = fgets($fsockConn, 10240);
		if($line == "\r\n" && !$clearResult)
		$clearResult = true;
		
		if($clearResult)
			$result .= trim($line); 
	}

	if($viewResult)
		$result = printStringResult(trim($result) , $arraySenderAvailability);
	return $result;
}
?>