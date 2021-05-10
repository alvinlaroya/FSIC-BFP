<?php
session_start();
include('includes/connection.php');

$region = $_SESSION['userregion'];
$province = $_SESSION['userprovince'];
$municipality = $_SESSION['usermunicipality'];


$output = ''; 
if(isset($_POST["export_excel"]))
{
    $sql = "SELECT * FROM tbl_bfp WHERE region = '$region' AND province = '$province' AND municipality = '$municipality' AND archive_unarchive = '1' ORDER BY id DESC";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) > 0)
    {
        $output .= ' 
            <table class"table" border="1">
                <tr>
                    <th style="background-color: #de0c3b; color: white; font-weight: bold; font-size: 17px; font-weight: bold">Establishment</th>
                    <th style="background-color: #de0c3b; color: white; font-weight: bold; font-size: 17px; font-weight: bold">Inspectors</th>
                    <th style="background-color: #de0c3b; color: white; font-weight: bold; font-size: 17px; font-weight: bold">First Name</th>
                    <th style="background-color: #de0c3b; color: white; font-weight: bold; font-size: 17px; font-weight: bold">Middle Name</th>
                    <th style="background-color: #de0c3b; color: white; font-weight: bold; font-size: 17px; font-weight: bold">Last Name</th>
                    <th style="background-color: #de0c3b; color: white; font-weight: bold; font-size: 17px; font-weight: bold">Occupancy</th>
                    <th style="background-color: #de0c3b; color: white; font-weight: bold; font-size: 17px; font-weight: bold">Establish Date</th>
                    <th style="background-color: #de0c3b; color: white; font-weight: bold; font-size: 17px; font-weight: bold">FSIC</th>
                    <th style="background-color: #de0c3b; color: white; font-weight: bold; font-size: 17px; font-weight: bold">Ornum</th>
                    <th style="background-color: #de0c3b; color: white; font-weight: bold; font-size: 17px; font-weight: bold">Amount</th>
                    <th style="background-color: #de0c3b; color: white; font-weight: bold; font-size: 17px; font-weight: bold">Region</th>
                    <th style="background-color: #de0c3b; color: white; font-weight: bold; font-size: 17px; font-weight: bold">Province</th>
                    <th style="background-color: #de0c3b; color: white; font-weight: bold; font-size: 17px; font-weight: bold">Municipality</th>
                    <th style="background-color: #de0c3b; color: white; font-weight: bold; font-size: 17px; font-weight: bold">Barangay</th>
                </tr>
        ';
        while($row = mysqli_fetch_array($result))
        {
            $output .= '
                <tr>
                    <td style="font-size: 17px">'.$row["establishment"].'</td>
                    <td style="font-size: 17px">'.$row["inspectors"].'</td>
                    <td style="font-size: 17px">'.$row["firstname"].'</td>
                    <td style="font-size: 17px">'.$row["middlename"].'</td>
                    <td style="font-size: 17px">'.$row["lastname"].'</td>
                    <td style="font-size: 17px">'.$row["occupancy"].'</td>
                    <td style="font-size: 17px">'.$row["establish_date"].'</td>
                    <td style="font-size: 17px">'.$row["fsic"].'</td>
                    <td style="font-size: 17px">'.$row["ornum"].'</td>
                    <td style="font-size: 17px">'.$row["amount"].'</td>
                    <td style="font-size: 17px">'.$row["region"].'</td>
                    <td style="font-size: 17px">'.$row["province"].'</td>
                    <td style="font-size: 17px">'.$row["municipality"].'</td>
                    <td style="font-size: 17px">'.$row["barangay"].'</td>
                </tr>
            ';
        }
        $output .= '</table>';
        header("Content-Type: application/xls");
        header("Content-Disposition: attachment; filename=fsic_application.xls");
        header("Fsic/");
        echo $output;
    }
}
?>