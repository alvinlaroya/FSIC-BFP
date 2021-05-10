<?php
    /* require_once '../config.php'; */
    require_once '../vendor/autoload.php';

    $phone = $_POST['phone'];
    $fsic1 = $_POST['fsic1'];
    $fsica = $_POST['fsica'];
    $fsicb = $_POST['fsicb'];
    $fsicc = $_POST['fsicc'];
    $fsicd = $_POST['fsicd'];
    $fsice = $_POST['fsice'];
    $fsicf = $_POST['fsicf'];
    $fsicg = $_POST['fsicg'];
    $fsich = $_POST['fsich'];
    $fsici = $_POST['fsici'];
    $fsicj = $_POST['fsicj'];
    $fsick = $_POST['fsick'];
    $fsickl = $_POST['fsicl'];

    $attachListText = [
        'FSIC FOR OCCUPANCY PERMIT', 
        'Endoresement from BO/CERTIFICATE of Completion',
        'Certified true copy of assesment fee for securing occupancy permit from BPO',
        'As-build plan (If Necessary)',
        'Certified true copy of valid occupancy permit',
        'Photocopy of FSIC for occupancy permit',
        'Assesment of Business Permit fee',
        'Tax assesment bill from BPLO',
        'Affidavit of Undertaking that there was no substantial changes made on Building/Establishment',
        'Copy of Fire Insurance (If Any)',
        'Photocopy of FSIC for Business Permit (Issued in the precending year)',
        'Assesment of Business Permit Fee/Tax assesment bill from the BPLO',
        'Copy of Fire Insurance (If Any)',
    ];

    $attachList = [$fsic1, $fsica, $fsicb, $fsicc, $fsicd, $fsice, $fsicf, $fsicg, $fsich, $fsici, $fsicj, $fsick, $fsickl];

    $smsBody = 'Good Day from BFP!. We recieved your application form, Please attach complete requirements: ';

    for($x=0; $x<count($attachList); $x++){
        if($attachList[$x] == 'true') {
            $smsBody .= $attachListText[$x].', ';
        }
    }

    $smsBody .='. Thank You!';

    $sample = '+'.$phone;

    $basic  = new \Nexmo\Client\Credentials\Basic('593dbc2e', 'bDgJKpXiGET98NF1');
    $client = new \Nexmo\Client($basic);

    try {
        $message = $client->message()->send([
            'to' => $sample,
            'from' => 'MOBAlert',
            'text' => $smsBody
        ]);
        $response = $message->getResponseData();

        if($response['messages'][0]['status'] == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $response['messages'][0]['status'] . "\n";
        }
    } catch (Exception $e) {
        echo "The message was not sent. Error: " . $e->getMessage() . "\n";
    }






