<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/tag_manager.php"); ?>
  <meta charset="UTF-8" />
  <meta name="robots" content="index,follow">
  <link rel="canonical" href="<?php echo CANONICAL ?>">
  <meta name="keywords" content="<?php echo KEY_WORD ?>">
  <meta name="description" content="<?php echo DESCRIPTION ?>">
  <meta property="og:title" content="<?php echo SITE_NAME ?>">
  <meta property="og:type" content="article" /> <!-- 下層では「article」にしてください -->
  <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
  <meta property="og:url" content="<?php echo CANONICAL ?>" />

  <title>サテライト会場 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Satellite">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo_section">
        <div class="wrapper">
          <div class="container">
            <ul class="breadcrumbs pc">
              <li>
                <a href="/">TOP</a>
              </li>
              <li>
                <a href="/satellite/">サテライト会場</a>
              </li>
            </ul>
            <h3>サテライト会場</h3>
              <p>
                <img src="/images/common/lower_pg_img.svg" alt="">
              </p>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="container">
            <p class="c-anim-up">
            サウンドデザインフェスティバル in 浜松2021のサテライト会場として、浜松科学館と浜松市楽器格物間を位置づけて開催します！各館において、本イベント開催前からも音の可能性を感じられる催しや展示が企画されています。もちろんイベント開催両日にも面白い催しが行われます。イベント会場であるアクトシティ浜松展示イベントホールから徒歩数分で各館を訪問できますので、イベントと併せてお楽しみください！<br>
            ※事前予約が必要なイベントもありますので、詳しくは各館のホームページをご覧ください。
            </p>
            <div class="row">
              <div class="col c-anim-up">
                <a href="#sect_2" class="link_btn">浜松科学館</a>
              </div>
              <div class="col c-anim-up">
                <a href="#sect_3" class="link_btn">浜松市<br class="sp">楽器博物館</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sect_2" id="sect_2">
        <div class="wrapper">
          <div class="container">
            <div class="head">
              <h3 class="c-anim-up">浜松科学館<span>- Hamamatsu Science Museum</span></h3>
              <p class="c-anim-up">
              詳しくは浜松科学館のHPをご覧ください。<br>
              <a href="https://www.mirai-ra.jp/" target="_blank">https://www.mirai-ra.jp/</a>
              </p>
            </div>
            <div class="row">
              <div class="col">
                <picture >
								<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
									<source srcset="/images/satellite/img_1.jpg" media="(max-width: 899px)" type="image/webp">
									<source srcset="/images/satellite/img_1.jpg" media="(min-width: 900px)">
									<img src="/images/satellite/img_1.jpg" alt="" class="c-anim-up">
								</picture>
              </div>
              <div class="col">
                <picture >
								<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
									<source srcset="/images/satellite/img_2.jpg" media="(max-width: 899px)" type="image/webp">
									<source srcset="/images/satellite/img_2.jpg" media="(min-width: 900px)">
									<img src="/images/satellite/img_2.jpg" alt="" class="c-anim-up">
								</picture>
              </div>
              <div class="col">
                <picture >
								<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
									<source srcset="/images/satellite/img_3.jpg" media="(max-width: 899px)" type="image/webp">
									<source srcset="/images/satellite/img_3.jpg" media="(min-width: 900px)">
									<img src="/images/satellite/img_3.jpg" alt="" class="c-anim-up">
								</picture>
              </div>
            </div>
            <ul class="box_list">
              <li class="c-anim-up">
                <h3>
                  <span>特別サイエンスショー１</span>
                  「たたく、はじく、こする、ん？」
                </h3>
                <p>■ 内容：雑誌「子どもの科学」でおなじみの伊藤氏による特別サイエンスショーです。<br>
                  タイトルにあるように、たたく、はじくなどの動作で音を出します。<br>
                  実験から、音の正体、なぜ音が鳴るのかを考えていくショーです。</p>
                <p>■ 講師：メディアアーティスト 伊藤 尚未氏</p>
                <p>■ 日程：2021年12月11日（土）</p>
                <p>■ 時間：開始時間は現在、調整中 【各回30分程度】</p>
                <p>■ 会場：みらーらステージ</p>
                <p>■ 料金：常設展観覧料に含む</p>
              </li>
              <li class="c-anim-up">
                <h3>
                  <span>特別サイエンスショー2</span>
                  「音」
                </h3>
                <p>■ 内容：音の正体が波である、ということをメインとしたサイエンスショーです。<br>
                  サウンドデザインフェス後は、通常のサイエンスショーとして継続します。</p>
                <p>■ 講師：上野 元嗣（浜松科学館サイエンスチームリーダー）</p>
                <p>■ 日程：2021年12月11日（土）</p>
                <p>■ 時間：開始時間は現在、調整中 【各回30分程度】</p>
                <p>■ 会場：みらーらステージ</p>
                <p>■ 料金：常設展観覧料に含む</p>
              </li>
              <li class="c-anim-up">
                <h3>
                  <span>15分で科学実験</span>
                  「手作りスピーカー」
                </h3>
                <p>■ 内容：コイルと磁石を使い、スピーカーの原理を学びます。<br>
                  紙コップやお皿などをスピーカーして音を出します。</p>
                <p>■ 担当：天井</p>
                <p>■ 日程：2021年12月12日（日）</p>
                <p>■ 時間：10:30～、11:00～、11:30～、12:00～ 【各回15分】</p>
                <p>■ 定員：各回5組</p>
                <p>■ 料金：400円（※常設展観覧料も必要）</p>
              </li>
              <li class="c-anim-up">
                <h3>
                  <span>ミニワークショップ</span>
                  「回転楽器でメロディを奏でよう」
                </h3>
                <p>■ 内容：穴をあけた円盤を回転させ、振動数の違いを利用して音階を作ります。</p>
                <p>■ 日程：2021年11月30日（火）～12月12日（日）</p>
                <p>■ 時間：13:00～15:30</p>
                <p>■ 定員：各回8組程度</p>
                <p>■ 料金：300円（※常設展観覧料も必要）</p>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <section class="sect_3" id="sect_3">
        <div class="wrapper">
          <div class="container">
            <div class="head">
              <h3 class="c-anim-up">浜松市楽器博物館<span>- Hamamatsu Museum of Musical Instruments</span></h3>
              <div class="row">
                <div class="col">
                  <h4 class="c-anim-up"><span>企画展</span> 「テルミン誕生101年 電子楽器の過去と未来」</h4>
                  <p class="c-anim-up">電子楽器の歴史は、1920年にロシアのレフ・テルミン博士が「テルミン」を発明したことに始まります。それから101年の歳月を経た今日―21世紀の電子楽器は、今なお進化や発展を続け、現代人にとって最も身近な音楽を担う存在と言っても過言ではありません。本展では、まず、電子楽器のパイオニアである「テルミン」や「オンド・マルトノ」の紹介にはじまり、その後、世界の音楽シーンに影響を与えてきた数々の名器やその開発秘話に耳を傾け、電子楽器の歴史をたどります。さらに、未来ではどのように電子楽器が社会を変えていくのか、電子楽器産業が盛んなまち浜松で想像をめぐらせます。</p>
                  <p class="p_link c-anim-up">
                    詳しくは浜松市楽器博物館のHPをご覧ください。<br>
                    <a href="https://www.gakkihaku.jp/" target="_blank">https://www.gakkihaku.jp/</a>
                  </p>
                </div>
                <div class="col">
                  <ul>
                    <li class="c-anim-up">
                      <div class="row">
                        <div class="col">
                          <p>構成</p>
                        </div>
                        <div class="col">
                          <p class="text-indent">第一部：電子楽器の胎動とテルミンの誕生</p>
                          <p class="text-indent">第二部：電子楽器ヒストリー</p>
                          <p class="text-indent">第三部：電子楽器の未来のカタチ</p>
                          <p class="p_bullet">
                          ● 期間中は博物館職員による電子楽器に関するギャラリートークも開催します。
                          </p>
                        </div>
                      </div>
                    </li>
                    <li class="c-anim-up">
                      <div class="row">
                        <div class="col">
                          <p>期間</p>
                        </div>
                        <div class="col">
                          <p>2021年12月11日（土）～<br class="sp">2022年4月12日（火）</p>
                        </div>
                      </div>
                    </li>
                    <li class="c-anim-up">
                      <div class="row">
                        <div class="col">
                          <p>会場</p>
                        </div>
                        <div class="col">
                          <p>浜松市楽器博物館  展示室内</p>
                        </div>
                      </div>
                    </li>
                    <li class="c-anim-up">
                      <div class="row">
                        <div class="col">
                          <p>観覧料</p>
                        </div>
                        <div class="col">
                          <p>常設展観覧料に含む</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <picture >
								<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
									<source srcset="/images/satellite/img_4.jpg" media="(max-width: 899px)" type="image/webp">
									<source srcset="/images/satellite/img_4.jpg" media="(min-width: 900px)">
									<img src="/images/satellite/img_4.jpg" alt="" class="c-anim-up">
								</picture>
              </div>
              <div class="col">
                <picture >
								<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
									<source srcset="/images/satellite/img_5.jpg" media="(max-width: 899px)" type="image/webp">
									<source srcset="/images/satellite/img_5.jpg" media="(min-width: 900px)">
									<img src="/images/satellite/img_5.jpg" alt="" class="c-anim-up">
								</picture>
              </div>
              <div class="col">
                <picture >
								<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
									<source srcset="/images/satellite/img_6.jpg" media="(max-width: 899px)" type="image/webp">
									<source srcset="/images/satellite/img_6.jpg" media="(min-width: 900px)">
									<img src="/images/satellite/img_6.jpg" alt="" class="c-anim-up">
								</picture>
              </div>
            </div>
            <ul class="box_list">
              <li class="c-anim-up">
                <h3>
                  <span>レクチャーコンサートNo.205</span>
                  「触れずに奏でる電子楽器“テルミン”」
                </h3>
                <p>■ 出演：竹内 正実（テルミン） 他</p>
                <p>■ 日程：2021年12月11日（土）</p>
                <p>■ 時間：18:30開演（18:00開場）</p>
                <p>■ 会場：楽器博物館 天空ホール</p>
                <p>■ 料金：一般2,000円／学生1,000円</p>
                <p>■ 発売：10月3日(日)より楽器博物館、アクトシティ地下1階チケットセンター、浜松市文化振興財団オンラインショップにて発売</p>
                <div class="desc">
                  <h4>竹内 正実 <span>Masami Takeuchi（テルミン）</span></h4>
                  <p>1967年埼玉県生まれ。大阪芸術大学音楽学科音楽工学専攻卒業。1993年、渡露。レフ・テルミンの血縁で愛弟子のリディア・カヴィナにテルミン演奏法を師事した、日本におけるテルミン演奏の第一人者。演奏活動と並行し、延べ1,000名以上にテルミン演奏法を教授した。テルミンに関する著作や論文も発表し、自身の名義のCDアルバムも3枚リリース。2001年、日本オーディオ協会の「音の匠」に選出。2009年、映画「のだめカンタービレ最終楽章・後編」でテルミン演奏の吹き替えと演奏法指導。これまでに国内外で250回以上のコンサート、「題名のない音楽会」など180回以上のテレビ・ラジオ番組に出演。2016年、浜松市楽器博物館の特別展「テルミン」を監修。同年12月、コンサート出演中に脳出血を患う。右半身麻痺の後遺症を負ったが、リハビリに励み演奏者としての復帰を目指している。浜松市在住。</p>
                </div>
              </li>
              <li class="c-anim-up">
                <h3>
                  <span>レクチャーコンサートNo.206</span>
                  「オンド・マルトノ～流麗な電子の響き～」
                </h3>
                <p>■ 出演：大矢 素子（オンド・マルトノ）</p>
                <p>■ 解説：北口二朗（国立科学博物館元主任調査員）</p>
                <p>■ 日程：2022年3月26日（土）</p>
                <p>■ 時間：18:30開演（18:00開場）</p>
                <p>■ 会場：楽器博物館 天空ホール</p>
                <p>■ 料金：一般2,000円／学生1,000円</p>
                <p>■ 発売：2022年2月6日(日)より楽器博物館、アクトシティ地下1階チケットセンター、浜松市文化振興財団オンラインショップにて発売</p>
                <div class="desc">
                  <h4>大矢 素子 <span>Motoko Oya（オンド・マルトノ）</span></h4>
                  <p>オンド・マルトノ奏者。東京藝術大学楽理科在学中この楽器と出会い、同大学院修士課程在学時、楽器の開発者、マルトノ著『アクティヴ・リラクゼーション』を翻訳出版（春秋社）。パリ国立高等音楽院オンド・マルトノ科を最優秀（主席）で卒業後、マルトノ研究により博士号取得（於東京藝術大学）。「B→C」シリーズ（第132回）出演のほか、メシアン《アッシジの聖フランチェスコ》全曲本邦初演公演に第二オンド奏者として参加する等、活発に演奏活動を展開。2019年8月キングインターナショナルより初のアルバムとなる『オンド・マルトノ作品集』（KKC 058）を発表、2021年NHK大河ドラマ「青天を衝け」の「紀行」テーマ演奏を担当（第25回～）。演奏・研究両面からの活躍が益々期待される存在である。</p>
                </div>
              </li>
              <li class="c-anim-up">
                <h3>
                  <span>ミュージアムサロン</span>
                  「テルミン」
                </h3>
                <p>■ 出演：前田 悠希（14：00）、鈴木 雄也（15：30）</p>
                <p>■ 日程：2021年12月11日（土）</p>
                <p>■ 時間：14：00～／15：30～ 【各回30分】</p>
                <p>■ 会場：楽器博物館 天空ホール</p>
                <p>■ 料金：常設展観覧料に含む</p>
              </li>
              <li class="c-anim-up">
                <h3>
                  <span>ミュージアムサロン</span>
                  「ハモンドオルガン」
                </h3>
                <p>■ 出演：浅野 仁</p>
                <p>■ 日程：2022年1月30日（日）</p>
                <p>■ 時間：14：00～／15：30～ 【各回30分】</p>
                <p>■ 会場：楽器博物館 天空ホール</p>
                <p>■ 料金：常設展観覧料に含む</p>
              </li>
              <li class="c-anim-up">
                <h3>
                  <span>ワークショップ</span>
                  「青色LEDを使った電子楽器“PBトーン”を作って演奏しよう！」
                </h3>
                <p>■ 内容：浜松にゆかりのある青色LEDを使って楽器を作ろう！今回作る「PBトーン」は、光との距離によって音程が変えられるオリジナルの<br>
                  電子楽器です。完成した後は実際に曲を練習して、みんなで演奏会を行います。</p>
                <p>■ 講師：山脇 一休（日本ソーラービークル協会「笑輪」会長）、静岡県立浜松城北工業高校生徒</p>
                <p>■ 日程：2022年2月5日（土）</p>
                <p>■ 時間：13：30～15：45（休憩含む、13：15受付開始）</p>
                <p>■ 対象：小学4年生～中学生（小学生は保護者同伴）</p>
                <p>■ 定員：20名</p>
                <p>■ 会場：アクトシティ浜松研修交流センター　62研修交流室</p>
                <p>■ 料金：500円</p>
                <p class="txt_indent_99">■ 申込期間：2021年12月5日（日）～2022年1月5日（水） ※応募多数の場合は抽選</p>
                <p class="txt_indent_99">■ 申込方法：浜松市楽器博物館HPより</p>
                <p>■ 協力：日本ソーラービークル協会「笑輪」実行委員部／日立サイエンス夢クラブ／東京応化科学技術振興財団／<br>
                  静岡県地球温暖化防止活動推進センター／静岡県立浜松城北工業高校</p>
              </li>
              <li class="c-anim-up">
                <h3>
                  <span>ワークショップ</span>
                  「ペットボトルでトーン・ホイール・オルガンを作ろう！」
                </h3>
                <p>■ 内容：ハモンドオルガンに代表される「トーン・ホイール・オルガン」は、⻭⾞状の円盤を回転させて⾳を鳴らすオルガンです。<br>
                  しくみを学び、実際にペットボトルを使ってトーン・ホイール・オルガンを作ってみましょう。⼦供はもちろん、⼤⼈も歓迎！</p>
                <p>■ 講師：R-MONO Lab</p>
                <p>■ 日程：2022年1月23日（日）</p>
                <p>■ 時間：14：30～16：00</p>
                <p>■ 対象：小学生以上（小学3年生以下は保護者同伴 ※別途観覧料がかかります）</p>
                <p>■ 定員：12名</p>
                <p>■ 会場：楽器博物館　ワークショップエリア</p>
                <p>■ 料金：500円（※常設展観覧料も必要）</p>
                <p class="txt_indent_99">■ 申込期間：2021年11月2月3日（火・祝）～12月23日（木） ※応募多数の場合は抽選</p>
                <p class="txt_indent_99">■ 申込方法：浜松市楽器博物館HPより</p>
              </li>
              <li class="c-anim-up">
                <h3>
                  <span>ワークショップ</span>
                  「テルミンやマトリョミンの演奏に挑戦しよう！」
                </h3>
                <p>■ 内容：電子楽器のご先祖様ともいえる楽器「テルミン」や、テルミンの仕組みを応用してつくられた可愛い楽器「マトリョミン」を演奏してみよう！<br>
                  なんと演奏の秘密は「楽器に“触らない”」こと！？ちょっと難しいけど、先生が優しく教えてくれるので気軽に参加してみてね！</p>
                <p>■ 講師：竹内 正実、濱口 晶生、他</p>
                <p>■ 日程：2022年12月12日（日）、24日（金）<br>
                  2022年1月16日（日）、22日（土）<br>
                  2022年2月12日（土）、26日（土）<br>
                  2022年3月5日（土）、20日（日）</p>
                <p>■ 時間：14：00～／14：45～／15：30～／15：45～ 【各回15分】</p>
                <p>■ 対象：全年齢</p>
                <p>■ 定員：各回先着6名</p>
                <p>■ 会場：楽器博物館　ワークショップエリア</p>
                <p>■ 料金：常設展観覧料に含む</p>
                <p class="txt_indent_99">■ 申込方法：当日開館時間中に受付にて参加券配布　※先着順</p>
              </li>
              <li class="c-anim-up">
                <h3>
                  <span>ミニ展示</span>
                  「静岡文化芸術大学の学生による創作電子楽器」
                </h3>
                <p>■ 日程：2021年12月11日（土）～12日（日）</p>
                <p class="txt_indent_168">■ 制作者による解説：11日（土）13：00～16：30</p>
                <p>■ 会場：楽器博物館  展示室（WSエリア付近）</p>
              </li>
              <li class="c-anim-up">
                <h3>
                  <span>イラストコーナー</span>
                  「未来の楽器イラストを描いてみよう！」
                </h3>
                <p>■ 内容：テルミンの発明から101年たった今、さらに101年後の未来ではどんな楽器が新たに誕生しているのかな…？ <br>
                  そんな未来の楽器を自由に想像して描いてみよう！描いてくれた人には楽器博物館オリジナルステッカーをプレゼント！</p>
                <p>■ 日程：企画展開催期間中は毎日、随時ご参加いただけます</p>
                <p>■ 会場：楽器博物館  ワークショップエリア</p>
              </li>
            </ul>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
    </footer>
  </div><!-- //AllBox -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>

  <script>
		const swiper1 = new Swiper('.img_swiper1', {
			// Optional parameters
			direction: 'horizontal',
			loop: true,
      slidesPerView: 1,

			// If we need pagination
			pagination: {
				el: '.swiper-pagination1',
			},

			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next1',
				prevEl: '.swiper-button-prev1',
			},

			// And if we need scrollbar
			// scrollbar: {
			// 	el: '.swiper-scrollbar',
			// },
		});

    const swiper2 = new Swiper('.img_swiper2', {
			// Optional parameters
			direction: 'horizontal',
			loop: true,
      slidesPerView: 1,

			// If we need pagination
			pagination: {
				el: '.swiper-pagination2',
			},

			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next2',
				prevEl: '.swiper-button-prev2',
			},

			// And if we need scrollbar
			// scrollbar: {
			// 	el: '.swiper-scrollbar',
			// },
		});

    const swiper3 = new Swiper('.img_swiper3', {
			// Optional parameters
			direction: 'horizontal',
			loop: true,
      slidesPerView: 1,

			// If we need pagination
			pagination: {
				el: '.swiper-pagination3',
			},

			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next3',
				prevEl: '.swiper-button-prev3',
			},

			// And if we need scrollbar
			// scrollbar: {
			// 	el: '.swiper-scrollbar',
			// },
		});
	</script>

</body>

</html>
