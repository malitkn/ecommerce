<?php

use App\Http\Controllers\Front\Account\OrderController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\DashboardController;
use App\Http\Controllers\Front\ShopController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/shop',[ShopController::class,'index'])->name('shop');
Route::get('/contact',[ContactController::class,'index'])->name('contact');

Route::middleware('auth')->group(function () {

    Route::prefix('/account')->name('account.')->group(function () {

        Route::prefix('/my-orders')->name('my-orders.')->group(function () {
            Route::get('/', [OrderController::class, 'index'])->name('index');
        });

    });

});

require __DIR__ . '/auth.php';
