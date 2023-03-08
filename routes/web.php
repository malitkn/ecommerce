<?php

use App\Http\Controllers\Auth\OrderController;
use App\Http\Controllers\Back\Discount\CouponController;
use App\Http\Controllers\Back\Orders\OrderStatusController;
use App\Http\Controllers\Back\PanelController;
use App\Http\Controllers\Back\Settings\SettingController;
use App\Http\Controllers\Back\Settings\SocialMediaController;
use App\Http\Controllers\Front\ContactController;
use App\Http\Controllers\Front\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::middleware('auth')->group(function () {

    Route::prefix('/account')->name('account.')->group(function () {
        Route::prefix('/my-orders')->name('my-orders.')->group(function () {
            Route::get('/', [OrderController::class, 'index'])->name('index');
        });
    });

    Route::middleware('admin')->group(function () {
        Route::prefix('/admin')->name('admin.')->group(function () {
            Route::get('/dashboard', [PanelController::class, 'index'])->name('dashboard');
            Route::redirect('/', '/admin/dashboard');

            Route::prefix('/settings')->name('settings.')->group(function () {
                Route::resource('/', SettingController::class)->only('index', 'store');
                Route::get('/social-media', [SocialMediaController::class, 'index'])->name('social-media.index');
            });

            Route::prefix('/orders')->name('orders.')->group(function () {
                Route::get('/', function () {
                    echo "a";
                })->name('index');
                Route::get('/statuses', [OrderStatusController::class, 'index'])->name('statuses.index');
            });

            Route::prefix('/discount')->name('discount.')->group(function () {
                Route::get('/coupons', [CouponController::class, 'index'])->name('coupons.index');
            });
        });
    });
});

require __DIR__ . '/auth.php';
