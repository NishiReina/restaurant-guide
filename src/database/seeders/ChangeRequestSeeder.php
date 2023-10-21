<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ChangeRequest;

class ChangeRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChangeRequest::create([
            'status' => 0,
            'start_time' => '11:00',
            'end_time' => '21:00',
            'min_price' => 10000,
            'max_price' => 15000,
            'shop_important_id' => 1,
        ]);

        ChangeRequest::create([
            'status' => 0,
            'area_id' => 1,
            'shop_important_id' => 4
        ]);

        ChangeRequest::create([
            'status' => 0,
            'gunre_id' => 3,
            'shop_important_id' => 6
        ]);
    }
}
