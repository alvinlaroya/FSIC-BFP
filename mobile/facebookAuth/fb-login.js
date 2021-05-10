function signin(){
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
    document.getElementById('status').innerHTML = 'Login with Facebook ';
    } else {
    // The person is not logged into Facebook, so we're not sure if
    // they are logged into this app or not.
    document.getElementById('status').innerHTML = 'Login with Facebook ';
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

    FB.logout(function(response) {
        console.log('Successful logout for: ' + response.name);
        document.getElementById("menu_profile").src = "assets/img/MOBALERT_LOGO.png";
        document.getElementById("menu_fullname").innerHTML = "MOBAlert";
    });

    
    window.fbAsyncInit = function() {
    FB.init({
    appId : '604335030483490',
    cookie : true, // enable cookies to allow the server to access
    // the session
    xfbml : true, // parse social plugins on this page
    version : 'v2.2' // use version 2.2
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
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

    // Here we run a very simple test of the Graph API after login is
    // successful. See statusChangeCallback() for when this call is made.
    function testAPI() {
    console.log('Welcome! Fetching your information.... ');
    FB.api('/me?fields=id, first_name,email, name, picture', function(response) {
    console.log('Successful login for: ' + response.name);
   
    document.getElementById("session_id").value = response.id;
    document.getElementById("session_fname").value = response.first_name;
    document.getElementById("session_name").value = response.name;
    document.getElementById("session_email").value = response.email;
    document.getElementById("session_picture").value = response.picture.data.url;
    document.getElementById("action_bar_profile").src = response.picture.data.url;

    document.getElementById("timeline_name").innerHTML = response.name;
    document.getElementById("timeline_email").innerHTML = response.email;
    document.getElementById("timeline_picture").src = response.picture.data.url;

    document.getElementById("menu_profile").src = response.picture.data.url;
    document.getElementById("menu_fullname").innerHTML = response.name; 
    
    /* $(document).ready(function(){
        $.ajax(
            {
                url: 'session_data.php',
                method: 'post',
                data:{
                    responseID: response.id,
                    responseEmail: 'gasgawsgs'
                }
            }
        )
    })
    window.location('htpps://facebook.com'); */
    //document.getElementById("status").innerHTML = '<p>Welcome '+response.name+'! <a href="dashboard.php?&email='+ response.email +'&fname='+ response.first_name +'&user_id='+response.id+'&name='+ response.name +'">Continue with facebook login</a></p>'
    });
    }

    