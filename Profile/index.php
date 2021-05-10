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
            <a class="nav-link" href="../CitizensCharter/">
              <i class="material-icons">content_paste</i>
              <p class="sidebar-link">BFP Citizens Charter</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" href="javascript:void(0);">
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
      <div id="tabProfile">
        <div style="margin-top: 90px">
            <div class="content">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Profile</h4>
                        <p class="card-category">Complete your profile</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="bmd-label-floating">Bureau of Fire Protection</label>
                                <input type="text" class="form-control" disabled value="Bureau of Fire Protection">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="bmd-label-floating">Email address</label>
                                <?php echo '<input type="email" class="form-control" disabled value="' . $_SESSION['useremail'] . '"/>'; ?>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="bmd-label-floating">Fist Name</label>
                                <?php echo '<input type="text" class="form-control" disabled value="' . $_SESSION['userfname'] . '" />'; ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="bmd-label-floating">M.I</label>
                                <?php echo '<input id="mname" class="form-control" disabled value="' . $_SESSION['usermname'] . '" />'; ?>
                                <!-- <input type="text" v-model="user.mname" class="form-control" /> -->
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="bmd-label-floating">Last Name</label>
                                <?php echo '<input id="lname" class="form-control" disabled value="' . $_SESSION['userlname'] . '" />'; ?>
                                <!-- <input type="text" v-model="user.lname" class="form-control" /> -->
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                <label class="bmd-label-floating">Region</label>
                                <?php echo '<input type="text" class="form-control" disabled value="' . $_SESSION['userregion'] . '" />'; ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label class="bmd-label-floating">Province</label>
                                <?php echo '<input type="text" class="form-control" disabled value="' . $_SESSION['userprovince'] . '" />'; ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label class="bmd-label-floating">Municipality</label>
                                <?php echo '<input type="text" class="form-control" disabled value="' . $_SESSION['usermunicipality'] . '" />'; ?>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                <label class="bmd-label-floating">Barangay</label>
                                <?php echo '<input type="text" class="form-control" disabled value="' . $_SESSION['userbarangay'] . '" />'; ?>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="bmd-label-floating">Phone</label>
                                <?php echo '<input id="phone" class="form-control w-100" disabled value="' . $_SESSION['userphone'] . '"/>'; ?>
                                <!-- <input type="number" class="form-control w-100" v-model="user.phone" /> -->
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="bmd-label-floating">Position</label>
                                <?php echo '<input id="positionupdate" class="form-control" disabled value="'.$_SESSION['position'].'">'; ?>
                                <!-- <input type="text" class="form-control" v-model="user.position" / -->
                                </div>
                            </div>
                            </div>
                            <!-- <button class="btn btn-primary pull-right" @click="updateProfile">UPDATE PROFILE</button> -->
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-avatar">
                        <a href="javascript:;">
                            <img src="../assets/img/faces/witness_pic.png" alt="" style="background-color: white; width: 120px; border-radius: 50%">
                            <!-- <?php $profile_pic = $_GET['pic'] . '&height=' . $_GET['height'] . '&width=' . $_GET['width'] . '&ext=' . $_GET['ext'] . '&hash=' . $_GET['hash'];
                            echo '<img src="' . $profile_pic . '" alt="" style="width: 120px; border-radius: 50%">'; ?> -->
                        </a>
                        </div>
                        <div class="card-body">
                        <h4 class="card-category text-gray"><?php echo $_SESSION['position']; ?></h4>
                        <h4><?php echo $_SESSION['userfname'] . ' ' . $_SESSION['usermname'] . ' ' . $_SESSION['userlname']; ?></h4>
                        <div class="container text-left">
                            <div class="row">
                            <div class="col-md-6" style="margin-bottom: -50px">
                                <label for="">Province: </label>&nbsp;<?php echo $_SESSION['userprovince']; ?><br>
                                <label for="">Municipality: </label>&nbsp;<?php echo $_SESSION['usermunicipality']; ?><br>
                                <label for="">Barangay: </label>&nbsp;<?php echo $_SESSION['userbarangay']; ?><br>
                            </div>
                            <div class="col-md-6">
                                <label for="">Phone: </label>&nbsp;<?php echo $_SESSION['userphone']; ?><br>
                                <label for="">Region: </label>&nbsp;<?php echo $_SESSION['userregion']; ?><br>
                                <label for="">Email: </label>&nbsp;<?php echo $_SESSION['useremail']; ?>
                            </div>
                            </div>
                        </div>
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
