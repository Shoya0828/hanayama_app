<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class UserController extends Controller
{
    public function user()
    {
        return view('users/user');
    }

    public function user_account()
    {
        // ログインしているユーザーの情報を取得
        $user = Auth::user();

        // ユーザー情報をビューに渡して表示
        return view('users/user_account', compact('user'));
    }

    public function user_edit()
    {
        $user = Auth::user();
        return view('users/user_edit', compact('user'));
    }

    public function user_update(Request $request)
    {
        
        $user = Auth::user();

        // バリデーションなどの適切な処理を行い、ユーザー情報を更新します
        $user->name_sei = $request->input('name_sei');
        $user->name_mei = $request->input('name_mei');
        $user->post = $request->input('post');
        $user->tell = $request->input('tell');
        $user->email = $request->input('email');
        $user->save();

        return view('users/user_account', compact('user'));
    }
}
