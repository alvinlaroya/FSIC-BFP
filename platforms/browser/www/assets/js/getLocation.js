function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            // Success function
            showPosition, 
            // Error function
            null, 
            // Options. See MDN for details.
            {
               enableHighAccuracy: true,
               timeout: 5000,
               maximumAge: 0
            });
    } else { 
        document.getElementById("location").innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    document.getElementById("location").innerHTML="Lat: " + position.coords.latitude + 
    "<br>Long: " + position.coords.longitude;  
}