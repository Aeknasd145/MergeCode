<?php include("header.php"); 

	$theme_settings_query = $conn->query("SELECT * FROM theme");
	while ($theme_settings_query_read = mysqli_fetch_array($theme_settings_query)) {
		$title 		= 	$theme_settings_query_read["title"];
		$desc 		= 	$theme_settings_query_read["desc"];
		$keywords 	= 	$theme_settings_query_read["keywords"];
		$analytics 	= 	$theme_settings_query_read["analytics"];
		$adsense 	= 	$theme_settings_query_read["adsense"];
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
				<div class="row justify-content-md-center mt-4">
					<div class="col-10" style="border: solid 1px grey;">
						<form action="" method="POST">
							<h3 class="text-center pt-3">Tema Ayarları</h3>	
							<div class="col-md-6 col-sm-12" style="float:left; margin-top: 12px; padding-top: 15px; padding-bottom: 15px">
								<p>Ana Sayfa Başlığı:</p>
								<input type="text" class="form-control" placeholder="<?php echo $title; ?>" aria-describedby="basic-addon1">
							</div>
							<div class="col-md-6 col-sm-12" style="float: left; margin-top: 12px; padding-top: 15px; padding-bottom: 15px">
								<p>Açıklama:</p>
								<input type="text" class="form-control" placeholder="<?php echo $desc; ?>" aria-describedby="basic-addon1">
							</div>
							<div class="col-md-6 col-sm-12" style="float: left; margin-top: 12px; padding-top: 15px; padding-bottom: 15px">
								<p>Anahtar Kelimeler:</p>
								<input type="text" class="form-control" placeholder="<?php echo $keywords; ?>" aria-describedby="basic-addon1">
							</div>
							<div class="col-md-6 col-sm-12" style="float: left; margin-top: 12px; padding-top: 15px; padding-bottom: 15px">
								<p>Google Analytics ID:</p>
								<input type="text" class="form-control" placeholder="<?php echo $analytics; ?>" aria-describedby="basic-addon1">
							</div>
							<div class="col-12" style="float: left; margin-top: 12px; padding-top: 15px; padding-bottom: 15px">
								<p>Google Adsense ID:</p>
								<input type="text" class="form-control" placeholder="<?php echo $adsense; ?>" aria-describedby="basic-addon1">
							</div>		
							<button type="submit" class="btn btn-primary">Kaydet</button>				
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php include("footer.php"); ?>