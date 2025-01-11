<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Eloquentを使用できるようにContactモデルを読み込む
use App\Models\Contact;

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

  public function store(Request $request)
  {
    $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel-1', 'tel-2', 'tel-3', 'address', 'building', 'inquiry-type', 'content']);
    return view('thanks');
  }
}
