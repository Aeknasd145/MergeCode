<?php 
	include("connect.php");
	if(@$_SESSION["id"]){
		$id = $_SESSION["id"];
	}
	else {
		header("Location:login.php");
	}
	if (@$_SESSION["lang"]){
		require("language/".$_SESSION["lang"].".php");
	}
	else {
		require("language/en.php");
	}
?>
<!doctype html>
<html lang="tr">
	<head>
		
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title><?php echo $lang["panel-title"]; ?></title>
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

		<!-- CSS File -->
		<link rel="stylesheet" href="css/style.css" />

		<!-- JS file for ajax -->
		<script src="https://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>

	</head>
	<body>