<?php
	error_reporting(E_ALL ^ E_NOTICE);
	session_start();
	$pro = array();
	
	if($_SESSION['products'] != '')
	{
		foreach($_SESSION['products'] as $key=>$value)
		{
			array_push($pro, $value);
		}
	}
	
	if($_GET["action"]=="add")
	{
		array_push($pro, $_GET["proID"]);
	}
	
	else if($_GET["action"]=="emptyCart")
	{
		$pro = "";
		session_destroy();
	}
	
	else if($_GET["action"]=="drop")
	{
		$pos = array_search($_GET["proID"], $pro);
		unset($pro[$pos]);
	}
	
	
	$_SESSION['products'] = $pro;
	header("Location: ./store.php")
?>