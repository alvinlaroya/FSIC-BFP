<?php

/* session_start();
session_unset();
unset($_SESSION['userid']);
unset($_SESSION['userfname']);
unset($_SESSION['usermname']);
unset($_SESSION['userlname']);
unset($_SESSION['userphone']);
unset($_SESSION['userregion']);
unset($_SESSION['userprovince']);
unset($_SESSION['usermunicipality']);
unset($_SESSION['userbarangay']);
unset($_SESSION['useravatar']);
unset($_SESSION['useremail']);
session_destroy();   */
// Initialize the session.
// If you are using session_name("something"), don't forget it now!
session_start();
session_unset();

// destroy the session
session_destroy();

echo "LOGOUT";

header("Location: ../index.php"); 
?>