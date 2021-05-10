<?php 
    $establishment =  $_GET['establishment'];
    $inspectors = $_GET['inspectors'];
    $firstname = $_GET['firstname'];
    $middlename = $_GET['middlename'];
    $lastname = $_GET['lastname'];
    $address = $_GET['address'];
    $occupancy = $_GET['occupancy'];
    $date = $_GET['date'];
    $fsic = $_GET['fsic'];
    $ornum = $_GET['ornum'];
    $amount = $_GET['amount'];
    $establish_date = $_GET['establish_date'];
    $region = "Region I";
    $province = "Province of La Union";
    $bfp_address = "AGOO FIRE STATION";
    $barangay = "Brgy. San Agustin East, Agoo, La Union";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="window.print()" onfocus="window.close()" style="padding: 0; margin: 0; background-image: url(includes/forms/business_permit.png); background-attachment: fixed; background-size: cover;">
    <img src="includes/forms/business_permit.png" style="width: 100%" alt="">
    <div style="text-align: center; width: 400px; position: fixed; top: 164px; left: 150px; width: 400px">
        <p style="font-family: tahoma; font-weight: bold; font-size: 20px; color: red"><?php echo $fsic; ?></p>
    </div>

    <div style="text-align: center; width: 400px; position: fixed; top: 310px; right: 165px; width: 90px">
        <p style="font-family: tahoma; font-weight: bold; font-size: 13px"><?php echo $establish_date; ?></p>
    </div>

    <div style="text-align: center; width: 400px; position: fixed; top: 400px; left: 320px; width: 400px">
        <p style="font-family: tahoma; font-weight: bold; font-size: 13px"><?php echo $establishment; ?></p>
    </div>

    <div style="text-align: center; width: 400px; position: fixed; top: 455px; left: 210px; width:400px">
        <p style="font-family: tahoma; font-weight: bold; font-size: 13px"><?php echo $firstname; ?>&nbsp;<?php echo $middlename; ?>.&nbsp;<?php echo $lastname; ?></p>
    </div>

    <div style="text-align: center; width: 400px; position: fixed; top: 499px; left: 232px; width: 400px">
        <span style="font-family: tahoma; font-weight: bold; font-size: 13px"><?php echo $address; ?></span>
    </div>

    <div style="text-align: center; width: 400px; position: fixed; top: 562px; left: 232px; width: 500px">
        <p style="font-family: tahoma; font-weight: bold; font-size: 13px"><?php echo $occupancy; ?></p>
    </div>

    <div style="text-align: left; width: 400px; position: fixed; top: 695px; left: 170px; width: 90px">
        <p style="font-family: tahoma; font-weight: bold; font-size: 13px"><?php echo $amount; ?></p>
    </div>

    <div style="text-align: left; width: 400px; position: fixed; top: 709px; left: 170px; width: 90px">
        <p style="font-family: tahoma; font-weight: bold; font-size: 13px"><?php echo $ornum; ?></p>
    </div>

    
    <div style="text-align: center; width: 400px; position: fixed; top: 715px; left: 416px; width: 400px">
        <p style="font-family: tahoma; font-weight: bold; font-size: 10px"><?php echo $inspectors; ?></p>
    </div>

    <div style="text-align: center; width: 400px; position: fixed; top: 78px; left: 310px; width: 200px">
        <p style="font-family: tahoma; font-weight: bold; font-size: 15px"><?php echo $region; ?></p>
    </div>

    <div style="text-align: center; width: 400px; position: fixed; top: 98px; left: 310px; width: 200px">
        <p style="font-family: tahoma; font-weight: bold; font-size: 15px"><?php echo $province; ?></p>
    </div>

    <div style="text-align: center; width: 400px; position: fixed; top: 114px; left: 310px; width: 200px">
        <p style="font-family: tahoma; font-weight: bold; font-size: 15px"><?php echo $bfp_address; ?></p>
    </div>

    <div style="text-align: center; width: 400px; position: fixed; top: 130px; left: 170px; width: 500px">
        <p style="font-family: tahoma; font-weight: bold; font-size: 15px"><?php echo $barangay; ?></p>
    </div>

    <div style="text-align: center; width: 400px; position: fixed; bottom: 290px; left: 165px; width: 90px">
        <p style="font-family: tahoma; font-weight: bold; font-size: 13px"><?php echo $establish_date; ?></p>
    </div>

    <script>
        document.getE
    </script>
</body>
</html>