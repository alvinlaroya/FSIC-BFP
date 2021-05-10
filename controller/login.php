<?php
    require_once('../includes/connection.php');
    global $con;

    $email = $_POST['email'];
    $password = $_POST['password'];


    $query = "SELECT * FROM tbl_users WHERE email = ? AND status_request = ?";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt, $query)){
        echo "ERROR";
        exit();
    } else {
        $status = 1;
        mysqli_stmt_bind_param($stmt, "ss", $email, $status);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            $pwdCheck = password_verify($password, $row['user_password']);
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
                session_start();
                $_SESSION['position'] = $row['position'];
                $_SESSION['userid'] = $row['id'];
                $_SESSION['userfname'] = $row['fname'];
                $_SESSION['usermname'] = $row['mname'];
                $_SESSION['userlname'] = $row['lname'];
                $_SESSION['userphone'] = $row['phone'];
                $_SESSION['userregion'] = $row['region'];
                $_SESSION['userprovince'] = $row['province'];
                $_SESSION['usermunicipality'] = $row['municipality'];
                $_SESSION['userbarangay'] = $row['barangay'];
                $_SESSION['useravatar'] = $row['avatar'];
                $_SESSION['useremail'] = $row['email'];

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
