<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$queueUrl = 'visitors';
$uuid = uniqid();

require_once 'vendor/autoload.php';
$sdk = new \Aws\Sdk();
$sqsClient = $sdk->createSqs(['region' => 'ap-south-1', 'version' => '2012-11-05']);



echo "Sending message\n";
$sqsClient->sendMessage(array(
    'QueueUrl' => $queueUrl,
    'MessageBody' => 'Hello World!',
));
?>