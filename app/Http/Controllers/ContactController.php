<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; 
use App\Mail\ContactSendMail;

class ContactController extends Controller
{



    public function index()
    {
        //フォーム入力画ページのviewを表示
        return view('top');
    }



    // 確認ボタン押下時に呼ばれる
    public function confirm(Request $request)
    {

        $inquiry = $request->inquiry;

        $inputs = $request->all();
        if(!$inputs){
            return redirect()->route('index');
        }

        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        $request->validate([
            'name' => 'required',
            'cname' => 'required',
            'email' => ['required','email'],
            'tel' => ['numeric', 'digits_between:8,11'],
            'content' => ['required','max:4000']
        ]);

        //フォームから受け取ったすべてのinputの値を取得
        $inputs = $request->all();

        //入力内容確認ページのviewに変数を渡して表示
        return view('confirm',[
            'inputs' => $inputs,
        ]);

    }



    // 送信ボタン押下時に呼ばれる
    public function send(Request $request)
    {

        $inputs = $request->all();

        if(!$inputs){
            return redirect()->route('index');
        }

        //入力されたメールアドレスにメールを送信
        \Mail::to($inputs['email'])->send(new ContactSendMail($inputs));
        \Mail::to('r000yamaguchi@gmail.com')->send(new ContactSendMail($inputs));

        //再送信を防ぐためにトークンを再発行
        $request->session()->regenerateToken();

        //送信完了ページのviewを表示
        return view('thanks');
    }
}