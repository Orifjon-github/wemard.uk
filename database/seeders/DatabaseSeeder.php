<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Settings\SingleSettingItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call([
           VeniceSettingSeeder::class,
           veniceLogoSeeder::class,
           VeniceSingleSettingItemSeeder::class,
           VeniceAdvantageSeeder::class,
           VeniceSocialSeeder::class,
           VeniceCategorySeeder::class,
           VeniceCarouselSeeder::class,
           VeniceProductSeeder::class,
           VeniceSpecialSeeder::class,
           VeniceTestimonialSeeder::class,
           VeniceAdditionalProductSeeder::class,
       ]);
    }
}
