<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//商品一覧
Route::get('/', 'App\Http\Controllers\HanayamaController@top',)->name('top');


// 商品一覧
Route::get('/top', 'App\Http\Controllers\HanayamaController@index',)->name('index');


// 商品詳細
Route::get('/view/{id}', 'App\Http\Controllers\ItemController@show')->name('view');


// カート処理
Route::post('/add_to_cart', 'App\Http\Controllers\CartController@add_to_cart')->name('add.to.cart');

Route::get('/cart', 'App\Http\Controllers\CartController@cart')->name('cart');

Route::post('/remove_from_cart', 'App\Http\Controllers\CartController@remove_from_cart')->name('remove.from.cart');


// 商品購入

Route::get('/buy', 'App\Http\Controllers\CartController@buy')->name('buy');

Route::post('/pay', 'App\Http\Controllers\CartController@guest_pay')->name('pay');

Route::post('/guest_info', 'App\Http\Controllers\CartController@buy')->name('guest_info');

Route::post('/guest_pay', 'App\Http\Controllers\CartController@pay')->name('guest_pay');

Route::get('/re_pay', 'App\Http\Controllers\CartController@re_pay')->name('re_pay');


Route::post('/guest_check', 'App\Http\Controllers\CartController@buy_check')->name('buy_check');

Route::post('/guest_done', 'App\Http\Controllers\CartController@buy_done')->name('buy_done');


// 会員登録
Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');

Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');

Route::post('/register_check', 'App\Http\Controllers\Auth\RegisterController@register_check')->name('register_check');

Route::get('/register_edit', 'App\Http\Controllers\Auth\RegisterController@register_edit')->name('register_edit');

Route::post('/register_done', 'App\Http\Controllers\Auth\RegisterController@register_done')->name('register_done');



// ログイン
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');

Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login.post');

Route::post('/logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');



// アカウントtop画面
Route::get('/user', 'App\Http\Controllers\UserController@user')->name('user');

Route::get('/user_signout', 'App\Http\Controllers\Auth\LoginController@user_signout')->name('user_signout');

// アカウント情報確認画面
Route::get('/user_account', 'App\Http\Controllers\UserController@user_account')->name('user_account');

// アカウント情報変更画面
Route::get('/user/edit', 'App\Http\Controllers\UserController@user_edit')->name('user.edit');

Route::post('/user/update', 'App\Http\Controllers\UserController@user_update')->name('user.update');



// 管理者サイド
Route::prefix('admin')->group(function () {

    Route::get('login', [Admin\AdminController::class, 'index'])->name('admin.login.index');
    Route::post('login', [Admin\AdminController::class, 'login'])->name('admin.login.login');
    Route::get('top', [Admin\AdminController::class, 'top'])->name('admin.top');

    Route::get('logout', [Admin\AdminController::class, 'logout'])->name('admin.login.logout');

    Route::get('/admin', 'App\Http\Controllers\Admin\AdminController@admin')->name('admin');

    // 登録商品一覧
    Route::get('/items_admin', 'App\Http\Controllers\Admin\AdminController@items_admin')->name('items_admin');

    // 商品編集画面
    Route::get('/items_edit', 'App\Http\Controllers\Admin\AdminController@items_edit')->name('items_edit');

    // 商品更新
    Route::post('/items_update', 'App\Http\Controllers\Admin\AdminController@items_update')->name('items_update');



    // 商品追加
    Route::get('/items_add', 'App\Http\Controllers\ItemController@items_add')->name('items_add');

    Route::post('/items_add', 'App\Http\Controllers\ItemController@ExeItemStore')->name('store');

// 商品削除
    Route::delete('/items/{id}', 'App\Http\Controllers\Admin\AdminController@items_delete')->name('items_delete');

    // 注文一覧
    Route::get('/order_list', 'App\Http\Controllers\Admin\AdminController@showOrderList')->name('order_list');
    // 管理者用のルートを設定
});

// 管理者（administratorsテーブル）未認証の場合にログインフォームに強制リダイレクトさせるミドルウェアを設定する。  
Route::prefix('admin')->middleware('auth:administrators')->group(function () {
    Route::get('/',[Admin\AdminController::class, 'index'])->name('admin.index');
});





Route::get('/user_hist', 'App\Http\Controllers\HanayamaController@user_hist')->name('user_hist');

Route::get('/favorites', 'App\Http\Controllers\HanayamaController@favorites')->name('favorites');

Route::get('/forget_pass', 'App\Http\Controllers\HanayamaController@forget_pass')->name('forget_pass');

Route::get('/forget_sent', 'App\Http\Controllers\HanayamaController@forget_sent')->name('forget_sent');

// 臨時
Route::get('/forget_input', 'App\Http\Controllers\HanayamaController@forget_input')->name('forget_input');

Route::get('/forget_done', 'App\Http\Controllers\HanayamaController@forget_done')->name('forget_done');


// 商品追加
Route::get('/items_add', 'App\Http\Controllers\ItemController@items_add')->name('items_add');

Route::post('/items_add', 'App\Http\Controllers\ItemController@ExeItemStore')->name('store');


Route::get('/items_edit', 'App\Http\Controllers\HanayamaController@items_edit')->name('items_edit');

Route::get('/orders_admin', 'App\Http\Controllers\HanayamaController@orders_admin')->name('orders_admin');

Route::get('/orders_incomp', 'App\Http\Controllers\HanayamaController@orders_incomp')->name('orders_incomp');

Route::get('/orders_detail', 'App\Http\Controllers\HanayamaController@orders_detail')->name('orders_detail');

Route::get('/orders_comp', 'App\Http\Controllers\HanayamaController@orders_comp')->name('orders_comp');

Route::get('/users_detail', 'App\Http\Controllers\HanayamaController@users_detail')->name('users_detail');

Route::get('/users_account', 'App\Http\Controllers\HanayamaController@users_account')->name('users_account');

Route::get('/coupon_admin', 'App\Http\Controllers\HanayamaController@coupon_admin')->name('coupon_admin');

Route::get('/coupon_add', 'App\Http\Controllers\HanayamaController@coupon_add')->name('coupon_add');





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
