<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Shop\ShopController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Shop\ShopLoginController;
use App\Http\Controllers\Shop\ShopRegisterController;
use App\Http\Controllers\RestaurantGuideController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [RestaurantGuideController::class, 'top']);
Route::get('/detail/{shop}', [RestaurantGuideController::class, 'detail']);

Route::get('shop/register', [ShopRegisterController::class, 'create'])->name('admin.register');
 Route::post('register', [ShopRegisterController::class, 'store']);

Route::prefix('admin')->group(function () {
    Route::get('login', [AdminLoginController::class, 'create'])->name('admin.login');
    Route::post('login', [AdminLoginController::class, 'store']);

    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [AdminController::class, 'index']);
    });
});

Route::prefix('shop')->group(function () {
    Route::get('login', [ShopLoginController::class, 'create'])->name('shop.login');
    Route::post('login', [ShopLoginController::class, 'store']);

    Route::middleware('auth:shop')->group(function () {
        Route::get('dashboard', [ShopController::class, 'index']);
    });
});


Route::middleware(['auth:web', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
