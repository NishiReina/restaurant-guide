<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::create([
            'content' => 'デート',
            'img_url' => 'img/feature_date.jpg'
        ]);
        Feature::create([
            'content' => '女子会',
            'img_url' => 'img/feature_joshikai.jpg'
        ]);
        Feature::create([
            'content' => '誕生日',
            'img_url' => 'img/feature_birthday.jpg'
        ]);
        Feature::create([
            'content' => '記念日',
            'img_url' => 'img/feature_universary.jpeg'
        ]);
        Feature::create([
            'content' => '飲み放題',
            'img_url' => 'img/feature_nomihodai.jpeg'
        ]);
        Feature::create([
            'content' => '個室',
            'img_url' => 'img/feature_koshitsu.jpg'
        ]);
        Feature::create([
            'content' => 'おしゃれな空間',
            'img_url' => 'img/feature_oshare.jpg'
        ]);
        Feature::create([
            'content' => 'おひとり様',
            'img_url' => 'img/feature_ohitorisama.jpg'
        ]);
        Feature::create([
            'content' => '贅沢に',
            'img_url' => 'img/feature_rich.jpg'
        ]);
        Feature::create([
            'content' => 'コスパ',
            'img_url' => 'img/feature_reasonable.jpeg'
        ]);
    }
}
