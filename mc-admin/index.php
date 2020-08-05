<?php include("header.php"); 
	$user_query = $conn->query("SELECT * FROM users ORDER BY id DESC");
	while($read_user=mysqli_fetch_array($user_query)){
		$usersay = $read_user["id"]; // number of users
		$password = $read_user["password"];
		break;
	}
	$seo_query = $conn->query("SELECT * FROM seo");
	while ($read_seo = mysqli_fetch_array($seo_query)) {
		$title = $read_seo["title"];
		$descrip = $read_seo["descrip"];
		$keywords = $read_seo["keywords"];
		$analytics = $read_seo["analytics"];
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
		$read = file_get_contents('../header.html');
		$read .= file_get_contents('../index.html');
		$read .= file_get_contents('../footer.html');
		$satirsay = count(file('../index.html'));
		$satirsay += count(file('../header.html'));
		$satirsay += count(file('../footer.html'));
	}
	else if(file_exists('../index.js')){
		$read = file_get_contents('../header.js');
		$read .= file_get_contents('../index.js');
		$read .= file_get_contents('../footer.js');
		$satirsay = count(file('../index.js'));
		$satirsay += count(file('../header.js'));
		$satirsay += count(file('../footer.js'));
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
		$h_error = 1;
	}
	else {
		$h_error = 0;
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

	        <!-- 3 Chart -->
	        <div class="row mt-2">
	        	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
	              <div class="card shadow mb-4">
	                <!-- Card Header - Dropdown -->
	                <div class="card-header py-3">
	                  <h6 class="m-0 font-weight-bold text-primary"><?php echo $lang["index-chart-1"];?></h6>
	                </div>
	                <!-- Card Body -->
	                <div class="card-body">
	                  <div class="chart-pie pt-4">
	                    <canvas id="PieChart"></canvas>
	                  </div>
	                  <hr>
	                  <?php echo $lang["index-chart-desc-1"];?>
	                </div>
	              </div>
	        	</div>
	        	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
	              <div class="card shadow mb-4">
	                <!-- Card Header - Dropdown -->
	                <div class="card-header py-3">
	                  <h6 class="m-0 font-weight-bold text-primary"><?php echo $lang["index-chart-2"];?></h6>
	                </div>
	                <!-- Card Body -->
	                <div class="card-body">
	                  <div class="chart-pie pt-4">
	                    <canvas id="PieChart2"></canvas>
	                  </div>
	                  <hr>
	                  <?php echo $lang["index-chart-desc-2"];?>
	                </div>
	              </div>
	        	</div>
	        	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
	              <div class="card shadow mb-4">
	                <!-- Card Header - Dropdown -->
	                <div class="card-header py-3">
	                  <h6 class="m-0 font-weight-bold text-primary"><?php echo $lang["index-chart-3"];?></h6>
	                </div>
	                <!-- Card Body -->
	                <div class="card-body">
	                  <div class="chart-pie pt-4">
	                    <canvas id="PieChart3"></canvas>
	                  </div>
	                  <hr>
	                  <?php echo $lang["index-chart-desc-3"];?>
	                </div>
	              </div>
	        	</div>
	        </div>

	        <!-- First Area -->
	        <div class="row justify-content-center">
	        	<div class="col-10">
	        		<hr />
		        	<h3><?php echo $lang["index-h-1"];?></h3>
		        	<ul>
			        	<?php 
			        		$need_update = 1;
			        		if(!$title || !$descrip || !$keywords || !$analytics){
			        			echo '<li style="color: red;">'.$lang["missing-seo-content"].'</li>';
			        			$need_update=0;
			        		}
			        		if(strlen($title)>70){
			        			echo '<li style="color: red;">'.$lang["long-title"].'</li>';
			        			$need_update=0;
			        		}
			        		if(strlen($descrip)>320){
			        			echo '<li style="color: red;">'.$lang["long-descrip"].'</li>';
			        			$need_update=0;
			        		}
			        		if(strlen($keywords)>260){
			        			echo '<li style="color: red;">'.$lang["long-keywords"].'</li>';
			        			$need_update=0;
			        		}
			        		if($h_error){
			        			echo '<li style="color: red;">'.$lang["wrong-h-tag"].'</li>';
			        			$need_update=0;
			        		}
			        		if(!file_exists("../robots.txt")){
			        			echo '<li style="color: red;">'.$lang["robots-txt-not-exist"].'</li>';
			        			$need_update=0;
			        		}
			        		if(!file_exists("../sitemap.xml")){
			        			echo '<li style="color: red;">'.$lang["sitemap-xml-not-exist"].'</li>';
			        			$need_update=0;
			        		}
			        		if(!file_exists("../404.php") && !file_exists("../404.html") && !file_exists("../404.htm")){
			        			echo '<li style="color: red;">'.$lang["404-not-exist"].'</li>';
			        			$need_update=0;
			        		}
			        		if($need_update){
			        			echo '<li style="color: green;">'.$lang["seo-good"].'</li>';
			        		}
			        	?>
		        	</ul>
	        	</div>
	        </div>

	        <!-- Second Area -->
	        <div class="row justify-content-center mb-5">
	        	<div class="col-10">
	        		<hr />
		        	<h3><?php echo $lang["index-h-2"];?></h3>
		        	<ul>
						<?php
							if($password == md5("admin") || $password == md5("12345") || $password == md5("123456")){
								echo '<li style="color: red;">Şifrenizin "admin" ve bu tarz basit şeyler olması Brute Force saldırıları için oldukça risklidir.</li>';
							}
							if($entry_limit==0){
								echo '<li style="color: red;">Lütfen giriş denemesi için sınır belirleyin.</li>';
							} 
							if($time_out==0){
								echo '<li style="color: red;">Lütfen giriş denemesi için süre sınırı belirleyin.</li>';
							}
						?>
    				</ul>
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