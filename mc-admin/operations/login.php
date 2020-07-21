<?php 
	include("../connect.php");
	$email = addslashes(htmlspecialchars($_POST['email']));
	$password = addslashes(htmlspecialchars($_POST['pass']));
	if(!$email || !$password){
		echo "Kullanıcı adı ve şifreyi doldurun";
		header("Location:../login.php");
	}
	else{
		$md5password = md5($password);
		$sorgu = $conn->query("SELECT * FROM users WHERE email='$email' && password='$md5password' ");
		while ($sorgu_oku=mysqli_fetch_array($sorgu)) {
			$_SESSION["id"]=$sorgu_oku["id"];
			$_SESSION["lang"]="tr";
		}
		header("Location:../index.php");
	}
?>