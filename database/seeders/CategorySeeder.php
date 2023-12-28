<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $erkek = Category::create([
           'name' => 'Erkek',
           'content' => 'Genel Erkek kategorisi',
           'status' => '1',
           'image' => null,
           'cat_ust' => null,
           'thumbnail' => null,
        ]);

        $kadin = Category::create([
            'name' => 'Kadın',
            'content' => 'Genel Kadın kategorisi',
            'status' => '1',
            'image' => null,
            'cat_ust' => null,
            'thumbnail' => null,
         ]);

         $cocuk = Category::create([
            'name' => 'Çocuk',
            'content' => 'Genel Çocuk kategorisi',
            'status' => '1',
            'image' => null,
            'cat_ust' => null,
            'thumbnail' => null,
         ]);

         Category::create([
            'name' => 'Çocuk Ayakkabı',
            'content' => 'Çocuk Ayakkabı kategorisi',
            'status' => '1',
            'image' => null,
            'cat_ust' => $cocuk->id,
            'thumbnail' => null,
         ]);

         Category::create([
            'name' => 'Erkek Pantolon',
            'content' => 'Erkek Pantolon kategorisi',
            'status' => '1',
            'image' => null,
            'cat_ust' => $erkek->id,
            'thumbnail' => null,
         ]);

         Category::create([
            'name' => 'Kadın Pantolon',
            'content' => 'Genel Çocuk kategorisi',
            'status' => '1',
            'image' => null,
            'cat_ust' => $kadin->id,
            'thumbnail' => null,
         ]);
    }
}
