<?php
    require_once('../includes/connection.php');
    Display_Folders();   
    

    function Display_Folders(){
        global $con;
        $value = [];
        $query = "SELECT * FROM tbl_fsic ORDER BY id DESC";
        $result = mysqli_query($con, $query);
        
        while($row=mysqli_fetch_assoc($result)){
            $value[] = $row;
        }
        
        echo json_encode([
            'status' => 'success', 
            'html' => $value
        ]);
    }