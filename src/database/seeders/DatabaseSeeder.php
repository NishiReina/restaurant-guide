<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(GunreSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(ShopSeeder::class);
        $this->call(FeatureSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(ReservationSeeder::class);
        $this->call(RestSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(ShopImportantSeeder::class);
        $this->call(ShopRestSeeder::class);
        $this->call(ShopThumbnailSeeder::class);
        $this->call(ShopFeatureSeeder::class);
        $this->call(ChangeRequestSeeder::class);
    }
}
