<?php 
	include("header.php"); 
	$users_query = $conn->query("SELECT * FROM users WHERE id='$id' ");
	while ($users_query_read = mysqli_fetch_array($users_query)) {
		$username	= 	$users_query_read["username"];
		$password	= 	$users_query_read["password"];
	}
	$security_query = $conn->query("SELECT * FROM security");
	while ($security_query_read = mysqli_fetch_array($security_query)) {
		$entry_limit	= 	$security_query_read["entry_limit"];
		$time_out		= 	$security_query_read["time_out"];
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
					<h3 class="text-center pt-3"><?php echo $lang["security-settings"] ?></h3>	
					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					  	<li class="nav-item">
					    	<a class="nav-link active" id="pills-securtiy-analysis-tab" data-toggle="pill" href="#pills-securtiy-analysis" role="tab" aria-controls="pills-securtiy-analysis" aria-selected="true"><?php echo $lang["security-analysis"]; ?></a>
					  	</li>
					  	<li class="nav-item">
					   		<a class="nav-link" id="pills-login-security-tab" data-toggle="pill" href="#pills-login-security" role="tab" aria-controls="pills-login-security" aria-selected="false"><?php echo $lang["login-security"]; ?></a>
					  	</li>
					  	<li class="nav-item">
					    	<a class="nav-link" id="pills-db-security-tab" data-toggle="pill" href="#pills-db-security" role="tab" aria-controls="pills-db-security" aria-selected="false"><?php echo $lang["db-security"]; ?></a>
					  	</li>
					  	<li class="nav-item">
					    	<a class="nav-link" id="pills-file-security-tab" data-toggle="pill" href="#pills-file-security" role="tab" aria-controls="pills-file-security" aria-selected="false"><?php echo $lang["file-security"]; ?></a>
					  	</li>
					  	<li class="nav-item">
					    	<a class="nav-link" id="pills-htaccess-security-tab" data-toggle="pill" href="#pills-htaccess-security" role="tab" aria-controls="pills-htaccess-security" aria-selected="false"><?php echo $lang["htaccess-security"]; ?></a>
					  	</li>
					  	<li class="nav-item">
					    	<a class="nav-link" id="pills-banned-ip-tab" data-toggle="pill" href="#pills-banned-ip" role="tab" aria-controls="pills-banned-ip" aria-selected="false"><?php echo $lang["banned-ip"]; ?></a>
					  	</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-securtiy-analysis" role="tabpanel" aria-labelledby="pills-securtiy-analysis-tab">
							<form action="" method="POST">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 float-left">
									<h4 class="mb-4 mt-3"><?php echo $lang["security-score"]; ?></h4>
									<div class="card shadow mb-4">
					                	<!-- Card Header - Dropdown -->
					                	<div class="card-header py-3">
					                  		<h6 class="m-0 font-weight-bold text-primary"><?php echo $lang["security-score"]; ?></h6>
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
					        	<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 float-left">
					        		<h4 class="mb-4 mt-3">Eksikleriniz:</h4>
					        		<ul>
				        				<?php
				        					if($password == md5("admin") || $password == md5("12345") || $password == md5("123456")){
												echo '<li><span style="color: red;">Şifrenizin "admin" ve bu tarz basit şeyler olması Brute Force saldırıları için oldukça risklidir.</span></li>';
											}
				        					if($entry_limit==0){
				        						echo '<li><span style="color: red;">Lütfen giriş denemesi için sınır belirleyin.</span></li>';
				        					} 
				        					if($time_out==0){
				        						echo '<li><span style="color: red;">Lütfen giriş denemesi için süre sınırı belirleyin.</span></li>';
				        					}
				        				?>
					        		</ul>
					        	</div>
							</form>	
						</div>			
						<div class="tab-pane fade" id="pills-login-security" role="tabpanel" aria-labelledby="pills-login-security-tab">
							
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
									<form id="frm">
										<div class="col-12 text-center">
						        			<div id="sonuc"></div><br />
						        		</div>
						        		<table>
						        			<tr>
						        				<td>Deneme Sınırı: </td>
						        				<td><input type="number" name="entry_limit" placeholder="Varsayılan: 5"></td>
						        			</tr>
						        			<tr>
						        				<td>Ban Süresi: </td>
						        				<td><input type="number" name="time_out" placeholder="Varsayılan: 300 sn"></td>
						        			</tr>
						        		</table>
										<!--<div class="form-check">
											<?php 
												// db de 1 se seçili, 0 sa seçili değil olacak. "checked"
											?>
										  <input class="form-check-input" type="checkbox" value="" name="save_ip" id="defaultCheck1" checked>
										  <label class="form-check-label" for="defaultCheck1">IP Kaydet</label>
										</div>-->
										<input class="send-button-100 mt-2" type="button" id="btn" value="<?php echo $lang["save"];?>">
									</form>
									
								</div><br>
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
								HTACCESS Ayarları<br>
								404 yönlendirmesi için: ErrorDocument 404 https://www.site.com/404.php<br>
								dosya yönlendirme (uzantı kaldırmak için vs): RewriteRule ^index/?$ index.php [NC,L]<br>
								Optimizasyon için:<br>
								<\IfModule mod_expires.c>
								  ExpiresActive On
								  # Images
								  ExpiresByType image/jpeg "access plus 1 year"
								  ExpiresByType image/gif "access plus 1 year"
								  ExpiresByType image/png "access plus 1 year"
								  ExpiresByType image/webp "access plus 1 year"
								  ExpiresByType image/svg+xml "access plus 1 year"
								  ExpiresByType image/x-icon "access plus 1 year"
								  # Video
								  ExpiresByType video/mp4 "access plus 1 year"
								  ExpiresByType video/mpeg "access plus 1 year"
								  # CSS, JavaScript
								  ExpiresByType text/css "access plus 1 month"
								  ExpiresByType text/javascript "access plus 1 month"
								  ExpiresByType application/javascript "access plus 1 month"
								  # Others
								  ExpiresByType application/pdf "access plus 1 month"
								  ExpiresByType application/x-shockwave-flash "access plus 1 month"
								<\/IfModule>
								<input class="send-button-100 mt-2" type="button" id="btn" value="<?php echo $lang["save"];?>">
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

<script type="text/javascript">
$(function(){
  	$("#btn").click(function(e){
		e.preventDefault();
    	var veri= $("#frm").serialize();
	    $.ajax({
	       	type:"post",
	       	url:"operations/security-settings.php",
	       	data:veri,
	       	success:function(sonuc){
	       		$("#sonuc").html((sonuc));
	    	}
    	});
	});
});
</script>
<?php include("footer.php"); ?>
<!-- Pie Chart JS -->
<script src="js/chart/chart.min.js"></script>
<script src="js/chart/security/chart-analysis.js"></script>