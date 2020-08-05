<?php include("header.php"); 
	$view = 0;
	$comments_query = $conn->query("SELECT * FROM comments");
	while($read_comments=mysqli_fetch_array($comments_query)){
		$comments = $read_comments["id"]; // number of comments
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
	              		<span class="count-numbers"><?php echo $comments; ?></span>
	              		<span class="count-name"><?php echo $lang["all-comments-box-1"];?></span>
	            	</div>
	          	</div>

	          	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
	            	<div class="card-counter danger">
	            		<i class="fab fa-sellcast"></i>
	              		<span class="count-numbers">50</span>
	              		<span class="count-name"><?php echo $lang["all-comments-box-2"];?></span>
	            	</div>
	          	</div>

	          	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
	            	<div class="card-counter success">
	              		<i class="fas fa-id-card"></i>
	              		<span class="count-numbers">50</span>
	              		<span class="count-name"><?php echo $lang["all-comments-box-3"];?></span>
	            	</div>
	          	</div>
	        </div>

	        <!-- Add New Posts Start -->
	        <div class="col-12">
        		<div class="col-12">
        			<h2><?php $lang["all-posts"]; ?></h2>
		        	<table class="table table-bordered table-hover">
		        		<thead>
		        			<tr>
		        				<td><?php echo $lang["id"]; ?></td>
			        			<td><?php echo $lang["title"]; ?></td>
			        			<td><?php echo $lang["content"]; ?></td>
			        			<td><?php echo $lang["edit"]; ?></td>
			        		</tr>	
		        		</thead>
		        		<tbody>
		        			<?php 
		        				$sorgu = $conn->query("SELECT * FROM comments ORDER BY id DESC");
								while($sorgu_oku=mysqli_fetch_array($sorgu)){
									$yorum_say = $sorgu_oku["id"]; // number of comments
									break;
								}
								$sayfa_say = ceil($yorum_say/15); // number of page
								$istenen_say = @$_GET["page"]; // wanted page
								if(empty($istenen_say)){
									$istenen_say=1;
								}
								$first_comments=($istenen_say*15)-15;
								$comments_query = $conn->query("SELECT * FROM comments ORDER BY id DESC LIMIT $first_comments,15");
								while($read_comments=mysqli_fetch_array($comments_query)){
									echo '<tr>
										<td>'.$read_comments["id"].'</td>
										<td>'.$read_comments["title"].'</td>
										<td>'.$read_comments["content"].'</td>
										<td><a href="edit-comment.php?id='.$read_comments["id"].'">Düzenle</a></td>
									</tr>';		
								}
		        			?>
		        		</tbody>
		        	</table>
		        	<div class="float-right mb-2">
						<?php 
							for($page=1;$page<=$sayfa_say;$page++){
								echo '<a href="all-comments.php?page='.$page.'">';
							?>
								<input class="page-number-input" type="button" name="<?php echo $page; ?>" value="<?php echo $page; ?>"></a>
							<?php
							}
						?>
					</div>
        		</div>
	        </div>
	        <!-- Add New Posts End -->

		</div>
	</div>
</div>
<?php include("footer.php"); ?>