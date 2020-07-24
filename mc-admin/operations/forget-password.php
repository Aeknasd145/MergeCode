<?php
	include("../connect.php");
	if($_POST){
		$username 	= addslashes(htmlspecialchars($_POST['username']));
		$email 		= addslashes(htmlspecialchars($_POST['email']));
		if(!$email && !$username){
			echo "Lütfen E-Mail Bilgisini Girin";
		}
		else {
			require("../library/class.phpmailer.php");
			$sorgu = $conn->query("SELECT * FROM users WHERE email='$email' ");
			$sorgu_say = $sorgu->num_rows;
			if($sorgu_say){
				function sifreureteci(){
					$karakterler = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!^+%&/)(=?_-*}][{#";
					$sifre = '';
					for($i=0;$i<8;$i++) {
						$sifre .= $karakterler{rand() % 80};
					}
					return $sifre;
				}
				$new_password = sifreureteci();
				$sorgu = $conn->query("SELECT * FROM mail_settings WHERE id=1 ");
		    	while ($mailoku = mysqli_fetch_array($sorgu)) {
		    	 	$host = $mailoku["host"];
		    	 	$port = $mailoku["port"];
		    	 	$secure = $mailoku["secure"];
		    	 	$email_data = $mailoku["mail"];
		    	 	$password = $mailoku["password"];
		    	} 
				$alici 	  = $email; 
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
				$mail->Username = $email_data;
				$mail->Password = $password; 
				$mail->SetFrom($email_data, "Şifremi Unuttum - Site Adı"); //forwarder mail and person
				$mail->AddAddress($alici);
				$mail->Subject = "Şifremi Unuttum - Site Adı"; //Mail Title
				$mail->Body = "Yeni Şifreniz: ".$new_password;
				if(!@$mail->Send()){
					echo "E-mail Hatası: ".$mail->ErrorInfo."<br>";
					echo "Gmail kullanıyorsanız lütfen hesabınızın güvenliği düşük uygulamalara açık oduğunu kontrol edin!";
				} 
				else {
					$md5_new_password = md5($new_password);
					$password_update = $conn->query("UPDATE users SET password='$md5_new_password' WHERE username='$username' && email='$email' ");
					if($password_update){
						echo "İşlem Başarılı. <br>";
					}
					else {
						echo "Veritabanı Hatası!! <br>";
					}
				}
			}
			else {
				echo "E-Mail adresi sisteme kayıtlı değil";
			}
		}
	}

?>	