<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Reservation;
use App\Models\Shop;
use App\Http\Requests\ReserveRequest;


class ReserveController extends Controller
{
    public function reserve(ReserveRequest $request){

        Reservation::create([
            'number' => $request->number,
            'date'  => $request->date,
            'time' => $request->time,
            'user_id' => Auth::id(),
            'shop_id' => $request->shop_id,
        ]);
        return redirect("/shop/{{$request->shop_id}}");

    }

    public function getUserReservations(){
        $reservations = Reservation::where('user_id', Auth::id())->get();
        return view('user.reservation_list', compact('reservations'));
    }

    public function detailReservation(Reservation $reservation){
        return view('reservation_detail', compact('reservation'));
    }

    public function getShopReservationOfDay(Request $request){

        if($request->date){
            $ymd = Carbon::parse($request->date);
        }else{
            $ymd = new Carbon();
        }

        $shop = Shop::find(Auth::id());
        $reservations = Reservation::where('shop_id', $shop->id)->where('date',$ymd->toDateString())->get();

       return view('shop.reservation_day', compact('reservations', 'ymd'));
   }
}
