
@extends('layout')

@section('content')

  <link href="css/comfirm.css" rel="stylesheet" type="text/css">

  <!------ フォーム ------>
  <form method="POST" action="{{ route('send') }}" >
    {{ csrf_field() }}
    {{ method_field('POST') }}
    <div class="form-inner">
      <div class="form-cont">

        <!-- 名前 -->
        <dl class="form-item">
          <dt class="item-ttl">お名前</dt>
          <dd class="form-answer">{{ $inputs['name'] }}</dd>
          <input type="hidden" name="name" value="{{ $inputs['name'] }}">
        </dl>

        <!-- フリガナ -->
        <dl class="form-item">
          <dt class="item-ttl">フリガナ</dt>
          <dd class="form-answer">{{ $inputs['cname'] }}</dd>
          <input type="hidden" name="cname" value="{{ $inputs['cname'] }}">
        </dl>

        <!-- 会社・学校 -->
        <dl class="form-item">
          <dt class="item-ttl">会社名・学校名</dt>
          <dd class="form-answer">{{ $inputs['company'] }}</dd>
          <input type="hidden" name="company" value="{{ $inputs['company'] }}">
        </dl>

        <!-- メールアドレス -->
        <dl class="form-item">
          <dt class="item-ttl">メールアドレス</dt>
          <dd class="form-answer">{{ $inputs['email'] }}</dd>
          <input type="hidden" name="email" value="{{ $inputs['email'] }}">
        </dl>

        <!-- 電話番号 -->
        <dl class="form-item ">
          <dt class="item-ttl">電話番号</dt>
          <dd class="form-answer">{{ $inputs['tel'] }}</dd>
          <input type="hidden" name="tel" value="{{ $inputs['tel'] }}">
        </dl>

        <!-- 問い合わせ内容 -->
        <dl class="form-item">
          <dt class="item-ttl">お問い合わせ内容</dt>
          <dd class="form-answer">
            {!! nl2br(e($inputs['content'])) !!}
            <input type="hidden" name="content" value="{{ $inputs['content'] }}">
          </dd>
        </dl>

      </div><!--form-cont-->
    </div><!--form-inner-->



    <div class="confirm_btn">
      <a href="{{ route('index') }}" class="back-btn"><span class="f-bold">戻る</span></a>
      <input onclick="submit();" type="button" value="この内容で送信する" class="move-btn">
    </div>


  </form>

  @endsection