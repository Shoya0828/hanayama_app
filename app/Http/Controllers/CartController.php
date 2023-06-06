<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
  public function cart()
  {
    // カートに追加された商品を取得してビューに渡す
    $cartItems = Cart::all(); // カート内の全ての商品を取得する例です。必要に応じて適切なクエリを実行してください。

    return view('cart', ['cartItems' => $cartItems]);
  }

  public function add_to_cart(Request $request)
  {
    // フォームから送信された商品IDと価格IDを取得
    $itemId = $request->input('item_id');
    $priceId = $request->input('price_id');
    $quantity = $request->input('quantity');

    // カートに商品を追加する処理を実装する
    // 例えば、Cartモデルを利用してカートに商品を追加するとします
    $cart = new Cart();
    $cart->item_id = $itemId;
    $cart->price_id = $priceId;
    $cart->quantity = $quantity;
    $cart->save();

    // カートに追加後、カート画面にリダイレクトする
    return redirect()->route('cart');
  }

  public function remove_from_cart(Request $request)
  {
    $cartItemId = $request->input('cart_item_id');

    // カートアイテムを削除する
    Cart::destroy($cartItemId);

    // 削除後の処理（例えば、カートページにリダイレクトする）
    return redirect()->route('cart');
  }




  // ゲスト購入用の顧客情報入力画面
  public function buy()
  {
    if (Auth::check()) {
      // ログイン済みの場合は会員情報を引用し、支払方法選択画面に進む
      $user = Auth::user();
      $customerNameSei = $user->name_sei;
      $customerNameMei = $user->name_mei;
      $customerPost = $user->post;
      $customerPrefecture = $user->prefecture;
      $customerCity = $user->city;
      $customerOthers = $user->others;
      $customerTell = $user->tell;
      $customerEmail = $user->email;

      return view('publics.guest_pay', [
        'customerNameSei' => $customerNameSei,
        'customerNameMei' => $customerNameMei,
        'customerPost' => $customerPost,
        'customerPrefecture' => $customerPrefecture,
        'customerCity' => $customerCity,
        'customerOthers' => $customerOthers,
        'customerTell' => $customerTell,
        'customerEmail' => $customerEmail
      ]);
    } else {
      // 未ログインの場合はお客様情報入力画面に進む
      return view('publics.guest_info');
    }
  }


  // ゲスト購入の場合
  public function guest_pay(Request $request)
  {
    $customerNameSei = $request->input('customer_name_sei');
    $customerNameMei = $request->input('customer_name_mei');
    $customerPost = $request->input('customer_post');
    $customerPrefecture = $request->input('customer_prefecture');
    $customerCity = $request->input('customer_city');
    $customerOthers = $request->input('customer_others');
    $customerTell = $request->input('customer_tell');
    $customerEmail = $request->input('customer_email');



    return view('publics.guest_pay', [
      'customer_name_sei' => $customerNameSei,
      'customer_name_mei' => $customerNameMei,
      'customer_post' => $customerPost,
      'customer_prefecture' => $customerPrefecture,
      'customer_city' => $customerCity,
      'customer_others' => $customerOthers,
      'customer_tell' => $customerTell,
      'customer_email' => $customerEmail
    ]);
  }



  // 支払方法を選択し、確認画面に進む
  public function pay(Request $request)
  {
    $paymentId = $request->input('payment_id');
    $payment = Payment::findOrFail($paymentId);

    $customerNameSei = $request->input('customer_name_sei');
    $customerNameMei = $request->input('customer_name_mei');
    $customerPost = $request->input('customer_post');
    $customerPrefecture = $request->input('customer_prefecture');
    $customerCity = $request->input('customer_city');
    $customerOthers = $request->input('customer_others');
    $customerTell = $request->input('customer_tell');
    $customerEmail = $request->input('customer_email');



    return view('publics.guest_check', [
      'payment' => $payment,
      'customer_name_sei' => $customerNameSei,
      'customer_name_mei' => $customerNameMei,
      'customer_post' => $customerPost,
      'customer_prefecture' => $customerPrefecture,
      'customer_city' => $customerCity,
      'customer_others' => $customerOthers,
      'customer_tell' => $customerTell,
      'customer_email' => $customerEmail
    ]);
  }

  public function re_pay()
  {

    return view('publics.guest_pay');
  }





  public function buy_check(Request $request)
  {
    // 注文内容を確認し、注文完了画面に進む

    $orderDetails = $request->all();
    // カート内の商品を取得
    $cartItems = Cart::all();

    // 合計金額を計算
    $totalPrice = 0;
    foreach ($cartItems as $cartItem) {
      $totalPrice += $cartItem->price->price * $cartItem->quantity;
    }

    if (Auth::check()) {
      // ログイン済みの場合
      $user = Auth::user();
      $customerNameSei = $user->name_sei;
      $customerNameMei = $user->name_mei;
      $customerPost = $user->post;
      $customerPrefecture = $user->prefecture;
      $customerCity = $user->city;
      $customerOthers = $user->others;
      $customerTell = $user->tell;
      $customerEmail = $user->email;
    } else {
      // ゲスト購入の場合
      $customerNameSei = $request->input('customer_name_sei');
      $customerNameMei = $request->input('customer_name_mei');
      $customerPost = $request->input('customer_post');
      $customerPrefecture = $request->input('customer_prefecture');
      $customerCity = $request->input('customer_city');
      $customerOthers = $request->input('customer_others');
      $customerTell = $request->input('customer_tell');
      $customerEmail = $request->input('customer_email');
    }

    // 注文内容とユーザー情報をビューに渡す
    return view('publics.guest_check', [
      'cartItems' => $cartItems,
      'totalPrice' => $totalPrice,
      'customerNameSei' => $customerNameSei,
      'customerNameMei' => $customerNameMei,
      'customerPost' => $customerPost,
      'customerPrefecture' => $customerPrefecture,
      'customerCity' => $customerCity,
      'customerOthers' => $customerOthers,
      'customerTell' => $customerTell,
      'customerEmail' => $customerEmail
    ]);
  }






  public function buy_done(Request $request)
  {
    // 注文を完了させる処理を行う
    // 注文情報を保存などの操作を行い、最終的に注文完了画面を表示する

    // カート内の商品を取得
    $cartItems = Cart::all();

    // 合計金額を計算
    $totalPrice = 0;
    foreach ($cartItems as $cartItem) {
      $totalPrice += $cartItem->price->price * $cartItem->quantity;
    }




    $order = new Order();

    if (Auth::check()) {
      // ログイン済みの場合、会員情報を注文テーブルに設定する
      $user = Auth::user();
      $order->name_sei = $user->name_sei;
      $order->name_mei = $user->name_mei;
      $order->post = $user->post;
      $order->prefecture = $user->prefecture;
      $order->city = $user->city;
      $order->others = $user->others;
      $order->tell = $user->tell;
      $order->email = $user->email;
      // 他の会員情報を必要に応じて設定する
    } else {
      // 未ログインの場合はお客様情報をリクエストから取得して注文テーブルに設定する
      $order->name_sei = $request->input('customer_name_sei');;
      $order->name_mei = $request->input('customer_name_mei');
      $order->post = $request->input('customer_post');
      $order->prefecture = $request->input('customer_prefecture');
      $order->city = $request->input('customer_city');
      $order->others = $request->input('customer_others');
      $order->tell = $request->input('customer_tell');
      $order->email = $request->input('customer_email');
      // 他のお客様情報を必要に応じて設定する



    }

    $order->total_price = $totalPrice;
    $order->status = 'pending';
    $order->save();

    foreach ($cartItems as $cartItem) {
      $orderItem = new OrderItem();
      $orderItem->order_id = $order->id;
      $orderItem->item_id = $cartItem->item_id;
      $orderItem->price_id = $cartItem->price_id;
      $orderItem->quantity = $cartItem->quantity;
      $orderItem->save();
    }

    Cart::truncate();

    return view('publics.guest_done', ['orderId' => $order->id]);
  }






  // カート内商品を注文処理
  public function checkout(Request $request)
  {
    $cartItems = Cart::all();
    $totalPrice = 0;

    foreach ($cartItems as $cartItem) {
      $totalPrice += $cartItem->price->price * $cartItem->quantity;
    }

    $order = new Order();
    $order->total_price = $totalPrice;
    $order->status = 'pending';

    if (Auth::check()) {
      // ログイン済みの場合、会員情報を注文テーブルに設定する
      $user = Auth::user();
      $order->customer_name_sei = $user->name_sei;
      $order->customer_name_mei = $user->name_mei;
      $order->customer_post = $user->post;
      $order->customer_prefecture = $user->prefecture;
      $order->customer_city = $user->city;
      $order->customer_others = $user->others;
      $order->customer_tell = $user->tell;
      $order->customer_email = $user->email;
      // 他の会員情報を必要に応じて設定する
    } else {
      // 未ログインの場合はお客様情報をリクエストから取得して注文テーブルに設定する\

      $order->customer_name_sei = $request->input('customer_name_sei');
      $order->customer_name_mei = $request->input('customer_name_mei');
      $order->customer_post = $request->input('customer_post');
      $order->customer_prefecture = $request->input('customer_prefecture');
      $order->customer_city = $request->input('customer_city');
      $order->customer_others = $request->input('customer_others');
      $order->customer_tell = $request->input('customer_tell');
      $order->customer_email = $request->input('customer_email');
      // 他のお客様情報を必要に応じて設定する
    }

    $order->save();

    foreach ($cartItems as $cartItem) {
      $orderItem = new OrderItem();
      $orderItem->order_id = $order->id;
      $orderItem->item_id = $cartItem->item_id;
      $orderItem->price_id = $cartItem->price_id;
      $orderItem->quantity = $cartItem->quantity;
      $orderItem->save();
    }

    Cart::truncate();

    return redirect()->route('orders');
  }

  public function orders()
  {
    $orders = Order::all();
    return view('orders', ['orders' => $orders]);
  }

  public function order_details($orderId)
  {
    $order = Order::findOrFail($orderId);
    return view('publics.guest_check', ['order' => $order]);
  }
}
