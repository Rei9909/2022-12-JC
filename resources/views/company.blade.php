<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>日本クリエイト株式会社　会社情報</title>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/header-footer.css') }}">
  <link rel="stylesheet" href="{{ asset('css/company.css') }}">
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


  <!-- 下記メインページ company-->
  <div class="main">
    <div class="main__line">

      <!--①company-->
      <div class="company">
        <div class="ttl">
          <h1 class="ttl__main">Company</h1>
          <p class="ttl__sub">会社情報</p>
        </div>
        <div class="company__contens">
          <div class="company__contens-catchcopy">名古屋をどこの都市よりも綺麗な街へ</div>
          <p class="text">清掃という仕事は人目につく仕事ではない。しかし、我々日本クリエイトは、 <br>
          名古屋の街を陰ながら綺麗にしてきました。その誇りを忘れないで、毎日地域を綺麗に<br>
		保ち街に暮らしている市民が安心て、気持ちよく使える環境創りをしてまいります。</p>
        </div>
        <div class="opacity-company">Company</div>
      </div>

		
		
       <!---------------------------スクロール矢印-------------------------------->
	  <div class="scrolldown1"><span>Scroll</span></div>

		
		
      <!--②message-->
      <div class="message">
        <div class="ttl">
          <h1 class="ttl__main">Message</h1>
          <p class="ttl__sub">代表挨拶</p>
        </div>
		<div class="opacity-message">Message</div>
        <div class="message__flexcontents">
          <p class="message__flexcontents-message">我々、日本クリエイトはフロンティア・スピリット（開拓者精神）を経営理念とし、失敗を恐れず挑戦しております。中小企業だからこそ、従業員の意見が通りやすい環境であり、可能性の限界値を決めず、やりたいことやアイデアを提案してください。あなたの想像をカタチに。夢を後押しできるのが我が社です。そして我々は、今後時代の流れに則した新しい事業展開も考えているため、真剣に人生を歩める新たな仲間を探しています。<br>私は仕事をする上で1番大切にしたいことは、“思いやり”と“感謝”です。清掃の仕事というのは、人に見られない仕事ですが常に必要とされ感謝されるやりがいのある奥深い仕事です。今、あなたがやりたい仕事がわからなく、悩みながら就職活動、転職活動をしている人も多いかと思いますがそんな方こそ、是非当社で経験を積んでみてください。一緒に仕事をしていく中で未来のことが明確になっていく、やりたいことが見いだせる可能性があると思います。<br>ぜひ一歩踏み出す勇気を持ってください。あなたの力になります。
          <span class="president-name">代表取締役　 幾波信人</span>
        </p>
          <div class="message__flexcontents-img"><img src="{{ asset('images/company.images/代表写真・代用写真.svg') }}" alt=""  class="president-photo"></div>
        </div>
      </div>

      <!--③outline-->
      <div class="outline">
        <div class="ttl">
          <h1 class="ttl__main">Outline</h1>
          <p class="ttl__sub">会社概要</p>
        </div>
        <div class="opacity-outline">Outline</div>
        <div class="outline__table">
          <table>
            <tr>
              <th>会社名</th>
              <td>日本クリエイト株式会社</td>
            </tr>
            <tr>
              <th>創業</th>
              <td>1975年8月</td>
            </tr>
            <tr>
              <th>資本金</th>
              <td>1000万円</td>
            </tr>
            <tr>
              <th>代表取締役</th>
              <td>幾波　信人</td>
            </tr>
            <tr>
              <th>従業員数</th>
              <td>約20名</td>
            </tr>
            <tr>
              <th>事業内容</th>
              <td>・建築物のあらゆる清掃及び、管理業務<br>
              ・産業廃棄物の収集と運搬業務<br>
              ・空気清浄フィルターの販売及び、取り付け工事<br>
              ・クリーンルーム等の建設工事及び、設備機器据付工事
              </td>
            </tr>
            <tr>
              <th>主な取引先</th>
              <td>・日本総合住生活(株) <br>
              ・(株)三清社<br>
              ・ケンブリッジフィルターコーポレーション(株)
              </td>
            </tr>
            <tr>
              <th>Eメール</th>
              <td>info@jc-create.com</td>
            </tr>
            <tr>
              <th>電話番号</th>
              <td>TEL: 052-793-6129<span> / FAX: 052-791-7544</span></td>
            </tr>
            <tr>
              <th>所在地</th>
              <td>〒463-0011 <span> 愛知県名古屋市守山区小幡5-10-4</span></td>
            </tr>
          </table>
        </div>
      </div>

      <!--④history-->
      <div class="history">
        <div class="history__ttl">
          <h1 class="ttl__main">Histry</h1>
          <p class="ttl__sub">沿革</p>
          <div class="opacity__histry">Histry</div>
        </div>
        <div class="histry__chart">
          <ul>
            <li>
              <p class="histry__chart-day">1975年8月</p>
              <p class="histry__chart-text">資本金100万円　従業員4名にて、有限会社守山清掃　設立</p>
            </li>
            <li>
              <p class="histry__chart-day">1992年8月</p>
              <p class="histry__chart-text">資本金を500万円に増資</p>
            </li>
            <li>
              <p class="histry__chart-day">1995年4年</p>
              <p class="histry__chart-text">資本金を1000万円に増資して、日本クリエイト株式会社へ名称変更</p>
            </li>
            <li>
              <p class="histry__chart-day">2022年現在</p>
              <p class="histry__chart-text">資本金1000万円　従業員約20名　売上高２億円</p>
            </li>
          </ul>
        </div>
      
      </div>

      <!--⑤access-->
      <div class="access">
        <div class="ttl">
          <h1 class="ttl__main">Access</h1>
          <p class="ttl__sub">位置情報</p>
        </div>
        <div class="opacity-access">Access</div>
        <div class="accese__contents">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2305.2648154412077!2d136.98343076961874!3d35.203062128309625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60036fd42973f6b5%3A0x6b7338a2d836947b!2z5pel5pys44Kv44Oq44Ko44Kk44OI77yI5qCq77yJ!5e0!3m2!1sja!2sjp!4v1653013046792!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="accese__contents-address">
              <p>〒463-0011 <br>
              愛知県名古屋市守山区小幡 5-10-4</p>
              <p>名鉄瀬戸線　喜多山駅から徒歩5分</p>
              <p>TEL 052-793-6129</p>
            </div>
        </div>
      </div>


      
    </div><!--infoはwidthが100％-->

      <!--④info-->
    <div class="info">
      <a href="{{url('/recruit')}}" class="info__ricruit">
        <p class="info__ricruit-catchcopy">Recruit</p>
        <p class="text">採用情報はこちら</p>
      </a>
      <a href="{{url('/form')}}
      " class="info__Contact">
        <p class="info__ricruit-catchcopy">Contact</p>
        <p class="text">お問い合わせはこちら</p>
      </a>
    </div>
      
  </div>


    <!-- 上記メインページ company-->
    
    
    
  <!-- 下記ページ共通2/2　-->
  
  <!-----------------------------フッター----------------------------------->
  
  <footer class="footer">
	  <p id="page-top"><a href="{{url('/company')}}">Page Top</a></p>
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
  
	
	
	
	
	
  <!--ページトップスクロール-->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/pagetop.js"></script>
  <script src="js/main.js"></script>
  
  
  <!-- 上記ページ共通2/2　-->



</body>
</html>