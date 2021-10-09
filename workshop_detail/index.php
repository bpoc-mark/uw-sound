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

  <title>ワークショップ | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Workshop_detail">
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
              <li>
                <a href="">プチプチ・サラサラ・ふわふわ音あそび Vol.2</a>
              </li>
            </ul>
            <h3>ワークショップ</h3>
              <p>
                <img src="/images/common/lower_pg_img.svg" alt="">
              </p>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="container">
            <p class="post_cat"><span>プレイベント</span></p>
            <h4 class="post_sub_head">ヤマハ株式会社</h4>
            <h3 class="post_title">プチプチ・サラサラ・ふわふわ音あそび Vol.2</h3>
            <div class="info_cont">
              <div class="left">
                <div class="content">
                  <div class="event_cont">
                    <p>■ 体験時間： 12月7日（土）15:00～17:00</p>
                    <p>■ 当日受付 定員20名 無料</p>
                    <p>■ 会場： アクトシティ浜松</p>
                  </div>
                  <p>
                    普段の生活では気にもとめなかったような緩衝材を使って、小さな緩衝材が触れ合う音やその他の物に潜んでいる音を発見し創作するワークショップ。<br>
                    
                    ワークショップの前半は、参加者の皆さんそれぞれが体や身近な道具を使ってお気に入りの緩衝材音をつくります。後半は参加者全員で、ゲーム要素を含みながらみなさんのお気に入りの音を演奏しながら、互いの小さな音に耳を傾ける時間を楽しみます。
                  </p>
                </div>
                <ul class="img_cont sp">
                  <li>
                    <img src="/images/workshop_details/img_1.png" alt="">
                  </li>
                  <li>
                    <img src="/images/workshop_details/img_1.png" alt="">
                  </li>
                  <li>
                    <img src="/images/workshop_details/img_1.png" alt="">
                  </li>
                  <li>
                    <img src="/images/workshop_details/img_1.png" alt="">
                  </li>
                </ul>
                <div class="app_cont">
                  <h4 class="pc">参加お申し込み</h4>
                  <ul class="row">
                    <li class="col"><p>12/11（土）</p></li>
                    <li class="col"><p>12:30〜</p></li>
                    <li class="col"><a href="">申し込む</a></li>
                  </ul>
                  <ul class="row">
                    <li class="col"><p></p></li>
                    <li class="col"><p>16:00〜</p></li>
                    <li class="col"><a href="">申し込む</a></li>
                  </ul>
                  <ul class="row">
                    <li class="col"><p>12/12（日）</p></li>
                    <li class="col"><p>10:00〜</p></li>
                    <li class="col"><a href="">申し込む</a></li>
                  </ul>
                  <ul class="row">
                    <li class="col"><p></p></li>
                    <li class="col"><p>12:30〜</p></li>
                    <li class="col"><a href="">申し込む</a></li>
                  </ul>
                  <ul class="row">
                    <li class="col"><p></p></li>
                    <li class="col"><p>16:00〜</p></li>
                    <li class="col"><a href="">申し込む</a></li>
                  </ul>
                </div>
              </div>
              <div class="right pc">
                <ul class="img_cont">
                  <li>
                    <img src="/images/workshop_details/img_1.png" alt="">
                  </li>
                  <li>
                    <img src="/images/workshop_details/img_1.png" alt="">
                  </li>
                  <li>
                    <img src="/images/workshop_details/img_1.png" alt="">
                  </li>
                  <li>
                    <img src="/images/workshop_details/img_1.png" alt="">
                  </li>
                </ul>
              </div>
            </div>
            <div class="btn_cont">
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
