<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\Order;
use App\Models\OrderItem;



class AdminController extends Controller
{
    public function index()
    {
        return view('admins.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['userid', 'password']);

        if (Auth::guard('administrators')->attempt($credentials)) {
            // ログインしたら管理画面トップにリダイレクト
            return redirect()->route('admin.top')->with([
                'login_msg' => 'ログインしました。',
            ]);
        }

        return back()->withErrors([
            'login' => ['ログインに失敗しました'],
        ]);
    }

    public function top()
    {
        return view('admins.admin');
    }

    public function items_admin()
    {
        $items = Item::all();

        return view('admins.items_admin', ['items' => $items]);
    }


    // public function items_edit($id)
    // {
    //     $item = Item::findOrFail($id);
    //     // 商品の情報をビューに渡して編集フォームを表示する
    //     return view('admins.items_edit', compact('item'));
    // }


    // public function items_update(Request $request, $id)
    // {
    //     $item = Item::findOrFail($id);

    //     // バリデーションルールを定義する
    //     $rules = [
    //         'img' => 'required',
    //         'name' => 'required|string|max:255',
    //         'kana' => 'required|string|max:255',
    //         'detail' => 'required|string|max:500',
    //         'category_id' => 'required',

    //         // 他のフィールドに対するバリデーションルールを追加する
    //     ];

    //     // リクエストデータをバリデーションする
    //     $validatedData = $request->validate($rules);

    //     // 商品情報を更新する
    //     $item->img = $validatedData['img'];
    //     $item->name = $validatedData['name'];
    //     $item->kana = $validatedData['kana'];
    //     $item->detail = $validatedData['detail'];
    //     $item->category_id = $validatedData['category_id'];
    //     // 他のフィールドを更新する

    //     // 商品情報を保存する
    //     $item->save();

    //     // 編集後の商品の詳細ページにリダイレクトするなど、適切な処理を行う
    //     return redirect()->route('items_admin', ['id' => $item->id])
    //         ->with('success', '商品が正常に更新されました。');
    // }

    public function items_delete($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect()->back()->with('success', 'アイテムが削除されました。');
    }


    


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // ログアウトしたらログインフォームにリダイレクト
        return redirect()->route('admin.login.index')->with([
            'logout_msg' => 'ログアウトしました',
        ]);
    }




      /**
   * 商品一覧を表示する
   * 
   * @return view
   */
  public function showOrderList()
  {
    $orders = Order::all();

    return view('admins.orders_incomp', ['orders' => $orders]);
  }


}

