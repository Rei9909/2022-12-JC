<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>日本クリエイト株式会社　japancreate</title>
  <!-- 下記cssリンク ※php用 -->
  <link href="{{ asset('css/reset.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/header-footer.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/animation.css') }}">

  <meta name="Description" content="愛知、名古屋でのマンション清掃、オフィス清掃は日本クリエイトにお任せください。">
  <meta name="Keywords" content="日本クリエイト株式会社,日本クリエイト,清掃会社,マンション清掃,オフィス清掃,清掃,名古屋,求人">

  <!-- 下記Googlefont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap" rel="stylesheet">
</head>
<body>

<!-- 下記ページ共通1/2　-->


  <!-----------------------------ヘッダー----------------------------------->
  <header class="header">
    <div class="header__logo">
      <img src="{{ asset('images/logo.png') }}" width="55" height="55" alt="会社ロゴ" class="header__logo-itm">
      <div class="header__logo-txt">日本クリエイト株式会社</div>
    </div>
    <div class="header__menu">
      <ul class="header__list">
        <li class="header__menu-item"><a href="{{url('/')}}" class="header__a">ホーム</a></li>
        <li class="header__menu-item"><a href="{{url('/service')}}" class="header__a">サービス</a></li>
        <li class="header__menu-item"><a href="{{url('/company')}}" class="header__a">会社案内</a></li>
        <li class="header__menu-item"><a href="{{url('/recruit')}}" class="header__a">採用情報</a></li>
        <li class="header__menu-item"><a href="{{url('/form')}}" class="header__a">お問い合わせ</a></li>
      </ul>
    </div>

    <div class="humburger">
      <nav class="humburger__nav" id="humberger__nav">
        <ul>
          <li class="humburger__nav-item"><a href="{{url('/')}}" class="humburger__a">ホーム</a></li>
          <li class="humburger__nav-item"><a href="{{url('/service')}}" class="humburger__a">サービス</a></li>
          <li class="humburger__nav-item"><a href="{{url('/company')}}" class="humburger__a">会社案内</a></li>
          <li class="humburger__nav-item"><a href="{{url('/recruit')}}" class="humburger__a">採用情報</a></li>
          <li class="humburger__nav-item"><a href="{{url('/form')}}" class="humburger__a">お問い合わせ</a></li>
        </ul>
      </nav>
      <div class="humburger__menu" id="humburger__menu">
        <span class="humburger__menu-line-top"></span>
        <span class="humburger__menu-line-middle"></span>
        <span class="humburger__menu-line-bottom"></span>
      </div>
    </div>
  </header>
  <!-- 上記ページ共通1/2　-->
  
  
  
  <!-----------------------------下記メインページ　recruit----------------------------------->
  <div class="main">



      <!-- メインビジュアル contact-->
      <div class="contact">


        <!-- タイトル -->
        <div class="ttl">
          <h1 class="ttl__main">Contact</h1>
          <p class="ttl__sub">お問い合わせ</p>
        </div>

        <!-- ページ進捗 ※ページ進むとCSS変わるところ -->
        <div class="progress">
          <div class="progress__border">
            <div class="progress__box">
              <p class="progress__number">01.</p>
              <p class="progress__text">入力</p>
            </div>
          </div>
          <div class="progress__line"></div>
          <div class="progress__border">
            <div class="progress__box">
              <p class="progress__number">02.</p>
              <p class="progress__text">確認</p>
            </div>
          </div>
          <div class="progress__line"></div>
          <div class="progress__border">
            <div class="progress__box">
              <p class="progress__number">03.</p>
              <p class="progress__text">完了</p>
            </div>
          </div>
        </div>

        <div class="container">
          @yield('content')
        </div>

      </div>  <!-- /メインビジュアル contact-->

  </div>







  <!-----------------------------上記メインページ　recruit----------------------------------->

  
  <!-- 下記ページ共通2/2　-->
  
  <!-----------------------------フッター----------------------------------->
  
  <footer class="footer">
    <div class="footer__logo">
      <img src="{{ asset('images/logo.png') }}" width="55" height="55" alt="会社ロゴ" class="footer__logo-itm">
      <p class="footer__logo-txt">日本クリエイト株式会社</p>
    </div>
  
    <nav class="footer__nav">
      <ul class="footer__nav-list">
        <li><a class="footer__nav-item" href="{{url('/service')}}">オフィスビル清掃</a></li>
        <li><a class="footer__nav-item" href="{{url('/service')}}">マンション清掃</a></li>
        <li><a class="footer__nav-item" href="{{url('/recruit')}}">求人募集</a></li>
        <li><a class="footer__nav-item" href="{{url('/form')}}">見積依頼</a></li>
        <li><a class="footer__nav-item" href="{{url('/company')}}">代表あいさつ</a></li>
        <li><a class="footer__nav-item" href="{{url('/privacypolicy')}}">プライバシーポリシー</a></li>
      </ul>
    </nav>
  
    <nav class="footer__responsivenav">
      <ul class="footer__responsivenav-list">
        <li><a class="footer__responsivenav-item" href="{{url('/service')}}">オフィスビル清掃</a></li>
        <li><a class="footer__responsivenav-item" href="{{url('/service')}}">マンション清掃</a></li>
        <li><a class="footer__responsivenav-item" href="{{url('/recruit')}}">求人募集</a></li>
        <li><a class="footer__responsivenav-item" href="{{url('/form')}}">見積依頼</a></li>
        <li><a class="footer__responsivenav-item" href="{{url('/company')}}">代表あいさつ</a></li>
        <li><a class="footer__responsivenav-item" href="{{url('/privacypolicy')}}">プライバシーポリシー</a></li>
      </ul>
    </nav>
  
    <small class="copy">&copy; 2022 japan create Co.Ltd.</small>
  
  </footer>
  
  
  <script src="js/main.js"></script>
  
  
  <!-- 上記ページ共通2/2　-->

</body>
</html>