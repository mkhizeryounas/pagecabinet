<?php
	error_reporting(0);
	session_start();
	include_once("analyticstracking.php");
	if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
		// last request was more than 30 minutes ago
		session_unset();     // unset $_SESSION variable for the run-time 
		session_destroy();   // destroy session data in storage
	}
	$_SESSION['LAST_ACTIVITY'] = time();
	
	/*?>
	<script>
		window.location = "./setSession.php?user_access_token=CAACEdEose0cBAKKl0IfgCvZBbUlXh1uYyQGCsZCbrddCroWVOR8Idwqm2rXu9f5MJGvofA1Eg40hXZB62IXert7ud77hZCg16qov1E7FK5VsdPZBGNqQ4vREXdNZB0f5PQZCD9yX3IxXVUOpObd4fZCvIwBcnqVvETwCbk1p6AcduZBsOAvv3Ur6e5QOtiqmqerdkzVkqGwhBKGLZCn3GluZAMj&uid=me"
	</script>
	<?php*/
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Pagecabinet</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Convert your facebook page into website with one click." />
		<meta name="keywords" content="facebook, page, website, connect, convert, domain, free, page cabinet, pagecabinet, web, hosting" />
		<link rel="shortcut icon" type="image/png" href="./images/1s.png"> 
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/addon.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700" />
		<noscript>
			<link rel="stylesheet" href="css/addon.css" />
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<style>
			.popover{
				width:250px;
				height:95px;
				background-size: auto 100%;
				background-repeat: no-repeat;
				background-position: left top;
				background-image:url("./images/popover.png");
			}
			#oBody
			{
				display: block;
			}
			#wBody
			{
				display: none;
			}
		</style>
		<script language="javascript">
				function waitingFunc()
				{
					if($("#linkInput").val() ) {
						
						$("#oBody").hide(500);
						$("#wBody").show(500);
						
						var fbid = document.getElementById('linkInput').value;
						var dataString = 'fbid='+fbid;
						$.ajax({
							type:"get",
							url:"getIdRedirect.php",
							data:dataString,
							cache:false,
							success:function(html){
								$('#msg').html(html);
							}
							
						});
						
					}
					return false;
				}
				
				</script>
	</head>
	<body class="landing">
    
	<div id="oBody">	
		<div class="se-pre-con"></div>
		<!-- Header -->
			<header id="header" class="alt">
				<h1><a href="./"><img src="./images/1.png" width="110" height="125" style="vertical-align:center;" /></a></h1>
				<nav id="nav">
					<ul>
						 <li><a href="#banner">Home</a></li> 
						 <li><a href="#one">About</a></li>
						 <li><a href="#two">Pricing</a></li>
						 <li><a href="#feedback">Feedback</a></li>
						 <!-- <li><a href="#three">our Team</a></li>
						<li><a href="#four">why us</a></li>
						<li><a href="#five">Contact us</a></li> -->
					</ul>

				</nav>
			</header>

		<!-- Banner -->
			<section id="banner" style="height:100%; min-height:100vh;">
				<h3 style="color:#f9f9f9;">Turn your Facebook Page into a responsive Website</h3>
				<?php
							if(empty($_SESSION["user_token"]) && empty($_SESSION["user_id"]))
							{
								?>
								<script>
								// Facebook Login
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
														
										$("#oBody").hide(500);
										$("#wBody").show(500);
										
										var dataString = "user_access_token="+at+"&uid="+uid;
										$.ajax({
											type:"post",
											url:"setSession.php",
											data:dataString,
											cache:false,
											success:function(html){
												$('#msg').html(html);
											}
											
										});
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
										//window.location = "./setSession.php?user_access_token="+at+"&uid="+uid;
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
								<fb:login-button style="display:block; padding-bottom:7px;" name="fb-login" id="fb-login" size="large" scope="public_profile,email,pages_show_list" onlogin="checkLoginState();">
									Login with Facebook
								</fb:login-button>
								<div id="status"></div>
								<br />
								<!--a href="javascript:void(0);" onclick="waitingFunc();">
									<image style="vertical-align: center;" src="./images/facebooklogin.png" height="40" width="160">
								</a-->
								
								<?php
							}
							else
							{
								//echo '<a href="./setSession.php?p=logout" onclick="waitingFunc();"><image style="vertical-align: center;" src="./images/facebooklogout.png" height="40" width="160"></a>';
								
								?>
									<script>
										window.location="./account.php";
									</script>
								<?php
								
							}
						 ?>
						 
				<script>
					
				</script>
				<form action="./getIdRedirect.php" method="get" autocomplete="off" style="padding-bottom:100px;">
					<input type="text" id="linkInput" name="fbid" style=" font-color: #fff; height: 45px; width: 80%; border-radius:360px; opacity: 0.8; background-color:#f9f9f9; margin-left: auto; text-align:center; margin-bottom: 10px; margin-right: auto;" placeholder="Paste link of a facebook page" required>
					<br />
					<input type="submit" onclick="return waitingFunc()" class="button special big" value="Place my Page" name="sbt" style="padding-left:18px; padding-right:18px;" />
				</form>
				<p id="msg"></p>
			</section>

				<!-- Start Homer -->
				<script>
					// HOVER SCROLL
					$(document).ready(function()
					{ 
						$(window).scroll(function(){
							if ($(this).scrollTop() > 100) {
								$('.scrollup').fadeIn();
							} else {
								$('.scrollup').fadeOut();
							}
						}); 
												
						$('.scrollup').click(function()
						{
							$("html, body").animate({ scrollTop: 0 }, 600);
								return false;
						});
					});

				</script>
				<a href="#" class="scrollup" id="scrollupid" style="
					display: inline; 
					width: 40px;
					height: 40px;
					text-indent: -9999px;
					opacity: 0.3;
					position: fixed;
					bottom: 50px;
					right: 50px;
					display: none;
					background: url(images/icon_top.png) no-repeat;
					z-index:1;
				">Scroll</a>
			<!-- End Homer -->
			
			<!-- One -->
			<section id="one" class="wrapper style1" style="background:; height: ;">
					<div class="container 80%">
						<div class="row 200%">
							
							<div>
								<center>
								<header class="major">
									<h2>about</h2>
									<p></p>
								</header>
								</center>
								<center>
								<p>
									 Now days internet is the main source of information and the why how we get to know about things. Every business needs a website to let people know about them and their product, this increases their number of customers and eventually their income. We can say every business, public figure, NGO, professionalist, in short almost elmost everybody needs a website. But coding is not something which comes easy. I my self is a self taught coder and I know how hard it is. There are people who code for you but it is extremely expensive and the end product is not so easy to update any news or even to upload any picture. Facebook is easy to use and everybody who needs a website has a facebook page, they update news there and post pictures but fcebook pages doesn't seems professional. 
									<br><br>How about there was something that gives you an attractive website with your information and contact form and it automatically updates as you post anything on your facebook page, you never have to see any code and your website is always updated, every picture you upload, every latest news you post on your facebook page goes to your website and keep your website updated. Well Pagecabinet does exactly that, all heavy weight lifting of your page is done by our cabinet, you never have to see any horrible code in your life, everything is done for you.
								</p>
							</div>
						</div>

						<footer id="footer" style="background:#fff;">
							<div class="container">
								<ul class="icons">
									<li><span class="icon fa-code fa-big"></span><p style="vertical-align: center;">No Coding</p></li>
									<li><span class="icon fa-cogs fa-big"></span><p style="vertical-align: center;">Fully Automatic</p></li>
									<li><span class="icon fa-code-fork fa-big"></span><p style="vertical-align: center;">Facebook Connected</p></li>
									<li><span class="icon fa-bolt fa-big"></span><p style="vertical-align: center;">Lightning Fast</p></li>
								</ul>
							</div>
						</footer>
							<p align="center" class="icon fa fa-bug"><i> - Pagecabinet is in beta stages, if you find any bug please report it via feedback.</i></p>
					</div>
				</section>
				
				<section id="two" class="wrapper style1" style="background:#f9f9f9; height: ;">
					<div class="container 80%">
						<div class="">
							
							<div>
								<center>
								<header class="major">
									<h2>Pricing</h2>
									<p></p>
								</header>
								</center>


								<div class="prices">
								  <!--<div class="pricingopt left">
									<h1>Basic</h1>
									<h2><small>$</small>0<small>/mo</small></h2>
									<ul>
									  <li>Pagecabinet Domain</li>
									  <li>Single Theme</li>
									  <li>Facebook Connected</li>
									</ul>
									<button>Choose</button>
								  </div>-->
								  <div class="pricingopt main">
									<h1>ALL FEATURES, ONE PRICE</h1>
									<h2><small>$</small>0.00<small>/mo</small></h2>
									<ul>
									  <li>Custom Domain</li>
									  <li>Multiple Themes</li>
									  <li>Facebook Connected</li>
									  <li>Responsive Website</li>
									</ul>
									<button>Choose</button>
								  </div>
								  <!--<div class="pricingopt right">
									<h1>Business</h1>
									<h2><small>n/a</small></h2>
									<ul>
									  <li>Custom Domain</li>
									  <li>Multiple Themes</li>
									  <li>Online Store</li>
									</ul>
									<button>Coming Soon</button>
								  </div>-->
								</div>

								
							</div>
						</div>
					</div>
				</section>

			<section class="wrapper style1 special" id="feedback">			
				<div class="cc-selector">
					<form action="feedbackForm.php" class="cd-form floating-labels" method="post">
						<legend><b>Feedback</b></legend>
						<div class="icon">
							<input class="email" type="email" name="cd-email" id="cd-email" placeholder="Email" required>
						</div>
						<div style="margin-left:auto; margin-right:auto;" >
						<strong>How do you like our services?</strong><br />
						<!-- <input id="happy" type="radio" name="feed" value="happy" required />
						<label class="drinkcard-cc happy" for="happy"></label>
						<input id="sat" type="radio" name="feed" value="sat" required />
						<label class="drinkcard-cc sat" for="sat"></label>
						<input id="sad" type="radio" name="feed" value="sad" required />
						<label class="drinkcard-cc sad" for="sad"></label> -->
						
						<div class="stars">
							<input class="star star-5" id="star-5" type="radio" name="star" value="5-star" />
							<label class="star star-5" for="star-5"></label>
							<input class="star star-4" id="star-4" type="radio" name="star" value="4-star" />
							<label class="star star-4" for="star-4"></label>
							<input class="star star-3" id="star-3" type="radio" name="star" value="3-star" />
							<label class="star star-3" for="star-3"></label>
							<input class="star star-2" id="star-2" type="radio" name="star" value="2-star" />
							<label class="star star-2" for="star-2"></label>
							<input class="star star-1" id="star-1" type="radio" name="star" value="1-star" />
							<label class="star star-1" for="star-1"></label>
						</div>
						
						</div>
						<textarea name="cd-textarea" placeholder="Suggestions" ></textarea>
						<br />
						<input type="submit" class="button special big" value="SEND FEEDBACK" name="sbt" style="padding-left:18px; padding-right:18px;" />
					</form>	
				</div>
			</section>
			<!-- Footer -->		
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<!--li><a href="http://www.linkedin.com/" class="icon fa-linkedin" target="blank"></a></li-->
						<li><a href="https://www.facebook.com/pagecabinet" class="icon fa-facebook" target="blank"></a></li>
						<!--li><a href="https://www.twitter.com/" class="icon fa-twitter" target="blank"></a></li-->
					</ul>
					<ul class="copyright">
						<li><img src="./images/1s.png" style="height: 40px; width: 30px;"> &copy; <?php echo date("Y"); ?> </li>
						<li><a href="./privacy.php">Privacy Policy</a></li>
						<li>Powered by: <a href="http://pagecabinet.com">@mkhizeryounas</a></li>
					</ul>
				</div>
			</footer>
	</div>
	
		<div id="wBody">
			<style>
				#wBody
				{
					margin-top:50%;
					text-align: center;
					background-color: #eee;
				}
				* {
				  -webkit-box-sizing: border-box;
					 -moz-box-sizing: border-box;
						  box-sizing: border-box;
				}


				/* The loader container */
				.loader {
				  position: absolute;
				  top: 50%;
				  left: 50%;
				  
				  width: 200px;
				  height: 200px;
				  
				  margin-top: -100px;
				  margin-left: -100px;
				}


				/* The dot */
				.dot {
				  position: absolute;
				  top: 50%;
				  left: 50%;
				  z-index: 10;

				  width: 160px;
				  height: 100px;
				  
				  margin-top: -50px;
				  margin-left: -80px;

				  border-radius: 5px;

				  background-color: #1e3f57;

				  transform-type: preserve-3d;

				  animation: dot1 3s cubic-bezier(.55,.3,.24,.99) infinite;
				}

				.dot:nth-child(2) {
				  z-index: 11;
				  
				  width: 150px;
				  height: 90px;
				  
				  margin-top: -45px;
				  margin-left: -75px;
				  
				  border-radius: 3px;
				  
				  background-color: #3c617d;
				  
				  animation-name: dot2;
				}

				.dot:nth-child(3) {
				  z-index: 12;
				  
				  width: 40px;
				  height: 20px;
				  
				  margin-top: 50px;
				  margin-left: -20px;
				  
				  border-radius: 0 0 5px 5px;
				  
				  background-color: #6bb2cd;
				  
				  animation-name: dot3;
				}

				@keyframes dot1 {
				  3%, 97% {
					width: 160px;
					height: 100px;

					margin-top: -50px;
					margin-left: -80px;
				  }
				  30%, 36% {
					width: 80px;
					height: 120px;

					margin-top: -60px;
					margin-left: -40px;
				  }
				  63%, 69% {
					width: 40px;
					height: 80px;

					margin-top: -40px;
					margin-left: -20px;
				  }
				}

				@keyframes dot2 {
				  3%, 97% {
					width: 150px;
					height: 90px;

					margin-top: -45px;
					margin-left: -75px;
				  }
				  30%, 36% {
					width: 70px;
					height: 96px;

					margin-top: -48px;
					margin-left: -35px;
				  }
				  63%, 69% {
					width: 32px;
					height: 60px;

					margin-top: -30px;
					margin-left: -16px;
				  }
				}

				@keyframes dot3 {
				  3%, 97% {
					width: 40px;
					height: 20px;

					margin-top: 50px;
					margin-left: -20px;
				  }
				  30%, 36% {
					width: 8px;
					height: 8px;

					margin-top: 49px;
					margin-left: -5px;
					
					border-radius: 8px;
				  }
				  63%, 69% {
					width: 16px;
					height: 4px;

					margin-top: -37px;
					margin-left: -8px;
					
					border-radius: 10px;
				  }
				}
			</style>
			<div class="loader">
			  <div class="dot"></div>
			  <div class="dot"></div>
			  <div class="dot"></div>
			</div>
		</div>
	</body>
</html>