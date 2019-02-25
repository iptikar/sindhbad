<?php
$mysqli = new mysqli('localhost', 'root', 'a', 'chat');

$sql = 'SELECT sender, receiver  FROM livechat GROUP BY sender ,receiver';

// SELECT sender FROM chat GROUP BY sender

$query = $mysqli->query($sql);

if(!$query)
{
	die($mysqli->error);
}
?>