<?php

require_once('../includes/functions.php');
require_once('../includes/connection.php');


global $con;
$id = $_POST['id'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$position = $_POST['position'];



$query = "UPDATE tbl_users set mname = '$mname', lname = '$lname', phone = '$phone', position = '$position' WHERE id = '$id'";

$result = mysqli_query($con, $query);

if ($result) {
    echo 'Your record has been approved';
} else {
    echo 'failed approving';
}
