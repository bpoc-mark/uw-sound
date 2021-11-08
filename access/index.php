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

  <title>アクセス | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Access">
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
                <a href="/access/">アクセス</a>
              </li>
            </ul>
            <h3>アクセス</h3>
              <p>
                <img src="/images/common/lower_pg_img.svg" alt="">
              </p>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="col">
                <picture >
								<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
									<source srcset="/images/access/img_1.jpg" media="(max-width: 899px)" type="image/webp">
									<source srcset="/images/access/img_1.jpg" media="(min-width: 900px)">
									<img src="/images/access/img_1.jpg" alt="アクトシティ展示イベントホール写真" class="c-anim-up">
								</picture>
              </div>
              <div class="col">
                <h3 class="c-anim-up">
                  <span>メイン会場</span><br>
                  アクトシティ展示イベントホール
                </h3>
                <p class="c-anim-up">■ 静岡県浜松市中区中央3-12-1</p>
                <p class="c-anim-up">■ TEL：<a href="tel:053-451-1111">053-451-1111</a></p>
                <p class="c-anim-up">■ JR東海道本線「浜松駅」から徒歩約6分</p>
                <div class="btn_cont c-anim-up">
                  <a href="https://www.actcity.jp/visitor/exhibition/access/" target="_blank" class="link_btn">
                    詳しくはこちら
                    <div class="svg_cont">
                      <svg class="btn_svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 956.29 610.64" ><path d="" transform="translate(-21.86 -20.32)"/></svg>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <picture >
								<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
									<source srcset="/images/access/img_2.jpg" media="(max-width: 899px)" type="image/webp">
									<source srcset="/images/access/img_2.jpg" media="(min-width: 900px)">
									<img src="/images/access/img_2.jpg" alt="浜松科学館写真" class="c-anim-up">
								</picture>
              </div>
              <div class="col">
                <h3 class="c-anim-up">
                  <span>サテライト会場</span><br>
                  浜松科学館
                </h3>
                <p class="c-anim-up">■ 静岡県浜松市中区北寺島町256番地の3</p>
                <p class="c-anim-up">■ TEL：<a href="tel:053-454-0178">053-454-0178</a> ／ FAX：<a href="tel:053-454-0184">053-454-0184</a></p>
                <p class="c-anim-up">■ JR東海道本線「浜松駅」から徒歩約7分</p>
                <div class="btn_cont c-anim-up">
                  <a href="https://www.mirai-ra.jp/access/" target="_blank" class="link_btn">
                    詳しくはこちら
                    <div class="svg_cont">
                    <svg class="btn_svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 956.29 610.64" ><path d="" transform="translate(-21.86 -20.32)"/></svg>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <picture >
								<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
									<source srcset="/images/access/img_3.jpg" media="(max-width: 899px)" type="image/webp">
									<source srcset="/images/access/img_3.jpg" media="(min-width: 900px)">
									<img src="/images/access/img_3.jpg" alt="浜松市楽器博物館写真" class="c-anim-up">
								</picture>
              </div>
              <div class="col">
                <h3 class="c-anim-up">
                  <span>サテライト会場</span><br>
                  浜松市楽器博物館
                </h3>
                <p class="c-anim-up">■ 住所は　静岡県浜松市中区中央3-9-1</p>
                <p class="c-anim-up">■ TEL：<a href="tel:053-451-1128">053-451-1128</a> ／ FAX：<a href="tel:053-451-1129">053-451-1129</a></p>
                <p class="c-anim-up">■ JR東海道本線「浜松駅」から徒歩約7分</p>
                <div class="btn_cont c-anim-up">
                  <a href="https://www.gakkihaku.jp/access/" target="_blank" class="link_btn">
                    詳しくはこちら
                    <div class="svg_cont">
                      <!-- <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 600 400" >
                        <path class="svg_btn" d="" stroke="#000" stroke-width="64" fill="none" />
                      </svg> -->
                      <svg class="btn_svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 956.29 610.64" ><path d="" transform="translate(-21.86 -20.32)"/></svg>
                    </div>
                  </a>
                </div>
              </div>
            </div>
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
        var s = Snap("#btn_svg1");

        var line = "M978.14,314H924.52c-122.38-.41-200.25,572.79-416.9,0-218-576.35-296.64,0-405.45,0H21.86"
        var line1 = "M 978.14 314 H 924.52 c -122.38 -0.41 -176.52 0 -416.9 0 c -282.62 0 -296.64 0 -405.45 0 H 21.86"

        var circle_1 = s.path(line);
        var circles = s.group(circle_1);

        circles.attr({
            fill: 'none',
            stroke: "#000",
            strokeWidth:75
        });
        
        function blink(){
            circle_1.animate({d: line1}, 100, function(){
                circle_1.animate({d: line}, 500, mina.elastic);
            });
        };
        
        setInterval(blink, 3000);
    </script>

</body>

</html>
