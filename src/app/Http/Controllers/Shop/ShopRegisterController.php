<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Gunre;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Http\Requests\ShopRegisterRequest;
use Illuminate\Support\Facades\Storage;

class ShopRegisterController extends Controller
{
    // 登録画面呼び出し
    public function create(): View
    {
        $areas = Area::all();
        $gunres = Gunre::all();
        return view('auth.shop.register', compact('areas', 'gunres'));
    }

    // 登録実行
    public function store(ShopRegisterRequest $request): RedirectResponse
    {
        $img = $request->file('img_url');

        try {
            $img_url = Storage::disk('local')->put('public/img', $img);
        } catch (\Throwable $th) {
            throw $th;
        }

        $shop = Shop::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'min_price' => $request->min_price,
            'max_price' => $request->max_price,
            'area_id' => $request->area_id,
            'gunre_id' => $request->gunre_id,
            'img_url' => $img_url,
            'title' => $request->title,
            'pr' => $request->pr,
        ]);

        event(new Registered($shop));

        Auth::guard('shop')->login($shop);

        return redirect(RouteServiceProvider::HOME);
    }
}