<?php

	error_reporting(0);
		
	if(!empty($_GET['fid']))
		$fb_page_id = $_GET['fid'];
	else if(!empty($fidx))
		$fb_page_id = $fidx;
	else
	{	
	?>
		<script>
			window.location = "../";
		</script>
	<?php
	}
	//$fb_page_id = isset($_GET['fid']) ? $_GET['fid'] : "";
	
	
	//$fb_page_id = "260235610757558"; // confetti -> 260235610757558 --- mBites -> 384742058277663
	$access_token="EAAV3vfZBFTnoBACSSJ8W0rZCv1tRHtT5I7BjROUhLS6QenOCRjCOxZAP8WtBepsLOyagfKRoKIBpMA7Eak3UgExJg6RVurLphw9EIrtPL8vOwfMiQ1Lv02LgkQ3arEXkAdkJPvMNE67h0XOJrT6RUab2uKCY8PTiEHRq8ZBZAiAZDZD";
 
	// BASIC INFO START
	
	$fields="id,name,cover,about,emails,picture.type(large),description,features,link,location,phone,website";		
	 
	$json_link = "https://graph.facebook.com/{$fb_page_id}/?fields={$fields}&access_token={$access_token}";
	$json = file_get_contents($json_link);
	 
	$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
		 
	$page_id = isset($obj['id']) ? $obj['id'] : "";
	// var_dump($json_link);
	// die();
	if($page_id=="")
	{
		?>
			<script>
				window.location = "../";
			</script>
		<?php
	}
	
	$page_name = isset($obj['name']) ? $obj['name'] : "";
		
	$page_description = isset($obj['description']) ? $obj['description'] : "";
		
	$cover_src = isset($obj['cover']['source']) ? $obj['cover']['source'] : "";
		
	$cover_src = str_replace("/p240x240", "", $cover_src);
	
	$dp_src = isset($obj['picture']['data']['url']) ? $obj['picture']['data']['url'] : "";		
		
	$about = isset($obj['about']) ? $obj['about'] : "";
				
	$email = isset($obj['emails'][0]) ? $obj['emails'][0] : "";
		
	$page_link = isset($obj['link']) ? $obj['link'] : "";
	
	$location="";
	
	//$location .= isset($obj['location']['street']) ? $obj['location']['street'] : "";
				
	//$location .= isset($obj['location']['city']) ? $obj['location']['city'] : "";
				
	//$location .= isset($obj['location']['country']) ? $obj['location']['country'] : "";
				
	//$location .= isset($obj['location']['zip']) ? $obj['location']['zip'] : "";
	
	
	if(isset($obj['location']['street']))
	{
		$location .= $obj['location']['street'] . ", ";
	}
	if(isset($obj['location']['city']))
	{
		$location .= $obj['location']['city'] . ", ";
	}
	if(isset($obj['location']['country']))
	{
		$location .= $obj['location']['country'];
	}
	if(isset($obj['location']['zip']))
	{
		$location .= ", ".$obj['location']['zip'];
	}
	
	
	$phone = isset($obj['phone']) ? $obj['phone'] : "";
		
	$website = isset($obj['website']) ? $obj['website'] : "";			
		
	/*echo $page_id . "<br>";
	echo $page_name . "<br>";
	echo "<img src='{$cover_src}'><br>";
	echo $about . "<br>";
	echo $email . "<br>";
	echo $page_link . "<br>";
	echo $location . "<br>";
	echo $phone . "<br>";
	echo $website . "<br>";*/
		
	// BASIC INFO END
		
	/*
		https://developers.facebook.com/docs/graph-api/reference/video
		
		embed_video
	*/
		
	// GALERRIES START
	$album_tl_id=""; // timeline photos id;
	$fields="id,name,description,link,cover_photo";		
		 
	$json_link = "https://graph.facebook.com/{$fb_page_id}/albums?fields={$fields}&access_token={$access_token}";
	$json = file_get_contents($json_link);
		
	$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
		
	$album = array();
	$x2=0;
	$tGal = count($obj["data"]);
	for($x=0; $x<$tGal; ++$x) // count($obj['data'])
	{
		$album_id = isset($obj['data'][$x]['id']) ? $obj['data'][$x]['id'] : "";
		$album_name = isset($obj['data'][$x]['name']) ? $obj['data'][$x]['name'] : "";
		$album_url_name=urlencode($album_name);
		$album_description = isset($obj['data'][$x]['description']) ? $obj['data'][$x]['description'] : "";
		$album_link = isset($obj['data'][$x]['link']) ? $obj['data'][$x]['link'] : "";
		
		
		
		if($album_name != "Untitled Album")
		{
			$album[$x2] = array();
			
			$album[$x2]['id']=$album_id;
			$album[$x2]['name']=$album_name;
			$album[$x2]['url']=$album_url_name;
			$album[$x2]['description']=$album_description;
			$album[$x2]['link']=$album_link;
			$x2++;
			if($album_name == "Timeline Photos")
			{
				$album_tl_id = $album_id;
			}
		}
		//echo $album[$x]['id']."<br>";
			
	}
				
	// GALERRIES END
		

		
	// PAGE POSTS START
		
	$post = array();
		
	$fields="message,id,link";		
				
	$json_link = "https://graph.facebook.com/v2.3/{$fb_page_id}/feed?access_token={$access_token}&fields={$fields}";
	$json = file_get_contents($json_link);
		
	$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
		
	$feed_count = count($obj['data']);
		
	$c=0; // I DONT KNOW WHY IT WORKS
	for($x=0; $x<$feed_count; ++$x)
	{
		$feed_id = isset($obj['data'][$x]['id']) ? $obj['data'][$x]['id'] : "";
		$feed_msg = isset($obj['data'][$x]['message']) ? $obj['data'][$x]['message'] : "";
		$feed_time = isset($obj['data'][$x]['created_time']) ? $obj['data'][$x]['created_time'] : "";
		$feed_link = isset($obj['data'][$x]['link']) ? $obj['data'][$x]['link'] : "";
			
		if(!empty($feed_msg))
		{
			$feed_id = str_replace($page_id."_", "" , $feed_id);
			$post[$c]['id'] = $feed_id;
			$post[$c]['message'] = $feed_msg;
			$post[$c]['time'] = $feed_time;
			$post[$c]['link'] = $feed_link;
			++$c;
		}
	}
	// PAGE POSTS END
		
?>
	