<?php

session_start();

if(!isset($_SESSION['userid'])){
  header("Location: index.php"); 
}
?>

<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/logo/bfp.png">
  <link rel="icon" type="image/png" href="../assets/img/logo/bfp.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  FSIC Online Application BFP Agoo, La Union
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link href="../assets/css/home-style.css" rel="stylesheet" />
  <script src="../assets/font/all.js" type="text/javascript"></script>
  <script src="https://cdn.tiny.cloud/1/xypu5r5uzmpnvn6divnvn2hefjzpf3wx4dj0wmnhwhua1a9y/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <link href="chosen/chosen.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="chosen/chosen.jquery.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/vuetify/vuetify.min.css">


  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
  <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
  

  <!--   <link href="../assets/vuetify/material_design_icons.css" rel="stylesheet">
  <link href="../assets/vuetify/vuetify.min.css" rel="stylesheet"> -->

  <style>
    .leaflet-routing-container {
      margin-top: 70px !important;
    }
  </style>
</head>

<body onload="window.history.forward();">
  <div>
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
      <img src="../assets/img/logo/bfp.png" alt="" style="width:35px"><br><span style="font-size: 13px">FSIC Online Application</span>
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav nav-tabs" data-tabs="tabs" style="margin-top: 5px; text-transform: none;">
          <li class="nav-item">

          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Dashboard/">
              <i class="material-icons">dashboard</i>
              <p class="sidebar-link">Dashboard</p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="../Alert/">
              <i class="material-icons">location_ons</i>
             
              <p class="sidebar-link">Alerts&emsp;<span style="padding: 5px; position: absolute; top: -5px; left: 15px;" class="badge badge-danger">5</span></p>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="../Fsic/">
              <i class="material-icons">list</i>
              <p class="sidebar-link">FSIC Record</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../UserManagement/">
              <i class="material-icons">person</i>
              <p class="sidebar-link">User Management</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../Archive/">
              <i class="material-icons">archive</i>
              <p class="sidebar-link">FSIC Archives</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" href="javascript:void(0);">
              <i class="material-icons">content_paste</i>
              <p class="sidebar-link">BFP Citizens Charter</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../Profile/">
              <i class="material-icons">person</i>
              <p class="sidebar-link">User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="../About/" target="_blank">
              <i class="material-icons">info</i>
              <p class="sidebar-link">About Us</p>
            </a>
          </li>
        <!--   <li class="nav-item ">
            <a class="nav-link" href="generate_report.php" target="_blank">
              <i class="material-icons">print</i>
              <p class="sidebar-link">Generate Report</p>
            </a>
          </li> -->
          <li class="nav-item active-pro" style="margin-bottom: 20px; margin-left: 10px">
            <a class="nav-link" href="" data-toggle="modal" data-target="#developer">
              <i class="material-icons">code</i>
              <p class="sidebar-link">Developer</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <?php include('../header/nav.php'); ?>
      <div>
        <div style="margin-top: 90px;">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-tabs card-header-primary">
                            <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <h2>Citizens Charter</h2>
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#profile" data-toggle="tab">
                                    <i class="material-icons">bug_report</i> ANNEX A
                                    <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#messages" data-toggle="tab">
                                    <i class="material-icons">code</i> ANNEX B
                                    <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#settings" data-toggle="tab">
                                    <i class="material-icons">cloud</i> ANNEX C
                                    <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#annexd" data-toggle="tab">
                                    <i class="material-icons">cloud</i> ANNEX D
                                    <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#annexe" data-toggle="tab">
                                    <i class="material-icons">cloud</i> ANNEX E
                                    <div class="ripple-container"></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#annexf" data-toggle="tab">
                                    <i class="material-icons">cloud</i> ANNEX F
                                    <div class="ripple-container"></div>
                                    </a>
                                </li>
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                            <div class="tab-pane active" id="profile">
                                <table class="table">
                                <tbody>
                                    <div class="container">
                                        <h4 class="card-title ">BUREAU OF FIRE PROTECTION</h4>
                                        <p class="card-category">   FRONTLINE SERVICE: FIRE SAFETY EVALUATION CLEARANCE FOR BUILDING PERMIT
                                                                    CLIENT: BUILDING OWNER/TENANT/AUTHORIZED REPRESENTATIVE
                                                                    REQUIREMENTS: 1. THREE (3) COMPLETE SETS OF BUILDING PLANS AND SPECIFICATIONS 2. ESTIMATED COST OF THE BUILDING TO BE CONSTRUCTED/RENOVATED/MODIFIED AS REFLECTED
                                                                    IN THE BILL OF MATERIALS INCLUDING LABOR COST SIGNED BY THE DESIGNER/CONTRACTOR
                                                                    SCHEDULE OF THE AVAILABILITY OF THE SERVICE: MONDAY TO FRIDAY (EXCEPT HOLIDAYS), 8:00 AM TO 5:00 PM
                                                                    FSEC FEES: 0.10% OF THE VERIFIED ESTIMATED VALUE OF THE BUILDING TO BE ERECTED.
                                        </p>
                                        <p>HOW TO AVAIL OF THE SERVICES (FSEC FOR BUILDING PERMIT)</p>
                                        </div>
                                        <div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered" style="text-align: center; font-size: 11px">
                                            <thead class=" text-primary">
                                                <th>
                                                STEPS
                                                </th>
                                                <th>
                                                APPLICANT
                                                </th>
                                                <th>
                                                AGENCY ACTION
                                                </th>
                                                <th>
                                                OFFICE/PERSON RESPONSIBLE 
                                                </th>
                                                <th>
                                                LOCATION OF OFFICE
                                                </th>
                                                <th>
                                                DURATION OF ACTIVITY
                                                </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                Apply for FSEC using the standard
                                                application form including the
                                                required attachments  
                                                </td>
                                                <td>
                                                Check completeness of application and endorse to Fire Code Assessor (FCA).
                                                Record to the Official Log Book the name of applicant and owner of the
                                                establishment and the time, date of application. In case of lacking requirements,
                                                CRO shall immediately inform in writing the applicant of such finding. 
                                                </td>
                                                <td>
                                                    CRO
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                Wait for the release of Order of Payment (OP)
                                                </td>
                                                <td>
                                                    Assess Fire Code Fees/Taxes and issue assessment and OP.
                                                </td>
                                                <td>
                                                    FCA
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    Pay the assessed amount and submit copy of receipt of payment to CRO
                                                </td>
                                                <td>
                                                    Receive payment from applicant and compile copy of receipt of payment.
                                                </td>
                                                <td>
                                                    FCCA
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    Receive Claim Stub.
                                                    (Note: FSEC will be issued within
                                                    the maximum period of three (3)
                                                    days from application if the plans
                                                    conform to the fire safety and life
                                                    safety requirements of the Fire
                                                    Code and its IRR.)
                                                </td>
                                                <td>
                                                    Check copy of receipt of payment and record to the logbook the amount paid and
                                                    Official Receipt Number and date of payment, and issue Claim Stub.
                                                    Refer the application to Chief, FSEU for designation of Building Plan Evaluator
                                                    (BPE).
                                                </td>
                                                <td>
                                                    CRO
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    5 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                        
                                                </td>
                                                <td>
                                                    Assign Building Plan Evaluator (BPE) who will review/evaluate the plans and specifications. 
                                                <td>
                                                    Chief, FSEU 
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    15 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                        
                                                </td>
                                                <td>
                                                    Review/Evaluate Building Plans and Accomplish Fire Safety Checklist, and make
                                                    appropriate recommendations/findings. 
                                                <td>
                                                    BPE
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    1 ½ Days Maximum
                                                    from the date of
                                                    application.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                        
                                                </td>
                                                <td>
                                                    Review/evaluate the recommendations/findings of BPE and recommend to C/MFM
                                                    or DFM the issuance of FSEC/NOD 
                                                <td>
                                                    C, FSEU 
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    2 Hours
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                        
                                                </td>
                                                <td>
                                                    Final review/evaluation of the C, FSEU’s recommendation for disposition. 
                                                <td>
                                                    DFM or C/MFM as the case maybe 
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    2 Hours
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                        
                                                </td>
                                                <td>
                                                    Approve and sign three (3) copies of FSEC/NOD as the case may be. 
                                                <td>
                                                    DFM or C/MFM as the case maybe  
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    20 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                        
                                                </td>
                                                <td>
                                                    Record in the Official Logbook the FSEC/NOD number, date approved, name of
                                                    applicant/owner and name of establishment, OR number and amount paid. Provide
                                                    duplicate copy of FSEC/NOD to the designated Records Custodian and BPLO. 
                                                <td>
                                                    CRO, Records Custodian  
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    5 
                                                </td>
                                                <td>
                                                    Owner/Authorized representative Present Claim Stub
                                                </td>
                                                <td>
                                                    Release FSEC to applicant through the CRO.
                                                    Serve copy of NOD to the owner in case the plans and specification did not
                                                    conform to the fire safety and life safety requirement of the Fire Code of the
                                                    Philippines of 2008 and its IRR. Endorse 1 set of plan to BO as well as duplicate
                                                    copy of FSEC or NOD, as the case may be.
                                                </td>
                                                <td>
                                                    CRO
                                                </td>
                                                <td>
                                                    Local BFP Office 
                                                </td>
                                                <td>
                                                    5 Minutes
                                                </td>
                                                </tr>
                                                <tr>
                                                <td colspan="5">
                                                    LEGEND: AIR – After Inspection Report; BO – Building Official; BPE - Building Plan Evaluator; C/MFM – City/Municipal Fire Marshal; C, FSEU – Chief, Fire Safety Enforcement Unit; CRO – Customer Relation
                                                    Officer; DFM – District Fire Marshal who has jurisdiction over a city whose function is the same as that of City Fire Marshal; FCA – Fire Code Assessor; FCCA- Fire Code Collecting Agent; FSI – Fire Safety Inspector;
                                                    FSIC – Fire Safety Inspection Certificate; NOD – Notice of Disapproval; NTC – Notice to Comply; OP – Order of Payment.
                                                </td>
                                                <td>
                                                MAXIMUM OF 3 DAYS
                                                </td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="messages">
                            <table class="table">
                                <tbody>
                                    <div class="container">
                                        <h4 class="card-title ">BUREAU OF FIRE PROTECTION </h4>
                                        <p class="card-category">   FRONTLINE SERVICE: FIRE SAFETY INSPECTION CERTIFICATE FOR OCCUPANCY PERMIT
                                                                    CLIENT: BUILDING OWNER/TENANT/AUTHORIZED REPRESENTATIVE
                                                                    REQUIREMENTS: 1. ENDORSEMENT FROM BO/CERTIFICATE OF COMPLETION 2. CERTIFIED TRUE COPY OF ASSESSMENT FEE FOR SECURING OCCUPANCY PERMIT FROM BO
                                                                    SCHEDULE OF THE AVAILABILITY OF THE SERVICE: MONDAY TO FRIDAY (EXCEPT HOLIDAYS), 8:00 AM TO 5:00 PM
                                                                    FSIC FEES: 10% OF ALL FEES CHARGED BY BO IN GRANTING OCCUPANCY PERMIT.
                                        </p>
                                        <p>HOW TO AVAIL OF THE SERVICES (FSIC FOR OCCUPANCY PERMIT)</p>
                                        </div>
                                        <div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered" style="text-align: center; font-size: 11px">
                                            <thead class=" text-primary">
                                                <th>
                                                STEPS
                                                </th>
                                                <th>
                                                APPLICANT
                                                </th>
                                                <th>
                                                AGENCY ACTION
                                                </th>
                                                <th>
                                                OFFICE/PERSON RESPONSIBLE 
                                                </th>
                                                <th>
                                                LOCATION OF OFFICE
                                                </th>
                                                <th>
                                                DURATION OF ACTIVITY
                                                </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    Apply for FSIC for Occupancy
                                                    Permit using the standard
                                                    application form including the
                                                    requirements  
                                                </td>
                                                <td>
                                                    Check completeness of application and endorse to Fire Code Assessor (FCA).
                                                    Record to the Official Log Book the name of applicant and owner of the
                                                    establishment and the time, date of application. In case of lacking requirements,
                                                    CRO shall immediately inform in writing the applicant of such finding. 
                                                </td>
                                                <td>
                                                    CRO
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    Wait for the release of Order of payment (OP).
                                                </td>
                                                <td>
                                                    Assess Fire Code Fees/Taxes and issue assessment and OP.
                                                </td>
                                                <td>
                                                    FCA
                                                </td>
                                                <td>
                                                    Local BFP Office or near BPLO Office during BOSS period 
                                                </td>
                                                <td>
                                                    10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    Pay the assessed amount and submit copy of receipt of payment to CRO.
                                                </td>
                                                <td>
                                                    Receive payment from applicant and compile copy of receipt of payment.
                                                </td>
                                                <td>
                                                    FCCA
                                                </td>
                                                <td>
                                                    Local BFP Office or near BPLO Office during BOSS period or any authorized place
                                                </td>
                                                <td>
                                                    10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    Receive Claim Stub.
                                                    (Note: FSIC will be issued within the
                                                    maximum period of three (3) days
                                                    from application if no violation of the
                                                    Fire Code and its IRR has been
                                                    noted during inspection.)
                                                </td>
                                                <td>
                                                    Check copy of receipt of payment and record to the logbook the amount
                                                    paid and Official Receipt Number and date of payment, and issue Claim
                                                    Stub. Verify validity of Occupancy Permit and refer to C, FSEU for
                                                    issuance of FSIC.
                                                </td>
                                                <td>
                                                    CRO
                                                </td>
                                                <td>
                                                    Local BFP Office or near BPLO
                                                    Office during BOSS period or
                                                    any authorized place
                                                </td>
                                                <td>
                                                    5 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    Assign Fire Safety Inspector and Issue Inspection Order
                                                </td>
                                                <td>
                                                    Chief, FSEU and C/MFM or DFM
                                                    (In case of Manila, QC and similar
                                                    cities)
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    15 Minutes
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                        
                                                </td>
                                                <td>
                                                    Conduct Fire Safety Inspection and submit After Inspection Report (AIR) and
                                                    supporting documents to Chief, FSEU, with appropriate findings and
                                                    recommendations, such as issuance of FSIC/NOD, as the case may be. If the
                                                    building or establishment is already occupied / operational recommend issuance of
                                                    NTC instead of NOD is there is a violation of the Fire Code.
                                                </td>
                                                <td>
                                                    FSI
                                                </td>
                                                <td>
                                                
                                                </td>
                                                <td>
                                                    1 1/2 Days Maximum
                                                    from the date of
                                                    application.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                        
                                                </td>
                                                <td>
                                                    Review/evaluate the Findings of FSI and recommend to C/MFM or DFM the
                                                    issuance of FSIC/NOD or NTC as the case may be. 
                                                </td>
                                                <td>
                                                    C, FSEU 
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    2 Hours Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                        
                                                </td>
                                                <td>
                                                    Final review/evaluation of the C, FSEU’s recommendation for disposition.
                                                </td>
                                                <td>
                                                    DFM or C/MFM as the case maybe  
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    2 Hours Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                        
                                                </td>
                                                <td>
                                                    Approve and sign three (3) copies of FSIC/NOD or NTC as the case may be.
                                                </td>
                                                <td>
                                                    DFM or C/MFM as the case maybe  
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    20 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                        
                                                </td>
                                                <td>
                                                    Record in the Official Logbook the FSIC/NOD/NTC number, date approved, name
                                                    of applicant/owner and name of establishment, OR number and amount paid.
                                                    Provide duplicate copy of FSIC/NOD/NTC to the designated Records Custodian
                                                    and BPLO.
                                                </td>
                                                <td>
                                                    CRO, Records Custodian  
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    Owner/Authorized representative presents Claim Stub.  
                                                </td>
                                                <td>
                                                    Release FSIC to applicant through the CRO.
                                                    Serve copy of NOD/NTC to the owner in case there is a violation of the Fire Code,
                                                    copy furnished BO.
                                                </td>
                                                <td>
                                                    CRO
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    5 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td colspan="5">
                                                    LEGEND: AIR – After Inspection Report; BO – Building Official; C/MFM – City/Municipal Fire Marshal; C, FSEU – Chief, Fire Safety Enforcement Unit; CRO – Customer Relation Officer; DFM – District Fire Marshal
                                                    who has jurisdiction over a city whose function is the same as that of City Fire Marshal; FCA – Fire Code Assessor; FCCA- Fire Code Collecting Agent; FSI – Fire Safety Inspector; FSIC – Fire Safety Inspection
                                                    Certificate; NOD – Notice of Disapproval; NTC – Notice to Comply; OP – Order of Payment.
                                                </td>
                                                <td>
                                                MAXIMUM OF 3 DAYS
                                                </td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="settings">
                            <table class="table">
                                <tbody>
                                    <div class="container">
                                        <h4 class="card-title ">BUREAU OF FIRE PROTECTION</h4>
                                        <p class="card-category"> FRONTLINE SERVICE: FIRE SAFETY INSPECTION CERTIFICATE FOR NEW BUSINESS PERMIT
                                                                    CLIENT: BUILDING OWNER/TENANT/AUTHORIZED REPRESENTATIVE
                                                                    REQUIREMENTS: 1. CERTIFIED TRUE COPY OF VALID OCCUPANCY PERMIT 2. PHOTO COPY OF FSIC FOR OCCUPANCY PERMIT 3. ASSESSMENT OF BUSINESS PERMIT FEE /TAX ASSESSMENT BILL
                                                                    FROM BPLO 4. COPY OF FIRE INSURANCE POLICY (IF ANY)
                                                                    SCHEDULE OF THE AVAILABILITY OF THE SERVICE: MONDAY TO FRIDAY (EXCEPT HOLIDAYS), 8:00 AM TO 5:00 PM
                                                                    FSIC FEES: 10% OF ALL FEES CHARGED BY BPLO IN GRANTING BUSINESS PERMIT. (OTHER FEES/TAXES PRESCRIBED UNDER RA 9514 AND ITS IRR NOT ASSESSED AND COLLECTED DURING
                                                                    APPLICATION PERIOD WILL BE ASSESSED AND COLLECTED AFTER REGULAR FIRE SAFETY INSPECTION)
                                        </p>
                                        <p>HOW TO AVAIL OF THE SERVICES (FSIC FOR NEW BUSINESS PERMIT WITH VALID FSIC ISSUED DURING OCCUPANCY PERMIT STAGE)</p>
                                        </div>
                                        <div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered" style="text-align: center; font-size: 11px">
                                            <thead class=" text-primary">
                                                <th>
                                                STEPS
                                                </th>
                                                <th>
                                                APPLICANT
                                                </th>
                                                <th>
                                                AGENCY ACTION
                                                </th>
                                                <th>
                                                OFFICE/PERSON RESPONSIBLE 
                                                </th>
                                                <th>
                                                LOCATION OF OFFICE
                                                </th>
                                                <th>
                                                DURATION OF ACTIVITY
                                                </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    Apply for FSIC using the Unified
                                                    Form with complete documentary
                                                    requirements.   
                                                </td>
                                                <td>
                                                    Check completeness of application and endorse to Fire Code Assessor (FCA).
                                                    Record to the Official Log Book the name of applicant and owner of the
                                                    establishment and the time, date of application. In case of lacking requirements or
                                                    the Occupancy Permit is not valid, CRO shall immediately inform in writing the
                                                    applicant of such finding.
                                                    (Note: Occupancy Permit is considered valid for purposes of application for FSIC
                                                    for Business Permit if the Occupancy Permit presented corresponds to the same
                                                    types of occupancy or nature of operation, location or specific area in a building and
                                                    address. The applicant is required to secure a valid Fire Safety Inspection
                                                    Certificate for Occupancy Permit.)
                                                </td>
                                                <td>
                                                    CRO
                                                </td>
                                                <td>
                                                    Local BFP Office or near BPLO
                                                    Office during BOSS period
                                                </td>
                                                <td>
                                                    10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    Wait for the release of Order of payment (OP).
                                                </td>
                                                <td>
                                                    Assess Fire Code Fees/Taxes and issue assessment and OP.
                                                </td>
                                                <td>
                                                    FCA
                                                </td>
                                                <td>
                                                    Local BFP Office or near BPLO Office during BOSS period 
                                                </td>
                                                <td>
                                                    10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    Pay the assessed amount and submit copy of receipt of payment to CRO.
                                                </td>
                                                <td>
                                                    Receive payment from applicant and compile copy of receipt of payment.
                                                </td>
                                                <td>
                                                    FCCA
                                                </td>
                                                <td>
                                                    Local BFP Office or near BPLO Office during BOSS period or any authorized place
                                                </td>
                                                <td>
                                                    10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td rowspan="4">
                                                    4
                                                </td>
                                                <td>
                                                    Receive Claim Stub. (FSIC shall be issued within the day.) 
                                                </td>
                                                <td>
                                                    Check copy of receipt of payment and record to the logbook the amount
                                                    paid and Official Receipt Number and date of payment, and issue Claim
                                                    Stub. Verify validity of Occupancy Permit and refer to C, FSEU for
                                                    issuance of FSIC.
                                                </td>
                                                <td>
                                                    CRO
                                                </td>
                                                <td>
                                                    Local BFP Office or near BPLO
                                                    Office during BOSS period or
                                                    any authorized place
                                                </td>
                                                <td>
                                                    5 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td rowspan="3">
                                                    
                                                </td>
                                                <td>
                                                Review/evaluate the referral of CRO and recommend issuance of FSIC.
                                                </td>
                                                <td>
                                                Chief, FSEU
                                                </td>
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                2 Hours
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                Approve and sign three (3) copies of FSIC for Business Permit.
                                                </td>
                                                <td>
                                                C/MFM or DFM (In case of Manila, QC and similar cities) 
                                                </td>
                                                <td>
                                                
                                                </td>
                                                <td>
                                                20 Minutes
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    Record in the Official Logbook the FSIC number, date approved, validity,
                                                    name of applicant/owner and name of establishment, OR number and
                                                    amount paid. Provide duplicate copy of FSIC to the designated BFP
                                                    Records Custodian and BPLO.
                                                </td>
                                                <td>
                                                CRO, Records Custodian
                                                </td>
                                                <td>
                                                Local BFP Office 
                                                </td>
                                                <td>
                                                10 Minutes
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                Owner/Authorized representative presents Claim Stub.  
                                                </td>
                                                <td>
                                                Release FSIC to applicant through the CRO.
                                                </td>
                                                <td>
                                                    CRO
                                                </td>
                                                <td>
                                                Local BFP Office
                                                </td>
                                                <td>
                                                    5 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td colspan="5">
                                                    LEGEND: AIR – After Inspection Report; BPLO – Business Permit and Licensing Office; C/MFM – City/Municipal Fire Marshal; C, FSEU – Chief, Fire Safety Enforcement Unit; CRO – Customer Relation Officer; DFM
                                                    – District Fire Marshal who has jurisdiction over a city whose function is the same as that of City Fire Marshal; FCA – Fire Code Assessor; FCCA- Fire Code Collecting Agent; FSI – Fire Safety Inspector; FSIC – Fire
                                                    Safety Inspection Certificate; NOD – Notice of Disapproval; NTC – Notice to Comply; OP – Order of Payment.
                                                </td>
                                                <td>
                                                MAXIMUM OF 1 DAY
                                                </td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="annexd">
                            <table class="table">
                                <tbody>
                                    <div class="container">
                                        <h4 class="card-title ">BUREAU OF FIRE PROTECTION</h4>
                                        <p class="card-category">   FRONTLINE SERVICE: FIRE SAFETY INSPECTION CERTIFICATE FOR NEW BUSINESS PERMIT
                                                                    CLIENT: BUILDING OWNER/TENANT/AUTHORIZED REPRESENTATIVE
                                                                    REQUIREMENTS: 1. ASSESSMENT OF BUSINESS PERMIT FEE 2. TAX ASSESSMENT BILL FROM BPLO 3. ENDORSEMENT FROM BO/CERTIFICATE OF COMPLETION 4. CERTIFIED TRUE COPY OF
                                                                    ASSESSMENT FEE FOR SECURING OCCUPANCY PERMIT FROM BO 4. COPY OF FIRE INSURANCE POLICY (IF ANY)
                                                                    SCHEDULE OF THE AVAILABILITY OF THE SERVICE: MONDAY TO FRIDAY (EXCEPT HOLIDAYS), 8:00 AM TO 5:00 PM
                                                                    FSIC FEES: 10% OF ALL FEES CHARGED BY BPLO IN GRANTING BUSINESS PERMIT. (OTHER FEES/TAXES PRESCRIBED UNDER RA 9514 AND ITS IRR NOT ASSESSED AND COLLECTED DURING
                                                                    APPLICATION PERIOD WILL BE ASSESSED AND COLLECTED AFTER REGULAR FIRE SAFETY INSPECTION)
                                        </p>
                                        <p>HOW TO AVAIL OF THE SERVICES (FSIC FOR NEW BUSINESS PERMIT WITHOUT VALID FSIC ISSUED DURING OCCUPANCY PERMIT STAGE)</p>
                                        </div>
                                        <div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered" style="text-align: center; font-size: 11px">
                                            <thead class=" text-primary">
                                                <th>
                                                STEPS
                                                </th>
                                                <th>
                                                APPLICANT
                                                </th>
                                                <th>
                                                AGENCY ACTION
                                                </th>
                                                <th>
                                                OFFICE/PERSON RESPONSIBLE 
                                                </th>
                                                <th>
                                                LOCATION OF OFFICE
                                                </th>
                                                <th>
                                                DURATION OF ACTIVITY
                                                </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                Apply for FSIC using the Unified
                                                Form with complete documentary
                                                requirements.  
                                                </td>
                                                <td>
                                                Check completeness of application and endorse to Fire Code Assessor (FCA).
                                                Record to the Official Log Book the name of applicant and owner of the
                                                establishment and the time, date of application. In case of lacking requirements or
                                                the Occupancy Permit is not valid, CRO shall immediately inform in writing the
                                                applicant of such finding.
                                                (Note: Occupancy Permit is considered valid for purposes of application for FSIC
                                                for Business Permit if the Occupancy Permit presented corresponds to the same
                                                types of occupancy or nature of operation, location or specific area in a building and
                                                address. The applicant is required to secure a valid Fire Safety Inspection
                                                Certificate for Occupancy Permit.)
                                                </td>
                                                <td>
                                                CRO
                                                </td>
                                                <td>
                                                Local BFP Office or near BPLO Office during BOSS period
                                                </td>
                                                <td>
                                                10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                2
                                                </td>
                                                <td>
                                                Wait for the release of Order of payment (OP).
                                                </td>
                                                <td>
                                                Assess Fire Code Fees/Taxes and issue assessment and OP.
                                                </td>
                                                <td>
                                                FCA
                                                </td>
                                                <td>
                                                    Local BFP Office or near BPLO Office during BOSS period 
                                                </td>
                                                <td>
                                                10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                3
                                                </td>
                                                <td>
                                                Pay the assessed amount and submit copy of receipt of payment to CRO.
                                                </td>
                                                <td>
                                                Receive payment from applicant and compile copy of receipt of payment.
                                                </td>
                                                <td>
                                                FCCA
                                                </td>
                                                <td>
                                                Local BFP Office or near BPLO Office during BOSS period or any authorized place
                                                </td>
                                                <td>
                                                10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td rowspan="7">
                                                4
                                                </td>
                                                <td>
                                                Receive Claim Stub.
                                                (FSIC shall be issued within theday.)
                                                </td>
                                                <td>
                                                Check copy of receipt of payment and record to the logbook the amount
                                                paid and Official Receipt Number and date of payment, and issue Claim
                                                Stub. Verify validity of Occupancy Permit and refer to C, FSEU for
                                                issuance of FSIC.
                                                </td>
                                                <td>
                                                CRO
                                                </td>
                                                <td>
                                                Local BFP Office or near BPLO
                                                Office during BOSS period or
                                                any authorized place
                                                </td>
                                                <td>
                                                5 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td rowspan="6">

                                                </td>
                                                <td>
                                                Assign Fire Safety Inspector and Issue Inspection Order.
                                                </td>
                                                <td>
                                                Chief, FSEU and C/MFM or DFM 
                                                </td>
                                                <td>
                                                Local BFP Office
                                                </td>
                                                <td>
                                                15 Minutes
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                Conduct Fire Safety Inspection and submit After Inspection Report (AIR) and
                                                supporting documents to Chief, FSEU, with appropriate findings and
                                                recommendations, such as issuance of FSIC/NTC, as the case may be. 
                                                </td>
                                                <td>
                                                FSI 
                                                </td>
                                                <td>
                                                
                                                </td>
                                                <td>
                                                3 Hours
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                Review/evaluate the Findings of FSI and recommend to DFM or C/MFM the
                                                issuance of FSIC/NTC as the case maybe.
                                                </td>
                                                <td>
                                                C, FSEU 
                                                </td>
                                                <td>
                                                Local BFP Office
                                                </td>
                                                <td>
                                                2 Hours Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                Final review/evaluation of the C, FSEU’s recommendation for disposition.
                                                </td>
                                                <td>
                                                DFM or C/MFM as the case maybe  
                                                </td>
                                                <td>
                                                Local BFP Office
                                                </td>
                                                <td>
                                                2 Hours
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                Approve and sign three (3) copies of FSIC or NTC as the case may be
                                                </td>
                                                <td>
                                                DFM or C/MFM as the case maybe  
                                                </td>
                                                <td>
                                                Local BFP Office
                                                </td>
                                                <td>
                                                20 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                Record in the Official Logbook the FSIC/NTC number, date approved, validity,
                                                name of applicant/owner and name of establishment, OR number and amount paid.
                                                Provide duplicate copy of FSIC/NTC to the designated BFP Records Custodian and
                                                BPLO.
                                                </td>
                                                <td>
                                                CRO, Records Custodian  
                                                </td>
                                                <td>
                                                Local BFP Office
                                                </td>
                                                <td>
                                                10 Minutes
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    Owner/Authorized representative presents Claim Stub.  
                                                </td>
                                                <td>
                                                    Release FSIC to applicant through the CRO.
                                                    Serve copy of NOD/NTC to the owner in case there is a violation of the Fire Code,
                                                    copy furnished BO.
                                                </td>
                                                <td>
                                                    CRO
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    5 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td colspan="5">
                                                    LEGEND: AIR – After Inspection Report; BO – Building Official; C/MFM – City/Municipal Fire Marshal; C, FSEU – Chief, Fire Safety Enforcement Unit; CRO – Customer Relation Officer; DFM – District Fire Marshal
                                                    who has jurisdiction over a city whose function is the same as that of City Fire Marshal; FCA – Fire Code Assessor; FCCA- Fire Code Collecting Agent; FSI – Fire Safety Inspector; FSIC – Fire Safety Inspection
                                                    Certificate; NOD – Notice of Disapproval; NTC – Notice to Comply; OP – Order of Payment.
                                                </td>
                                                <td>
                                                MAXIMUM OF 3 DAYS
                                                </td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="annexe">
                            <table class="table">
                                <tbody>
                                    <div class="container">
                                        <h4 class="card-title ">BUREAU OF FIRE PROTECTION </h4>
                                        <p class="card-category">   FRONTLINE SERVICE: FIRE SAFETY INSPECTION CERTIFICATE FOR BUSINESS PERMIT
                                                                    CLIENT: BUILDING OWNER/TENANT/AUTHORIZED REPRESENTATIVE
                                                                    REQUIREMENTS: 1. PHOTO COPY OF PREVIOUS FSIC (IF ANY) 2. ASSESSMENT OF BUSINESS PERMIT FEE/TAX OR ASSESSMENT BILL FROM BPLO 3. COPY OF FIRE INSURANCE POLICY (IF ANY)
                                                                    SCHEDULE OF THE AVAILABILITY OF THE SERVICE: MONDAY TO FRIDAY (EXCEPT HOLIDAYS), 8:00 AM TO 5:00 PM
                                                                    FSIC FEES: 10% OF ALL FEES CHARGED BY BPLO IN GRANTING BUSINESS PERMIT. (OTHER FEES/TAXES PRESCRIBED UNDER RA 9514 AND ITS IRR NOT ASSESSED AND COLLECTED DURING
                                                                    APPLICATION PERIOD WILL BE ASSESSED AND COLLECTED AFTER REGULAR FIRE SAFETY INSPECTION)
                                        </p>
                                        <p> HOW TO AVAIL OF THE SERVICES (RENEWAL OF FSIC FOR BUSINESS PERMIT WITHOUT VALID FSIC OR EXPIRED FSIC / WITH
                                            EXISTING VIOLATION OF THE FIRE CODE / INCLUDED IN THE NEGATIVE LIST)</p>
                                        </div>
                                        <div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered" style="text-align: center; font-size: 11px">
                                            <thead class=" text-primary">
                                                <th>
                                                STEPS
                                                </th>
                                                <th>
                                                APPLICANT
                                                </th>
                                                <th>
                                                AGENCY ACTION
                                                </th>
                                                <th>
                                                OFFICE/PERSON RESPONSIBLE 
                                                </th>
                                                <th>
                                                LOCATION OF OFFICE
                                                </th>
                                                <th>
                                                DURATION OF ACTIVITY
                                                </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    Apply for FSIC using the Unified
                                                    Form with complete
                                                    documentary requirements.
                                                </td>
                                                <td>
                                                    Check completeness of application and endorse to Fire Code Assessor
                                                    (FCA). Record to the Official Log Book the name of applicant and owner
                                                    of the establishment and the time, date of application. In case of lacking
                                                    requirements CRO shall immediately inform in writing the applicant of
                                                    such finding. 
                                                </td>
                                                <td>
                                                    CRO
                                                </td>
                                                <td>
                                                    Local BFP Office or near BPLO
                                                    Office during BOSS period
                                                </td>
                                                <td>
                                                    10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    Wait for the release of Order of payment (OP).
                                                </td>
                                                <td>
                                                    Assess Fire Code Fees/Taxes and issue assessment and OP.
                                                </td>
                                                <td>
                                                    FCA
                                                </td>
                                                <td>
                                                    Local BFP Office or near BPLO Office during BOSS period 
                                                </td>
                                                <td>
                                                    10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    Pay the assessed amount and submit copy of receipt of payment to CRO.
                                                </td>
                                                <td>
                                                    Receive payment from applicant and compile copy of receipt of payment.
                                                </td>
                                                <td>
                                                    FCCA
                                                </td>
                                                <td>
                                                    Local BFP Office or near BPLO Office during BOSS period or any authorized place
                                                </td>
                                                <td>
                                                    10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td rowspan="7">
                                                    4
                                                </td>
                                                <td>
                                                    Receive Claim Stub. (FSIC will
                                                    be issued within a maximum
                                                    period of 2 days from
                                                    application if no violation found
                                                    during inspection.)
                                                </td>
                                                <td>
                                                    Check copy of receipt of payment and record to the logbook the amount
                                                    paid and Official Receipt Number and date of payment, and issue Claim
                                                    Stub.
                                                </td>
                                                <td>
                                                    CRO
                                                </td>
                                                <td>
                                                    Local BFP Office or near BPLO
                                                    Office during BOSS period or
                                                    any authorized place
                                                </td>
                                                <td>
                                                    5 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td rowspan="6">
                                                    
                                                </td>
                                                <td>
                                                    Assign Fire Safety Inspector and Issue Inspection Order.
                                                </td>
                                                <td>
                                                    Chief, FSEU and C/MFM or DFM 
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    15 Minutes
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    Conduct Fire Safety Inspection and submit After Inspection Report (AIR)
                                                    and supporting documents to Chief, FSEU, with appropriate findings and
                                                    recommendations, such as issuance of FSIC/NTC, as the case may be.
                                                </td>
                                                <td>
                                                    FSI
                                                </td>
                                                <td>
                                                
                                                </td>
                                                <td>
                                                    3 Hours
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    Review/evaluate the Findings of FSI and recommend to DFM or C/MFM the
                                                    issuance of FSIC/NTC as the case maybe.
                                                </td>
                                                <td>
                                                    C, FSEU 
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    2 Hours
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    Final review/evaluation of the C, FSEU’s recommendation for disposition.
                                                </td>
                                                <td>
                                                    DFM or C/MFM as the case maybe  
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    2 Hours
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    Approve and sign three (3) copies of FSIC or NTC as the case may be. 
                                                </td>
                                                <td>
                                                    DFM or C/MFM as the case maybe  
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    20 Minutes
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    Record in the Official Logbook the FSIC/NTC number, date approved,
                                                    validity, name of applicant/owner and name of establishment, OR number
                                                    and amount paid. Provide duplicate copy of FSIC/NTC to the designated
                                                    BFP Records Custodian and BPLO.
                                                </td>
                                                <td>
                                                    CRO, Records Custodian  
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    10 Minutes
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    Owner/Authorized representative presents Claim Stub.  
                                                </td>
                                                <td>
                                                Release FSIC to applicant through the CRO.
                                                Serve copy of NTC to the owner in case there is a violation of the Fire
                                                Code, copy furnished BPLO
                                                </td>
                                                <td>
                                                    CRO
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    5 Minutes
                                                </td>
                                                </tr>
                                                <tr>
                                                <td colspan="5">
                                                    LEGEND: AIR – After Inspection Report; BPLO – Business Permit and Licensing Office; C/MFM – City/Municipal Fire Marshal; C, FSEU – Chief, Fire Safety Enforcement Unit; CRO – Customer Relation Officer; DFM
                                                    – District Fire Marshal who has jurisdiction over a city whose function is the same as that of City Fire Marshal; FCA – Fire Code Assessor; FCCA- Fire Code Collecting Agent; FSI – Fire Safety Inspector; FSIC – Fire
                                                    Safety Inspection Certificate; NOD – Notice of Disapproval; NTC – Notice to Comply; OP – Order of Payment.

                                                </td>
                                                <td>
                                                MAXIMUM OF 2 DAYS
                                                </td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="annexf">
                            <table class="table">
                                <tbody>
                                    <div class="container">
                                        <h4 class="card-title ">BUREAU OF FIRE PROTECTION </h4>
                                        <p class="card-category">   FRONTLINE SERVICE: FIRE SAFETY INSPECTION CERTIFICATE FOR RENEWAL OF BUSINESS PERMIT
                                                                    CLIENT: BUILDING OWNER/TENANT/AUTHORIZED REPRESENTATIVE
                                                                    REQUIREMENTS: 1. PHOTO COPY OF VALID FSIC (ISSUED IN THE IMMEDIATELY PRECEDING YEAR) 2. ASSESSMENT OF BUSINESS PERMIT FEE/TAX ASSESSMENT BILL FROM BPLO 3. COPY OF
                                                                    FIRE INSURANCE POLICY (IF ANY)
                                                                    SCHEDULE OF THE AVAILABILITY OF THE SERVICE: MONDAY TO FRIDAY (EXCEPT HOLIDAYS), 8:00 AM TO 5:00 PM
                                                                    FSIC FEES: 10% OF ALL FEES CHARGED BY BPLO IN GRANTING BUSINESS PERMIT. (OTHER FEES/TAXES PRESCRIBED UNDER RA 9514 AND ITS IRR NOT ASSESSED AND COLLECTED DURING
                                                                    APPLICATION PERIOD WILL BE ASSESSED AND COLLECTED AFTER REGULAR FIRE SAFETY INSPECTION)
                                        </p>
                                        <p> HOW TO AVAIL OF THE SERVICES (FSIC FOR RENEWAL OF BUSINESS PERMIT)</p>
                                        </div>
                                        <div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered" style="text-align: center; font-size: 11px">
                                            <thead class=" text-primary">
                                                <th>
                                                STEPS
                                                </th>
                                                <th>
                                                APPLICANT
                                                </th>
                                                <th>
                                                AGENCY ACTION
                                                </th>
                                                <th>
                                                OFFICE/PERSON RESPONSIBLE 
                                                </th>
                                                <th>
                                                LOCATION OF OFFICE
                                                </th>
                                                <th>
                                                DURATION OF ACTIVITY
                                                </th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                Apply for FSIC using Unified Form
                                                application form including the
                                                requirements.
                                                </td>
                                                <td>
                                                Check completeness of application and endorse to Fire Code Assessor (FCA).
                                                Record to the Official Log Book the name of applicant and owner of the
                                                establishment and the time, date of application. In case of lacking requirements,
                                                CRO shall immediately inform in writing the applicant of such finding.  
                                                </td>
                                                <td>
                                                    CRO
                                                </td>
                                                <td>
                                                Local BFP Office or near BPLO Office during BOSS period
                                                </td>
                                                <td>
                                                10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                2
                                                </td>
                                                <td>
                                                Wait for the release of Order of Payment (OP).
                                                </td>
                                                <td>
                                                Assess Fire Code Fees/Taxes and issue assessment and OP.
                                                </td>
                                                <td>
                                                    FCA
                                                </td>
                                                <td>
                                                Local BFP Office or near BPLO Office during BOSS period 
                                                </td>
                                                <td>
                                                    10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    Pay the assessed amount and submit copy of receipt of payment to CRO.
                                                </td>
                                                <td>
                                                    Receive payment from applicant and compile copy of receipt of payment.
                                                </td>
                                                <td>
                                                    FCCA
                                                </td>
                                                <td>
                                                    Local BFP Office or near BPLO Office during BOSS period or any authorized place
                                                </td>
                                                <td>
                                                    10 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    Receive Claim Stub.
                                                </td>
                                                <td>
                                                    Verify if FSIC is still valid or no existing violation of the Fire Code or if the
                                                    establishment is not in the negative list .Check copy of receipt of payment and
                                                    record to the logbook the amount paid and Official Receipt Number and date of
                                                    payment, and issue Claim Stub. A validated FSIC will serve as basis for the BPLO
                                                    to renew the Business Permit. (Note: The Claim Stub shall be stamped: “New FSIC
                                                    will be issued on the date of the expiration of existing FSIC.”)
                                                </td>
                                                <td>
                                                    CRO
                                                </td>
                                                <td>
                                                    Local BFP Office or near BPLO Office during BOSS period or any authorized place 
                                                </td>
                                                <td>
                                                    20 Minutes Max.
                                                </td>
                                                </tr>
                                                <tr>
                                                <td colspan="5">
                                                </td>
                                                <td>
                                                    MAXIMUM OF 1 DAY
                                                </td>
                                                </tr>
                                                <tr>
                                                <td colspan="6">
                                                    INSPECTION PROCEDURE ONE (1) MONTH BEFORE THE EXPIRATION OF FSIC
                                                </td>
                                                </tr>
                                                <tr>
                                                <td rowspan="6">
                                                    
                                                </td>
                                                <td rowspan="6">
                                                    
                                                </td>
                                                <td>
                                                    Assign Fire Safety Inspector and Issue Inspection Order.
                                                </td>
                                                <td>
                                                    Chief, FSEU and C/MFM or DFM (In case of Manila, QC and similar cities)
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    15 Minutes
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    Conduct Fire Safety Inspection and submit After Inspection Report (AIR) and
                                                    supporting documents to Chief, FSEU, with appropriate findings and
                                                    recommendations, such as issuance of FSIC/NTC, as the case may be. 
                                                </td>
                                                <td>
                                                    Fire Safety Inspector (FSI) 
                                                </td>
                                                <td>
                                                
                                                </td>
                                                <td>
                                                    3 Hours
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    Review/evaluate the Findings of FSI and recommend to C/MFM or DFM the issuance of FSIC.
                                                </td>
                                                <td>
                                                    C, FSEU 
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    45 minutes
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    Final review/evaluation of the C, FSEU’s recommendation for disposition.
                                                </td>
                                                <td>
                                                    DFM or C/MFM as the case maybe  
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    45 minutes
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    Approve and sign three (3) copies of FSIC or NTC as the case may be.
                                                </td>
                                                <td>
                                                    DFM or C/MFM as the case maybe  
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    10 Minutes
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    Record in the Official Logbook the FSIC/NTC number, date approved, validity,
                                                    name of applicant/owner and name of establishment, OR number and amount
                                                    paid. Provide duplicate copy of FSIC/NTC to the designated BFP Records
                                                    Custodian and BPLO. (Serve copy of NTC to the owner in case there is a violation
                                                    of the Fire Code, copy furnished BPLO.)
                                                </td>
                                                <td>
                                                    CRO, Records Custodian  
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    10 Minutes
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    Owner/Authorized representative
                                                    presents Claim Stub. (A new FSIC
                                                    will be issued if there is no violation
                                                    during inspection)
                                                </td>
                                                <td>
                                                    Release FSIC to applicant through the CRO. 
                                                </td>
                                                <td>
                                                    CRO
                                                </td>
                                                <td>
                                                    Local BFP Office
                                                </td>
                                                <td>
                                                    5 Minutes
                                                </td>
                                                </tr>
                                                <tr>
                                                <td colspan="5">
                                                    LEGEND: AIR – After Inspection Report; BPLO – Business Permit and Licensing Office; C/MFM – City/Municipal Fire Marshal; C, FSEU – Chief, Fire Safety Enforcement Unit; CRO – Customer Relation Officer; DFM
                                                    – District Fire Marshal who has jurisdiction over a city whose function is the same as that of City Fire Marshal; FCA – Fire Code Assessor; FCCA- Fire Code Collecting Agent; FSI – Fire Safety Inspector; FSIC – Fire
                                                    Safety Inspection Certificate; NOD – Notice of Disapproval; NTC – Notice to Comply; OP – Order of Payment.
                                                </td>
                                                <td>
                                                MAXIMUM OF 1 DAY
                                                </td>
                                                </tr>
                                        </tbody>
                                    </table>
                                </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <?php include('../footer/footer.php'); ?>
    </div>
    <?php include('../modals/developer_modal.php'); ?>
    <script src="https://www.gstatic.com/firebasejs/5.9.4/firebase.js"></script>

    
    <!-- VUE JS -->
    <script src="../vue.js"></script>


    <!-- AXIOS -->
    <script src="../axios.js"></script>

    <!-- FAKE LOADER -->
 <!--    <script src="../node_modules/dist/fakeLoader.min.js"></script> -->

 <script src="../index.js"></script>

  
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
  <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
  <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>


    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="../assets/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="../assets/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="../assets/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>





    ...
    <!-- <script  src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script> -->
    <script src="https://unpkg.com/vue-bootstrap4-table@1.1.10/dist/vue-bootstrap4-table.min.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/vuetable-2@2.0.0-beta.4/dist/vuetable-2.js"></script>




    <!--  <script src="../assets/js/plugins/newDataTable.js"></script>
  <script src="../assets/js/plugins/newDataTableBootstrap.js"></script> -->


    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="../assets/js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../assets/js/plugins/nouislider.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="../assets/js/plugins/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
    <!-- Chartist JS -->
    <script src="../assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
    <style>
      .modal-change{
  margin: 0;
  position: absolute;
  top: 50%;
  left: 45%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
    </style>


    <!--  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script> -->
    <script src="../assets/vuetify/vuetify.js"></script>





    <!--  <script src="vue/vue-tables-2.min.js"></script> -->


    <!-- Including Vue files -->
    <script src="../vue/alert-locations.js"></script>
    
    <!-- End of Including Vue file -->


    <script>
      /*   $(document).ready(function() {
      $('#mydatatable').DataTable({
       
      });
    }); */
    </script> 
    <script>

  /*     FB.Event.subscribe('send_to_messenger', function(e) {
      // callback for events triggered by the plugin

      });
 */
    </script>

    <script>
      $(document).ready(function() {
        $().ready(function() {
          $sidebar = $('.sidebar');

          $sidebar_img_container = $sidebar.find('.sidebar-background');

          $full_page = $('.full-page');

          $sidebar_responsive = $('body > .navbar-collapse');

          window_width = $(window).width();

          fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

          if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
            if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
              $('.fixed-plugin .dropdown').addClass('open');
            }

          }

          $('.fixed-plugin a').click(function(event) {
            // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
            if ($(this).hasClass('switch-trigger')) {
              if (event.stopPropagation) {
                event.stopPropagation();
              } else if (window.event) {
                window.event.cancelBubble = true;
              }
            }
          });

          $('.fixed-plugin .active-color span').click(function() {
            $full_page_background = $('.full-page-background');

            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('color');

            if ($sidebar.length != 0) {
              $sidebar.attr('data-color', new_color);
            }

            if ($full_page.length != 0) {
              $full_page.attr('filter-color', new_color);
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.attr('data-color', new_color);
            }
          });

          $('.fixed-plugin .background-color .badge').click(function() {
            $(this).siblings().removeClass('active');
            $(this).addClass('active');

            var new_color = $(this).data('background-color');

            if ($sidebar.length != 0) {
              $sidebar.attr('data-background-color', new_color);
            }
          });

          $('.fixed-plugin .img-holder').click(function() {
            $full_page_background = $('.full-page-background');

            $(this).parent('li').siblings().removeClass('active');
            $(this).parent('li').addClass('active');


            var new_image = $(this).find("img").attr('src');

            if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              $sidebar_img_container.fadeOut('fast', function() {
                $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                $sidebar_img_container.fadeIn('fast');
              });
            }

            if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

              $full_page_background.fadeOut('fast', function() {
                $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                $full_page_background.fadeIn('fast');
              });
            }

            if ($('.switch-sidebar-image input:checked').length == 0) {
              var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
              var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            }

            if ($sidebar_responsive.length != 0) {
              $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
            }
          });

          $('.switch-sidebar-image input').change(function() {
            $full_page_background = $('.full-page-background');

            $input = $(this);

            if ($input.is(':checked')) {
              if ($sidebar_img_container.length != 0) {
                $sidebar_img_container.fadeIn('fast');
                $sidebar.attr('data-image', '#');
              }

              if ($full_page_background.length != 0) {
                $full_page_background.fadeIn('fast');
                $full_page.attr('data-image', '#');
              }

              background_image = true;
            } else {
              if ($sidebar_img_container.length != 0) {
                $sidebar.removeAttr('data-image');
                $sidebar_img_container.fadeOut('fast');
              }

              if ($full_page_background.length != 0) {
                $full_page.removeAttr('data-image', '#');
                $full_page_background.fadeOut('fast');
              }

              background_image = false;
            }
          });

          $('.switch-sidebar-mini input').change(function() {
            $body = $('body');

            $input = $(this);

            if (md.misc.sidebar_mini_active == true) {
              $('body').removeClass('sidebar-mini');
              md.misc.sidebar_mini_active = false;

              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

            } else {

              $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

              setTimeout(function() {
                $('body').addClass('sidebar-mini');

                md.misc.sidebar_mini_active = true;
              }, 300);
            }

            // we simulate the window Resize so the charts will get updated in realtime.
            var simulateWindowResize = setInterval(function() {
              window.dispatchEvent(new Event('resize'));
            }, 180);

            // we stop the simulation of Window Resize after the animations are completed
            setTimeout(function() {
              clearInterval(simulateWindowResize);
            }, 1000);

          });
        });
      });
    </script>
    <script>
      $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

      });
    </script>

      <script>
        Vue.use(Vuetify);
        var change = new Vue({
          vuetify: new Vuetify(),
          el: '#changePass',
          data:{
            user: {
              id: null,
              oldpass: null,
              newpass: null
            },
            show1: false,
            show2: true,
            show3: false,
            show4: false,
          }, 
          mounted(){
            this.user.id = document.getElementById("idForChange").value;
          },
          methods: {
            changePassword(){
              var formData = app.toFormData(change.user);
              axios.post('controller/change_password.php', formData).then(response => {
                var error_message = response.data.html.error;
                if (response.data.error) {
                  console.log(response.data.message);
                  console.table(response.data)
                } else if(error_message == "wrongpassword"){
                  $("#oldpass").focus();
                } else {
                  Swal.fire(
                      'Password Changed!',
                      'You successfuly change your password!',
                      'success'
                  )
                  this.user = {}
                  $('#changePassModal').modal('hide')
                }
              })
            },
          },
          toFormData(obj) {
            var fd = new FormData();
            for (var i in obj) {
              fd.append(i, obj[i]);
            }
            return fd;
          },
        });
      </script>

      
    <!--   <script src="../assets/js/tables.js" type="text/javascript"></script> -->

    <script>
      var firebaseConfig = {
          apiKey: "AIzaSyDNb8hNdOJDq5mBE6BmkWuiRK6mc1dgGEs",
          authDomain: "mobalert-955bf.firebaseapp.com",
          databaseURL: "https://mobalert-955bf.firebaseio.com",
          projectId: "mobalert-955bf",
          storageBucket: "mobalert-955bf.appspot.com",
          messagingSenderId: "625319003477",
          appId: "1:625319003477:web:e6517323d73bc4162c9bdc",
          measurementId: "G-V069QBNT2G"
      };
      // Initialize Firebase
      firebase.initializeApp(firebaseConfig);
    </script>



</body>

</html>
