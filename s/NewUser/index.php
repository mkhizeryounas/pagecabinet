<?php 
	error_reporting(0);
	//require("./config.php");
	$fidx=basename(__DIR__);
	include('../ShelfTheme/cachestart.php');
	require("../../0/app/index.php");  
	
?>

<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $page_name; ?></title>
<link rel="shortcut icon" type="image/jpg" href="<?php echo $dp_src; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php echo $about; ?>" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="../ShelfTheme/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../ShelfTheme/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="../ShelfTheme/css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Custom Theme files -->

<style>
.banner{
	min-height: 100vh;
	background: url("../ShelfTheme/images/overlay.png"), url('<?php echo $cover_src; ?>')no-repeat center top;
	background-size:cover;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
}

</style>

<script>

</script>

</head>
<body>

<div class="se-pre-con"></div>
			<script language="javascript">
			$(window).load(function() {
					// Animate loader off screen
					$(".se-pre-con").fadeOut("slow");;
				});
			</script>
<!--banner-->
	<div class="banner" id="home" style="">
		<!--header-->
		<div class="headder" style="">
			<div class="container">				
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class=""></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="./"> <img src="<?php echo $dp_src; ?>" style="width:80px; height:80px;" alt=""/> </a>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#home" class="active">Home</a></li>
								<li><a href="#about">About us</a></li>
								<li><a href="#news">News</a></li>
								<li><a href="#gallery">Gallery</a></li>
								<li><a href="#contact">Contact</a></li>
							</ul>	
						</div>	
						<div class="clearfix"> </div>
					</div>	
				</nav>				
			</div>	
		</div>	
		<!--//header-->
		<!-- banner-text Slider starts Here -->
	   <script src="../ShelfTheme/js/responsiveslides.min.js"></script>
		<script>
			// You can also use "$(window).load(function() {"
				$(function () {
				// Slideshow 3
					$("#slider3").responsiveSlides({
					auto: true,
					pager:true,
					nav:false,
					speed: 500,
					namespace: "callbacks",
					before: function () {
					$('.events').append("<li>before event fired.</li>");
					},
					after: function () {
						$('.events').append("<li>after event fired.</li>");
					}
				});	
			});
			
			
			$(document).ready(function() {
			  function filterPath(string) {
			  return string
			    .replace(/^\//,'')
			    .replace(/(index|default).[a-zA-Z]{3,4}$/,'')
			    .replace(/\/$/,'');
			  }
			  var locationPath = filterPath(location.pathname);
			  var scrollElem = scrollableElement('html', 'body');
			 
			  $('a[href*=#]').each(function() {
			    var thisPath = filterPath(this.pathname) || locationPath;
			    if (  locationPath == thisPath
			    && (location.hostname == this.hostname || !this.hostname)
			    && this.hash.replace(/#/,'') ) {
			      var $target = $(this.hash), target = this.hash;
			      if (target) {
			        var targetOffset = $target.offset().top;
			        $(this).click(function(event) {
			          event.preventDefault();
			          $(scrollElem).animate({scrollTop: targetOffset}, 600, function() {
			            location.hash = target;
			          });
			        });
			      }
			    }
			  });
			 
			  // use the first element that is "scrollable"
			  function scrollableElement(els) {
			    for (var i = 0, argLength = arguments.length; i <argLength; i++) {
			      var el = arguments[i],
			          $scrollElement = $(el);
			      if ($scrollElement.scrollTop()> 0) {
			        return el;
			      } else {
			        $scrollElement.scrollTop(1);
			        var isScrollable = $scrollElement.scrollTop()> 0;
			        $scrollElement.scrollTop(0);
			        if (isScrollable) {
			          return el;
			        }
			      }
			    }
			    return [];
			  }
			 
			});

		</script>
		<!--//End-slider-script -->
		<div class="banner-title">
		  <div  id="top" class="callbacks_container">
		    <div class="container">
		  	<ul class="rslides" id="slider3">
		  	 <li>
		  	  <div class="slide_text">
			   <div style="color:#f7f7f7; font-size: 30px;">
					<strong style="color:#ff6b4a;"><?php echo $page_name; ?><br /></strong>
					<?php echo $about; ?>
			   </div>
			   <br><a class="hvr-bounce-to-top btn_1" href="#about">Explore</a>
			  </div>
			 </li>
			</ul>
		  </div>
		</div>
	</div>
  </div>
  
  
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
					transition: 1s;
					background: url(../ShelfTheme/images/icon_top.png) no-repeat;
					z-index:1;
				">Scroll</a>
			<!-- End Homer -->
			
  
  <div class="about_middle text-center" id="about" style="background-color:; padding-bottom:15vh;">
  
	<div class="">
		<div class="container">

			<h2>About Us</h2>
			<h3><a href="javascript:void;">Who we are</a></h3>
			<?php
						if($page_description != "")
						{
							echo '
								
								<p>
									'.nl2br($page_description).'<br /><br />
								</p>
							';
						}
					?>
			<!--div class="box_1"> </div-->
		</div>
	</div>
  
<div class="about_middle text-center" id="news" style="background-color:#f9f9f9; padding-bottom:;">
	<div class="container">
		<h2>News</h2> 
		<div class="col-md-4 box_2">
  			<img src="<?php echo $cover_src; ?>" class="img-responsive" alt=""/>
			<p><i class="fa fa-newspaper-o"></i> - All Latest News: </p>
	   </div>
   	   
		  <?php  
						for($x=0; $x < 2; ++$x)
						{
							echo '<div class="col-md-4 box_2">';
							$u = 'https://graph.facebook.com/'.$post[$x]["id"].'/picture?width=500&amp;height=500';
							if(getimagesize($u))
								$f_img = $u;
							else
								$f_img = $dp_src;			
							echo
								'<div class="service_grid_1 ';
								
								if($x==0)
									echo "txt_1";
								
								echo '">
										<a href="https://facebook.com/'.$post[$x]["id"].'" class="image fit" target="blank"><img src="'.$f_img.'" height="160" width="220" alt="" /></a>
										<p class="nowrap">'.nl2br($post[$x]["message"]);
										if(!strpos($post[$x]["link"], ".facebook.com/") || !empty($post[$x]["link"]))
										{
											echo " <br /><br /> <a href='https://facebook.com/".$post[$x]['id']."' target='blank'>View Artical Here</a><br />";
										}
										echo '</p>
								</div>
								</div>';
						}
					?> 
			
	   </div>
	   
   	   <div class="clearfix"> </div>
	</div>
	
	<div class="about_middle text-center" id="gallery" style="background-color:; padding-bottom:15vh;">
		<div class="container">
			<h1>Gallery</h1>
			<p><li class="fa fa-rocket"></li> - Following are some of our latest pictures.</p>
		</div>
	</div>
	<div id="owl-demo3" class="owl-carousel owl-carousel2">
		<?php
		
		
		$album_id = $album_tl_id;
		
		$access_token="1539032803004026|Ns9xYJcoF5tq7zR1TQjkCIxlB9I";
		$json_link = "https://graph.facebook.com/v2.3/{$album_id}/photos?fields=source,name&access_token={$access_token}";
		$json = file_get_contents($json_link);
		 
		$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
		 
		$photo_count = count($obj['data']);
		
		for($x=0; $x<$photo_count; $x++)
		{
		 
			$source = isset($obj['data'][$x]['source']) ? $obj['data'][$x]['source'] : "";
			$name = isset($obj['data'][$x]['name']) ? $obj['data'][$x]['name'] : "";
		 
			echo
				'<div class="item">
					<img class="lazyOwl" style="height:35vh;" data-src="'.$source.'" alt="Lazy Owl Image">
					  <a href="'.$source.'" class="swipebox"  title="'.$name.'"><div class="portfolio_head">
					   <h3><img src="images/link.png" alt=""/></h3>
					  </div></a>
				</div>';
		}
		?>
	</div>
</div>
		<div class="clearfix"> </div>


<div class="about_top" id="contact" style="background-color:#fff; padding-bottom:20vh;">
	<div class="container">
	   <div class="contact-form">
				<div class="col-md-6 contact-grid">
					<h3>Contact Form</h3>
					<form action="" method="post">
						<p class="your-para">Your name:</p>
						<input name="cd-name" type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" required>
						<p class="your-para">Your mail:</p>
						<input name="cd-email" type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" required>
						<p class="your-para">Your phone number:</p>
						<input name="cd-phone" type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" required>
						<p class="your-para">Your message:</p>
						<textarea name="cd-textarea" cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}" required></textarea>
						<div class="send">
							<input name="sbt" type="submit" value="Send">
						</div>
					</form>
				</div>
				<div class="col-md-6 contact-in">
					<h3>Contact Information</h3>
					<p class="sed-para"> Feel free to contact for any query.</p>
					</div>
					<?php
						echo '
						<div class="more-address">';
							if(!empty($location))
								echo '
								<div class="">
									<p><b>Address:</b> '.$location.'</p>
								</div>';
							echo '<div class="">';
							if(!empty($phone))
								echo '<p>Tel : '.$phone.'</p>';
							if(!empty($email))
								echo '<p><b>Email:</b> <a href="mailto:'.$email.'">'.$email.'</a></p>';
							echo '</div>
							<div class="clearfix"> </div>
						</div>';
					  ?>
					
				</div>
				<div class="clearfix"> </div>
	  </div>
  </div>
</div>
				<div class="clearfix"> </div>

<div class="footer" style="background-color:#f0f0f0;">
	<div class="container">
	    <div class="col-md-6 col_2">
			<a href="https://www.facebook.com/<?php echo $page_id; ?>" target="blank"><li class="icon fa fa-facebook fa-2x"></li></a>
		</div>
		<div class="col-md-6 col_3">
		  <div class="col_3">
		  <ul class="menu">
            <li><a href="#home">Home</a></li> |
            <li><a href="#about">About</a></li> |
            <li><a href="#news">News</a></li> |
            <li><a href="#gallery">Gallery</a></li> |
            <li><a href="#contact">Contact</a></li>
		  </ul>
		  <p>Copyright © <?php echo date("Y"); ?> <?php echo $page_name; ?>. All Rights Reserved. | Powered by: <a href="http://pagecabinet.com/" target="_blank"><strong>pagecabinet</strong></a> </p>
		  </div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<script src="../ShelfTheme/js/bootstrap.min.js"></script>
<!------ Light Box ------>
<link rel="stylesheet" href="../ShelfTheme/css/swipebox.css">
<script src="../ShelfTheme/js/jquery.swipebox.min.js"></script> 
    <script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
<!------ Eng Light Box ------>	   
<!-- Prettify -->
<link href="../ShelfTheme/css/owl.carousel.css" rel="stylesheet">
<script src="../ShelfTheme/js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
		$("#owl-demo3").owlCarousel({
			items : 6,
			lazyLoad : true,
			autoPlay : true,
			navigation: false,
			pagination: false,
		 });
		});
	</script>
</body>
</html>		