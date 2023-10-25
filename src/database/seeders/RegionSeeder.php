<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $regions = [
            ['name' => '北海道・東北'],
            ['name' => '関東'],
            ['name' => '中部'],
            ['name' => '関西'],
            ['name' => '中国・四国'],
            ['name' => '九州・沖縄'],
        ];

        foreach($regions as $region){
            Region::create($region);
        }
    }
}
