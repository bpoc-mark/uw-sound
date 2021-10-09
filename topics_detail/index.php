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

<body id="Topics_detial">
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
                <a href="/topics/">トピックス</a>
              </li>
              <li>
                <a href="">ただいま会場設営中！！開催までもうすぐです</a>
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
            <h3 class="post_title c-anim-up">ただいま会場設営中！！開催までもうすぐです</h3>
            <div class="post_date c-anim-up">2017.12.07</div>
            <p class="post_content c-anim-up">
              今週の土曜日、日曜日の開催に向けて、会場となるアクトシティ展示イベントホールでは、設営作業の真っ最中です。<br>
              写真はブースの仕立てを設営中の風景になります。<br>
              実際は、ここに展示および体験作品が設置され、雰囲気の良いライティングで会場内を演出します☆
            </p>
            <ul class="image_cont">
              <li class="c-anim-up">
                <img src="/images/topics_details/image2.png" alt="">
              </li>
              <li class="c-anim-up">
                <img src="/images/topics_details/image3.png" alt="">
              </li>
              <li class="c-anim-up">
                <img src="/images/topics_details/image4.png" alt="">
              </li>
            </ul>
            <div class="btn_cont c-anim-up">
              <a href="">
                一覧へ戻る
                <div class="svg_cont">
                  <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 600 400" >
                    <path class="svg_btn" d="" stroke="#000" stroke-width="64" fill="none" />
                  </svg>
                </div>
              </a>
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
