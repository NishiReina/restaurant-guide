<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Reservation;
use App\Models\Review;

class UserController extends Controller
{

    public function mypage(){
        $user = Auth::user();
        $reservations = Reservation::where('user_id', $user->id)->get();
        $gone_reservations = Reservation::where('user_id', $user->id)->where('date', '<',  date('Y-m-d H:i:s'))->get();

        return view('user.mypage', compact('user', 'reservations', 'gone_reservations'));
    }

    public function getProfile(){
        $user = Auth::user();
        return view('user.profile', compact('user'));
    }

    public function updateProfile(Request $request){
        $user = Auth::user();

        $img_url = $request->file('img_url');
        try {
            if($img_url){
                $img_url = Storage::disk('local')->put('public/img', $img_url);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
        $user->profile->update([
            'img_url' => $img_url,
            'gender' => $request->gender,
            'address' => $request->address,
            'phone' => $request->phone,
            'birthday' => $request->birthday
        ]);

        return view('user.profile', compact('user'));
    }

    public function showFormReview(Reservation $reservation){
        $user = Auth::user();
        return view('user.review', compact('reservation', 'user'));
    }

    public function postReview(Reservation $reservation, Request $request){
        $user = Auth::user();

        $img_url = $request->file('img_url');
        try {
            if($img_url){
                $img_url = Storage::disk('local')->put('public/img', $img_url);
            }else{
                $img_url = null;
            }
        } catch (\Throwable $th) {
            throw $th;
        }

        Review::create([
            'star' => $request->star,
            'img_url' => $img_url,
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => $user->id,
            'reservation_id' => $reservation->id,
        ]);
        return redirect('/mypage');
    }

    public function bookmarkShop(Shop $shop){
        
    }
}
