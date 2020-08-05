<?php include("header.php"); 
	$post_id = addslashes(htmlspecialchars($_GET["id"]));
	if(!$post_id){
		echo "Lütfen linkte id kullanın!";
		exit;
	}
	else if(!is_numeric($post_id)){
		echo "id değeri sayı olmalıdır";
		exit;
	}
	$sorgu = $conn->query("SELECT * FROM blog WHERE id='$id'");
	while ($sorgu_oku = mysqli_fetch_array($sorgu)) {
		$title = $sorgu_oku['title'];
		$content = $sorgu_oku['content'];
		$descrip = $sorgu_oku['descrip'];
		$keywords = $sorgu_oku['keywords'];
		$seo_url = $sorgu_oku['seo_url'];
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

	        <!-- Add New Posts Start -->
	        <div class="col-12">
        		<div class="col-12">
        			<h3 class="text-center"><?php echo $lang["post-edit"]; ?></h3>
		    		<form id="frm" class="row">
		    			<div class="col-12 text-center">
		        			<div id="sonuc"></div><br />
		        		</div>
		    			<div class="col-12">
		    				<h5><?php echo $lang["title"]; ?>:</h5>
		    				<input type="text" name="title" class="form-control input-100" placeholder="<?php echo $title; ?>">
		    			</div>
		    			<div class="col-12 mt-3">
		    				<h5><?php echo $lang["content"]; ?>:</h5>
			        		<textarea class="input-100 mt-0" rows="15%" name="content" placeholder='<?php echo $content; ?>'></textarea>
		    			
		    			</div>
		    			<div class="col-12 mt-2">
		    				<div class="col-6 float-left p-0">
		    					<h5><?php echo $lang["desc"]; ?>: </h5>
		    					<input type="text" name="descrip" class="form-control input-100" placeholder="<?php echo $descrip; ?>">	
		    				</div>
		    				<div class="col-6 float-left p-0">
		    					<h5><?php echo $lang["keyw"]; ?>: </h5>
		    					<input type="text" name="keywords" class="form-control input-100" placeholder="<?php echo $keywords; ?>">
		    				</div>
		    			</div>
		    			<div class="col-12 mt-2">
		    				<h5>SEO URL: </h5>
		    				<input type="text" name="seo_url" class="form-control input-100" placeholder="<?php echo $seo_url; ?>">	
		    			</div>
		    			<div class="col-12 mt-3 mb-3">
							<input class="send-button-100" type="button" id="btn" value="<?php echo $lang['save']; ?>">
		    			</div>
        			</form>
        		</div>
	        </div>
	        <!-- Add New Posts End -->

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
	       	url:"operations/post-edit.php",
	       	data:veri,
	       	success:function(sonuc){
	       		$("#sonuc").html((sonuc));
	    	}
    	});
	});
});
</script>
<?php include("footer.php"); ?>