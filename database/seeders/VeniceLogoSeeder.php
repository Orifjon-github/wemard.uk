<?php

namespace Database\Seeders;

use App\Models\Settings\Logo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VeniceLogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Logo::create([
            'setting_id' => 1,
            'place' => 'Header Logo',
            'url' => '/storage/homepage/setting/venice-logo.png'
        ]);
        Logo::create([
            'setting_id' => 1,
            'place' => 'Footer Logo',
            'url' => '/storage/homepage/setting/venice-logo.png'
        ]);
    }
}
