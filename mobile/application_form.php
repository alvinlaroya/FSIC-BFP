<?php

$id = $_GET['id'];
$fname = $_GET['fname'];
$name = $_GET['name'];
$email = $_GET['email'];
$profile = $_GET['picture']. '' ."&height=". '' .$_GET["height"]. '' ."&width=". '' .$_GET["width"]. '' ."&ext=". '' .$_GET["ext"]. '' ."&hash=". '' .$_GET["hash"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        MOBAlert - A Multi-user Online Bayan Alert
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="../../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../../assets/demo/demo.css" rel="stylesheet" />

</head>

<body class="offline-doc" onload="readFsic()">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <?php echo "Welcome "; echo $fname; echo "<br>Your email is: ".$email."<br>Your fullname is: ".$name."<br>" ?>
            <?php echo "<br> <img src='".$_GET["picture"]."&height=".$_GET["height"]."&width=".$_GET["width"]."&ext=".$_GET["ext"]."&hash=".$_GET["hash"]."' style='border-radius: 50%'>"; ?>
            
            <div class="card">
            
                <div class="card-header card-header-danger">
                  <h6 class="card-title" style="color: white">Bureau of Fire Protection</h6>
                  <p style="font-size: 12px; color: white" class="card-category">Fire Safety Inspection Certificate Applicaition Form</p>
                </div>
                <div class="card-body">
                    <div class="container" id="firstSection">
                        <form id="form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating" style="font-size: 10px">Name of Owner</label>
                                            <input type="text" class="form-control" id="owner_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type='hidden' value="<?php echo $profile ?>" id="profile"/>
                                            <label class="bmd-label-floating" style="font-size: 10px">Building/Business/Establishment Name</label>
                                            <input type="text" class="form-control" id="business_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating" style="font-size: 10px">Trade Name</label>
                                                <input type="text" class="form-control" id="trade_name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating" style="font-size: 10px">Exact Address</label>
                                                <input type="text" class="form-control" id="exact_address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating" style="font-size: 10px">Authorized Representative (if the applicant is not the owner)</label>
                                                <input type="text" class="form-control" id="authorized">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating" style="font-size: 10px">Business Identification/Building Permit Number</label>
                                                <input type="text" class="form-control" id="bin">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating" style="font-size: 10px">Tax Identification Number</label>
                                                <input type="text" class="form-control" id="tin">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating" style="font-size: 10px">Contact Number</label>
                                                <input type="text" class="form-control" id="contact">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating" style="font-size: 10px">Email Address</label>
                                                <input type="email" class="form-control" id="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="bmd-label-floating" style="font-size: 10px">Type of occupancy</label>
                                                <input type="text" class="form-control" id="type_nature">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating" style="font-size: 10px">Total Floor Area (M2)</label>
                                                <input type="number" class="form-control" id="total_floor">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <div class="form-group">
                                                <label class="bmd-label-floating" style="font-size: 10px">No. of Storey</label>
                                                <input type="number" class="form-control" id="no_storey">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div>
                                            <button style="width: 100%;font-weight: 90" type="submit" class="btn btn-success">Submit Form</button>
                                        </div>
                                    </div>
                                </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="cardSection">
       
    </div>
    

    <script src="https://www.gstatic.com/firebasejs/7.9.3/firebase.js"></script>
    <script src="index.js"></script>
    
    


    <!--   Core JS Files   -->
    <script src="../../assets/js/core/jquery.min.js"></script>
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="../../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="../../assets/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="../../assets/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="../../assets/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="../../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="../../assets/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="../../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="../../assets/js/plugins/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="../../assets/js/plugins/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="../../assets/js/plugins/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="../../assets/js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="../../assets/js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../../assets/js/plugins/nouislider.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="../../assets/js/plugins/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="../../assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="../../assets/demo/demo.js"></script>
</body>

</html>