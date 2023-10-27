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
        // $request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Shop::class],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        $img = $request->file('img_url');

        try {
            $img_url = Storage::disk('local')->put('public/img', $img);
            $request->img_url = $img_url;
        } catch (\Throwable $th) {
            throw $th;
        }

        $shop = Shop::create($request->all());

        event(new Registered($shop));

        Auth::guard('shop')->login($shop);

        return redirect(RouteServiceProvider::HOME);
    }
}