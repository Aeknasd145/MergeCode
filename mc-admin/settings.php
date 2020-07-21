<?php include("header.php"); ?>
<script src="https://code.jquery.com/jquery-2.0.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="settings.js"></script>
<script type="text/javascript">$(function(){});</script>
	<div class="container-fluid h-100">
		<div class="row h-100">
			<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="sidebar">
				<?php include("sidebar.php"); ?>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12" id="sidebar-mobile">
				<?php include("sidebar-mobile.php"); ?>
			</div>
			<div id="main-content" class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div class="row justify-content-md-center">
					<div class="col-md-10 col-sm-12">
						<form id="frm" class="row">
							<div class="col-12" style="text-align: center;">
			        			<div id="sonuc"></div><br />
			        		</div>
			        		<h3 class="col-12 text-center pt-3"><?php echo $lang["settings"];?></h3>	
							<div class="col-md-6 col-sm-12" style="float:left; margin-top: 12px; padding-top: 15px; padding-bottom: 15px">
								<p><?php echo $lang["username"];?>:</p>
								<input type="text" class="form-control" name="username" placeholder="Username" aria-describedby="basic-addon1">
							</div>
							<div class="col-md-6 col-sm-12" style="float: left; margin-top: 12px; padding-top: 15px; padding-bottom: 15px">
								<p><?php echo $lang["email"];?>:</p>
								<input type="text" class="form-control" name="email" placeholder="E-mail" aria-describedby="basic-addon1">
							</div>
							<div class="col-md-6 col-sm-12" style="float: left; margin-top: 12px; padding-top: 15px; padding-bottom: 15px">
								<p><?php echo $lang["new-password"];?>:</p>
								<input type="text" class="form-control" name="new-password" placeholder="Yeni Şifre" aria-describedby="basic-addon1">
							</div>
							<div class="col-md-6 col-sm-12" style="float: left; margin-top: 12px; padding-top: 15px; padding-bottom: 15px">
								<p><?php echo $lang["new-password-again"];?>:</p>
								<input type="text" class="form-control" name="new-password-again" placeholder="Yeni Şifre Tekrar" aria-describedby="basic-addon1">
							</div>
							<div class="col-12">
								<input style="width: 100%; background-color: lightblue; border: solid 1px lightblue; border-radius: .25rem;
								 padding: 10px; font-family: Arial, Helvetica, sans-serif; margin-top: 2%" type="button" id="btn" value="<?php echo $lang["save"];?>">
							</div>
						</form>	
						<div class="col-md-6 col-sm-12" style="float: left; margin-top: 12px; padding-top: 15px; padding-bottom: 15px">
							<p><?php echo $lang["select-lang"];?>:</p>
							<ul class="list-group">
							<?php
								if ($_SESSION["lang"]=="tr") {
								?>
									<a href="language/select-lang.php?lang=tr"><li class="list-group-item active"><?php echo $lang["tr"]; ?></li></a>
	 								<a href="language/select-lang.php?lang=en"><li class="list-group-item"><?php echo $lang["en"]; ?></li></a>		
								<?php
								}
								else {
								?>
									<a href="language/select-lang.php?lang=tr"><li class="list-group-item"><?php echo $lang["tr"]; ?></li></a>
	 								<a href="language/select-lang.php?lang=en"><li class="list-group-item active"><?php echo $lang["en"]; ?></li></a>		
								<?php	
								}
							?>
							</ul>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Font Awesome Kit -->
<script src="https://kit.fontawesome.com/acae1827b1.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>