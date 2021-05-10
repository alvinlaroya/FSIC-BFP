<?php
require_once('../includes/connection.php');
Call_Signup();

function Call_Signup(){
    global $con;
    $position = $_POST['position'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $region = $_POST['region'];
    $provinces = $_POST['province'];
    $municipality = $_POST['municipality'];
    $barangay = $_POST['barangay'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $avatar = '../assets/img/faces/avatar.jpg';


    

    $query = "SELECT email FROM tbl_users WHERE email = ?";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $query)){
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if ($resultCheck > 0) {
            $value = array('error' => "taken");
            echo json_encode([
                'status' => 'success', 
                'error_message' => $value
            ]);
            /* header("Location: ../signup.php?error=usertaken&mail=".$email); */
            exit();
        } else {
            $query = "INSERT INTO tbl_users (email, user_password, fname, mname, lname, phone, region, province, municipality, barangay, avatar, position) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = mysqli_stmt_init($con); 
            if(!mysqli_stmt_prepare($stmt, $query)){
                echo "ERROR";
                exit();
            } else {
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                mysqli_stmt_bind_param($stmt, "ssssssssssss", $email, $hashedPwd, $fname, $mname, $lname, $phone, $region, $provinces, $municipality, $barangay, $avatar, $position);
                mysqli_stmt_execute($stmt);
                $value = array('error' => "notTaken");
                echo json_encode([
                    'status' => 'success', 
                    'error_message' => $value
                ]);
                exit();
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
