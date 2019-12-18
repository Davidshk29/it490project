<?php
require_once __DIR__ . '/vendor/autoload.php';
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;
$connection = new AMQPStreamConnection('192.168.1.3', 5672, 'david', '123');
$channel = $connection->channel();
$channel->queue_declare('hello', false, false, false, false);
$msg = new AMQPMessage('David');
$channel->basic_publish($msg, '', 'hello');
echo " [x] Sent 'This is david'\n";
$channel->close();
$connection->close();
?>
