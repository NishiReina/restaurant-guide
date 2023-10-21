<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ShopImportant;

class ShopImportantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
     // 1: 北海道
     // 13: 東京
     // 14: 神奈川
     // 26: 京都
     // 27: 大阪
     // 40: 福岡
    public function run()
    {
        ShopImportant::create([
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '17:00',
            'end_time' => '23:00',
            'min_price' => 20000,
            'max_price' => 30000,
            'area_id' => 13,
            'gunre_id' => 1,
            'shop_id' => 1,
        ]);

        ShopImportant::create([
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '17:00',
            'end_time' => '23:00',
            'min_price' => 10000,
            'max_price' => 20000,
            'area_id' => 27,
            'gunre_id' => 1,
            'shop_id' => 2,
        ]);

        ShopImportant::create([
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '17:00',
            'end_time' => '23:00',
            'min_price' => 10000,
            'max_price' => 20000,
            'area_id' => 1,
            'gunre_id' => 1,
            'shop_id' => 3,
        ]);

        ShopImportant::create([
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '22:00',
            'min_price' => 10000,
            'max_price' => 20000,
            'area_id' => 13,
            'gunre_id' => 3,
            'shop_id' => 4,
        ]);

        ShopImportant::create([
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '22:00',
            'min_price' => 10000,
            'max_price' => 20000,
            'area_id' => 26,
            'gunre_id' => 3,
            'shop_id' => 5,
        ]);

        ShopImportant::create([
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '22:00',
            'min_price' => 3000,
            'max_price' => 8000,
            'area_id' => 14,
            'gunre_id' => 4,
            'shop_id' => 6,
        ]);

        ShopImportant::create([
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '22:00',
            'min_price' => 5000,
            'max_price' => 10000,
            'area_id' => 40,
            'gunre_id' => 4,
            'shop_id' => 7,
        ]);

        ShopImportant::create([
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '17:00',
            'end_time' => '23:00',
            'min_price' => 10000,
            'max_price' => 15000,
            'area_id' => 13,
            'gunre_id' => 2,
            'shop_id' => 8,
        ]);

        ShopImportant::create([
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '17:00',
            'end_time' => '23:00',
            'min_price' => 10000,
            'max_price' => 15000,
            'area_id' => 27,
            'gunre_id' => 2,
            'shop_id' => 9,
        ]);

        ShopImportant::create([
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '17:00',
            'min_price' => 1000,
            'max_price' => 3000,
            'area_id' => 14,
            'gunre_id' => 6,
            'shop_id' => 10,
        ]);

        ShopImportant::create([
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '17:00',
            'min_price' => 1000,
            'max_price' => 3000,
            'area_id' => 26,
            'gunre_id' => 6,
            'shop_id' => 11,
        ]);

        ShopImportant::create([
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '17:00',
            'end_time' => '24:00',
            'min_price' => 8000,
            'max_price' => 10000,
            'area_id' => 13,
            'gunre_id' => 5,
            'shop_id' => 12,
        ]);

        ShopImportant::create([
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '17:00',
            'end_time' => '24:00',
            'min_price' => 8000,
            'max_price' => 10000,
            'area_id' => 14,
            'gunre_id' => 5,
            'shop_id' => 13,
        ]);

        ShopImportant::create([
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '17:00',
            'end_time' => '24:00',
            'min_price' => 3000,
            'max_price' => 8000,
            'area_id' => 13,
            'gunre_id' => 7,
            'shop_id' => 14,
        ]);

        ShopImportant::create([
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '17:00',
            'end_time' => '24:00',
            'min_price' => 3000,
            'max_price' => 8000,
            'area_id' => 40,
            'gunre_id' => 7,
            'shop_id' => 15,
        ]);

        ShopImportant::create([
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '22:00',
            'min_price' => 15000,
            'max_price' => 30000,
            'area_id' => 13,
            'gunre_id' => 8,
            'shop_id' => 16,
        ]);

        ShopImportant::create([
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '22:00',
            'min_price' => 15000,
            'max_price' => 30000,
            'area_id' => 26,
            'gunre_id' => 8,
            'shop_id' => 17,
        ]);

        ShopImportant::create([
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '20:00',
            'min_price' => 1000,
            'max_price' => 2000,
            'area_id' => 1,
            'gunre_id' => 9,
            'shop_id' => 18,
        ]);

        ShopImportant::create([
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '20:00',
            'min_price' => 1000,
            'max_price' => 2000,
            'area_id' => 40,
            'gunre_id' => 9,
            'shop_id' => 19,
        ]);

    }
}
