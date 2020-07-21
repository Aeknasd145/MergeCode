<?php 
	include("header.php");
	$user_sorgu = $conn->query("SELECT * FROM users ORDER BY id DESC");
	while($user_oku=mysqli_fetch_array($user_sorgu)){
		$usersay = $user_oku["id"];
		break;
	}
	$user_sorgu = $conn->query("SELECT * FROM users ORDER BY id DESC LIMIT 10");
	$abone_sorgu = $conn->query("SELECT * FROM subs");
	$abone_say = mysqli_num_rows($abone_sorgu);
?>
<script src="https://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="about-us.js"></script>
<script type="text/javascript">$(function(){});</script>
<div class="container-fluid h-100">
	<div class="row h-100">
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="sidebar">
			<?php include("sidebar.php"); ?>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="sidebar-mobile">
			<?php include("sidebar-mobile.php"); ?>
		</div>
		<div id="main-content" class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="text-align: center;">
			<form id="frm">
				<h2>Hakkımızda Sayfası Yönetimi</h2>
				<div id="sonuc"></div><br />
				<input type="text" name="title" placeholder="Başlık" style="border: solid 1px grey; border-radius: .35em; margin-top: 1%; width: 80%; height:7%; border: solid 1px grey;" required />
				<textarea rows="15%" style="width: 80%; margin-top: 1%; border: solid 1px grey; border-radius: .35em;" name="content" placeholder="Hakkımızda sayfası içeriği" required></textarea><br>
				<input style="width: 80%; border: solid 1px grey; border-radius: 1rem; padding: 8px" type="button" id="btn" value="Kaydet">
			</form>
		</div>
	</div>
</div>

<!-- Font Awesome Kit -->
<script src="https://kit.fontawesome.com/acae1827b1.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  