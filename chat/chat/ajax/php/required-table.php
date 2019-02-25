<?php

// Required 
require_once('server.php');

$mysqli = MysqliConnection();

// Create required table 
$sql = "CREATE TABLE if not exists livechat(id int(50),
sender VARCHAR(225) NOT NULL,
receiver VARCHAR(225) NOT NULL,
fingerprint VARCHAR(100) NOT NULL,
message text NOT NULL,
chat_date DATETIME,
view enum('yes','no'),
phpsessid CHAR(50) NOT NULL,
typing VARCHAR(50))ENGINE MyISAM CHARSET=utf8";

// Check if faile query 
$query = $mysqli->query($sql);

if(!$query)
{
	die($mysqli->error);
}

?>