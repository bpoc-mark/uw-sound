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

  <title>出展作品 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Source_work">
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
                <a href="/source_work/">出展作品</a>
              </li>
            </ul>
            <h3>出展作品</h3>
              <p>
                <img src="/images/common/lower_pg_img.svg" alt="">
              </p>
          </div>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="container">
            <div class="row c-anim-up">
              <div class="col">
                <h4 class="c-anim-up">ヤマハ株式会社</h4>
                <h3 class="c-anim-up">ギターとともに暮らすための家具</h3>
                <p class="c-anim-up">
                  普段はギタースタンド。そしてギターを手に取ると、座って演奏ができるハイスツール。<br>
                  リビングの中にあるペットの寝床をイメージして作ったベンチ。<br>
                  <a href="https://www.yamaha.com/ja/about/design/synapses/id_124/" target="_blank">https://www.yamaha.com/ja/about/design/synapses/id_124/</a>
                </p>
              </div>
              <div class="col">
                <!-- Slider main container -->
                <div class="swiper img_swiper1 c-anim-up">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_1_row_1/img_1.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_1_row_1/img_1.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_1_row_1/img_1.jpg" alt="ギターとともに暮らすための家具">
                      </picture>
                    </div>
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_1_row_1/img_2.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_1_row_1/img_2.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_1_row_1/img_2.jpg" alt="ギターとともに暮らすための家具">
                      </picture>
                    </div>
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_1_row_1/img_3.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_1_row_1/img_3.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_1_row_1/img_3.jpg" alt="ギターとともに暮らすための家具">
                      </picture>
                    </div>
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_1_row_1/img_4.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_1_row_1/img_4.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_1_row_1/img_4.jpg" alt="ギターとともに暮らすための家具">
                      </picture>
                    </div>
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_1_row_1/img_5.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_1_row_1/img_5.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_1_row_1/img_5.jpg" alt="ギターとともに暮らすための家具">
                      </picture>
                    </div>
                  </div>
                  <!-- If we need scrollbar -->
                  <!-- <div class="swiper-scrollbar"></div> -->
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination swiper-pagination1"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev swiper-button-prev1"></div>
                <div class="swiper-button-next swiper-button-next1"></div>
              </div>
            </div>
            <div class="row c-anim-up">
              <div class="col">
                <h4 class="c-anim-up">ヤマハ株式会社</h4>
                <h3 class="c-anim-up">誰でもピアノ</h3>
                <p class="c-anim-up">
                一本指でメロディーを弾くと、伴奏とペダルが自動で追従して、だれでも、ピアニストのように華麗な演奏ができる魔法の楽器。
                </p>
              </div>
              <div class="col">
                <!-- Slider main container -->
                <div class="swiper img_swiper2 c-anim-up">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_1_row_2/img_1.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_1_row_2/img_1.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_1_row_2/img_1.jpg" alt="誰でもピアノ">
                      </picture>
                    </div>
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_1_row_2/img_2.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_1_row_2/img_2.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_1_row_2/img_2.jpg" alt="誰でもピアノ">
                      </picture>
                    </div>
                  </div>
                  <!-- If we need scrollbar -->
                  <!-- <div class="swiper-scrollbar"></div> -->
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination swiper-pagination2"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev swiper-button-prev2"></div>
                <div class="swiper-button-next swiper-button-next2"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sect_2">
        <div class="wrapper">
          <div class="container">
            <h4 class="c-anim-up">株式会社河合楽器製作所</h4>
            <h3 class="c-anim-up">透明な、おおきなピアノとちいさなピアノ</h3>
            <p class="c-anim-up">テレビ番組で目にする透明ピアノを間近で見て弾いて記念撮影も可能です。</p>
            <div class="item_cont">
              <div class="row">
                <div class="col">
                  <img src="/images/source_work/sect_2_img_1.jpg" alt="クリスタルグランドピアノ" class="c-anim-up">
                </div>
                <div class="col">
                  <h5 class="c-anim-up">クリスタルグランドピアノ</h5>
                  <p class="c-anim-up">
                    「聴かせる」に加え「魅せる」。カワイの独創的な発想から誕生した、まさに一台のアートと呼ぶにふさわしい透明グランドピアノ。<br>
                      その圧倒的な存在感が出会った人の五感を魅了し、空間を華麗に演出するインテリアとしてもアイデンティティを発揮。
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <img src="/images/source_work/sect_2_img_2.jpg" alt="クリスタルミニグランドピアノ" class="c-anim-up">
                </div>
                <div class="col">
                  <h5 class="c-anim-up">クリスタルミニグランドピアノ</h5>
                  <p class="c-anim-up">
                    本物のクリスタルグランドピアノを模して作ったピアノのおもちゃ。美しい音色 はそのままに、小さいながらも本物のピアノのように屋根が開きます。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sect_3">
        <div class="wrapper">
          <div class="container">
            <div class="row c-anim-up">
              <div class="col">
                <h4 class="c-anim-up">ローランド株式会社</h4>
                <h3 class="c-anim-up">未来を示すピアノ Facet Grand Piano</h3>
                <p class="c-anim-up">電子ピアノのパイオニアであるローランドが、最先端のテクノロジーと理想のデザインを追求し作りあげた、未来のピアノ「Facet Grand Piano」を展示。会期中、プロ・アーティストによる演奏もお楽しみいただきます。
                </p>
              </div>
              <div class="col">
                <!-- Slider main container -->
                <div class="swiper img_swiper3 c-anim-up">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_3_row_1/img_1.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_3_row_1/img_1.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_3_row_1/img_1.jpg" alt="Facet Grand Piano">
                      </picture>
                    </div>
                  </div>
                  <!-- If we need scrollbar -->
                  <!-- <div class="swiper-scrollbar"></div> -->
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination swiper-pagination3"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev swiper-button-prev3"></div>
                <div class="swiper-button-next swiper-button-next3"></div>
              </div>
            </div>
            <div class="row c-anim-up">
              <div class="col">
                <h4 class="c-anim-up">ローランド株式会社</h4>
                <h3 class="c-anim-up">わたしたちの生活を豊かにする電子楽器の世界</h3>
                <p class="c-anim-up">新型コロナウイルスの影響で私たちの生活は大きく変容し、人の心を豊かにする音楽の役割はますます大きくなっています。場所や時間を気にすることなく、音楽の演奏を楽しむことができるローランドの電子楽器。その世界をぜひご体験ください。</p>
              </div>
              <div class="col">
                <!-- Slider main container -->
                <div class="swiper img_swiper4 c-anim-up">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_3_row_2/img_1.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_3_row_2/img_1.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_3_row_2/img_1.jpg" alt="生活を豊かにする電子楽器">
                      </picture>
                    </div>
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_3_row_2/img_2.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_3_row_2/img_2.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_3_row_2/img_2.jpg" alt="生活を豊かにする電子楽器">
                      </picture>
                    </div>
                  </div>
                  <!-- If we need scrollbar -->
                  <!-- <div class="swiper-scrollbar"></div> -->
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination swiper-pagination4"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev swiper-button-prev4"></div>
                <div class="swiper-button-next swiper-button-next4"></div>
              </div>
            </div>
            <div class="row c-anim-up">
              <div class="col">
                <h3 class="c-anim-up">mori no oto</h3>
                <p class="c-anim-up">
                  楽器と音の出るおもちゃを作っています。木の香りと暖かな音色につつまれ、自然と人が支え合うすてきなくらしを創りたい。そんな想いで mori no oto は生まれました。「木」と「音」は太古の昔から深い関係を持っていました。枯れた倒木を打てば響く、木はもともと響くモノ。mori no oto は楽器の原点を探り、新しく進化した音の出るモノを創り出しています。<br>
                  mori no oto の営みは自然に恵まれた岡山県西粟倉村での「暮らし」に根ざしています。豊かな森から材を、長老から知恵をいただき、モノ創りを糧とする。<br>
                  工房での仕事、地域の共同作業、近隣との交流、毎日の単純で平凡な「暮らし」を大切にしたいと考えています。
                </p>
              </div>
              <div class="col">
                <!-- Slider main container -->
                <div class="swiper img_swiper5 c-anim-up">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_3_row_3/img_1.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_3_row_3/img_1.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_3_row_3/img_1.jpg" alt="楽器と音の出るおもちゃ">
                      </picture>
                    </div>
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_3_row_3/img_2.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_3_row_3/img_2.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_3_row_3/img_2.jpg" alt="楽器と音の出るおもちゃ">
                      </picture>
                    </div>
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_3_row_3/img_3.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_3_row_3/img_3.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_3_row_3/img_3.jpg" alt="楽器と音の出るおもちゃ">
                      </picture>
                    </div>
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_3_row_3/img_4.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_3_row_3/img_4.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_3_row_3/img_4.jpg" alt="楽器と音の出るおもちゃ">
                      </picture>
                    </div>
                  </div>
                  <!-- If we need scrollbar -->
                  <!-- <div class="swiper-scrollbar"></div> -->
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination swiper-pagination5"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev swiper-button-prev5"></div>
                <div class="swiper-button-next swiper-button-next5"></div>
              </div>
            </div>
            <div class="row c-anim-up">
              <div class="col">
                <h3 class="c-anim-up">R-MONO Lab</h3>
                <p class="c-anim-up">
                  R-MONO Labは、電子楽器メーカーのローランド株式会社のもの作り同好会(部活)です。部員同士の交流をしながら、ものづくりイベントでの作品発表など制作活動をしています。創作分野は特定せず「作りたいものを作ろう」をモットーとしています。設立は2014年末。 <br>
                  Maker Faire Tokyo 2015〜2021、Ogaki Mini Maker Faire 2016〜2018などに出展。ソレコン入賞3回。創造都市ネットワーク（浜松・神戸）での講演、展示会、ワークショップなどの活動も行っています。
                </p>
              </div>
              <div class="col">
                <!-- Slider main container -->
                <div class="swiper img_swiper6 c-anim-up">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_3_row_4/img_1.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_3_row_4/img_1.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_3_row_4/img_1.jpg" alt="R-MONO Lab楽器">
                      </picture>
                    </div>
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_3_row_4/img_2.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_3_row_4/img_2.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_3_row_4/img_2.jpg" alt="R-MONO Lab楽器">
                      </picture>
                    </div>
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_3_row_4/img_3.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_3_row_4/img_3.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_3_row_4/img_3.jpg" alt="R-MONO Lab楽器">
                      </picture>
                    </div>
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_3_row_4/img_4.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_3_row_4/img_4.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_3_row_4/img_4.jpg" alt="R-MONO Lab楽器">
                      </picture>
                    </div>
                  </div>
                  <!-- If we need scrollbar -->
                  <!-- <div class="swiper-scrollbar"></div> -->
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination swiper-pagination6"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev swiper-button-prev6"></div>
                <div class="swiper-button-next swiper-button-next6"></div>
              </div>
            </div>
            <div class="row c-anim-up">
              <div class="col">
                <h4 class="c-anim-up">デザイン寮</h4>
                <h3 class="c-anim-up">Buonda</h3>
                <p class="c-anim-up">
                  デザイン寮はアイデアを出して、試作をして、人に触ってもらって新しい体験を提供したい人たち。<br>
                  いろんなモノオトで演奏する楽器Buonda。常に変化する気持ちいい音・面白い音を使ってその時その場限りの音楽を作ることができます。
                </p>
              </div>
              <div class="col">
                <!-- Slider main container -->
                <div class="swiper img_swiper7 c-anim-up">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_3_row_5/img_1.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_3_row_5/img_1.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_3_row_5/img_1.jpg" alt="モノオトで演奏する楽器Buonda">
                      </picture>
                    </div>
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/sect_3_row_5/img_2.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/sect_3_row_5/img_2.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/sect_3_row_5/img_2.jpg" alt="モノオトで演奏する楽器Buonda">
                      </picture>
                    </div>
                  </div>
                  <!-- If we need scrollbar -->
                  <!-- <div class="swiper-scrollbar"></div> -->
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination swiper-pagination7"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev swiper-button-prev7"></div>
                <div class="swiper-button-next swiper-button-next7"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sect_4">
        <div class="wrapper">
          <div class="container">
            <h4 class="c-anim-up">ねや楽器Neyagawa Instruments</h4>
            <!-- <h3>透明な、おおきなピアノとちいさなピアノ</h3> -->
            <p class="c-anim-up">「ねや楽器」は電子楽器や演出装置等の開発を通じて、バカバカしくて新しいヒューマンインターフェイスを提案する個人的なプロジェクトです。<br>
            【最近の活動実績】</p>
            <p class="text-indent c-anim-up">・ DIY MUSIC on DESKTOP 2020　出演</p>
            <p class="text-indent c-anim-up">・ kac niche collection 2021　展示</p>
            <p class="text-indent c-anim-up">・ Maker Music Festival 2021　出展　(Award of Merit　受賞)</p>
            <p class="c-anim-up"><a href="https://www.neyagawa-instruments.com/" target="_blank">https://www.neyagawa-instruments.com/</a></p>
            <div class="item_cont">
              <div class="row">
                <div class="col">
                  <picture >
                  <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                    <source srcset="/images/source_work/sect_4_img_1.jpg" media="(max-width: 899px)" type="image/webp">
                    <source srcset="/images/source_work/sect_4_img_1.jpg" media="(min-width: 900px)">
                    <img src="/images/source_work/sect_4_img_1.jpg" alt="ヘドバン君 with NTS-1" class="c-anim-up">
                  </picture>
                </div>
                <div class="col">
                  <h5 class="c-anim-up">ヘドバン君 with NTS-1</h5>
                  <p class="c-anim-up">
                  演奏に合わせて自動でヘドバンするロボットです。シンセサイザーから直接ロボットを制御することで、演奏と完全に同期した動作を行います。また、この技術を応用すると、音だけでなく、光や動きのパフォーマンスも「演奏」することが可能になります。（シンセサイザーはKORG/NTS-1を使用しています)
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <picture >
                  <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                    <source srcset="/images/source_work/sect_4_img_2.jpg" media="(max-width: 899px)" type="image/webp">
                    <source srcset="/images/source_work/sect_4_img_2.jpg" media="(min-width: 900px)">
                    <img src="/images/source_work/sect_4_img_2.jpg" alt="貧乏ゆすリズム" class="c-anim-up">
                  </picture>
                </div>
                <div class="col">
                  <h5 class="c-anim-up">貧乏ゆすリズム</h5>
                  <p class="c-anim-up">
                  貧乏ゆすりは誰でも無意識にやってしまうリズム運動です。もしも、貧乏ゆすりから音が出たら面白いと思いませんか？「貧乏ゆすりズム」は貧乏ゆすりという動作に音を加えるツールです。イライラした時、待ち時間で暇なとき、ついついやってしまう貧乏ゆすりから、表現豊かなビートを生み出します。
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <picture >
                  <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                    <source srcset="/images/source_work/sect_4_img_3.jpg" media="(max-width: 899px)" type="image/webp">
                    <source srcset="/images/source_work/sect_4_img_3.jpg" media="(min-width: 900px)">
                    <img src="/images/source_work/sect_4_img_3.jpg" alt="ソルダリングシンセサイザー" class="c-anim-up">
                  </picture>
                </div>
                <div class="col">
                  <h5 class="c-anim-up">ソルダリングシンセサイザー</h5>
                  <p class="c-anim-up">
                    ソルダリングシンセサイザーは半田ゴテを使って演奏する新感覚のシンセサイザーです。ツマミも鍵盤も一切使わない全く新しい演奏方法を確立しました。半田ショートでリズムパターンを変えるだけでなく、抵抗やコンデンサを直接取り替えることでドラスティックな変化を楽しむことができます。<br>
                    （※こちらは静態展示のみの対応となります）
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sect_5">
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="col">
                <ul>
                  <li>
                    <h4 class="c-anim-up">PEG ―possoble experimental gathering-</h4>
                    <h3 class="c-anim-up">茶っとCHATでシンギング</h3>
                    <p class="c-anim-up">茶室とお茶会、お茶しておしゃべりする要素をなぞりながら、音楽・曲・うたが創造されていく過程を探ります。リズムを探して、ことばを探して、メロディを探して、一緒にうたを作ります。録音して、コンピレーション音源をつくります。</p>
                  </li>
                  <li>
                    <h4 class="c-anim-up">PEG ―possoble experimental gathering-</h4>
                    <p class="c-anim-up">音にまつわるさまざまな表現方法、鑑賞方法の実験を実践し、創造の可能性を広げることを目的とし、2018年から不定期でワークショップと演奏会を実施している。主に鴨江アートセンターを会場としながら中田島砂丘や浜松市街の異なる条件下の特徴を踏まえて活動を行なっている。</p>
                  </li>
                  <li>
                    <h4 class="c-anim-up">ゲスト： さや(tenniscoats)</h4>
                    <p class="c-anim-up">
                      1996年頃に結成したテニスコーツで現在に到るまで数多くのレコードを自身のレーベルmajikickをはじめ世界中のレーベルから発表。日本国内外の数多くのアーティストとのコラボレーションやバンドでも活動している。札幌国際芸術祭や国東芸術祭等でもレジデンス制作・演奏を重ねる。近年は音遊びの会（神戸）やアンサンブルズ東京をはじめ音や歌についてのワークショップでアーティスト講師としても活躍している。<br>
                      <a href="http://peg-lab.info" target="_blank">http://peg-lab.info</a>
                    </p>
                  </li>
                </ul>
              </div>
              <div class="col">
                <picture >
                <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                  <source srcset="/images/source_work/sect_5_img_1.jpg" media="(max-width: 899px)" type="image/webp">
                  <source srcset="/images/source_work/sect_5_img_1.jpg" media="(min-width: 900px)">
                  <img src="/images/source_work/sect_5_img_1.jpg" alt="茶っとCHATでシンギング" class="c-anim-up">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sect_6">
        <div class="wrapper">
          <div class="container">
            <h4 class="c-anim-up">fff</h4>
            <p class="c-anim-up">ミュージシャン、楽器メーカー技術者、美術高校教員、デザイナーなどで構成される<br class="pc">少しおバカな楽器のようなアート作品のような音の装置を作るグループです。<br>制作場所は主に鴨江アートセンターです。</p>
            <ul class="history c-anim-up">
              <li>
                <span>2015年</span>
                <span>鴨江アートセンターでの「アート×テクノロジーのチームづくりと育成事業」（主催：一般社団法人創造都市協議会）に参加したメンバーを元にグループを結成。「音響装置Bake'n Roll」を制作・発表。</span>
              </li>
              <li>
                <span>2016年</span>
                <span>鴨江アートセンターでの「アート×テクノロジーのチームづくりと育成事業2」（主催：一般社団法人創造都市協議会）にて「Band Graphone」を制作・ 発表。また同作品を「第４１回GOOD ART展」（京都市美術館）、「GUGEN2016」（秋葉原コンベンションホール）に出品。</span>
              </li>
              <li>
                <span>2017年</span>
                <span>「サウンドデザインフェスティバルin浜松2017」（主催：ユネスコ音楽都市はままつ推進事業実行委員会／浜松市）に「Band Graphone 2.0」を出品。</span>
              </li>
              <li>
                <span>2018年</span>
                <span>「Band Graphone 2.0」を「第４３回GOOD ART展」（京都市美術館別館）に出品。</span>
              </li>
              <li>
                <span>2019年</span>
                <span>「サウンドデザインファクトリーin浜松2019」（主催：はままつ響きの創造プロジェクト実行委員会／浜松市）に「Sound Pond」を出品。</span>
              </li>
              <li>
                <span>2020年</span>
                <span>「Sound Pond」を「第４４回GOOD ART展」（ギャラリーマロニエ京都）に出品。</span>
              </li>
            </ul>

            <div class="item_cont">
              <div class="row">
                <div class="col">
                  <picture >
                  <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                    <source srcset="/images/source_work/sect_6_img_1.jpg" media="(max-width: 899px)" type="image/webp">
                    <source srcset="/images/source_work/sect_6_img_1.jpg" media="(min-width: 900px)">
                    <img src="/images/source_work/sect_6_img_1.jpg" alt="OTOKABE（仮）" class="c-anim-up">
                  </picture>
                </div>
                <div class="col">
                  <h5 class="c-anim-up">OTOKABE（仮）</h5>
                  <p class="c-anim-up">
                  壁にボールを当てて音を鳴らす楽器です。プレイヤーは装置の椅子に座ります。 目の前に溜まった沢山のボールを壁に投げ音を出します。壁にはたくさんのセンサーが取り付けてあります。投げたボールはまたプレイヤーの前に戻って来るの で無限にボールを投げ続ける事ができます。
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sect_7">
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="col">
                <ul>
                  <li>
                    <h4 class="c-anim-up">音と人ミミ島ウエヤマトモコ</h4>
                    <h3 class="c-anim-up">days of sounds - もうひとつの</h3>
                    <p class="c-anim-up">浜松で録音した日々の音と、小さな音を奏でるオブジェの音から様々な記臆を呼び起こすサウンドインタレーション作品。<br><br>観賞者の目の前には、小さな音を奏でるオブジェがあります。その周りでヘッドフォンを装着しそこから聴こえる音を聴くと、目に見えなかった音の情景が顕になります。<br>オブジェの動きから生まれる儚い音と、その様子から鑑賞者がイメージする情景と、ヘッドフォンから聴こえる音の情景とが絡まりあったりイメージの差異が生まれたりと、鑑賞者ごとの記臆を元に、それぞれの新しい物語と記録を創る、音で紡ぐ映像のない架空の物語のような作品です。<br>ヘッドフォンから聴こえる音は、作者が日々録音している浜松の音を元に構成している音声作品です。2020年のコロナ禍が拡大しはじめたころから録音しはじめ、何か特別な音というより遠くから届く輪郭のはっきりしない音、何かが様々に動いている”淡い音”です。<br>オブジェは、2019年に制作した緩衝材を使った作品「カンショウのすすめ」の作品を元に、新たに制作予定します。これらは、とても小さい音を奏でます。オブジェに近くと聴こえる程度です。このオブジェの音声は増幅されないので、オブジェの音そのものを聴きます。音を大きくするには、緩衝材の量を多くする必要があります。<br>今作品は、何気ない日々の淡い音と今そこで聴こえる音、増幅された音と増幅されずに聴こえる音の関係性から、鑑賞者は今そこにある世界と自分との関わりと、音を聴くことの面白さを再確認することになるはずです。さらに、日頃ゴミの様に扱われる緩衝材が綺麗な音を生み出すオブジェと録音された音から、何気ない日常の中に”隠れているかもしれないもう1つの面白い日常”を顕にする。という試みもこの作品には含まれています。</p>
                  </li>
                </ul>
              </div>
              <div class="col">
                <picture >
                <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                  <source srcset="/images/source_work/sect_7_img_1.jpg" media="(max-width: 899px)" type="image/webp">
                  <source srcset="/images/source_work/sect_7_img_1.jpg" media="(min-width: 900px)">
                  <img src="/images/source_work/sect_7_img_1.jpg" alt="days of sounds - もうひとつの" class="c-anim-up">
                </picture>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="sect_3 sect_3_2">
        <div class="wrapper">
          <div class="container">
            <div class="row c-anim-up">
              <div class="col">
                <h4 class="c-anim-up">MATHRAX</h4>
                <h3 class="c-anim-up">いしのこえ、風と石</h3>
                <p class="c-anim-up">
                  MATHRAX（マスラックス）は、電気、光、音、香りなどを用いたオブジェやインスタレーションの制作を行う、久世祥三と坂本茉里子によるアートユニットです。<br>「音」は、私たちの知覚や認知に深く作用し、時にその人の世界の感じ方を一変させるような機会をももたらします。私たちはこの「音」を通して、人が他者とコミュニケーションを生み、新たな関係性を創り出していく仕組みに注目した作品を制作してきました。<br>会場では、これまでの作品紹介の映像の他、なでるとオルゴールのような音を奏でる動物の木彫作品や、ネイティブアメリカンの石の声を聴くスキルからインスピレーションを受けて制作した作品「いしのこえ」を展示します。<br><a href="https://mathrax.com" target="_blank">https://mathrax.com</a>
                </p>
              </div>
              <div class="col">
                <!-- Slider main container -->
                <div class="swiper img_swiper8 c-anim-up">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/ph3_2_1.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/ph3_2_1.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/ph3_2_1.jpg" alt="いしのこえ、風と石">
                      </picture>
                    </div>
                    <div class="swiper-slide">
                      <picture >
                      <!-- <source　srcset="/images/top/advan.webp" media="(min-width: 900px)" type="image/webp"> -->
                        <source srcset="/images/source_work/ph3_2_2.jpg" media="(max-width: 899px)" type="image/webp">
                        <source srcset="/images/source_work/ph3_2_2.jpg" media="(min-width: 900px)">
                        <img src="/images/source_work/ph3_2_2.jpg" alt="いしのこえ、風と石">
                      </picture>
                    </div>
                  </div>
                  <!-- If we need scrollbar -->
                  <!-- <div class="swiper-scrollbar"></div> -->
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination swiper-pagination8"></div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev swiper-button-prev8"></div>
                <div class="swiper-button-next swiper-button-next8"></div>
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
			loop: false,
      slidesPerView: 1,

			// If we need pagination
			pagination: {
				el: '.swiper-pagination1',
        clickable: true,
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
			loop: false,
      slidesPerView: 1,

			// If we need pagination
			pagination: {
				el: '.swiper-pagination2',
        clickable: true,
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
			loop: false,
      slidesPerView: 1,

			// If we need pagination
			pagination: {
				el: '.swiper-pagination3',
        clickable: true,
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

    const swiper4 = new Swiper('.img_swiper4', {
			// Optional parameters
			direction: 'horizontal',
			loop: false,
      slidesPerView: 1,

			// If we need pagination
			pagination: {
				el: '.swiper-pagination4',
        clickable: true,
			},

			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next4',
				prevEl: '.swiper-button-prev4',
			},

			// And if we need scrollbar
			// scrollbar: {
			// 	el: '.swiper-scrollbar',
			// },
		});

    const swiper5 = new Swiper('.img_swiper5', {
			// Optional parameters
			direction: 'horizontal',
			loop: false,
      slidesPerView: 1,

			// If we need pagination
			pagination: {
				el: '.swiper-pagination5',
        clickable: true,
			},

			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next5',
				prevEl: '.swiper-button-prev5',
			},

			// And if we need scrollbar
			// scrollbar: {
			// 	el: '.swiper-scrollbar',
			// },
		});

    const swiper6 = new Swiper('.img_swiper6', {
			// Optional parameters
			direction: 'horizontal',
			loop: false,
      slidesPerView: 1,

			// If we need pagination
			pagination: {
				el: '.swiper-pagination6',
        clickable: true,
			},

			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next6',
				prevEl: '.swiper-button-prev6',
			},

			// And if we need scrollbar
			// scrollbar: {
			// 	el: '.swiper-scrollbar',
			// },
		});

    const swiper7 = new Swiper('.img_swiper7', {
			// Optional parameters
			direction: 'horizontal',
			loop: false,
      slidesPerView: 1,

			// If we need pagination
			pagination: {
				el: '.swiper-pagination7',
        clickable: true,
			},

			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next7',
				prevEl: '.swiper-button-prev7',
			},

			// And if we need scrollbar
			// scrollbar: {
			// 	el: '.swiper-scrollbar',
			// },
		});

    const swiper8 = new Swiper('.img_swiper8', {
			// Optional parameters
			direction: 'horizontal',
			loop: false,
      slidesPerView: 1,

			// If we need pagination
			pagination: {
				el: '.swiper-pagination8',
        clickable: true,
			},

			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next8',
				prevEl: '.swiper-button-prev8',
			},

			// And if we need scrollbar
			// scrollbar: {
			// 	el: '.swiper-scrollbar',
			// },
		});
	</script>

</body>

</html>
