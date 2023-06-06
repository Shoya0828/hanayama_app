<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // メールアドレスが送信されているか確認する
        if (!isset($credentials['email'])) {
            return back()->withErrors(['email' => 'メールアドレスが指定されていません。'])->withInput();
        }

        // ユーザーの存在チェック
        $user = User::where('email', $credentials['email'])->first();
        if (!$user) {
            return back()->withErrors(['email' => '認証に失敗しました。'])->withInput($request->except('password'));
        }

        // パスワードの検証
        if (!Hash::check($credentials['password'], $user->password)) {
            return back()->withErrors(['email' => '認証に失敗しました。'])->withInput($request->except('password'));
        }

        // 認証に成功した場合の処理
        Auth::login($user);
        $request->session()->put('user', $user);
        return redirect()->route('top');
    }


    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }

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
    
}
