<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Ürün 1',
            'image' => 'cloth_1.jpg',
            'content' => 'Ürün 1 içerik',
            'category_id' => 1,
            'short_text' => 'Kısa bilgi',
            'price' => 450,
            'color' => 'Siyah',
            'size' => 'M',
            'status' => '1',
            'quantity' => 3,
        ]);

        Product::create([
            'name' => 'Ürün 2',
            'image' => 'cloth_1.jpg',
            'content' => 'Ürün 2 içerik',
            'category_id' => 2,
            'short_text' => 'Kısa bilgi',
            'price' => 125,
            'color' => 'Beyaz',
            'size' => 'L',
            'status' => '1',
            'quantity' => 1,
        ]);
    }
}
