<?php
	$host = "db603241562.db.1and1.com";
	$user = "dbo603241562";
	$password = "Mkhizer321";
	$database = "db603241562";
	
	$conn = mysqli_connect($host, $user,$password,$database);

	// Check connection
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>