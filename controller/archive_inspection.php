<?php
    /* require_once '../config.php'; */
    require_once '../vendor/autoload.php';

    require_once('../includes/functions.php');
    require_once('../includes/connection.php');

    Archive_inspection();

 /*    $basic  = new \Nexmo\Client\Credentials\Basic('89545133', 'us4upGYMMahTgl3l');
    $client = new \Nexmo\Client($basic);

    try {
        $message = $client->message()->send([
            'to' => +639381453259,
            'from' => 'MOBAlert',
            'text' => 'waze://https://waze.com/ul?ll=14.609053699999997,121.1322565700001&navigate=yes'
        ]);
        $response = $message->getResponseData();

        if($response['messages'][0]['status'] == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $response['messages'][0]['status'] . "\n";
        }
    } catch (Exception $e) {
        echo "The message was not sent. Error: " . $e->getMessage() . "\n";
    } */






