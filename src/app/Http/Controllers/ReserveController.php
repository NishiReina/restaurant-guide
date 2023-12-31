<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Reservation;
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
        return view('user.reservation_detail', compact('reservation'));
    }
}
