<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChangeRequest;
use App\Models\Shop;
use App\Models\ShopRest;
use App\Models\ShopRestRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function getRequestList()
    {
        $requests = ChangeRequest::all();
        $approvals = ChangeRequest::onlyTrashed()->get();
        return view('request_list', compact('requests','approvals'));
    }

    // 店舗重要情報変更依頼の承認機能
    public function approveRequest(ChangeRequest $change_request){
        $shop = Shop::find($change_request->shop_id)->update([
            "name" => $change_request->name,
            "phone" => $change_request->phone,
            "postcode" => $change_request->postcode,
            "address" => $change_request->address,
            "start_time" => $change_request->start_time,
            "end_time" => $change_request->end_time,
            "min_price" => $change_request->min_price,
            "max_price" => $change_request->max_price,
            "area_id" => $change_request->area_id,
            "gunre_id" => $change_request->gunre_id,
        ]);

        // 定休日のデータをリセット
        ShopRest::where('shop_id', $change_request->shop_id)->delete();
        $rests = ShopRestRequest::where('change_request_id', $change_request->id)->get();
        foreach($rests as $rest){
            $exist = ShopRest::where('shop_id', $rest->shop_id)->where('rest_id', $rest->rest_id)->exists();
            if($exist){
                ShopRest::create([
                    "shop_id" => $rest->shop_id,
                    "rest_id" => $rest->rest_id
                ]);
            }
        }
        // 変更依頼を削除
        $change_request->delete();

        return redirect()->route('shop.important',['shop', $shop->id]);
    }

    public function getShopList(){
        $shops = Shop::Paginate(5);
        return view('admin.shop_list', compact('shops'));
    }
}
