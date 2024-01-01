<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::create([
            'name' => 'address',
            'data' => 'Şanlıurfa Adresim'
        ]);

        SiteSetting::create([
            'name' => 'phone',
            'data' => '0541 123 45 67'
        ]);

        SiteSetting::create([
            'name' => 'email',
            'data' => 'smt@gmail.com'
        ]);

        SiteSetting::create([
            'name' => 'map',
            'data' => null,
        ]);

    }
}
