<meta charset="UTF-8">
<?php 
	include("../connect.php");
	if($_POST){
		$title  	=   stripslashes(strip_tags(htmlspecialchars($_POST["title"])));
		$content  	=   stripslashes(strip_tags(htmlspecialchars($_POST["content"])));
		if(!$title && !$content){
	        echo "<strong style='color: red; font-size: 25px;'>Lütfen alanlardan en az birini doldurun.</strong>";
	        exit;
	    }
	    else {
	    	$status = 1;
	    	if($title){
	    		$update = $conn->query("UPDATE about_us SET title='$title' WHERE id='1' ");	
	    		if(!$update){
	    			$status = 0;
	    		}
	    	}
	    	if($content){
	    		$update = $conn->query("UPDATE about_us SET content='$content' WHERE id='1' ");
	    		if(!$update){
	    			$status = 0;
	    		}	    		
	    	}
	    	
	    	if($status){
	    		echo "<span style='color: green; font-size: 25px;'>Güncelleme İşlemi Başarılı</span>";
	    	}
	    	else {
	    		echo "<span style='color: red; font-size: 25px;'>Veri tabanına kaydedilirken bir hatayla karşılaşıldı!</span>";
	    	}
	    }
	}
?>