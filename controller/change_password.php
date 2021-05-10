<?php
require_once('../includes/connection.php');
Call_Signup();

function Call_Signup(){
    global $con;
    $id = $_POST['id'];
    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['newpass'];
    
    $query = "SELECT * FROM tbl_users WHERE id = ?";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $query)){
        echo "ERROR";
        exit();
    } else {
        $status = 1;
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($oldpass, $row['user_password']);
            if ($pwdCheck == false) {
                $value = array('error' => "wrongpassword");
                echo json_encode([
                    'status' => 'success', 
                    'html' => $value
                ]);
                exit();
            } else if ($pwdCheck == true) {
                $value = array('error' => "correctpassword");
                echo json_encode([
                    'status' => 'success', 
                    'html' => $value
                ]);
               
                $hashedPwd = password_hash($newpass, PASSWORD_DEFAULT);

                $query = "UPDATE tbl_users set user_password = '$hashedPwd' WHERE id  = '$id'";

                $result = mysqli_query($con, $query);

                if($result){
                   /*  echo 'Your record has been updated'; */
                } else{
                    echo 'failed updating';
                }
                /* echo "<script>window.location.replace('home.php')</script>"; */
                exit();
            } else {
                echo "ERROR PASSWORD";
                exit();
            }
        } else {
            $value = array('error' => "nouser");
            echo json_encode([
                'status' => 'success', 
                'html' => $value
            ]);
            exit();
        }
    }
}
