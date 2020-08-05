<?php 
	include("header.php");
	$user_sorgu = $conn->query("SELECT * FROM users ORDER BY id DESC");
	while($user_oku=mysqli_fetch_array($user_sorgu)){
		$usersay = $user_oku["id"]; // number of users
		break;
	}
	$sayfa_say = ceil($usersay/10); // number of page
	$abone_sorgu = $conn->query("SELECT * FROM subs"); //subscriber query
	$abone_say = mysqli_num_rows($abone_sorgu);
	$istenen_say = @$_GET["page"]; // wanted page
	if(empty($istenen_say)){
		$istenen_say=1;
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
		          	<div class="col-xl-4 col-md-4 col-sm-6 col-xs-6">
		            	<div class="card-counter primary">
		             		<i class="fa fa-users"></i>
		              		<span class="count-numbers"><?php echo $usersay; ?></span>
		              		<span class="count-name"><?php echo $lang["data-user-box-1"];?></span>
		            	</div>
		          	</div>

		          	<div class="col-xl-4 col-md-4 col-sm-6 col-xs-6">
		            	<div class="card-counter danger">
		            		<i class="fab fa-sellcast"></i>
		              		<span class="count-numbers"><?php echo $abone_say; ?></span>
		              		<span class="count-name"><?php echo $lang["data-user-box-2"];?></span>
		            	</div>
		          	</div>

		          	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
		            	<div class="card-counter success">
		              		<i class="fas fa-id-card"></i>
		              		<span class="count-numbers">50</span>
		              		<span class="count-name"><?php echo $lang["data-user-box-3"];?></span>
		            	</div>
		          	</div>
		        </div>

		        <!-- 3 Chart -->
		        <div class="row mt-2">
		        	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
		              <div class="card shadow mb-4">
		                <!-- Card Header - Dropdown -->
		                <div class="card-header py-3">
		                  <h6 class="m-0 font-weight-bold text-primary"><?php echo $lang["data-user-chart-1"];?></h6>
		                </div>
		                <!-- Card Body -->
		                <div class="card-body">
		                  <div class="chart-pie pt-4">
		                    <canvas id="PieChart"></canvas>
		                  </div>
		                  <hr>
		                  <?php echo $lang["data-user-chart-desc-1"];?>
		                </div>
		              </div>
		        	</div>
		        	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
		              <div class="card shadow mb-4">
		                <!-- Card Header - Dropdown -->
		                <div class="card-header py-3">
		                  <h6 class="m-0 font-weight-bold text-primary"><?php echo $lang["data-user-chart-2"];?></h6>
		                </div>
		                <!-- Card Body -->
		                <div class="card-body">
		                  <div class="chart-pie pt-4">
		                    <canvas id="PieChart2"></canvas>
		                  </div>
		                  <hr>
		                  <?php echo $lang["data-user-chart-desc-2"];?>
		                </div>
		              </div>
		        	</div>
		        	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
		              <div class="card shadow mb-4">
		                <!-- Card Header - Dropdown -->
		                <div class="card-header py-3">
		                  <h6 class="m-0 font-weight-bold text-primary"><?php echo $lang["data-user-chart-3"];?></h6>
		                </div>
		                <!-- Card Body -->
		                <div class="card-body">
		                  <div class="chart-pie pt-4">
		                    <canvas id="PieChart3"></canvas>
		                  </div>
		                  <hr>
		                  <?php echo $lang["data-user-chart-desc-3"];?>
		                </div>
		              </div>
		        	</div>
		        </div>

		        <!-- User Data -->
		        <div class="row">
		        	<div class="col-12">
		        		<div class="col-12 mb-3">
		        			<div class="col-md-6 col-sm-12 float-left">
		        				<h2><?php echo $lang["data-users"];?></h2>
		        			</div>
		        			<div class="col-md-6 col-sm-12 float-left">
		        				<input id="my_search" class="float-right b-g-r" onkeyup="search()" type="text" name="search" placeholder='<?php echo $lang["search"];?>'>
		        			</div>
		        		</div>
			        	<div class="col-12">
			        		<table id="search_table" class="table table-bordered table-hover">
								<thead>
									<tr>
										<th data-field="id">
											<div class="th-inner "><?php echo $lang["id"];?></div>
											<div class="fht-cell"></div>
										</th>
										<th data-field="name">
											<div class="th-inner "><?php echo $lang["username"];?></div>
											<div class="fht-cell"></div>
										</th>
										<th data-field="price">
											<div class="th-inner "><?php echo $lang["email"];?></div>
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
												<td>'.$user_oku["id"].'</td>
												<td>'.$user_oku["username"].'</td>
												<td>'.$user_oku["email"].'</td>
											</tr>';		
										}
									?>
								</tbody>
							</table>
							<div class="float-right mb-2">
								<?php 
									for($page=1;$page<=$sayfa_say;$page++){
										echo '<a href="data-users.php?page='.$page.'">';
									?>
										<input class="page-number-input" type="button" name="<?php echo $page; ?>" value="<?php echo $page; ?>"></a>
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
  	td  = tr[i].getElementsByTagName("td")[1];;
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