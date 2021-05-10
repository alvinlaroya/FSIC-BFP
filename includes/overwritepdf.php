<?php

// Require composer autoload
require_once __DIR__ . '/vendor/autoload.php';

$address = $_GET['address'];
$bin = $_GET['bin'];
$tin = $_GET['tin'];
$email =  $_GET['email'];
$establishment =  $_GET['establishment'];
$name =  $_GET['name'];
$nature =  $_GET['nature'];
$phone =  $_GET['phone'];
$representative =  $_GET['representative'];
$tradename =  $_GET['tradename'];



$mpdf = new \Mpdf\Mpdf();

/* $mpdf->SetImportUse(); */

$pagecount = $mpdf->SetSourceFile('../assets/fsic/fsic_file.pdf');

// Import the last page of the source PDF file
$tplId = $mpdf->ImportPage($pagecount);
$mpdf->UseTemplate($tplId);

$fsic_bin = '';
$fsic_tin = '';
$fsic_name = '';
$fsic_establishment = '';
$fsic_trade_name = '';
$fsic_business_nature = '';
$fsic_address = '';
$fsic_phone = '';
$fsic_email = '';
$fsic_representative = '';




$fsic_bin.='<pre><p style="color: black">'.$bin.'</p></pre>';
$fsic_tin.='<pre><p style="color: black">'.$tin.'</p></pre>';
$fsic_name.='<pre><p style="color: black">'.$name.'</p></pre>';
$fsic_establishment.='<pre><p style="color: black; font-size: 12px;">'.$establishment.'</p></pre>';
$fsic_trade_name.='<pre><p style="color: black; font-size: 12px;">'.$tradename.'</p></pre>';
$fsic_business_nature.='<pre><p style="color: black; font-size: 12px;">'.$nature.'</p></pre>';
$fsic_address.='<pre><p style="color: black; font-size: 12px;">'.$address.'</p></pre>';
$fsic_phone.='<pre><p style="color: black; font-size: 11px;">'.$phone.'</p></pre>';
$fsic_email.='<pre><p style="color: black; font-size: 9px;">'.$email.'</p></pre>';
$fsic_representative.='<pre><p style="color: black; font-size: 12px;">'.$representative.'</p></pre>';

$mpdf->WriteFixedPosHTML($fsic_bin, 13, 51, 100, 90, 'auto');
$mpdf->WriteFixedPosHTML($fsic_tin, 105, 54, 100, 90, 'auto');
$mpdf->WriteFixedPosHTML($fsic_name, 52, 67, 100, 90, 'auto');
$mpdf->WriteFixedPosHTML($fsic_establishment, 52, 75, 140, 90, 'auto');
$mpdf->WriteFixedPosHTML($fsic_trade_name, 32, 87, 100, 90, 'auto');
$mpdf->WriteFixedPosHTML($fsic_business_nature, 139, 87, 100, 90, 'auto');
$mpdf->WriteFixedPosHTML($fsic_address, 52, 96, 100, 90, 'auto');
$mpdf->WriteFixedPosHTML($fsic_phone, 79, 107, 100, 90, 'auto');
$mpdf->WriteFixedPosHTML($fsic_email, 139, 108, 100, 90, 'auto');
$mpdf->WriteFixedPosHTML($fsic_representative, 79, 112, 100, 90, 'auto');

$mpdf->Output($establishment.'.pdf','D');

/* require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf = new \Mpdf\Mpdf(['format' => 'Letter']);
$mpdf = new \Mpdf\Mpdf([
    'debug' => true,
    'allow_output_buffering' => true
]);

$mpdf->percentSubset = 0;

$search = array(
	'{{XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX}}',
	'{{XXXXXXXXXXXXXXXXXXXXXXXXXXXXXZZZZZZZZ}}'
);

$replacement = array(
	"Bagong BIn",
	"Bagong TIN"
);
$fsic_data = '';
$fsic_data.='<pre><h3 style="z-index: 1; color: red"><strong>ALVIN LAROYA GWAPO</strong></h3></pre>';

$mpdf->WriteFixedPosHTML($fsic_data, 50, 37, 100, 90, 'auto');


$mpdf->OverWrite('../assets/fsic/fsic_file.pdf', $search, $replacement, 'I', 'fsicapplication.pdf' ) ; */