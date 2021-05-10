<?php
    $con = mysqli_connect('localhost', 'root', '', 'mobalert');
    if(!$con){  
        die('Please Your Connection' .mysqli_error($con));
    }
?>