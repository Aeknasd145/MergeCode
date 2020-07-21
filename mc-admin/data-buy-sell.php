<?php include("header.php"); ?>
	
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
		          	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
		            	<div class="card-counter primary">
		             		<i class="fa fa-users"></i>
		              		<span class="count-numbers">50</span>
		              		<span class="count-name">Kullanıcı</span>
		            	</div>
		          	</div>

		          	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
		            	<div class="card-counter danger">
		            		<i class="fab fa-sellcast"></i>
		              		<span class="count-numbers">50</span>
		              		<span class="count-name">Ürün Satışı</span>
		            	</div>
		          	</div>

		          	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
		            	<div class="card-counter success">
		              		<i class="fas fa-id-card"></i>
		              		<span class="count-numbers">50</span>
		              		<span class="count-name">Canlı Destek İletişimi</span>
		            	</div>
		          	</div>
		        </div>
			</div>
		</div>
	</div>

<?php include("footer.php"); ?>