<?php

require_once('../includes/functions.php');
require_once('../includes/connection.php');


global $con;
$id = $_POST['id'];
if($_POST['to_add'] == 'true'){
    $to_add = 1;
} else {
    $to_add  = 0;
}
if($_POST['to_archive'] == 'true') {
    $to_archive = 1;
} else {
    $to_archive = 0;
}
if($_POST['to_respond_fsic'] == 'true') {
    $to_respond_fsic = 1;
} else {
    $to_respond_fsic = 0;
}
if($_POST['to_accept_request'] == 'true') {
    $to_accept_request = 1;
} else {
    $to_accept_request = 0;
}
if($_POST['to_switch_status'] == 'true') {
    $to_switch_status = 1;
} else {
    $to_switch_status = 0;
}
if( $_POST['to_active_status'] == 'true') {
    $to_active_status = 1;
} else {
    $to_active_status = 0;
}
$sal = (true == true) ? 0 : 1;

echo $sal;



$query = "UPDATE tbl_users set to_add = '$to_add', to_archive = '$to_archive', to_respond_fsic = '$to_respond_fsic', to_accept_request = '$to_accept_request', 
to_switch_status = '$to_switch_status', to_active_status = '$to_active_status' WHERE id = '$id'";

$result = mysqli_query($con, $query);

if ($result) {
    echo 'Your record has been approved';
} else {
    echo 'failed approving';
}
