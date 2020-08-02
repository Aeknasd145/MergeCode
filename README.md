# MergeCode

<h2>Kurulum:</h2>

1 - Paneli indirip public_html içerisine yükleyin.

2 - "admin" adında tablo oluşturup admin.sql dosyasını içeri yükle yapın.

3 - Hakkımızda sayfasını düzenlemek için olan bölüm veri kaydediyor, kendi temanızın hakkımızda sayfasına entegre etmeniz gerekiyor.

4 - Seo ayarlarında başlık, açıklama, anahtar kelime, google analytics id ve google adsense id kaydetmekte ancak bunları yine temanıza entegre etmeniz gerekmektedir.

5 - Mail adresinizin ayarlarını panelden "mail" menüsünden yapabilirsiniz. Gmail kullanacaksanız host, port ve güvenlik türü bölümlerini değiştirmeyin. Ayrıca gmail adresinizin güvenliği düşük uygulamalar tarafından kullanımını da açık hale getirin.


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

<img src="https://user-images.githubusercontent.com/67686692/89120531-bfcdd080-d4bf-11ea-8fcf-3c89d6a08611.png"/>

<h4>Kullanıcı Verileri Sayfası (Abone verileri sayfasıyla aynı tasarımda)</h4>

<img src="https://user-images.githubusercontent.com/67686692/89120533-c0666700-d4bf-11ea-819f-1401f73be207.png"/>

<h4>Ayarlar Sayfası</h4>

<img src="https://user-images.githubusercontent.com/67686692/89120534-c1979400-d4bf-11ea-9de5-b4542946ed3a.png"/>



<h2><u>Güncellemeler:</u></h2>

<h4>02.08.2020</h4>

- Ayarlar sayfasına logo değiştirme özelliği eklendi.

- Menü tasarımı geliştirildi.

- Mail gönderilecek abone ve kullanıcılar için mail alıp almama durumu dikkate alınarak gönderilme eklendi. (email_status=1 => mail almak istiyor, email_status=0 => mail almak istemiyor)

- Dil dosyasına entegre sayfa sayısı arttırıldı.

- SEO ayarları sayfası geliştirildi.

- Ön Bakış sayfasındaki SEO eksikleri kısmı çalışır hale getirildi.

<h4>01.08.2020</h4>

- Blog bölümü geliştirildi.

- Sayfa içi css kodları style.css dosyasına aktarıldı.

- documentation.php dosyası yapıldı.

<h4>31.07.2020</h4>

- Ajax yönlendirmesi geliştirildi.

<h4>30.07.2020</h4>

- Blog bölümü geliştirildi.

- Dil dosyasına entegre sayfa sayısı arttırıldı.

<h4>29.07.2020</h4>

- Blog bölümüne yeni özellikler eklendi.

- Dil dosyasına entegre sayfa sayısı arttırıldı.

<h4>28.07.2020</h4>

- Blog bölümü eklendi.

- Dil dosyasına entegre sayfa sayısı arttırıldı.

<h4>25.07.2020</h4>

- Dil ayarları bölümü eklendi. Ayarlardan seçtiğiniz dilin içeriğini buradan ayarlayabilirsiniz. (Ya da linkin sonuna ?lang=tr / ?lang=en yaparak ayarlamak istediğiniz dili seçebilirsiniz.

<h4>24.07.2020</h4>

- Şifremi unuttum bölümü aktif hale getirildi.

- Kullanıcılara ve abonelere mail gönderme bölümü aktif hale getirildi.

- 1 sayfadaki 2 formu 2 ayrı sayfaya post ederken yaşanan hatalar giderildi.

<h4>22.07.2020:</h4>

- Giriş sayfası için giriş sınırı ve uzaklaştırma süresi özelliği eklendi.

- Giriş sayfasındaki giriş sınırını ve uzaklaştırma süresini belirlemek için admin paneldeki "Güvenlik Ayarları" menüsündeki "Giriş Güvenliği" sekmesi aktif hale getirildi.


<h4>21.07.2020:</h4>

- Logo Değiştirildi.
