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

  <title>トピックス | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Topics">
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
                <a href="">TOP</a>
              </li>
              <li>
                <a href="">トピックス</a>
              </li>
            </ul>
            <h3>トピックス</h3>
              <p>
                <img src="/images/common/lower_pg_img.svg" alt="">
              </p>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="container">
            <div class="topics_cont row">
              <div class="col c-anim-up">
                <a href="">
                  <img src="/images/top/section_3/1.png" alt="">
                  <div class="post_cont">
                    <p class="post_date">2017.12.07</p>
                    <p class="post_title">ただいま会場設営中！開催までもうすぐです</p>
                  </div>
                </a>
              </div>
              <div class="col c-anim-up">
                <a href="">
                  <img src="/images/top/section_3/2.png" alt="">
                  <div class="post_cont">
                    <p class="post_date">2017.12.07</p>
                    <p class="post_title">【お知らせ】オリジナル曲作りのワークショップ申込み受付は終了しました。</p>
                  </div>
                </a>
              </div>
              <div class="col c-anim-up">
                <a href="">
                  <img src="/images/top/section_3/3.png" alt="">
                  <div class="post_cont">
                    <p class="post_date">2017.12.07</p>
                    <p class="post_title">必見！会場マップとタイムスケジュールを公開しました！</p>
                  </div>
                </a>
              </div>
              <div class="col c-anim-up">
                <a href="">
                  <img src="/images/top/section_3/1.png" alt="">
                  <div class="post_cont">
                    <p class="post_date">2017.12.07</p>
                    <p class="post_title">ただいま会場設営中！開催までもうすぐです</p>
                  </div>
                </a>
              </div>
              <div class="col c-anim-up">
                <a href="">
                  <img src="/images/top/section_3/2.png" alt="">
                  <div class="post_cont">
                    <p class="post_date">2017.12.07</p>
                    <p class="post_title">【お知らせ】オリジナル曲作りのワークショップ申込み受付は終了しました。</p>
                  </div>
                </a>
              </div>
              <div class="col c-anim-up">
                <a href="">
                  <img src="/images/top/section_3/3.png" alt="">
                  <div class="post_cont">
                    <p class="post_date">2017.12.07</p>
                    <p class="post_title">必見！会場マップとタイムスケジュールを公開しました！</p>
                  </div>
                </a>
              </div>
              <div class="col c-anim-up">
                <a href="">
                  <img src="/images/top/section_3/1.png" alt="">
                  <div class="post_cont">
                    <p class="post_date">2017.12.07</p>
                    <p class="post_title">ただいま会場設営中！開催までもうすぐです</p>
                  </div>
                </a>
              </div>
              <div class="col c-anim-up">
                <a href="">
                  <img src="/images/top/section_3/2.png" alt="">
                  <div class="post_cont">
                    <p class="post_date">2017.12.07</p>
                    <p class="post_title">【お知らせ】オリジナル曲作りのワークショップ申込み受付は終了しました。</p>
                  </div>
                </a>
              </div>
              <div class="col c-anim-up">
                <a href="">
                  <img src="/images/top/section_3/3.png" alt="">
                  <div class="post_cont">
                    <p class="post_date">2017.12.07</p>
                    <p class="post_title">必見！会場マップとタイムスケジュールを公開しました！</p>
                  </div>
                </a>
              </div>
            </div>

            <!-- Wordpress -->
            <div class="page_navigation">
              <div class="wp-pagenavi">
                <a class="previouspostslink" href="#" rel="prev">&#x25C0;</a>
                <span class="current">1</span>
                <a class="page smaller" href="#">2</a>
                <a class="page larger" href="#">3</a>
                <a class="nextpostslink" href="#" rel="next">&#x25B6;</a>
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

</body>

</html>
