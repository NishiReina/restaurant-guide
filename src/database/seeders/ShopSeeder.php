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
            'password' => Hash::make('password'),
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '17:00',
            'end_time' => '23:00',
            'min_price' => 20000,
            'max_price' => 30000,
            'area_id' => 13,
            'gunre_id' => 1,
            'img_url' => 'img/shop_ume.jpg',
            'title' => '鮮度と職人技の融合、美味しい寿司の新たな旅へ',
            'pr' => '当店は新鮮な海の幸と職人技が融合する場所です。私たちは伝統的な日本の寿司を、革新的なアプローチと組み合わせて、美味しさの新たな旅へご案内いたします。新鮮なネタと職人の技が調和した、贅沢な寿司の世界をご体験ください。',
        ]);

        Shop::create([
            'name' => '竹',
            'email' => 'take@take.take',
            'password' => Hash::make('password'),
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '17:00',
            'end_time' => '23:00',
            'min_price' => 10000,
            'max_price' => 20000,
            'area_id' => 27,
            'gunre_id' => 1,
            'img_url' => 'img/shop_take.jpg',
            'title' => '海からの贈り物、極上の寿司体験を',
            'pr' => '私たちの寿司は、海からの贈り物を極上の形でお楽しみいただける特別なものです。厳選された新鮮なネタと、経験豊富なシェフの技術が、最高の寿司体験をお届けします。新たな味覚の冒険に出発しませんか？',
        ]);

        Shop::create([
            'name' => '松',
            'email' => 'matsu@matsu.matsu',
            'password' => Hash::make('password'),
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '17:00',
            'end_time' => '23:00',
            'min_price' => 10000,
            'max_price' => 20000,
            'area_id' => 1,
            'gunre_id' => 1,
            'img_url' => 'img/shop_matsu.jpg',
            'title' => 'モダンな寿司アート、五感に響く食の饗宴',
            'pr' => '当店では、寿司をモダンなアートとして捉え、五感に響く食の饗宴を提供しております。シェフが織りなす創造的な寿司の数々は、目でも楽しみ、舌でも楽しむことができます。美味しい寿司の新次元をご体験ください。',
        ]);

        Shop::create([
            'name' => 'リストランテ',
            'email' => 'restaurant@restaurant.restaurant',
            'password' => Hash::make('password'),
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '22:00',
            'min_price' => 10000,
            'max_price' => 20000,
            'area_id' => 13,
            'gunre_id' => 3,
            'img_url' => 'img/shop_restaurante.jpg',
            'title' => 'フレンチガストロノミーの至福体験',
            'pr' => '当店では、フレンチガストロノミーの真髄を味わえる至福の体験が待っています。厳選された食材とシェフの繊細な技術が、洗練された料理を生み出します。贅沢なひとときを過ごすために、ぜひ当店へ足を運んでください。',
        ]);

        Shop::create([
            'name' => 'ダ・ヴィンチ',
            'email' => 'da@da.da',
            'password' => Hash::make('password'),
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '22:00',
            'min_price' => 10000,
            'max_price' => 20000,
            'area_id' => 26,
            'gunre_id' => 3,
            'img_url' => 'img/shop_da.jpg',
            'title' => 'シェフの創造力が織りなすフレンチの詩',
            'pr' => '当店のシェフは、食材と料理に対する情熱と創造力にあふれています。彼らの手から生まれるフレンチ料理はまさに詩のようで、五感を刺激します。芸術的な料理の数々を楽しむ贅沢なひとときを、ぜひご堪能ください。',
        ]);

        Shop::create([
            'name' => 'ビストロ',
            'email' => 'bistro@bistro.bistro',
            'password' => Hash::make('password'),
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '22:00',
            'min_price' => 3000,
            'max_price' => 8000,
            'area_id' => 14,
            'gunre_id' => 4,
            'img_url' => 'img/shop_bistro.jpg',
            'title' => 'イタリアの味わい、心温まるイタリアンのひととき',
            'pr' => '当店はイタリアの味わいと温かさを提供する場所です。新鮮な食材とシェフの情熱が、心温まるイタリアン料理を生み出します。家庭のようなぬくもりと美味しい料理が、お客様をお迎えいたします。ご家族や友人と素敵なひとときを過ごしましょう。',
        ]);
        
        Shop::create([
            'name' => 'デ・フルール',
            'email' => 'de@de.de',
            'password' => Hash::make('password'),
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '22:00',
            'min_price' => 5000,
            'max_price' => 10000,
            'area_id' => 40,
            'gunre_id' => 4,
            'img_url' => 'img/shop_de.jpg',
            'title' => 'イタリアの美味しさ、新たな食の冒険',
            'pr' => '当店ではイタリアの伝統と革新が出会い、新たな食の冒険が待っています。シェフたちは新鮮な材料と伝統的なレシピを組み合わせ、素晴らしいイタリアンの料理を提供しています。美味しさと驚きに満ちた食の世界を探索しましょう。',
        ]);

        Shop::create([
            'name' => '焼肉ジャンプ',
            'email' => 'jump@jump.jump',
            'password' => Hash::make('password'),
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '17:00',
            'end_time' => '23:00',
            'min_price' => 10000,
            'max_price' => 15000,
            'area_id' => 13,
            'gunre_id' => 2,
            'img_url' => 'img/shop_yakinikujump.jpg',
            'title' => '焼肉の極み、贅沢な肉の宴',
            'pr' => '当店では、極上の肉と焼肉のアートを楽しむ贅沢な宴がお待ちしております。新鮮で美味しい肉と、シェフの職人技が絶妙に組み合わさり、一口一口が絶品の味わいを提供します。美味しい焼肉を心ゆくまで楽しんでください。',
        ]);

        Shop::create([
            'name' => '焼肉亭',
            'email' => 'yakinikutei@yakinikutei.yakinikutei',
            'password' => Hash::make('password'),
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '17:00',
            'end_time' => '23:00',
            'min_price' => 10000,
            'max_price' => 15000,
            'area_id' => 27,
            'gunre_id' => 2,
            'img_url' => 'img/shop_yakinikutei.jpg',
            'title' => '焼肉の新次元、肉の饗宴',
            'pr' => '当店では、焼肉を新たな次元に昇華させた肉の饗宴が展開されています。新鮮な肉と多彩な味付けが、一瞬一瞬を特別なものにします。シェフのアイデアと技術による料理が、焼肉を極めたい方々にぴったりです。贅沢な焼肉体験をお楽しみください。',
        ]);

        Shop::create([
            'name' => 'コーヒーハウス',
            'email' => 'coffee@coffee.coffee',
            'password' => Hash::make('password'),
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '17:00',
            'min_price' => 1000,
            'max_price' => 3000,
            'area_id' => 14,
            'gunre_id' => 6,
            'img_url' => 'img/shop_coffee.jpg',
            'title' => 'ここがあなたのお気に入りのカフェに',
            'pr' => '当カフェへようこそ。ここはくつろぎの場所であり、美味しいコーヒーとデリシャスなスイーツが楽しめる場所です。私たちの目標は、あなたがここを訪れるたびに、心地よいひとときを過ごし、くつろぎの場所として気に入っていただくことです。あなたのお気に入りのカフェになることを願っています。',
        ]);

        Shop::create([
            'name' => 'パリスカフェ',
            'email' => 'pari@pari.pari',
            'password' => Hash::make('password'),
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '17:00',
            'min_price' => 1000,
            'max_price' => 3000,
            'area_id' => 26,
            'gunre_id' => 6,
            'img_url' => 'img/shop_pari.jpeg',
            'title' => 'フレッシュなコーヒーと創造的なカフェ料理',
            'pr' => '私たちのカフェは新鮮なコーヒーと創造的な料理で知られています。シェフたちの料理は季節の食材を使用し、驚きと満足感を提供します。心地よい音楽とくつろぎの雰囲気の中で、新しい味覚の冒険を楽しんでいただけます。ぜひお越しください、新しいカフェ体験が待っています。',
        ]);

        Shop::create([
            'name' => '隠れ家bar',
            'email' => 'bar@bar.bar',
            'password' => Hash::make('password'),
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '17:00',
            'end_time' => '24:00',
            'min_price' => 8000,
            'max_price' => 10000,
            'area_id' => 13,
            'gunre_id' => 5,
            'img_url' => 'img/shop_bar.jpeg',
            'title' => 'カクテルの魔法と夜の輝き',
            'pr' => '私たちのバーはカクテルの魔法と夜の輝きが広がる場所です。洗練されたカクテルメニューとクリエイティブなバーテンダーが、あなたに新たな味わいと感動を提供します。友人や仲間と楽しい夜を過ごし、夜の輝きを感じる場所として、ぜひ当バーに足を運んでください。',
        ]);

        Shop::create([
            'name' => 'ハーバー',
            'email' => 'harbor@harbor.harbor',
            'password' => Hash::make('password'),
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '17:00',
            'end_time' => '24:00',
            'min_price' => 8000,
            'max_price' => 10000,
            'area_id' => 14,
            'gunre_id' => 5,
            'img_url' => 'img/shop_harbar.jpg',
            'title' => '音楽とカクテルのハーモニー',
            'pr' => '私たちのバーは音楽とカクテルのハーモニーが楽しめる場所です。生演奏やDJの音楽がバックグラウンドで流れ、美味しいカクテルが楽しめます。カクテルの芸術と音楽のリズムが調和し、あなたを楽しませるでしょう。音楽とカクテルの愛好者にぴったりの場所です。',
        ]);

        Shop::create([
            'name' => '居酒屋ラッキー',
            'email' => 'lucky@lucky.lucky',
            'password' => Hash::make('password'),
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '17:00',
            'end_time' => '24:00',
            'min_price' => 3000,
            'max_price' => 8000,
            'area_id' => 13,
            'gunre_id' => 7,
            'img_url' => 'img/shop_lucky.jpeg',
            'title' => '心温まる酒と美味しい料理のひととき',
            'pr' => '当居酒屋は、心温まる酒と美味しい料理が楽しめる場所です。新鮮な季節の食材を使った料理と、豊富なお酒の種類が、楽しいひとときを提供します。友人や仲間と、心温まるひとときを当店でお楽しみください。',
        ]);

        Shop::create([
            'name' => '酔いどれ庵',
            'email' => 'yoidore@yoidore.yoidore',
            'password' => Hash::make('password'),
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '17:00',
            'end_time' => '24:00',
            'min_price' => 3000,
            'max_price' => 8000,
            'area_id' => 40,
            'gunre_id' => 7,
            'img_url' => 'img/shop_yoidore.jpeg',
            'title' => 'アットホームな雰囲気と楽しい酒宴',
            'pr' => '私たちの居酒屋はアットホームな雰囲気と楽しい酒宴の場所です。シェフの特製料理とお酒が、くつろぎのひとときを提供します。おしゃべりに笑い、楽しい時間を過ごすために、ぜひ当店に足を運んでください。',
        ]);

        Shop::create([
            'name' => 'ステーキ・ウルフ',
            'email' => 'wolf@wolf.wolf',
            'password' => Hash::make('password'),
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '22:00',
            'min_price' => 15000,
            'max_price' => 30000,
            'area_id' => 13,
            'gunre_id' => 8,
            'img_url' => 'img/shop_wolf.jpg',
            'title' => '極上ステーキの世界へようこそ',
            'pr' => '当店へようこそ。ここは極上のステーキが味わえる場所です。厳選された肉とシェフの職人技が、最高のステーキ体験を提供します。新鮮でジューシーな肉の味わいを楽しむために、ぜひ当店でお召し上がりください。',
        ]);

        Shop::create([
            'name' => 'ステーキ・ギャング',
            'email' => 'gang@gang.gang',
            'password' => Hash::make('password'),
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '22:00',
            'min_price' => 15000,
            'max_price' => 30000,
            'area_id' => 26,
            'gunre_id' => 8,
            'img_url' => 'img/shop_gang.jpg',
            'title' => '肉愛と食の饗宴',
            'pr' => '当店は肉愛と食の饗宴の場所です。シェフたちは新鮮で高品質な肉を厳選し、絶品のステーキを提供しています。肉の繊細な調理法と豊かな味わいが、食の愛好家に喜んでいただけることでしょう。贅沢な肉の世界を探索しましょう。',
        ]);

        Shop::create([
            'name' => 'ラーメン三郎',
            'email' => 'saburo@saburo.saburo',
            'password' => Hash::make('password'),
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '20:00',
            'min_price' => 1000,
            'max_price' => 2000,
            'area_id' => 1,
            'gunre_id' => 9,
            'img_url' => 'img/shop_saburo.jpeg',
            'title' => '本格的な日本の味わい、ラーメンの魔法',
            'pr' => '当店では本格的な日本のラーメンの味わいを提供しております。手間暇かけて仕上げたスープと新鮮な麺が、ラーメンの魔法を生み出します。ラーメン愛好家にとって、当店は新たな味わいの冒険への出発点です。',
        ]);

        Shop::create([
            'name' => 'ラーメン横綱',
            'email' => 'yokoduna@yokoduna.yokoduna',
            'password' => Hash::make('password'),
            'phone' => '000-0000-0000',
            'postcode' => '0000000',
            'address' => 'テスト県テスト市テスト町0-0-0',
            'start_time' => '11:00',
            'end_time' => '20:00',
            'min_price' => 1000,
            'max_price' => 2000,
            'area_id' => 40,
            'gunre_id' => 9,
            'img_url' => 'img/shop_yokoduna.jpeg',
            'title' => '一杯の幸福、ラーメンの宝庫',
            'pr' => '私たちのラーメンは、一杯の幸福を提供する宝庫です。シェフが厳選した食材と秘伝のスープが、あなたを魅了することでしょう。アットホームな雰囲気の中で、美味しいラーメンを楽しむ素晴らしいひとときを過ごしましょう。',
        ]);

        
    }
}
