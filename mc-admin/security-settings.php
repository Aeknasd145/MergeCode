<?php include("header.php"); 

	$security_query = $conn->query("SELECT * FROM users WHERE id='$id' ");
	while ($security_query_read = mysqli_fetch_array($security_query)) {
		$username	= 	$security_query_read["username"];
		$password	= 	$security_query_read["password"];
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
						<h3 class="text-center pt-3">Güvenlik Ayarları</h3>	
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						  	<li class="nav-item">
						    	<a class="nav-link active" id="pills-securtiy-analysis-tab" data-toggle="pill" href="#pills-securtiy-analysis" role="tab" aria-controls="pills-securtiy-analysis" aria-selected="true">Güvenlik Analizi</a>
						  	</li>
						  	<li class="nav-item">
						   		<a class="nav-link" id="pills-login-security-tab" data-toggle="pill" href="#pills-login-security" role="tab" aria-controls="pills-login-security" aria-selected="false">Giriş Güvenliği</a>
						  	</li>
						  	<li class="nav-item">
						    	<a class="nav-link" id="pills-db-security-tab" data-toggle="pill" href="#pills-db-security" role="tab" aria-controls="pills-db-security" aria-selected="false">Veritabanı Güvenliği</a>
						  	</li>
						  	<li class="nav-item">
						    	<a class="nav-link" id="pills-file-security-tab" data-toggle="pill" href="#pills-file-security" role="tab" aria-controls="pills-file-security" aria-selected="false">Dosya Güvenliği</a>
						  	</li>
						  	<li class="nav-item">
						    	<a class="nav-link" id="pills-htaccess-security-tab" data-toggle="pill" href="#pills-htaccess-security" role="tab" aria-controls="pills-htaccess-security" aria-selected="false">.htaccess Güvenliği</a>
						  	</li>
						  	<li class="nav-item">
						    	<a class="nav-link" id="pills-banned-ip-tab" data-toggle="pill" href="#pills-banned-ip" role="tab" aria-controls="pills-banned-ip" aria-selected="false">Banlı IP</a>
						  	</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-securtiy-analysis" role="tabpanel" aria-labelledby="pills-securtiy-analysis-tab">
								<form action="" method="POST">
									<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="float: left">
										<h4 class="mb-4 mt-3">Güvenlik Skorunuz</h4>
										<div class="card shadow mb-4">
						                	<!-- Card Header - Dropdown -->
						                	<div class="card-header py-3">
						                  		<h6 class="m-0 font-weight-bold text-primary">Güvenlik Skorunuz</h6>
						                	</div>
						                	<!-- Card Body -->
						                	<div class="card-body">
						                  		<div class="chart-pie pt-4">
						                    		<canvas id="PieChart"></canvas>
						                  		</div>
						                  		<hr>
						                  		Durum: Kritik
						                	</div>
						              	</div>
						        	</div>
						        	<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" style="float: left">
						        		<h4 class="mb-4 mt-3">Eksikleriniz:</h4>
						        		<ul>
						        			<li>s</li>
						        			<li>s</li>
						        			<li>s</li>
						        			<li>s</li>
						        			<li>s</li>
						        			<li>s</li>
						        			<li>s</li>
						        			<li>s</li>
						        			<li>s</li>
						        			<li>s</li>
						        		</ul>
						        	</div>
								</form>	
							</div>			
							<div class="tab-pane fade" id="pills-login-security" role="tabpanel" aria-labelledby="pills-login-security-tab">
								<form action="" method="POST">
									<?php 
										if($username=="admin"){
											echo "Kullanıcı adınızın 'Admin' ve bu tarz basit şeyler olması Brute Force saldırıları için oldukça risklidir.<br><br>";
										}
										if($password == md5("admin") || $password == md5("12345") || $password == md5("123456")){
											echo "Şifrenizin 'admin' ve bu tarz basit şeyler olması Brute Force saldırıları için oldukça risklidir.<br><br>";
										}
									?>
									<div class="col-12">
										<h4>Giriş Denemesi</h4>
										<p>Deneme Sınırı: <input type="number" name="login_attempt" placeholder="Varsayılan: 10"></p>
										<p>Ban Süresi: <input type="number" name="time_out" placeholder="Varsayılan: 300 sn"></p>
										<div class="form-check">
											<?php 
												// db de 1 se seçili, 0 sa seçili değil olacak. "checked"
											?>
										  <input class="form-check-input" type="checkbox" value="" name="save_ip" id="defaultCheck1" checked>
										  <label class="form-check-label" for="defaultCheck1">IP Kaydet</label>
										</div>
									</div><br>
									<button type="submit" class="btn btn-primary">Kaydet</button>
								</form>	
							</div>	
							<div class="tab-pane fade" id="pills-db-security" role="tabpanel" aria-labelledby="pills-db-security-tab">
								<form action="" method="POST">
									...
									<button type="submit" class="btn btn-primary">Kaydet</button>
								</form>	
							</div>	
							<div class="tab-pane fade" id="pills-file-security" role="tabpanel" aria-labelledby="pills-file-security-tab">
								<form action="" method="POST">
									...
									<button type="submit" class="btn btn-primary">Kaydet</button>
								</form>	
							</div>	
							<div class="tab-pane fade" id="pills-htaccess-security" role="tabpanel" aria-labelledby="pills-htaccess-security-tab">
								<form action="" method="POST">
									...
									<button type="submit" class="btn btn-primary">Kaydet</button>
								</form>	
							</div>	
							<div class="tab-pane fade" id="pills-banned-ip" role="tabpanel" aria-labelledby="pills-banned-ip-tab">
								<form action="operations/delete_ip.php" method="POST">
									<table class="table">
									  	<thead class="thead-dark">
									    	<tr>
											    <th scope="col">ID</th>
											    <th scope="col">IP</th>
											    <th scope="col">Tarih</th>
											    <th scope="col">Sil</th>
									    	</tr>
									 	</thead>
									  	<tbody>
										  	<?php 
											  	$banned_ip_query = $conn->query("SELECT * FROM banned_ip");
												while ($banned_ip_query_read = mysqli_fetch_array($banned_ip_query)) {
													echo '<tr><th scope="row">'.$banned_ip_query_read["id"].'</th>';
													echo '<td>'.$banned_ip_query_read["ip"].'</td>';
													echo '<td>'.$banned_ip_query_read["date"].'</td>';
													echo '<td><button name="id" value="'.$banned_ip_query_read["id"].'" type="submit" class="btn btn-primary">Sil</button></td></tr>';
												}
										  	?>
									  	</tbody>
									</table>
								</form>	
								<a href="operations/delete_ip.php"><button type="submit" class="btn btn-primary">Tamamını Sil</button></a>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Pie Chart JS -->
<script src="js/chart/chart.min.js"></script>
<script src="js/chart/security/chart-analysis.js"></script>
<?php include("footer.php"); ?>