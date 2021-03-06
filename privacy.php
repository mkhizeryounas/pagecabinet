<!DOCTYPE HTML>
<html>
	<head>
		<title>Privacy | Page Cabinet</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="Convert your facebook page into website with one click." />
		<meta name="keywords" content="facebook, website, connect, convert, domain, free" />
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
	</head>
	<!-- <body class="landing" oncontextmenu="return false">	 -->
	<body class="landing">
	<div id="oBody">	
		<div class="se-pre-con"></div>
			<script language="javascript">
				function waitingFunc()
				{
					if($("#linkInput").val() ) {
						
						$("#oBody").hide(500);
						$("#wBody").show(500);
						
					}
				}
				//
			</script>
			
			
			
		<!-- Header -->
			<header id="header" style="background-image: url('./images/banner.jpg'); height: 120px;" class="alt">
				<h1><a href="./"><img src="./images/1.png" width="130" height="70" style="vertical-align:center;" /></a></h1>
				<nav id="nav">
					<ul>
						 <li><a href="./#banner">Home</a></li> 
						 <li><a href="./#one">About</a></li>
						 <li><a href="./#two">Pricing</a></li>
						 <li><a href="./#feedback">Feedback</a></li>
					</ul>

				</nav>
			</header>

		<!-- Banner 
			<section id="banner" style="height:100vh;">
				<h3 style="color:#f9f9f9;">Turn your Facebook Page into a responsive Website</h3>
				<form action="./getIdRedirect.php" method="post" autocomplete="off" style="padding-bottom:100px;">
					<input type="text" id="linkInput" name="fbid" style=" font-color: #fff; height: 45px; width: 80%; border-radius:360px; opacity: 0.8; background-color:#f9f9f9; margin-left: auto; text-align:center; margin-bottom: 10px; margin-right: auto;" placeholder="Paste link of a facebook page" required>
					<br />
					<input type="submit" onclick="waitingFunc()" class="button special big" value="Flame" name="sbt" style="padding-left:18px; padding-right:18px;" />
				</form>
			</section> -->

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
			<section id="one" class="wrapper style1" style="background:#f9f9f9; height: ;">
					<div style="width: 80%; margin-left: auto; margin-right: auto;">
						<header align="center" style="padding-top: 40px;">
							<h2>Privacy Policy</h2>
							<!-- <li class="icon fa fa-bug"> Under construction</li> -->
						</header>
						<ul>
							
							<li>
								<h3>
									privacy policy
								</h3>
								<p>
									Any personal information received will only be used to fill your order or to contact you. We will not sell or redistribute your information to anyone.
								</p>
							</li>
							
							<li>
								<h3>
									Changes to this privacy policy
								</h3>
								<p>
									Pagecabinet may revise, modify or update this policy. We will notify you about significant changes by sending a notice to the primary email address specified in your particular Pagecabinet account.
								</p>
							</li>
						</ul>
					</div>
				</section>

			<!-- <section class="wrapper style1 special" id="feedback">			
				<div class="cc-selector">
					<form action="feedbackForm.php" class="cd-form floating-labels" method="post">
						<legend><b>Feedback</b></legend>
						<div class="icon">
							<input class="email" type="email" name="cd-email" id="cd-email" placeholder="Email" required>
						</div>
						<div style="margin-left:auto; margin-right:auto;" >
						<strong>How do you like our services?</strong><br />
												
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
			</section> -->
			<!-- Footer -->		
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="http://www.linkedin.com/" class="icon fa-linkedin" target="blank"></a></li>
						<li><a href="https://www.facebook.com/lcflame" class="icon fa-facebook" target="blank"></a></li>
						<li><a href="https://www.twitter.com/" class="icon fa-twitter" target="blank"></a></li>
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