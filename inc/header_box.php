<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<div class="header_inner row">
	<div class="right">
		<?php
		if ($str[1] == "") {
			echo '<h1 class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt=""></a></h1>';
		} else {
			echo '<p class="logo"><a href="/"><img src="/images/common/header_logo.svg" alt=""></a></p>';
		}
		?>
	</div>
	
	<div class="left">
		<div class="txt_cont">
			<p>2021.12.11<span>SAT</span> -12<span>SUN</span> <span>FREE</span></p>
			<p>OPEN.10:00 - CLOSE.17:00</p>
		</div>
		<div class="menu">
			<span>
				<!-- <img src="/images/common/menu_icon.svg" alt=""> -->
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 156.19 129.26">
					<defs>
						<style>.cls-1{fill:none;stroke:#000;stroke-linejoin:round;stroke-width:14.5px;}</style>
					</defs>
					<g id="Layer_2" data-name="Layer 2"><g id="レイヤー_1" data-name="レイヤー 1">
						<path class="cls-1" d="M155.72,10c-45-3-167.42-7.91-146,12S154,51.56,143.39,63.51,38.87,65.28,38.18,77.46s81.2,22.54,80.93,30.29c-.33,9.78-56.69,14.36-60.89,14.26"/></g>
					</g>
				</svg>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 156.19 129.26">
					<defs>
						<style>.cls-1-1{fill:none;stroke:#000;stroke-linejoin:round;stroke-width:14.5px;}</style>
					</defs>
					<g id="Layer_2" data-name="Layer 2"><g id="レイヤー_1" data-name="レイヤー 1">
						<path class="cls-1-1" d="M155.72,10c-45-3-167.42-7.91-146,12S154,51.56,143.39,63.51,38.87,65.28,38.18,77.46s81.2,22.54,80.93,30.29c-.33,9.78-56.69,14.36-60.89,14.26"/></g>
					</g>
				</svg>
			</span>
		</div>
	</div>

</div>

<div class="big_menu">
	<div class="overlay"></div>
	<div class="menu_cont">
		<div class="row">
			<div class="col">
				<p>2021.12.11<span>SAT</span><br>
				-12<span>SUN</span><span>FREE</span></p>
				<p>OPEN.10:00 - CLOSE.17:00</p>
				<img src="/images/common/header_img.png" alt="">
			</div>
			<div class="col">
				<nav>
					<ul>
						<li>
							<a href="">TOP</a>
						</li>
						<li>
							<a href="">SDFとは？</a>
						</li>
						<li>
							<a href="">トピックス</a>
						</li>
						<li>
							<a href="">出展作品</a>
						</li>
						<li>
							<a href="">ワークショップ</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="">ステージイベント</a>
						</li>
						<li>
							<a href="">サテライト会場</a>
						</li>
						<li>
							<a href="">動画配信スケジュール</a>
						</li>
						<li>
							<a href="">Global Sequencer</a>
						</li>
						<li>
							<a href="">アクセス</a>
						</li>
					</ul>
				</nav>
				<div class="sns_link">
					<a href=""><img src="/images/common/yt_icon.svg" alt=""><span>SDF2021 YouTube</span>チャンネル</a>
					<a href=""><img src="/images/common/date_icon.svg" alt="">イベントスケジュール</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="btn_reserve">
	<a href="#">
		<img src="/images/common/link_to_img.png" alt="">
	</a>
</div>