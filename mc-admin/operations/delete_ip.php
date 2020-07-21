<?php 
	include("../connect.php");
	if($_SESSION["id"]){
		if($_POST["id"]){
			$ban_id = stripslashes(strip_tags(htmlspecialchars($_POST["id"])));			
			$conn->query("DELETE FROM banned_ip where id='$ban_id' ");
		}
		else {
			$conn->query("DELETE FROM banned_ip");
		}
		header("Location:../security-settings.php");
	}
	else {
		echo "Yetki dışı erişim";
		header("Location:../../index.php");
		exit;
	}
?>