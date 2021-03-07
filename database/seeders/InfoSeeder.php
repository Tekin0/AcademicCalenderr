<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $genelAkademikTakvimGuzContent = [
            'İsteğe bağlı olarak İngilizce Hazırlık sınıfı okuyacak öğrenciler için Yabancı
Diller Yüksekokuluna Başvuru ',
            'İsteğe bağlı olarak İngilizce Hazırlık sınıfı okuyacak olan öğrencilerin
listelerinin, Yabancı Diller Y.O. tarafından Fakültelere ve Öğrenci İşleri
Daire Başkanlığına gönderilmesi ',
            'Normal öğrenim süresini aşan I. öğretim öğrencilerinin katkı payını ve II.
öğretim öğrencilerinin (Yeni kayıt olan öğrenciler dahil) öğrenim ücretlerini
ödemesi ',
            'Arapça ve İngilizce Hazırlık sınıfı için Güz Yarıyılı Yabancı Dil Yeterlik
Sınavı',
            'Arapça ve İngilizce Hazırlık sınıfında başarısız olmuş olan öğrenciler için
Yabancı Dil Yeterlik Sınavı ',
            'Bölümler tarafından derslerin otomasyonda tanımlanması ve ders
programlarının otomasyona girilmesi ',
            '',
            'Ders Uygulama Dosyasının, Bölüm/Program Başkanlıklarına sorumlu
öğretim elemanları tarafından teslim edilmesi',
            'Açılan derslerde, bölüm dışından ders alacak öğrenciler için kontenjan
sayısının ilgili Bölüm/Program Başkanlıklarından talep edilmesi, açılmasını
uygun gören Bölüm/Program Başkanlığının istenilen kontenjanı otomasyona
girmesi ',
            '',
            'Geçici izinli olup da, iznini iptal ederek Güz yarıyılında öğrenime devam
edecek öğrenciler için son başvuru tarihi ',
            'Yabancı Uyruklu Öğrenciler için Türkçe Yeterlik Sınavı',
            'Yabancı dil dersleri için muafiyet sınavı (hazırlık programı olmayan bölümler
için)',
            'Öğrencilerin danışman onayını alarak dersten çekilme veya ekleme yapması
için son tarih',
            'Danışmanların ders kayıtlarını onaylaması için son tarih',
            'Geçici izinli sayılmak için başvurunun son tarihi',
            'Muafiyet başvuruları için son tarih',
            'İntibak kararlarının Öğrenci İşleri Daire Başkanlığına gönderilmesi için son
tarih',
            'Ara sınav ve mazeret sınav tarihleri birimler tarafından belirlenecektir',
            'Derslerin Tamamlanması',
            'İlahiyat Lisans Tamamlama (İLİTAM) Genel Sınav Dönemi',
            'Ara sınav ve mazeret sınav notlarının otomasyondan ilanı için son tarih ',
            '',
            'Arapça ve İngilizce Hazırlık sınıfları için Güz yarıyılı sonu',
            'Genel Sınav notlarının otomasyondan ilanı için son tarih',
            '',
            'Bütünleme sınav notlarının otomasyondan ilanı için son tarih',
            'Güz yarıyılı %10’a giren öğrenci listelerinin ilanı',
            '',
        ];
        $genelAkademikTakvimGuzTitle = [
            '','','','','','','Öğrencilerin otomasyonda ders kaydı yapması','','',
            'Derslerin Başlaması','','','',
            'Ders kayıt işlemlerinin Tamamlanması','','','','',
            'Ara sınav dönemi', '','','',
            'Genel Sınav Dönemi','','',
            'Bütünleme Sınav Dönemi','','',
            'Tek Ders Sınavı'
        ];
        for($i=0;$i<26;$i++){
            DB::table('info')->insert([
                'category_id'=>1,
                'period_id'=>1,
                'content'=>$genelAkademikTakvimGuzContent[$i],
                'title' => $genelAkademikTakvimGuzTitle[$i]
            ]);
        }

        $genelAkademikTakvimBaharContent = [
            'Bölüm dışından ders alacak öğrenciler için kontenjan sayısının ilgili bölüm
başkanlıklarından talep edilmesi, ders açılmasını uygun gören bölüm/program
başkanlığının istenilen kontenjanı otomasyona girmesi ',
            'Ders Uygulama Dosyasının, Bölüm/Program Başkanlıkları tarafından sorumlu
öğretim elemanlarına teslim edilmesi',
            'Bölümler tarafından derslerin otomasyonda tanımlanması ve ders programlarının
otomasyona girilmesi',
            'Normal öğrenim süresini aşan I. Öğretim öğrencilerinin katkı payını ve II. Öğretim
öğrencilerinin öğrenim ücretlerini ödemesi',
            '',
            '',
            'Geçici izinli olup da, iznini iptal ederek Bahar yarıyılında öğrenime devam etmek
isteyen öğrenciler için son başvuru tarihi ',
            'Geçici izinli sayılmak için başvurunun son tarihi ',
            'Öğrencilerin danışman onayını alarak dersten çekilme veya ders ekleme yapması
için son tarih',
            'Danışmanların ders kayıtlarını onaylaması için son tarih',
            'Ara sınav ve mazeret sınav tarihleri birimler tarafından belirlenecektir',
            'Derslerin Tamamlanması',
            'Ara sınav ve mazeret sınav notlarının ilanı için son tarih',
            'İlahiyat Lisans Tamamlama (İLİTAM) Genel Sınav Dönemi',
            '',
            'Arapça ve İngilizce Hazırlık sınıfları için Bahar yarıyılı sonu',
            'Veteriner Fakültesi son sınıf öğrencileri için İntern eğitiminin sonu',
            'Arapça ve İngilizce Hazırlık sınıfı öğrencileri için yabancı dil yeterlik sınavı',
            'Arapça ve İngilizce Hazırlık sınıfında başarısız olmuş olan öğrenciler için Yabancı
Dil Yeterlik Sınavı',
            'Genel sınav notlarının otomasyondan ilanı için son tarih',
            '',
            'Bütünleme sınav notlarının otomasyondan ilanı için son tarih',
            '',
            'Bahar yarıyılı %10’a giren öğrencilerin ilanı',
        ];
        $genelAkademikTakvimBaharTitle = [
            '','','','Öğrencilerin otomasyonda ders kaydı yapması',
            'Derslerin Başlaması','','','Ders kayıt işlemlerinin tamamlanması',
            'Ara Sınav Dönemi','','','','Genel Sınav Dönemi','','','','','Bütünleneme Sınav Dönemi',
            '','Mezuniyet Sınavı',''
        ];
        for($i=0;$i<20;$i++){
            DB::table('info')->insert([
                'category_id'=>1,
                'period_id'=>2,
                'content'=>$genelAkademikTakvimBaharContent[$i],
                'title' => $genelAkademikTakvimBaharTitle[$i]
            ]);
        }

        $tipFakultesiTakvimContent =[

            'Ders yılı başlangıcı ',
            'Yabancı dil dersleri için muafiyet sınavı (hazırlık programı olmayan bölümler için)',
            'Muafiyet Başvuru İçin Son Tarih',
            'ARA TATİL',
            'Yılsonu derslerin bitişi',
            'Mazeret Sınavları',
            'Türkçe Final Sınavı',
            'Yabancı Dil (İngilizce) Final Sınavı',
            '(Pratik) Genel Sınavlar',
            '(Teorik) Genel Sınavlar',
            'Türkçe Bütünleme Sınavı',
            'Yabancı Dil (İngilizce) Bütünleme Sınavı ',
            '(Pratik) Bütünleme Sınavları',
            '(Teorik) Bütünleme Sınavlar',

            'Ders yılı başlangıcı',
            'Ders yılı başlangıcı',
            'ARA TATİL',
            'Yılsonu derslerin bitişi',
            '(Pratik-Teorik) Mazeret Sınavları',
            'Atatürk İlkeleri ve İnkılap Tarihi Final sınavı',
            'Yabancı Dil (İngilizce) Final Sınavı ',
            '(Pratik) Genel Sınavlar',
            '(Teorik) Genel Sınavlar',
            'Atatürk İlkeleri ve İnkılap Tarihi Bütünleme sınavı',
            'Yabancı Dil (İngilizce) Bütünleme Sınavı',
            '(Pratik) Bütünleme Sınavları ',
            '(Teorik) Bütünleme Sınavları',

            'Ders yılı başlangıcı ',
            'Formatif Sınav',
            'ARA TATİL ',
            'Yılsonu derslerin bitişi',
            '(Pratik) Mazeret Sınavları',
            '(Teorik) Mazeret Sınavları',
            '(Teorik) Genel Sınavlar',
            '(Teorik) Bütünleme Sınavları',

            'Ders yılı başlangıcı ',
            'Formatif Sınav ',
            'ARA TATİL',
            'Ders yılı bitişi ',
            'Bütünleme Sınavları ',

            'Ders yılı başlangıcı',
            'ARA TATİL ',
            'Ders yılı bitişi',
            'Bütünleme Sınavları',

            'İnternlik dönemi başlangıcı',
            '2019-2020 Mezuniyet ',
        ];

        for($i=0;$i<46;$i++){
            DB::table('info')->insert([
                'category_id'=>2,
                'period_id'=>1 or 2,
                'content'=>$tipFakultesiTakvimContent[$i],
            ]);
        }

        $disHekimligiFakultesiTakvimContent =[
            'Ders yılı başlangıcı',
            'Yabancı dil dersleri için muafiyet sınavı (hazırlık programı olmayan bölümler için)',
            'Muafiyet Başvuru İçin Son Tarih',
            'ARA TATİL',
            'Yılsonu derslerin bitişi',
            'Mazeret Sınavları',
            'Türkçe Final Sınavı',
            'Yabancı Dil (İngilizce) Final Sınavı',
            '(Pratik) Genel Sınavlar',
            '(Teorik) Genel Sınavlar',
            'Türkçe Bütünleme Sınavı',
            'Yabancı Dil (İngilizce) Bütünleme Sınavı ',
            '(Pratik) Bütünleme Sınavları',
            '(Teorik) Bütünleme Sınavları ',

            'Ders yılı başlangıcı ',
            'ARA TATİL',
            'Yılsonu derslerin bitişi',
            '(Pratik-Teorik) Mazeret Sınavları',
            'Atatürk İlkeleri ve İnkılap Tarihi Final Sınavı',
            'Yabancı Dil (İngilizce) Final Sınavı ',
            '(Pratik) Genel Sınavlar ',
            '(Teorik) Genel Sınavlar ',
            'Atatürk İlkeleri ve İnkılap Tarihi Bütünleme Sınavı',
            'Yabancı Dil (İngilizce) Bütünleme Sınavı ',
            '(Pratik) Bütünleme Sınavları ',
            '(Teorik) Bütünleme Sınavları',

            'Ders yılı başlangıcı',
            'ARA TATİL ',
            'Yılsonu derslerin bitişi ',
            '(Pratik) Mazeret Sınavları',
            '(Teorik) Mazeret Sınavları',
            '(Teorik) Genel Sınavlar',
            '(Teorik) Bütünleme Sınavları',

            'Ders yılı başlangıcı ',
            'ARA TATİL',
            'Ders yılı bitişi ',
            '(Teorik) Genel Sınavlar',
            'Bütünleme Sınavları ',

            'Ders yılı başlangıcı ',
            'ARA TATİL',
            'Ders yılı bitişi ',
            '(Teorik) Genel Sınavlar',
            'Bütünleme Sınavları',
            'Mezuniyet ',
        ];
        for($i=0;$i<44;$i++) {
            DB::table('info')->insert([
                'category_id' => 3,
                'period_id' => 1 or 2 ,
                'content' => $disHekimligiFakultesiTakvimContent[$i],
            ]);
        }
        $yazOkuluTakvimContent =[
          'Yaz okulunda açılması öngörülen derslerin ve ders sorumlularının ilgili
Dekanlığa/Müdürlüğe bildirilmesi ',
            'Açılması öngörülen derslerin Fakülte/Yüksekokul/Meslek Yüksekokulları
tarafından web sayfalarında ilanı',
            'Ders ücretlerinin yatırılması ve kayıt için bölümlere başvuru yapılması',
            'Yaz Okulu kesin (ders) kayıtlarının yapılması ',
            'Danışmanların ders kayıtlarını onaylaması ',
            'Derslerin Başlaması',
            'Derslerin Bitişi',
            'Yaz Okulu Genel Sınavlarının yapılması ',
            'Sınav sonuçlarının Otomasyondan ilanı ve sonuçlandırılması için son tarih',
        ];
        for($i=0;$i<9;$i++) {
            DB::table('info')->insert([
                'category_id' => 4,
                'period_id' => 1 or 2,
                'content' => $yazOkuluTakvimContent[$i],
            ]);
        }

        $lisanustuTakvimGuzContent =[
            'Katkı payı ve öğrenim ücretlerinin ödenmesi ',
            'Ders kayıtları ',
            'Özel öğrenci statüsü başvuru dönemi ',
            'Danışmanların ders kayıtlarını onaylaması',
            'Özel öğrenci kayıtları ',
            'Güz yarıyılı başlangıcı (derslerin başlaması) ',
            'Öğrencilerin danışman onayını alarak dersten çekilme ve ekleme yapması',
            'Geçici izinli sayılmak için başvurunun son günü',
            'Ara sınav dönemi',
            'Ara sınav ve mazeret sınav notlarının otomasyondan ilanı için son tarih',
            'Güz yarıyılı sonu',
            'Genel sınav dönemi (Seminer Sunumu Dahil)',
            'Genel sınav notlarının otomasyonda ilan edilmesi için son tarih',
            'Bütünleme sınav dönemi',
            'Bütünleme sınav notlarının otomasyonda ilan edilmesi için son tarih ',
            'Tezlerin enstitülere teslimi için son tarih (Tezlerin ciltlenmiş son hali)',
            'Seminer kitapçıklarının enstitülere teslimi için son tarih',
        ];
        for($i=0;$i<17;$i++){
            DB::table('info')->insert([
                'category_id'=>5,
                'period_id'=>1,
                'content'=>$lisanustuTakvimGuzContent[$i],
            ]);
        }

        $lisanustuTakvimBaharContent =[
            'Katkı payı ve öğrenim ücretlerinin ödenmesi ',
            'Özel öğrenci statüsü başvuru dönemi ',
            'Ders kayıtları',
            'Bahar yarıyılı başlangıcı (derslerin başlaması) ',
            'Danışmanların ders kayıtlarını onaylaması ',
            'Özel öğrenci kayıtları ',
            'Öğrencilerin danışman onayını alarak dersten çekilme ve ekleme yapması',
            'Geçici izinli sayılmak için başvurunun son günü',
            'Ara sınav dönemi',
            'Ara sınav ve mazeret sınav notlarının otomasyondan ilanı için son tarih',
            'Bahar yarıyılı sonu',
            'Genel sınav dönemi (Seminer Sunumu Dahil)',
            'Genel sınav notlarının otomasyonda ilan edilmesi için son tarih',
            'Bütünleme sınav dönemi ',
            'Bütünleme sınav notlarının otomasyonda ilan edilmesi için son tarih',
            'Seminer kitapçıklarının enstitülere teslimi için son tarih',
            'Tezlerin enstitülere teslimi için son tarih (Tezlerin ciltlenmiş son hali)',
        ];
        for($i=0;$i<17;$i++){
            DB::table('info')->insert([
                'category_id'=>5,
                'period_id'=>2,
                'content'=>$lisanustuTakvimBaharContent[$i],
            ]);
        }

        $onlisansVeLisansKiciYatayGecisTakvimGuzContent =[
            'Kontenjanların birimlerden istenmesi',
            'Kontenjanların Öğrenci İşleri Daire Başkanlığına bildirilmesi ',
            'Kontenjanlar ve başvuru şartlarının Fırat Üniversitesi internet sitesinde
ilan edilmesi ',
            'Başvuru dönemi',
            'Başvuruların değerlendirilmesi ',
            'Kayıt hakkı kazanan asıl ve yedek öğrencilerin intibak formlarının
hazırlanması ve Öğrenci İşleri Daire Başkanlığına bildirilmesi',
            'Kayıt hakkı kazanan asıl ve yedek öğrencilerin Fırat Üniversitesi internet
sitesinde ilan edilmesi',
            'Asıl listedeki öğrencilerin kayıtları',
            'Kayıt hakkı kazanan yedek öğrencilerin Fırat Üniversitesi internet
sitesinde ilanı',
            'Yedek listedeki öğrencilerin kayıtları',
            'Kayıt yapan asıl ve yedek öğrencilerin muafiyetlerinin otomasyona
girilmesi',
            'Derslerin başlaması',
        ];
        for($i=0;$i<12;$i++){
            DB::table('info')->insert([
                'category_id'=>6,
                'period_id'=>1,
                'content'=> $onlisansVeLisansKiciYatayGecisTakvimGuzContent[$i],
            ]);
        }

        $onlisansVeLisansKiciYatayGecisTakvimBaharContent =[
            'Kontenjanların birimlerden istenmesi ',
            'Kontenjanların Öğrenci İşleri Daire Başkanlığına bildirilmesi',
            'Kontenjanlar ve başvuru şartlarının F.Ü. internet sitesinde ilan edilmesi',
            'Başvuru dönemi ',
            'Başvuruların değerlendirilmesi',
            'Kayıt hakkı kazanan asıl ve yedek öğrencilerin intibak formlarının
hazırlanması ve Öğrenci İşleri Daire Başkanlığına bildirilmesi',
            'Kayıt hakkı kazanan asıl ve yedek öğrencilerin F.Ü. internet sitesinde ilan
edilmesi',
            'Asıl listedeki öğrencilerin kayıtları',
            'Kayıt hakkı kazanan yedek öğrencilerin F.Ü. internet sitesinde ilanı',
            'Yedek listedeki öğrencilerin kayıtları',
            'Kayıt yapan asıl ve yedek öğrencilerin muafiyetlerinin otomasyona
girilmesi',
            'Derslerin başlaması',
        ];
        for($i=0;$i<12;$i++){
            DB::table('info')->insert([
                'category_id'=>6,
                'period_id'=>2,
                'content'=> $onlisansVeLisansKiciYatayGecisTakvimBaharContent[$i],
            ]);
        }

        $onlisansVeLisansKarasiYatayGecisTakvimGuzContent =[
            'İlave kontenjanların birimlerden istenmesi',
            'İlave kontenjanların Öğrenci İşleri Daire Başkanlığına bildirilmesi ',
            'İlave kontenjanların YÖK’e bildirilmesi',
            'Kontenjan ve başvuru şartlarının Fırat Üniversitesi internet sitesinden ilan edilmesi',
            'Başvuru dönemi',
            'Başvuruların değerlendirilmesi',
            'Devlet Konservatuvarı başvuranlar için Özel Yetenek Sınavı',
            'Kayıt hakkı kazanan asıl ve yedek öğrencilerin intibak formlarının hazırlanması ve
Öğrenci İşleri Daire Başkanlığına bildirilmesi',
            'Kayıt hakkı kazanan asıl ve yedek öğrencilerin Fırat Üniversitesi internet sitesinde
ilan edilmesi ',
            'Asıl listedeki öğrencilerin kayıtları',
            'Kayıt hakkı kazanan yedek öğrencilerin Fırat Üniversitesi internet sayfasından ilanı',
            'Yedek listedeki öğrencilerin kayıtları',
            'Kayıt yapan asıl ve yedek öğrencilerin muafiyetlerinin otomasyona girilmesi',
            'Derslerin başlaması',
        ];
        for($i=0;$i<14;$i++){
            DB::table('info')->insert([
                'category_id'=>7,
                'period_id'=>1,
                'content'=> $onlisansVeLisansKarasiYatayGecisTakvimGuzContent[$i],
            ]);
        }

        $onlisansVeLisansKarasiYatayGecisTakvimBaharContent =[
            'İlave kontenjanların birimlerden istenmesi',
            'İlave kontenjanların Öğrenci İşleri Daire Başkanlığına bildirilmesi ',
            'İlave kontenjanların YÖK’e bildirilmesi',
            'Kontenjan ve başvuru şartlarının Fırat Üniversitesi internet sitesinde ilan edilmesi',
            'Başvuru dönemi',
            'Başvuruların değerlendirilmesi',
            'Kayıt hakkı kazanan asıl ve yedek öğrencilerin intibak formlarının hazırlanması ve
Öğrenci İşleri Daire Başkanlığına bildirilmesi',
            'Kayıt hakkı kazanan asıl ve yedek öğrencilerin Fırat Üniversitesi internet sitesinde
ilan edilmesi',
            'Asıl listedeki öğrencilerin kayıtları',
            'Kayıt hakkı kazanan yedek öğrencilerin Fırat Üniversitesi internet sitesinde ilanı',
            'Yedek listedeki öğrencilerin kayıtları',
            'Kayıt yapan asıl ve yedek öğrencilerin muafiyetlerinin otomasyona girilmesi',
            'Derslerin başlaması',
        ];
        for($i=0;$i<13;$i++){
            DB::table('info')->insert([
                'category_id'=>7,
                'period_id'=>2,
                'content'=> $onlisansVeLisansKarasiYatayGecisTakvimBaharContent[$i],
            ]);
        }

        $onlisansVeLisansPuanileYatayGecisTakvimGuzContent =[
            'Başvuru dönemi',
            'Başvuruların değerlendirilmesi',
            'Kayıt hakkı kazanan öğrencilerin intibak formlarının hazırlanması ve Öğrenci
İşleri Daire Başkanlığına bildirilmesi',
            'Kayıt hakkı kazanan öğrencilerin F.Ü. internet sitesinde ilan edilmesi',
            'Öğrencilerin kayıtları',
            'Kayıt yapan öğrencilerin muafiyetlerinin otomasyona girilmesi',
            'Derslerin başlaması',
        ];
        for($i=0;$i<7;$i++){
            DB::table('info')->insert([
                'category_id'=>8,
                'period_id'=>1,
                'content'=> $onlisansVeLisansPuanileYatayGecisTakvimGuzContent[$i],
            ]);
        }

        $onlisansVeLisansPuanileYatayGecisTakvimBaharContent =[
            'Kontenjanların birimlerden istenmesi',
            'Kontenjanların Öğrenci İşleri Daire Başkanlığına bildirilmesi',
            'Kontenjanlar ve başvuru şartlarının F.Ü. internet sitesinde ilan edilmesi',
            'Başvuru dönemi',
            'Başvuruların değerlendirilmesi',
            'Kayıt hakkı kazanan asıl ve yedek öğrencilerin intibak formlarının
hazırlanması ve Öğrenci İşleri Daire Başkanlığına bildirilmesi',
            'Kayıt hakkı kazanan öğrencilerin F.Ü. internet sitesinde ilan edilmesi',
            'Asıl listedeki öğrencilerin kayıtları',
            'Kayıt hakkı kazanan yedek listedeki öğrencileri F.Ü. internet sitesinde ilan
edilmesi',
            'Yedek listedeki öğrencilerin kayıtları',
            'Kayıt yapan asıl ve yedek öğrencilerin muafiyetlerinin otomasyona girilmesi',
            'Derslerin başlaması',
        ];
        for($i=0;$i<12;$i++){
            DB::table('info')->insert([
                'category_id'=>8,
                'period_id'=>2,
                'content'=> $onlisansVeLisansPuanileYatayGecisTakvimBaharContent[$i],
            ]);
        }

        $ciftAnadalVeYandalBasvuruKabulTakvimGuzContent =[
            'Kontenjanlarının birimlerden istenmesi',
            'Kontenjanların Öğrenci İşleri Daire Başkanlığına bildirilmesi',
            'Kontenjan ve başvuru şartlarının F.Ü. internet sitesinde ilan edilmesi ',
            'Başvuru dönemi',
            'Başvuruların değerlendirilmesi',
            'Kayıt hakkı kazanan asıl ve yedek öğrencilerin intibak formlarının hazırlanması ve
Öğrenci İşleri Daire Başkanlığına bildirilmesi',
            'Kayıt hakkı kazanan asıl ve yedek öğrencilerin F.Ü. internet sitesinde ilan edilmesi',
            'Asıl listedeki öğrencilerin kayıtları',
            'Kayıt hakkı kazanan yedek öğrencilerin F.Ü. internet sitesinde ilanı',
            'Yedek listedeki öğrencilerin kayıtları',
            'Kayıt yapan asıl ve yedek öğrencilerin muafiyetlerinin otomasyona girilmesi',
            'Derslerin başlaması',
        ];
        for($i=0;$i<12;$i++){
            DB::table('info')->insert([
                'category_id'=>9,
                'period_id'=>1,
                'content'=> $ciftAnadalVeYandalBasvuruKabulTakvimGuzContent[$i],
            ]);
        }

        $ciftAnadalVeYandalBasvuruKabulTakvimBaharContent =[
            'Kontenjanların birimlerden istenmesi',
            'Kontenjanların Öğrenci İşleri Daire Başkanlığına bildirilmesi',
            'Kontenjan ve başvuru şartlarının F.Ü. internet sitesinde ilan edilmesi',
            'Başvuru dönemi',
            'Başvuruların değerlendirilmesi',
            'Kayıt hakkı kazanan asıl ve yedek öğrencilerin intibak formlarının hazırlanması ve
Öğrenci İşleri Daire Başkanlığına bildirilmesi',
            'Kayıt hakkı kazanan asıl ve yedek öğrencilerin F.Ü. internet sitesinde ilan edilmesi',
            'Asıl listedeki öğrencilerin kayıtları',
            'Kayıt hakkı kazanan yedek öğrencilerin F.Ü. internet sitesinde ilanı',
            'Yedek listedeki öğrencilerin kayıtları',
            'Kayıt yapan asıl ve yedek öğrencilerin muafiyetlerinin otomasyona girilmesi',
            'Derslerin başlaması',
        ];
        for($i=0;$i<12;$i++){
            DB::table('info')->insert([
                'category_id'=>9,
                'period_id'=>2,
                'content'=> $ciftAnadalVeYandalBasvuruKabulTakvimBaharContent[$i],
            ]);
        }

        $onlisansVeLisansOzelOgrBasvuruKabulTakvimGuzContent =[
            'Üniversitemiz öğrencilerinin özel öğrenci olarak başka bir üniversiteye gitmek
için Fak./Y.Okul/Konservatuvar/MYO’larına başvuru dönemi',
            'Üniversitemizde özel öğrenci statüsünden yararlanmak üzere diğer üniversite
öğrencilerinin ilgili birimlere (Fak./Y.Okul/Konservatuvar/MYO) başvuru dönemi',
            'Özel öğrenci başvurularının ilgili kurullarda değerlendirilip kararın Rektörlük
Makamına gönderilmesi',
            'Özel öğrenci kararlarının Senato’da görüşülmesi',
            'Özel öğrenci kayıtları',
            'Danışmanlarıyla birlikte ders kayıtlarını yapmaları',
            'Derslerin başlaması',
        ];
        for($i=0;$i<7;$i++){
            DB::table('info')->insert([
                'category_id'=>10,
                'period_id'=>1,
                'content'=> $onlisansVeLisansOzelOgrBasvuruKabulTakvimGuzContent[$i],
            ]);
        }

        $onlisansVeLisansOzelOgrBasvuruKabulTakvimBaharContent =[
            'Üniversitemizde özel öğrenci statüsünden yararlanmak üzere diğer üniversite
öğrencilerinin ve başka yükseköğretim kurumuna gitmek isteyen Üniversitemiz
öğrencilerinin ilgili birimlerine (Fak./Y.Okul/Konservatuvar/MYO) başvuru
dönemi',
            'Özel öğrenci başvurularının ilgili kurullarda değerlendirilip kararın Rektörlük
Makamına gönderilmesi',
            'Özel öğrenci kararlarının Senato’da görüşülmesi',
            'Özel öğrencilerin kayıtları',
            'Danışmanlarıyla birlikte ders kayıtlarını yapmaları ',
            'Derslerin başlaması',
        ];
        for($i=0;$i<6;$i++){
            DB::table('info')->insert([
                'category_id'=>10,
                'period_id'=>2,
                'content'=> $onlisansVeLisansOzelOgrBasvuruKabulTakvimBaharContent[$i],
            ]);
        }

        $onlisansVeLisansEkSinavTakvimGuzContent =[
            'Başvuruların alınması',
            '1. Ek Sınavların Yapılması',
            '1. Ek sınav notlarının otomasyondan ilanı için son tarih',
            'II. Ek Sınavların Yapılması',
            'II. Ek sınav notlarının otomasyondan ilanı için son tarih',
        ];
        for($i=0;$i<5;$i++){
            DB::table('info')->insert([
                'category_id'=>11,
                'period_id'=>1,
                'content'=> $onlisansVeLisansEkSinavTakvimGuzContent[$i],
            ]);
        }

        $onlisansVeLisansEkSinavTakvimBaharContent =[
            'Başvuruların alınması ',
            '2. Ek Sınavların Yapılması ',
            '2. Ek sınav notlarının otomasyondan ilanı için son tarih',
            'II. Ek Sınavların Yapılmas',
            'II. Ek sınav notlarının otomasyondan ilanı için son tarih ',
        ];
        for($i=0;$i<5;$i++){
            DB::table('info')->insert([
                'category_id'=>11,
                'period_id'=>2,
                'content'=> $onlisansVeLisansEkSinavTakvimBaharContent[$i],
            ]);
        }

    }
}
