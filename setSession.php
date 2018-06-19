<?php
//require("getIdRedirect.php");
session_start();

if(isset($_POST["user_access_token"]) && isset($_POST["uid"]))
{
	$_SESSION['user_id'] = $_POST["uid"];
	$_SESSION['user_token'] = $_POST["user_access_token"];
}

if($_GET["p"]=="logout")
	session_destroy();

header("Location: ./");
?>