
        var mymap = L.map('mapid').setView([57.74, 11.94], 10);

        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1Ijoid2F6YXNraWxsZXIyNCIsImEiOiJjazkydGcyYngwMXA1M21wMTM5eDN0YXdnIn0.TAbTjQWyDwVNlqhL0_h0rg',
        }).addTo(mymap);

        L.Routing.control(
            {
              waypoints: [
                L.latLng(57.74, 11.94),
                L.latLng(57.6792, 11.949)
              ],
              routeWhileDragging: true
            }
          ).addTo(mymap);
       
        //var marker1 = L.marker([position.coords.latitude, position.coords.longitude]).addTo(mymap);
        //const api_url = 'https://api.wheretheiss.at/v1/satellites/25544';
        


      /*   function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else { 
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        } */

      /*   function showPosition(position) {
            
            //marker1.bindPopup("<img src='assets/img/city-profile.jpg' style='width: 60px'/>").openPopup();
            //x.innerHTML = "Latitude: " + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
            let firstTime = true;
            async function getISS(){
                if(firstTime){
                    mymap.setView([position.coords.latitude, position.coords.longitude], 5);
                    firstTime = false;
                } else{
                    mymap.setView([position.coords.latitude, position.coords.longitude], 5);
                }
                var marker = L.marker([0, 0]).addTo(mymap);

                marker.setLatLng([position.coords.latitude, position.coords.longitude]);

                
            }

            getISS();

            setInterval(getISS, 3000);

            
        } */


        /* mymap = new mapboxgl.Map({
            style: 'mapbox://styles/wazaskiller24/ck92u4c132ip71iqj4wqr1ulp'    //hosted style id
        });

        var lat = document.getElementById("lat").textContent;
        var long = document.getElementById("long").textContent;


        var mymap = L.map('mapid').setView([lat, long], 5);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoid2F6YXNraWxsZXIyNCIsImEiOiJjazkydGcyYngwMXA1M21wMTM5eDN0YXdnIn0.TAbTjQWyDwVNlqhL0_h0rg', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1Ijoid2F6YXNraWxsZXIyNCIsImEiOiJjazkydGcyYngwMXA1M21wMTM5eDN0YXdnIn0.TAbTjQWyDwVNlqhL0_h0rg',
        }).addTo(mymap);

        let firstTime = true;
        if(firstTime){
            mymap.setView([lat, long], 5);
            firstTime = false;
        } else{
            mymap.setView([lat, long], 5);
        }
        var marker = L.marker([lat, long]).addTo(mymap);

        marker.setLatLng([lat, long], 5); */

/* 
        lat: 23.5242

long: 12.5243 */ 