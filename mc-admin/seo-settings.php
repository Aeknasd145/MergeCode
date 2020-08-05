<?php include("header.php"); 
	$seo_settings_query = $conn->query("SELECT * FROM seo");
	while ($seo_settings_query_read = mysqli_fetch_array($seo_settings_query)) {
		$title 		= 	$seo_settings_query_read["title"];
		$descrip 	= 	$seo_settings_query_read["descrip"];
		$keywords 	= 	$seo_settings_query_read["keywords"];
		$analytics 	= 	$seo_settings_query_read["analytics"];
		$adsense 	= 	$seo_settings_query_read["adsense"];
	}
	if (file_exists('../index.php')) {
		$read = file_get_contents('../header.php');
		$read .= file_get_contents('../index.php');
		$read .= file_get_contents('../footer.php');
		$satirsay = count(file('../index.php'));
		$satirsay += count(file('../header.php'));
		$satirsay += count(file('../footer.php'));
	}
	else if(file_exists('../index.html')){
		$read .= file_get_contents('../index.html');
		$satirsay = count(file('../index.html'));
	}
	$x = explode("\n",$read);
	for ($i=0, $h1=0; $i < $satirsay ; $i++) { 
		if(stristr($x[$i], "<h1>")){
			$h1++;
		}
	}
	for ($i=0, $h2=0; $i < $satirsay ; $i++) { 
		if(stristr($x[$i], "<h2>")){
			$h2++;
		}
	}
	for ($i=0, $h3=0; $i < $satirsay ; $i++) { 
		if(stristr($x[$i], "<h3>")){
			$h3++;
		}
	}
	if($h1!=1 || $h2==0 || $h2>4 || $h3==0 || $h3>4 ){
		$h_error = '<span style="color:red">Ana Sayfanızdaki H etiketleriniz uygun gözükmüyor.</span>';
	}
	else {
		$h_error = '<span style="color:green">Ana Sayfanızdaki H etiketleriniz uygun gözüküyor.</span>';
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
					<div class="col-10">
						<form id="frm" class="row">
							<div class="col-12 text-center">
			        			<div id="sonuc"></div><br />
			        		</div>
							<div class="col-12">
								<h3 class="text-center pt-3"><?php echo $lang["seo-settings"]; ?></h3>
							</div>
							<div class="col-md-6 col-sm-12 float-left mt-2 pt-3 pb-3">
								<p><?php echo $lang["seo-title"]; ?> :</p>
								<input type="text" class="form-control" name="title" placeholder="<?php echo $title; ?>" aria-describedby="basic-addon1">
							</div>
							<div class="col-md-6 col-sm-12 float-left mt-2 pt-3 pb-3">
								<p><?php echo $lang["seo-descrip"]; ?> :</p>
								<input type="text" class="form-control" name="descrip" placeholder="<?php echo $descrip; ?>" aria-describedby="basic-addon1">
							</div>
							<div class="col-md-6 col-sm-12 float-left mt-2 pt-3 pb-3">
								<p><?php echo $lang["seo-keywords"] ?> :</p>
								<input type="text" class="form-control" name="keywords" placeholder="<?php echo $keywords; ?>" aria-describedby="basic-addon1">
							</div>
							<div class="col-md-6 col-sm-12 float-left mt-2 pt-3 pb-3">
								<p><?php echo $lang["analytics-id"]; ?>:</p>
								<input type="text" class="form-control" name="analytics_id" placeholder="<?php echo $analytics; ?>" aria-describedby="basic-addon1">
							</div>
							<div class="col-12 float-left mt-2 pt-3 pb-3">
								<p><?php echo $lang["adsense-id"]; ?>:</p>
								<input type="text" class="form-control" name="adsense_id" placeholder="<?php echo $adsense; ?>" aria-describedby="basic-addon1">
							</div>
							<div class="col-md-4 col-sm-12 float-left mt-2">
								<p><?php echo $lang["robots-txt"]; ?>: <?php if(file_exists("../robots.txt")){echo $lang["exist"];}else{echo $lang["robots-txt-not-exist"];} ?></p>
							</div>
							<div class="col-md-4 col-sm-12 float-left mt-2">
								<p><?php echo $lang["sitemap-xml"] ?>: <?php if(file_exists("../sitemap.xml")){echo $lang["exist"];}else{echo $lang["sitemap-xml-not-exist"];} ?></p>
							</div>
							<div class="col-md-4 col-sm-12 float-left mt-2">
								<p><?php echo $lang["404"] ?>: <?php if(file_exists("../404.php")){echo $lang["exist"];}else{echo $lang["404-not-exist"];} ?></p>
							</div>
							<div class="col-12 float-left mt-2 pt-3 pb-3">
								<p>H Etiketi Uyumunuz: <?php echo $h_error; ?></p>
							</div>
							<div class="col-12 mb-4">
								<p>Google'da nasıl gözükür:</p>
								<div class="col-md-9 col-sm-12" style="border: 4px solid #f1f1f1; padding: 12px 10px; border-radius: 4px;">
									<p style="color: #00e; font-size: 16px; margin-bottom: 2px; overflow-x: hidden; text-decoration: underline; white-space: nowrap;"><?php echo $title; ?></p>
									<p><span style="color: #00802a; font-size: 14px; font-weight: bold;"><?php echo $url = $_SERVER['SERVER_NAME']."/"; ?></span></p>
									<p style="color: #444; font-family: helvetica,arial,sans-serif; font-size: 13px; margin: 0 0 5px;"><?php echo $descrip; ?></p>
								</div>
							</div>
							<div class="col-12 mb-3">
								<input class="send-button-100" type="button" id="btn" value="<?php echo $lang['save']; ?>">
							</div>
						</form>
					</div>
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
	       	url:"operations/seo-settings.php",
	       	data:veri,
	       	success:function(sonuc){
	       		$("#sonuc").html((sonuc));
	    	}
    	});
	});
});
</script>
<?php include("footer.php"); ?>