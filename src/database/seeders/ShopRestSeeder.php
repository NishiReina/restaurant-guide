<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShopRest;

class ShopRestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShopRest::create([
            'shop_id' => 1,
            'rest_id' => 1
        ]);

        ShopRest::create([
            'shop_id' => 1,
            'rest_id' => 8
        ]);

        ShopRest::create([
            'shop_id' => 2,
            'rest_id' => 3
        ]);

        ShopRest::create([
            'shop_id' => 3,
            'rest_id' => 2
        ]);

        ShopRest::create([
            'shop_id' => 4,
            'rest_id' => 2
        ]);

        ShopRest::create([
            'shop_id' => 4,
            'rest_id' => 8
        ]);

        ShopRest::create([
            'shop_id' => 4,
            'rest_id' => 9
        ]);

        ShopRest::create([
            'shop_id' => 5,
            'rest_id' => 2
        ]);

        ShopRest::create([
            'shop_id' => 5,
            'rest_id' => 8
        ]);

        ShopRest::create([
            'shop_id' => 5,
            'rest_id' => 9
        ]);

        ShopRest::create([
            'shop_id' => 6,
            'rest_id' => 4
        ]);

        ShopRest::create([
            'shop_id' => 7,
            'rest_id' => 3
        ]);

        ShopRest::create([
            'shop_id' => 9,
            'rest_id' => 8
        ]);

        ShopRest::create([
            'shop_id' => 10,
            'rest_id' => 2
        ]);

        ShopRest::create([
            'shop_id' => 11,
            'rest_id' => 3
        ]);

        ShopRest::create([
            'shop_id' => 12,
            'rest_id' => 7
        ]);

        ShopRest::create([
            'shop_id' => 13,
            'rest_id' => 7
        ]);

        ShopRest::create([
            'shop_id' => 14,
            'rest_id' => 7
        ]);

        ShopRest::create([
            'shop_id' => 15,
            'rest_id' => 7
        ]);

        ShopRest::create([
            'shop_id' => 16,
            'rest_id' => 7
        ]);

        ShopRest::create([
            'shop_id' => 17,
            'rest_id' => 7
        ]);

    }
}
