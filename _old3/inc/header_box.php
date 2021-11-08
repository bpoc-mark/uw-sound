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
			<img class="pc" src="/images/common/header_period.svg" alt="2021.12.11sat-12sun free open.10:00-close.17:00">
			<img class="sp" src="/images/common/header_period_sp.svg" alt="2021.12.11sat-12sun free open.10:00-close.17:00">
		</div>
		<div class="menu">
			<span>
				<!-- <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 171.48 895.36">
					<path d="M2350,492.73h-32.72c10.16,3,18.21,6.28,21.84,9.66a23.08,23.08,0,0,1,1.63,1.65c-2.69,1-9,2.3-23.08,2.49-13.83.18-31-.78-46.27-1.79v-.09c-61.12-4.07-80.2-2-85.09,9.36-2.44,5.65-.23,11.71,6.55,18,11.61,10.78,42.49,17.57,84.85,26,12,2.38,26.79,5.32,37,8-11.19,1.29-27.71,1.61-39.12,1.83-36,.69-55.83,1.07-56.56,13.92-.69,12.22,17.61,17.31,52.74,26,7,1.73,15.67,3.86,21.94,5.74a96.31,96.31,0,0,1-18.46,2h-2.49a6,6,0,0,0-1.2.1,151,151,0,0,0-19.67,2.42c-10.33,2-24.09,5.91-24.46,16.66-.27,7.8,9,10.74,15.19,12.69,6.44,2,15,4.14,24,6.37,9.68,2.38,25.3,6.23,34.78,9.73-9.51,1.08-24.46,1.36-35.48,1.57-37.26.71-54.29,1.8-61,9.31a9.14,9.14,0,0,0-2,9.16c2.73,8.13,14.21,11.25,58.28,20,18.06,3.6,40.29,8,56.73,13h32.22q-.57-.59-1.2-1.17c-11.61-10.79-42.52-17.6-84.92-26.05-11.91-2.38-26.63-5.31-36.81-8,11.17-1.27,27.58-1.59,38.93-1.8,36-.68,55.91-1.06,56.64-13.91.69-12.23-17.61-17.31-52.73-26-7.15-1.76-16-3.93-22.25-5.84a124.12,124.12,0,0,1,25.14-3.82h2a126.17,126.17,0,0,0,17.68-1.52c5.29-.89,21.4-3.61,21.81-15.73.27-7.8-9-10.75-15.19-12.69-6.44-2-15-4.14-24-6.37-9.68-2.39-25.3-6.24-34.78-9.74,9.49-1.08,24.41-1.36,35.41-1.57,36.48-.7,54.4-1.85,61-9.37a9.18,9.18,0,0,0,2-9.17c-2.74-8.14-14.24-11.25-58.34-20-28.83-5.73-68.32-13.58-77.82-22.4a23.63,23.63,0,0,1-1.72-1.75c2.67-.92,8.83-2.22,22.51-2.39,13.45-.18,29.81.75,45.61,1.79v.09c18.58,1.24,33.38,1.9,45.13,1.9,26.94,0,37.77-3.47,41.18-11.38C2357.7,504.3,2355.88,498.61,2350,492.73Z" transform="translate(-2184.92 -492.73)"/>
					<path d="M2350,716.66h-32.72c10.16,3,18.21,6.28,21.84,9.66.57.52,1.11,1.08,1.63,1.65-2.69,1-9,2.3-23.08,2.49-13.83.18-31-.78-46.27-1.79v-.09c-61.12-4.07-80.2-2-85.09,9.36-2.44,5.65-.23,11.71,6.55,18,11.61,10.78,42.49,17.57,84.85,26,12,2.38,26.79,5.32,37,8-11.19,1.29-27.71,1.61-39.12,1.83-36,.69-55.83,1.07-56.56,13.92-.69,12.22,17.61,17.31,52.74,26,7,1.73,15.67,3.86,21.94,5.74a94.75,94.75,0,0,1-18.46,2h-2.49a6.86,6.86,0,0,0-1.2.1A153.13,153.13,0,0,0,2251.9,842c-10.33,2-24.09,5.91-24.46,16.66-.27,7.8,9,10.74,15.19,12.69,6.44,2,15,4.14,24,6.37,9.68,2.38,25.3,6.23,34.78,9.73-9.51,1.08-24.46,1.36-35.48,1.57-37.26.71-54.29,1.8-61,9.31a9.14,9.14,0,0,0-2,9.16c2.73,8.13,14.21,11.25,58.28,20,18.06,3.6,40.29,8,56.73,13h32.22l-1.2-1.17c-11.61-10.79-42.52-17.6-84.92-26-11.91-2.38-26.63-5.31-36.81-8,11.17-1.27,27.58-1.59,38.93-1.8,36-.68,55.91-1.06,56.64-13.91.69-12.23-17.61-17.31-52.73-26-7.15-1.76-16-3.93-22.25-5.84a125.65,125.65,0,0,1,25.14-3.82h2a124.68,124.68,0,0,0,17.68-1.52c5.29-.89,21.4-3.61,21.81-15.73.27-7.8-9-10.75-15.19-12.69-6.44-2-15-4.14-24-6.37-9.68-2.39-25.3-6.24-34.78-9.74,9.49-1.08,24.41-1.36,35.41-1.57,36.48-.7,54.4-1.85,61-9.37a9.15,9.15,0,0,0,2-9.17c-2.74-8.14-14.24-11.25-58.34-20-28.83-5.73-68.32-13.58-77.82-22.4a23.67,23.67,0,0,1-1.72-1.75c2.67-.92,8.83-2.22,22.51-2.39,13.45-.18,29.81.75,45.61,1.79V743c18.58,1.24,33.38,1.9,45.13,1.9,26.94,0,37.77-3.47,41.18-11.38C2357.74,728.23,2355.92,722.54,2350,716.66Z" transform="translate(-2184.92 -492.73)"/><path d="M2399.12,752.51" transform="translate(-2184.92 -492.73)"/>
					<path d="M2349.58,940.38h-32.72c10.16,3,18.21,6.28,21.84,9.66a23.08,23.08,0,0,1,1.63,1.65c-2.69,1-9,2.3-23.08,2.49-13.83.18-31-.78-46.27-1.79v-.09c-61.12-4.07-80.2-2-85.09,9.36-2.44,5.65-.23,11.71,6.55,18,11.61,10.78,42.49,17.57,84.85,26,12,2.38,26.79,5.32,37,8-11.19,1.29-27.71,1.61-39.12,1.83-36,.69-55.83,1.07-56.56,13.92-.69,12.22,17.61,17.31,52.74,26,7,1.73,15.67,3.86,21.94,5.74a96.31,96.31,0,0,1-18.46,2h-2.49a6,6,0,0,0-1.2.1,151,151,0,0,0-19.67,2.42c-10.33,2-24.09,5.91-24.46,16.66-.27,7.8,9,10.74,15.19,12.69,6.44,2,15,4.14,24,6.37,9.68,2.38,25.3,6.23,34.78,9.73-9.51,1.08-24.46,1.36-35.48,1.57-37.26.71-54.29,1.8-61,9.31a9.14,9.14,0,0,0-2,9.16c2.73,8.13,14.21,11.25,58.28,20,18.06,3.6,40.29,8,56.73,13h32.22q-.57-.59-1.2-1.17c-11.61-10.79-42.52-17.6-84.92-26-11.91-2.38-26.63-5.31-36.81-8,11.17-1.27,27.58-1.59,38.93-1.8,36-.68,55.91-1.06,56.64-13.91.69-12.23-17.61-17.31-52.73-26-7.15-1.76-16-3.93-22.25-5.84a124.12,124.12,0,0,1,25.14-3.82h2a126.17,126.17,0,0,0,17.68-1.52c5.29-.89,21.4-3.61,21.81-15.73.27-7.8-9-10.75-15.19-12.69-6.44-2-15-4.14-24-6.37-9.68-2.39-25.3-6.24-34.78-9.74,9.49-1.08,24.41-1.36,35.41-1.57,36.48-.7,54.4-1.85,61-9.37a9.18,9.18,0,0,0,2-9.17c-2.74-8.14-14.24-11.25-58.34-20-28.83-5.73-68.32-13.58-77.82-22.4a23.63,23.63,0,0,1-1.72-1.75c2.67-.92,8.83-2.22,22.51-2.39,13.45-.18,29.81.75,45.61,1.79v.09c18.58,1.24,33.38,1.9,45.13,1.9,26.94,0,37.77-3.47,41.18-11.38C2357.31,952,2355.49,946.26,2349.58,940.38Z" transform="translate(-2184.92 -492.73)"/>
					<path d="M2349.62,1164.31H2316.9c10.16,3,18.21,6.28,21.84,9.66a23.08,23.08,0,0,1,1.63,1.65c-2.69,1-9,2.3-23.08,2.49-13.83.18-31-.78-46.27-1.79v-.09c-61.12-4.07-80.2-2-85.09,9.36-2.44,5.65-.23,11.71,6.55,18,11.61,10.78,42.49,17.57,84.85,26,12,2.38,26.79,5.32,37,8-11.19,1.29-27.71,1.61-39.12,1.83-36,.69-55.83,1.07-56.56,13.92-.69,12.22,17.61,17.31,52.74,26,7,1.73,15.67,3.86,21.94,5.74a96.31,96.31,0,0,1-18.46,2h-2.49a6.86,6.86,0,0,0-1.2.1,152.92,152.92,0,0,0-19.67,2.42c-10.33,2-24.09,5.91-24.46,16.66-.27,7.8,9,10.74,15.19,12.69,6.44,2,15,4.14,24,6.37,9.68,2.38,25.3,6.23,34.78,9.73-9.51,1.08-24.46,1.36-35.48,1.57-37.26.71-54.29,1.8-61,9.31a9.14,9.14,0,0,0-2,9.16c2.73,8.13,14.21,11.25,58.28,20,18.06,3.6,40.29,8,56.73,13h32.22l-1.2-1.17c-11.61-10.79-42.52-17.6-84.92-26.05-11.91-2.38-26.63-5.31-36.81-8,11.17-1.27,27.58-1.59,38.93-1.8,36-.68,55.91-1.06,56.64-13.91.69-12.23-17.61-17.31-52.73-26-7.15-1.76-16-3.93-22.25-5.84a125.65,125.65,0,0,1,25.14-3.82h2a124.68,124.68,0,0,0,17.68-1.52c5.29-.89,21.4-3.61,21.81-15.73.27-7.8-9-10.75-15.19-12.69-6.44-2-15-4.14-24-6.37-9.68-2.39-25.3-6.24-34.78-9.74,9.49-1.08,24.41-1.36,35.41-1.57,36.48-.7,54.4-1.85,61-9.37a9.16,9.16,0,0,0,2-9.17c-2.74-8.14-14.24-11.25-58.34-20-28.83-5.73-68.32-13.58-77.82-22.4a23.67,23.67,0,0,1-1.72-1.75c2.67-.92,8.83-2.22,22.51-2.39,13.45-.18,29.81.75,45.61,1.79v.09c18.58,1.24,33.38,1.9,45.13,1.9,26.94,0,37.77-3.47,41.18-11.38C2357.35,1175.88,2355.53,1170.19,2349.62,1164.31Z" transform="translate(-2184.92 -492.73)"/>
					<path d="M2398.73,1200.16" transform="translate(-2184.92 -492.73)"/>
				</svg> -->
				<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 156.19 129.26">
					<defs><style>.cls-1{fill:none;stroke-linejoin:round;stroke-width:14.5px;}</style></defs>
					<g id="Layer_2" data-name="Layer 2"><g id="レイヤー_1" data-name="レイヤー 1"><path class="cls-1" d="M155.72,10c-45-3-167.42-7.91-146,12S154,51.56,143.39,63.51,38.87,65.28,38.18,77.46s81.2,22.54,80.93,30.29c-.33,9.78-56.69,14.36-60.89,14.26"/></g></g>
				</svg>

				<svg style="display:none;" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 600 400" >
					<path class="svg_menu_btn" d="" stroke="#000000" stroke-width="56" fill="none" />
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
				<!-- <p>2021.12.11<span>SAT</span><br>
				-12<span>SUN</span><span>FREE</span></p>
				<p>OPEN.10:00 - CLOSE.17:00</p> -->
				<div class="period">
					<img class="pc" src="/images/common/nav_period.svg" alt="">
					<img class="sp" src="/images/common/nav_period.svg" alt="">
				</div>
				<img class="pc" src="/images/common/header_img.jpg" alt="">
				<img class="sp" src="/images/common/header_img_sp.jpg" alt="">
			</div>
			<div class="col">
				<nav>
					<ul>
						<li>
							<a href="/">TOP</a>
						</li>
						<li>
							<a href="/sdf/">サウンドデザイン<br>フェスティバルとは？</a>
						</li>
						<li>
							<a href="/topics/">トピックス</a>
						</li>
						<li>
							<a href="/source_work/">出展作品</a>
						</li>
						<li>
							<a href="/workshop/">ワークショップ</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="/event/">ステージイベント</a>
						</li>
						<li>
							<a href="/satellite/">サテライト会場</a>
						</li>
						<li>
							<a href="/video_schedule/">動画配信スケジュール</a>
						</li>
						<li>
							<a href="/global/">Global Sequencer</a>
						</li>
						<li>
							<a href="/access/">アクセス</a>
						</li>
					</ul>
				</nav>
				<div class="sns_link">
					<a href="https://www.youtube.com/channel/UCC3ltT2lGbSh54CF8rqJrbw" target="_blank"><img src="/images/common/yt_icon.svg" alt=""><span>SDF2021 YouTube</span>チャンネル</a>
					<a href="/pdf/sdf2021_schedule.pdf" target="_blank"><img src="/images/common/date_icon.svg" alt="">イベントスケジュール</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="btn_reserve">
	<a href="/pdf/sdf2021_schedule.pdf" target="_blank">
		<img src="/images/common/link_to_img.png" alt="">
	</a>
</div>