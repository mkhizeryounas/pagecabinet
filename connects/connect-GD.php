<?php
	$host = "localhost";
	$user = "khizer";
	$password = "mkhizer321";
	$database = "flame_records_b1";
	
	$conn = mysqli_connect($host, $user,$password,$database);

	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>