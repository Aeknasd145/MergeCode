<?php 
	include("header.php");
	$about_us_query = $conn->query("SELECT * FROM about_us WHERE id='1' ");
	while($read_about_us=mysqli_fetch_array($about_us_query)){
		$title = $read_about_us["title"];
		$content = $read_about_us["content"];
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
		<div id="main-content" class="col-lg-10 col-md-10 col-sm-12 col-xs-12 text-center">
			<form id="frm">
				<h2 class="mt-4"><?php echo $lang["about-us-page-title"];?></h2>
				<div class="col-12 text-center">
					<div id="sonuc"></div><br />	
				</div>
				<div class="col-12">
					<input class="input-85" type="text" name="title" placeholder="<?php echo $title;?>"/>	
				</div>
				<div class="col-12 mt-2">
					<textarea class="input-85" rows="15%" name="content" placeholder='<?php echo $content;?>'></textarea><br>	
				</div>
				<div class="col-12 mt-2">
					<input class="send-button-85" type="button" id="btn" value='<?php echo $lang["save"];?>'>	
				</div>				
			</form>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>
<script type="text/javascript">
$(function(){
  	$("#btn").click(function(e){
		e.preventDefault();
    	var veri= $("#frm").serialize();
	    $.ajax({
	       	type:"post",
	       	url:"operations/about-us.php",
	       	data:veri,
	       	success:function(sonuc){
	       		$("#sonuc").html((sonuc));
	    	}
    	});
	});
});
</script>