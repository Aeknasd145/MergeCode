<meta charset="UTF-8">
<?php 
	include("../connect.php");
	if($_POST){
		$title  		=   stripslashes(strip_tags(htmlspecialchars($_POST["title"])));
		$content  		=   stripslashes(strip_tags(htmlspecialchars($_POST["content"])));
		$descrip  		=   stripslashes(strip_tags(htmlspecialchars($_POST["descrip"])));
		$keywords  		=   stripslashes(strip_tags(htmlspecialchars($_POST["keywords"])));
		$seo_url  		=   stripslashes(strip_tags(htmlspecialchars($_POST["seo_url"])));

		if(!$title && !$content && !$descrip && !$keywords && !$seo_url){
	        echo "<strong style='color: red; font-size: 25px;'>Lütfen en az bir alanı doldurunuz.</strong>";
	        exit;
	    }
	    else {
	    	$status = 1;
	    	if($title){
	    		$update = $conn->query("UPDATE blog SET title='$title' WHERE id='1' ");	
	    		if(!$update){
	    			echo "<span style='color: red; font-size: 20px;'>Başlık Güncelleme İşlemi Başarısız.</span><br />";
	    			$status = 0;
	    		}
	    	}
	    	if($content){
	    		$update = $conn->query("UPDATE blog SET content='$content' WHERE id='1' ");	
	    		if(!$update){
	    			echo "<span style='color: red; font-size: 20px;'>İçerik Güncelleme İşlemi Başarısız.</span><br />";
	    			$status = 0;
	    		}
	    	}
	    	if($descrip){
	    		$update = $conn->query("UPDATE blog SET descrip='$descrip' WHERE id='1' ");	
	    		if(!$update){
	    			echo "<span style='color: red; font-size: 20px;'>Açıklama Güncelleme İşlemi Başarısız.</span><br />";
	    			$status = 0;
	    		}
	    	}
	    	if($keywords){
	    		$update = $conn->query("UPDATE blog SET keywords='$keywords' WHERE id='1' ");	
	    		if(!$update){
	    			echo "<span style='color: red; font-size: 20px;'>Anahtar Kelime Güncelleme İşlemi Başarısız.</span><br />";
	    			$status = 0;
	    		}
	    	}
	    	if($seo_url){
	    		$update = $conn->query("UPDATE blog SET seo_url='$seo_url' WHERE id='1' ");	
	    		if(!$update){
	    			echo "<span style='color: red; font-size: 20px;'>SEO Url Güncelleme İşlemi Başarısız.</span><br />";
	    			$status = 0;
	    		}
	    	}
	    	if($status){
	    		echo "<span style='color: green; font-size: 20px;'>Tüm Güncelleme İşlemleri Başarılı.</span><br />";
	    	}
	    }
	}
?>