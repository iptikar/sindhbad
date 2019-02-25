<?php

require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

// Mail to seend 
$data = implode(' ', array_slice($argv, 1));
if (empty($data)) {
	
    $data = "Hello World!. I am hanging arout you. Hello";
}
$msg = new AMQPMessage($data);

/*
 * If you want to send multiple message which is in array 
 * // Let say wait for a secound and then send 
 * [we have thousend email in array ]
 * 
 * */
$channel->basic_publish($msg, '', 'hello');

echo ' [x] Sent ', $data, "\n";

$channel->close();

$connection->close();
