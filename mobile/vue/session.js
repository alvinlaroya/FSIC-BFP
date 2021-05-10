

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

var toggleAlert = new Vue({
      el: '#toggleAlerts', 
      data: {
        witness_pic: '',
        name: '',
        time: '',
        desc: '',
        images: [],
        month_date_year: null,
        time_hr: null,
        time_min: null,
      }
  });
  
  var alerts = new Vue({
      el: '#alerts', 
      data: {
        respond: false,
        notRespond: '',
        alerts_count: 0, // passing alert count into alert vue 
        default_time: null,
        hr_now: null,
        min_now: null,
        month_now: null,
        date_now: null,
        year_npw: null,
        month_date_year: null,
        subtract: null,
        minute_ago: null,
        hour_ago: null,
        months: [
          'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
        ],

        alerts: [
          {witness_pic: 'assets/img/avatar.jpg', image: '', city: 'agoo', lat: '16.350953', long: '20.3887209', alertStatus: 'default', activity: 'read', agencyId: 1, name: 'Sarah Geronimo', month_date_year: 'April 24, 2020', time_hr: 10, time_min: 20, desc: 'lorem ipsum lorem ipsum lorem'},
          {witness_pic: 'assets/img/avatar2.jpg', image: '', city: 'agoo', lat: '126.340953', long: '120.3987209', alertStatus: 'level-2', activity: 'read', agencyId: 2, name: 'Jonathan Lagao', month_date_year: 'April 24, 2020', time_hr: 1, time_min: 24, desc: 'lorem ipsum lorem ipsum lorem'},
          {witness_pic: 'assets/img/avatar3.jpg', image: '', city: 'agoo', lat: '16.350953', long: '120.4087209', alertStatus: 'level-2', activity: 'unread', agencyId: 3, name: 'Alvin Reggae Laroya', month_date_year: 'April 23, 2020', time_hr: 1, time_min: 24, desc: 'lorem ipsum lorem ipsum lorem'},
          {witness_pic: 'assets/img/marc.jpg', image: '', city: 'agoo', lat: '16.360953', long: '120.4187209', alertStatus: 'level-3', activity: 'read', agencyId: 4, name: 'Whilmer Realigue', month_date_year: 'April 23, 2020', time_hr: 19, time_min: 24, desc: 'lorem ipsum lorem ipsum lorem'},
          {witness_pic: 'assets/img/avatar2.jpg', image: '', city: 'agoo', lat: '16.370953', long: '120.4287209', alertStatus: 'level-1', activity: 'unread', agencyId: 1, name: 'Regine Laroya', month_date_year: 'April 23, 2020', time_hr: 13, time_min: 24, desc: 'lorem ipsum lorem ipsum lorem',
          image: [
            {src: 'assets/img/avatar3.jpg'}, {src: 'assets/img/avatar2.jpg'}, {src: 'assets/img/avatar.jpg'}
          ]},
          {witness_pic: 'assets/img/avatar.jpg', image: '', city: 'agoo', lat: '16.380953', long: '120.43287209', alertStatus: 'level-3', activity: 'read', agencyId: 5, name: 'Allora Alviar', month_date_year: 'April 25, 2020', time_hr: 9, time_min: 30, desc: 'lorem ipsum lorem ipsum lorem' ,
          image: [
            {src: 'assets/img/avatar.jpg'}, {src: 'assets/img/avatar2.jpg'}, {src: 'assets/img/avatar3.jpg'}
          ]}
        ],
        messages: 'gawgawgwag',
      }/* ,
      mounted(){
        this.time()
        this.time() 
          //this.alerts_count = alerts
          var start;
          for(start=0; start <= 6; start++){
            if(this.alerts[start].activity == 'unread' && this.alerts[start].agencyId == 1){
              this.alerts_count += 1;
            }
          } 
      } */
      ,
      mounted(){
        this.time()
        /* axios.get('http://localhost/mobalert/examples/controller/view_inspection.php').then(response => {
          this.alerts = response.data.html
          console.table(this.alerts)
        })  */ 
      },
      methods: {
          openAlert(index){
              toggleAlert.witness_pic = this.alerts[index].witness_pic;
              toggleAlert.name = this.alerts[index].name;
              toggleAlert.time = this.alerts[index].time;
              toggleAlert.desc = this.alerts[index].desc;
              toggleAlert.month_date_year = this.alerts[index].month_date_year;
              toggleAlert.time_hr = this.alerts[index].time_hr;
              toggleAlert.time_min = this.alerts[index].time_min;
              toggleAlert.images = this.alerts[index].image
              console.log(toggleAlert.images)
              $('#toggleAlerts').css('bottom', '0px');
              $('#toggleAlerts').css('transition', '.2s ease');
          },
          openMap(lat, long){
              map.position_lat = lat;
              map.position_long = long; 
              $('#chat').css('right', '0px');
              $('#chat').css('transition', '.2s ease');
          },
          time(){
            setInterval(this.pota, 100)
            setInterval(this.post, 100)
            //smonths[month] + ' ' + date + ', ' +year
    
          /*   var z;
            for(z=0; z<= 5; z++){
              this.subtract = this.hr_now - this.alerts[z].time_hr
              this.minutes_ago = this.min_now - this.alerts[z].time_min
              if(this.month_date_year == this.alerts[z].month_date_year){
                this.alerts[z].time_hr = this.subtract
                this.alerts[z].time_min = this.minutes_ago
              }
              
            } */
          },
          async pota(){
            this.default_time = new Date()
            this.hr_now = this.default_time.getHours()
            this.min_now = this.default_time.getMinutes()
            this.month_now = this.default_time.getMonth()
            this.date_now = this.default_time.getDate()
            this.year_now = this.default_time.getFullYear()
            this.month_date_year = this.months[this.month_now] + ' ' + this.date_now + ', ' +this.year_now

            var z;
            for(z=0; z < this.alerts.length; z++){
              this.minute_ago = this.min_now - this.alerts[z].time_min
              this.hour_ago = this.hr_now - this.alerts[z].time_hr
              this.alerts[z].minute_ago = this.minute_ago
              this.alerts[z].hour_ago = this.hour_ago
            }
          }
      }
  });

  

  var createAlertImage = new Vue({
    el: '#create-alert-image',
    data: {
      image: '',
      names: 'Alvin Reggae Laroya'
    },
    mounted(){
     //createAlert.image = this.image;
     /*  createAlert.name = this.names; */
      //console.log("SRC: " + this.image + "/ NAME: " + this.name) 
    }
  });


  var createAlert = new Vue({
    el: '#create-alert',
    data: {
      profile_pic: '',
      image: '',
      city: 'agooo',
      lat: null,
      long: null,
      alertStatus: 'default',
      activity: 'unread',
      agencyId: 1,
      name: '',
      time: '',
      time_hr: null,
      time_min: null,
      description: '',
      default_time: null,
    },
    mounted(){
      /* this.default_time = new Date()
      alerts.hr_now = this.default_time.getHours()
      alerts.min_now = this.default_time.getMinutes() */
    },
    methods: {
      create_post(){
        /* alert(createAlertImage.image.file) */
        const default_time = new Date()
        months = [
          'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'
        ]
        var hr = default_time.getHours()
        var min = default_time.getMinutes()
/*         var ampm = hr >= 12 ? 'pm' : 'am' */
        var month = default_time.getMonth()
        var date = default_time.getDate()
        var year = default_time.getFullYear()

        var new_month = months[month] + ' ' + date + ', ' +year
/*         const rtf = new Init.RelativeTimeFormat("en")
        rtf.format(-1, "day")
        rtf.format(30, "seconds")
        rtf.format(30, "months") */
        const my_alert = [
          {
            'witness_pic' : this.profile_pic,
            'image' : this.image,
            'city': this.city,
            'lat': this.lat,
            'long' : this.long,
            'alertStatus' : this.alertStatus,
            'activity': this.activity,
            'agencyId': this.agencyId,
            'name' : createAlertImage.names,
            'month_date_year': new_month,
            'time_hr': hr,
            'time_min': min,
            'minute_ago': '',
            'hour_ago': '',
            'desc' : this.description
          }
        ];

        alerts.alerts.push(my_alert[0]);
        console.log(createAlertImage.image.name)
        $('#take-photo-container').css('visibility', 'hidden');
        this.description = '';

        alerts.time()
      }
    }
  });
  

  // Session JS

  var session = new Vue({
    el: '#session', 
    data: {
        user_loggedin_id: '',
        create_announcement: false,
        session_respond: false,
        not_respond: '',
        session_actionbar: '',
        session_user_session: false,
        banned: false,
        users: [
            {user_id: '11111', image_url: 'assets/img/avatar.jpg', agency_id: 'agency11111', type_user: '1', lat: '', long: '', banned: 'true', posting: 'false', responding: 'false'},
            {user_id: '22222', image_url: 'assets/img/avatar2.jpg', agency_id: 'agency22222', type_user: '2', lat: '', long: '', banned: 'false', posting: 'true', responding: 'true'},
            {user_id: '33333', image_url: 'assets/img/avatar3.jpg', agency_id: 'agency33333', type_user: '2', lat: '', long: '', banned: 'false', posting: 'true', responding: 'false'}
        ],
        messages: 'gawgawgwag',
      },
      mounted(){
          this.user_loggedin_id = document.getElementById("pota").value;
          var i;
          for(i=0; i <= 2; i++){
              if(this.user_loggedin_id == this.users[i].user_id && this.users[i].banned != 'true'){
                  createAlert.profile_pic = this.users[i].image_url; // send session profile pic to createAlert vue

                  this.banned = false;
                  //signing in session
                  this.user_loggedin_id != '' ? this.session_user_session = true : this.session_user_session = false;

                  this.session_actionbar = this.users[i].image_url; //if logged in ? then get the profile pic
                  console.log("POTANINA")
                  if(this.users[i].type_user == '2'){
                    this.users[i].posting == 'true' ? this.create_announcement = true : this.create_announcement = false;
                    this.users[i].responding == 'true' ? [alerts.respond = true, alerts.notRespond = 'do-respond']  : alerts.notRespond = 'not-respond';
                    //this.users[i].responding == 'true' ? alerts.notRespond = 'do-respond' : alerts.notRespond = 'not-respond';
                  } else if(this.users[i].type_user == '1'){
                      this.create_announcement = false;
                  } else {
                      this.create_announcement = false;
                  }
                  break;
                } else if(this.users[i].banned != 'false'){
                  this.banned = true;
                  this.session_actionbar = 'examples/mobile/assets/img/mobalert.jpg';
                } else{ //new user need to register in database
                    this.session_actionbar = 'examples/mobile/assets/img/mobalert.jpg';
                    alerts.notRespond = 'not-respond';
                    this.user_loggedin_id == '' ? this.banned = false : this.banned = true;
                }
            }
      }
      
      /* ,
      mounted(){

       /*  console.log(this.alerts)
        axios.get('http://localhost/mobalert/examples/controller/view_inspection.php').then(response => {
          this.bfpInspections = response.data.html
          console.log(this.bfpInspections)
        })   */
      /* methods: {
          openAlert(witness_pic, name, time, desc){
              toggleAlert.witness_pic = witness_pic;
              toggleAlert.name = name;
              toggleAlert.time = time;
              toggleAlert.desc = desc;
              toggleAlert.sample = this.srcs;            
          },
          openMap(lat, long){
              map.position_lat = lat;
              map.position_long = long; 
          }
      } */
  });

  var displayAnnouncement = new Vue({
    el: '#display_announcement',
    data:{
      announcements: []
    }
  });

  var createAnnouncement = new Vue({
    el: '#create_announcement', 
    data: {
      desc: '',
      composer_id: '3435936696481056',
      composer_name: 'Alvin Reggae Laroya',
      composer_pic: 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=3435936696481056&height=50&width=50&ext=1592772415&hash=AeQqAnnBUTSnOfXv',
      composer_agency: 'BFP Agoo',
      announcement: [],
      firebase: null
    },
    mounted(){
        this.desc = session.create_announcement;
        this.created()
        //console.log(session.create_announcement)
    },
    methods: {
      post_announcement:function(e){
        e.preventDefault();
        alert("GAWGJWA")
        let dateId = new Date();
        let timeId= dateId.getTime();
        let counter = timeId;
        var announcementFire={
          id: counter,
          name: this.composer_name,
          agency: this.composer_agency,
          pic: this.composer_pic,
          desc: this.desc,
          time: timeId
        }
        let db = firebase.database().ref("announcement/"+counter);
        db.set(announcementFire);
      },
      created:function(){
        var announcementDb = firebase.database().ref("announcement/");
        var announcementsDb = []
        announcementDb.on("child_added", function(data){
          var announcementValue = data.val();
          announcementsDb.push(announcementValue);          
        });
        displayAnnouncement.announcements = announcementsDb;
      },
    }
  });

  var map = new Vue({
    el: '#maps', 
    data: {
      position_lat: 0,
      position_long: 0,
      map: null,
      tileLayer: null,
      marker: null,
      routing: null,
      waypoints: null,
      latLng: null,
      latLng2: null,
      navigator: null,
      my_lat: null,
      my_long: null,
      greenIcon: null,
      blueIcon: null,
      marker1: null,
      markter2: null,
      layers: [],
    },
    mounted(){
      this.initMap();
      this.initLayers();
      this.lat = this.position_lat;
      this.long = this.position_long;
      /* this.createMarker(); */
    },
    methods: {
      initMap() {
        
        var lat = document.getElementById("lat").value;
        var long = document.getElementById("long").value;
        

        /* this.tileLayer = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoid2F6YXNraWxsZXIyNCIsImEiOiJjazkydGcyYngwMXA1M21wMTM5eDN0YXdnIn0.TAbTjQWyDwVNlqhL0_h0rg', 
        {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1Ijoid2F6YXNraWxsZXIyNCIsImEiOiJjazkydGcyYngwMXA1M21wMTM5eDN0YXdnIn0.TAbTjQWyDwVNlqhL0_h0rg',
          }
        );
        this.tileLayer.addTo(mymap); */

        

        this.map = L.map('map').setView([14.609053699999997, 121.13225650000001], 10);


        this.tileLayer = L.tileLayer(
          'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoid2F6YXNraWxsZXIyNCIsImEiOiJjazkydGcyYngwMXA1M21wMTM5eDN0YXdnIn0.TAbTjQWyDwVNlqhL0_h0rg',
          {
            maxZoom: 20,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1Ijoid2F6YXNraWxsZXIyNCIsImEiOiJjazkydGcyYngwMXA1M21wMTM5eDN0YXdnIn0.TAbTjQWyDwVNlqhL0_h0rg',
          }
        );
        this.tileLayer.addTo(this.map);


        this.greenIcon = L.icon({
          iconUrl: 'assets/icon/arrow_marked.png',
         /*  shadowUrl: 'leaf-shadow.png', */
      
          iconSize:     [55, 55], // size of the icon
          shadowSize:   [60, 60], // size of the shadow
          iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
          shadowAnchor: [4, 62],  // the same for the shadow
          popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        });

        this.blueIcon = L.icon({
          iconUrl: 'assets/icon/MOBALERT_LOGO.png',
         /*  shadowUrl: 'leaf-shadow.png', */
      
          iconSize:     [55, 55], // size of the icon
          shadowSize:   [60, 60], // size of the shadow
          iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
          shadowAnchor: [4, 62],  // the same for the shadow
          popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        });



        this.marker = L.marker([14.609053699999997, 121.12225650000001], {icon: this.greenIcon}).addTo(this.map);


          navigator.geolocation.watchPosition(response => {
            this.my_lat = response.coords.latitude
            this.my_long = response.coords.longitude
            console.log("RESPONSE: " +response.coords.latitude + "LONG: " +response.coords.longitude)
            /* this.map = L.map('map').setView([response.coords.latitude, response.coords.longitude], 10); */
            /* this.marker = L.marker([this.my_lat, this.my_long]).addTo(this.map); */
            
            this.latLng = L.latLng(response.coords.latitude, response.coords.longitude),
            this.latLng2 = L.latLng(14.609053699999997, 121.12225650000001)

            this.routing = L.Routing.control(
              {
                waypoints: [
                  this.latLng, this.latLng2
                ],
              /*  createMarker(i, wp, nWps) {
                  if (i === 0 || i === nWps - 1) {
                      this.marker1 = L.marker(wp.latLng, { icon: this.greenIcon });
                  } else {
                      this.marker1 = L.marker(wp.latLng, { icon: this.blueIcon });
                  }
                }, */
                routeWhileDragging: true,
                router: L.Routing.mapbox('pk.eyJ1Ijoid2F6YXNraWxsZXIyNCIsImEiOiJjazkydGcyYngwMXA1M21wMTM5eDN0YXdnIn0.TAbTjQWyDwVNlqhL0_h0rg'),
              }
            );
            this.routing.addTo(this.map);
          });
        
        
      
        
        
        

        

       /*  pk.eyJ1Ijoid2F6YXNraWxsZXIyNCIsImEiOiJjazkydGcyYngwMXA1M21wMTM5eDN0YXdnIn0.TAbTjQWyDwVNlqhL0_h0rg */

        /* this.marker = L.marker([67.74, 11.94]).addTo(this.map); */

        


       /*  function showPosition(position) {
            
          this.map = L.map('map').setView([position.coords.latitude, position.coords.longitude], 10);
          this.marker = L.marker([position.coords.latitude, position.coords.longitude]).addTo(this.map);
          //marker1.bindPopup("<img src='assets/img/city-profile.jpg' style='width: 60px'/>").openPopup();
          //x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
          let firstTime = true;
          async function getISS(){
              if(firstTime){
                this.map = L.map('map').setView([position.coords.latitude, position.coords.longitude], 10);
                  firstTime = false;
              } else{
                this.map = L.map('map').setView([position.coords.latitude, position.coords.longitude], 10);
              }
              this.map = L.map('map').setView([position.coords.latitude, position.coords.longitude], 10);

              this.map = L.map('map').setView([position.coords.latitude, position.coords.longitude], 10);

              
          }

          getISS();

          setInterval(getISS, 3000);

        } */

      },
      initLayers() {},
    }
  });

  var actionbar = new Vue({
    el: '#action-bar', 
    data: {
      image_src: '',
      yata: 'hahahaha',
      profile_picture: '',  
      session_fname: '',
      session_name: '',
      session_email: '',
      session_picture: '',
    }
  });


  // MENU JS for signed in
  var menu = new Vue({
    el: '#menu', 
    data: {
      sign_in: ''
    },
    mounted(){
      this.sign_in = session.session_user_session;
    }
  }); 

  var navbar = new Vue({
    el: '#tab-nav', 
    data: {
      alerts: 0,
      nav: 'agawgawga'
    },
    mounted(){
      this.alerts = alerts.alerts_count;
      console.log(this.alerts)
    }
  });