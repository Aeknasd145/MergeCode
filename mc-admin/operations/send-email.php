<meta charset="UTF-8">
<?php 
	include("../connect.php");
	if($_POST){
		$group  	=   stripslashes(strip_tags(htmlspecialchars($_POST["group"])));
		$title  	=   stripslashes(strip_tags(htmlspecialchars($_POST["title"])));
		$content  	=   stripslashes(strip_tags(htmlspecialchars($_POST["content"])));
		if(!$group || !$title || !$content){
	        echo "<strong style='color: red; font-size: 25px;'>Lütfen boş alan bırakmayınız.</strong>";
	        exit;
	    }
	    else {
			require("../library/class.phpmailer.php");
	    	if($group=="users"){
	    		$bak = $conn->query("SELECT * FROM users");
	    	}
	    	else if($group=="subs"){
	    		$bak = $conn->query("SELECT * FROM subs");
	    	}
	    	else {
	    		echo "Grup seçiminde HATA!";
	    		exit;
	    	}
	    	$sorgu = $conn->query("SELECT * FROM mail_settings WHERE id=1 ");
	    	while ($mailoku = mysqli_fetch_array($sorgu)) {
	    	 	$host = $mailoku["host"];
	    	 	$port = $mailoku["port"];
	    	 	$secure = $mailoku["secure"];
	    	 	$email = $mailoku["mail"];
	    	 	$password = $mailoku["password"];
	    	} 
			while ($say = mysqli_fetch_array($bak)) {
				$alici 	  = $say['email']; 
				$mail = new PHPMailer();
				$mail->IsSMTP();
				$mail->SMTPDebug = 1; 
				$mail->SMTPAuth = true; 
				$mail->SMTPSecure = $secure;
				$mail->Host = $host;
				$mail->Port = $port;
				$mail->IsHTML(true);
				$mail->SetLanguage("tr", "library/phpmailer/language");
				$mail->CharSet  ="utf-8";
				$mail->Username = $email;
				$mail->Password = $password; 
				$mail->SetFrom($email, $title); //forwarder mail and person
				$mail->AddAddress($alici);
				$mail->Subject = $title; //Mail Title
				$mail->Body = $content;
			}
			if(!$mail->Send()){
				echo "E-mail Hatası: ".$mail->ErrorInfo."<br>";
				echo "Gmail kullanıyorsanız lütfen hesabınızın güvenliği düşük uygulamalara açık oduğunu kontrol edin!";
			} else {
				echo "İşlem Başarılı. <br>";
			}
	    }
	}
?>