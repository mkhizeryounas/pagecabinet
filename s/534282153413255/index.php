<?php 
	error_reporting(0);
	//require("./config.php");
	$fidx=basename(__DIR__);
	include('../ShelfTheme/cachestart.php');
	require("../../0/app/index.php");  
	
?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/jpg" href="<?php echo $dp_src; ?>">
<title><?php echo $page_name; ?></title>
<link href="../ShelfTheme/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../ShelfTheme/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!-- js -->
<script src="../ShelfTheme/jquery-1.11.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!-- //js -->
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo $about; ?>" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../ShelfTheme/js/move-top.js"></script>
<script type="text/javascript" src="../ShelfTheme/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<style>
.banner .container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: none;
    color: #FFF;
}
.banner .container {
    display: block;
    background: rgba(0, 0, 0, .6);
}
#news: hover{
	background-color: #f9f9f9;
	-moz-box-shadow: 0 0 20px #ccc; 
	-webkit-box-shadow: 0 0 30px #ccc; 
	box-shadow: 0 0 40px #ccc; 
}
.ownGal{
	float:left;
}
.gridGal{
	float:left;
	margin:0;
	padding:0;
	color: #222;
}
.galImg{
	height:130px;
	width:220px;
}
</style>
</head>
<body>
<!-- banner -->
	<div class="banner" style="background-image:url('<?php echo $cover_src; ?>'); height: 100vh;">
		<div class="container">
			<div class="header">
				<div class="logo">
					<a href="#"><img src="<?php echo $dp_src; ?>" width="80" height="80" alt=" " /></a>
				</div>
				<div class="logo-right">
					<span class="menu"><img src="../ShelfTheme/images/menu.png" alt=" "/></span>
						<nav class="cl-effect-1">
							<ul class="nav1">
								<li class="cap"><a href="#banner" class="act">Home</a></li>
								<li><a href="#about" class="scroll">About</a></li>
								<li><a href="#portfolio" class="scroll">Gallery</a></li>
								<li><a href="#news" class="scroll">News</a></li>
								<li><a href="#contact" class="scroll">Contact</a></li>
							</ul>
						</nav>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!-- script for menu -->
					<script> 
						$( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						});
						});
					</script>
				<!-- //script for menu -->
			<div class="banner-info">
				<h2><?php echo $page_name; ?></h2>
				<p><?php echo $about; ?></p>
				<div class="read">
					<a href="#about" class="hvr-rectangle-out scroll">READ MORE</a>
				</div>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- about -->
	<div id="about" class="portfolio" style="background-color: #fff;">
		<div class="container">
			<center>
				<div>
					<br>
					<h2>About</h2>
					<br>
					<div class="img-holder"><img src="<?php echo $dp_src; ?>" alt=""></div>
					<hr />
					<?php
						if($page_description != "")
						{
							echo '
								<h2>Description</h2>
								<p>
									'.nl2br($page_description).'
								</p>
							';
						}
					?>
				</div>
			</center>
		</div>
	</div>
<!-- //about -->
<!-- portfolio -->
	<div id="portfolio" class="portfolio">
		<div class="container">
			<h2>Gallery</h2>
				<?php
					for($x=0; $x<10; $x++)
					{
						if(empty($album[$x]["id"]))
							break;
						$show_pictures_link = "photos.php?album_id=".$album[$x]["id"]."&album_name=".$album[$x]["name"];
						echo '
								<div class="ownGal" style="padding-top: 4px; padding-bottom:4px;">	
									<div class="gridGal">
										<a href="'.$show_pictures_link.'" class="b-link-stripe b-animate-go   "  title="">
											<img class="galImg" src="https://graph.facebook.com/'.$album[$x]["id"].'/picture?type=album" alt=" " title="" />
											<div class="b-wrapper">
												<h3 class="b-animate b-from-left    b-delay03 ">
													<div class="gal-info">
														<p><strong>'.$album[$x]["name"].'</strong></p>  
													</div>
												</h3>
											</div>
										</a>
									</div>
									<br><br>
								</div>
							';
					}
				?> 
				<div class="clearfix"> </div>
		</div>
	</div>
<link rel="stylesheet" href="../ShelfTheme/css/swipebox.css">
	<script src="../ShelfTheme/js/jquery.swipebox.min.js"></script> 
		<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
		</script>
<!-- //portfolio -->

<!-- news -->

<div id="news" class="portfolio" style="background-color: #fff;">
		<div class="container">
			<center>
				<div class="portfolio-grid">
					<br>
					<h2 align="center">News</h2>
					<?php  
						for($x=0; $x < 3; ++$x)
						{
							$u = 'https://graph.facebook.com/'.$post[$x]["id"].'/picture?width=500&amp;height=500';
							if(getimagesize($u))
								$f_img = $u;
							else
								$f_img = $dp_src;			
							echo
								'<div class="col-md-4 portfolio-grid" id="news" style="min-width:230px; max-width:360px; padding-top: 4px; padding-bottom:4px;">
									<article class="portfolio-grid1">
										<a href="https://facebook.com/'.$post[$x]["id"].'" class="image fit" target="blank"><img src="'.$f_img.'" height="160" width="220" alt="" /></a>
										<p class="nowrap">'.nl2br($post[$x]["message"]);
										if(!strpos($post[$x]["link"], ".facebook.com/") || !empty($post[$x]["link"]))
										{
											echo " <br /><br /> <a href='https://facebook.com/".$post[$x]['id']."' target='blank'>View Artical Here</a><br />";
										}
										echo '</p>
									</article>
								</div>';
						}
					?> 
				</div>
			</center>
		</div>
	</div>

<!-- //news -->

<!-- contact -->
	<div class="contact" id="contact">
		<div class="container">
			<h2>Contact</h2>
			<div class="contact-info">
				<ul>
					<li class="first">
						<div class="position">
							<a href="#" class=" icon user"></a><input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
							<div class="clear"></div>
							<div class="dot">
								<span> </span>
							</div>
						</div>
					</li>
					<li class="first">
						<div class="position">
							<a href="#" class=" icon email"></a><input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
							<div class="clear"></div>
							<div class="dot">
								<span> </span>
							</div>
						</div>
					</li>
					<div class="clearfix"> </div>
					<li class="second">
						<div class="position">
							<a href="#" class=" icon msg"></a><textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Comments';}">Your Message . . .</textarea>
							<div class="clear"></div>
							<div class="dot1">
								<span> </span>
							</div>
						</div>
					</li>
				</ul>
				<input type="submit" onclick="myFunction()" value="Send Message">
			</div>
		</div>
	</div>
<!-- //contact -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-left">
				<p>Copyright © <?php echo date("Y")." ".$page_name ; ?>. All Rights Reserved | Powerd by: <a href="http://pagecabinet.com/"><img src="../ShelfTheme/images/1.png" style="height: 60px; width: 130px;"></a></p>
			</div>
			<div class="footer-right">
				<ul>
					<a href="https://www.facebook.com/<?php echo $page_id; ?>" target="blank"><li class="icon fa fa-facebook fa-2x"></li></a>
					
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>

<?
	
	include('../ShelfTheme/cacheend.php');
?>