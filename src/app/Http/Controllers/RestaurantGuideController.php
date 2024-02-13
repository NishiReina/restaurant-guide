<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Feature;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Gunre;
use App\Models\Pickup;
use Carbon\Carbon;
use App\Calendar\CalendarView;

class RestaurantGuideController extends Controller
{
    public function top(){
        $regions = Region::all();
        $features = Feature::inRandomOrder()->take(4)->get();
        return view('top', compact('regions', 'features'));
    }

    public function detail(Shop $shop, Request $request){
        
        // クエリーのdateを受け取る
		$date = $request->input("date");

		// dateがYYYY-MMの形式かどうか判定する
		if($date && preg_match("/^[0-9]{4}-[0-9]{2}$/", $date)){
			$date = strtotime($date."-01");
		}else{
			$date = null;
		}

        //取得出来ない時は現在(=今月)を指定する
		if(!$date)$date = time();
		
		//カレンダーに渡す
        $calendar = new CalendarView($date, "half");

        return view('detail', compact('shop', 'calendar'));
    }

    public function shopList(Request $request){
        $query = Shop::query();
        if (!empty($request->area_id)) {
            $query->Where('area_id', $request->area_id);
        }
        if (!empty($request->gunre_id)) {
            $query->Where('gunre_id', $request->gunre_id);
        }
        if (!empty($request->keyword)) {
            $query->orWhere('name', 'like', '%'.$request->keyword.'%');
        }
        $shops = $query->get();
        // 並び替え（ソート：レビュー数、評価）
        if(!empty($request->sort)){
            if($request->sort=="ranking"){
                $shops = Shop::sortByReveiwStar($shops);
            }
            if($request->sort=="review"){
                $shops = Shop::sortByReveiwCount($shops);
            }
        }

        $today = new Carbon();
        $week = [
            [
                'date' => $today->format('m/d'),
                'dayOfWeek' => $today->isoFormat('ddd')
            ]
        ];
        for ($i = 1; $i < 7; $i++){
            $tmpDay =  $today->addDay();
            $day = [
                'date' => $tmpDay->format('m/d'),
                'dayOfWeek' => $tmpDay->isoFormat('ddd'),
            ];
            array_push($week, $day);
        }
        return view('shoplist', compact('shops', 'request', 'week'));
    }
}
