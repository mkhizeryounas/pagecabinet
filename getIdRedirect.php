<?php
	error_reporting(0);
	include_once("analyticstracking.php");
	require("connects/connect.php");
	
	$fbid;
	$fbid2;
	$fbid3;
	$f2;
	
	$access_token="EAAV3vfZBFTnoBACSSJ8W0rZCv1tRHtT5I7BjROUhLS6QenOCRjCOxZAP8WtBepsLOyagfKRoKIBpMA7Eak3UgExJg6RVurLphw9EIrtPL8vOwfMiQ1Lv02LgkQ3arEXkAdkJPvMNE67h0XOJrT6RUab2uKCY8PTiEHRq8ZBZAiAZDZD";
	if(isset($_GET["fbid"]))
	{
		$fbid = $_GET["fbid"];
		$fbid2 = $_GET["fbid"];
		
		$fbid = str_replace("https://www.facebook.com/", "", $fbid);
		$fbid = str_replace("https://m.facebook.com/", "", $fbid);
		$fbid = str_replace("https://web.facebook.com/", "", $fbid);
		
		$fbid3 = $fbid;
		$fbid3 = preg_replace('/\D/', '', $fbid3);
		
		$fbid = str_split($fbid);
		
		$f2="";
		
		
		
		foreach($fbid as $c)
		{
			if($c == '/' || $c == '?')
			{
				break;
			}
			else
				$f2 .= $c;
		}
		//echo $f2;
		for($i=0; $i<2; ++$i)
		{
			$json_link = "https://graph.facebook.com/".$f2."/?access_token={$access_token}";
			$json = file_get_contents($json_link);
			 
			$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
			 
			$page_id = isset($obj['id']) ? $obj['id'] : "";
			$page_name = isset($obj['name']) ? $obj['name'] : "";
						
			if($page_id == "") {
				$f2 = $fbid3;
				$page_id = $fbid3;
			}
			else
				break;
		}
	}
	if($page_id != "")
	{
		require("freenomapi.php");
		
		$q = "INSERT INTO  `flame_records` (
		`id` ,
		`pageLink` ,
		`pageUniqueId` ,
		`pageId`
		)
		VALUES (
		NULL ,  '{$fbid2}',  '{$f2}',  '{$page_id}'
		)";
		$query = mysqli_query($conn, $q);
		
		//echo $f2;
		?>
			<!--div id="copyBox" style="">
			<meta name="viewport" content="initial-scale = 1,user-scalable=no,maximum-scale=1.0">
			<title>
				Pagecabinet - Link Shrinker
			</title>
		<link rel="shortcut icon" type="image/png" href="./images/1s.png"> 
			<style>
				body {
				  font-family: Arial, sans-serif;
				  background: url(./images/bgid.jpg) no-repeat;
				  background-size: cover;
				  height:;
				}

				h1 {
				  text-align: center;
				  font-family: Tahoma, Arial, sans-serif;
				  color: #06D85F;
				  margin: 80px 0;
				}

				.box {
				  width: 40%;
				  margin: 0 auto;
				  background: rgba(255,255,255,0.2);
				  padding: 35px;
				  border: 2px solid #fff;
				  border-radius: 20px/50px;
				  background-clip: padding-box;
				  text-align: center;
				}

				.button {
				  font-size: 1em;
				  padding: 10px;
				  color: #fff;
				  border: 2px solid #f32853;
				  border-radius: 20px/50px;
				  text-decoration: none;
				  cursor: pointer;
				  transition: all 0.3s ease-out;
				}
				.button:hover {
				  background: #f32853;
				}

				.overlay {
				  position: fixed;
				  top: 0;
				  bottom: 0;
				  left: 0;
				  right: 0;
				  background: rgba(0, 0, 0, 0.7);
				  transition: opacity 500ms;
				  visibility: hidden;
				  opacity: 0;
				}
				.overlay:target {
				  visibility: visible;
				  opacity: 1;
				}

				.popup {
				  margin: 70px auto;
				  padding: 20px;
				  background: #fff;
				  border-radius: 5px;
				  width: 30%;
				  position: relative;
				  transition: all 5s ease-in-out;
				}

				.popup h2 {
				  margin-top: 0;
				  color: #333;
				  font-family: Tahoma, Arial, sans-serif;
				}
				.popup .close {
				  position: absolute;
				  top: 20px;
				  right: 30px;
				  transition: all 200ms;
				  font-size: 30px;
				  font-weight: bold;
				  text-decoration: none;
				  color: #333;
				}
				.popup .close:hover {
				  color: #06D85F;
				}
				.popup .content {
				  max-height: 30%;
				  overflow: auto;
				}

				@media screen and (max-width: 700px){
				  .box{
					width: 70%;
				  }
				  .popup{
					width: 70%;
				  }
				}
			</style>
			
			<h1 style="color:#f9f9f9;">Pagecabinet Beta Application</h1>
				<div class="box">
					<a class="button"  id="demo" onclick="copyToClipboard(document.getElementById('link').innerHTML)">CONTINUE</a>
				</div>
						
			<div id="link" style="display: none;"><?php echo $flameSite; ?></div-->			
			<script>
			  //function copyToClipboard(text) {
				//window.prompt("Copy to clipboard: Ctrl+C, Enter", text);
				
				window.location = "./0/?fid=<?php echo $page_id; ?>"; // this may be not required
			  //}
			</script>
		<?php
	}
	else
	{
		echo $f2;
		?>
			<script>
				alert("Page ID not valid");
				window.location = "./";
			</script>
		<?php
	}
?>