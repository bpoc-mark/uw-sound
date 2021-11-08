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
			<section class="sect_1 pc">
				<div class="wrapper">
					<div class="swiper img_swiper1 c-anim-up">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
						<img src="/images/top/section_1/main.jpg" alt="">
						</div>

						<div class="swiper-slide">
						<img src="/images/top/section_1/002.jpg" alt="">
						</div>

						<div class="swiper-slide">
						<img src="/images/top/section_1/003.jpg" alt="">
						</div>
						
                  	</div>
                	</div>
				</div>
			</section>

			<section class="sect_1 sp">
				<div class="wrapper">
					<div class="swiper img_swiper1 c-anim-up">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
						<img src="/images/top/section_1/sp/main.jpg" alt="">
						</div>

						<div class="swiper-slide">
						<img src="/images/top/section_1/sp/002.jpg" alt="">
						</div>

						<div class="swiper-slide">
						<img src="/images/top/section_1/sp/003.jpg" alt="">
						</div>
						
                  	</div>
                	</div>
				</div>
			</section>
			<section class="sect_2">
				<div class="wrapper">
					<div class="container">
						<div class="txt_header">
							<figure>
								<img class="pc" src="/images/top/section_2/oto.svg" alt="サウンドデザインフェスティバルin浜松2021">
								<img class="sp" src="/images/top/section_2/oto_sp.svg" alt="サウンドデザインフェスティバルin浜松2021">
							</figure>
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
								<p class="c-anim-up"><span class="sp">音</span>を通してつながるコミュニケーション。<br>
									モノと人、時間と空間、ローカルとリモート、自然と人工、<br class="pc">過去と今、今と未来、そして音と人。<br>
									つなげるモノは想像次第、つなげるカタチも創造次第。<br>
									様々なコミュニケーションのカタチに出逢う<br>
									サウンドデザインフェスティバル in 浜松2021。</p>
								<a href="/sdf/" class="link_btn c-anim-up">サウンドデザイン<br class="sp">フェスティバルとは？
									<div class="svg_cont">
									<svg class="btn_svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 956.29 610.64" ><path d="" transform="translate(-21.86 -20.32)"/></svg>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_3">
				<div class="wrapper">
					<div class="txt_header c-anim-up">
						<h3>TOPICS</h3>
						<a class="text_link" href="/topics/"><span>一覧はこちら</span></a>
					</div>
					<div class="pc">
						<!-- Slider main container -->
						<div class="swiper news_slider c-anim-up">
							<!-- Additional required wrapper -->
							<div class="swiper-wrapper">
								<!-- Slides -->

								<?php query_posts('order=DESC&posts_per_page=8&post_type=topics'); ?>
								<?php if ( have_posts() ) :	?>
								<?php while ( have_posts() ) : the_post(); ?>
								<div class="swiper-slide">
									<a href="<?php the_permalink(); ?>">
									<?php if(has_post_thumbnail()): ?>
									<figure><?php the_post_thumbnail('s-img'); ?></figure>
									<?php else: ?>
									<figure><img src="/images/common/noimage.jpg" alt="no image"></figure>
									<?php endif; ?>
										<div class="post_cont">
											<p class="post_date"><?php the_time('Y.m.d'); ?></p>
											<p class="post_title"><?php the_title(); ?></p>
										</div>
									</a>
								</div>
								<?php endwhile; ?>
								<?php endif; ?>
								<?php wp_reset_query(); ?>

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
								<?php query_posts('order=DESC&posts_per_page=4&post_type=topics'); ?>
								<?php if ( have_posts() ) :	?>
								<?php while ( have_posts() ) : the_post(); ?>

								<div class="col c-anim-up">
									<a href="<?php the_permalink(); ?>">
									<?php if(has_post_thumbnail()): ?>
									<figure><?php the_post_thumbnail('s-img'); ?></figure>
									<?php else: ?>
									<figure><img src="/images/common/noimage.jpg" alt="no image"></figure>
									<?php endif; ?>
										<div class="post_cont">
											<p class="post_date"><?php the_time('Y.m.d'); ?></p>
											<p class="post_title"><?php the_title(); ?></p>
										</div>
									</a>
								</div>

								<?php endwhile; ?>
								<?php endif; ?>
								<?php wp_reset_query(); ?>

							
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
								<a href="https://www.youtube.com/channel/UCC3ltT2lGbSh54CF8rqJrbw" target="_blank">
									<img class="pc" src="/images/top/section_4/1.jpg" alt="">
									<img class="sp" src="/images/top/section_4/1_sp.jpg" alt="">
								</a>
							</div>
							<div class="col">
								<ul class="c-anim-up">
									<li>
										<a class="link_btn" href="https://www.youtube.com/channel/UCC3ltT2lGbSh54CF8rqJrbw" target="_blank">
											<span>SFD2021 <br class="pc">Youtube</span>
											チャンネル
											<div class="svg_cont">
											<svg class="btn_svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 956.29 610.64" ><path d="" transform="translate(-21.86 -20.32)"/></svg>
											</div>
										</a>
									</li>
									<li>
										<a  class="link_btn" href="/video_schedule/">
											動画配信<br class="pc">
											スケジュール
											<div class="svg_cont">
											<svg class="btn_svg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 956.29 610.64" ><path d="" transform="translate(-21.86 -20.32)"/></svg>
											</div>
										</a>
									</li>
								</ul>
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

	<!-- <script>
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
	</script> -->

	<script>
		setTimeout(function(){
			const swiper1 = new Swiper('.img_swiper1', {
				direction: 'horizontal',
				effect: "fade", //フェードのエフェクト
				loop: true,
				speed: 1500,
				autoplay: {
				delay: 2000, //４秒後に次の画像へ
				disableOnInteraction: false //ユーザー操作後に自動再生を再開する
				},
			});
		}, 1500);


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
					spaceBetween: 36,
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

	<!-- <script>
		function menu_btn(){
			const POINTS_COUNT = 8;
			const MAX_Y = 200
			const WIDTH = 600
			const HEIGHT = 400
			const EASE = 0.4
			const SPEED = 0.002
			const WAVE_SCALE = (1 / Math.PI) * 1.5

			/**
			 * 0〜1と-1〜0の乱数で交互に埋めた値配列を生成します
			 */
			const generateValues = () => {
				// return new Array(POINTS_COUNT + 1)
				// 	.fill(0)
				// 	.map((_, index) => Math.random() * ((index % 2) ? 1 : -1))

				return new Array(POINTS_COUNT).fill(0).map((_, index) => {
					const x = index / POINTS_COUNT // x座標(0-1)
					const yBase = index % 2 === 0 ? 1 : -1 // y座標(-1と1を交互に設定)
					const y = Math.sin(x / WAVE_SCALE - this.time * SPEED) * yBase // sin波を掛ける
					return y
				})
			}

			const valuesToPathStr = (values) => {
				// if (!values.length) { console.log('no lenth'); return 'M0,0' }
				// const points = values.map((y, x) => ({
				// 	x: x / (POINTS_COUNT - 1) * WIDTH,
				// 	y: y * MAX_Y + HEIGHT / 2
				// }))
				// const p0 = points.shift()
				// const controlX = WIDTH / (POINTS_COUNT - 1) * EASE
				// // 全ての座標に制御点を追加しながら曲線（三次ベジェ曲線）を描画するための文字列を生成
				// return `M${p0.x},${p0.y} S` +
				// 	points.map(p => `${p.x - controlX},${p.y} ${p.x},${p.y}`).join(' ')

				if (!values.length) { return 'M0,0' }
				const points = values.map((y, x) => ({ x: x / (POINTS_COUNT - 1) * WIDTH, y: y * MAX_Y + HEIGHT / 2 }))
				const firstPoint = points.shift()
				const controlX = WIDTH / (POINTS_COUNT - 1) * EASE
				return `M${firstPoint.x},${firstPoint.y} S` +
					points.map(p => `${p.x - controlX},${p.y} ${p.x},${p.y}`).join(' ')
			}
			// let execount = 0;
			// let exe = setInterval(function() {
			// 	let values = generateValues();
			// 	let pathStr = valuesToPathStr(values);
			// 	document.querySelector('.svgtest').setAttribute("d", pathStr);
			// }, 2000);

			const startTime = Date.now()
			const update = () => {
			this.time = Date.now() - startTime
				requestAnimationFrame(update);
				let values = generateValues();
				let pathStr = valuesToPathStr(values);
				document.querySelector('.svg_menu_btn').setAttribute("d", pathStr);
			}
			update()
		}
		menu_btn();

		function index_btn(){
			const POINTS_COUNT = 4;
			const MAX_Y = 200
			const WIDTH = 600
			const HEIGHT = 400
			const EASE = 0.4
			const SPEED = 0.002
			const WAVE_SCALE = (1 / Math.PI) * 50

			/**
			 * 0〜1と-1〜0の乱数で交互に埋めた値配列を生成します
			 */
			const generateValues = () => {
				// return new Array(POINTS_COUNT + 1)
				// 	.fill(0)
				// 	.map((_, index) => Math.random() * ((index % 2) ? 1 : -1))

				return new Array(POINTS_COUNT).fill(0).map((_, index) => {
					const x = index / POINTS_COUNT // x座標(0-1)
					const yBase = index % 2 === 0 ? 1 : -1 // y座標(-1と1を交互に設定)
					const y = Math.sin(x / WAVE_SCALE - this.time * SPEED) * yBase // sin波を掛ける
					return y
				})
			}

			const valuesToPathStr = (values) => {
				// if (!values.length) { console.log('no lenth'); return 'M0,0' }
				// const points = values.map((y, x) => ({
				// 	x: x / (POINTS_COUNT - 1) * WIDTH,
				// 	y: y * MAX_Y + HEIGHT / 2
				// }))
				// const p0 = points.shift()
				// const controlX = WIDTH / (POINTS_COUNT - 1) * EASE
				// // 全ての座標に制御点を追加しながら曲線（三次ベジェ曲線）を描画するための文字列を生成
				// return `M${p0.x},${p0.y} S` +
				// 	points.map(p => `${p.x - controlX},${p.y} ${p.x},${p.y}`).join(' ')

				if (!values.length) { return 'M0,0' }
				const points = values.map((y, x) => ({ x: x / (POINTS_COUNT - 1) * WIDTH, y: y * MAX_Y + HEIGHT / 2 }))
				const firstPoint = points.shift()
				const controlX = WIDTH / (POINTS_COUNT - 1) * EASE
				return `M${firstPoint.x},${firstPoint.y} S` +
					points.map(p => `${p.x - controlX},${p.y} ${p.x},${p.y}`).join(' ')
			}
			// let execount = 0;
			// let exe = setInterval(function() {
			// 	let values = generateValues();
			// 	let pathStr = valuesToPathStr(values);
			// 	document.querySelector('.svgtest').setAttribute("d", pathStr);
			// }, 2000);

			const startTime = Date.now()
			const update = () => {
			this.time = Date.now() - startTime
				requestAnimationFrame(update);
				let values = generateValues();
				let pathStr = valuesToPathStr(values);
				var btn = document.querySelectorAll('.svg_btn')
				for (let i = 0; i < btn.length; i++) {
					btn[i].setAttribute("d", pathStr);
				}
			}
			update()
		}
		index_btn();

	</script> -->

	<!-- <script>
		let count = 0;
		const SPEED = 0.002
		const btn_layer = document.querySelector(".cls-1");
		const startTime = Date.now()
		const update = () => {
			this.time = Date.now() - startTime
			btn_layer.setAttribute("d", "M 616.23 2379.81 H 660 s 52.53 "+ Math.sin(4.44 - 1 - this.time) +" 78.64 0 c 27.92 0 121.28 0 178.72 0 c 62 0 76.64 0 131.64 0 s 81.36 0 133 0 c 20.86 0 29 0 83 0");
			// requestAnimationFrame(update)
		}
		// update()

		let time = setInterval(function() {
			count++;
			
			if(count % 2 === 0){
				update();
			}else{
				btn_layer.setAttribute("d", "M616.23,2379.81H660s52.53,4.44,78.64-80.17c27.92-90.46,121.28-152.93,178.72,3.32,62,168.54,85.45,248.59,147.41,247.09s81.36-71.49,100-111.51c20.86-44.8,29.87-57.43,99.57-57.43");
			}
			
		}, 2000);

		var myFunc01 = function() {
			var i = 0.0;
			while (i < 4.4) {
				(function(i) {
				setTimeout(function() {
					// document.getElementById('d01').innerHTML += 100 - i + "<br>";
					console.log(i);
				}, 75 * i)
				})(i += 0.1)
			}
		};

		setTimeout( function(){ 
			myFunc01();
		}  , 3000 );
		
	</script> -->

</body>

</html>