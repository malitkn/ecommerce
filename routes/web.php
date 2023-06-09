<?php

use App\Http\Controllers\Auth\OrderController;
use App\Http\Controllers\Back\AttributeController;
use App\Http\Controllers\Back\AttributeValueController;
use App\Http\Controllers\Back\CategoryController;
use App\Http\Controllers\Back\CouponController;
use App\Http\Controllers\Back\OrderStatusController;
use App\Http\Controllers\Back\PanelController;
use App\Http\Controllers\Back\ProductController;
use App\Http\Controllers\Back\SettingController;
use App\Http\Controllers\Back\SocialMediaController;
use App\Http\Controllers\Back\ContactController as Contact;
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

    /* Start /admin */
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

            Route::resource('/contacts',Contact::class)->only('index', 'show');
            Route::get('/contacts/{contact}/reply',[Contact::class, 'reply'])->name('contacts.reply');
            Route::post('/contacts/{contact}/reply',[Contact::class, 'send'])->name('contacts.send');

            Route::resource('/categories', CategoryController::class);
            Route::resource('/products', ProductController::class);

            Route::prefix('/attributes')->name('attributes.')->group(function () {
              Route::get('/', [AttributeController::class, 'index'])->name('index');

              Route::get('/create', [AttributeController::class, 'create'])->name('create');
              Route::post('/create', [AttributeController::class, 'store'])->name('store');

              Route::get('/{attribute}/edit', [AttributeController::class, 'edit'])->name('edit');
              Route::put('/{attribute}/edit', [AttributeController::class, 'update'])->name('update');


              Route::get('/destroy', [AttributeController::class, 'index'])->name('destroy');

            });

            Route::prefix('/attribute-values')->name('attribute-values.')->group(function () {
                Route::get('/', [AttributeValueController::class, 'index'])->name('index');

                Route::get('/create', [AttributeValueController::class, 'create'])->name('create');
                Route::post('/create', [AttributeValueController::class, 'store'])->name('store');

                Route::get('/{attribute_value}/edit', [AttributeValueController::class, 'edit'])->name('edit');
                Route::put('/{attribute_value}/edit', [AttributeValueController::class, 'update'])->name('update');


                Route::get('/destroy', [AttributeValueController::class, 'index'])->name('destroy');

            });


        });

        Route::group(['prefix' => 'laravel-filemanager'], function () {
            \UniSharp\LaravelFilemanager\Lfm::routes();
        });
    });
    /* End /admin */
});

require __DIR__ . '/auth.php';
