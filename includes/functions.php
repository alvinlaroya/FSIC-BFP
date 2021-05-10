<?php 
    require_once('connection.php');
    function Register_user(){
        global $con; 
        $fname = $_POST['dataFname'];
        $mname = $_POST['dataMname'];
        $lname = $_POST['dataLname'];
        $agency = $_POST['dataAgency'];
        $address = $_POST['dataAddress'];
        $city = $_POST['dataCity'];
        $country = $_POST['dataCountry'];
        $about = $_POST['dataAbout'];
        $username = $_POST['dataUsername'];
        $password = $_POST['dataPassword'];
        $email = $_POST['dataEmail'];

        
        

        $query_register = "INSERT INTO tbl_users (about_me, address_location, agency, city, country, email, fname, lname, mname, user_password, username) 
        VALUES 
        ('$about', '$address', '$agency', '$city', '$country', '$email', '$fname', '$lname', '$mname', '$password', '$username')";

        $result = mysqli_query($con, $query_register);

        if($result){
            echo "";
        } else{
            echo "Your item has not save";
        }
    }


    function Insert_inspection(){
        global $con; 
        $establishment = $_POST['establishment'];
        $inspector = $_POST['inspector'];
        $firstname = $_POST['fname'];
        $middlename = $_POST['mname'];
        $lastname = $_POST['lname'];
        $region = $_POST['region'];
        $province = $_POST['province'];
        $municipality = $_POST['municipality'];
        $barangay = $_POST['barangay'];
        $occupancy = $_POST['occupancy'];
        $date = $_POST['date'];
        $fsic = $_POST['fsic'];
        $ornum = $_POST['or'];
        $amount = $_POST['amount'];
        
        

        $query_insert_inspection = "INSERT INTO tbl_bfp (establishment, inspectors, firstname, middlename, lastname, region, province, municipality, barangay, occupancy, establish_date, fsic, ornum, amount) 
        VALUES 
        ('$establishment', '$inspector', '$firstname', '$middlename', '$lastname', '$region', '$province', '$municipality', '$barangay', '$occupancy', '$date', '$fsic', '$ornum', '$amount')";

        $result = mysqli_query($con, $query_insert_inspection);

        if($result){
            echo "";
            Display_inspection();
        } else{
            echo "Your item has not save";
        }
    }

    function tables(){
        global $con;
        $queryTable = "SELECT * FROM tbl_bfp WHERE archive_unarchive = '1' ORDER BY id DESC";
        $resultTable = mysqli_query($con, $queryTable);

        while($row = mysqli_fetch_assoc($resultTable)){
            echo '<tr>
                    <td class="td-actions text-center">
                          <button type="button" id="btn_edit" data-id='.$row['id'].' rel="tooltip" title="Edit Task" class="btn btn-warning btn-link btn-sm" style="margin-top: 15px">
                          <i class="material-icons">edit</i>
                          </button>
                        </td>
                        <td class="td-actions text-center">
                          <button type="button" id="btn_archive" data-id='.$row['id'].' rel="tooltip" title="Edit Task" class="btn btn-danger btn-link btn-sm" style="margin-top: 15px">
                            <i class="material-icons">archive</i>
                          </button>
                        </td>
                        <td class="td-actions text-center">
                          <a href="includes/makepdf.php?establishment='.$row['establishment'].'&inspector='.$row['inspectors'].'&fname='.$row['firstname'].'&mname=
                          '.$row['middlename'].'&lname='.$row['lastname'].'&address='.$row['address_location'].'&occupancy='.$row['occupancy'].'&establish=
                          '.$row['establish_date'].'&fsic='.$row['fsic'].'&ornum='.$row['ornum'].'&amount='.$row['amount'].'" 
                          type="button" data-id='.$row['id'].' rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm" style="margin-top: 15px" target="_blank">
                            <i class="material-icons">print</i>
                          </a>
                        </td>
                        <td>'.$row['establishment'].'</td>
                        <td>'.$row['inspectors'].'</td>
                        <td>'.$row['firstname'].'</td>
                        <td>'.$row['middlename'].'</td>
                        <td>'.$row['lastname'].'</td>
                        <td>'.$row['address_location'].'</td>
                        <td>'.$row['occupancy'].'</td>
                        <td>'.$row['establish_date'].'</td>
                        <td><pre>'.$row['fsic'].'</pre></td>
                        <td>'.$row['ornum'].'</td>
                        <td>&#8369;'.$row['amount'].'</td>
            </tr>';
        }
    }

    function Display_inspection(){
        global $con;
        $region = $_GET['r'];
        $province = $_GET['p'];
        $municipality = $_GET['m'];

        $value = [];
        $query = "SELECT * FROM tbl_bfp WHERE archive_unarchive ='1' AND region = '$region' AND province = '$province' AND municipality = '$municipality' ORDER BY id DESC";
        $result = mysqli_query($con, $query);
        
        while($row=mysqli_fetch_assoc($result)){
            $value[] = $row;
        }
        
        echo json_encode([
            'status' => 'success', 
            'html' => $value
        ]);
    }
    

   /*  function Get_inspection(){
        global $con;
        $id = $_POST['responseId'];
        $query = "SELECT * FROM tbl_bfp WHERE id = '$id'";
        $result = mysqli_query($con, $query);

        while($row=mysqli_fetch_assoc($result)){
            $user_data = [];
            $user_data[0] = $row['id'];
            $user_data[1] = $row['establishment'];
            $user_data[2] = $row['inspectors'];
            $user_data[3] = $row['firstname'];
            $user_data[4] = $row['middlename'];
            $user_data[5] = $row['lastname'];
            $user_data[6] = $row['address_location'];
            $user_data[7] = $row['occupancy'];
            $user_data[8] = $row['establish_date'];
            $user_data[9] = $row['fsic'];
            $user_data[10] = $row['ornum'];
            $user_data[11] = $row['amount'];
        }
        echo json_encode($user_data);
    } */

    function Update_inspection(){
        global $con;
        $new_id = $_POST['id'];
        $new_establishment = $_POST['establishment'];
        $new_inspectors = $_POST['inspectors'];
        $new_firstname = $_POST['firstname'];
        $new_middlename =$_POST['middlename'];
        $new_lastname = $_POST['lastname'];
        $new_occupancy = $_POST['occupancy'];
        $new_date = $_POST['establish_date'];
        $new_fsic = $_POST['fsic'];
        $new_ornum = $_POST['ornum'];
        $new_amount = $_POST['amount'];

        $query = "UPDATE tbl_bfp set establishment='$new_establishment', inspectors='$new_inspectors', firstname='$new_firstname', middlename='$new_middlename', lastname='$new_lastname',
        occupancy='$new_occupancy', establish_date='$new_date', fsic='$new_fsic', ornum='$new_ornum', amount='$new_amount' WHERE id = '$new_id'";

        $result = mysqli_query($con, $query);

        if($result){
            echo 'Your record has been updated';
        } else{
            echo 'failed updating';
        }

    }

    function Archive_inspection(){
        global $con;
        $new_id = $_POST['id'];

        $query = "UPDATE tbl_bfp SET archive_unarchive = '0' WHERE id = '$new_id'";

        $result = mysqli_query($con, $query);

        if($result){
            echo 'Your record has been archived';
            
        } else{
            echo 'failed updating';
        }
  }

function Unarchive_inspection_record(){
    global $con;
    $unarchive_id = $_POST['id'];

    $query = "UPDATE tbl_bfp set archive_unarchive = '1' WHERE id = '$unarchive_id'";

    $result = mysqli_query($con, $query);

    if($result){
        echo 'Your record has been unarchived';
    } else{
        echo 'failed unarchived';
    }
}



  // INSPECTOR
  function Insert_Inspector(){
    global $con; 
    $position = $_POST['position'];
    $firstname = $_POST['fname'];
    $middlename = $_POST['mname'];
    $lastname = $_POST['lname'];
    $address = $_POST['address'];
    $status = 1;
    
    

  
    $query_insert_inspector = "INSERT INTO tbl_inspectors (position, firstname, middlename, lastname, address_location, inspector_status) 
    VALUES 
    ('$position', '$firstname', '$middlename', '$lastname', '$address', '$status')";

    $result = mysqli_query($con, $query_insert_inspector);

    if($result){
        echo "Your item has save";
    } else{

        echo "Your item has not save";
    }
}

function Update_status(){
    global $con;
    $id = $_POST["id"];
    $status = $_POST['inspector_status'];

    if($status != 1){
        $new_status = 1;
    } else {
        $new_status = 0;
    }

    $query = "UPDATE tbl_inspectors set inspector_status = '$new_status' WHERE id = '$id'";

    $result = mysqli_query($con, $query);

    if($result){
        echo 'Your record has been updated';
    } else{
        echo 'failed updating';
    }
}


function Update_inspector(){
    global $con;
    $new_id = $_POST['id'];
    $new_position = $_POST['position'];
    $new_firstname = $_POST['firstname'];
    $new_middlename = $_POST['middlename'];
    $new_lastname = $_POST['lastname'];
    $new_address = $_POST['address_location'];


    $query = "UPDATE tbl_inspectors SET position='$new_position', firstname='$new_firstname', middlename='$new_middlename', lastname='$new_lastname',
    address_location='$new_address' WHERE id ='$new_id'";

    $result = mysqli_query($con, $query);

    if($result){
        echo 'Your record has been updated';
    } else{
        echo 'failed updating';
    }

}

function Display_inspector_active(){
    global $con;
    $value = [];
    $query = "SELECT * FROM tbl_users WHERE to_active_status = 1 ORDER BY id DESC";
    $result = mysqli_query($con, $query);
    
    while($row=mysqli_fetch_assoc($result)){
        $value[] = $row;
    }
    
    echo json_encode([
        'status' => 'success', 
        'html' => $value
    ]);
}

function Display_inspector(){

    global $con;
    $value = [];
    $query = "SELECT *, IF(to_active_status>0, true, false) as user_status FROM tbl_users ORDER BY id DESC";
    $result = mysqli_query($con, $query);
    
    while($row=mysqli_fetch_assoc($result)){
        $value[] = $row;
    }
    
    echo json_encode([
        'status' => 'success', 
        'html' => $value
    ]);


  /*   global $con;
    $value='';
    $query = "SELECT * FROM tbl_inspectors ORDER BY id DESC";
    $result = mysqli_query($con, $query);
    
    while($row=mysqli_fetch_assoc($result)){
        if($row['inspector_status'] != '1'){
            $status = " ";
            $status_label = "In-active";
        } else{
            $status = "checked";
            $status_label = "Active";
        }
        $value.='<tr>
                    <td class="td-actions text-center">
                      <button type="button" id="btn_edit_inspector" data-id='.$row['id'].' rel="tooltip" title="Edit Task" class="btn btn-warning btn-link btn-sm" style="margin-top: 15px">
                        <i class="material-icons">edit</i>
                      </button>
                    </td>
                    <td>'.$row['position'].'</td>
                    <td>'.$row['firstname'].'</td>
                    <td>'.$row['middlename'].'</td>
                    <td>'.$row['lastname'].'</td>
                    <td>'.$row['address_location'].'</td>
                    <td><label class="switch">
                    <input type="checkbox" '.$status.' />
                    <span class="slider round"></span>
                  </label><label id="status">'.$status_label.'</label></td>
                </tr>'; 
    }
    $value.='';
    
    echo json_encode([
        'status' => 'success', 
        'html' => $value
    ]); */
}

function Delete_inspection(){
    global $con;
    $delete_id = $_POST['id'];

    $query = "DELETE FROM tbl_bfp WHERE id = '$delete_id'";

    $result = mysqli_query($con, $query);

    if($result){
        echo 'Your record has been deleted';
    } else{
        echo 'failed deleting';
    }
}



function  Display_archives_inspection(){
    global $con;
    $region = $_GET['r'];
    $province = $_GET['p'];
    $municipality = $_GET['m'];
    $barangay = $_GET['b'];

    $value = [];
    $query = "SELECT * FROM tbl_bfp WHERE archive_unarchive ='0' AND region = '$region' AND province = '$province' AND municipality = '$municipality' ORDER BY id DESC";
    $result = mysqli_query($con, $query);
    
    while($row=mysqli_fetch_assoc($result)){
        $value[] = $row;
    }
    
    echo json_encode([
        'status' => 'success', 
        'html' => $value
    ]);
}


function Display_inspection_request() {
    global $con;
    $region = $_GET['r'];
    $province = $_GET['p'];
    $municipality = $_GET['m'];
    
    $value = [];
    $query = "SELECT * FROM tbl_users WHERE status_request ='0' AND region = '$region' AND province = '$province' AND municipality = '$municipality' ORDER BY id DESC";
    $result = mysqli_query($con, $query);
    
    while($row=mysqli_fetch_assoc($result)){
        $value[] = $row;
    }
    
    echo json_encode([
        'status' => 'success', 
        'html' => $value
    ]);
}
?>