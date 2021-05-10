<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@5.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        img[src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png"] {
            display: none;
        }
    </style>
 <!--    https://www.lamudi.com.ph/journal/31-fire-safety-tips-time-fire-prevention-month-2017/  SAFETY TIPS -->
</head>

<body style="background-color: #f7f5f5">
    <div id="app">
        <v-app>
        <div style="z-index: 99999999999999; background-color: #de0c3b; height: 55px; width: 100%; position: fixed; top:0px; left: 0px;">
            <span style="color: white; position: absolute; top: 15px; left: 5px">MOBAlert</span>
            <v-avatar style="position: absolute; right: 3px">
                <img
                    src="https://cdn.vuetifyjs.com/images/john.jpg"
                    alt="John"
                    style="width: 40px; height: 40px; margin-top: 4px"
                >
            </v-avatar>  
        </div>
        <template>
            <v-card>
                <div style="height: 0px; width: 100%"></div>
                <v-tabs-items v-model="tab" style="height: 100%; background-color: #f7f5f5">
                    <v-tab-item>
                        <v-parallax
                            height="195"
                            src="assets/img/parallax/parallax1.jpg"
                            style="margin-top: 55px; width: 100%;"
                        >
                            <div style="background-color: rgba(0, 0, 0, 0.7); height: 195px; width: 120%; margin-left: -20px; margin-top: -2px; padding: 25px">
                                <img src="assets/img/icon/MOBALERT_LOGO.png" style="margin-top: 1px; width: 60px;" alt="">
                                <p class="text-white" style="margin-top: 0px; font-size: 12px; font-family: tahoma">Hello, Alvin</p>
                                <p class="text-white" style="margin-top: -15px; font-size: 16px; font-family: tahoma">Be the savior of the environment!</p>
                                <div class="text-center" style="background-color: rgba(255, 255, 255, 0.5); width: 190px; height: 55px; padding: 5px; border-radius: 10px; position: absolute; right: 20px; top: 30px">
                                    <p id="location" style="font-size: 13px; color: black;"></p>
                                </div>
                            </div>
                        </v-parallax>
                        
                        <div style="padding: 20px;">
                            <v-card
                                class="mx-auto"
                                outlined
                                style="margin-top: -60px; height: 157px; width: 100%; border-radius: 10px"
                            >
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-6 col-md-6">
                                            <button class="btn btn-primary">a</button>
                                        </div>
                                        <div class="col-xs-6 col-md-6">
                                            <button class="btn btn-primary">a</button>
                                        </div>
                                    </div>
                                </div>
                            </v-card>
                        </div>

                        <div style="padding: 20px; margin-top: -20px">
                        
                        <template>
                            <div class="text-center">
                                <v-btn
                                    color="#de0c3b"
                                    class="text-white"
                                    style="width: 100%; border-radius: 10px"
                                    height="60"
                                    @click="alertoverlay = !alertoverlay"
                                >
                                    <v-icon right dark>mdi-camera-outline</v-icon>&emsp;
                                    Alert an inccident!
                                </v-btn>
                                <v-overlay :value="alertoverlay" opacity="0.9">
                                <v-btn
                                        icon
                                        color="#ffffff"
                                        onclick="getLocation();"
                                    >
                                        getLocation
                                    </v-btn>
                                    <v-btn
                                        icon
                                        color="#ffffff"
                                        @click="alertoverlay = false"
                                    >
                                        <v-icon style="font-size: 90px">mdi-camera-plus-outline</v-icon>
                                    </v-btn>
                                    <p style="margin-top: 30px">Take a photo</p>
                                </v-overlay>
                            </div>
                            </template>                     
                        </div>
                        <div style="padding: 20px; margin-top: -25px">
 <!--                        <template>
                            <v-card
                                max-width="375"
                                class="mx-auto"
                            >
                                <v-img
                                src="https://cdn.vuetifyjs.com/images/lists/ali.png"
                                height="300px"
                                dark
                                >
                                <v-row class="fill-height">
                                    <v-card-title>
                                    <v-btn dark icon>
                                        <v-icon>mdi-chevron-left</v-icon>
                                    </v-btn>

                                    <v-spacer></v-spacer>

                                    <v-btn dark icon class="mr-4">
                                        <v-icon>mdi-pencil</v-icon>
                                    </v-btn>

                                    <v-btn dark icon>
                                        <v-icon>mdi-dots-vertical</v-icon>
                                    </v-btn>
                                    </v-card-title>

                                    <v-spacer></v-spacer>

                                    <v-card-title class="white--text pl-12 pt-12">
                                    <div class="display-1 pl-12 pt-12">Ali Conners</div>
                                    </v-card-title>
                                </v-row>
                                </v-img>

                                <v-list two-line>
                                <v-list-item @click="">
                                    <v-list-item-icon>
                                    <v-icon color="indigo">mdi-phone</v-icon>
                                    </v-list-item-icon>

                                    <v-list-item-content>
                                    <v-list-item-title>(650) 555-1234</v-list-item-title>
                                    <v-list-item-subtitle>Mobile</v-list-item-subtitle>
                                    </v-list-item-content>

                                    <v-list-item-icon>
                                    <v-icon>mdi-message-text</v-icon>
                                    </v-list-item-icon>
                                </v-list-item>

                                <v-list-item @click="">
                                    <v-list-item-action></v-list-item-action>

                                    <v-list-item-content>
                                    <v-list-item-title>(323) 555-6789</v-list-item-title>
                                    <v-list-item-subtitle>Work</v-list-item-subtitle>
                                    </v-list-item-content>

                                    <v-list-item-icon>
                                    <v-icon>mdi-message-text</v-icon>
                                    </v-list-item-icon>
                                </v-list-item>

                                <v-divider inset></v-divider>

                                <v-list-item @click="">
                                    <v-list-item-icon>
                                    <v-icon color="indigo">mdi-email</v-icon>
                                    </v-list-item-icon>

                                    <v-list-item-content>
                                    <v-list-item-title>aliconnors@example.com</v-list-item-title>
                                    <v-list-item-subtitle>Personal</v-list-item-subtitle>
                                    </v-list-item-content>
                                </v-list-item>

                                <v-list-item @click="">
                                    <v-list-item-action></v-list-item-action>

                                    <v-list-item-content>
                                    <v-list-item-title>ali_connors@example.com</v-list-item-title>
                                    <v-list-item-subtitle>Work</v-list-item-subtitle>
                                    </v-list-item-content>
                                </v-list-item>

                                <v-divider inset></v-divider>

                                <v-list-item @click="">
                                    <v-list-item-icon>
                                    <v-icon color="indigo">mdi-map-marker</v-icon>
                                    </v-list-item-icon>

                                    <v-list-item-content>
                                    <v-list-item-title>1400 Main Street</v-list-item-title>
                                    <v-list-item-subtitle>Orlando, FL 79938</v-list-item-subtitle>
                                    </v-list-item-content>
                                </v-list-item>
                                </v-list>
                            </v-card>
                            </template> -->
                            <p style="font-family: tahoma; font-weight: bold; font-size: 16px">Alerts</p>
                            <div class="container" style="margin-top: -15px">
                                <div class="row">
                                <template>
                <div class="text-center">
                    <v-bottom-sheet v-model="sheet">
                    <template v-slot:activator="{ on, attrs }">
                        <v-btn
                        color="purple"
                        dark
                        v-on="on"
                        >
                        Open In
                        </v-btn>
                    </template>
                    <v-list>
                        <v-subheader>Open in</v-subheader>
                        <v-list-item
                            @click=""
                        >
                        <v-list-item-avatar>
                            <v-avatar size="32px" tile>
                            <img
                                src="https://cdn.vuetifyjs.com/images/john.jpg"
                                alt="Sample Title"
                            >
                            </v-avatar>
                        </v-list-item-avatar>
                        <v-list-item-title>Sample Title</v-list-item-title>
                        </v-list-item>
                        <v-list-item
                            @click=""
                        >
                        <v-list-item-avatar>
                            <v-avatar size="32px" tile>
                            <img
                                src="https://cdn.vuetifyjs.com/images/john.jpg"
                                alt="Sample Title"
                            >
                            </v-avatar>
                        </v-list-item-avatar>
                        <v-list-item-title>Sample Title</v-list-item-title>
                        </v-list-item>
                        <v-list-item
                            @click=""
                        >
                        <v-list-item-avatar>
                            <v-avatar size="32px" tile>
                            <img
                                src="https://cdn.vuetifyjs.com/images/john.jpg"
                                alt="Sample Title"
                            >
                            </v-avatar>
                        </v-list-item-avatar>
                        <v-list-item-title>Sample Title</v-list-item-title>
                        </v-list-item>
                    </v-list>
                    </v-bottom-sheet>
                </div>
            </template>
                                    <div style="width: 50%">
                                        <a href="http://">
                                            <v-card style="width: 97%">
                                                <v-img
                                                    src="assets/img/parallax/parallax1.jpg"
                                                    class="white--text align-end"
                                                    gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                                                    height="100px"
                                                >
                                                <v-card-title>text</v-card-title>
                                                </v-img>
                                                <v-card-actions>
                                                <v-spacer></v-spacer>

                                                <v-btn icon>
                                                    <v-icon>mdi-heart</v-icon>
                                                </v-btn>

                                                <v-btn icon>
                                                    <v-icon>mdi-bookmark</v-icon>
                                                </v-btn>

                                                <v-btn icon>
                                                    <v-icon>mdi-share-variant</v-icon>
                                                </v-btn>
                                                </v-card-actions>
                                            </v-card>
                                        </a>
                                    </div>
                                    <div style="width: 50%">
                                        <a href="http://">
                                            <v-card style="width: 97%">
                                                <v-img
                                                    src="assets/img/parallax/parallax1.jpg"
                                                    class="white--text align-end"
                                                    gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                                                    height="100px"
                                                >
                                                <v-card-title>text</v-card-title>
                                                </v-img>
                                                <v-card-actions>
                                                <v-spacer></v-spacer>

                                                <v-btn icon>
                                                    <v-icon>mdi-heart</v-icon>
                                                </v-btn>

                                                <v-btn icon>
                                                    <v-icon>mdi-bookmark</v-icon>
                                                </v-btn>

                                                <v-btn icon>
                                                    <v-icon>mdi-share-variant</v-icon>
                                                </v-btn>
                                                </v-card-actions>
                                            </v-card>
                                        </a>
                                    </div>
                                    <div style="width: 50%">
                                        <a href="http://">
                                            <v-card style="width: 97%">
                                                <v-img
                                                    src="assets/img/parallax/parallax1.jpg"
                                                    class="white--text align-end"
                                                    gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                                                    height="100px"
                                                >
                                                <v-card-title>text</v-card-title>
                                                </v-img>
                                                <v-card-actions>
                                                <v-spacer></v-spacer>

                                                <v-btn icon>
                                                    <v-icon>mdi-heart</v-icon>
                                                </v-btn>

                                                <v-btn icon>
                                                    <v-icon>mdi-bookmark</v-icon>
                                                </v-btn>

                                                <v-btn icon>
                                                    <v-icon>mdi-share-variant</v-icon>
                                                </v-btn>
                                                </v-card-actions>
                                            </v-card>
                                        </a>
                                    </div>
                                    <div style="width: 50%">
                                        <a href="http://">
                                            <v-card style="width: 97%">
                                                <v-img
                                                    src="assets/img/parallax/parallax1.jpg"
                                                    class="white--text align-end"
                                                    gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                                                    height="100px"
                                                >
                                                <v-card-title>text</v-card-title>
                                                </v-img>
                                                <v-card-actions>
                                                <v-spacer></v-spacer>

                                                <v-btn icon>
                                                    <v-icon>mdi-heart</v-icon>
                                                </v-btn>

                                                <v-btn icon>
                                                    <v-icon>mdi-bookmark</v-icon>
                                                </v-btn>

                                                <v-btn icon>
                                                    <v-icon>mdi-share-variant</v-icon>
                                                </v-btn>
                                                </v-card-actions>
                                            </v-card>
                                        </a>
                                    </div>
                                    <div style="width: 50%">
                                        <a href="http://">
                                            <v-card style="width: 97%">
                                                <v-img
                                                    src="assets/img/parallax/parallax1.jpg"
                                                    class="white--text align-end"
                                                    gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                                                    height="100px"
                                                >
                                                <v-card-title>text</v-card-title>
                                                </v-img>
                                                <v-card-actions>
                                                <v-spacer></v-spacer>

                                                <v-btn icon>
                                                    <v-icon>mdi-heart</v-icon>
                                                </v-btn>

                                                <v-btn icon>
                                                    <v-icon>mdi-bookmark</v-icon>
                                                </v-btn>

                                                <v-btn icon>
                                                    <v-icon>mdi-share-variant</v-icon>
                                                </v-btn>
                                                </v-card-actions>
                                            </v-card>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </v-tab-item>
                    <v-tab-item>
                        <div style="background-color: #05031c; height: 100%; width: 100%">
                            <div style="z-index: 99999999999999; background-color: white; height: 50px; position: fixed; margin-top: -50px; left: 0px; padding: 15px; width: 100%">
                                <p style="font-size: 18px">Alerts</p>
                            </div>
                            <v-parallax
                                height="160"
                                src="assets/img/parallax/map.png"
                                style="margin-top: 105px"
                            ></v-parallax>
                            <v-container>
                                <v-btn
                                    color="#0d0a36"
                                    class="text-white"
                                    style="width: 100%; border-radius: 10px; margin-bottom: 9px"
                                    height="60"
                                    >
                                    <v-icon right dark>mdi-camera-outline</v-icon>&emsp;
                                    take a photo of inccident
                                </v-btn>
                                <v-btn
                                    color="#0d0a36"
                                    class="text-white"
                                    style="width: 100%; border-radius: 10px; margin-bottom: 9px"
                                    height="60"
                                    >
                                    <v-icon right dark>mdi-camera-outline</v-icon>&emsp;
                                    take a photo of inccident
                                </v-btn>
                            </v-container>
                            
                        </div>
                    </v-tab-item>
                    <v-tab-item>
                        <v-card flat>
                        <v-card-title class="headline">tab 3</v-card-title>
                        <v-card-text>
                            <p>
                            Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. Sed hendrerit. Maecenas malesuada. Vestibulum ullamcorper mauris at ligula. Proin faucibus arcu quis ante.
                            </p>

                            <p class="mb-0">
                            Etiam vitae tortor. Curabitur ullamcorper ultricies nisi. Sed magna purus, fermentum eu, tincidunt eu, varius ut, felis. Aliquam lobortis. Suspendisse potenti.
                            </p>
                        </v-card-text>
                        </v-card>
                    </v-tab-item>
                    <v-tab-item>
                        <div style="z-index: 9999; background-color: white; height: 53px; position: fixed; margin-top: -40px; left: 0px; padding: 15px; width: 100%">
                            <p style="font-size: 18px">News</p>
                        </div>
                        <div style="margin-top: 90px; margin-bottom: 50px">
                            <template v-for="n in news">
                                <v-card
                                    class="mx-auto"
                                    style="margin-bottom: 8px; width: 100%"
                                >
                                    <v-card-title>{{ n.title }}</v-card-title>
                                    <v-img
                                    class="white--text align-end"
                                    height="200px"
                                    :src="n.urlToImage"
                                    >
                                    </v-img>
                                    <v-card-text class="text--primary">
                                    <div>Whitehaven Beach</div>

                                    <div>{{ n.description }}</div><br>
                                    <div style="font-size: 9px;">Author: {{ n.author }}</div>
                                    <div style="font-size: 9px;">Published at: {{ n.publishedAt }}</div>
                                    </v-card-text>

                                    <v-card-actions>
                                        <v-spacer></v-spacer>

                                        <v-btn icon>
                                            <v-icon>mdi-heart</v-icon>
                                        </v-btn>

                                        <v-btn icon>
                                            <v-icon>mdi-bookmark</v-icon>
                                        </v-btn>

                                        <v-btn icon>
                                            <v-icon>mdi-share-variant</v-icon>
                                        </v-btn>
                                    </v-card-actions>
                                </v-card>
                            </template>
                        </div>
                    </v-tab-item>
                    <v-tab-item>
                        <v-card flat>
                            <template>
                                <v-navigation-drawer
                                style="width: 100%; margin-bottom: 50px"
                                :value="true"
                                stateless
                                >
                                    <v-img src="https://cdn.vuetifyjs.com/images/parallax/material.jpg">
                                        <v-row align="end" class="lightbox white--text pa-2 fill-height">
                                        <v-col>
                                            <div class="subheading">Jonathan Lee</div>
                                            <div class="body-1">heyfromjonathan@gmail.com</div>
                                        </v-col>
                                        </v-row>
                                    </v-img>

                                    <v-list>
                                        <template>
                                            <v-list-item @click>
                                                <v-list-item-action>
                                                <v-icon>mdi-logout-variant</v-icon>
                                                </v-list-item-action>
                                                <v-list-item-title>Share</v-list-item-title>
                                            </v-list-item>
                                            <v-list-item @click>
                                                <v-list-item-action>
                                                <v-icon>mdi-logout-variant</v-icon>
                                                </v-list-item-action>
                                                <v-list-item-title>Share</v-list-item-title>
                                            </v-list-item>
                                            <v-list-item @click>
                                                <v-list-item-action>
                                                <v-icon>mdi-logout-variant</v-icon>
                                                </v-list-item-action>
                                                <v-list-item-title>Share</v-list-item-title>
                                            </v-list-item>
                                            <v-list-item @click>
                                                <v-list-item-action>
                                                <v-icon>mdi-logout-variant</v-icon>
                                                </v-list-item-action>
                                                <v-list-item-title>Share</v-list-item-title>
                                            </v-list-item>
                                            <v-list-item @click>
                                                <v-list-item-action>
                                                <v-icon>mdi-logout-variant</v-icon>
                                                </v-list-item-action>
                                                <v-list-item-title>Share</v-list-item-title>
                                            </v-list-item>
                                            <v-list-item @click>
                                                <v-list-item-action>
                                                <v-icon>mdi-logout-variant</v-icon>
                                                </v-list-item-action>
                                                <v-list-item-title>Share</v-list-item-title>
                                            </v-list-item>
                                            <v-list-item @click>
                                                <v-list-item-action>
                                                <v-icon>mdi-logout-variant</v-icon>
                                                </v-list-item-action>
                                                <v-list-item-title>Share</v-list-item-title>
                                            </v-list-item>
                                            <v-list-item @click>
                                                <v-list-item-action>
                                                <v-icon>mdi-logout-variant</v-icon>
                                                </v-list-item-action>
                                                <v-list-item-title>Share</v-list-item-title>
                                            </v-list-item>
                                        </template>
                                    </v-list>
                                </v-navigation-drawer>
                            </template>

                        </v-card>
                    </v-tab-item>
    
               <!--      <v-tab-item
                        :key="2"
                        :value="tab-2"
                    >
                        <v-card flat>
                            <v-card-text>tab2</v-card-text>
                        </v-card>
                    </v-tab-item>
                    <v-tab-item
                        :key="3"
                        :value="tab-3"
                    >
                        <v-card flat>
                            <v-card-text>tab3</v-card-text>
                        </v-card>
                    </v-tab-item>
                    <v-tab-item
                        :key="4"
                        :value="tab-4"
                    >
                        <v-card flat>
                            <v-card-text>tab4</v-card-text>
                        </v-card>
                    </v-tab-item>
                    <v-tab-item
                        :key="5"
                        :value="tab-5"
                    >
                        <v-card flat>
                            <v-card-text>tab5</v-card-text>
                        </v-card>
                    </v-tab-item> -->
                </v-tabs-items>
                <v-tabs
                    v-model="tab"
                    background-color="#de0c3b"
                    dark
                    show-arrows
                    icons-and-text
                    height="50"
                    fixed-tabs
                    centered
                    style="position: fixed; bottom: 0px; left: 0px; font-size: 10px;"
                >
                    <v-tabs-slider></v-tabs-slider>

                    <v-tab :key="1" style="font-size: 7px;" width="2">
                        home
                        <v-icon>mdi-home-outline</v-icon>
                    </v-tab>

                    <v-tab :key="2" style="font-size: 7px">
                        alerts
                        <v-icon>mdi-fire-truck</v-icon>
                    </v-tab>

                    <v-tab :key="3" style="font-size: 7px">
                        timeline
                        <v-icon>mdi-account-outline</v-icon>
                    </v-tab>
                    <v-tab :key="4" style="font-size: 7px">
                        news
                        <v-icon>mdi-newspaper-variant-multiple-outline</v-icon>
                    </v-tab>
                    <v-tab :key="5" style="font-size: 7px">
                        menu
                        <v-icon>mdi-menu</v-icon>
                    </v-tab>
                </v-tabs>
            </v-card>
        </template>
            <!-- <template>
                <v-card
                    class="mx-auto"
                    max-width="400"
                >
                    <v-img
                    class="white--text align-end"
                    height="200px"
                    src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
                    >
                    <v-card-title>Top 10 Australian beaches</v-card-title>
                    </v-img>

                    <v-card-subtitle class="pb-0">Number 10</v-card-subtitle>

                    <v-card-text class="text--primary">
                    <div>Whitehaven Beach</div>

                    <div>Whitsunday Island, Whitsunday Islands</div>
                    </v-card-text>

                    <v-card-actions>
                    <v-btn
                        color="orange"
                        text
                    >
                        Share
                    </v-btn>

                    <v-btn
                        color="orange"
                        text
                    >
                        Explore
                    </v-btn>
                    </v-card-actions>
                </v-card>
            </template> -->
            

        </v-app>
    </div>
    <script src="assets/js/getLocation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.js"></script>
    <script src="vue/app.js"></script>
</body>

</html>