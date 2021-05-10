<?
require_once __DIR__ . '/vendor/autoload.php';

$establishment = "ahfywagfu";
$inspector = "koasgwoaga";
$fname = "lnsvksafas";
$mname = "lkjlkghlkshgs";
$lname = "fawfwafaw";

$mpdf = new \Mpdf\Mpdf();

$data = '';
$data.='<h1>Your details</h1>';

$data.='<strong>Establishment: </strong>' .$establishment. '<br />';
$data.='<strong>Inspector: </strong>' .$inspector. '<br />';
$data.='<strong>Firstname: </strong>' .$fname. '<br />';
$data.='<strong>Middlename: </strong>' .$mname. '<br />';
$data.='<strong>Lastname: </strong>' .$lname. '<br />';

if($message){
    $data.='<br /><strong>Message</strong><br />' .$message;
}
$mpdf->WriteFixedPosHTML($data, 20, 230, 50, 90, 'auto');

//$mpdf->WriteHTML('<img src="rara.jpg" style="position: absolute; margin-top: -70px"/>');
$mpdf->Output($establishment,'I');
?>