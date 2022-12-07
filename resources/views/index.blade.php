<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>日本クリエイト株式会社　japancreate</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/header-footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
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




  <!-- 下記メインページ index-->


  <main class="index">

    <!--①トップ-->
    <div class="top">
      <div class="top__ttl">
        <p class="top__ttl-text">人に見せない仕事で、魅せる</p>
        <h3 class="top__ttl-name">JAPAN CREATE</h3>
      </div>
      <div><img src="{{ asset('images/index.images/nagoyabuilding.jpg') }}" alt="ビル写真" class="top__img"></div>
    </div>

    <!--②日本クリエイト-->
    <div class="JapanCreate">
      <div class="JapanCreate__ttl">
        <h1 class="JapanCreate__ttl-main">Japan Create</h1>
        <p class="JapanCreate__ttl-sub">日本クリエイト</p>
      </div>
      <div class="JapanCreate__contents">
        <p class="JapanCreate__contents-text">日本クリエイトは創業以来約50年に渡って、主に『清掃・設備』のサービスを手掛けており、名古屋を中心に地域密着型で快適で安全な街づくりを目指しています。このサイトは、日本クリエイトの公式コーポレートサイトです。採用ページや、お仕事のご依頼についてもこのサイトに記載してありますので、是非ご覧ください。</p>
        <p class="JapanCreate__contents-opacitytext">Japan Create</p>
      </div>
    </div>

    <!--③サービス-->
    <div class="Service">
<!---------------------------スクロール矢印-------------------------------->
	  <div class="scrolldown1"><span>Scroll</span></div>
<!---------------------------------メインコンテンツ----------------------------->
      

      <div class="Service__ttl">
        <h1 class="Service__ttl-main">Service</h1>
        <p class="Service__ttl-sub">事業内容</p>
      </div>

      <div class="Service__contents">
        <div class="Service__contents-text">主に清掃事業（ビル・オフィスメンテナンス）設備事業、産業廃棄物処理事業、最近ではコロナウイルス（COVID-19)の消毒作業など幅広く事業を展開しながら、「期待以上のサービスを熱意を持って提供すること」を大切に、業務に取り組んでいます。
          <div class="Service__contents-opacitytext">Service</div>
        </div>
      </div>

      <div class="Service__box">
        <div class="Service__box-contents"><!--box(清掃事業)-->
          <div class="zoomIn">
	  			<a href="{{url('/servicedetail')}}">
					<span class="mask">
            			<img src="{{ asset('images/index.images/porissya-2.jpg') }}"  alt="清掃機械写真">
					</span>
			    </a>
          </div>
          <div class="box__contents">
            <h4 class="box__contents-ttl">清掃事業</h4>
            <p class="box__contents-text">主にビルテナントのカーペットやガラスの清掃。マンションなどの共同スペースの特別清掃などを中心に行っています。</p>
          </div>
        </div>
        <div class="Service__box-contents"><!--box(設備事業)-->
          <div class="zoomIn">
	  			<a href="{{url('/servicedetail')}}">
					<span class="mask">
            			<img src="{{ asset('images/index.images/filter.jpg') }}"  alt="フィルター写真">
					</span>
			  	</a>
          </div>
          <div class="box__contents">
            <h4 class="box__contents-ttl">設備事業</h4>
            <p class="box__contents-text">クリーンルームのフィルターの取り付け作業、ルームの清掃、ルームのクラス測定も同時に行っています。</p>
          </div>
        </div>
        <div class="Service__box-contents"><!--box(産業廃棄物処理事業)-->
          <div class="zoomIn">
	  			<a href="{{url('/servicedetail')}}">
					<span class="mask">
            			<img src="{{ asset('images/index.images/sanngyou.jpg') }}" alt="産業廃棄写真">
					</span>
			  	</a>
          </div>
          <div class="box__contents">
            <h4 class="box__contents-ttl">産業廃棄物処理事業</h4>
            <p class="box__contents-text">産業廃棄物を撤去した後に、トラックでの運搬、廃棄物の処理までの一連のプロセスを一貫して行っています。</p>
          </div>
        </div>
        <div class="Service__box-contents"><!--box(特殊事業)-->
        	<div class="zoomIn">
	  			<a href="{{url('/servicedetail')}}">
					<span class="mask">
            			<img src="{{ asset('images/index.images/syoudoku.jpg') }}" alt="消毒写真" class="box__img">
					</span>
				</a>
             </div>
          <div class="box__contents">
            <h4 class="box__contents-ttl">特殊事業</h4>
            <p class="box__contents-text">店舗やオフィスのウイルス消毒や害虫駆除、害獣駆除、駐車場や店舗の雑草の草刈りなど幅広いご依頼を承ります。</p>
          </div>
        </div>
      </div>
        <!---------------------------
		View More
		-------------------------------->
		<div class="btn">
			<a href="{{url('/service')}}" class="viewmore_btn">
				<span>View More</span>
			</a>
		</div>
    </div>

    <!--④会社情報-->
    <div class="Company">

      <div class="ttl">
        <h1 class="ttl-main">Company</h1>
        <p class="ttl-sub">会社情報</p>
      </div>

      <div class="Company__back">
        <div class="Company__back-contents">
          <div class="Company__back-contents-text">我々、日本クリエイトはビル施設管理や<br>メンテナンスを主軸に名古屋で活動しています。<br><br>当社は『フロンティア・スピリット』という経営理念を掲げており、現在の事業のみに留まらず、新しい挑戦をしていきます。
            <div class="back__contents-opacitytext">About Us</div>
          </div>
        </div>
      </div>
	  <p class="Company__contents-text-hidden">我々、日本クリエイトはビル施設管理やメンテナンスを主軸に名古屋で活動しています。当社は『フロンティア・スピリット』という経営理念を掲げており、現在の事業のみに留まらず、新しい挑戦をしていきます。</p>

     <!---------------------------
		View More
		-------------------------------->
		<div class="btn">
			<a href="{{url('/company')}}" class="viewmore_btn">
				<span>View More</span>
			</a>
		</div>

    </div>

    <!--⑤採用情報-->
    <div class="Recruit">
      
      <div class="ttl">
        <h1 class="ttl-main">Recruit</h1>
        <p class="ttl-sub">採用情報</p>
      </div>

      

      <div class="Recruit__back">
        <div class="Recruit__back__contents">
          <div class="Recruit__back-contents-text">
            清掃という仕事は、常に必要とされる　<br>やりがいがある深い仕事です。 <br> <br> 当社は、思いやりや感謝を大切に、仲間を尊重できる心を持つ者、そしてプロフェッショナルの一員として一緒に進んでいける仲間を求めています。
          </div>
        </div>
        <div class="back__contents-opacitytext">Let's Move On</div>
      </div>
	  <div class="Recruit__res">清掃という仕事は、常に必要とされる　<br>やりがいがある深い仕事です。 <br> <br>
      当社は、思いやりや感謝を大切に、仲間を尊重できる心を持つ者、そして<span>プロフェッショナルの一員</span>として一緒に進んでいける仲間を求めています。</div>
      <!---------------------------
		View More
		-------------------------------->
		<div class="btn">
			<a href="{{url('/recruit')}}" class="viewmore_btn">
				<span>View More</span>
			</a>
		</div>
    </div>

	  
	  
    <!--⑥お知らせ-->
    <div class="News">
      <div class="News__ttl">
        <h1 class="ttl-main">News</h1>
        <p class="ttl-sub">お知らせ</p>
        
        <div class="News__contents">
          <div class="News__list">
            <div class="News__list-item">
              <p class="News__list-day">2022/ 10/20</p>
              <p class="News__list-ocntents">コーポレートサイト更新!</p>
            </div>
            <div class="News__list-item">
              <p class="News__list-day">2022/ 9/9</p>
              <p class="News__list-ocntents">新規事業開拓</p>
            </div>
            <div class="News__list-item">
              <p class="News__list-day">2022/ 8/31</p>
              <p class="News__list-ocntents">新たな業務提携</p>
            </div>
            <div class="News__list-item">
              <p class="News__list-day">2022/ 8/30</p>
              <p class="News__list-ocntents">サンプルテキスト</p>
            </div>
          </div>
        </div>
      </div>
	
      <div class="News__img"><a href="{{url('/recruit')}}"><img src="{{ asset('images/index.images/recruitbanner.jpg') }}" alt="採用写真" class="News__img-img"></a></div>
	
    </div>

    <!--⑦お問い合わせ-->
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
	 <p id="page-top"><a href="{{url('/')}}">Page Top</a></p>
    <div class="footer__logo">
      <img src="{{ asset('images/service.images/logo.png') }}" width="55" height="55" alt="会社ロゴ" class="footer__logo-itm">
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