<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pickup;

class PickupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pickup::create([
            'review_id' => 1,
        ]);

        Pickup::create([
            'review_id' => 3,
        ]);
    }
}
