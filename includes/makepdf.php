<?php
    require_once __DIR__ . '/vendor/autoload.php';

    $establishment = $_GET['establishment'];
    $inspectors = $_GET['inspectors'];
    $firstname = $_GET['firstname'];
    $middlename =$_GET['middlename'];
    $lastname = $_GET['lastname'];
    $address = $_GET['address'];
    $occupancy = $_GET['occupancy'];
    $date = $_GET['date'];
    $fsic = $_GET['fsic'];
    $ornum = $_GET['ornum'];
    $amount = $_GET['amount'];
 
    $mpdf = new \Mpdf\Mpdf();
    $mpdf = new \Mpdf\Mpdf(['format' => 'Letter']);
    $mpdf = new \Mpdf\Mpdf([
        'debug' => true,
        'allow_output_buffering' => true
    ]);
    

    $fsic_data = '';
    $establishment_data = '';
    $owner_data = '';
    $address_data = '';
    $amount_data = '';
    $ornum_data = '';


    $fsic_data.='<pre><h3 style="z-index: 1; color: red"><strong>' .$fsic. '</strong></h3></pre>';
    $establishment_data.='<div style="text-align:center"><pre style="margin-left: 220px; line-height: 12px"><p style="z-index: 1; font-weight: bold; font-size: 10px; background-color: rgba(255, 255, 255, 0.1)">' .$establishment. '</p></pre></div>';
    $owner_data.='<div style=" text-align:center"><pre><p style="z-index: 1; font-weight: bold; font-size: 10px; background-color: rgba(255, 255, 255, 0.1)">' .$firstname. '&nbsp;'.$middlename.'.&nbsp;'.$lastname.'</p></pre></div>';
    $address_data.='<div style="text-align:center"><pre><p style="z-index: 1; font-weight: bold; font-size: 10px; background-color: rgba(255, 255, 255, 0.1)">' .$address. '</p></pre></div>';
    $amount_data.='<div style="text-align:center"><pre><p style="z-index: 1; font-weight: bold; font-size: 10px; background-color: rgba(255, 255, 255, 0.1)">&#8369;' .$amount. '</p></pre></div>';
    $ornum_data.='<div style="text-align:center"><pre><p style="z-index: 1; font-weight: bold; font-size: 10px; background-color: rgba(255, 255, 255, 0.1)">' .$ornum. '</p></pre></div>';
    /*     if($fsic){
        $data.='<br /><strong>Message</strong><br />' .$fsic;
    } */
    /* $mpdf->WriteFixedPosHTML($data, 20, 90, 50, 90, 'auto'); */
    $mpdf->WriteFixedPosHTML($fsic_data, 50, 37, 100, 90, 'auto');
    $mpdf->WriteFixedPosHTML($establishment_data, 19, 93, 160, 90, 'auto');
    $mpdf->WriteFixedPosHTML($owner_data, 19, 106, 160, 90, 'auto');
    $mpdf->WriteFixedPosHTML($address_data, 22, 113.5, 160, 90, 'auto');
    $mpdf->WriteFixedPosHTML($amount_data, 40, 164, 20, 90, 'auto');
    $mpdf->WriteFixedPosHTML($ornum_data, 40, 167.5, 20, 90, 'auto');
   
    $mpdf->WriteHTML('<img src="forms/form1.jpg" style="z-index: -1; width: 1200px; position: absolute; margin-top: -55px; margin-left: -55px"/>');
    $mpdf->Output($establishment.'.pdf','D');
?>

