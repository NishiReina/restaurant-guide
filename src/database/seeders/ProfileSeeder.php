<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'img_url' => 'img/user1.png',
            'phone' => '000-0000-0000',
            'user_id' => 1,
        ]);

        Profile::create([
            'img_url' => 'img/user2.png',
            'phone' => '000-0000-0000',
            'user_id' => 2,
        ]);
    }
}
