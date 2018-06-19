<?php
error_reporting(0);
$from=$_POST["cd-email"];
$feed=$_POST["star"];
$message3=$_POST["cd-textarea"];
$sbt=$_POST["sbt"];

if(isset($sbt))
{
	// Send to sender
		$to=$from;
		$headers = "From: " . "PageCabinet <noreply@pagecabinet.com>" . "\r\n";
		//$headers .= "Reply-To: ". "contact@wyneassociates.com.pk" . "\r\n";
		//$headers .= "CC: susan@example.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		$subject = "Successfully feedback sent to PageCabinet.com";
		
		$message = "<html><head><style>";
		$message .= "a { border-bottom: red; text-decoration: none; }";
		$message .= "h1 { color: #596467; }";
		$message .= "</style></head><body style='background-color: #F5F6F6; font-family: \"Open Sans\", sans-serif; color: #7A8385;'>";
		$message .= "<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>";
		$message .= "<br><center> <div style='padding-top:12px; width:80%;'>";
		$message .= "<h1>Page Cabinet</h1>";
		$message .= "<p>Dear user, <br />&nbsp;&nbsp;&nbsp;&nbsp;We have recived your feedback. <br /><br />Thank You,<br />PageCabinet</p>";
		$message .= "<div style='width:100px; padding:10px; border: 1px solid black; border-radius: 7px;'><a href='http://pagecabinet.com'>VISIT US</a></div>";
		$message .= "</div><br><br><hr></center>";
		$message .= "<small>PageCabinet &copy; ". date("Y") ."</small><br style='padding-bottom:5px;'><br>";
		$message .= "</body></html>";

		mail($to, $subject, $message, $headers);
		
		
		$headers2 = "From: " . "feedback@pagecabinet.com" . "\r\n";
		$headers2 .= "Reply-To: ". $from . "\r\n";
		//$headers2 .= "BCC: wyneassociates1@gmail.com\r\n";
		$headers2 .= "MIME-Version: 1.0\r\n";
		$headers2 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		
		$to2="m.khizeryounas@gmail.com";
		
		$subject2 = "Feedback sent from PageCabinet.com";
		
		$message2="<b>Email: </b>".$from."<br />";
		$message2.="<b>Feedback: </b>".$feed."<br />";
		$message2.="<b>Message: </b><br />".$message3."<br />---------";

		mail($to2, $subject2, $message2, $headers2);
		

}
else
	echo "<font color='red'><h2>not allowed here</h2></font>";
?>
<tt>
Page will redirect automaticlly after 
<span id="countdown">6</span>
<script type="text/javascript">
  var seconds;
  var temp;
 
  function countdown() {
    seconds = document.getElementById('countdown').innerHTML;
    seconds = parseInt(seconds, 10);
 
    if (seconds == 1) {
      temp = document.getElementById('countdown');
      temp.innerHTML = "0";
      return;
    }
 
    seconds--;
    temp = document.getElementById('countdown');
    temp.innerHTML = seconds;
    timeoutMyOswego = setTimeout(countdown, 1000);
  }
 
  countdown();
</script>
 secs, Please wait . . . </tt></strong>
<div style="display:none;">
<script>
window.setTimeout(function() {
    window.location.href = './';
}, 5000);
</script>
</tt>