<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Rest;
use App\Models\Gunre;
use App\Models\Area;
use App\Models\Feature;
use App\Models\Reservation;
use App\Models\ShopFeature;
use App\Models\ChangeRequest;
use App\Models\ShopRestRequest;
use App\Http\Requests\ChangeRequestParameter;
use Illuminate\Support\Facades\Storage;
use App\Calendar\CalendarView;


use Illuminate\Support\Carbon;

class ShopController extends Controller
{
    public function index(){
        $shop = Shop::find(Auth::id());
        return view('shop.myshop', compact('shop'));
    }

    public function importantInfo(){
        $shop = Shop::find(Auth::id());
        return view('shop.important', compact('shop'));
    }

    public function editImportantInfo(){

        $shop = Shop::find(Auth::id());

        // 定休日登録をした日のidリスト
        $rest_id_lists = [];
        foreach( $shop->shopRests as $rest){
            array_push($rest_id_lists, $rest->rest_id);
        }

        $areas = Area::all();
        $rests = Rest::all();
        $gunres = Gunre::all();

        return view('shop.important_edit', compact('shop', 'areas', 'rests' ,'gunres', 'rest_id_lists'));
    }

    public function requestUpdateImportantInfo(ChangeRequestParameter $request){

        $shop = Shop::find(Auth::id());
        $change_request = ChangeRequest::create([
            "name" => $request->name,
            "phone" => $request->phone,
            "postcode" => $request->postcode,
            "address" => $request->address,
            "start_time" => $request->start_time,
            "end_time" => $request->end_time,
            "min_price" => $request->min_price,
            "max_price" => $request->max_price,
            "area_id" => $request->area_id,
            "gunre_id" => $request->gunre_id,
            "shop_id" => $shop->id,
        ]);

        // 定休日の変更申請依頼作成
        foreach($request->rests as $rest){
            ShopRestRequest::create([
                "shop_id" => $shop->id,
                "rest_id" => $rest,
                "change_request_id" => $change_request->id
            ]);
        }

        return redirect()->route('request_detail',['change_request', $change_request->id]);
    }

    public function getChangeRequestList(Request $request){
        $shop = Shop::find(Auth::id());
        $requests = ChangeRequest::where('shop_id', $shop->id)->get();
        $approvals = ChangeRequest::onlyTrashed()->where('shop_id', $shop->id)->get();
        return view('request_list', compact('requests', 'approvals'));
    }

    public function getRequestDetail(ChangeRequest $change_request){
        return view('shop.request_detail', compact('change_request'));
    }

    public function editInfo(){
        $shop = Shop::find(Auth::id());
        $features = Feature::all();

        // こだわり登録をしたfeatureテーブルのidリスト
        $feature_id_lists = [];
        foreach( $shop->shopFeatures as $feature){
            array_push($feature_id_lists, $feature->feature_id);
        }
        return view('shop.info_edit', compact('shop', 'features', 'feature_id_lists'));
    }

    public function updateInfo(Request $request){

        $shop = Shop::find(Auth::id());
        $img = $request->file('img_url');
        try {
            if($img){
                $img_url = Storage::disk('local')->put('public/img', $img);
            }else{
                $img_url=$shop->img_url;
            }
        } catch (\Throwable $th) {
            throw $th;
        }

        Shop::find(Auth::id())->update([
            'img_url' => $img_url,
            'title' => $request->title,
            'pr' => $request->pr,
        ]);

        // 定休日の変更申請依頼作成
        // こだわりのデータをリセット
        ShopFeature::where('shop_id', Auth::id())->delete();
        foreach($request->features as $feature_id){
            $exist = ShopFeature::where('shop_id', Auth::id())->where('feature_id', $feature_id)->exists();
            if(!$exist){
                ShopFeature::create([
                    "shop_id" =>  Auth::id(),
                    "feature_id" => $feature_id
                ]);
            }
        }

        return redirect('/shop/info/edit');
    }

    public function myShop(Request $request){

         $shop = Shop::find(Auth::id());

        return view('shop.myshop', compact('shop'));
    }

    public function calendar(Request $request){

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

        $calendar = new CalendarView($date, "full");
        return view('shop.calendar', compact('calendar'));
    }

}
