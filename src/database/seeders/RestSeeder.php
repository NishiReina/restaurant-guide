<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rest;

class RestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rest::create([
            'name' => "月曜日"
        ]);

        Rest::create([
            'name' => "火曜日"
        ]);

        Rest::create([
            'name' => "水曜日"
        ]);

        Rest::create([
            'name' => "木曜日"
        ]);

        Rest::create([
            'name' => "金曜日"
        ]);

        Rest::create([
            'name' => "土曜日"
        ]);

        Rest::create([
            'name' => "日曜日"
        ]);

        Rest::create([
            'name' => "年末年始"
        ]);

        Rest::create([
            'name' => "お盆"
        ]);

    }
}
