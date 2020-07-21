<?php
	include("../connect.php");
	session_start();
	
	$lang	=	htmlspecialchars(strip_tags($_GET["lang"]));
	
	if ($lang =="tr" || $lang == "en"){
		$_SESSION["lang"] = $lang;
		header("Location:../settings.php");
	}
	else {
		header("Location:../settings.php");
	}
?>