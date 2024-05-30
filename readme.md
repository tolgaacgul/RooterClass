# PHP MVC Proje İskeleti
## Proje Hakkında

Bu proje, PHP ile hızlıca projeler geliştirebilmeniz için bir iskelet sunmaktadır. Proje, Model-View-Controller (MVC) mimarisi ile yapılandırılmıştır ve basit bir örnek içerir. Örneği kaldırarak kendi yapınızı kolayca oluşturabilirsiniz.

### Özellikler

- **Dinamik Routing:** Tarayıcıda `/home` gibi bir yapı belirdiğinde, proje otomatik olarak ilgili controller yapısını arar. Ardından model kısmına yönlendirilir, gerekli veriler alındıktan sonra view kısmına yönlendirilir.
- **Dil Desteği:** Projeye çok dilli destek ekleyebilirsiniz. Örneğin, `orneksite.com/tr/home` şeklinde bir URL belirtildiğinde, dil dosyaları çalıştırılır. Bu yapı sayesinde farklı dillerde içerik sunabilirsiniz.
- **Kolay Kullanım:** `$lang($key)` fonksiyonunu kullanarak dil dosyalarındaki metinlere kolayca erişebilirsiniz.

### Kurulum ve Kullanım

1. Projeyi indirin veya klonlayın.
2. Proje dizininde terminali açın ve gerekli bağımlılıkları yükleyin.
3. Projeyi tarayıcınızda çalıştırın.
4. `Controller`, `Model` ve `View` yapılarınızı oluşturun.

### Örnek Kullanım

```php
// Dil dosyasından bir metin almak içindir. Eğer yoksa parametreyi çalıştırır.
echo $lang('welcome_message');




