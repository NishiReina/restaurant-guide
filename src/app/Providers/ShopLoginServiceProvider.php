<?php

namespace App\Providers;

use App\Http\Controllers\Shop\ShopLoginController;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Support\Facades\Auth;
use App\Actions\Shop\AttemptToAuthenticate;
use Illuminate\Support\ServiceProvider;

class ShopLoginServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app
            ->when([ShopLoginController::class, AttemptToAuthenticate::class])
            ->needs(StatefulGuard::class)
            ->give(function () {
                return Auth::guard('shop');
            });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}