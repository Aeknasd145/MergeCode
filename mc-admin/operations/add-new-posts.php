	<?php 
	include("../connect.php");
	if($_POST){
		$title = $_POST["title"];
		$content = $_POST["content"];
		$descrip =  $_POST["descrip"];
		$keywords = $_POST["keywords"];
		$search = array('Ç','ç','Ğ','ğ','ı','İ','Ö','ö','Ş','ş','Ü','ü',' ');
		$replace = array('c','c','g','g','i','i','o','o','s','s','u','u','-'); 
		$seo_url = str_replace($search,$replace,$title);
		$date = date("Y-m-d");
		if(!$title || !$content){
			echo "Boş Alan Bırakmayınız";
		}
		else {
			$kayit = $conn->query("INSERT INTO blog(title,content,post_date,descrip,keywords,seo_url) VALUES('$title','$content','$date','$descrip','$keywords','$seo_url')");
			if($kayit){
				echo "Kayıt işlemi başarılı.";
			}
			else {
				echo "Kayıt esnasında bir hata yaşandı.";
			}
		}
	}
?>