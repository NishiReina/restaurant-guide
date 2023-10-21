<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShopFeature;

class ShopFeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    // 1: デート
    // 2: 女子会
    // 3: 誕生日
    // 4: 記念日
    // 5: 飲み放題
    // 6: 個室
    // 7: おしゃれな空間
    // 8: おひとり様
    // 9: 贅沢
    //10: コスパ

    public function run()
    {
        ShopFeature::create([
            'shop_id' => 1,
            'feature_id' => 8
        ]);

        ShopFeature::create([
            'shop_id' => 1,
            'feature_id' => 6
        ]);

        ShopFeature::create([
            'shop_id' => 1,
            'feature_id' => 3
        ]);

        ShopFeature::create([
            'shop_id' => 2,
            'feature_id' => 8
        ]);

        ShopFeature::create([
            'shop_id' => 2,
            'feature_id' => 6
        ]);

        ShopFeature::create([
            'shop_id' => 3,
            'feature_id' => 8
        ]);

        ShopFeature::create([
            'shop_id' => 4,
            'feature_id' => 4
        ]);

        ShopFeature::create([
            'shop_id' => 4,
            'feature_id' => 7
        ]);

        ShopFeature::create([
            'shop_id' => 4,
            'feature_id' => 9
        ]);

        ShopFeature::create([
            'shop_id' => 5,
            'feature_id' => 4
        ]);

        ShopFeature::create([
            'shop_id' => 5,
            'feature_id' => 6
        ]);

        ShopFeature::create([
            'shop_id' => 5,
            'feature_id' => 7
        ]);

        ShopFeature::create([
            'shop_id' => 5,
            'feature_id' => 9
        ]);

        ShopFeature::create([
            'shop_id' => 6,
            'feature_id' => 4
        ]);

        ShopFeature::create([
            'shop_id' => 6,
            'feature_id' => 7
        ]);

        ShopFeature::create([
            'shop_id' => 1,
            'feature_id' => 4
        ]);

        ShopFeature::create([
            'shop_id' => 2,
            'feature_id' => 7
        ]);

        ShopFeature::create([
            'shop_id' => 7,
            'feature_id' => 4
        ]);

        ShopFeature::create([
            'shop_id' => 7,
            'feature_id' => 7
        ]);

        ShopFeature::create([
            'shop_id' => 8,
            'feature_id' => 4
        ]);

        ShopFeature::create([
            'shop_id' => 8,
            'feature_id' => 5
        ]);

        ShopFeature::create([
            'shop_id' => 9,
            'feature_id' => 4
        ]);

        ShopFeature::create([
            'shop_id' => 9,
            'feature_id' => 5
        ]);

        ShopFeature::create([
            'shop_id' => 9,
            'feature_id' => 6
        ]);

        ShopFeature::create([
            'shop_id' => 10,
            'feature_id' => 2
        ]);

        ShopFeature::create([
            'shop_id' => 10,
            'feature_id' => 7
        ]);

        ShopFeature::create([
            'shop_id' => 11,
            'feature_id' => 2
        ]);

        ShopFeature::create([
            'shop_id' => 11,
            'feature_id' => 3
        ]);

        ShopFeature::create([
            'shop_id' => 11,
            'feature_id' => 7
        ]);

        ShopFeature::create([
            'shop_id' => 12,
            'feature_id' => 1
        ]);

        ShopFeature::create([
            'shop_id' => 12,
            'feature_id' => 7
        ]);

        ShopFeature::create([
            'shop_id' => 13,
            'feature_id' => 1
        ]);

        ShopFeature::create([
            'shop_id' => 13,
            'feature_id' => 7
        ]);

        ShopFeature::create([
            'shop_id' => 13,
            'feature_id' => 8
        ]);

        ShopFeature::create([
            'shop_id' => 14,
            'feature_id' => 5
        ]);

        ShopFeature::create([
            'shop_id' => 15,
            'feature_id' => 5
        ]);

        ShopFeature::create([
            'shop_id' => 15,
            'feature_id' => 7
        ]);

        ShopFeature::create([
            'shop_id' => 16,
            'feature_id' => 4
        ]);

        ShopFeature::create([
            'shop_id' => 16,
            'feature_id' => 7
        ]);

        ShopFeature::create([
            'shop_id' => 17,
            'feature_id' => 4
        ]);

        ShopFeature::create([
            'shop_id' => 17,
            'feature_id' => 6
        ]);

        ShopFeature::create([
            'shop_id' => 17,
            'feature_id' => 7
        ]);

        ShopFeature::create([
            'shop_id' => 17,
            'feature_id' => 9
        ]);

        ShopFeature::create([
            'shop_id' => 18,
            'feature_id' => 8
        ]);

        ShopFeature::create([
            'shop_id' => 18,
            'feature_id' => 10
        ]);

        ShopFeature::create([
            'shop_id' => 19,
            'feature_id' => 8
        ]);

        ShopFeature::create([
            'shop_id' => 19,
            'feature_id' => 10
        ]);
    }
}
