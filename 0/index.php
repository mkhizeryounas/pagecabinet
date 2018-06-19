<?php
	error_reporting(0); 
	require("./app/index.php"); 
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
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Custom Theme files -->

<script src='https://www.google.com/recaptcha/api.js'></script>

<style>
.banner{
	min-height: 100vh;
	background: url("images/overlay.png"), url('<?php echo $cover_src; ?>')no-repeat center top;
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
					<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class=""></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href=./"> <img src="<?php echo $dp_src; ?>" style="width:80px; height:80px;" alt=""/> </a>
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
	   <script src="js/responsiveslides.min.js"></script>
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
			   <!--h3 class="head_1">Welcome</h3>
			   <h3 class="head_2">to the</h3>
			   <h3 class="head_3">Delish</h3>
			   <!--h3 class="head_4">At vero eos</h3-->
			   <div style="color:#f7f7f7; font-size: 30px;">
					<strong style="color:#ff6b4a;"><?php echo $page_name; ?><br /></strong>
					<?php echo $about; ?>
			   </div>
			   <br><a class="hvr-bounce-to-top btn_1" href="#about">Explore</a>
			  </div>
			 </li>
			 <!--li>
		  	  <div class="slide_text">
			    <h3>Let's Bake Together</h3>
			    <a class="hvr-bounce-to-top btn_1" href="#services">Services</a>
			  </div>
			 </li>
			 <li>
		  	   <div class="slide_text">
			    <h3>Through enjoyment we endure</h3>
			    <a class="hvr-bounce-to-top btn_1" href="#contact">Contact Us</a>
			  </div>
			 </li-->
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
					background: url(images/icon_top.png) no-repeat;
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
  
	<!--div class="container">
		<h1>Our Advantages</h1> 
		<div class="col-md-4 box_7">
  			<div class="list styled custom-list custom-list1">
				<ul>
					<li><span class="dropcap">1.</span>  
					   <div class="item_content">
						<h5><a href="javascript:void(0);">Something amazing about us</a></h5> 
						<p> Something great about our product, to let people know why we are differnt from others, and why they should buy our product.</p>
						<p class="m_1">More about the product, why should someone buy from us.</p>
					   </div>
					</li>
			    </ul>
			</div>
	   </div>
   	   <div class="col-md-4 box_7">
  			<div class="list styled custom-list custom-list1">
				<ul>
					<li><span class="dropcap">2.</span>  
					   <div class="item_content">
						<h5><a href="javascript:void(0);">Something amazing about us</a></h5> 
						<p> Something great about our product, to let people know why we are differnt from others, and why they should buy our product.</p>
						<p class="m_1">More about the product, why should someone buy from us.</p>
					   </div>
					</li>
			    </ul>
			</div>
	   </div>
   	   <div class="col-md-4 box_7">
  			<div class="list styled custom-list custom-list1">
				<ul>
					<li><span class="dropcap">3.</span>  
					   <div class="item_content">
						<h5><a href="javascript:void(0);">Something amazing about us</a></h5> 
						<p> Something great about our product, to let people know why we are differnt from others, and why they should buy our product.</p>
						<p class="m_1">More about the product, why should someone buy from us.</p>
					   </div>
					</li>
			    </ul>
			</div>
	   </div>
   	   
   	   <div class="clearfix"> </div>
	</div>
</div-->
 
<!--div class="testimonial">
	<div class="container">
		<h3>Testimonials</h3>
		<div class="col-md-4">
			<div class="testi-item">
				<blockquote class="testi-item_blockquote">
					<a href="#">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</a>
					<small class="testi-meta"><span class="user">Many desktop</span>
					  <a class="testi-url" href="http://demolink.org">http://demolink.org</a>
				    </small>
					<div class="clearfix"></div>
				</blockquote>
			</div>
		</div>
		<div class="col-md-4">
			<div class="testi-item">
				<blockquote class="testi-item_blockquote">
					<a href="#">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</a>
					<small class="testi-meta"><span class="user">Many desktop</span>
					  <a class="testi-url" href="http://demolink.org">http://demolink.org</a>
				    </small>
					<div class="clearfix"></div>
				</blockquote>
			</div>
		</div>
		<div class="col-md-4">
			<div class="testi-item">
				<blockquote class="testi-item_blockquote">
					<a href="#">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</a>
					<small class="testi-meta"><span class="user">Many desktop</span>
					  <a class="testi-url" href="http://demolink.org">http://demolink.org</a>
				    </small>
					<div class="clearfix"></div>
				</blockquote>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div> 
</div-->


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
			
  		  <!--div class="service_grid_1">
  		  	<h4>Cupcakes</h4>
  		  	<p>We bake custom designed cupcakes for any kind of event. You can select any cake from our designs or you can give us your design and we'll bake for you.</p>
  		  </div-->
		  
	   </div>
	   
   	   <div class="clearfix"> </div>
	</div>
	
	<div class="about_middle text-center" id="gallery" style="background-color:; padding-bottom:15vh;">
		<div class="container">
			<h1>Gallery</h1>
			<!--h3><a href="#">There are many other services we offer</a></h3-->
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

<!--div class="menu">
  <div class="container">
     <div class="image-right-top"><img src="images/2.png" alt=""/></div>
        <div class="menu_box">
    	     <div class="col-md-4 col_1">
                <div class="title-icon"><span class="icon_2">1</span></div>
                <div class="title"><h3>− Breakfast −</h3></div>
                
                <h4>Here will be food name</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                <h5>$6.66</h5>
                
                <h4>Here will be food name</h4>
                <p>Lorem Ipsum is simply dummy text.</p>
                <h5>$7.66</h5>
                
                <h4>Here will be food name</h4>
                <h5>$2.66</h5>
                
                <h4>Here will be food name</h4>
                <h5>$5.66</h5>
                
                <h4>Here will be food name</h4>
                <p>Lorem Ipsum is simply dummy.</p>
                <h5>$8.66</h5>
                
                <h4>Here will be food name</h4>
                <h5>$7.66</h5>
           </div>
           <div class="col-md-4 col_1">
                <div class="title-icon"><span class="icon_2">2</span></div>
                <div class="title"><h3>− Lunch −</h3></div>
                
                <h4>Here will be food name</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                <h5>$8.66</h5>
                
                <h4>Here will be food name</h4>
                <p>Lorem Ipsum is simply dummy text.</p>
                <h5>$5.66</h5>
                
                <h4>Here will be food name</h4>
                <h5>$9.66</h5>
                
                <h4>Here will be food name</h4>
                <h5>$10.66</h5>
                
                <h4>Here will be food name</h4>
                <p>Lorem Ipsum is simply dummy.</p>
                <h5>$15.66</h5>
                
                <h4>Here will be food name</h4>
                <h5>$25.66</h5>
          </div>
          <div class="col-md-4 col_1">
                <div class="title-icon"><span class="icon_2">3</span></div>
                <div class="title"><h3>− Dinner −</h3></div>
                
                <h4>Here will be food name</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting.</p>
                <h5>$15.66</h5>
                
                <h4>Here will be food name</h4>
                <p>Lorem Ipsum is simply dummy text.</p>
                <h5>$8.66</h5>
                
                <h4>Here will be food name</h4>
                <h5>$5.66</h5>
                
                <h4>Here will be food name</h4>
                <h5>$15.66</h5>
                
                <h4>Here will be food name</h4>
                <p>Lorem Ipsum is simply dummy.</p>
                <h5>$35.66</h5>
                
                <h4>Here will be food name</h4>
                <h5>$45.66</h5>
          </div>
          <div class="clearfix"> </div>
        </div>
    </div>
</div-->


<div class="about_top" id="contact" style="background-color:#fff; padding-bottom:20vh;">
	<div class="container">
	   <div class="contact-form">
				<div class="col-md-6 contact-grid">
					<h3>Contact Form</h3>
					<form action="contactForm.php" method="post">
						<p class="your-para">Your name:</p>
						<input name="cd-name" type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" required>
						<p class="your-para">Your mail:</p>
						<input name="cd-email" type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" required>
						<p class="your-para">Your phone number:</p>
						<input name="cd-phone" type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" required>
						<input name="to" type="hidden" value="<?php echo $email; ?>" style="dsiplay:hidden;" required>
						<input name="site" type="hidden" value="https://pagecabinet.com/0/?fid=<?php echo $_GET['fid']; ?>" style="dsiplay:hidden;" required>
						<p class="your-para">Your message:</p>
						<textarea name="cd-textarea" cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}" required></textarea>
						<div class="g-recaptcha" data-sitekey="6LdDZxkTAAAAAAdPFGRemEgcd89hUlWKN2iYwNHQ"></div><br />
						<div class="send">
							<input name="sbt" type="submit" value="Send">
						</div>
					</form>
				</div>
				<div class="col-md-6 contact-in">
					<h3>Contact Information</h3>
					<p class="sed-para"> Feel free to contact for any query.</p>
					<!--p class="para1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.  </p-->
					
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
								echo '<p><b>Tel:</b> '.$phone.'</p>';
							if(!empty($email))
								echo '<p><b>Email:</b> <a href="mailto:'.$email.'">'.$email.'</a></p>';
							echo '</div>
							<div class="clearfix"> </div>
						</div>';
					  ?>
					<!--div style="background: url(./images/content_newsletter-bg.gif); height:200px; text-align: center; padding-top: 15px;">
						<img src="./images/n.png" style="height:50px; width:55px;padding-bottom: 8px;" draggable="no" />
						
						<!-- Begin MailChimp Signup Form >
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:url(./images/content_newsletter-bg.gif); color:#f2f2f2; clear:left; font:11px ; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup" style="position:;">
<form action="//delish.us12.list-manage.com/subscribe/post?u=eff0b338b1b61ea7daf9272a0&amp;id=25f22b9f84" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2  style="display:none;" align="center">Subscribe to our mailing list</h2>
<div style="display:none;" class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label style="display:none;" for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" placeholder="Email Address" style="border-radius: 7px; color: #222;" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group" style="display:none;">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group" style="display:none;">
	<label for="mce-LNAME">Last Name </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none; font-size:11px;"></div>
		<div class="response" id="mce-success-response" style="display:none; font-size:11px;"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups>
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_eff0b338b1b61ea7daf9272a0_25f22b9f84" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" onclick="" value="Subscribe" style="background-color: #7ab55c;" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->
					
					</div>
					
					
				</div>
				<div class="clearfix"> </div>
	  </div>
  </div>
</div>
				<div class="clearfix"> </div>

<!--div class="box_3"> </div-->

<!--div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>
</div-->
<div class="footer" style="background-color:#f0f0f0;">
	<div class="container">
	    <div class="col-md-6 col_2">
			<a href="https://www.facebook.com/<?php echo $page_id; ?>" target="blank"><li class="icon fa fa-facebook fa-2x"></li></a>
		  <!--ul><li><h5> Monday to Sunday</h5><p>Timing: <span>09:00am - 11:00pm</span></p><p><span></span></p></li>
		    <!--li><h5>Saturday &amp; Sunday</h5><p>Lunch: <span>11pm – 05pm</span></p><p>Dinner: <span>04pm – 11pm</span></p></li>
		  </ul-->
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
<script src="js/bootstrap.min.js"></script>
<!------ Light Box ------>
<link rel="stylesheet" href="css/swipebox.css">
<script src="js/jquery.swipebox.min.js"></script> 
    <script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
<!------ Eng Light Box ------>	   
<!-- Prettify -->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
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