<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'title' => 'Hakkımızda' ,
            'content' => 'Firmamız 2023 yılında arge çalışması için kuruldu' ,
            'image' => null ,
            'text1' => 'HIZLI KARGO' ,
            'text1_icon' =>null ,
            'text1_text' => 'Ürünlerinizi 2-5 iş günü içinde hızlı ve güvenli şekilde teslim alabilirsiniz.' ,
            'text2' => 'ÜCRETSIZ İADE' ,
            'text2_icon' =>null ,
            'text2_text' => 'Ürunlerinizi belli koşullar içerisinde ücretsiz olarak iade edebilirsiniz.' ,
            'text3' => 'MÜŞTERI DESTEĞI' ,
            'text3_icon' =>null ,
            'text3_text' => '7/24 güvenle müşteri hizmetleri ve WhatsApp kanalı ile destek alabilirsiniz.' ,
        ]);
    }
}
