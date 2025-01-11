<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; //保存処理でContactモデルを使用する

class ContactController extends Controller
{
  //入力フォームの表示
  public function index()
  {
    return view('index');
  }

  //確認画面の表示
  public function confirm(Request $request)
  {
    $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel-1', 'tel-2', 'tel-3', 'address', 'building', 'inquiry-type', 'content']);
    return view('confirm', compact('contact'));
  }

  //確認画面からサンクスページへ
  public function store(Request $request)
  {
    $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel-1', 'tel-2', 'tel-3', 'address', 'building', 'inquiry-type', 'content']); //特定のカラムのみ一括代入可能にするため
    Contact::create($contact); //Contactモデルを使用してデータ保存処理
    return view('thanks'); //保存処理後にサンクスページへ遷移
  }
}
