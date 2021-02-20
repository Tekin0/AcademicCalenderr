<?php

namespace Database\Seeders;

use App\Models\Period;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categories::create(['name' => 'GENEL AKADEMİK TAKVİMİ']);
        Categories::create(['name' => 'TIP FAKÜLTESİ AKADEMİK TAKVİMİ ']);
        Categories::create(['name' => 'DİŞ HEKİMLİĞİ FAKÜLTESİ AKADEMİK TAKVİMİ']);
        Categories::create(['name' => 'YAZ OKULU AKADEMİK TAKVİMİ']);
        Categories::create(['name' => 'LİSANSÜSTÜ AKADEMİK TAKVİM']);
        Categories::create(['name' => 'ÖNLİSANS VE LİSANS PROGRAMLARINA KURUM İÇİ YATAY GEÇİŞ BAŞVURU VE KABUL TAKVİMİ']);
        Categories::create(['name' => 'ÖNLİSANS VE LİSANS PROGRAMLARINA KURUMLARARASI YATAY GEÇİŞ BAŞVURU VE KABUL TAKVİMİ']);
        Categories::create(['name' => 'ÖNLİSANS VE LİSANS PROGRAMLARINA MERKEZİ YERLEŞTİRME PUANI (ÖSYM) İLE YATAY GEÇİŞ BAŞVURU VE KABUL TAKVİMİ']);
        Categories::create(['name' => 'ÇİFT ANADAL VE YANDAL PROGRAMLARI BAŞVURU VE KABUL TAKVİMİ']);
        Categories::create(['name' => 'ÖNLİSANS VE LİSANS PROGRAMLARINA ÖZEL ÖĞRENCİ BAŞVURU VE KABUL TAKVİMİ']);
        Categories::create(['name' => 'ÖNLİSANS PROGRAMLARI EK SINAV TAKVİMİ']);
    }
}
