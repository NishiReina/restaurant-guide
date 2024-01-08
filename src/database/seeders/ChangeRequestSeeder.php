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
            'name' => "change1",
            'phone' => "01234567890",
            'postcode' => "1234567",
            'address' => "test県test市",
            'start_time' => "11:00",
            'end_time' => "20:00",
            'min_price' => 1000,
            'max_price' => 2000,
            'area_id' => 13,
            'gunre_id' => 2,
            'shop_id' => 1,
        ]);

        ChangeRequest::create([
            'name' => "change2",
            'phone' => "01234567890",
            'postcode' => "1234567",
            'address' => "test県test市",
            'start_time' => "11:00",
            'end_time' => "20:00",
            'min_price' => 1000,
            'max_price' => 2000,
            'area_id' => 13,
            'gunre_id' => 2,
            'shop_id' => 2,
        ]);

        ChangeRequest::create([
            'name' => "change3",
            'phone' => "01234567890",
            'postcode' => "1234567",
            'address' => "test県test市",
            'start_time' => "11:00",
            'end_time' => "20:00",
            'min_price' => 1000,
            'max_price' => 2000,
            'area_id' => 13,
            'gunre_id' => 2,
            'shop_id' => 3,
        ]);
    }
}
