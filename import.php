<?php
include('includes/connection.php');

$filename = 'bfp_inspections.sql';
$handle = fopen($filename, "r+");
$contents = fread($handle,filesize($filename));

$sql = explode (';',$contents);
foreach($sql as $query) { 
    $result = mysqli_query($con,$query);
    if($result) {
        echo '<tr><td><br></td></tr>';
        echo '<tr><td>'.$query.'<b>SUCCESS</b></td></tr>';
        echo '<tr><td><br></td></tr>';
    }
}
fclose ($handle);
echo "SUCCESSFULLY IMPORTED";
?>