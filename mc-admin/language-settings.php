<?php 
	include("header.php"); 
	$wanted_lang = addslashes(htmlspecialchars($_GET['lang']));
	if(!$wanted_lang && $_SESSION['lang']){
		$wanted_lang = $_SESSION['lang'];
	}
	else if(!$wanted_lang && !$_SESSION["lang"]){
		$wanted_lang = "en";
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
			<div class="row justify-content-md-center">
				<h2 class="col-12 text-center pt-3"><?php echo $lang["language-settings"];?></h2>
				<div class="col-12">
        			<div class="col-md-6 col-sm-12 float-left">
    					<?php 
    						if ($wanted_lang=="tr") {
							?>
								<div class="col-4 float-left"><a href="language-settings.php?lang=tr"><li class="list-group-item active"><?php echo $lang["tr"]; ?></li></a></div>
 								<div class="col-4 float-left"><a href="language-settings.php?lang=en"><li class="list-group-item"><?php echo $lang["en"]; ?></li></a></div>
							<?php
							}
							else {
							?>
								<div class="col-4 float-left"><a href="language-settings.php?lang=tr"><li class="list-group-item"><?php echo $lang["tr"]; ?></li></a></div>
 								<div class="col-4 float-left"><a href="language-settings.php?lang=en"><li class="list-group-item active"><?php echo $lang["en"]; ?></li></a></div>	
							<?php	
							}
    					?>
        			</div>
        			<div class="col-md-6 col-sm-12 float-right">
        				<input id="my_search" class="float-right b-g-r" onkeyup="search()" type="text" name="search" placeholder='<?php echo $lang["search"];?>'>
        			</div>
        		</div>
				<div class="col-12 text-center">
        			<div id="sonuc"></div><br />
        		</div>
        		<div class="col-12">
	        		<div class="col-12">
						<table id="search_table" class="table table-bordered">	
							<thead>
								<tr>
									<th data-field="variable">
										<div class="th-inner "><?php echo $lang["variable"];?></div>
										<div class="fht-cell"></div>
									</th>
									<th data-field="translate">
										<div class="th-inner "><?php echo $lang["translate"];?></div>
										<div class="fht-cell"></div>
									</th>
								</tr>
							</thead>
							<tbody>
								<form id="frm" class="row">
									<?php 
										if($wanted_lang=="tr"){
											include 'language/tr.php';	
										}
										else if($wanted_lang=="en"){
											include 'language/en.php';
										}
										foreach ($lang as $key => $value) {
											echo '<tr>
										        	<td>'.trim($key).'</td>
										        	<td><input class="input-100" type="text" name="'.trim($key).'" placeholder="'.trim($value).'"/></td>
										        </tr>';
										}	
									?>
									<input type="hidden" name="lang" value="<?php echo $wanted_lang; ?>">
								</form>
							</tbody>
						</table>
					</div>
					<div class="col-12">
						<input class="send-button-100 mb-2" type="button" id="btn" value='<?php echo $lang["save"];?>'>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(function(){
  	$("#btn").click(function(e){
		e.preventDefault();
    	var veri= $("#frm").serialize();
	    $.ajax({
	       	type:"post",
	       	url:"operations/language-settings.php",
	       	data:veri,
	       	success:function(sonuc){
	       		$("#sonuc").html((sonuc));
	    	}
    	});
	});
});

function search() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("my_search");
  filter = input.value.toUpperCase();
  table = document.getElementById("search_table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
  	td  = tr[i].getElementsByTagName("td")[0];;
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

<!-- Font Awesome Kit -->
<script src="https://kit.fontawesome.com/acae1827b1.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>