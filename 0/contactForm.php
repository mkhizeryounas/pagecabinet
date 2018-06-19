<?php

		$from=$_POST["cd-email"];
		$to2=$_POST["to"];
		$site=$_POST["site"];
		$name=$_POST["cd-name"];
		$number=$_POST["cd-phone"];
		$message3=$_POST["cd-textarea"];
		$sbt=$_POST["sbt"];
		$gres=$_POST["g-recaptcha-response"];

$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array('secret' => '6LdDZxkTAAAAAH3bXC5osc0-S4HcaUBslrWGzFV9', 'response' => $gres);
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
$obj = json_decode($result, true, 512, JSON_BIGINT_AS_STRING);

$success = isset($obj["success"]) ? $obj["success"] : "";
//echo $result;
//echo $obj["success"];
if ($success === FALSE) { 
			?>
				<script>
					alert("Sorry, email not send.");
					document.location="<?php echo $site; ?>";
				</script>
			<?php 
			var_dump($result);
}
else{
	if(isset($sbt))
{	
		if(empty($to2))
		{
			?>
				<script>
					alert("Sorry, email not send.");
					document.location="<?php echo $site; ?>";
				</script>
			<?php
		}
		$headers2 = "From: " . "Pagecabinet - Contact Form <norply@pagecabinet.com>" . "\r\n";
		$headers2 .= "Reply-To: ". $from . "\r\n";
		$headers2 .= "BCC: m.khizeryounas@gmail.com\r\n";
		$headers2 .= "MIME-Version: 1.0\r\n";
		$headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		$subject2 = "Inquiry sent from Pagecabinet Site Contact Form";
		
		$message2="<table>";
		$message2.="<tr><td><b>From: </b></td><td>".$name."</td></tr>";
		$message2.="<tr><td><b>Email: </b></td><td>".$from."</td></tr>";
		$message2.="<tr><td><b>Phone: </b></td><td>".$number."</td></tr>";
		$message2.="<tr><td><b>Site: </b></td><td><a href='".$site."'>".$site."</a>";
		$message2.="<tr><td><b>Message: </b></td><td>".$message3."</td></tr>";
		$message2.="</table>";

		mail($to2, $subject2, $message2, $headers2);
		
		?>
		<script>
		alert("Your email has been sent.");
		document.location="<?php echo $site; ?>";
		</script>
		<?php

	}
}
?>