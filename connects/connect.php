<?php
	//error_reporting(0);
	try 
	{
		$host = "localhost:8889";
		$user = "root";
		$password = "root";
		$database = "flame_records_b1";
		
		$conn = mysqli_connect($host, $user,$password,$database);

		// Check connection
		if (mysqli_connect_errno())
			throw new Exception("An error occoured" . mysqli_connect_error());
	}
	catch(Exception $e)
	{
		//echo 'Message: ' .$e->getMessage();
		$host = "db622629769.db.1and1.com";
		$user = "dbo622629769";
		$password = "Mkhizer#321";
		$database = "db622629769";
		
		$conn = mysqli_connect($host, $user,$password,$database);

		// Check connection
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	}
?>