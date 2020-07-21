<meta charset="UTF-8">
<?php 
	include("../connect.php");
	if($_POST){
		$title  	=   stripslashes(strip_tags(htmlspecialchars($_POST["title"])));
		$content  	=   stripslashes(strip_tags(htmlspecialchars($_POST["content"])));
		if(!$title || !$content){
	        echo "<strong style='color: red; font-size: 25px;'>Lütfen boş alan bırakmayınız.</strong>";
	        exit;
	    }
	    else {
	    	$update = $conn->query("UPDATE about_us SET title='$title', content='$content' WHERE id='1' ");
	    	if($update){
	    		echo "<span style='color: green; font-size: 25px;'>Güncelleme İşlemi Başarılı</span>";
	    	}
	    	else {
	    		echo "<span style='color: red; font-size: 25px;'>Veri tabanına kaydedilirken bir hatayla karşılaşıldı!</span>";
	    	}
	    }
	}
?>