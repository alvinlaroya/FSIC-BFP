<?php

session_start();

if (isset($_SESSION['userid'])) {
    header("Location: Dashboard/");
} else {
    session_unset();
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="google-signin-client_id" content="657598582606-ll2g7trs94h7fk52j68d8kpor3thb2gs.apps.googleusercontent.com">
    <!--  W3zPqwsaCjMRKcCpnz9JyWSK -->
    <!-- CLIENT SECRET GOOGLE SIGN IN -->
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        FSIC Online Application BFP Agoo, La Union
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link href="assets/vuetify/material_design_icons.css" rel="stylesheet" />
    <link href="assets/vuetify/vuetify.min.css" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <!-- <link href="../assets/demo/demo.css" rel="stylesheet" /> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet"> -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>


    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

    <script language="javascript" src="javascripts/jquery.vibrate.min.js"></script>
    <style type="text/css">
        #customBtn {
            display: inline-block;
            background: white;
            color: #444;
            width: 190px;
            border-radius: 5px;
            border: thin solid #888;
            box-shadow: 1px 1px 1px grey;
            white-space: nowrap;
        }

        #customBtn:hover {
            cursor: pointer;
        }

        span.label {
            font-family: serif;
            font-weight: normal;
        }

        span.icon {
            background: url('/identity/sign-in/g-normal.png') transparent 5px 50% no-repeat;
            display: inline-block;
            vertical-align: middle;
            width: 42px;
            height: 42px;
        }

        span.buttonText {
            display: inline-block;
            vertical-align: middle;
            padding-left: 42px;
            padding-right: 42px;
            font-size: 14px;
            font-weight: bold;
            /* Use the Roboto font that is loaded in the <head> */
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body class="offline-doc">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <img src="assets/img/logo/bfp.png" style="width: 30px" alt="">
                <a class="navbar-brand" href="javascript:;">Welcome to Fire Safety Inspection Certificate of BFP Agoo, La Union</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
        </div>
    </nav><br>
    <!-- End Navbar -->
    <v-app class="page-header clear-filter" id="app">
        <div class="page-header-image" style="background-image: url('assets/img/city-profile.jpg');"></div>
        <video autoplay muted loop style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%;">
            <source src="assets/video/background.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
        <div style="position: fixed; right: 0; bottom: 0; min-width: 100%; min-height: 100%; background-color: rgba(0, 0, 0, 0.3)"></div>
        <div class="content-center">
            <div id="card" class="col-lg-6 col-md-12 ml-auto mr-auto">
                <div class="card text-center">
                    <div class="card-header card-header-tabs" style="background-color: #de0c3b;">
                        <v-snackbar v-model="emailTaken" color="#de0c3b" :center="true" :top="true" :multi-line="true" height="20" style="margin-top: 280px;">
                            <v-icon>
                                mdi-remove-circle-outline
                            </v-icon>
                            Email is already taken
                            <v-btn color="white" text @click="emailTaken = false">
                                <v-icon>
                                    mdi-close-circle-outline
                                </v-icon>
                            </v-btn>
                        </v-snackbar>
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <h4 class="font-weight-bold">FSIC Online Application</h4>
                                <ul class="nav nav-tabs text-center" data-tabs="tabs">
                                    <li class="nav-item" style="width: 33.33333%">
                                        <a class="nav-link active" href="#profile" data-toggle="tab" onclick="document.getElementById('card').classList.add('col-lg-6');document.getElementById('card').classList.remove('col-lg-12');">
                                            <!-- <i class='material-icons'>&#xe5c8</i> -->
                                            <v-icon dark>mdi-login-variant</v-icon>&nbsp;&nbsp;Sign In
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item" style="width: 33.33333%">
                                        <a class="nav-link" href="#messages" data-toggle="tab" onclick="document.getElementById('card').classList.add('col-lg-12');document.getElementById('card').classList.remove('col-lg-6');">
                                            <v-icon dark>mdi-account-plus-outline</v-icon>&nbsp;&nbsp;Sign Up
                                            <div class="ripple-container"></div>
                                        </a>
                                    </li>
                                    <li class="nav-item" style="width: 33.33333%">
                                        <a class="nav-link" href="#settings" data-toggle="tab" onclick="document.getElementById('card').classList.add('col-lg-6');document.getElementById('card').classList.remove('col-lg-12');">
                                            <v-icon dark>mdi-lock-reset</v-icon>&nbsp;&nbsp;Forgot
                                            <div class="ripple-container">
                                                </di v>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body text-center">
                        <img src="assets/img/logo/bfp.png" style="width: 90px; margin-top: -10px" alt="">
                        <p>BFP Agoo, La Union</p>

                        <!--  <v-switch
                            v-model="switch1"
                            :label="`Switch 1: ${switch1.toString()}`"
                        ></v-switch> -->
                        <div class="tab-content" style="margin-top: -30px">
                            <div class="tab-pane active" id="profile">
                                <div class="card-body" style="margin-top: 30px">

                                    <div id="error_message" class="card text-white" style="border-radius: 50px; background-color: red; padding: 8px; display: none; height: auto; margin-top: -10px; margin-bottom: 14px">
                                        <span id="error_label" style="visibility: hidden; font-size: 13px"></span>
                                    </div>
                                    <form v-on:submit.prevent="signinEnter">
                                        <div class="">
                                            <v-text-field id="email" type="email" v-model="user.email" label="Email/id" outlined rounded prepend-inner-icon="mdi-account-arrow-right-outline" :rules="[rules.required, rules.min, rules.emailRequired, rules.emailValid]" name="input-10-2" hint="At least 8 characters" value="" class="input-group--focused"></v-text-field>
                                            <!-- <input id="sign-in_email" type="email" value="" class="form-control" placeholder="Email" required> -->
                                        </div>
                                        <div class="" style="margin-top: -5px">
                                            <v-text-field id="password" label="Password" v-model="user.password" outlined rounded prepend-inner-icon="mdi-lock-question" :append-icon="show3 ? 'mdi-eye' : 'mdi-eye-off'" :rules="[rules.required, rules.min]" :type="show3 ? 'text' : 'password'" name="input-10-2" hint="At least 8 characters" value="" class="input-group--focused" @click:append="show3 = !show3"></v-text-field>
                                            <!-- input id="sign-in_password" type="password" value="" class="form-control" placeholder="Password" required> -->
                                        </div><br>
                                        <div class="" style="margin-top: -20px;">
                                            <v-btn style="text-transform: none; font-size: 14px; color: #de0c3b; height: 55px;" class="w-100" type="submit" rounded :loading="loading3" :disabled="loading3" color="#eee" class="ma-2 white--text" @click="loader = 'loading3'" large>
                                                <img src="assets/img/logo/bfp.png" style="width: 23px" alt="">
                                                &emsp;
                                                Sign in with FSIC
                                            </v-btn>
                                        </div>

                                        <!-- <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" data-width="100%"></div> -->
                                        <!--  <a href="javascript:void(0);" onclick="signOut();">Sign out</a>
                                    </form>
                                     <div class="">
                                        <button onclick="signin()" id="sign-in" class="col-md-12 btn btn-primary">Sign in with facebook</button>
                                    </div> -->
                                </div>
                            </div>
                            <div class="tab-pane" id="messages">
                                <div class="card-body">
                                    <form action="">
                                        <div class="container">
                                            <div class="row">
                                                <p id="message"></p>
                                                <template>
                                                    <v-col cols="4" sm="4">
                                                        <v-text-field id="position" v-model="user.position" label="Position" :rules="[rules.required]" clearable></v-text-field>
                                                        <v-text-field v-model="user.fname" label="First Name" :rules="[rules.required]" clearable></v-text-field>
                                                        <v-text-field v-model="user.mname" label="Middle Name" :rules="[rules.required]" clearable></v-text-field>
                                                        <v-text-field v-model="user.lname" label="Last Name" :rules="[rules.required]" clearable></v-text-field>
                                                        <!--   <v-select :items="agency" label="Agency"></v-select> -->
                                                    </v-col>
                                                    <v-col cols="4" sm="4" style="margin-top: -5px">
                                                        <v-autocomplete style="margin-top: 27px" v-model="user.region" :items="states" dense label="Region" :rules="[rules.required]" @change="choose_region()"></v-autocomplete>
                                                        <v-autocomplete style="margin-top: 27px" v-model="user.province" :items="provinces" dense label="Province" :rules="[rules.required]" @change="choose_province()"></v-autocomplete>
                                                        <v-autocomplete style="margin-top: 26px" v-model="user.municipality" :items="municipalities" dense label="Municipality" :rules="[rules.required]" @change="choose_municipality()"></v-autocomplete>
                                                        <v-autocomplete style="margin-top: 26px" v-model="user.barangay" :items="barangays" dense label="Barangay" :rules="[rules.required]"></v-autocomplete>
                                                    </v-col>
                                                    <v-col cols="4" sm="4">
                                                        <v-text-field v-model="user.phone" type="number" label="Phone #" :rules="[rules.required]" clearable></v-text-field>
                                                        <v-text-field id="email_signup" v-model="user.email" label="Email" :rules="[rules.required, rules.min, rules.emailRequired, rules.emailValid]" clearable></v-text-field>
                                                        <v-text-field v-model="user.password" label="Password" :append-icon="show3 ? 'mdi-eye' : 'mdi-eye-off'" :rules="[rules.required, rules.min]" :type="show3 ? 'text' : 'password'" @click:append="show3 = !show3" clearable></v-text-field>
                                                        <v-file-input show-size counter v-model="user.avatar" accept="image/png, image/jpeg, image/bmp" placeholder="Pick an avatar" prepend-icon="mdi-camera" label="Avatar" v-on:change="choose_avatar()"></v-file-input>
                                                        <v-btn style="text-transform: none; font-size: 14px; color: #de0c3b; height: 55px;" class="w-100" rounded color="#eee" class="ma-2 white--text" large @click="signup_user()">
                                                            <div id="aha" style="width: 42px; margin-left: 2px; height: 42px; background-image: url('assets/img/logo/bfp.png'); background-position: center; background-size: cover; border-radius: 50%"></div>
                                                            &emsp;
                                                            Sign up
                                                        </v-btn>
                                                    </v-col>
                                                </template>
                                                <!-- <div class="col-md-4">
                                                    <div class="">
                                                        <input id="fname" type="text" value="" class="form-control" placeholder="First Name" required />
                                                    </div><br>
                                                    <div class="">
                                                        <input id="mname" type="text" value="" class="form-control" placeholder="Middle Initial" required />
                                                    </div><br>
                                                    <div class="">
                                                        <input id="lname" type="text" value="" class="form-control" placeholder="Last Name" required />
                                                    </div><br>
                                                    <div class="">
                                                        <input id="agency" type="text" value="" class="form-control" placeholder="Agency" required />
                                                    </div><br>
                                                    <div class="">
                                                        <input id="address" type="text" value="" class="form-control" placeholder="Address" required />
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="">
                                                        <input id="city" type="text" value="" class="form-control" placeholder="City" required />
                                                    </div><br>
                                                    <div class="">
                                                        <input id="country" type="text" value="" class="form-control" placeholder="Country" required />
                                                    </div><br>
                                                    <div class="">
                                                        <textarea rows="4" id="about" type="text" value="" class="form-control" placeholder="About Me" required></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="">
                                                        <input id="username" type="text" value="" class="form-control" placeholder="Username" required />
                                                    </div><br>
                                                    <div class="">
                                                        <input id="password" type="password" value="" class="form-control" placeholder="Password" required />
                                                    </div><br>
                                                    <div class="">
                                                        <input id="email" type="email" value="" class="form-control" placeholder="Email" required />
                                                    </div><br><br><br>
                                                    <div class="">
                                                        <button type="button" class="col-md-12 btn btn-primary" id="btn-register">Sign in</button>
                                                    </div>
                                                </div> -->

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="settings" style="margin-top: 30px">
                                <div class="text-left">
                                    <label for="">Place Enter your valid email to send your forgotten password.</label>
                                </div>
                                <v-text-field type="email" label="Email/id" outlined prepend-inner-icon="mdi-account-arrow-right-outline" :rules="[rules.required, rules.min, rules.emailRequired, rules.emailValid]" name="input-10-2" hint="At least 8 characters" value="" class="input-group--focused"></v-text-field><br>
                                <v-btn style="text-transform: none; font-size: 16px" class="text-white w-100" :loading="loading4" :disabled="loading4" color="#de0c3b" class="ma-2 white--text" @click="requesting = 'loading4'" large>
                                    <v-icon right dark>mdi-send</v-icon>&nbsp;&nbsp;
                                    Send Email
                                </v-btn>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </v-app>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <nav class="float-left">
                <ul>
                    <li>
                        <a href="javascript:void(0);">
                            Developers
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/watch?v=GYIwS3TTtyw">
                            Background: GoogaVideo
                        </a>
                    </li>

                </ul>
            </nav>
            <div class="copyright float-right" style="margin-top: 10px; font-size: 12px">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
                <a href="https://www.creative-tim.com" target="_blank"></a>:&nbsp;Fire Safety Inspection Certificate of BFP Agoo, La Union
            </div>
        </div>
    </footer>


    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.9.3/firebase-app.js"></script>


    <!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->


    <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
    <script src="https://www.gstatic.com/firebasejs/7.9.2/firebase-analytics.js"></script>

    <!-- Add Firebase products that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/7.9.2/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.9.2/firebase-firestore.js"></script>


    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="https://www.gstatic.com/firebasejs/7.9.3/firebase-analytics.js"></script>


    <script>
        function signin() {
            var provider = new firebase.auth.FacebookAuthProvider();
            //what kind of info or scope you want
            provider.addScope('first_name');

            firebase.auth().signInWithPopup(provider).then(function(result) {
                // This gives you a Facebook Access Token. You can use it to access the Facebook API.
                var token = result.credential.accessToken;
                // The signed-in user info.
                var user = result.user;
                // ...
                console.loge(user)
            }).catch(function(error) {
                // Handle Errors here.
                var errorCode = error.code;


                var errorMessage = error.message;
                // The email of the user's account used.
                var email = error.email;
                // The firebase.auth.AuthCredential type that was used.
                var credential = error.credential;
                // ...
            });
        }
    </script>
    <!--   Core JS Files   -->
    <script src="assets/font/all.js"></script>

    <script src="vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
    <script src="assets/vuetify/vuetify.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.2.32/dist/vuetify.min.js"></script>

    <script src="axios.js"></script>


    <!--   <script src="../assets/vuetify/vuetify.js"></script> -->


    <script>
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.

            /*     $('#email').val(profile.getEmail());
                $('#password').val(profile.getId()); */
            /* 
                        alert(profile.getId());
                        alert(profile.getImageUrl()); */

            /* window.location.replace('http://localhost/mobalert/examples/home.php'); */

        }


        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function() {
                console.log('User signed out.');
            });
        }
    </script>


    <script>
        Vue.use(Vuetify);
        Vue.component('v-select')

        var app = new Vue({
            el: '#app',
            vuetify: new Vuetify(),
            data: {
                switch1: false,
                user: {
                    position: '',
                    fname: '',
                    mname: '',
                    lname: '',
                    region: '',
                    province: '',
                    municipality: '',
                    barangay: '',
                    email: '',
                    password: '',
                    phone: '',
                    pic: ''
                },
                agency: [
                    "BFP", "LUELCO", "PNP", "MDRRMO", "LUMC"
                ],
                states: [],
                regions: [],
                provinces: [],
                municipalities: [],
                barangays: [],
                loader: null,
                requesting: null,
                loading3: false,
                loading4: false,
                loading5: false,
                show1: false,
                show2: true,
                show3: false,
                show4: false,
                password: 'Password',
                incorrectPassword: false,
                emailTaken: false,
                rules: {
                    required: value => !!value || 'Required.',
                    min: v => v.length >= 8 || 'Min 8 characters',
                    emailMatch: () => ('The email and password you entered don\'t match'),
                    emailRequired: v => !!v || 'E-mail is required',
                    emailValid: v => /.+@.+/.test(v) || 'E-mail must be valid',
                    sizeLimit: value => !value || value.size < 2000000 || 'Avatar size should be less than 2 MB!',
                },
            },
            mounted() {
                this.json_states();
            },
            methods: {
                choose_avatar() {
                    var image_file = this.$refs.file.files[0];
                    console.log(image_file)

                    app.user.pic = URL.createObjectURL(image_file);
                    /* var file = event.target.files[0];
                    app.user.avatar = URL.createObjectURL(file) */
                    /* console.log(event.target.files) */

                    /*  var pota = event.target.files[0];
                     console.log(pota) */
                    /*  var img = event.target.files[0];
                     var url = 'url(' + app.user.avatar + '_';
                     document.getElementById('aha').style.backgroundImage=url;  */
                },
                choose_region() {
                    app.provinces = []
                    app.municipalities = []
                    app.barangays = []
                    /* 'https://raw.githubusercontent.com/flores-jacob/philippine-regions-provinces-cities-municipalities-barangays/master/philippine_provinces_cities_municipalities_and_barangays_2019v2.json' */
                    axios.get('assets/json_api/states.json').then(response => {
                        console.log(response.data["01"].province)
                        for (var province in response.data[app.user.region].province_list) {
                            if (response.data[app.user.region].province_list.hasOwnProperty(province)) {
                                app.provinces.push(province);
                                console.log(app.provinces)
                                /*  app.provinces.push(state[app.user.region].provinces) */
                            }
                        }

                    })

                },
                choose_province() {
                    app.municipalities = []
                    axios.get('assets/json_api/states.json').then(response => {
                        var region = response.data[app.user.region].province_list[app.user.province];
                        console.log(app.user.region)
                        for (var municipality in region.municipality_list) {

                            if (region.municipality_list.hasOwnProperty(municipality)) {
                                app.municipalities.push(municipality);

                                /*  app.provinces.push(state[app.user.region].provinces) */
                            }
                            console.log(app.provinces)
                        }

                    })

                },
                choose_municipality() {
                    app.barangays = []
                    axios.get('assets/json_api/states.json').then(response => {
                        var region = response.data[app.user.region].province_list[app.user.province].municipality_list[app.user.municipality].barangay_list;

                        console.log(region)
                        app.barangays = region

                        /*   console.log(app.user.region)
                          for (var barangay in region.barangay_list) {
                              
                              if (region.barangay_list.hasOwnProperty(barangay)) {
                                  app.barangays.push(barangay);
                                  
                                   app.provinces.push(state[app.user.region].provinces)
                              }
                              
                          }
                          console.log(app.barangays) */

                    })

                },
                json_states() {
                    axios.get('assets/json_api/states.json').then(response => {
                        console.log("STATES")
                        var number = '01';


                        for (var state in response.data) {
                            if (response.data.hasOwnProperty(state)) {
                                app.states.push(state);

                                /*  app.provinces.push(state[app.user.region].provinces) */
                            }
                        }


                    })
                },
                signup_user() {
                    var formData = app.toFormData(app.user);
                    axios.post('controller/signup.php', formData).then(response => {
                        if (response.data.error) {
                            console.log(response.data.message);
                            console.table(response.data)
                        } else if (response.data.error_message.error == "taken") {
                            $("#email_signup").focus();
                            this.emailTaken = true
                        } else {
                            Swal.fire(
                                'Signed up!',
                                'Please wait for your confirmation to use this app!',
                                'success'
                            )
                            app.user = {}
                        }
                    })
                },
                signinEnter() {
                    axios.post('controller/login.php', formData).then(response => {})
                },

                toFormData(obj) {
                    var fd = new FormData();
                    for (var i in obj) {
                        fd.append(i, obj[i]);
                    }
                    return fd;
                },
            },
            watch: {
                loader() {
                    const l = this.loader
                    this[l] = !this[l]

                    var formData = app.toFormData(app.user);
                    setTimeout(() =>
                        axios.post('controller/login.php', formData).then(response => {
                            if (response.data.html.error == "wrongpassword" && response.data.html.error == "nouser") {
                                $("#email").focus();
                                $("#error_message").show();
                                $("#error_label").css("visibility", "visible");
                                document.getElementById("error_label").innerHTML = "Incorrect email and password!"
                            } else if (response.data.html.error == "wrongpassword") {
                                app.incorrectPassword = true
                                $("#password").focus();
                                $("#error_message").show();
                                $("#error_label").css("visibility", "visible");
                                document.getElementById("error_label").innerHTML = "Incorrect Password!"

                            } else if (response.data.html.error == "nouser") {
                                $("#email").focus();
                                $("#error_message").show();
                                $("#error_label").css("visibility", "visible");
                                var email = app.user.email
                                document.getElementById("error_label").innerHTML = "No user " + email + " registered/approved"
                            } else {
                                $("#error_message").css("display", "none");
                                $("#error_label").css("visibility", "hidden");
                                app.incorrectPassword = false
                                window.open("Dashboard/", '_self')
                            }
                        })
                        (this[l] = false), 3000)
                    this.loader = null



                },
                requesting() {
                    const l = this.requesting
                    this[l] = !this[l]
                    setTimeout(() =>
                        alert("REQUESTING SUCCESS")
                        (this[l] = false), 3000)
                    this.requesting = null
                },
            }
        });
    </script>

    <script src="assets/js/core/jquery.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="assets/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="assets/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="assets/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="assets/js/plugins/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="assets/js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="assets/js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="assets/js/plugins/nouislider.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="assets/js/plugins/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            register_data();
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

        function register_data() {
            $(document).on('click', '#btn-register', function() {
                var fname = $('#fname').val();
                var mname = $('#mname').val();
                var lname = $('#lname').val();
                var agency = $('#agency').val();
                var address = $('#address').val();
                var city = $('#city').val();
                var country = $('#country').val();
                var about = $('#about').val();
                var username = $('#username').val();
                var password = $('#password').val();
                var email = $('#email').val();

                console.log(address);

                $.ajax({
                    url: 'controller/insert_register.php',
                    method: 'post',
                    data: {
                        dataFname: fname,
                        dataMname: mname,
                        dataLname: lname,
                        dataAgency: agency,
                        dataAddress: address,
                        dataCity: city,
                        dataCountry: country,
                        dataAbout: about,
                        dataUsername: username,
                        dataPassword: password,
                        dataEmail: email
                    },
                    success: function(data) {
                        $('#message').html(data);
                        if (fname == "" || mname == "" || lname == "" || agency == "" || city == "" || country == "" || about == "") {
                            Swal.fire(
                                'Welcome to MOBALert!',
                                'Please fill up all the fields',
                                'error'
                            )
                        } else {
                            Swal.fire(
                                'Welcome to MOBALert!',
                                'You request for registration is sent',
                                'success'
                            )
                        }
                    }
                })
            })
        }
    </script>

    <script>
        // This is called with the results from from FB.getLoginStatus().
        function statusChangeCallback(response) {
            console.log('statusChangeCallback');
            console.log(response);
            // The response object is returned with a status field that lets the
            // app know the current login status of the person.
            // Full docs on the response object can be found in the documentation
            // for FB.getLoginStatus().
            if (response.status === 'connected') {
                // Logged into your app and Facebook.
                testAPI();
            } else if (response.status === 'not_authorized') {
                // The person is logged into Facebook, but not your app.
                /* document.getElementById('status').innerHTML = 'Login with Facebook '; */
            } else {
                // The person is not logged into Facebook, so we're not sure if
                // they are logged into this app or not.
                /* document.getElementById('status').innerHTML = 'Login with Facebook '; */
            }
        }
        // This function is called when someone finishes with the Login
        // Button. See the onlogin handler attached to it in the sample
        // code below.
        function checkLoginState() {
            FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            });
        }
        window.fbAsyncInit = function() {
            FB.init({
                appId: '604335030483490',
                cookie: true, // enable cookies to allow the server to access
                // the session
                xfbml: true, // parse social plugins on this page
                version: 'v2.2' // use version 2.2
            });
            // Now that we've initialized the JavaScript SDK, we call
            // FB.getLoginStatus(). This function gets the state of the
            // person visiting this page and can return one of three states to
            // the callback you provide. They can be:
            //
            // 1. Logged into your app ('connected')
            // 2. Logged into Facebook, but not your app ('not_authorized')
            // 3. Not logged into Facebook and can't tell if they are logged into
            // your app or not.
            //
            // These three cases are handled in the callback function.

            FB.getLoginStatus(function(response) {
                statusChangeCallback(response);
            });
        };
        // Load the SDK asynchronously
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        // Here we run a very simple test of the Graph API after login is
        // successful. See statusChangeCallback() for when this call is made.
        function testAPI() {
            console.log('Welcome! Fetching your information.... ');
            FB.api('/me?fields=id, first_name,email, name, picture', function(response) {
                console.log('Successful login for: ' + response.name);
                var pic = response.picture.data.url;
                //window.location.replace('home.php?email=' + response.email + '&fname=' + response.first_name + '&user_id=' + response.id + '&name=' + response.name + '&pic=' + pic);
                //document.getElementById("status").innerHTML = '<p>Welcome '+response.name+'! <a href="dashboard.php?&email='+ response.email +'&fname='+ response.first_name +'&user_id='+response.id+'&pic='+ response.picture.data.url +'">Continue with facebook login</a></p>'
            });
        }


        function out() {
            alert("POTA")
            FB.logout(function(response) {
                FB.Auth.setAuthResponse(null, 'unknown');
                //alertalert(response)
            });
        }
    </script>
</body>

</html>