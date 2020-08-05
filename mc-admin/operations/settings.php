<meta charset="UTF-8">
<?php 
	include("../connect.php");
	if($_POST){
		$id 					=	$_SESSION["id"];
		$username  				=   stripslashes(strip_tags(htmlspecialchars($_POST["username"])));
		$email  				=   stripslashes(strip_tags(htmlspecialchars($_POST["email"])));
		$new_password  			=   $_POST["new-password"];
		$new_password_again  	=   $_POST["new-password-again"];
		if(!$username && !$email && !$new_password && !$new_password_again && !$_FILES['logo']['name']){
	        echo "<strong style='color: red; font-size: 25px;'>Lütfen en az bir alanı doldurun.</strong>";
	        exit;
	    }
	    else {
	    	if($username){
	    		$update = $conn->query("UPDATE users SET username='$username' WHERE id='$id' ");
	    		if($update){
	    			echo "<span style='color: green; font-size: 20px;'>Kullanıcı adı başarıyla güncellendi.</span><br/>";
	    		}
	    		else {
	    			echo "<span style='color: red; font-size: 20px;'>Kullanıcı adı güncellenirken hata oldu.</span><br/>";
	    		}
	    	}
	    	if($email){
	    		$update = $conn->query("UPDATE users SET email='$email' WHERE id='$id' ");
	    		if($update){
	    			echo "<span style='color: green; font-size: 20px;'>E-Mail başarıyla güncellendi.</span><br/>";
	    		}
	    		else {
	    			echo "<span style='color: red; font-size: 20px;'>E-Mail güncellenirken hata oldu. Bu E-Mail daha önce kullanılmış olabilir!</span><br/>";
	    		}
	    	}
	    	if($new_password && $new_password_again && $new_password==$new_password_again){
	    		$md5_new_password = md5($new_password);
	    		$update = $conn->query("UPDATE users SET password='$md5_new_password' WHERE id='$id' ");		
	    		if($update){
	    			echo "<span style='color: green; font-size: 20px;'>Şifre başarıyla güncellendi.</span><br/>";
	    		}
	    		else {
	    			echo "<span style='color: red; font-size: 20px;'>Şifre güncellenirken hata oldu.</span><br/>";
	    		}
	    	}
	    	if($new_password && $new_password_again && $new_password!=$new_password_again){
	    		echo "<span style='color: red; font-size: 20px;'>Girilen şifreler birbirinden farklı.</span>";	
	    	}
	    	if($_FILES['logo']['name']){
				$tmp_name = $_FILES['logo']["tmp_name"];
				if(move_uploaded_file($tmp_name, "../images/logo.png")){
	    			echo "<span style='color: green; font-size: 20px;'>Logo güncellendi.</span><br/>";
	    		}
	    		else {
	    			echo "<span style='color: red; font-size: 20px;'>Logo güncellenirken hata oldu.</span><br/>";
	    		}
			}
	    }
	}
?>