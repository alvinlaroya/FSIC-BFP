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

Vue.use(Vuetify);
var app = new Vue({
    el: '#app',
    vuetify: new Vuetify(),
    inject: ['theme'],
    data: {
        tab: null,
        alertoverlay: false,
        width: 900,
        items: [
            { icon: 'inbox', title: 'Inbox' },
            { icon: 'star', title: 'Starred' },
            { icon: 'send', title: 'Sent mail' },
            { icon: 'drafts', title: 'Drafts' },
            { divider: true },
            { icon: 'mail', title: 'All mail' },
            { icon: 'delete', title: 'Trash' },
            { icon: 'error', title: 'Spam' },
        ],
        news: [],
        fsic: {
            name: null,
            establishment: null,
            tradename: null,
            address: null,
            representative: null,
            bin: null,
            tin: null,
            phone: null,
            email: null,
            occupancy: null,
            floor: null,
            storey: null,
        },
        bfpInspections: [],
        position_lat: 0,
        position_long: 0,
        map: null,
        tileLayer: null,
        marker: null,
        markers: {
            lat: [
                14.609053699999997,
                14.569053699999997
            ],
            long: [
                121.1322565700001,
                121.1652565700001
            ],
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
        occupancies: [
            "Assembly	Educational", "Health Care", "Detention and Correctional", "Residential", "Merchantile", "Businesss", "Insdustrial", "Storage", "Mixed Occupancies", "Miscellaneous"
        ],
        tips: [
            {number: 'Tips no. 1: Be fire-safety conscious', desc: 'March 1 is the start of Fire Prevention Month. Everyone is encouraged to be fire-safety conscious as fire safety is everyone’s concern.', imageTip: 'assets/img/tips/tips1.png'},
            {number: 'Tip no. 2: Keep matches out of children’s reach', desc: 'For their safety (and our homes’), matches and lighters should be placed in cupboards or drawers out of children’s reach.', imageTip: 'assets/img/tips/tips2.png'},
            {number: 'Tip no. 3: Keep lit candles away from combustible materials', desc: 'When lighting candles, make sure that they placed away from combustible materials, such as curtains, newspapers, etc.', imageTip: 'assets/img/tips/tips3.png'},
            {number: 'Tip no. 4: Do not use substandard electrical wirings and equipment', desc: 'Faulty electrical wiring is one of the main causes of fires, so make sure to use only the best type.', imageTip: 'assets/img/tips/tips4.png'},
            {number: 'Tip no. 5: Avoid using your electric fan continuously for 24 hours', desc: 'To prevent them from overheating, electric fans should be switched off after several hours of continuous use.', imageTip: 'assets/img/tips/tips5.png'},
            {number: 'Tip no. 6: Do not smoke in bed', desc: 'Lit cigarette butts can easily ignite inflammable materials, such as bed sheets and pillowcases, so avoid smoking in bed.', imageTip: 'assets/img/tips/tips6.png'},
            {number: 'Tip no. 7: Unplug and shut off electrical equipment and LPG tanks', desc: 'When leaving the house, make sure that all electrical equipment and LPG tanks are properly disconnected and shut off', imageTip: 'assets/img/tips/tips7.png'},
            {number: 'Tip no. 8: Never leave your kitchen while cooking', desc: 'Do not leave cooking food unattended. If you have to leave the kitchen, turn off the stove and take the pans and pots off the heat.', imageTip: 'assets/img/tips/tips8.png'},
            {number: 'Tip no. 9: Keep them clean and grease-free', desc: 'Your stove must be kept clean and grease-free at all times. In addition, use soapy water to check your LPG hose and connectors for any leaks.', imageTip: 'assets/img/tips/tips9.png'},
            {number: 'Tip no. 10: Avoid octopus connections', desc: 'Overloading of electrical outlets and using octopus connections and worn-out cords are some of the leading causes of household fires.', imageTip: 'assets/img/tips/tips10.png'},
            {number: 'Tip no. 11: Do not store items above the stovetop', desc: 'Space might be a big issue in today’s homes, but as much as possible, make sure to keep the space directly above your stovetop item-free.', imageTip: 'assets/img/tips/tips11.png'},
            {number: 'Tip no. 12: Idle electrical appliances must be unplugged', desc: 'When not in use, unplug.', imageTip: 'assets/img/tips/tips12.png'},
            {number: 'Tip no. 13: Keep inflammable liquids and other combustible items away from the stove', desc: 'Cooking oil, fuel, newspaper, and other combustible items must be kept away from the stove, especially when cooking.', imageTip: 'assets/img/tips/tips13.png'},
            {number: 'Tip no. 14: Make sure smoke alarms are working', desc: 'Ensure that your smoke alarms are working well and replace batteries at least every six months.', imageTip: 'assets/img/tips/tips14.png'},
            {number: 'Tip no. 15: Do not use water to put out grease fire', desc: 'When frying and your pan bursts into flames, do not douse it with water. Instead, put a lid on it or cover it with damp cloth.', imageTip: 'assets/img/tips/tips15.png'},
            {number: 'Tip no. 16: Extension cords are not meant to be used as permanent outlets', desc: 'Extension cords should only be used temporarily and not as permanent wiring devices. Also, make sure that cords are not looped around sharp objects that could cause them to fray.', imageTip: 'assets/img/tips/tips16.png'},
            {number: 'Tip no. 17: Place electric fans away from curtains', desc: 'Make sure that electric fans are placed away from curtains to avoid snagging, which may lead to fire.', imageTip: 'assets/img/tips/tips17.png'},
            {number: 'Tip no. 18: Do not leave an electric fan switched on when it’s not rotating', desc: 'Clean and oil them regularly to make they’re working properly.', imageTip: 'assets/img/tips/tips18.png'},
            {number: 'Tip no. 19: Defective appliances must not be used and should be fixed immediately', desc: 'Do not use defective appliances as they may lead to overheated wiring.', imageTip: 'assets/img/tips/tips19.png'},
            {number: 'Tip no. 20: Unplug your flat iron and rice cooker after use', desc: 'Take extra care when using your flat iron or rice cooker, and unplug them immediately after use.', imageTip: 'assets/img/tips/tips20.png'},
            {number: 'Tip no. 21: Put out any lit candle before going to sleep', desc: 'It is common in Filipino homes to light candles in altars, but to be safe, make sure to put out lit candles before going to sleep.', imageTip: 'assets/img/tips/tips21.png'},
            {number: 'Tip no. 22: Place a lit candle on a candleholder', desc: 'If you have none, place it in the middle of a basin partly filled with water and keep it away from combustible materials.', imageTip: 'assets/img/tips/tips22.png'},
            {number: 'Tip no. 23: Use smoke detectors', desc: 'Install smoke detectors in bedrooms, the kitchen, and living areas. They sound off an alert when fire is still in a controllable state.', imageTip: 'assets/img/tips/tips23.png'},
            {number: 'Tip no. 24: Keep a fire extinguisher', desc: 'If possible, have an ABC type of fire extinguisher in your kitchen and workshop areas—and take time to learn how to use it. A stands for light materials such as paper, plastic, wood, leaves, etc.; B stands for flammable liquids like kerosene, paint, solvents, etc.; and C stands for energized electrical equipment such as plugged appliances and tools.', imageTip: 'assets/img/tips/tips24.png'},
            {number: 'Tip no. 25: Stay away from inflammable liquids', desc: 'Do not store large quantities of inflammable liquids in the house and basement areas.', imageTip: 'assets/img/tips/tips25.png'},
            {number: 'Tip no. 26: Dispose of combustible items and trash', desc: 'Oily rags, newspaper, and other trash must be disposed in a safe waste bag or container.', imageTip: 'assets/img/tips/tips26.png'},
            {number: 'Tip no. 27: Clean up spilled oil and grease from vehicles promptly', desc: 'Grease and spilled oil from vehicles must be cleaned promptly.', imageTip: 'assets/img/tips/tips27.png'},
            {number: 'Tip no. 28: Plug your power tools straight to the wall socket', desc: 'When using power tools, make sure plug them directly to a wall socket, or use only heavy-duty extension cords when needed.', imageTip: 'assets/img/tips/tips28.png'},
            {number: 'Tip no. 29: Keep your garage well-ventilated', desc: 'As garages are place where combustible items are normally store, make sure they are well-ventilated to avoid buildup of fumes and heat from tools.', imageTip: 'assets/img/tips/tips29.png'},
            {number: 'Tip no. 30: Keep your place clean at all times', desc: 'Dispose dry leaves, cobwebs, loose paper, and other combustible debris at all times.', imageTip: 'assets/img/tips/tips30.png'},
            {number: 'Tip no. 31: Today is the culmination of Fire Prevention Month 2017', desc: 'Let us all be fire-safety conscious at all times and make every day a fire prevention day.', imageTip: 'assets/img/tips/tips31.png'},
        ]
    },
    mounted() {
        this.display_news();
        this.getLocation();
    },
    methods: {
        addFsic() {
            let dateId = new Date();
            let timeId = dateId.getTime();
            let counter = timeId;
            var fsicFire = {
                id: counter,
                applicantId: 24,
                name: this.fsic.name,
                establishment: this.fsic.establishment,
                tradename: this.fsic.tradename,
                address: this.fsic.address,
                representative: this.fsic.representative,
                bin: this.fsic.bin,
                tin: this.fsic.tin,
                phone: this.fsic.phone,
                email: this.fsic.email,
                occupancy: this.fsic.occupancy,
                floor: this.fsic.floor,
                storey: this.fsic.storey,
            }

            let db = firebase.database().ref("fsic/" + counter);
            db.set(fsicFire);
            this.fsic = {}

            console.log(fsicFire)
            swal(
                "FSIC Application Submited!",
                "Please wait for your Attached Documentary Requirements that will send from BFP", 
                "success"
            );
        },
        display_news() {
            axios.get('https://newsapi.org/v2/top-headlines?country=ph&apiKey=c948915906cf4ef1a44f02fe585efe08').then(response => {
                this.news = response.data.articles
                console.log(this.news)
            })
        },
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
        showPosition(position) {
            app.position_lat = position.coords.latitude
            app.position_long = position.coords.longitude

            this.map = L.map(window['alertMap'], {
                minZoom: 4,
                maxZoom: 18,
            });

            this.map.setView([position.coords.latitude, position.coords.longitude], 14);
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
                iconUrl: '../assets/img/icon/gif/pin.gif',
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

            var x;
            /*             var lat = 0;
                    var long = 0; */

            for (x = 0; x < 2; x++) {
                L.marker([this.markers.lat[x], this.markers.long[x]], { icon: this.greenIcon }).addTo(this.map).bindPopup('<div><img src="../assets/img/faces/avatar.jpg" style="width: 40px; border-radius: 50%"></img><span>Alvin Laroya</span><br><button class="btn btn-primary" @click="alert(1)">Navigate</button></div>').openPopup();
            }

            /*     this.routing = L.Routing.control({
                    waypoints: [
                      L.latLng(position.coords.latitude, position.coords.longitude),
                      L.latLng(lat, long)
                    ]
                  }).addTo(this.map); */
            /* 
                      this.routing = L.Routing.control({
                        waypoints: [
                          L.latLng(position.coords.latitude, position.coords.longitude),
                          L.latLng(14.609053699999997, 121.1322565700001)
                        ]
                      }).addTo(this.map); */
        },
        myLocation() {
            this.map.setView([map.position_lat, map.position_long], 17);
        },
    },
})