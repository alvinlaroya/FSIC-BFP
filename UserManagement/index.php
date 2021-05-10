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
    MOBAlert: A Multi-user Online Bayan Alert
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
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

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
  <div class="wrapper ">
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
         <!--  <li class="nav-item">
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
            <a class="nav-link active" href="javascript:void(0);">
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
            <a class="nav-link" href="../CitizensCharter/">
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
      <div id="inspector" style="margin-top: 90px">
        <v-app style="background-color: #eee">
        <?php echo '<input type="hidden" style="display: none" id="session_id" value="'.$_SESSION['userid'].'">'; ?>
            <div class="container-fluid">
                <div class="row">
                <div class="col-md-12">
                    <div class="card">
                    <div class="card-header card-header-rose card-header-mobalert">
                        <h4 class="card-title ">Fire Inspector</h4>
                        <p class="card-category">List of Fire Inspector to be added in fire inspector dropdown list</p>
                        <?php echo '<input id="session_region" type="hidden" value="'.$_SESSION['userregion'].'" />'; ?>
                        <?php echo '<input id="session_province" type="hidden" value="'.$_SESSION['userprovince'].'" />'; ?>
                        <?php echo '<input id="session_municipality" type="hidden" value="'.$_SESSION['usermunicipality'].'" />'; ?>
                        <?php echo '<input id="session_barangay" type="hidden" value="'.$_SESSION['userbarangay'].'" />'; ?>
                    </div>
                    <div class="card-body">
                        <div class="container" style="margin: -5px">
                            <div class="row">
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-rose"  data-toggle="modal" data-target="#AddFireInspector"> <!-- style="cursor: not-allowed" -->
                                    <i class="material-icons">add</i> Add Fire Inspector
                                    </button>
                                </div>
                                <div class="col-md-6 text-right">
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#InfoFireInspector">
                                    <i class="fas fa-info"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <v-card-title style="margin-top: -40px; margin-bottom: -15px">
                            <v-spacer></v-spacer>
                            <v-col cols="12" sm="6" md="6" lg="6">
                            <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" width="50" single-line hide-details></v-text-field>
                            </v-col>
                        </v-card-title>
                        <div style="height: 100%;">
                        <template>
                            <v-data-table 
                                :headers="headers1" 
                                :items="inspectors" 
                                :search="search" 
                                :items-per-page="5" 
                                :single-expand="singleExpand"
                                :expanded.sync="expanded" 
                                class="elevation-1"
                                >
                                <template v-slot:item.avatar="{ item }">
                                <v-avatar>
                                <img
                                    src="../assets/img/faces/avatar.jpg"
                                    alt="John"
                                    style="width: 40px; height: 40px"
                                >
                                </v-avatar>
                                </template>
                                <template v-slot:item.status="{ item }">
                                  <span v-if="item.to_active_status == 1">
                                      <v-chip
                                      class="ma-2"
                                      color="#de0c3b"
                                      text-color="white"
                                      >
                                      Active  
                                      </v-chip>
                                  </span>
                                  <span v-else>
                                      <v-chip
                                      class="ma-2"
                                      color="#eee"
                                      text-color="black"
                                      >
                                      In-active
                                      </v-chip>
                                  </span>
                                </template>
                                <template v-slot:item.action="{ item }">
                                  <span v-if="session.to_switch_status == 1">
                                    <v-btn icon color="indigo" data-toggle="modal" data-target="#menuInspector" @click="selectInspectorList(item)">
                                        <v-icon>mdi-dots-vertical</v-icon>
                                    </v-btn>
                                  </span>
                                  <span v-else>
                                    <v-icon style="color: red">mdi-cancel</v-icon>
                                  </span>
                                  <!--  <v-switch
                                      v-model="item.user_status"
                                      @change=""
                                  ></v-switch> -->
                                </template>
                            </v-data-table>
                        </template>
                        </div>
                    </div>
                    <?php include('../modals/inspector_modals.php'); ?>
                    </div>
                    
                </div>
                    <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                        <h4 class="card-title ">Fire Inspector Pending</h4>
                        <p class="card-category">List of Fire Inspector admin request from your municipality</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <template>
                            <!--  <v-card> -->
                                <v-card-title>
                                <v-spacer></v-spacer>
                                <v-col cols="12" sm="2" md="2" lg="3">
                                    <v-text-field v-model="search" append-icon="mdi-magnify" label="Search" width="20" single-line hide-details></v-text-field>
                                </v-col>
                                </v-card-title>
                                <v-data-table 
                                :headers="headers" 
                                :items="inspector_request" 
                                :search="search" 
                                :items-per-page="5" 
                                :single-expand="singleExpand"
                                :expanded.sync="expanded" 
                                class="elevation-1"
                                >
                                <template v-slot:item.avatar="{ item }">
                                <v-avatar>
                                    <img
                                    src="../assets/img/faces/avatar.jpg"
                                    alt="John"
                                    style="width: 40px; height: 40px"
                                    >
                                </v-avatar>
                                </template>
                                <template v-slot:item.approve="{ item }">
                                    <span v-if="session.to_accept_request == 1">
                                      <v-btn class="ma-2" 
                                        rounded
                                        outlined color="info"
                                        @click="approved(item.id)"
                                      >
                                      <v-icon left>mdi-account-check-outline</v-icon> Accept
                                      </v-btn>
                                      <v-btn class="ma-2"
                                        rounded
                                        outlined 
                                        color="warning"
                                        @click="declined(item.id)"
                                      >
                                        <v-icon left>mdi-account-remove-outline</v-icon>Declined
                                      </v-btn>
                                    </span>
                                    <span v-else>
                                    <v-icon style="color: red">mdi-cancel</v-icon>
                                    </span>
                                </template>
                                <!-- <template v-slot:item.decline="{ item }">
                                <v-btn class="ma-2" tile outlined color="warning">
                                    <v-icon left>mdi-account-check-outline</v-icon> Approved
                                </v-btn>
                                </template> -->
                                </v-data-table>
                            <!--   </v-card> -->
                            </template>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>

                <div class="modal fade" id="menuInspector" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    <div class="modal-header" style="background-color: #de0c3b">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: white">Operation Management</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="container-fluid">
                        <h4>Web Application</h4>
                        <div class="row">
                        
                            <div class="col-md-6">
                            <table>
                                <tr>
                                <td style="width: 80%;">
                                    <span style="font-size: 15px">Able to add Fire Inspection record</span>
                                </td>
                                <td style="width: 20%; text-align: right">
                                    <v-switch style="margin-left: 30px;"
                                    v-model="currentInspectorList.to_add"
                                    ></v-switch>
                                </td>
                                </tr>
                                <tr>
                                <td style="width: 80%">
                                    <span style="font-size: 15px">Able to archive Fire Inspection record</span>
                                </td>
                                <td style="width: 20%; text-align: right">
                                    <v-switch style="margin-left: 30px;"
                                    v-model="currentInspectorList.to_archive">
                                    </v-switch>
                                </td>
                                </tr>
                                <tr>
                                <td style="width: 80%">
                                    <span style="font-size: 15px">Able to Respond FSIC applicant</span>
                                </td>
                                <td style="width: 20%; text-align: right">
                                    <v-switch style="margin-left: 30px;"
                                    v-model="currentInspectorList.to_respond_fsic"></v-switch>
                                </td>
                                </tr>
                            </table>
                            </div>
                            <div class="col-md-6" style="border-left: 1px solid #eee">
                            <table>
                                <tr>
                                    <td style="width: 80%">
                                    <span style="font-size: 15px">Able to accept/decline Fire Inspector request</span>
                                    </td>
                                    <td style="width: 20%; text-align: right">
                                    <v-switch style="margin-left: 30px;"
                                    v-model="currentInspectorList.to_accept_request"></v-switch>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 80%">
                                    <span style="font-size: 15px">Able to switch Fire Inspector Status</span>
                                    </td>
                                    <td style="width: 20%; text-align: right">
                                    <v-switch style="margin-left: 30px;"
                                    v-model="currentInspectorList.to_switch_status"></v-switch>
                                    </td>
                                </tr>
                                </table>
                            </div>
                            <div class="col-md-12 text-center">
                            <hr>
                            <table class="mx-auto">
                                <tr>
                                <td style="width: 80%">
                                    <span style="font-size: 15px">Add as (active) status in Fire Inspector list</span>
                                </td>
                                <td style="width: 20%; text-align: right">
                                    <v-switch style="margin-left: 30px;"
                                    v-model="currentInspectorList.to_active_status"></v-switch>
                                </td>
                                </tr>
                            </table>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" @click="confirmUpdate">Confirm</button>
                    </div>
                    </div>
                </div>
                </div>

                <div class="modal fade" id="dialogApproved" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #de0c3b">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white">Operation Management</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color: white">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                        <h4>Web Application</h4>
                        <div class="row">
                        
                            <div class="col-md-6">
                            <table>
                                <tr>
                                <td style="width: 80%;">
                                    <span style="font-size: 15px">Able to add Fire Inspection record</span>
                                </td>
                                <td style="width: 20%; text-align: right">
                                    <v-switch style="margin-left: 30px;"
                                    v-model="to_add"
                                    ></v-switch>
                                </td>
                                </tr>
                                <tr>
                                <td style="width: 80%">
                                    <span style="font-size: 15px">Able to archive Fire Inspection record</span>
                                </td>
                                <td style="width: 20%; text-align: right">
                                    <v-switch style="margin-left: 30px;"
                                    v-model="to_archive">
                                    </v-switch>
                                </td>
                                </tr>
                                <tr>
                                <td style="width: 80%">
                                    <span style="font-size: 15px">Able to Respond FSIC applicant</span>
                                </td>
                                <td style="width: 20%; text-align: right">
                                    <v-switch style="margin-left: 30px;"
                                    v-model="to_respond_fsic"></v-switch>
                                </td>
                                </tr>
                            </table>
                            </div>
                            <div class="col-md-6" style="border-left: 1px solid #eee">
                            <table>
                                <tr>
                                    <td style="width: 80%">
                                    <span style="font-size: 15px">Able to accept/decline Fire Inspector request</span>
                                    </td>
                                    <td style="width: 20%; text-align: right">
                                    <v-switch style="margin-left: 30px;"
                                    v-model="to_accept_request"></v-switch>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 80%">
                                    <span style="font-size: 15px">Able to switch Fire Inspector Status</span>
                                    </td>
                                    <td style="width: 20%; text-align: right">
                                    <v-switch style="margin-left: 30px;"
                                    v-model="to_switch_status"></v-switch>
                                    </td>
                                </tr>
                                </table>
                            </div>
                            <div class="col-md-12 text-center">
                            <hr>
                            <table class="mx-auto">
                                <tr>
                                <td style="width: 80%">
                                    <span style="font-size: 15px">Add as (active) status in Fire Inspector list</span>
                                </td>
                                <td style="width: 20%; text-align: right">
                                    <v-switch style="margin-left: 30px;"
                                    v-model="to_active_status"></v-switch>
                                </td>
                                </tr>
                            </table>
                            </div>
                        </div>
                        </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" @click="confirmApproved">Confirm</button>
                    </div>
                </div>
                </div>
            </div>
            </v-app>

            
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
    <script src="../vue/inspectors-vue.js"></script>
    
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
