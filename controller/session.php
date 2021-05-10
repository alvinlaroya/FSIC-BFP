<?php
    require_once('../includes/functions.php');
    require_once('../includes/connection.php');

    global $con;
    $id = $_POST['user_id'];

    $value = [];
    $query = "SELECT * FROM tbl_users WHERE id = '$id'";
    $result = mysqli_query($con, $query);
    
    while($row=mysqli_fetch_assoc($result)){
        $value[] = $row;
    }
    
    echo json_encode([
        'status' => 'success', 
        'html' => $value
    ]);
?>