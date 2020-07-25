<meta charset="UTF-8">
<?php 
	include("../connect.php");
	if($_POST){
		echo $wanted_lang = addslashes(htmlspecialchars($_POST['lang']));
		if(!$wanted_lang && $_SESSION['lang']){
			$wanted_lang = $_SESSION['lang'];
		}
		else if(!$wanted_lang && !$_SESSION["lang"]){
			$wanted_lang = "en";
		}
		if($wanted_lang=="tr"){
			include '../language/tr.php';	
		}
		else if($wanted_lang=="en"){
			include '../language/en.php';
		}
		else {
			$wanted_lang="tr";
			echo "1";
		}
	    $i = 0;
	    foreach ($lang as $key => $value) { $say++;
	    	$variable[$i] = $_POST[trim($key)];
	        if($variable[$i]){ 
		    	$eklenecek_metin = '"'.trim($key).'"'.' => "'.$variable[$i].'",';
	        }
	        else {
	        	$eklenecek_metin = '"'.trim($key).'"'.' => "'.$value.'",';
	        }
	       	$ekleme .= $eklenecek_metin;
	    }
	    if($wanted_lang=="tr"){
			$ac = fopen("../language/tr.php","w+");
		}
		else if($wanted_lang=="en"){
			$ac = fopen("../language/en.php","w+");
		}
	    fwrite($ac, "<?php 
	\$lang = array("); 
	    fwrite($ac, $ekleme); 
	    fwrite($ac, "	); 
?>");
	}
?>