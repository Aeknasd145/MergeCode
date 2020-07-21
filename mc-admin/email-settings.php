<?php include("header.php"); ?>
<script src="https://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="email-settings.js"></script>
<script type="text/javascript">$(function(){});</script>
<?php 
	$sorgu = $conn->query("SELECT * FROM mail_settings WHERE id='1'");
	while ($mail_settings_oku = mysqli_fetch_array($sorgu)) {
		$host = $mail_settings_oku['host'];
		$port = $mail_settings_oku['port'];
		$email = $mail_settings_oku['mail'];
		$password = $mail_settings_oku['password'];
		$secure = $mail_settings_oku['secure'];
	}
?>
<div class="container-fluid h-100">
	<div class="row h-100">
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="sidebar">
			<?php include("sidebar.php"); ?>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="sidebar-mobile">
			<?php include("sidebar-mobile.php"); ?>
		</div>
		<div id="main-content" class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
			<div class="row justify-content-md-center">
				<div class="col-md-10 col-sm-12">
					<form id="frm" class="row">
						<div class="col-12" style="text-align: center;">
		        			<div id="sonuc"></div><br />
		        		</div>
						<h3 class="col-12 text-center pt-3"><?php echo $lang["email-settings"];?></h3>	
						<div class="col-md-6 col-sm-12" style="float:left; margin-top: 12px; padding-top: 15px; padding-bottom: 15px">
							<p><?php echo $lang["host"];?>:</p>
							<input type="text" class="form-control" name="host" placeholder="<?php echo $host;?>" aria-describedby="basic-addon1">
						</div>
						<div class="col-md-6 col-sm-12" style="float: left; margin-top: 12px; padding-top: 15px; padding-bottom: 15px">
							<p><?php echo $lang["port"];?>:</p>
							<input type="text" class="form-control" name="port" placeholder="<?php echo $port;?>" aria-describedby="basic-addon1">
						</div>
						<div class="col-md-6 col-sm-12" style="float: left; margin-top: 12px; padding-top: 15px; padding-bottom: 15px">
							<p><?php echo $lang["email"];?>:</p>
							<input type="email" class="form-control" name="email" placeholder="<?php echo $email;?>" aria-describedby="basic-addon1">
						</div>
						<div class="col-md-6 col-sm-12" style="float: left; margin-top: 12px; padding-top: 15px; padding-bottom: 15px">
							<p><?php echo $lang["password"];?>:</p>
							<input type="text" class="form-control" name="password" placeholder="<?php echo $password;?>" aria-describedby="basic-addon1">
						</div>
						<div class="col-md-12 col-sm-12" style="float: left; margin-top: 12px; padding-top: 15px; padding-bottom: 15px">
							<p><?php echo $lang["secure"];?>:</p>
							<input type="text" class="form-control" name="secure" placeholder="<?php echo $secure; ?>" aria-describedby="basic-addon1">
						</div>
						<div class="col-12">
							<input style="width: 100%; background-color: lightblue; border: solid 1px lightblue; border-radius: .25rem;
							 padding: 10px; font-family: Arial, Helvetica, sans-serif; margin-top: 2%" type="button" id="btn" value="<?php echo $lang["save"];?>">
						</div>	
					</form>
				</div>
				<p>** Eğer gmail adresinizi kullanmak isterseniz gmail hesabınızın düşük güvenlikli uygulama isteklerine açık olduğunu teyit ediniz!</p>
			</div>
		</div>
	</div>
</div>

<!-- Font Awesome Kit -->
<script src="https://kit.fontawesome.com/acae1827b1.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>