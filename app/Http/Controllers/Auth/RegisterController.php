<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    // 会員登録入力画面
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // 会員登録確認画面
    public function register_check(Request $request)
    {
        $inputs = $request->validate([
            'name_sei' => 'required',
            'name_mei' => 'required',
            'post' => 'required',
            'prefecture' => 'required',
            'city' => 'required',
            'others' => 'required',
            'tell' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        return view('auth.register_check', ['inputs' => $inputs]);
    }

    // 会員登録完了画面
    public function register_done(Request $request)
    {
        $validatedData = $request->validate([
            'name_sei' => 'required',
            'name_mei' => 'required',
            'post' => 'required',
            'prefecture' => 'required',
            'city' => 'required',
            'others' => 'required',
            'tell' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $user = User::create([
            'name_sei' => $request->input('name_sei'),
            'name_mei' => $request->input('name_mei'),
            'post' => $request->input('post'),
            'prefecture' => $request->input('prefecture'),
            'city' => $request->input('city'),
            'others' => $request->input('others'),
            'tell' => $request->input('tell'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return view('auth.register_done', ['user' => $user]);
    }
}
