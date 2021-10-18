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

  <title>Global Sequencer | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Global">
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
                <a href="/global/">Global Sequencer</a>
              </li>
            </ul>
            <h3>Global Sequencer</h3>
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
                <h3 class="c-anim-up">Yuri <br class="sp">Suzuki</h3>
                <picture >
								<!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
									<source srcset="/images/global/sp/img_1.jpg" media="(max-width: 899px)" type="image/webp">
									<source srcset="/images/global/img_1.jpg" media="(min-width: 900px)">
									<img src="/images/global/sp/img_1.jpg" alt="" class="c-anim-up">
								</picture>
                <p class="c-anim-up">
                  2019年末からパンデミックが始まりました、パラダイムシフトが起こりわたしたちのコミュニケーションがかわり、実際の触れ合いがなくなりインターネットや電話を経由してのコミュニケーションがメインになりました。<br>
                  2021年に入り状況は改善されたもののまだパンデミックは続いています。このグローバルシーケンサーはオンラインを通じて音で世界と繋がる試みです。<br>
                  音をシェア、閲覧するだけではなくその音を使い自分の音楽を作ることのできるウェブサイトです。シンプルなステップシーケンスという方法を使い音楽が苦手な方でも楽しく音楽がつくれます。<br>
                  このプロジェクトは浜松市だけではなくUNESCO全体に広がるプロジェクトです。そして、これから数年にわたり拡張し続けていく息の長いプロジェクトになります。<br>
                  みなさんが、このグローバルシーケンサーを使いどのようなクリエイションを行うか楽しみです。
                </p>
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
