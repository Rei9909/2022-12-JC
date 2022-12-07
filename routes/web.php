<?php

use App\Http\Controllers\ContactController;

//ホームページ　トップ
Route::get('/', function () { return view('index');});

//ホームページ　会社
Route::get('/company', function () { return view('company');});

//ホームページ　プライバシーポリシー
Route::get('/privacypolicy', function () { return view('privacypolicy');});

//ホームページ　採用情報
Route::get('/recruit', function () { return view('recruit');});

//ホームページ　サービス
Route::get('/service', function () { return view('service');});

//ホームページ　
Route::get('/servicedetail', function () { return view('servicedetail');});




//問い合わせフォーム　トップページ
Route::get('/form',[ContactController::class, 'index'])->name('index');

//問い合わせフォーム　確認ページ
Route::get('/confirm',[ContactController::class, 'confirm']);
Route::post('/confirm',[ContactController::class, 'confirm'])->name('confirm');

//問い合わせフォーム　送信完了ページ
Route::get('/thanks',[ContactController::class, 'send']);
Route::post('/thanks',[ContactController::class, 'send'])->name('send');