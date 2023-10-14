<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gunre;

class GunreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gunre::create([
            'name' => '寿司'
        ]);

        Gunre::create([
            'name' => '焼肉'
        ]);

        Gunre::create([
            'name' => 'フレンチ'
        ]);

        Gunre::create([
            'name' => 'イタリアン'
        ]);

        Gunre::create([
            'name' => 'バー'
        ]);

        Gunre::create([
            'name' => 'カフェ'
        ]);

        Gunre::create([
            'name' => '居酒屋'
        ]);

        Gunre::create([
            'name' => 'ステーキ'
        ]);
    }
}
