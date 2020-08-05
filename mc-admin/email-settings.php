<?php include("header.php"); ?>
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

		<!-- Sidebar -->
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="sidebar">
			<?php include("sidebar.php"); ?>
		</div>

		<!-- Mobile Sidebar -->
		<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="sidebar-mobile">
			<?php include("sidebar-mobile.php"); ?>
		</div>

		<!-- Main Content -->
		<div id="main-content" class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
			<div class="row justify-content-md-center">
				<div class="col-md-10 col-sm-12">
					<form id="frm" class="row">

						<!-- Result for Form Start -->
						<div class="col-12 text-center">
		        			<div id="sonuc"></div><br />
		        		</div>
		        		<!-- Result for Form End -->

						<h3 class="col-12 text-center pt-3"><?php echo $lang["email-settings"];?></h3>	
						<div class="col-md-6 col-sm-12 float-left mt-1 pt-2 pb-2">
							<p><?php echo $lang["host"];?>:</p>
							<input type="text" class="form-control" name="host" placeholder="<?php echo $host;?>" aria-describedby="basic-addon1">
						</div>
						<div class="col-md-6 col-sm-12 float-left mt-1 pt-2 pb-2">
							<p><?php echo $lang["port"];?>:</p>
							<input type="text" class="form-control" name="port" placeholder="<?php echo $port;?>" aria-describedby="basic-addon1">
						</div>
						<div class="col-md-6 col-sm-12 float-left mt-1 pt-2 pb-2">
							<p><?php echo $lang["email"];?>:</p>
							<input type="email" class="form-control" name="email" placeholder="<?php echo $email;?>" aria-describedby="basic-addon1">
						</div>
						<div class="col-md-6 col-sm-12 float-left mt-1 pt-2 pb-2">
							<p><?php echo $lang["password"];?>:</p>
							<input type="text" class="form-control" name="password" placeholder="<?php echo $password;?>" aria-describedby="basic-addon1">
						</div>
						<div class="col-md-12 col-sm-12 float-left mt-1 pt-2 pb-2">
							<p><?php echo $lang["secure"];?>:</p>
							<input type="text" class="form-control" name="secure" placeholder="<?php echo $secure; ?>" aria-describedby="basic-addon1">
						</div>
						<div class="col-12">
							<input class="send-button-100 mt-3" type="button" id="btn" value='<?php echo $lang["save"];?>'>
						</div>	
					</form>
				</div>
				<p><?php echo $lan["email-settings-error"]; ?></p>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(function(){
  	$("#btn").click(function(e){
		e.preventDefault();
    	var veri= $("#frm").serialize();
	    $.ajax({
	       	type:"post",
	       	url:"operations/email-settings.php",
	       	data:veri,
	       	success:function(sonuc){
	       		$("#sonuc").html((sonuc));
	    	}
    	});
	});
});
</script>
<!-- Font Awesome Kit -->
<script src="https://kit.fontawesome.com/acae1827b1.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>