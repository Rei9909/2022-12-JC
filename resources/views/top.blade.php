@extends('layout')

@section('content')

  <link href="css/top.css" rel="stylesheet" type="text/css">

<!-- 本文テキスト部分 -->
<div class="text">下記のフォームに情報を入力してください。<br>
  <span class="text__span">＊必須入力項目です。</span>
</div>


<!------ フォーム ------>
<form method="POST" action="{{ route('confirm') }}" >
    @csrf
    @method('POST')
    <div class="form-inner">
      <div class="form-cont">

        <!-- 名前 -->
        <div class="form-item">
            <label for="name" class="required-tag item-ttl">お名前 *</label><br>
            <input type="text" placeholder="お名前" id="name" name="name" value="{{ old('name') }}" class="item-field">
            @if($errors->has('name'))
              <p class="required">{{ $errors->first('name') }}</p>
            @endif
        </div><!--form-item-->

        <!-- フリガナ -->
        <div class="form-item">
            <label for="cname" class="required-tag item-ttl">フリガナ *</label><br>
            <input type="text" placeholder="フリガナ" id="cname" name="cname" value="{{ old('cname') }}" class="item-field">
            @if($errors->has('cname'))
              <p class="required">{{ $errors->first('cname') }}</p>
            @endif
        </div><!--form-item-->

        <!-- 会社・学校 -->
        <div class="form-item">
            <label for="company" class="required-tag item-ttl">会社名・学校名</label><br>
            <input type="text" placeholder="株式会社○○○" id="company" name="company" value="{{ old('company') }}" class="item-field">
            @if($errors->has('company'))
              <p class="required">{{ $errors->first('company') }}</p>
            @endif
        </div><!--form-item-->

        <!-- メールアドレス -->
        <div class="form-item">
            <label for="email" class="required-tag item-ttl">メールアドレス *</label><br>
            <input type="email" placeholder="sample@example.com" id="mail" name="email" class="item-field" value="{{ old('email') }}">
            @if($errors->has('email'))
              <p class="required">{{ $errors->first('email') }}</p>
            @endif
        </div><!--form-item-->

        <!-- 電話番号 -->
        <div class="form-item">
            <label for="tel" class="item-ttl">電話番号</label><br>
            <input type="tel" placeholder="0123456789" id="tel" name="tel" class="item-field" value="{{ old('tel') }}">
        </div><!--form-item-->

        <!-- 問い合わせ内容 -->
        <div class="form-item">
            <label for="content" class="required-tag item-ttl">お問い合わせ内容 *</label><br>
            <textarea name="content" id="content"  class="content-field" cols="30" rows="10" placeholder="お問い合わせ内容を記入してください">{{ old('content') }}</textarea>
            @if($errors->has('content'))
              <p class="required">{{ $errors->first('content') }}</p>
            @endif
        </div><!--form-item-->

      </div><!--form-cont-->
    </div><!--form-inner-->
    
    <button type="submit">
      確認画面へ
    </button>
    
</form>

@endsection