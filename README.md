# MergeCode

<h2>Kurulum:</h2>

1 - Paneli indirip public_html içerisine yükleyin.

2 - "admin" adında tablo oluşturup admin.sql dosyasını içeri yükle yapın.

3 - Hakkımızda sayfasını düzenlemek için olan bölüm veri kaydediyor, kendi temanızın hakkımızda sayfasına entegre etmeniz gerekiyor.

4 - Seo ayarlarında başlık, açıklama, anahtar kelime, google analytics id ve google adsense id kaydetmekte ancak bunları yine temanıza entegre etmeniz gerekmektedir.




<h2>"Hakkımızda" Sayfasını Entegre Etmek</h2>

- "Başlık için => $title" ve "İçerik için => $content" değişkenlerini kullanınız.

- veri tabanındaki "about_us" tablosundan verileri çekeceksiniz.

<h3>Örnek:</h3>

verileri çekmek için;

  <code>$hakkimizda_sorgu = $conn->query("SELECT * FROM about_us WHERE id=1 ");</code>
  
  <code>while($hakkimizda_oku=mysqli_fetch_array($hakkimizda_sorgu)){</code>
  
    $title  = $hakkimizda_oku["title"];    
    
    $content = $hakkimizda_oku["content"];    
    
  <code>}</code>
  
verileri okutmak için;

  Başlığı okutmak için: <code>echo $title;</code>
  
  İçeriği okutmak için: <code>echo $content;</code>

<h4>Varsayılan Panel Dilini Değiştirmek</h4>

Varsayılan dili "operations" klasörünün içindeki login.php dosyasındaki <code>$_SESSION["lang"]="tr";</code> kodunu tr/en olarak değiştirerek panelin varsayılan dilini değiştirebilirsiniz.

<h2>Örnek Görseller</h2>

<h4>Ana Sayfa</h4>

<img src="https://user-images.githubusercontent.com/67686692/88078037-a1450c80-cb84-11ea-97de-c296fe601eb4.png"/>

<h4>Kullanıcı Analiz Sayfası (Abone analiz sayfasıyla aynı tasarımda)</h4>

<img src="https://user-images.githubusercontent.com/67686692/88078806-8f179e00-cb85-11ea-93ec-43ce55096f64.png"/>

<h4>Ayarlar Sayfası</h4>

<img src="https://user-images.githubusercontent.com/67686692/88079079-e3228280-cb85-11ea-984d-8abedfe1f2c9.png"/>



<h2><u>Güncellemeler:</u></h2>

<h4>22.07.2020:</h4>
- Giriş sayfası için giriş sınırı eklendi.
- Giriş sayfasındaki giriş sınırını ve uzaklaştırma süresini belirlemek için admin paneldeki "Güvenlik Ayarları" menüsündeki "Giriş Güvenliği" sekmesi aktif hale getirildi.


<h4>21.07.2020:</h4>

- Logo Değiştirildi.
