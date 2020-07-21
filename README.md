# MergeCode

<h3>Kurulum:</h3>

1 - Paneli indirip public_html içerisine yükleyin.

2 - "admin" adında tablo oluşturup admin.sql dosyasını içeri yükle yapın.

3 - Hakkımızda sayfasını düzenlemek için olan bölüm veri kaydediyor, kendi temanızın hakkımızda sayfasına entegre etmeniz gerekiyor.

4 - Seo ayarlarında başlık, açıklama, anahtar kelime, google analytics id ve google adsense id kaydetmekte ancak bunları yine temanıza entegre etmeniz gerekmektedir.


<h3>"Hakkımızda" Sayfasını Entegre Etmek</h3>

- "Başlık için => $title" ve "İçerik için => $content" değişkenlerini kullanınız.

- veri tabanındaki "about_us" tablosundan verileri çekeceksiniz.

<h4>Örnek:</h4>

verileri çekmek için;

  <code>$hakkimizda_sorgu = $conn->query("SELECT * FROM about_us WHERE id=1 ");</code>
  
  <code>while($hakkimizda_oku=mysqli_fetch_array($hakkimizda_sorgu)){</code>
  
    $title  = $hakkimizda_oku["title"];    
    
    $content = $hakkimizda_oku["content"];    
    
  <code>}</code>
  
verileri okutmak için;

  Başlığı okutmak için: <code>echo $title;</code>
  
  İçeriği okutmak için: <code>echo $content;</code>
