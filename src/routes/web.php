<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Shop\ShopController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Shop\ShopLoginController;
use App\Http\Controllers\Shop\ShopRegisterController;
use App\Http\Controllers\RestaurantGuideController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\UserController;
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
Route::get('/shoplist', [RestaurantGuideController::class, 'shopList'])->name('shoplist');
Route::get('/detail/{shop}', [RestaurantGuideController::class, 'detail']);

Route::prefix('admin')->group(function () {
    Route::get('login', [AdminLoginController::class, 'create'])->name('admin.login');
    Route::post('login', [AdminLoginController::class, 'store']);

    Route::middleware('auth:admin')->group(function () {
        Route::get('/request/list', [AdminController::class, 'getRequestList']);
        Route::post('/request/approve/{change_request}', [AdminController::class, 'approveRequest']);
        Route::get('/shop/register', [ShopRegisterController::class, 'create'])->name('admin.register');
        Route::post('/shop/register', [ShopRegisterController::class, 'store']);
        Route::get('/shop/list', [AdminController::class, 'getShopList']);
    });
});

Route::prefix('shop')->group(function () {
    Route::get('login', [ShopLoginController::class, 'create'])->name('shop.login');
    Route::post('login', [ShopLoginController::class, 'store']);

    Route::middleware('auth:shop')->group(function () {
        Route::get('/', [ShopController::class, 'index']);
        Route::get('/myshop', [ShopController::class, 'myShop']);
        Route::get('/important', [ShopController::class, 'importantInfo'])->name('shop.important');
        Route::get('/important/edit', [ShopController::class, 'editImportantInfo']);
        Route::post('/important/request', [ShopController::class, 'requestUpdateImportantInfo']);
        Route::get('/important/request/list', [ShopController::class, 'getChangeRequestList']);
        Route::get('/info/edit', [ShopController::class, 'editInfo']);
        Route::post('/info/edit', [ShopController::class, 'updateInfo']);
        Route::get('/reservation/{date}', [ReserveController::class, 'getShopReservationOfDay']);
    });

    // 自店舗以外の変更依頼にアクセス禁止
    Route::middleware(['auth:shop,admin'])->group( function () {
        Route::get('/request/detail/{change_request}', [ShopController::class, 'getRequestDetail'])->middleware('specific.shop')->name('request_detail');
    });
});


Route::middleware(['auth:web', 'verified'])->group( function () {
    Route::post('reserve', [ReserveController::class, 'reserve']);
    Route::get('reserve_list', [ReserveController::class, 'getUserReservations']);
    Route::get('mypage', [UserController::class, 'mypage']);
    Route::get('profile', [UserController::class, 'getProfile']);
    Route::post('profile', [UserController::class, 'updateProfile']);
    Route::get('review/{reservation}', [UserController::class, 'showFormReview']);
    Route::post('review/{reservation}', [UserController::class, 'postReview']);
});

Route::middleware(['auth:web,shop'])->group( function () {
    Route::get('reserve/{reservation}', [ReserveController::class, 'detailReservation']);
});