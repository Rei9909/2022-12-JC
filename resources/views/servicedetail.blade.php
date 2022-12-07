<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>日本クリエイト株式会社　japancreate</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/header-footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/servicedetail.css') }}">
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
	 <!--メイン-->
	<main class="main">
		
		<!--タイトル-->
      <div class="servicedetail">
        <div class="ttl">
          	<h1 class="ttl__main">Business</h1>
          	<p class="ttl__sub">事業一覧</p>
        </div>
	  <div class="servicedetail__contents">
        <h2 class="text__catchcopy">半世紀にわたって<br>展開してきた事業をあなたに。</h2>
        <p class="text">
          日本クリエイトの強みである『半世紀の経験値』を獲得しながら<br>
          様々なお客様のご要望に対応して、展開してきた多くの事業をご紹介します。
        </p>
	  
      </div>
			<div class="opacity-business">Business</div>
	  </div>
		
<!------------コンテンツ------------>
		<div class="business">
			<div class="flex__item">
				<div class="practice__card">
					<div class="card__content">
                    	<img src="{{ asset('images/servicedetail.images/obot.jpg') }}" height="250px" width="350" alt="カーペット清掃">
                        <p class="card__text">ORBOTによるカーペット清掃</p>
                	</div>
				</div>
				<div class="practice__card">
					<div class="card__content">
                    	<img src="{{ asset('images/servicedetail.images/carpet.jpg') }}" height="250px" width="350" alt="カーペット清掃">
                        <p class="card__text">カーペットの汚れを吸う作業</p>
                	</div>
				</div>
				<div class="practice__card">
					<div class="card__content">
                    	<img src="{{ asset('images/servicedetail.images/porissya.jpg') }}" height="250px" width="350" alt="床洗浄ワックス清掃">
                        <p class="card__text">床洗浄ワックス定期管理作業</p>
                	</div>
				</div>
				<div class="practice__card">
					<div class="card__content">
                    	<img src="{{ asset('images/servicedetail.images/obotyuka.jpg') }}" height="250px" width="350" alt="ORBOT床洗浄ワックス清掃">
                        <p class="card__text">床洗浄ワックス定期管理2</p>
                	</div>
				</div>
				<div class="practice__card">
					<div class="card__content">
                    	<img src="{{ asset('images/servicedetail.images/garasu.jpg') }}" height="250px" width="350" alt="ガラス清掃">
                        <p class="card__text">ガラス</p>
                	</div>
				</div>
				<div class="practice__card">
					<div class="card__content">
                    	<img src="{{ asset('images/servicedetail.images/ro-pu.jpg') }}" height="250px" width="350" alt="ロープガラス清掃">
                        <p class="card__text">ロープ作業</p>
                	</div>
				</div>
				<div class="practice__card">
					<div class="card__content">
                    	<img src="{{ asset('images/servicedetail.images/kouatu1.jpg') }}" height="250px" width="350" alt="高圧特殊清掃">
                        <p class="card__text">床高圧洗浄</p>
                	</div>
				</div>
				<div class="practice__card">
					<div class="card__content">
                    	<img src="{{ asset('images/servicedetail.images/kouatu2.jpg') }}" height="250px" width="350" alt="階段・壁の高圧特殊清掃">
                        <p class="card__text">マンション管理・階段の高圧洗浄</p>
                	</div>
				</div>
				<div class="practice__card">
					<div class="card__content">
                    	<img src="{{ asset('images/servicedetail.images/kabe.jpg') }}" height="250px" width="350" alt="階段・壁の高圧特殊清掃">
                        <p class="card__text">マンション管理・壁高圧洗浄</p>
                	</div>
				</div>
				<div class="practice__card">
					<div class="card__content">
                    	<img src="{{ asset('images/servicedetail.images/filter1.jpg') }}" height="250px" width="350" alt="クリーンルームでの作業">
                        <p class="card__text">クリーンルームでの作業</p>
                	</div>
				</div>
				<div class="practice__card">
					<div class="card__content">
                    	<img src="{{ asset('images/servicedetail.images/filter2.jpg') }}" height="250px" width="350" alt="クリーンルームでの清掃作業">
                        <p class="card__text">クリーンルームでの清掃作業</p>
                	</div>
				</div>
				<div class="practice__card">
					<div class="card__content">
                    	<img src="{{ asset('images/servicedetail.images/sanngyou.jpg') }}" height="250px" width="350" alt="産業廃棄物処理">
                        <p class="card__text">産業廃棄物処理の様子</p>
                	</div>
				</div>
				<div class="practice__card">
					<div class="card__content">
                    	<img src="{{ asset('images/servicedetail.images/keskin.jpg') }}" height="250px" width="350" alt="コロナウイルス殺菌作業">
                        <p class="card__text">殺菌消毒作業</p>
                	</div>
				</div>
				<div class="practice__card">
					<div class="card__content">
                    	<img src="{{ asset('images/servicedetail.images/suikei.jpg') }}" height="250px" width="350" alt="特殊作業">
                        <p class="card__text">水景施設の作業</p>
                	</div>
				</div>
				<div class="practice__card">
					<div class="card__content">
                    	<img src="{{ asset('images/servicedetail.images/kikai.jpg') }}" height="250px" width="350" alt="大型清掃機械">
                        <p class="card__text">床洗浄・大型機械</p>
                	</div>
				</div>
			</div>
		</div>
		
		
		
		
		
		
   <div class="Contact">
	   <a href="{{url('/form')}}" class="Contact__behind">
		    <span>
	   		<p class="Contact__ttl-main">Contact</p>
	   		<p class="Contact__ttl-sub">お問い合わせ</p>
			</span>
	   </a>
   </div>
	  
	  
  </main>



  <!-- 上記メインページ index-->
  
  
  
  <!-- 下記ページ共通2/2　-->
  
  <!-----------------------------フッター----------------------------------->
  
  <footer class="footer">
	 <p id="page-top"><a href="{{url('/servicedetail')}}">Page Top</a></p>
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
  
	
	<!--ページトップスクロール-->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/pagetop.js"></script>
	
	
  <!-- 上記ページ共通2/2　-->


</body>
</html>