<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>日本クリエイト株式会社　事業内容</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/header-footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/service.css') }}">
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



  <!-----------------------------下記メインページ　service----------------------------------->
  <main class="main">

    <!-- メインビジュアル recruit-->
    <div id="contentstop"></div>
    <!--①service-->
    <div class="service">
       <div class="ttl">
        	<h1 class="ttl__main">Service</h1>
        	<p class="ttl__sub">サービス</p>
    	</div>
      <div class="service__contents">
        <h2 class="text__catchcopy">半世紀にわたって培った<br>技術・知識・熱意を。</h2>
        <p class="text">
          日本クリエイト株式会社の強みは、47年間積み重ねてきた“経験値”の多さです。<br>
          その蓄えた経験・知識を活かしてクライアントのご要望に、責任・熱意を持ってお応えします。
        </p>
      </div>
      <div class="opacity-service">Service</div>
    </div>


    <!---------------------------スクロール矢印-------------------------------->
	  <div class="scrolldown1"><span>Scroll</span></div>


    <!--②image-->
    <div class="image">
      <div class="image__contents">
        <p class="box__contents-text">
          主に清掃事業（ビル・オフィスメンテナンス）設備事業、産業廃棄物処理事業、<br>
          最近ではコロナウイルス(COVID-19)の消毒作業など幅広く事業を展開しながら、<br>
          「期待以上のサービスを熱意を持って提供すること」を大切に、業務に取り組んでいます。
        </p>
      </div>
	  <div class="respon_image">
      <h2 class="image__contents-ttl">Create a clean world</h2>
	  </div>
    </div>

	  
	  
	  
    <div class="main__line"><!--80％中央寄せ開始-->

      <!--③事業内容-->
      <div class="business">
        <div class="ttl">
          <h1 class="ttl__main">Business</h1>
          <p class="ttl__sub">事業内容</p>
        </div>

        <!--各boxの親要素-->
        <div class="business__contents">

          <!--box(清掃事業)-->
          <div class="business__contents-box">
            <div class="box__image">
				<div class="zoomIn">
					<a href="{{url('/servicedetail')}}"><!--サービス詳細清掃写真紹介-->
						<span class="mask">
              				<img src="{{ asset('images/index.images/porissya-2.jpg') }}" alt="清掃事業写真"><!--清掃事業写真挿入-->
						</span>
			    	</a>
          		</div>
            </div>
            <div class="box__contents">
              <h4 class="box__contents-ttl">清掃事業</h4>
              <p class="box__contents-text">当社の中心事業となっているのが清掃事業です。例えばビルのオフィスのカーペットや床を特殊な機械で清掃したり、窓ガラスの清掃も行います。マンションなどの共同スペースの特別清掃（高圧洗浄）なども実施しております。</p>
            </div>
					<!---------------------------
					View More
					-------------------------------->
					<div class="btn">
						<a href="{{url('/servicedetail')}}" class="viewmore_btn">
							<span>View More</span>
						</a>
					</div>
          </div>

			
			
          <!--設備事業-->
          <div class="business__contents-box">
            <div class="box__image">
				<div class="zoomIn">
					<a href="{{url('/servicedetail')}}"><!--設備事業者写真紹介-->
						<span class="mask">
              				<img src="{{ asset('images/index.images/filter.jpg') }}" alt="清掃事業写真"><!--設備事業写真挿入-->
						</span>
			    	</a>
          		</div>
            </div>
            <div class="box__contents">
              <h4 class="box__contents-ttl">設備事業</h4>
              <p class="box__contents-text">クリーンルームでのフィルターなどの設置作業やルーム内の除菌、除塵の清掃。そして、クリーンルームないの測定器を用いたクラス測定を行うことも可能です。とても繊細な作りをしているクリーンルームのフィルターを丁寧に設置していきます。</p>
            </div>
                  <!---------------------------
					View More
					-------------------------------->
					<div class="btn">
						<a href="{{url('/servicedetail')}}" class="viewmore_btn">
							<span>View More</span>
						</a>
					</div>
          </div>

          <!--産業廃棄物処理事業-->
          <div class="business__contents-box">
            <div class="box__image">
			<div class="zoomIn">
					<a href="{{url('/servicedetail')}}"><!--産業廃棄物処理写真紹介-->
						<span class="mask">
							  <img src="{{ asset('images/index.images/sanngyou.jpg') }}" alt="清掃事業写真"><!--産業廃棄物処理事業-->
						</span>
			    	</a>
          	</div>
            </div>
            <div class="box__contents">
              <h4 class="box__contents-ttl">産業廃棄物処理事業</h4>
              <p class="box__contents-text">産業廃棄物が発生した場合に、廃棄物をを回収・撤去した後に、トラックに詰め込み、処理場への運搬、廃棄物の処理までの一連のプロセスを一貫して行うことが可能になっております。特殊な依頼になりますが、プロの従業員が対応いたします。</p>
            </div>
                  <!---------------------------
					View More
					-------------------------------->
					<div class="btn">
						<a href="{{url('/servicedetail')}}" class="viewmore_btn">
							<span>View More</span>
						</a>
					</div>
          </div>
          
          <!--その他-->
          <div class="business__contents-box">
            <div class="box__image">
				<div class="zoomIn">
					<a href="{{url('/servicedetail')}}"><!--その他特別清掃写真紹介-->
						<span class="mask">
              					<img src="{{ asset('images/index.images/syoudoku.jpg') }}" alt="清掃事業写真"><!--コロナ消毒の写真挿入-->
						</span>
			    	</a>
          		</div>
            </div>
            <div class="box__contents">
              <h4 class="box__contents-ttl">その他(special)</h4>
              <p class="box__contents-text">清掃でも、設備でもない特別なご依頼もお受けします。例えば、コロナウイルスが蔓延した空間の消毒、殺菌。駐車場の雑草刈り、除草。蜂の巣などの害虫駆除。鳥の巣などの害獣の駆除など、特殊なご依頼も対応しております。</p>
            </div>
                  <!---------------------------
					View More
					-------------------------------->
					<div class="btn">
						<a href="{{url('/servicedetail')}}" class="viewmore_btn">
							<span>View More</span>
						</a>
					</div>
          </div>
        </div>
		<div class="Quality">
        	<div class="text">
          		創業してから47年。様々なお客様、様々なシチュエーションを<br>
          		経験をしてきた我々は、多くの技術・知識を得て成長していきました。<br>
          		その培ってきたものを強みに、ご期待以上のクオリティ・迅速な対応を実現しています。
        	</div>
	    </div>
        <div class="opacity__business">Quality</div>
      </div>
    </div><!--80％中央寄せ終了-->

    <!--④info-->
	  
    <div class="info">
      <a href="{{url('/recruit')}}" class="info__ricruit">
        <p class="info__ricruit-catchcopy">Recruit</p>
        <p class="text">採用情報はこちら</p>
      </a>
      <a href="{{url('/form')}}" class="info__Contact">
        <p class="info__ricruit-catchcopy">Contact</p>
        <p class="text">お問い合わせはこちら</p>
      </a>
    </div>


      
  </main>


  <!-- 上記メインページ service-->



  <!-- 下記ページ共通2/2　-->

    <!-----------------------------フッター----------------------------------->

  <footer class="footer">
	  <p id="page-top"><a href="{{url('/service')}}">Page Top</a></p>
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

    <small class="copy">&copy; 2022  japan create Co.Ltd.</small>

  </footer>
  
  

<!--ページトップスクロール-->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/pagetop.js"></script>
  <script src="js/main.js"></script>
  <script src="js/ScrollUp.js"></script>

  <!-- 上記ページ共通2/2　-->


</body>
</html>