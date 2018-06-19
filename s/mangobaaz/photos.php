<?php
	error_reporting(0);
	//require("./config.php");
	$fidx=basename(__DIR__);
		$access_token="1539032803004026|Ns9xYJcoF5tq7zR1TQjkCIxlB9I";
		
		if(!empty($fidx))
			$page_id = $fidx;
		else
		{	
		?>
			<script>
				window.location = "../";
			</script>
		<?php
		}
		
		//$page_id = isset($_GET['page_id']) ? $_GET['page_id'] : "";
				
		$fields="id,name,cover,picture.type(large)";		
		 
		$json_link = "https://graph.facebook.com/{$page_id}/?fields={$fields}&access_token={$access_token}";
		$json = file_get_contents($json_link);
		 
		$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
		 
		
		$page_name = isset($obj['name']) ? $obj['name'] : "";
		
		$cover_src = isset($obj['cover']['source']) ? $obj['cover']['source'] : "";
		$cover_src = str_replace("/p240x240", "", $cover_src);
		$dp_src = isset($obj['picture']['data']['url']) ? $obj['picture']['data']['url'] : "";		
	
		$album_id = isset($_GET['album_id']) ? $_GET['album_id'] : die('Album ID not specified.');
		$album_name = isset($_GET['album_name']) ? $_GET['album_name'] : die('Album name not specified.');

		$page_title = "{$album_name} Photos";
		
		
		if($page_title == "" || $page_name == "" )
		{
			?>
				<script>
					window.location = "../";
				</script>
			<?php
		}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/jpg" href="<?php echo $dp_src; ?>">
<title><?php echo $page_name; ?> | Gallery</title>
<link href="../ShelfTheme/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../ShelfTheme/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
    <style>
	body{
		background:#f9f9f9;
	}
	h1{
		color: #80888C;
	}
    .photo-thumb{
        width:214px;
        height:214px;
        float:left;
        border: thin solid #d1d1d1;
        margin:0 1em 1em 0;
    }
 
    div#blueimp-gallery div.modal {
		overflow: visible
    }
	
.ban2 .container {
    position: ;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: none;
    color: #FFF;
}
.ban2 .container {
    display: block;
    background: rgba(0, 0, 0, .6);
}

    </style>
</head>
<body>


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
					background: url(../ShelfTheme/images/arrow.png) no-repeat;
					z-index:1;
				">Scroll</a>
		<div id="header-lg" class="" style="background-image: url('<?php echo $cover_src; ?>'); background-size: 100%;">
			<div class="ban2" role="navigation">
				<div class="container">
					<div class="header">
						<div class="logo">
							<a href="#"><img src="<?php echo $dp_src; ?>" width="80" height="80" alt=" " /></a>
						</div>
						<div class="logo-right">
							<span class="menu"><img src="../ShelfTheme/images/menu.png" alt=" "/></span>
								<nav class="cl-effect-1">
									<ul class="nav1">
										<li><a href="./index.php#banner" class="act">Home</a></li>
										<li><a href="./index.php#about" class="act">About</a></li>
										<li><a href="./index.php#portfolio" class="act">Gallery</a></li>
										<li><a href="./index.php#news" class="act">News</a></li>
										<li><a href="./index.php#contact" class="act">Contact</a></li>
									</ul>
								</nav>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>				
			</div>
		</div>
<div class="container" style="">
	<?php
	echo "<h1 class='page-header'>";
		echo "<a href='./#gallery'>Albums</a> / {$page_title}";
	echo "</h1>";
	 
	$access_token="1539032803004026|Ns9xYJcoF5tq7zR1TQjkCIxlB9I";
	$json_link = "https://graph.facebook.com/{$album_id}/photos?fields=source,name&access_token={$access_token}";
	$json = file_get_contents($json_link);
	 
	$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
	 
	$photo_count = count($obj['data']);
	
	for($x=0; $x<$photo_count; $x++){
 
    $source = isset($obj['data'][$x]['source']) ? $obj['data'][$x]['source'] : "";
    $name = isset($obj['data'][$x]['name']) ? $obj['data'][$x]['name'] : "";
 
    echo "<a href='{$source}' class='swipebox' data-gallery>";
        echo "<div class='photo-thumb'>";
				echo "<img class='photo-thumb' src='{$source}' alt=''>";
        echo "</div>";
    echo "</a>";
 
}
	?>
	<link rel="stylesheet" href="../ShelfTheme/css/swipebox.css">
	<script src="../ShelfTheme/js/jquery.swipebox.min.js"></script> 
		<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
		</script>
</div>
 <!-- Footer
			================================================== -->
			<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-left">
				<p>Copyright © <?php echo date("Y")." ".$page_name ; ?>. All Rights Reserved | Powerd by:<a href="http://pagecabinet.com/"><img src="../ShelfTheme/images/1.png" style="height: 60px; width: 130px;"></a></p>
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
</body>
</html>