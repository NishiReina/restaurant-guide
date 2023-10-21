<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reservation;
use DateTime;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reservation::create([
            'status' => 0,
            'number' => 2,
            'datetime' => new DateTime(),
            'user_id' => 1,
            'shop_id' => 1,
        ]);

        Reservation::create([
            'status' => 1,
            'number' => 2,
            'datetime' => new DateTime(),
            'user_id' => 2,
            'shop_id' => 1,
        ]);

        Reservation::create([
            'status' => 0,
            'number' => 1,
            'datetime' => new DateTime(),
            'user_id' => 3,
            'shop_id' => 3,
        ]);

        Reservation::create([
            'status' => 1,
            'number' => 1,
            'datetime' => new DateTime(),
            'user_id' => 1,
            'shop_id' => 3,
        ]);

        Reservation::create([
            'status' => 1,
            'number' => 1,
            'datetime' => new DateTime(),
            'user_id' => 2,
            'shop_id' => 3,
        ]);

        Reservation::create([
            'status' => 1,
            'number' => 1,
            'datetime' => new DateTime(),
            'user_id' => 1,
            'shop_id' => 8,
        ]);

        Reservation::create([
            'status' => 1,
            'number' => 1,
            'datetime' => new DateTime(),
            'user_id' => 2,
            'shop_id' => 19,
        ]);
    }
}
