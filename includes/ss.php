<?
require_once __DIR__ . '/vendor/autoload.php';

$establishment = $_POST['establishment'];

echo $establishment;

$mpdf = new \Mpdf\Mpdf();

$data = '';
$data.='<h1>Your details</h1>';

$data.='<strong>Establishment: </strong>' .$establishment. '<br />';

if($message){
    $data.='<br /><strong>Message</strong><br />' .$message;
}
$mpdf->WriteFixedPosHTML($data, 20, 230, 50, 90, 'auto');

//$mpdf->WriteHTML('<img src="rara.jpg" style="position: absolute; margin-top: -70px"/>');
$mpdf->Output($establishment,'I');
?>