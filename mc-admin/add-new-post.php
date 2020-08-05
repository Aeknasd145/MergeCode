<?php include("header.php"); 
	$view = 0;
	$blog_sorgu = $conn->query("SELECT * FROM blog");
	while($blog_oku=mysqli_fetch_array($blog_sorgu)){
		$blogsay = $blog_oku["id"]; // number of topic
		$view += $blog_oku["view"];	// Total view
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

			<!-- 3 Card -->
			<div class="row card-css">
	          	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
	            	<div class="card-counter primary">
	             		<i class="fa fa-users"></i>
	              		<span class="count-numbers"><?php echo $blogsay; ?></span>
	              		<span class="count-name"><?php echo $lang["blog-box-1"];?></span>
	            	</div>
	          	</div>

	          	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
	            	<div class="card-counter danger">
	            		<i class="fab fa-sellcast"></i>
	              		<span class="count-numbers"><?php echo $view; ?></span>
	              		<span class="count-name"><?php echo $lang["blog-box-2"];?></span>
	            	</div>
	          	</div>

	          	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
	            	<div class="card-counter success">
	              		<i class="fas fa-id-card"></i>
	              		<span class="count-numbers">50</span>
	              		<span class="count-name"><?php echo $lang["blog-box-3"];?></span>
	            	</div>
	          	</div>
	        </div>

	        <!-- Add New Content Start -->
	        <div class="col-12">
	        	<form id="frm" class="row">
	        		<div class="col-12 text-center">
	        			<div id="sonuc"></div><br />
	        		</div>
	        		<div class="col-12">
	        			<div class="col-12">
	        				<h2><?php echo $lang["add-new-post"]; ?></h2>
	        			</div>
	        			<div class="col-12">
	        				<input class="input-100" type="text" name="title" placeholder='<?php echo $lang["title"]; ?>'>	
	        			</div>
	        			<div class="col-12">
	        				<input class="input-50 float-left mt-2" type="text" name="descrip" placeholder="<?php echo $lang["desc"]; ?>">
			        		<input class="input-50 float-left mt-2" type="text" name="keywords" placeholder="<?php echo $lang["keyw"]; ?>">
	        			</div>
	        			<div class="col-12">
	        				<textarea class="input-100 mt-3" rows="15%" name="content" placeholder="<?php echo $lang["content"]; ?>"></textarea>	
	        			</div>
	        			<div class="col-12">
	        				<input class="send-button-100 mt-2 mb-2" type="submit" id="btn" value="<?php echo $lang["save"];?>">	
	        			</div>
	        		</div>
	        	</form>
	        </div>
	        <!-- Add New Content End -->

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
	       	url:"operations/add-new-posts.php",
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