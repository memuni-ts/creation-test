<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public function showRegistrationForm()
{
    return view('auth.register');
}

public function register(Request $request)
{
    // バリデーション
    $request->validate([
        'name' => 'required|string|max:255', // 名前は必須、文字列、最大255文字
        'email' => 'required|string|email|max:255|unique:users', // メールは必須、ユニークである必要あり
        'password' => 'required|string|min:8|confirmed', // パスワードは必須、8文字以上、確認用パスワードが一致
    ]);

    // ユーザーを作成
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password), // パスワードはハッシュ化して保存
    ]);

    // 登録後にログイン
    auth()->login($user);

    // ホームページにリダイレクト
    return redirect()->route('home');
}


}
