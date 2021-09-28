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
				<img src="/images/common/menu_icon.svg" alt="">
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
