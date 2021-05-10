<?php 
    require_once('../includes/connection.php');
    Insert_Document();


    function Insert_Document(){
        global $con; 
        $address = $_POST['address'];
        $bin = $_POST['bin'];
        $tin = $_POST['tin'];
        $email =  $_POST['email'];
        $establishment =  $_POST['establishment'];
        $name =  $_POST['name'];
        $nature =  $_POST['occupancy'];
        $phone =  $_POST['phone'];
        $representative =  $_POST['representative'];
        $tradename =  $_POST['tradename'];
        
        
        $insert_folder = "INSERT INTO tbl_fsic (complete_address, bin, tin, email, establishment, fullname, business_nature, phone, representative, tradename) 
        VALUES ('$address', $bin, $tin, '$email', '$establishment', '$name', '$nature', '$phone', '$representative', '$tradename')";

        $result = mysqli_query($con, $insert_folder);

        if($result){
            echo "Your item has saved";
        } else{
            echo "Your item has not save";
        }
    }
