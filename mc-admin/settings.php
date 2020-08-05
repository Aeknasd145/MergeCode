<?php 
	include("header.php"); 
	$query = $conn->query("SELECT * FROM users WHERE id=$id ");
	while ($read_query = mysqli_fetch_array($query)) {
		$username = $read_query["username"];
		$email = $read_query["email"];
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
					<form id="frm" class="row" onsubmit="return false;" method="POST" enctype="multipart/form-data">
						<div class="col-12 text-center">
		        			<div id="sonuc"></div><br />
		        		</div>
		        		<h3 class="col-12 text-center pt-3"><?php echo $lang["settings"];?></h3>	
						<div class="col-md-6 col-sm-12 float-left mt-1 pb-2 pt-2">
							<p><?php echo $lang["username"];?>:</p>
							<input type="text" class="form-control" name="username" placeholder="<?php echo $username; ?>" aria-describedby="basic-addon1">
						</div>
						<div class="col-md-6 col-sm-12 float-left mt-1 pb-2 pt-2">
							<p><?php echo $lang["email"];?>:</p>
							<input type="text" class="form-control" name="email" placeholder="<?php echo $email; ?>" aria-describedby="basic-addon1">
						</div>
						<div class="col-md-6 col-sm-12 float-left mt-1 pb-2 pt-2">
							<p><?php echo $lang["new-password"];?>:</p>
							<input type="text" class="form-control" name="new-password" placeholder="<?php echo $lang['new-password']; ?>" aria-describedby="basic-addon1">
						</div>
						<div class="col-md-6 col-sm-12 float-left mt-1 pb-2 pt-2">
							<p><?php echo $lang["new-password-again"];?>:</p>
							<input type="text" class="form-control" name="new-password-again" placeholder="<?php echo $lang['new-password-again']; ?>" aria-describedby="basic-addon1">
						</div>
						<div class="col-12 mt-3 mb-3">
							<div class="input-group">
							  	<div class="input-group-prepend">
							    	<span class="input-group-text" id="inputGroupFileAddon01"><?php echo $lang["upload"]; ?></span>
							  	</div>
							  	<div class="custom-file">
							    	<input type="file" class="custom-file-input" id="inputGroupFile01" name="logo"
							      aria-describedby="inputGroupFileAddon01" accept="image/jpeg,image/png,image/jpg">
							    	<label class="custom-file-label" for="inputGroupFile01"><?php echo $lang["choose-file"]; ?></label>
							  	</div>
							</div>
						</div>
						<div class="col-12">
							<input class="send-button-100 mt-2" type="submit" id="btn" value="<?php echo $lang["save"];?>">
						</div>
					</form>	
					<div class="col-md-6 col-sm-12 float-left mt-4 pb-2 pt-2">
						<p><?php echo $lang["select-lang"];?>:</p>
						<ul class="list-group">
						<?php
							if ($_SESSION["lang"]=="tr") {
							?>
								<a href="language/select-lang.php?lang=tr"><li class="list-group-item active"><?php echo $lang["tr"]; ?></li></a>
 								<a href="language/select-lang.php?lang=en"><li class="list-group-item"><?php echo $lang["en"]; ?></li></a>		
							<?php
							}
							else {
							?>
								<a href="language/select-lang.php?lang=tr"><li class="list-group-item"><?php echo $lang["tr"]; ?></li></a>
 								<a href="language/select-lang.php?lang=en"><li class="list-group-item active"><?php echo $lang["en"]; ?></li></a>		
							<?php	
							}
						?>
						</ul>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
<?php include("footer.php") ?>
<script type="text/javascript">
$(function(){
  	$("#btn").click(function(e){
		e.preventDefault();
		var form = $('#frm')[0];
        var formData = new FormData(form);
        event.preventDefault();
        $.ajax({
            url: "operations/settings.php",
            type: "POST",
            processData: false,
            contentType: false,
            data: formData,
            success:function(sonuc){
	       		$("#sonuc").html((sonuc));
	    	}
        });
	});
});
</script>