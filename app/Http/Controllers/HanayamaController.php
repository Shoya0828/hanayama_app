<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class HanayamaController extends Controller
{
  // 1M blog modelを呼び出す
  // 2V controllerからbladeに渡す
  // 3C bladeで表示する
  /**
   * 商品一覧を表示する
   * 
   * @return view
   */
  public function top()
  {
    $items = Item::all();

    return view('publics.top', ['items' => $items]);
  }



  /**
   *商品詳細を表示する
   */

  public function view()
  {
    return view('publics.view');
  }

  public function buy()
  {
    return view('publics.guest_info');
  }

  public function pay()
  {
    return view('publics.guest_pay');
  }

  public function buy_check()
  {
    return view('publics.guest_check');
  }

  public function buy_done()
  {
    return view('publics.guest_done');
  }

  public function signup()
  {
    return view('publics.signup');
  }

  public function signup_check()
  {
    return view('publics.signup_check');
  }

  public function signup_done()
  {
    return view('publics.signup_done');
  }

  public function cart()
  {
    return view('cart');
  }

  public function user()
  {
    return view('users/user');
  }

  public function user_signout()
  {
    return view('users/user_signout');
  }

  public function user_account()
  {
    return view('users/user_account');
  }

  public function user_edit()
  {
    return view('users/user_edit');
  }

  public function user_hist()
  {
    return view('users/user_hist');
  }

  public function favorites()
  {
    return view('users/favorites');
  }

  public function forget_pass()
  {
    return view('users/forget_pass');
  }

  public function forget_sent()
  {
    return view('users/forget_sent');
  }

  public function forget_input()
  {
    return view('users/forget_input');
  }

  public function forget_done()
  {
    return view('users/forget_done');
  }

  public function admin()
  {
    return view('admins/admin');
  }



  /**
   * 商品追加画面を表示する
   * 
   * @return view
   * 
   */
  public function items_add()
  {
    return view('admins/items_add');
  }

  public function items_edit()
  {
    return view('admins/items_edit');
  }

  public function orders_admin()
  {
    return view('admins/orders_admin');
  }

  public function orders_incomp()
  {
    return view('admins/orders_incomp');
  }

  public function orders_comp()
  {
    return view('admins/orders_comp');
  }

  public function orders_detail()
  {
    return view('admins/orders_detail');
  }

  public function users_detail()
  {
    return view('admins/users_detail');
  }

  public function users_account()
  {
    return view('admins/users_account');
  }

  public function coupon_admin()
  {
    return view('admins/coupon_admin');
  }

  public function coupon_add()
  {
    return view('admins/coupon_add');
  }
}
