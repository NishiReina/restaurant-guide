<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Rest;
use App\Models\Gunre;
use App\Models\Area;
use App\Models\ChangeRequest;
use App\Models\ShopRestRequest;
use App\Http\Requests\ChangeRequestParameter;

class ShopController extends Controller
{
    public function index()
    {
        return view('shop.top');
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
}
