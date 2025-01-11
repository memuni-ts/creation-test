<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; //保存処理でContactモデルを使用する

class ContactController extends Controller
{
  //入力フォームの表示
  public function index()
  {
    // セッションからデータを取得して、フォームに渡す
    $contact = session()->get('contact', []); //'contact'キーでデータを取得、データがなければ空の配列を返す
    
    return view('index');
  }

  //確認画面の表示
  public function confirm(Request $request)
  {
    //フォームデータを取得
    $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel-1', 'tel-2', 'tel-3', 'address', 'building', 'inquiry-type', 'content']);

    //セッションにデータを保存
    session()->put('contact', $contact);
    return view('confirm', compact('contact'));
  }

  //確認画面からサンクスページへ
  public function store(Request $request)
  {
    $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel-1', 'tel-2', 'tel-3', 'address', 'building', 'inquiry-type', 'content']);

    //Contactモデルを使用してデータ保存処理
    Contact::create($contact);

    //セッションのデータを削除（サンクスページに遷移後、データをクリア）
    session()->forget('contact');

    //保存処理後にサンクスページへ遷移
    return view('thanks');
  }
}
