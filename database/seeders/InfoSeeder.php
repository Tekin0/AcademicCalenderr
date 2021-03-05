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

    }
}
