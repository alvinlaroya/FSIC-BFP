<?php

require_once('../includes/functions.php');
require_once('../includes/connection.php');


global $con;
$id = $_POST['id'];
$to_add = $_POST['to_add'];
$to_archive = $_POST['to_archive'];
$to_respond_fsic = $_POST['to_respond_fsic'];
$to_accept_request = $_POST['to_accept_request'];
$to_switch_status = $_POST['to_switch_status'];
$to_active_status = $_POST['to_active_status'];


/* echo "to add: " .$to_add;
echo "to archive: " .$to_archive;
echo "to respond: " .$to_respond_fsic;
echo "to accept: " .$to_accept_request;
echo "to switch: " .$to_switch_status;
echo "to active status: " .$to_active_status;
 */


$query = "UPDATE tbl_users set status_request = 1, to_add = $to_add, to_archive = $to_archive, to_respond_fsic = $to_respond_fsic, to_accept_request = $to_accept_request, to_switch_status = $to_switch_status, to_active_status = $to_active_status WHERE id = '$id'";

$result = mysqli_query($con, $query);

if ($result) {
    echo 'Your record has been approved';
} else {
    echo 'failed approving';
}
