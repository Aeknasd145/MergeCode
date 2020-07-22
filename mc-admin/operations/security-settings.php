<meta charset="UTF-8">
<?php 
	include("../connect.php");
	if($_POST){
		$entry_limit  	=   stripslashes(strip_tags(htmlspecialchars($_POST["entry_limit"])));
		$time_out  		=   stripslashes(strip_tags(htmlspecialchars($_POST["time_out"])));
		if(!$entry_limit && !$time_out){
	        echo "<strong style='color: red; font-size: 25px;'>Lütfen alanlardan en az birini doldurun.</strong>";
	        exit;
	    }
	    else {
	    	$update = $conn->query("UPDATE security SET entry_limit='$entry_limit', time_out='$time_out' WHERE id='1' ");
	    	if($update){
	    		echo "<span style='color: green; font-size: 25px;'>Güncelleme İşlemi Başarılı</span>";
	    	}
	    	else {
	    		echo "<span style='color: red; font-size: 25px;'>Veri tabanına kaydedilirken bir hatayla karşılaşıldı!</span>";
	    	}
	    }
	}
?>