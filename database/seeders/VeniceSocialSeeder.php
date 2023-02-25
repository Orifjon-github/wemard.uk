<?php

namespace Database\Seeders;

use App\Models\Settings\Social;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VeniceSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Social::create([
//            'setting_id' => 1,
//            'name' => 'telegram',
//            'url' => 'https://t.me/orifjon_oripov',
//            'icon' => '/storage/homepage/setting/telegram.svg',
//        ]);
        Social::create([
            'setting_id' => 1,
            'name' => 'facebook',
            'url' => 'https://m.facebook.com/venicepizzeriauk/ ',
            'icon' => '/storage/homepage/setting/facebook.svg',
        ]);
//        Social::create([
//            'setting_id' => 1,
//            'name' => 'twitter',
//            'url' => 'https://t.me/orifjon_oripov',
//            'icon' => '/storage/homepage/setting/twitter.svg',
//        ]);
        Social::create([
            'setting_id' => 1,
            'name' => 'instagram',
            'url' => 'https://instagram.com/venicepizzeriauk',
            'icon' => '/storage/homepage/setting/instagram.svg',
        ]);
    }
}
