<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'user1',
            'email' => 'user@user.user',
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'user2',
            'email' => 'user2@user.user',
            'password' => Hash::make('password')
        ]);

        User::create([
            'name' => 'user3',
            'email' => 'user3@user.user',
            'password' => Hash::make('password')
        ]);
    }
}
