<?php 
	include("header.php");
	$user_sorgu = $conn->query("SELECT * FROM users ORDER BY id DESC");
	while($user_oku=mysqli_fetch_array($user_sorgu)){
		$usersay = $user_oku["id"];
		break;
	}
	$sayfa_say = ceil($usersay/10);
	$abone_sorgu = $conn->query("SELECT * FROM subs");
	$abone_say = mysqli_num_rows($abone_sorgu);
	$istenen_say = @$_GET["page"];
	if(empty($istenen_say)){
		$istenen_say=1;
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
		          	<div class="col-xl-4 col-md-4 col-sm-6 col-xs-6">
		            	<div class="card-counter primary">
		             		<i class="fa fa-users"></i>
		              		<span class="count-numbers"><?php echo $usersay; ?></span>
		              		<span class="count-name">Üye Sayısı</span>
		            	</div>
		          	</div>

		          	<div class="col-xl-4 col-md-4 col-sm-6 col-xs-6">
		            	<div class="card-counter danger">
		            		<i class="fab fa-sellcast"></i>
		              		<span class="count-numbers"><?php echo $abone_say; ?></span>
		              		<span class="count-name">Abone Sayısı</span>
		            	</div>
		          	</div>

		          	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
		            	<div class="card-counter success">
		              		<i class="fas fa-id-card"></i>
		              		<span class="count-numbers">50</span>
		              		<span class="count-name">Example</span>
		            	</div>
		          	</div>
		        </div>
		        <div class="row">
		        	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
		              <div class="card shadow mb-4">
		                <!-- Card Header - Dropdown -->
		                <div class="card-header py-3">
		                  <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
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
		                  <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
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
		                  <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
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
		        <div class="row">
		        	<div class="col-12">
		        		<div class="col-12" style="margin-bottom: 3%;">
		        			<div class="col-md-6 col-sm-12" style="float: left;">
		        				<h2>Kullanıcı Bilgileri</h2>
		        			</div>
		        			<div class="col-md-6 col-sm-12" style="float: left;">
		        				<input id="my_search" onkeyup="search()" style="border-radius: .35rem; border: solid 1px grey; float: right" type="text" name="search" placeholder="Ara..">
		        			</div>
		        		</div>
			        	<div class="col-12">
			        		<table id="search_table" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th data-field="id">
											<div class="th-inner ">ID</div>
											<div class="fht-cell"></div>
										</th>
										<th data-field="name">
											<div class="th-inner ">User Name</div>
											<div class="fht-cell"></div>
										</th>
										<th data-field="price">
											<div class="th-inner ">E-mail</div>
											<div class="fht-cell"></div>
										</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$ilk_kayit=($istenen_say*10)-10;
										$user_sorgu = $conn->query("SELECT * FROM users ORDER BY id DESC LIMIT $ilk_kayit,10");
										while($user_oku=mysqli_fetch_array($user_sorgu)){
											echo '<tr>
												<td style="">'.$user_oku["id"].'</td>
												<td style="">'.$user_oku["username"].'</td>
												<td style="">'.$user_oku["email"].'</td>
											</tr>';		
										}
									?>
								</tbody>
							</table>
							<div style="float: right; margin-bottom: 2%">
								<?php 
									for($page=1;$page<=$sayfa_say;$page++){
										echo '<a href="data-user.php?page='.$page.'">';
									?>
										<input style="background-color: lightblue; border: solid 1px lightblue; border-radius: .25rem; width:30px;" type="button" name="<?php echo $page; ?>" value="<?php echo $page; ?>"></a>
									<?php
									}
								?>
							</div>
						</div>
		        	</div>
		        </div>
			</div>
		</div>
	</div>
<script>
function search() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("my_search");
  filter = input.value.toUpperCase();
  table = document.getElementById("search_table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td  = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<!-- Pie Chart JS -->
<script src="js/chart/chart.min.js"></script>
<script src="js/chart/chart-pie.js"></script>
<script src="js/chart/chart-pie2.js"></script>
<script src="js/chart/chart-pie3.js"></script>
<?php include("footer.php"); ?>