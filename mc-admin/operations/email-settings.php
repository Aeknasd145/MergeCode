<meta charset="UTF-8">
<?php 
	include("../connect.php");
	if($_POST){
		$host  			=   stripslashes(strip_tags(htmlspecialchars($_POST["host"])));
		$port  			=   stripslashes(strip_tags(htmlspecialchars($_POST["port"])));
		$email  		=   stripslashes(strip_tags(htmlspecialchars($_POST["email"])));
		$password  		=   stripslashes(strip_tags(htmlspecialchars($_POST["password"])));
		$secure  		=   stripslashes(strip_tags(htmlspecialchars($_POST["secure"])));

		if(!$host && !$port && !$email && !$password && !$secure){
	        echo "<strong style='color: red; font-size: 25px;'>Lütfen en az bir alanı doldurunuz.</strong>";
	        exit;
	    }
	    else {
	    	if($host){
	    		$update = $conn->query("UPDATE mail_settings SET host='$host' WHERE id='1' ");	
	    		if($update){
	    			echo "<span style='color: green; font-size: 20px;'>Host Güncelleme İşlemi Başarılı.</span><br />";
	    		}
	    		else {
	    			echo "<span style='color: red; font-size: 20px;'>Host Güncelleme İşlemi Başarısız.</span><br />";
	    		}
	    	}
	    	if($port){
	    		$update = $conn->query("UPDATE mail_settings SET port='$port' WHERE id='1' ");	
	    		if($update){
	    			echo "<span style='color: green; font-size: 20px;'>Port Güncelleme İşlemi Başarılı.</span><br />";
	    		}
	    		else {
	    			echo "<span style='color: red; font-size: 20px;'>Port Güncelleme İşlemi Başarısız.</span><br />";
	    		}
	    	}
	    	if($mail){
	    		$update = $conn->query("UPDATE mail_settings SET mail='$mail' WHERE id='1' ");	
	    		if($update){
	    			echo "<span style='color: green; font-size: 20px;'>E-Mail Güncelleme İşlemi Başarılı.</span><br />";
	    		}
	    		else {
	    			echo "<span style='color: red; font-size: 20px;'>E-Mail Güncelleme İşlemi Başarısız.</span><br />";
	    		}
	    	}
	    	if($password){
	    		$update = $conn->query("UPDATE mail_settings SET password='$password' WHERE id='1' ");	
	    		if($update){
	    			echo "<span style='color: green; font-size: 20px;'>Şifre Güncelleme İşlemi Başarılı.</span><br />";
	    		}
	    		else {
	    			echo "<span style='color: red; font-size: 20px;'>Şifre Güncelleme İşlemi Başarısız.</span><br />";
	    		}
	    	}
	    	if($secure){
	    		$update = $conn->query("UPDATE mail_settings SET secure='$secure' WHERE id='1' ");	
	    		if($update){
	    			echo "<span style='color: green; font-size: 20px;'>Güvenlik Türü Güncelleme İşlemi Başarılı.</span><br />";
	    		}
	    		else {
	    			echo "<span style='color: red; font-size: 20px;'>Güvenlik Türü Güncelleme İşlemi Başarısız.</span><br />";
	    		}
	    	}
	    }
	}
?>