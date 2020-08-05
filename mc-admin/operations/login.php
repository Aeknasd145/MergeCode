<?php 
	include("../connect.php");
	if($_POST){
		$email = addslashes(htmlspecialchars($_POST['email']));
		$password = addslashes(htmlspecialchars($_POST['pass']));
		if(!$email || !$password){
			echo "Kullanıcı adı ve şifreyi doldurun";
		}
		else{
			$ip = $_SERVER["REMOTE_ADDR"];
			$attempts_date = date("Y-m-d");
			$md5password = md5($password);
			$time = date("H:i");
			$query = $conn->query("SELECT * FROM login_attempt WHERE ip='$ip' && attempts_date='$attempts_date' ");
			$query_number = $query->num_rows;
			while ($deneme_oku = mysqli_fetch_array($query)) {
				$attempts=$deneme_oku["attempts"];
				$time_out_penalty=$deneme_oku["time_out"];
				$penalty_time = $deneme_oku["penalty_time"];
			}
			if($query_number){
				if($penalty_time!=0){
					$arr = explode(":", $penalty_time);
					$penalty_sec = ($arr[0]*60 + $arr[1])*60;
					$arr2 = explode(":", $time);
					$now_sec = ($arr2[0]*60+$arr2[1])*60;
					if($time_out_penalty <= ($now_sec-$penalty_sec)){
						$conn->query("UPDATE login_attempt SET penalty_time='0', attempts='0', time_out='0' WHERE ip='$ip' && attempts_date='$attempts_date' ");
						goto kontrol;
					}
					else{
						$query2 = $conn->query("SELECT * FROM security");
						while ($security_oku = mysqli_fetch_array($query2)) {
							$entry_limit = $security_oku["entry_limit"];
							$time_out = $security_oku["time_out"];
						}
						$new_attempts = $attempts+1;
						if($new_attempts==$entry_limit){
							$conn->query("UPDATE login_attempt SET attempts='$new_attempts', time_out='$time_out', penalty_time='$time' WHERE ip='$ip' && attempts_date='$attempts_date' ");
							echo "Bekleme Cezası Aldınız.";
						}
						else if($new_attempts>$entry_limit){
							echo "Bekleme Cezanız Var. Lütfen Bekleyin";
						}
						else {
							$conn->query("UPDATE login_attempt SET attempts='$new_attempts' WHERE ip='$ip' && attempts_date='$attempts_date' ");
							echo "2Giriş Bilgileri Hatalı";
						}
					}
				}
				else {
					$query2 = $conn->query("SELECT * FROM security");
					while ($security_oku = mysqli_fetch_array($query2)) {
						$entry_limit = $security_oku["entry_limit"];
						$time_out = $security_oku["time_out"];
					}
					$new_attempts = $attempts+1;
					if($new_attempts==$entry_limit){
						$conn->query("UPDATE login_attempt SET attempts='$new_attempts', time_out='$time_out', penalty_time='$time' WHERE ip='$ip' && attempts_date='$attempts_date' ");
						echo "Bekleme Cezası Aldınız.";
					}
					else {
						$sorgu = $conn->query("SELECT * FROM users WHERE email='$email' && password='$md5password' ");
						while ($sorgu_oku=mysqli_fetch_array($sorgu)) {
							$_SESSION["id"]=$sorgu_oku["id"];
						}
						if($_SESSION['id']){
							$_SESSION["lang"]="en";
							$conn->query("UPDATE login_attempt SET attempts='0' WHERE ip='$ip' && attempts_date='$attempts_date' ");
							?>
							<script type="text/javascript">
								window.location="index.php";
							</script>
							<?php
						}
						else {
							$conn->query("UPDATE login_attempt SET attempts='$new_attempts' WHERE ip='$ip' && attempts_date='$attempts_date' ");
							echo "Giriş Bilgileri Hatalı";
						}
					}
				}
			}
			else {
				kontrol:
				$sorgu = $conn->query("SELECT * FROM users WHERE email='$email' && password='$md5password' ");
				while ($sorgu_oku=mysqli_fetch_array($sorgu)) {
					$_SESSION["id"]=$sorgu_oku["id"];
				}
				if($_SESSION['id']){
					$_SESSION["lang"]="en";
					$conn->query("UPDATE login_attempt SET attempts='0' WHERE ip='$ip' && attempts_date='$attempts_date' ");
					?>
					<script type="text/javascript">
						window.location="index.php";
					</script>
					<?php
				}
				else {
					$sorgu = $conn->query("INSERT INTO login_attempt(ip,attempts,attempts_date) VALUES('$ip','1','$attempts_date') ");
					echo "Giriş Bilgileri Hatalı.";
				}
			}
		}
	}
?>