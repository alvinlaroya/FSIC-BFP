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

var map = new Vue({
    el: '#maps',
    data: {
        position_lat: 0,
        position_long: 0,
        map: null,
        tileLayer: null,
        marker: [],
        markers: {
            lat: [16.3308647, 14.609053699999997],
            long: [120.3788726, 121.02225650000001],
        },
        circle: null,
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
        alerts: []
    },
    mounted() {
        this.initMap()
        this.getLocation()
        

       /*  this.initLayers(); */
      /*   this.lat = this.position_lat;
        this.long = this.position_long; */
        /* this.createMarker(); */
    },
    methods: {
        getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(this.showPosition, null, {
                       enableHighAccuracy: true,
                       timeout: 5000,
                       maximumAge: 0
                    });
            } else { 
                alert("GEOLOCATION NOT SUPPORTED")
            }
               
              /*   this.position_lat = position.coords.latitude
                this.position_long = position.coords.longitude */
        },
        showPosition(position){
            map.position_lat = position.coords.latitude
            map.position_long = position.coords.longitude

            this.map = L.map('mapid', {
                minZoom: 4,
                maxZoom: 18,
            });

            this.map.setView([position.coords.latitude, position.coords.longitude], 13);
        /* 
                    this.map = L.map('mapid').setView([position.coords.latitude, position.coords.longitude], 4);
        */

            this.tileLayer = L.tileLayer(
                'https://api.mapbox.com/styles/v1/wazaskiller24/ck92u4c132ip71iqj4wqr1ulp/tiles/256/{z}/{x}/{y}@2x?access_token=pk.eyJ1Ijoid2F6YXNraWxsZXIyNCIsImEiOiJjazkydGcyYngwMXA1M21wMTM5eDN0YXdnIn0.TAbTjQWyDwVNlqhL0_h0rg',
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
                iconUrl: '../../assets/img/icon/gif/pin1.png',
                /*  shadowUrl: 'leaf-shadow.png', */

                iconSize: [75, 95], // size of the icon
                shadowSize: [60, 60], // size of the shadow
                iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
                shadowAnchor: [4, 62],  // the same for the shadow
                popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
            })

            //this.blueIcon = L.icon({
                //iconUrl: 'assets/icon/MOBALERT_LOGO.png',
                /*  shadowUrl: 'leaf-shadow.png', */

                //iconSize: [55, 55], // size of the icon
                //shadowSize: [60, 60], // size of the shadow
                //iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
                //shadowAnchor: [4, 62],  // the same for the shadow
                //popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
            //});


        /* 
            this.markers = [
                L.marker([14.609053699999997, 121.1322565700001], { icon: this.greenIcon }),
                L.marker([14.609053699999534, 121.1265650060002], { icon: this.greenIcon }),
                L.marker([14.609053699999991, 121.1828565000007], { icon: this.greenIcon }),
                L.marker([14.609053699999123, 121.1025565210004], { icon: this.greenIcon }) 
            ] */

            
        /*             var lat = 0;
            var long = 0; */


            var x;
            for(x=0; x <= this.alerts.length; x++){
                L.marker([map.markers.lat[x], map.markers.long[x]], { icon: this.greenIcon }).addTo(this.map);/* .bindPopup('<div><img src="${map.marker[x].witness_pic}" style="width: 40px; border-radius: 50%"></img><span>Alvin Laroya</span><br><button class="btn btn-primary" @click="alert(1)">Navigate</button></div>').openPopup(); */
            }
            
        /*     this.routing = L.Routing.control({
                waypoints: [
                  L.latLng(position.coords.latitude, position.coords.longitude),
                  L.latLng(lat, long)
                ]
              }).addTo(this.map); */

          /*     this.routing = L.Routing.control({
                waypoints: [
                  L.latLng(position.coords.latitude, position.coords.longitude),
                  L.latLng(14.609053699999997, 121.1322565700001)
                ]
              }).addTo(this.map); */
        },
        myLocation(){
            this.map.setView([map.position_lat, map.position_long], 15);
        },
        

        initMap() {
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
            /* 
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoid2F6YXNraWxsZXIyNCIsImEiOiJjazkydGcyYngwMXA1M21wMTM5eDN0YXdnIn0.TAbTjQWyDwVNlqhL0_h0rg' */

            
            
            /* 
            this.circle = L.circle([14.609053699999997, 121.13225650000001], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: 500
            }).addTo(this.map); */

        }
    },
    created(){
        var alertdb = firebase.database().ref("inccidents/");
        var alertsdb = [];

        alertdb.on("child_added", function(data){
            var alertValue = data.val();
            /* console.log(alertValue); */
  /*           this.alerts = alertValue */
            map.markers.lat = (alertValue.witness_lat)
            map.markers.long = (alertValue.witness_long)
            alertsdb.push(alertValue);
           /*  console.log(alertValue.witness_lat); */
            map.markers.lat = alertValue.witness_lat
            map.markers.long = alertValue.witness_long
/* 
            alert(map.markers.lat) */

            if(alertsdb.length <= 0) {
                $("#alertCount").css("display", "none");
            } else {
                setTimeout(function(){ 
                    $('#alertCount').html(alertsdb.length); 
                }, 3000)
            }   
        });
        this.alerts = alertsdb
       /*  this.marker = alertsdb */
       
       this.marker.push(alertsdb)
       console.log(this.marker)
    }
});
