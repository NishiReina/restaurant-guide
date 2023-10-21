<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;
use Illuminate\Support\Facades\Hash;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::create([
            'name' => '梅',
            'email' => 'ume@ume.ume',
            'password' => Hash::make('password')
        ]);

        Shop::create([
            'name' => '竹',
            'email' => 'take@take.take',
            'password' => Hash::make('password')
        ]);

        Shop::create([
            'name' => '松',
            'email' => 'matsu@matsu.matsu',
            'password' => Hash::make('password')
        ]);

        Shop::create([
            'name' => 'リストランテ',
            'email' => 'restaurant@restaurant.restaurant',
            'password' => Hash::make('password')
        ]);

        Shop::create([
            'name' => 'ダ・ヴィンチ',
            'email' => 'da@da.da',
            'password' => Hash::make('password')
        ]);

        Shop::create([
            'name' => 'ビストロ',
            'email' => 'bistro@bistro.bistro',
            'password' => Hash::make('password')
        ]);
        
        Shop::create([
            'name' => 'デ・フルール',
            'email' => 'de@de.de',
            'password' => Hash::make('password')
        ]);

        Shop::create([
            'name' => '焼肉ジャンプ',
            'email' => 'jump@jump.jump',
            'password' => Hash::make('password')
        ]);

        Shop::create([
            'name' => '焼肉亭',
            'email' => 'yakinikutei@yakinikutei.yakinikutei',
            'password' => Hash::make('password')
        ]);

        Shop::create([
            'name' => 'コーヒーハウス',
            'email' => 'coffee@coffee.coffee',
            'password' => Hash::make('password')
        ]);

        Shop::create([
            'name' => 'パリスカフェ',
            'email' => 'pari@pari.pari',
            'password' => Hash::make('password')
        ]);

        Shop::create([
            'name' => '隠れ家bar',
            'email' => 'bar@bar.bar',
            'password' => Hash::make('password')
        ]);

        Shop::create([
            'name' => 'ハーバー',
            'email' => 'harbor@harbor.harbor',
            'password' => Hash::make('password')
        ]);

        Shop::create([
            'name' => '居酒屋ラッキー',
            'email' => 'lucky@lucky.lucky',
            'password' => Hash::make('password')
        ]);

        Shop::create([
            'name' => '酔いどれ庵',
            'email' => 'yoidore@yoidore.yoidore',
            'password' => Hash::make('password')
        ]);

        Shop::create([
            'name' => 'ステーキ・ウルフ',
            'email' => 'wolf@wolf.wolf',
            'password' => Hash::make('password')
        ]);

        Shop::create([
            'name' => 'ステーキ・ギャング',
            'email' => 'gang@gang.gang',
            'password' => Hash::make('password')
        ]);

        Shop::create([
            'name' => 'ラーメン三郎',
            'email' => 'saburo@saburo.saburo',
            'password' => Hash::make('password')
        ]);

        Shop::create([
            'name' => 'ラーメン横綱',
            'email' => 'yokoduna@yokoduna.yokoduna',
            'password' => Hash::make('password')
        ]);
    }
}
