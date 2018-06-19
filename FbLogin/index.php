<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="initial-scale = 1,user-scalable=no,maximum-scale=1.0">
<title>Facebook Login</title>
<meta charset="UTF-8">
</head>
<body onload="">
<script>
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    if (response.status === 'connected') {
      testAPI();
    } else if (response.status === 'not_authorized') {
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      
    }
  }
	
	function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
	  var at = "";
	var uid = "";
	if (response.status === 'connected') {
		at = response.authResponse.accessToken;
		uid = response.authResponse.userID;
		
		window.location = document.referrer+"setSession.php?user_access_token="+at+"&uid="+uid;
		
	}
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '1539032803004026',
    cookie     : true,   
                        
    xfbml      : true,  
    version    : 'v2.2' 
  });

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
	var at = "";
	var uid = "";
	if (response.status === 'connected') {
		at = response.authResponse.accessToken;
		uid = response.authResponse.userID;
		window.location = ".././setSession.php?user_access_token="+at+"&uid="+uid;
	}
  });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
	
	function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      
    });
  }
</script>


<strong>Login - </strong>
<fb:login-button scope="public_profile,email,pages_show_list" onlogin="checkLoginState();">
</fb:login-button>
<div id="status"></div>

<script>

</script>
</body>
</html>