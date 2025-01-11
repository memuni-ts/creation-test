<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController; //お問い合わせ関連
use App\Http\Controllers\UserController; //ユーザー管理関連
use App\Http\Controllers\AdminController; //管理画面関連

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//お問い合わせ関連
Route::get('/', [ContactController::class, 'index']);
Route::post('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'store']);

//管理画面関連
Route::get('/admin', [AdminController::class, 'index']);

//ユーザー管理関連
Route::get('/register', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'showLoginForm']);
Route::post('/login', [UserController::class, 'login']);
