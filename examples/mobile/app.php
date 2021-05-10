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
    <link href="assets/css/alert.css" rel="stylesheet" /> 
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />

     <!-- Make sure you put this AFTER Leaflet's CSS -->
     <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
    integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
    crossorigin=""></script>
    
    <link rel="stylesheet" href="assets/leaflet-routing-machine/dist/leaflet-routing-machine.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
</head>

<body id="body" class="offline-doc">
    <div id="action-bar" class="action-bar">
        <input type="hidden" id="session_id" v-model="session_id">
        <input type="hidden" id="session_fname" v-model="session_fname">
        <input type="hidden" id="session_name" v-model="session_name">
        <input type="hidden" id="session_email" v-model="session_email">
        <input type="hidden" id="session_picture" v-model="session_picture">
        <div class="action-bar-title">
            <p style="margin-left: 2px">MOBAlert</p>
        </div>
        <div id="actionbar-pic" class="action-bar-profile-pic">
            <img id="action_bar_profile" alt="" style="width: 35px; border-radius: 50%; position: absolute; top: 7px; right: 7px">
        </div>
    </div>
    <div id="create-alert-image" class="bg-white" style="position: fixed; bottom: 0px; width: 100%; height: 45px; z-index: 99999">
        <div class="container" style="margin: 10px">
            <div class="row">
                <input type="hidden" v-model="names" value=""> <!-- USER ID ON THE SESSION -->
                <div class="col-xs-3" style="width: 5%; margin-top: -5px">
                    <img src="assets/img/MOBALERT_LOGO.png" alt="" style="width: 35px;">
                </div>
                <div class="col-xs-6 text-center" style="width: 80%">
                    <p style="font-size: 12px; margin-top: 5px;">Take a photo or video of inccident</p>
                </div>
                <div class="image-upload" style="position: absolute; top: 2px; right: 10px; z-index: 999999;">
                    <main>       
                        <form id="myform" enctype="multipart/form-data">
                            <input class="inputfile" v-model="image" onchange="takePhoto();" type="file" 
                                id="capture" 
                                accept="image/*,video/*" 
                                capture />
                                <label for="capture">
                                    <i id="camera" class="fas fa-camera"></i>
                                </label>
                                        <!-- <input type="submit" value="Process" /> -->
                            </form>
                         </main>
                </div>
                 <!-- <div >
                <button id="darkmode" class="btn btn-danger btn-sm" style="box-shadow: 0 0 5px -1px black; height: 40px; width: 42px; border-radius: 50%; padding: 10px;"><i class="fas fa-camera" style="font-size: 15px; color: white"></i></button>
                </div> -->
            </div>
         </div>
    </div>
    
    <div id="navs">
        <nav id="tab-nav" class="bg-white">
            <div style="font-size: 13px; text-align: center; margin-bottom: -2px">
                <div class="row" style="font-size: 18px;">
                    <div id="tab-indicator"></div>
                    <ul class="nav nav-tabs" data-tabs="tabs" style="width: 100%; margin-bottom: 2px">
                        <li class="nav-item text-center nav-top" style="width: 16.66666666666667%; height: 41px">
                            <a id="tab1" class="nav-link active" href="#home" data-toggle="tab">
                                <i id="tab-icon1" class="fas fa-bullhorn" style="color: dimgray; font-size: 23px"></i>
                                <span id="badge-home" class="badge badge-tab badge-nav" style="${home <= 0 ? 'display: none' : ''}">11</span>
                            </a>
                        </li>
                        <li class="nav-item active nav-top" style="width: 16.66666666666667%; height: 41px">
                            <a id="tab2" class="nav-link" href="#alert" data-toggle="tab">
                                <i id="tab-icon2" class="far fa-heart" style="color: dimgray; font-size: 23px"></i>
                                <span id="badge-alert" class="badge badge-tab badge-nav" style="${alert <= 0 ? 'display: none' : ''}">{{ alerts }}  </span>
                            </a>
                        </li>
                        <li id="tab3" class="nav-item nav-top" style="width: 16.66666666666667%; height: 41px">
                            <a class="nav-link" href="#timeline" data-toggle="tab">
                                <i id="tab-icon3" class="far fa-user-circle" style="color: dimgray; font-size: 23px"></i>
                                <span id="badge-timeline" class="badge badge-tab badge-nav" style="${timeline <= 0 ? 'display: none' : ''}">14</span>
                            </a>
                        </li>
                        <li id="tab4" class="nav-item nav-top" style="width: 16.66666666666667%; height: 41px">
                            <a class="nav-link" href="#news" data-toggle="tab">
                                <i id="tab-icon4" class="far fa-newspaper" style="color: dimgray; font-size: 23px"></i>
                                <span id="badge-news" class="badge badge-tab badge-nav" style="${news <= 0 ? 'display: none' : ''}">21</span>
                            </a>
                        </li>
                        <li id="tab5" class="nav-item nav-top text-center" style="width: 16.66666666666667%; height: 41px">
                            <a class="nav-link" href="#notification" data-toggle="tab">
                                <i id="tab-icon5" class="far fa-bell" style="color: dimgray; font-size: 23px"></i>
                                <span id="badge-notification" class="badge badge-tab badge-nav" style="${notification <= 0 ? 'display: none' : ''}">13</span>
                            </a>
                        </li>
                        <li id="tab6" class="nav-item nav-top" style="width: 16.66666666666667%; height: 41px">
                            <a class="nav-link" href="#menu" data-toggle="tab">
                                <i id="tab-icon6" class="fas fa-bars" style="color: dimgray; font-size: 23px"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <!-- user id in the session -->
    <div id="session"> 
        <input type="hidden" id="pota" value="22222" />
        <!-- <div v-if="banned" style="width: 100%; height: 100%"> --> <!-- if the user is band ? then enable this -->
           <!--  <div style="position: fixed; top: 0px; left: 0px; background-color: rgba(0, 0, 0, 0.8); height: 100vh; width: 100%; z-index: 99999999999999"></div>
        </div> -->
    </div>

    <div class="tabbdd" style="display: inline; position: fixed; width: 100%; height: 100vh; top: 80px; left: 0px;" class="bg-dark">
        <div style="overflow: scroll; display: inline; position: absolute; left: 0px; top: -30px; width: 100%; height: 100vh; background-color: #eee; overflow-y: auto; overflow-x: hidden">
            <div id="home" style="margin-top: -5px; margin-bottom: 100px;">
                <div class="row">
                    <div id="create-announcement" style="width: 100%">
                        <span v-if="post_announcement">
                            <a id="togglePost" class="nav-link btn btn-white text-left" style="width: 100%; box-shadow: 0 0 0 0 !important; border-bottom: 1px solid #eee; border-radius: 0% !important;">
                                <div class="profile-post">
                                    <div style="padding: 5px; height: 30px; width: 90%; border: 1px solid #eee; border-radius: 20px;">
                                        <p style="margin-left: 10px">Write a announcement</p><i class="far fa-images" style="position: absolute; top: 15px; right: 25px; font-size: 25px"></i><span style="text-transform: none; font-size: 9px; position: absolute; right: 25px; bottom: 0px">Image</span>
                                    </div>
                                </div>
                            </a>
                        </span>
                    </div>
                    <div id="postSection" class="rellax" style="margin-top: -6px; width: 100%" 
                        data-rellax-speed="-7"
                        data-rellax-xs-speed="-7" 
                        data-rellax-mobile-speed="5" 
                        data-rellax-tablet-speed="2">
                        <div id="announcements">
                            <!-- <div v-if="announcements != ''">
                                <div class="no-announcements text-center">
                                    <p style="margin-top: 40%">No internet connection<br><span style="font-weight: bold">Pull down to refresh</span></p>
                                </div>
                            </div> -->
                            <div v-for="announcement in announcements">
                                <div>
                                    <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: -20px">
                                        <div id="post" class="card card-stats" style="border-radius: 0px !important; box-shadow: 0 0 0 0">
                                            <div class="profile-post" style="height: inherit">
                                                <img :src="announcement.creator_pic" alt="" style="width: 40px; border-radius: 50%; position: absolute; top: 10px; left: 10px">
                                                <div style="margin-left: 60px; margin-top: 10px;">
                                                    <p style="font-size: 13px; margin-right: 45px; font-weight: bold; line-height: 14px">{{ announcement.creator_name }}</p>
                                                    <p style="margin-top: -10px; font-size: 10px; margin-right: 35px; line-height: 11px"><i class="far fa-clock"></i>:&nbsp;{{ announcement.time }}&nbsp;|&nbsp;<i class="far fa-user"></i>:&nbsp;{{ announcement.agency }}</p>
                                                </div>
                                                <a class="toggle-option btn btn-white btn-sm" style="position: absolute; right: 2px; top: -2px; max-width: 20px; !important; box-shadow: 0 0 0 0; border-radius: 0%; height: 30px"><i class="fas fa-ellipsis-h" style="font-size: 19px; margin-left: -7px; color: dimgray"></i><a>
                                            </div>
                                            <div @click="openAnnouncements(announcement.creator_pic, announcement.creator_name, announcement.agency, announcement.time, announcement.desc, announcement.imageUrl)" class="card-body view-post toggle-announcements waves-effect" style="font-size: 12px">
                                                <div class="text-left">
                                                    <div class="post-text" style="margin-top: -15px; margin-bottom: 30px">
                                                        <p style="line-height: 14px">{{ announcement.desc }}</p>
                                                    </div>
                                                    <div class="post-img view-post" style="margin: -20px !important;" v-if="imageList != 2">
                                                        <img :src="announcement.imageUrl[0].url" alt="" style="width: 100%">
                                                    </div>
                                                    <span v-if="imageList >= 2">
                                                        <div class="row" style="margin-top: 50px; margin: -25px;">
                                                    <!--  :style="{ backgroundImage: 'url(images1)' }" -->
                                                            <div class="view-post" style="width: 50%; height: 120px; background-image: url('assets/img/avatar.jpg'); background-position: center; border-top: 2px solid white; border-right: 1px solid white; background-size: cover">
                                                              <img :src="announcement.imageUrl[1].url" alt="" style="width: 100%">
                                                            </div>
                                                            <div class="view-post" style="width: 50%; height: 120px; background-image: url('assets/img/avatar.jpg'); background-position: center; border-top: 2px solid white; border-left: 1px solid white; background-size: cover;">
                                                                <img :src="announcement.imageUrl[2].url" alt="" style="width: 100%">
                                                                <div :class="imageColor" style="width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7); padding-top: 45px; padding-bottom: 45px" class="text-center">
                                                                    <span>
                                                                        <p class="text-white" style="font-size: 45px">{{ imageListPlus }}</p>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </span>
                                                    <div class="post-footer" style="margin-top: 20px; margin-bottom: -18px;">
                                                        <div class="" style="margin: -5px">
                                                            <div style="margin-top: 30px">
                                                                <a href="#" style="color: #de0c3b"><i class="far fa-thumbs-up"></i>&nbsp;Alvin Reggae Laroya and 2 others are noted</a>
                                                            </div>
                                                            <div class="row rellax"
                                                                data-rellax-speed="5"
                                                                data-rellax-xs-speed="5" 
                                                                data-rellax-mobile-speed="5" 
                                                                data-rellax-tablet-speed="2">
                                                                <button id="btn-noted" class="btn" style="width: 49%; font-size: 14px; text-transform: none" onclick="noted_button()"><i id="btn-noted-icon" class="far fa-thumbs-up" style="font-size: 18px"></i>&emsp;<span id="btn-noted-text">Noted</span></button>
                                                                <button id="btn-share" class="btn" style="width: 49%; font-size: 14px; text-transform: none"><i class="fas fa-share" style="font-size: 18px"></i>&emsp;Share</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div v-if="announcements != ''" style="padding: 10px; margin-top: -30px" class="text-center">
                                <input type="hidden" id="showMoreResultValue" value="8">
                                <button class="btn btn-info" @click="showMoreResults(2)" style="width: 100%">Load more results...</button>
                            </div>
                        </div>      
                    </div> 
                </div>
            </div>
        </div>
        <div style="display: inline; position: absolute; left: 100%; top: -30px; width: 100%; height: 100vh; background-color: #eee; overflow: auto">
            <div id="alert" style="margin-top: -30px; margin-bottom: 140px;">
                <div id="alerts" class="container" style="padding: 20px;">
                   <!--  <div v-if="alerts != ''" style="display: none !important">
                        <div class="no-announcements text-center">
                            <p style="margin-top: 45%">No internet connection<br><span style="font-weight: bold">Pull down to refresh</span></p>
                            
                        </div>
                    </div> -->
                    
                    <div class="row" v-for="(alert, index) in alerts">
                        <div style="width: 100%;" v-if="alert.agencyId != 6">
                            <a style="width: 100%" @click="openAlert(index)">
                                <div class="card card-alerts fade-in-alerts" style="margin-bottom: -10px; height: 120px;" :class="alert.alertStatus">
                                    <div class="card-body toggle-showAlerts">
                                        <img :src="alert.witness_pic" alt="" style="width: 50px; border: 5px solid #eee; position: absolute; top: -15px; left: 7px; border-radius: 50%">
                                    <div style="margin-right: 20px; margin-left: 43px; margin-top: -12px"> 
                                            <p style="font-size: 12px; font-weight: bold; color: black !important; line-height: 14px">{{ alert.name}}</p>
                                            <p style="font-size: 10px; color: black !important; margin-top: -22px"><i class="far fa-clock"></i>&nbsp;
                                            <span v-if="month_date_year == alert.month_date_year">
                                                <span v-if="hr_now == alert.time_hr && min_now == alert.time_min">
                                                    Just now
                                                </span>
                                                <span v-else-if="hr_now == alert.time_hr && alert.minute_ago > 0">
                                                    {{ alert.minute_ago }} mins. ago
                                                </span>
                                                <span v-else>
                                                    {{ alert.hour_ago }} hrs. ago
                                                </span>
                                            </span>
                                            <span v-else>
                                                {{ alert.month_date_year }} at {{alert.time_hr }}:{{alert.time_min}}
                                            </span>
                                            | <i class="far fa-user"></i>&nbsp;Witness</p>
                                    </div>
                                        <div style="margin-top: -15px; margin-right: 60px" :class="notRespond" class="sam">
                                            <p id="alert-desc" style="line-height: 15px">{{ alert.desc }}</p>
                                        </div>
                                    </div>
                                    <a class="nav-link" href="javascript:;" id="alertDropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-epanded="false"  style="position: absolute; right: -5px; top: -5px; !important; box-shadow: 0 0 0 0; border-radius: 0%; height: 30px"><i class="fas fa-ellipsis-v" style="font-size: 14px; margin-left: -7px; color: black !important"></i><a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertDropdownMenu">
                                        <a class="dropdown-item txt-danger" href="#" style="line-height: 7px; font-size: 12px;"><i class="fas fa-share"></i>&emsp;Forward alert</a>
                                        <a class="dropdown-item" href="#" style="line-height: 7px; font-size: 12px;"><i class="far fa-edit"></i>&emsp;Edit</a>
                                        <a class="dropdown-item" href="#" style="line-height: 7px; font-size: 12px;"><i class="fas fa-trash-alt"></i>&emsp;Delete</a>
                                        <div class="dropdown-divider" style="line-height: 4px; height: 3px; !important"></div>
                                        <a class="dropdown-item" href="#" style="line-height: 7px; font-size: 12px;"><i class="fas fa-eye"></i>&emsp;Mark as responded</a>
                                        <a class="dropdown-item" href="#" style="line-height: 7px; font-size: 12px;"><i class="fas fa-eye-slash"></i>&emsp;Mark as pending</a>
                                        <div class="dropdown-divider" style="line-height: 4px; height: 3px; !important"></div>
                                        <a class="dropdown-item" href="#" style="line-height: 7px; font-size: 12px;"><i class="fas fa-bug"></i>&emsp;Ban {{ alert.name }}</a>
                                        <div class="dropdown-divider" style="line-height: 4px; height: 3px; !important"></div>
                                        <a class="dropdown-item" href="javascript:;" style="line-height: 7px; font-size: 12px;" id="alertDropdownMenu" data-dismiss="dropdown"><i class="fas fa-times"></i>&emsp; close<a>
                                    </div>

                                    <div v-if="respond">
                                        <button id="btn-respond" class="btn btn-white toggle-chat btn-respond" :key="index" @click="openMap(alert.lat, alert.long)" style="border: 1px solid powderblue; width: 60px; height: inherit; border-radius: 50%; position: absolute; top: 30px; right: 10px; box-shadow: 0 0 4px -1px;">
                                            <img src="assets/icon/arrow_marked.png" alt="" style="width: 40px; margin-left: -19px; margin-top: -4px">
                                            <span style="color: black; position: absolute; bottom: -19px; left: 11px; font-size: 9px">Respond</span>
                                        </button>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="display: inline; position: absolute; left: 200%; top: -30px; width: 100%; height: 100vh; background-color: #eee; overflow: auto">
            <div id="timeline" style="margin-bottom: 100px">
                <div id="header">
                <div class="container-fluid">
                    <div class="row">
                        <div id="body" style="background-color: #eee; width: 100%; height: 210px; background-image: url('assets/img/city-profile.jpg'); background-size: cover; background-attachment: fixed">
                            <div class="container">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: -20px">
                        <div class="bg-white text-center" style="text-align: center; border-top-left-radius: 20px; border-top-right-radius: 20px; height: 100px; width: 100%;">
                            <img id="timeline_picture" src="assets/img/mobalert.jpg" alt="" style="display: block; margin: auto; margin-top: -40px; width: 90px; background-color: white; border-radius: 60%; border: 7px solid #ffffff"/>
                            <p id="timeline_name" style="font-weight: bold; font-size: 22px; line-height: 5px; margin-top: 10px"></p>
                            <p id="timeline_email" style="font-size: 10px;"></p>
                        </div>
                    </div>
                    <div class="row bg-white text-center" style="font-size: 18px;">
                        <!-- <div id="tab-indicator" style="border-bottom: 2px solid #db1515; width: 16%; position: absolute; top: 43px; left: 5%;"></div> -->
                            <ul class="nav nav-tabs" data-tabs="tabs" style="width: 100%; margin-bottom: -25px">
                                <li class="nav-item active text-center timeline-tab-icon" style="width: 33%;">
                                    <a id="tab1" class="nav-link active" href="#mypost" data-toggle="tab">
                                        <i class="fas fa-list" style="color: #de0c3b; font-size: 20px"></i>
                                        <p style="color: #de0c3b; font-size: 10px">My Post</p>
                                    </a>
                                </li>
                                <li class="nav-item timeline-tab-icon" style="width: 33%">
                                    <a id="tab2" class="nav-link" href="#photos" data-toggle="tab">
                                        <i class="fas fa-users" style="color: #de0c3b; font-size: 20px"></i>
                                        <p style="color: #de0c3b; font-size: 10px">Followers</p>
                                    </a>
                                </li>
                                <li id="tab3" class="nav-item timeline-tab-icon" style="width: 33%">
                                    <a class="nav-link" href="#followers" data-toggle="tab">
                                        <i class="fas fa-users" style="color: #de0c3b; font-size: 20px"></i>
                                        <p style="color: #de0c3b; font-size: 10px">Following</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content" style="margin-top: 30px;">
                <div class="tab-pane active" id="mypost">
                    <div class="row">
                        <div id="mypostSection" style="margin-top: -35px"></div> 
                    </div>
                </div>
                <div class="tab-pane" id="photos" >
                    <div id="photosSection"></div>
                </div>
                <div class="tab-pane" id="followers" style="padding: 20px">
                    <div class="row">
                        <h1>FOLLOWERS</h1> 
                        <h1>FOLLOWERS</h1> 
                        <h1>FOLLOWERS</h1> 
                        <h1>FOLLOWERS</h1> 
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div style="display: inline; position: absolute; left: 300%; top: -30px; width: 100%; height: 100vh; background-color: #eee; overflow: auto">
            <div id="news" style="margin-bottom: 150px">
                <div class="bg-white" style="position: fixed; top: 50px; width: 100%; height: 50px; z-index: 999;">
                    <div class="container">
                        <div class="row" style="padding: 5px">
                        <h4 style="margin-top: 5px; font-weight: bold; margin-left: 3px;">News</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <id id="news">
                    <div id="newsSection"></div> 
                </div>
                
            </div>
        </div>
        <div style="display: inline; position: absolute; left: 400%; top: -30px; width: 100%; height: 100vh; background-color: #eee; overflow-y: auto; overflow-x: hidden">
            <div id="notification" style="margin-top: 30px; margin-bottom: 110px">
                <div class="bg-white" style="position: fixed; top: 50px; width: 100%; height: 50px; z-index: 999">
                    <div class="container">
                        <div class="row" style="padding: 5px">
                        <h4 style="margin-top: 5px; font-weight: bold; margin-left: 3px;">Notifications</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: -10px; margin-bottom: -40px;">
                        <div class="card card-stats" style="border-radius: 0px !important">
                            <div class="title" style="border-bottom: 1px solid #969494;">
                                <span style="margin-left: 10px; font-size: 12px; font-weight: bold">Unread</span>
                            </div>
                            <div class="card-body">
                                <div class="text-left">
                                    <div class="post-text" style="margin-bottom: 25px; font-size: 12px">
                                        <p>Hello Guys Hahahaha<br>Tudey werr guna talk about<br>Javascript <a href="#">See More...</a></p>
                                    </div>
                                    <div class="post-img" style="margin: -20px !important">
                                        <img src="assets/img/bg2.jpg" alt="" style="width: 100%">
                                    </div>
                                    <div class="post-footer" style="margin-top: 20px; margin-bottom: -18px;">
                                        <div class="" style="margin: -5px;">
                                            <div class="row">
                                                <button id="btn-noted" class="btn" style="width: 49%" onclick="noted_button()"><i id="btn-noted-icon" class="fas fa-thumbs-up"></i>&emsp;<span id="btn-noted-text">Noted</span></button>
                                                <button id="btn-noted" class="btn" style="width: 49%"><i class="fas fa-share"></i>&emsp;Share</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top: -10px; margin-bottom: -40px;">
                        <div class="card card-stats" style="border-radius: 0px !important">
                            <div class="title" style="border-bottom: 1px solid #969494;">
                                <span style="margin-left: 10px; font-size: 12px; font-weight: bold">Read</span>
                            </div>
                            <div class="card-body">
                                <div class="text-left">
                                    <div class="post-text" style="margin-bottom: 25px; font-size: 12px">
                                        <p>Hello Guys Hahahaha<br>Tudey werr guna talk about<br>Javascript <a href="#">See More...</a></p>
                                    </div>
                                    <div class="post-img" style="margin: -20px !important">
                                        <img src="assets/img/bg2.jpg" alt="" style="width: 100%">
                                    </div>
                                    <div class="post-footer" style="margin-top: 20px; margin-bottom: -18px;">
                                        <div class="" style="margin: -5px;">
                                            <div class="row">
                                                <button id="btn-noted" class="btn" style="width: 49%" onclick="noted_button()"><i id="btn-noted-icon" class="fas fa-thumbs-up"></i>&emsp;<span id="btn-noted-text">Noted</span></button>
                                                <button id="btn-noted" class="btn" style="width: 49%"><i class="fas fa-share"></i>&emsp;Share</button>
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
        <div style="display: inline; position: absolute; left: 500%; top: -30px; width: 100%; height: 100vh; background-color: white; overflow: auto">
            <div id="menu" style="margin-top: 30px; margin-bottom: 100px;">
                <div class="bg-white">
                    <div class="container" style="padding: -10px; margin-top: -30px">
                        <div class="row">
                            <a id="go-to-timeline" class="nav-link btn btn-white text-left" style="width: 100%; box-shadow: 0 0 0 0 !important; border-bottom: 1px solid #eee; border-radius: 0% !important">
                                <div class="profile-post" style="margin-left: -15px;">
                                    <img id="menu_profile" alt="" style="width: 30px; border-radius: 50%;">
                                    <p id="menu_fullname" style="position: absolute; left: 60px; top: 5px; font-weight: bold; color: black !important"></p>
                                    <p style="position: absolute; left: 60px; top: 25px; font-size: 12px;">View your profile</p>
                                </div>
                            </a>
                            <a id="" class="text-left" style="width: 100%; color: black !important; margin-top: 10px">
                                <div class="profile-post" style="margin-left: 31px;">
                                    <i class="fas fa-moon" style="font-size: 18px"></i>&emsp;<span style="font-size: 12px; font-weight: bold; margin-left: -5px">DARK MODE</span>
                                    <div style="position: absolute; right: 20px; top: 76px;">
                                        <label class="switch">
                                        <input type="checkbox"/>
                                        <span class="slider round"></span>
                                    </div>
                                <!--  </label><label id="status"></label> -->
                                </div>
                            </a>
                            <div v-if="sign_in" style="width: 99%">
                                <button id="showApplicationForm" class="btn btn-white text-left" style="width: 100%; box-shadow: 0 0 0 0 !important; margin-bottom: -5px; height: 50px; color: black !important; font-weight: bold; border-radius: 0% !importantd">
                                    <i class="fas fa-paper-plane" style="font-size: 18px"></i>&emsp;Application Form
                                </button>
                            </div>
                            <button class="btn btn-white text-left" style="width: 100%; box-shadow: 0 0 0 0 !important; margin-bottom: -5px; height: 50px; color: black !important; font-weight: bold; border-radius: 0% !important">
                                <i class="fas fa-sun" style="font-size: 18px"></i>&emsp;Weather Forecast
                            </button>
                            <button id="openAnnexA" class="btn btn-white text-left" style="width: 100%; box-shadow: 0 0 0 0 !important; margin-bottom: -5px; height: 50px; color: black !important; font-weight: bold; border-radius: 0% !important">
                                <img src="assets/img/bfp.png" alt="" style="width: 23px; margin-top: -5px">&emsp;BFP Citizens Charter Annex A
                            </button>
                            <button id="openAnnexB" class="btn btn-white text-left" style="width: 100%; box-shadow: 0 0 0 0 !important; margin-bottom: -5px; height: 50px; color: black !important; font-weight: bold; border-radius: 0% !important">
                                <img src="assets/img/bfp.png" alt="" style="width: 23px; margin-top: -5px">&emsp;BFP Citizens Charter Annex B
                            </button>
                            <button id="openAnnexC" class="btn btn-white text-left" style="width: 100%; box-shadow: 0 0 0 0 !important; margin-bottom: -5px; height: 50px; color: black !important; font-weight: bold; border-radius: 0% !important">
                                <img src="assets/img/bfp.png" alt="" style="width: 23px; margin-top: -5px">&emsp;BFP Citizens Charter Annex C
                            </button>
                            <button id="openAnnexD" class="btn btn-white text-left" style="width: 100%; box-shadow: 0 0 0 0 !important; margin-bottom: -5px; height: 50px; color: black !important; font-weight: bold; border-radius: 0% !important">
                                <img src="assets/img/bfp.png" alt="" style="width: 23px; margin-top: -5px">&emsp;BFP Citizens Charter Annex D
                            </button>
                            <button id="openAnnexE" class="btn btn-white text-left" style="width: 100%; box-shadow: 0 0 0 0 !important; margin-bottom: -5px; height: 50px; color: black !important; font-weight: bold; border-radius: 0% !important">
                                <img src="assets/img/bfp.png" alt="" style="width: 23px; margin-top: -5px">&emsp;BFP Citizens Charter Annex E
                            </button>
                            <button id="openAnnexF" class="btn btn-white text-left" style="width: 100%; box-shadow: 0 0 0 0 !important; margin-bottom: -5px; height: 50px; color: black !important; font-weight: bold; border-radius: 0% !important">
                                <img src="assets/img/bfp.png" alt="" style="width: 23px; margin-top: -5px">&emsp;BFP Citizens Charter Annex F
                            </button>
                            <button class="btn btn-white text-left" style="width: 100%; box-shadow: 0 0 0 0 !important; margin-bottom: -5px; height: 50px; color: black !important; font-weight: bold; border-radius: 0% !important">
                                <img src="assets/img/MOBALERT_LOGO.png" alt="" style="width: 23px; margin-top: -5px">&emsp;About MOBALERT
                            </button>
                            <div id="fb-root" style="margin-left: 30px; margin-top: 7px"></div>
                            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v7.0"></script>
                            <div style="font-size: 10px" scope="public_profile,email" onlogin="checkLoginState();" class="fb-login-button" data-width="300" data-size="large" data-button-type="continue_with" data-auto-logout-link="true" data-use-continue-as="true">
                            </div>
                            <!-- div v-if="sign_in" style="width: 99%">
                                <button class="btn btn-white text-left btn-logout" style="width: 100%; box-shadow: 0 0 0 0 !important; height: 50px; color: black !important; font-weight: bold; border-radius: 0% !important">
                                    <i class="fas fa-sign-out-alt" style="font-size: 18px"></i>&emsp;Sign Out
                                </button>
                            </div>
                            <div v-if="!sign_in" style="width: 99%">
                                <button class="btn btn-white text-left btn-sign" style="width: 100%; box-shadow: 0 0 0 0 !important; height: 50px; color: black !important; font-weight: bold; border-radius: 0% !important">
                                    <i class="fas fa-sign-out-alt" style="font-size: 18px"></i>&emsp;Sign In
                                </button>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- navbar for alert page -->
    
    <div id="create-alert">
        <div class="bg-white" id="take-photo-container" style="position: fixed; top:  0px; left: 0px; z-index: 999999999999999999999999; height: 100vh; width: 100%; visibility: hidden">
            <button class="btn-call btn btn-sm close-photo" style="box-shadow: 0 0 5px -1px black; height: 40px; width: 40px; border-radius: 20px; background-color: rgba(255, 255, 255, 0.7); position: absolute; top: 8px; right: 8px; color: black"><i class="fas fa-times" style="margin-left: -3px"></i></button>
            <div style="width: 90%; box-shadow: 0 0 5px -1px black; background-color: rgba(255, 255, 255, 0.6); border-radius: 40px; z-index: 99999999999999999999; position: fixed; bottom: 10px; left: 5%; padding: 4px">
                <textarea placeholder="Need of emergeny!" v-model="description" style="width: 88%; color: black; background-color: transparent; border-bottom: 2px solid red; border-top: 0; border-left: 0; border-right: 0; ; border-radius: 1px; font-family: 'Segoe UI', 'Roboto', arial, sans-serif; padding: 10px; max-height: 35px; font-size: 13px; padding-right: 35px; margin-left: 5%;"></textarea>
                <button @click="create_post" class="btn-call btn btn-sm" style="height: 40px; width: 42px; border-radius: 50%; background-color: #de0c3b; position: absolute; right: 6px; top: 0px"><i class="fas fa-paper-plane" style="margin-left: -4px; font-size: 15px"></i></button>
            </div>
            <div style="width: 100%; background-color: rgba(255, 255, 255, 0.6); z-index: 99999999999999999999; position: fixed; bottom: 80px; left: 0px; display: none">
                <button class="btn-call btn btn-sm" style="box-shadow: 0 0 5px -1px black; height: 40px; background-color: #de0c3b;"><i class="fas fa-paper-plane" style="font-size: 12px"></i>&nbsp;BFP</button>
                <button class="btn-call btn btn-sm" style="box-shadow: 0 0 5px -1px black; height: 40px; background-color: #de0c3b;"><i class="fas fa-paper-plane" style="font-size: 12px"></i>&nbsp;PNP</button>
                <button class="btn-call btn btn-sm" style="box-shadow: 0 0 5px -1px black; height: 40px; background-color: #de0c3b;"><i class="fas fa-paper-plane" style="font-size: 12px"></i>&nbsp;PNP</button>
                <button class="btn-call btn btn-sm" style="box-shadow: 0 0 5px -1px black; height: 40px; background-color: #de0c3b;"><i class="fas fa-paper-plane" style="font-size: 12px"></i>&nbsp;PNP</button>
            </div>
            <div style="max-width: 100%; min-height: 30px; background-color: rgba(255, 255, 255, 0.6); z-index: 99999999999999999999; border-radius: 10px; padding: 5px; position: fixed; top: 15px; left: 10px; margin-right: 60px;">
                <span style="font-size: 13px">{{ description }}</span>
            </div>
            <img class="imgfile" src="" id="img" alt="" style="margin: 0px; width: 100%; z-index: 9999999"> 
        </div>
    </div>
    <!-- end of alert navbar -->


    <div id="toggleOptionBottom">
        <div id="option" class="bg-white" style="width: 100%; z-index: 9999999999; height: 100vh; position: fixed; bottom: -100vh; box-shadow: 0 0 0 0 !important">
            <a class="close-optionBottom btn btn-white btn-sm" data-dismiss="modal" aria-label="Close" style="position: absolute; right: 0px; top: -3px; height: 45px; width: 30px; border-radius: 0%; box-shadow: 0 0 0 0" onclick="toggleClose()box">
                <span aria-hidden="true" style="font-size: 20px; position: absolute; top: 0px; left: 15px">&times;</span>
            </a>
            <div style="margin-top: 30px" class="option_container">
                <button class="btn btn-white text-left" style="width: 100%; box-shadow: 0 0 0 0 !important; height: 50px; font-weight: bold; border-radius: 0% !important">
                    <i class="fas fa-edit" style="font-size: 18px"></i>&emsp;Update Post
                </button>
                <button id="deletePost" class="btn btn-white text-left" style="width: 100%; box-shadow: 0 0 0 0 !important; height: 50px; font-weight: bold; border-radius: 0% !important">
                    <i class="fas fa-trash" style="font-size: 18px"></i>&emsp;Delete Post
                </button>
                <button class="btn btn-white text-left" style="width: 100%; box-shadow: 0 0 0 0 !important; height: 50px; font-weight: bold; border-radius: 0% !important">
                    <i class="fas fa-sign-out-alt" style="font-size: 18px"></i>&emsp;Report
                </button>
            </div>
        </div>
    </div>


    <!-- toggle the alerts -->
    <div id="showAlerts">
        <div id="toggleAlerts" class="show-alerts" style="background-color: black; width: 100%; z-index: 9999999999; height: 100vh; position: fixed; bottom: -100vh; box-shadow: 0 0 0 0 !important">
            <div style="min-height: 43px; margin-bottom: -30px">
                <div class="profile-post text-white">
                    <img :src="witness_pic" alt="" style="width: 40px; border-radius: 50%; position: absolute; top: 7px; left: 10px">
                    <div style="margin-left: 60px; margin-top: 5px;">
                        <p style="font-size: 12px; margin-right: 45px; font-weight: bold; line-height: 14px">{{ name }}</p>
                        <p style="margin-top: -20px; font-size: 10px;"><i class="far fa-clock"></i>&nbsp;{{ month_date_year }} at {{ time_hr }}:{{time_min}}&nbsp;|&nbsp;<i class="far fa-user"></i>&nbsp;Witness</p>
                    </div>
                    <a class="toggle-option btn btn-sm" style="background-color: black; color: white; position: absolute; right: 2px; top: -2px; max-width: 20px; !important; box-shadow: 0 0 0 0; border-radius: 0%; height: 30px"><i class="fas fa-ellipsis-h" style="font-size: 19px; margin-left: -7px"></i><a>
                </div>
                <a href="#alert-top" class="close-showAlerts btn btn-sm" data-dismiss="modal" aria-label="Close" style="background-color: black; position: absolute; right: 0px; top: -3px; height: 30px; width: 30px; border-radius: 0%; box-shadow: 0 0 0 0; color: white">
                <span aria-hidden="true" style="font-size: 20px; position: absolute; top: 0px; left: 15px">&times;</span>
                </a>
            </div>
            <div style="margin-top: 35px; height: 100vh" class="background-color: black; table-responsive">
                <div style="margin-top: -32px;">
                    <div class="card" style="background-color: black; border-radius: 0px; margin-bottom: -20px;">
                        <div class="card-body view-post text-whie" style="font-size: 12px">
                            <div class="text-left">
                                <div id="alert-top" class="post-text text-white" style="margin-top: -15px; margin-bottom: 25px">
                                    <p style="line-height: 14px">{{ desc }}</p>
                                </div>
                                <div class="post-img view-post" style="margin: -20px !important;">
                                <!--<p>{{ s.establishment }}</p>
                                    <p>{{ s.firstname }}</p> -->
                                    <!-- <img src="assets/img/bg2.jpg" alt="" style="width: 100%; margin-bottom: 10px">
                                    <img src="assets/img/city-profile.jpg" alt="" style="width: 100%; margin-bottom: 10px">
                                    <img src="assets/img/avatar.jpg" alt="" style="width: 100%; margin-bottom: 10px">
                                    <img src="assets/img/sidebar.jpg" alt="" style="width: 100%; margin-bottom: 10px"> -->
                                    <div v-for="img in images">
                                        <img :src="img.src" alt="" style="width: 100%; margin-bottom: 10px">
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- toggle the announcement -->
    <div id="showAnnouncements">
        <div id="toggle-announcements" class="show-announcements" style="background-color: black; width: 100%; z-index: 9999999999; height: 100vh; position: fixed; bottom: -100vh; box-shadow: 0 0 0 0 !important">
            <div style="height: 13px;">    
                <div class="profile-post text-white"> 
                    <img :src="creator_pic" alt="" style="width: 40px; border-radius: 50%; position: absolute; top: 7px; left: 10px">
                    <div style="margin-left: 60px; margin-top: 10px;">
                        <p style="font-size: 12px; margin-right: 45px; font-weight: bold; line-height: 14px">{{ creator_name }}</p>
                        <p style="margin-top: -13px; font-size: 10px; line-height: 13px"><i class="far fa-clock"></i>&nbsp;{{ time }}&nbsp;|&nbsp;<i class="far fa-user"></i>&nbsp;{{ agency }}</p>
                    </div>
                </div>                
                <a href="#top" class="close-showAnnouncements btn btn-sm" data-dismiss="modal" aria-label="Close" style="background-color: black; position: absolute; right: 0px; top: -3px; height: 25px !important; width: 30px; border-radius: 0%; box-shadow: 0 0 0 0; color: white">
                <span aria-hidden="true" style="font-size: 16px; position: absolute; top: 0px; left: 15px">&times;</span>
                </a>
            </div>
            <div id="announcement-top" style="margin-top: 35px; height: 100vh" class="background-color: black; table-responsive">
                <div style="margin-top: -32px;">
                    <div class="card" style="background-color: black; border-radius: 0px; margin-bottom: -20px;">
                        <div class="card-body view-post text-whie" style="font-size: 12px">
                            <div class="text-left">
                                <div id="top" class="post-text text-white" style="margin-top: -15px; margin-bottom: 30px">
                                    <p style="line-height: 15px">{{ desc }}</p>
                                </div>
                                <div v-for="image in images" class="post-img view-post" style="margin: -20px !important;">
                                    <img :src="image.url" alt="" style="width: 100%; margin-bottom: 30px">
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="annexa" style="height: 100vh; width: 100%; position: fixed; left: 0px; top: 0px; background-color: white; z-index: 99999999999; display: none">
        <button class="btn btn-white btn-sm btn-close-annexa" style="position: fixed; top: 5px; right: 5px;">Close</button>
        <div style="margin-top: 40px; overflow: auto">
            <?php include('annexa.php')?>
        </div>
    </div>
    <div id="annexb" style="height: 100vh; width: 100%; position: fixed; left: 0px; top: 0px; background-color: white; z-index: 99999999999; display: none">
        <button class="btn btn-white btn-sm btn-close-annexb" style="position: fixed; top: 5px; right: 5px;">Close</button>
        <div style="margin-top: 40px; overflow: auto">
            <?php include('annexb.php')?>
        </div>
    </div>
    <div id="annexc" style="height: 100vh; width: 100%; position: fixed; left: 0px; top: 0px; background-color: white; z-index: 99999999999; display: none">
        <button class="btn btn-white btn-sm btn-close-annexc" style="position: fixed; top: 5px; right: 5px;">Close</button>
        <div style="margin-top: 40px; overflow: auto">
            <?php include('annexc.php')?>
        </div>
    </div>
    <div id="annexd" style="height: 100vh; width: 100%; position: fixed; left: 0px; top: 0px; background-color: white; z-index: 99999999999; display: none">
        <button class="btn btn-white btn-sm btn-close-annexd" style="position: fixed; top: 5px; right: 5px;">Close</button>
        <div style="margin-top: 40px; overflow: auto">
            <?php include('annexd.php')?>
        </div>
    </div>
    <div id="annexe" style="height: 100vh; width: 100%; position: fixed; left: 0px; top: 0px; background-color: white; z-index: 99999999999; display: none">
        <button class="btn btn-white btn-sm btn-close-annexe" style="position: fixed; top: 5px; right: 5px;">Close</button>
        <div style="margin-top: 40px; overflow: auto">
            <?php include('annexe.php')?>
        </div>
    </div>
    <div id="annexf" style="height: 100vh; width: 100%; position: fixed; left: 0px; top: 0px; background-color: white; z-index: 99999999999; display: none">
        <button class="btn btn-white btn-sm btn-close-annexf" style="position: fixed; top: 5px; right: 5px;">Close</button>
        <div style="margin-top: 40px; overflow: auto">
            <?php include('annexf.php')?>
        </div>
    </div>

    <!-- toggle the map -->
    <div id="maps">
        <div id="chat" class="bg-white" style="width: 100%; z-index: 9999999999; height: 100vh; position: fixed; right: -100%; top: 0; box-shadow: 0 0 0 0">
            <div style="position: absolute; bottom: 50%; left: 43%" class="text-center">
               <!--  <img src="assets/icon/arrow_marked.png" alt="" style="width: 45px; z-index: 9999999999999"> -->
            </div>
            <input type="number" id="lat" v-model="my_lat">
            <input type="number" id="long" v-model="my_long">
           <!--  <p>lat: {{ position_lat }}</p>
            <p>long: {{ position_long }}</p> -->
            <button class="btn btn-info" style="position: absolute; bottom: 18px; right: 20px; width: 90px; height: 90px; border-radius: 50%">
                <i class="fas fa-car" style="font-size: 40px; margin-left: -4px; margin-top: -2px"></i><br>
                <span style="margin-left: -1px;">DRIVE</span>
                <i class="fas fa-tachometer-alt"></i>
            </button>
            <div id="map" style="width: 100%; height: 100vh; top: -70px; z-index: -10"></div>
            <a class="close-chat" style="z-index: 9999999999999; display: none">
                <div class="text-center bg-white" style="box-shadow: 0 0 6px; -2px; width: 60px; height: 60px; border-radius: 50%; position: absolute; top: 10px; right: 10px">
                    <i class="fas fa-times" style="font-size: 20px; color: black; margin-top: 20px"></i>
                </div>
            </a>
            <div style="width: 90px; height: 200px; position: absolute; top: 10px; right: 0px; display: none">
                <a href="#" class="close-chat">
                    <div class="text-center bg-danger" style="box-shadow: 0 0 6px; -2px; width: 60px; height: 60px; border-radius: 50%; position: absolute; top: 10px; right: 10px">
                        <i class="fas fa-times" style="font-size: 20px; color: white; margin-top: 20px"></i>
                    </div>
                </a>
                <div class="text-center bg-info" style="box-shadow: 0 0 6px; -2px; width: 60px; height: 60px; border-radius: 50%; position: absolute; top: 80px; right: 10px">
                    <p style="margin-top: 5px; font-size: 13px;" class="text-white"><span style="font-weight: bold; font-size: 22px">72</span><br>km/hr</p>
                </div>
                <div class="bg-success text-center" style="padding: 8px; box-shadow: 0 0 6px; -2px; width: 60px; height: 60px; border-radius: 50%; position: absolute; top: 150px; right: 10px">
                    <p style="font-size: 12px; color: white;">82 km/hr</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Create announcement -->
    <div>
        <div id="post" class="bg-white announcement-container" style="padding: 10px; width: 100%; z-index: 9999999999; height: 100vh; position: fixed; right: 0; bottom: -100vh; box-shadow: 0 0 0 0">
            <div style="padding: 10px; width: 100%; height: 50px; position: absolute; top: 0px; left: 0px; background-color: #de0c3b; ">
                <p class="text-white">Create Announcement</p>
                <a class="close-announcement btn btn-sm" aria-label="Close" style="z-index: 9999999999999; background-color: transparent; position: absolute; right: 0px; top: -3px; height: 45px; width: 70px; border-radius: 0%; box-shadow: 0 0 0 0;" onclick="toggleClose()">
                <span style="font-size: 16px; position: absolute; top: 8px; right: 5px; text-transform: none">
                    <p class="text-white">Cancel</p>
                </span>
                </a>
            </div>
            <div id="create_announcement" class="table-responsive" style="height: 98vh;">
                <div style="margin-top: 50px; width: 100%">
                    <label for="postDescription" style="font-size: 12px;">Announcement Description:</label>
                    <textarea v-model="desc" name="" id="postDescription" rows="17" style="width: 100%; font-size: 12px" placeholder="Say something"></textarea>
                </div>
                <div style="padding: 5px;">
                    <label for="" style="font-size: 12px;">Announcement Image:</label><br>
                    <div class="container" style="overflow: scroll">
                        <div id="arrayPicture" class="row">
                            <div style="width: 50px; height: 50px; overflow: hidden; border-radius: 5px; border: 1px solid white; position: relative" class="col-xs-2">
                                <a href="#">
                                    <div style="height: 15px; width: 15px; background-color: rgba(255, 255, 255, 0.7); border-radius: 50%; position: absolute; top: 2px; right: 2px; border: 1px solid white">
                                        <i class="fas fa-times" style="font-size: 8px; margin-bottom: 8px; margin-left: 4px"></i>
                                    </div>
                                </a>
                                <img src="assets/img/avatar.jpg" style="width: 100px; position: center">
                            </div>
                            <div style="width: 50px; height: 50px; overflow: hidden; border-radius: 5px; border: 1px solid white; position: relative" class="col-xs-2">
                                <a href="#">
                                    <div style="height: 15px; width: 15px; background-color: rgba(255, 255, 255, 0.7); border-radius: 50%; position: absolute; top: 2px; right: 2px; border: 1px solid white">
                                        <i class="fas fa-times" style="font-size: 8px; margin-bottom: 8px; margin-left: 4px"></i>
                                    </div>
                                </a>
                                <img src="assets/img/city-profile.jpg" style="width: 100px; position: center">
                            </div>
                            <div style="width: 50px; height: 50px; overflow: hidden; border-radius: 5px; border: 1px solid white; position: relative" class="col-xs-2">
                                <a href="#">
                                    <div style="height: 15px; width: 15px; background-color: rgba(255, 255, 255, 0.7); border-radius: 50%; position: absolute; top: 2px; right: 2px; border: 1px solid white">
                                        <i class="fas fa-times" style="font-size: 8px; margin-bottom: 8px; margin-left: 4px"></i>
                                    </div>
                                </a>
                                <img src="assets/img/bg2.jpg" style="width: 100px; position: center">
                            </div>
                            <div style="width: 50px; height: 50px; overflow: hidden; border-radius: 5px; border: 1px solid white; position: relative" class="col-xs-2">
                                <a href="#">
                                    <div style="height: 15px; width: 15px; background-color: rgba(255, 255, 255, 0.7); border-radius: 50%; position: absolute; top: 2px; right: 2px; border: 1px solid white">
                                        <i class="fas fa-times" style="font-size: 8px; margin-bottom: 8px; margin-left: 4px"></i>
                                    </div>
                                </a>
                                <img src="assets/img/cover.jpg" style="width: 100px; position: center">
                            </div>
                            <div class="col-xs-2" style="margin-top: -5px">
                                <button class="btn btn-white btn-sm" style="width: 50px; height: 50px; border-radius: 10px !important; border: 1px solid dimgray">
                                    <input class="inputfile" onchange="takePhoto();" type="file" 
                                        id="capture" 
                                        accept="image/*,video/*" 
                                        capture />
                                        <label for="capture">
                                            <i id="camera" class="fas fa-camera"></i>
                                        </label>
                                </button>
                            </div>
                        </div>
                    </div>
                    <input id="pic" type="file"/>
                </div>
                <div>
                    <button @click="post_announcement" class="btn btn-info" style="width: 100%"><i class="fas fa-paper-plane"></i>&emsp;Post Announcement</button>
                </div>
            </div>
        </div>
    </div>



    <!-- APPLICATION FORM -->
    <div class="bg-white" id="toggleApplicationForm" style="position: fixed; height: 100vh; width: 100%; top: 0; right: -100%; z-index: 99999999999999999999999">
        <?php include('modal/applicationform.php'); ?>
    </div>

    <!-- Button Call List Container -->
    <div id="agency-call-list" style="width: 100%; height: 100vh; background-color: rgba(0, 0, 0, 0.6); position: fixed; top: 0; left: 0">
        <div style="position: absolute; bottom: 65px; z-index: 999999; height: 60px; width: 100%; border-radius: 30px">
            <div class="text-center">
            <div class="bg-white" style="height: 100%; overflow-x: auto; margin: -20px; padding: 10px; box-shadow: 0 0 3px 0px">
                <div id="agencyCalButton" style="height: 40px; min-width: 100%; max-width: 1000px;">
                </div>
            </div>
            </div>
        </div>
    </div>

    <!-- Button Call Show -->
    <div id="buttonShow" style="position: fixed; bottom: 45px; right: 10px; z-index: 999999;">
        <button class="btn-call btn btn-sm" style="box-shadow: 0 0 5px -1px black; height: 62px; width: 64px; border-radius: 50%; background-color: #de0c3b" id="toggle-agency-call-list"><i class="fas fa-phone" style="font-size: 25px"></i></button>
    </div>
    <div id="buttonHide" style="position: fixed; bottom: 45px; right: 10px; z-index: 999999;">
        <button class="btn-call btn btn-sm" style="box-shadow: 0 0 5px -1px black; height: 62px; width: 64px; border-radius: 50%; background-color: #de0c3b" id="hide-agency-call-list"><i class="fas fa-times" style="font-size: 25px"></i></button>
    </div>

    <!-- Login Phase -->
    <div class="login-phase" id="login-phase" style="background-color: #eee; height: 100vh; position: fixed; width: 100%; top: 0px; left: 0px; display: none">
        <div style="margin-top: 70px">
            
            <div id="sign-in-div" style="background-color: #eee; height: 100vh; width: 100%; left: 0px; display: inline; position: absolute; top: 0px"><br><br>
                <div class="logo-login-phase text-center">
                <h5>Sign in</h5>
                    <div>
                        <img src="assets/img/MOBALERT_LOGO.png" alt="" style="width: 120px;">
                    </div>
                </div>
                <div class="text-center" style="margin-bottom: -20px">
                    <p style="font-size: 13px;">MOBAlert: A Multi-user Online Bayan Alert</p>
                </div>
                <div class="text-center" style="padding: 30px">
                    <input class="input-username" type="text" style="width: 100%" placeholder="Your email" />
                    <input class="input-password" type="password" style="width: 100%" placeholder="Your password"/>
                    <button class="btn btn-sign-in wave-effect" style="background-color: #de0c3b; width: 100%">Log in</button>
                </div>
                <div class="text-center" style="padding: 30px; margin-top: -50px">
                    <span style="font-size: 14px">- OR -</span>
                    <button class="btn btn-info btn-login" style="width: 100%">login with facebook</button>
                    <div id="fb-root">
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0">
                        </script>
                        <div style="font-size: 10px" scope="public_profile,email" onlogin="checkLoginState();" class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-auto-logout-link="true" data-use-continue-as="false">
                        </div>
                    </div>
                    <div style="font-size: 13px;">
                        <span>Don't have an account?</span>&nbsp;<a href="#" id="goToSignUp" style="color: #de0c3b !important">Sign up now</a>
                    </div>
                </div>
            </div>
            <div id="sign-up-div" style="background-color: #eee; height: 100vh; width: 100%; left: 100%; display: inline; position: absolute; top: 0px"><br><br>
                <div class="logo-login-phase text-center">
                <h5>Sign up</h5>
                    <div>
                        <img src="assets/img/MOBALERT_LOGO.png" alt="" style="width: 120px;">
                    </div>
                </div>
                <div class="text-center" style="margin-bottom: -20px">
                    <p style="font-size: 13px;">MOBAlert: A Multi-user Online Bayan Alert REGISTER</p>
                </div>
                <div class="text-center" style="padding: 30px">
                    <input class="input-username" type="text" style="width: 100%" placeholder="Your email" />
                    <input class="input-password" type="password" style="width: 100%" placeholder="Your password"/>
                    <button class="btn btn-sign-in wave-effect" style="background-color: #de0c3b; width: 100%">Log in</button>
                </div>
                <div class="text-center" style="padding: 30px; margin-top: -50px">
                    <span style="font-size: 14px">- OR -</span>
                    <button class="btn btn-info btn-login" style="width: 100%">login with facebook</button>
                    <div id="fb-root">
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v6.0">
                        </script>
                        <div style="font-size: 10px" scope="public_profile,email" onlogin="checkLoginState();" class="fb-login-button" data-width="" data-size="large" data-button-type="continue_with" data-auto-logout-link="true" data-use-continue-as="false">
                        </div>
                    </div>
                    <div style="font-size: 13px;">
                        <span>Don't have an account?</span>&nbsp;<a href="#" style="color: #de0c3b !important">REGISTER</a>
                    </div>
                </div>
            </div>
            <button class="btn btn-white btn-sm" id="close_login" style="height: 47px; border-radius: 50%; position: fixed; top: 5px; right: 5px;"><i class="fas fa-times"></i></button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/rellax@1.12.1/rellax.js"></script>
    <!-- Login 2nd Phase -->
   <!--  <div class="second-phase" id="second-phase" style="z-index: 99999999999999999; background-color: blue; height: 100vh; position: fixed; width: 100%; top: 0px; left: 0px;">
    </div> -->

    <script>
    var rellax = new Rellax('.rellax', {
        // center: true
        callback: function(position) {
            // callback every position change
            console.log(position);
        },
        breakpoints: [576, 768, 1024]
      });
    </script>
    <!-- JS FOR ALERT DESCRIPTION SUMMARIZE -->
    <script>



/*     var bleep = new Audio();
    bleep.src = "assets/audio/sample.mp3";
    bleep.play();
 */
    var vals = document.getElementById("alert-desc").innerHTML;
    const len = vals.length;
    var descrip = [];
    descrip = vals;
    let i = 0;
    var new_desc = document.getElementById("alert-desc");
    new_desc.innerHTML = "";
    for(i; i <= 80; i++){
        if(i < vals.length){
            new_desc.innerHTML += descrip[i];
        }
    }
    if(vals.length >= 80){
        new_desc.innerHTML += "....";
    }
    </script>

    <!-- JAVASCRIPT COMPONENTS -->
    <script src="index.js"></script>
    <!-- <script src="component/toggleOption.js"></script> -->
    <script src="component/agencyCallButton.js"></script>
    <script src="component/chat.js"></script>


    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="https://www.gstatic.com/firebasejs/7.9.3/firebase-app.js"></script>

    <script src="vue.js"></script>
    <script src="axios.js"></script>

    <!-- Vue files -->
    <!-- <script src="vue/takePhotoDesc.js"></script> -->
    <script src="vue/alerts.js"></script>
    <script src="vue/announcements.js"></script>
    <script src="vue/session.js"></script>

    
<!--     <script src="leaftlet/map.js"></script> -->

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

    document.addEventListener('DOMContentLoaded', (ev)=>{
            let form = document.getElementById('myform');
            //get the captured media file
            let input = document.getElementById('capture');
            
            input.addEventListener('change', (ev)=>{
                console.dir( input.files[0] );
                if(input.files[0].type.indexOf("image/") > -1){
                    let img = document.getElementById('img');
                    img.src = window.URL.createObjectURL(input.files[0]);
                }
                else if(input.files[0].type.indexOf("video/") > -1 ){
                    let video = document.getElementById('video');
                    video.src=window.URL.createObjectURL(input.files[0]);
                }
                
                
            })
            
        })
    </script>
    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyC6GlgUuKZMvO0paNgI_xHw6tWLOCZiTMM",
        authDomain: "mobalert-89edc.firebaseapp.com",
        databaseURL: "https://mobalert-89edc.firebaseio.com",
        projectId: "mobalert-89edc",
        storageBucket: "mobalert-89edc.appspot.com",
        messagingSenderId: "5712089411",
        appId: "1:5712089411:web:dc0b3f31b1f60e33165ff6",
        measurementId: "G-76E1MEESYB"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
    </script>

    <!-- Facebook Auth button -->
    <script src="facebookAuth/fb-login.js"></script>

    

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
<!--     <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
    <!-- Chartist JS -->
    <script src="../../assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="../../assets/demo/demo.js"></script>
    <script src="assets/font/all.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="assets/js/parallax.js"></script>
    <script src="assets/js/parallax.min.js"></script>

    <script src="assets/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
</body>

<!-- MODAL SECTION -->
<!-- <div class="modal fade" id="bfp_call" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="z-index: 999999">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #de0c3b">
          <h5 class="modal-title text-white" id="exampleModalLabel">MOBAlert Emergency Call</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
                <div class="text-center">
                    <img src="assets/img/MOBALERT_LOGO.png" alt="" style="width: 80px;">
                    <p>A Multi-user Online Bayan ALert</p>
                    <a href="#" class="btn btn-warning" style="width: 100%"><i class="fas fa-camera"></i>&nbsp;Take a photo / video inccident</a>
                </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
<!-- END OF MODAL SECTION -->
</html>