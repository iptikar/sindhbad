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


// Create another reference table 
$sql = "CREATE TABLE if not exists users(id int(50) auto_increment PRIMARY KEY,
fingerprint varchar(225) NOT NULL,
phpsessid CHAR(50) NOT NULL,
last_activitiy DATETIME,
FOREIGN KEY (phpsessid) REFERENCES livechat.phpsesssid,
FOREIGN KEY (fingerprint) REFERENCES livechat.fingerprint )ENGINE MyISAM CHARSET=utf8";


// Check if faile query 
$query = $mysqli->query($sql);

if(!$query)
{
	die($mysqli->error);
}
?>