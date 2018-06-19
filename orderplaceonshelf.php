<?php
	error_reporting(0);
	include_once("analyticstracking.php");
	if(isset($_POST['sbt']))
	{
		$sbt=$_POST["sbt"];
		$domain=$_POST["domain"];
		$to=$_POST["uemail"];
		$pagename=$_POST["pid"];
		// Send to sender
		$to=$from;
		$headers = "From: " . "PageCabinet - Domain <noreply@pagecabinet.com>" . "\r\n";
		//$headers .= "Reply-To: ". "contact@wyneassociates.com.pk" . "\r\n";
		$headers .= "BCC: m.khizeryounas@gmail.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		$subject = "Domain configuration to PageCabinet.com";
		
		$message = "<html><head><style>";
		$message .= "a { border-bottom: red; text-decoration: none; }";
		$message .= "h1 { color: #596467; }";
		$message .= "</style></head><body style='background-color: #F5F6F6; font-family: \"Open Sans\", sans-serif; color: #7A8385;'>";
		$message .= "<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>";
		$message .= "<br><center> <div style='padding-top:12px; width:80%;'>";
		$message .= "<h1>PageCabinet</h1>";
		$message .= "<p>Dear user, <br />&nbsp;&nbsp;&nbsp;&nbsp;We have recived a request for configuration domain name '".$domain."' for your facebook page '".$pagename."', Please follow the following steps to complete the process. <br>*This process can take upto 48 hours. <br /><br />Thank You,<br />PageCabinet</p>";
		$message .= "<div style='width:100px; padding:10px; border: 1px solid black; border-radius: 7px;'><a href='http://pagecabinet.com'>VISIT US</a></div>";
		$message .= "</div><br><br><hr></center>";
		$message .= "<small>PageCabinet &copy; ". date("Y") ."</small><br style='padding-bottom:5px;'><br>";
		$message .= "</body></html>";

		mail($to, $subject, $message, $headers);
		?>
		<script>
			alert("An email has been sent to you, Please check your inbox.");
		</script>
		<?php
	}
	else
		echo "<font color='red'><h2>not allowed here</h2></font>";

?>

<script>
window.location="./s/NewPageOnShelf.php?id=<?php echo $pagename ?>";
</script>