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
	<meta property="og:type" content="website" /> <!-- 下層では「article」にしてください -->
	<meta property="og:description" content="<?php echo DESCRIPTION ?>" />
	<meta property="og:url" content="<?php echo CANONICAL ?>" />

	<title><?php echo SITE_NAME ?></title>

	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Top">
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
	<div id="AllBox">
		<header>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
		</header>

		<main>
			<section class="sect_1">
				<div class="wrapper">
					<img src="/images/top/section_1/main.png" alt="">
				</div>
			</section>
			<section class="sect_2">
				<div class="wrapper">
					<div class="container">
						<div class="txt_header">
							<p class="c-anim-up" id="curve_txt">サウンドデザインフェスティバル</p>
							<p class="c-anim-up">in <span>浜松</span>2021</p>
							<h3 class="c-anim-up">音</h3>
						</div>
						<div class="row">
							<div class="col">
								<p class="c-anim-up">
									<span>と創る</span><br>
									<span>コミュニ</span><br>
									<span>ケーション</span><br>
									<span>のカタチ</span>
								</p>
							</div>
							<div class="col">
								<p class="c-anim-up">を通してつながるコミュニケーション。<br>
									モノと人、時間と空間、ローカルとリモート、自然と人工、<br class="pc">過去と今、今と未来、そして音と人。<br>
									つなげるモノは想像次第、つなげるカタチも創造次第。<br>
									様々なコミュニケーションのカタチに出逢う<br>
									サウンドデザインフェスティバル in 浜松2021。</p>
								<a href="" class="c-anim-up">SDFとは？
									<div class="svg_cont">
										<svg class="btn_layer" data-name="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.4 41.57"><defs><style>.btn_layer{fill:none;stroke:#000;stroke-linejoin:round;stroke-width:8px;}</style></defs><path class="btn_layer" d="M468.21,138.29s5-17,8-21.8,8.45-6.58,13.8,0c4.38,5.38,5.41,14.63,6.17,17.23s3.45,12.05,10.51,12S517,134.56,518,131.56s3.4-15.16,9.62-18.85c3.79-2.24,10.84.76,14.33,13.35,1.72,6.22,2.38,15.39,9.36,19.15,1.45.78,5.64,1.61,9.4-3.33s5.25-11.87,5.52-13" transform="translate(-464.37 -108.03)"/></svg>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_3">
				<div class="wrapper">
					<div class="txt_header">
						<h3 class="c-anim-up">TOPICS</h3>
						<a href="" class="c-anim-up">一覧はこちら</a>
					</div>
					<div class="pc">
						<!-- Slider main container -->
						<div class="swiper news_slider c-anim-up">
							<!-- Additional required wrapper -->
							<div class="swiper-wrapper">
								<!-- Slides -->
								<div class="swiper-slide">
									<a href="">
										<img src="/images/top/section_3/1.png" alt="">
										<div class="post_cont">
											<p class="post_date">2017.12.07</p>
											<p class="post_title">ただいま会場設営中！開催までもうすぐです</p>
										</div>
									</a>
								</div>
								<div class="swiper-slide">
									<a href="">
										<img src="/images/top/section_3/2.png" alt="">
										<div class="post_cont">
											<p class="post_date">2017.12.07</p>
											<p class="post_title">【お知らせ】オリジナル曲作りのワークショップ申込み受付は終了しました。</p>
										</div>
									</a>
								</div>
								<div class="swiper-slide">
									<a href="">
										<img src="/images/top/section_3/3.png" alt="">
										<div class="post_cont">
											<p class="post_date">2017.12.07</p>
											<p class="post_title">必見！会場マップとタイムスケジュールを公開しました！</p>
										</div>
									</a>
								</div>
								<div class="swiper-slide">
									<a href="">
										<img src="/images/top/section_3/4.png" alt="">
										<div class="post_cont">
											<p class="post_date">2017.12.07</p>
											<p class="post_title">おいしい人気店が続々！会場内飲食スペースの出店情報を紹介</p>
										</div>
									</a>
								</div>
							</div>
							<!-- If we need pagination -->
							<!-- <div class="swiper-pagination"></div> -->

							<!-- If we need scrollbar -->
							<!-- <div class="swiper-scrollbar"></div> -->
						</div>
						<!-- If we need navigation buttons -->
						<div class="swiper-button-prev"></div>
						<div class="swiper-button-next"></div>
					</div>
					<div class="sp">
						<div class="row">
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
									<img src="/images/top/section_3/4.png" alt="">
									<div class="post_cont">
										<p class="post_date">2017.12.07</p>
										<p class="post_title">おいしい人気店が続々！会場内飲食スペースの出店情報を紹介</p>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_4">
				<div class="wrapper">
					<div class="container">
						<div class="row">
							<div class="col">
								<h3 class="c-anim-up"><span>SDF2021</span> 動画配信</h3>
								<p class="c-anim-up">音の可能性を探求するイベント「サウンドデザインフェスティバル in 浜松2021」の実施報告動画です。</p>
							</div>
							<div class="col c-anim-up">
								<img src="/images/top/section_4/1.png" alt="">
							</div>
							<div class="col">
								<ul class="c-anim-up">
									<li>
										<a href="">
											<span>SFD2021 <br class="pc">Youtube</span>
											チャンネル
											<div class="svg_cont">
												<svg class="btn_layer" data-name="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.4 41.57"><defs><style>.btn_layer{fill:none;stroke:#000;stroke-linejoin:round;stroke-width:8px;}</style></defs><path class="btn_layer" d="M468.21,138.29s5-17,8-21.8,8.45-6.58,13.8,0c4.38,5.38,5.41,14.63,6.17,17.23s3.45,12.05,10.51,12S517,134.56,518,131.56s3.4-15.16,9.62-18.85c3.79-2.24,10.84.76,14.33,13.35,1.72,6.22,2.38,15.39,9.36,19.15,1.45.78,5.64,1.61,9.4-3.33s5.25-11.87,5.52-13" transform="translate(-464.37 -108.03)"/></svg>
											</div>
										</a>
									</li>
									<li>
										<a href="">
											動画配信<br class="pc">
											スケジュール
											<div class="svg_cont">
												<svg class="btn_layer" data-name="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.4 41.57"><defs><style>.btn_layer{fill:none;stroke:#000;stroke-linejoin:round;stroke-width:8px;}</style></defs><path class="btn_layer" d="M468.21,138.29s5-17,8-21.8,8.45-6.58,13.8,0c4.38,5.38,5.41,14.63,6.17,17.23s3.45,12.05,10.51,12S517,134.56,518,131.56s3.4-15.16,9.62-18.85c3.79-2.24,10.84.76,14.33,13.35,1.72,6.22,2.38,15.39,9.36,19.15,1.45.78,5.64,1.61,9.4-3.33s5.25-11.87,5.52-13" transform="translate(-464.37 -108.03)"/></svg>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="video_modal">
					<div class="overlay"></div>
					<div class="video_frame">
						<div class="btn_modal_close"></div>
						<iframe width="100%" height="315" src="https://www.youtube.com/embed/yHszIjviOFA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
		$(window).on('load resize', function() {
			var w = $(window).width();
			if (w < 900) {
				new CircleType(document.getElementById('curve_txt'))
					.radius(170);
			} else {
				new CircleType(document.getElementById('curve_txt'))
					.radius(200);
				$('.post_cont').matchHeight();
			}
		});
	</script>

	<script>
		const swiper = new Swiper('.news_slider', {
			// Optional parameters
			direction: 'horizontal',
			loop: true,

			// If we need pagination
			// Responsive breakpoints
			breakpoints: {
				// when window width is >= 320px
				900: {
					slidesPerView: 3.25,
					spaceBetween: 40,
				},
				0: {
					// swiper.destroy();
					init: false,
					enable: false,
				},
			},

			// If we need pagination
			pagination: {
				el: '.swiper-pagination',
			},

			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			// And if we need scrollbar
			// scrollbar: {
			// 	el: '.swiper-scrollbar',
			// },
		});
	</script>

	<script>
		const btn_layer = document.querySelectorAll(".btn_layer");

		function updateviewbox(elem, count) {
			elem.setAttribute("viewBox", count + " 0 55.4 41.57");
		}

		let count = 0;
		let time = setInterval(function() {
			count++;
			if (count === 48 ) {
				count = 0;
			}
			for (let i = 0; i < btn_layer.length; i++) {
				updateviewbox(btn_layer[i], count);
			}
		}, 30);
	</script>

	<!-- <script>
		const layer2 = document.querySelector(".Layer_2");

		function updatepath(elem, count) {
			// elem.setAttribute("viewBox", "0 " + count +  " 172.19 131.26");
		}

		let count1 = 0;
		let time1 = setInterval(function() {
			count1++;
			console.log(count1);
			if (count1 === 96 ) {
				count1 = 0;
			}
			updatepath(layer2, count1);
		}, 30);
	</script> -->

</body>

</html>