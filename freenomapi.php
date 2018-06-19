<?php
	
	$page_name = str_replace(" ", "", $page_name);
	$page_name .= ".tk";
	$json_link = "https://api.freenom.com/v2/domain/search?domainname=".$page_name;
	
	$json = file_get_contents($json_link);
			 
	$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
			 
	$link_status = isset($obj['domain'][0]['status']) ? $obj['domain'][0]['status'] : "";
	$link_domaintype = isset($obj['domain'][0]['domaintype']) ? $obj['domain'][0]['domaintype'] : "";
	$link_domainname = isset($obj['domain'][0]['domainname']) ? $obj['domain'][0]['domainname'] : "";
	
	
		$bitly_accesstoken = "808845f9cbcc462be67de177b3633d05194c9fe1";
		$json_link = "https://api-ssl.bitly.com/v3/user/link_save?access_token={$bitly_accesstoken}&longUrl=http://pagecabinet.com/0/?fid=".$page_id;
		
		$json = file_get_contents($json_link);
				 
		$obj = json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
				 
		$shrtL = isset($obj['data']['link_save']['link']) ? $obj['data']['link_save']['link'] : "";
		
		//echo $obj['data']['link_save']['link'];
		
	
	$flameSite = $shrtL;
	
	if($link_status == "AVAILABLE")
	{
		if($link_domaintype == "FREE")
		{
			?>
				<script>
					//var answer = confirm("Domain '<?php echo $page_name; ?>' is available.\nDo you want to have it? ");
					//if(answer)
					{
						//alert("free domain Coming Soon");
						<?php
							
							// GET FACEBOOK USER DETAILS, CHECK IF HE IS THE REAL OWNER OF THAT PAGE AND THEN REGISTER .TK DOMAIN
							
						?>
					}
				</script>
				
			<?php
		}
		else
		{
			?>
				<script>
					//alert("Domain '<?php echo $page_name; ?>' is not available.");
				</script>
			<?php
		}
	}
	else
	{
		?>
				<script>
					//alert("Domain '<?php echo $page_name; ?>' is not available.");
				</script>
		<?php
	}
	
	
?>
