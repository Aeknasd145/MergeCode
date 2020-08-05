<?php 
	include("header.php");
	$user_sorgu = $conn->query("SELECT * FROM users ORDER BY id DESC");
	while($user_oku=mysqli_fetch_array($user_sorgu)){
		$usersay = $user_oku["id"];
		break;
	}
	$abone_sorgu = $conn->query("SELECT * FROM subs");
	$abone_say = mysqli_num_rows($abone_sorgu);
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
	              		<span class="count-name"><?php echo $lang["send-email-box-1"]; ?></span>
	            	</div>
	          	</div>

	          	<div class="col-xl-4 col-md-4 col-sm-6 col-xs-6">
	            	<div class="card-counter danger">
	            		<i class="fab fa-sellcast"></i>
	              		<span class="count-numbers"><?php echo $abone_say; ?></span>
	              		<span class="count-name"><?php echo $lang["send-email-box-2"]; ?></span>
	            	</div>
	          	</div>

	          	<div class="col-xl-4 col-md-4 col-sm-12 col-xs-12">
	            	<div class="card-counter success">
	              		<i class="fas fa-id-card"></i>
	              		<span class="count-numbers">50</span>
	              		<span class="count-name"><?php echo $lang["send-email-box-3"]; ?></span>
	            	</div>
	          	</div>
	        </div>
	        <div class="row">
		        <div class="col-12">
		        	<form id="frm">
		        		<div class="col-12 text-center">
		        			<div id="sonuc"></div><br />
		        		</div>
			        	<div class="col-12">
			        		<p class="float-left"><?php echo $lang["select-group"]; ?>:&emsp;</p>
			        		<select name="group">
				        		<option value="users"><?php echo $lang["users"]; ?></option>
				       			<option value="subs"><?php echo $lang["subs"]; ?></option>
				       		</select>
			        	</div>
			        	<div class="col-12">
			        		<input type="text" name="title" class="form-control input-100" placeholder="<?php echo $lang['title']; ?>">
			        	</div>
			        	<div class="col-12 mt-2">
			        		<textarea class="input-100 mt-1" rows="15%" name="content" placeholder="<?php echo $lang['content']; ?>"></textarea>
			        	</div>
			        	<div class="col-12 mt-2">
			        		<input class="send-button-100 p-2" type="button" id="btn" value="<?php echo $lang['send']; ?>">	
			        	</div>						
		        	</form>
		        </div>
	        </div>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>
<script type="text/javascript">
$(function(){
  	$("#btn").click(function(e){
		e.preventDefault();
    	var veri= $("#frm").serialize();
	    $.ajax({
	       	type:"post",
	       	url:"operations/send-email.php",
	       	data:veri,
	       	success:function(sonuc){
	       		$("#sonuc").html((sonuc));
	    	}
    	});
	});
});
</script>