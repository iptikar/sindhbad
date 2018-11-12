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

$channel->basic_publish($msg, '', 'hello');

echo ' [x] Sent ', $data, "\n";

$channel->close();

$connection->close();
