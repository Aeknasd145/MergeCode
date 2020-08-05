<meta charset="UTF-8">
<?php 
	include("../connect.php");
	if($_POST){
		$title  			=   stripslashes(strip_tags(htmlspecialchars($_POST["title"])));
		$descrip  			=   stripslashes(strip_tags(htmlspecialchars($_POST["descrip"])));
		$keywords  			=   stripslashes(strip_tags(htmlspecialchars($_POST["keywords"])));
		$analytics_id		=   stripslashes(strip_tags(htmlspecialchars($_POST["analytics_id"])));
		$adsense_id			=   stripslashes(strip_tags(htmlspecialchars($_POST["adsense_id"])));
		if(!$title && !$descrip && !$keywords && !$analytics_id && !$adsense_id){
	        echo "<strong style='color: red; font-size: 25px;'>Lütfen en az bir alanı doldurun.</strong>";
	        exit;
	    }
	    else {
	    	if($title){
	    		$update = $conn->query("UPDATE seo SET title='$title'");
	    		if($update){
	    			echo "<span style='color: green; font-size: 20px;'>Başlık başarıyla güncellendi.</span><br/>";
	    		}
	    		else {
	    			echo "<span style='color: red; font-size: 20px;'>Başlık güncellenirken hata oldu!</span><br/>";
	    		}
	    	}
	    	if($descrip){
	    		$update = $conn->query("UPDATE seo SET descrip='$descrip'");
	    		if($update){
	    			echo "<span style='color: green; font-size: 20px;'>Açıklama başarıyla güncellendi.</span><br/>";
	    		}
	    		else {
	    			echo "<span style='color: red; font-size: 20px;'>Açıklama güncellenirken hata oldu!</span><br/>";
	    		}
	    	}
	    	if($keywords){
	    		$update = $conn->query("UPDATE seo SET keywords='$keywords'");		
	    		if($update){
	    			echo "<span style='color: green; font-size: 20px;'>Anahtar kelimeler başarıyla güncellendi.</span><br/>";
	    		}
	    		else {
	    			echo "<span style='color: red; font-size: 20px;'>Anahtar kelimeler güncellenirken hata oldu.</span><br/>";
	    		}
	    	}
	    	if($analytics_id){
	    		$update = $conn->query("UPDATE seo SET analytics='$analytics_id'");		
	    		if($update){
	    			echo "<span style='color: green; font-size: 20px;'>Analytics ID başarıyla güncellendi.</span><br/>";
	    		}
	    		else {
	    			echo "<span style='color: red; font-size: 20px;'>Analytics ID güncellenirken hata oldu.</span><br/>";
	    		}
	    	}
	    	if($adsense_id){
	    		$update = $conn->query("UPDATE seo SET adsense='$adsense_id'");		
	    		if($update){
	    			echo "<span style='color: green; font-size: 20px;'>Adsense ID başarıyla güncellendi.</span><br/>";
	    		}
	    		else {
	    			echo "<span style='color: red; font-size: 20px;'>Adsense ID güncellenirken hata oldu.</span><br/>";
	    		}
	    	}
	    }
	}
?>