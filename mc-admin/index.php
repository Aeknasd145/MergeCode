<?php include("header.php"); 
	$user_sorgu = $conn->query("SELECT * FROM users ORDER BY id DESC");
	while($user_oku=mysqli_fetch_array($user_sorgu)){
		$usersay = $user_oku["id"];
		break;
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
				<div class="row card-css">
		          	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
		            	<div class="card-counter primary">
		             		<i class="fa fa-users"></i>
		              		<span class="count-numbers"><?php echo $usersay; ?></span>
		              		<span class="count-name"><?php echo $lang["index-box-1"];?></span>
		            	</div>
		          	</div>

		          	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
		            	<div class="card-counter danger">
		            		<i class="fab fa-sellcast"></i>
		              		<span class="count-numbers">50</span>
		              		<span class="count-name"><?php echo $lang["index-box-2"];?></span>
		            	</div>
		          	</div>

		          	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
		            	<div class="card-counter success">
		              		<i class="fas fa-id-card"></i>
		              		<span class="count-numbers">50</span>
		              		<span class="count-name"><?php echo $lang["index-box-3"];?></span>
		            	</div>
		          	</div>
		        </div>
		        <div class="row" style="margin-top: 1%">
		        	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
		              <div class="card shadow mb-4">
		                <!-- Card Header - Dropdown -->
		                <div class="card-header py-3">
		                  <h6 class="m-0 font-weight-bold text-primary">Demo</h6>
		                </div>
		                <!-- Card Body -->
		                <div class="card-body">
		                  <div class="chart-pie pt-4">
		                    <canvas id="PieChart"></canvas>
		                  </div>
		                  <hr>
		                  Chart Pie
		                </div>
		              </div>
		        	</div>
		        	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
		              <div class="card shadow mb-4">
		                <!-- Card Header - Dropdown -->
		                <div class="card-header py-3">
		                  <h6 class="m-0 font-weight-bold text-primary">Seo Skoru</h6>
		                </div>
		                <!-- Card Body -->
		                <div class="card-body">
		                  <div class="chart-pie pt-4">
		                    <canvas id="PieChart2"></canvas>
		                  </div>
		                  <hr>
		                  Chart Pie
		                </div>
		              </div>
		        	</div>
		        	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
		              <div class="card shadow mb-4">
		                <!-- Card Header - Dropdown -->
		                <div class="card-header py-3">
		                  <h6 class="m-0 font-weight-bold text-primary">Güvenlik Skoru</h6>
		                </div>
		                <!-- Card Body -->
		                <div class="card-body">
		                  <div class="chart-pie pt-4">
		                    <canvas id="PieChart3"></canvas>
		                  </div>
		                  <hr>
		                  Chart Pie
		                </div>
		              </div>
		        	</div>
		        </div>
		        <div class="row justify-content-center">
		        	<div class="col-10">
		        		<hr />
			        	<h3>Seo Eksikleri</h3>
			        	<p>Lorem Ipsum</p>
			        	<p>Lorem Ipsum</p>
			        	<p>Lorem Ipsum</p>
			        	<p>Lorem Ipsum</p>
			        	<p>Lorem Ipsum</p>
		        	</div>
		        </div>
		        <div class="row justify-content-center">
		        	<div class="col-10">
		        		<hr />
			        	<h3>Güvenlik Eksikleri</h3>
			        	<p>Lorem Ipsum</p>
			        	<p>Lorem Ipsum</p>
			        	<p>Lorem Ipsum</p>
			        	<p>Lorem Ipsum</p>
			        	<p>Lorem Ipsum</p>
			        </div>
		        </div>
			</div>
		</div>
	</div>

<?php include("footer.php"); ?>
<!-- Pie Chart JS -->
<script src="js/chart/chart.min.js"></script>
<script src="js/chart/chart-pie.js"></script>
<script src="js/chart/chart-pie2.js"></script>
<script src="js/chart/chart-pie3.js"></script>