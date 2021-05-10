<?php

require_once('../includes/functions.php');
require_once('../includes/connection.php');


global $con;
$id = $_GET['id'];  
echo "ID TO: " .$id;
$query = "UPDATE tbl_users set status_request = -1 WHERE id = '$id'";

$result = mysqli_query($con, $query);

if ($result) {
    echo 'Your record has been declined';
} else {
    echo 'failed declining';
}
