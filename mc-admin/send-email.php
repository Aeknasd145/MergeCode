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
<script type="text/javascript" src="send-email.js"></script>
<script type="text/javascript">$(function(){});</script>

	<div class="container-fluid h-100">
		<div class="row h-100">
			<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="sidebar">
				<?php include("sidebar.php"); ?>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="sidebar-mobile">
				<?php include("sidebar-mobile.php"); ?>
			</div>
			<div id="main-content" class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="row card-css">
		          	<div class="col-xl-4 col-md-4 col-sm-6 col-xs-6">
		            	<div class="card-counter primary">
		             		<i class="fa fa-users"></i>
		              		<span class="count-numbers"><?php echo $usersay; ?></span>
		              		<span class="count-name">Üye Sayısı</span>
		            	</div>
		          	</div>

		          	<div class="col-xl-4 col-md-4 col-sm-6 col-xs-6">
		            	<div class="card-counter danger">
		            		<i class="fab fa-sellcast"></i>
		              		<span class="count-numbers"><?php echo $abone_say; ?></span>
		              		<span class="count-name">Abone Sayısı</span>
		            	</div>
		          	</div>

		          	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
		            	<div class="card-counter success">
		              		<i class="fas fa-id-card"></i>
		              		<span class="count-numbers">50</span>
		              		<span class="count-name">Mail Almak İsteyen Kullanıcı Sayısı</span>
		            	</div>
		          	</div>
		        </div>
		        <div class="row">
			        <div class="col-12">
			        	<form id="frm">
			        		<div class="col-12" style="text-align: center;">
			        			<div id="sonuc"></div><br />
			        		</div>
				        	<div class="col-12">
				        		<p style="float:left">Mail Göndereceğiniz Grup:&emsp;</p>
				        		<select name="group">
					        		<option value="users">Üyeler</option>
					       			<option value="subs">Aboneler</option>
					       		</select>
				        	</div>
				        	<div class="col-12">
				        		<input type="text" name="title" class="form-control" placeholder="Title" style="border: solid 1px grey; border-radius: .25rem">
				        	</div>
				        	<div class="col-12">
				        		<textarea rows="15%" style="width: 100%; margin-top: 1%; border: solid 1px grey; border-radius: .35em;" name="content" placeholder="Hakkımızda sayfası içeriği"></textarea>
				        	</div>
							<input style="width: 100%; border: solid 1px lightblue; background-color: lightblue; border-radius: 1rem; padding: 8px" type="button" id="btn" value="Kaydet">
			        	</form>
			        </div>
		        </div>
			</div>
		</div>
	</div>
<!-- Font Awesome Kit -->
<script src="https://kit.fontawesome.com/acae1827b1.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  