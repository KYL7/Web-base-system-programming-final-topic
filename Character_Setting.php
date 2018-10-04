<?php 
include("list.php");
?>
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>角色介紹</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<style>
			body{
				background-image: -moz-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("./images/CS_bg.jpg");
				background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("./images/CS_bg.jpg");
				background-image: -ms-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("./images/CS_bg.jpg");
				background-image: linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("./images/CS_bg.jpg");
				background-attachment: fixed;
				background-position: center center;
				background-repeat: no-repeat;
				background-size: cover;
			}
		</style>
	</head>
	<body class="" style="background-color:transparent" >
		<!-- Page Wrapper -->
			<div id="page-wrapper">
				<?php 
				navbar();
				?>
				<!-- Main -->
				<section id="banner" style="background-color:transparent">
						<div class="inner">
							<h2><font color="#00DDAA" size="50">人	物	介	紹</font></h2>
							<p>最	有	趣	的	線 	上	遊	戲<br /></p>
							<a href="#two" class="more scrolly">更多</a>
						</div>
					</section>
					<article id="main-custom">
						<section id="two" class="wrapper alt style1 " style="background-color:transparent">
						<section class="spotlight">
							<div class="image">
								<img src="images/character1.jpg" alt="" style="height:300px;width:300px;margin-left:30%" />
							</div>
							<div class="content">
								<h3>閃	亮	嘎	波</h3>
								<li>性別：男</li>
									<li>夢想：成為海賊王、跟紅髮再度見面</li>
									<li>使用的武術：橡皮的身體</li>
									<li>優點：自信、坦率、誠實、運氣好，可以無條件地為同伴出生入死。</li>
									<li>缺點：食量過大、衝動、單純、頑固、遲鈍、無知、善忘及愚蠢</li>

							</div>
						</section>
						<hr />

						<section class="spotlight">
							<div class="image">
								<img src="images/character2.jpg" alt="" style="height:300px;width:300px;margin-left:30%" />
							</div>
							<div class="content">
								<h3>口	水	嘎	波</h3>
								<p>
									<li>性別：男</li>
									<li>夢想：到戰士之村艾爾帕布並成為勇敢的海上戰士</li>
									<li>使用的武器：彈弓和鐵鎚</li>
									<li>優點：百發百中的射擊能力，有藝術和發明家的天份。</li>
									<li>常說沒有人會信的謊話、愛吹牛、膽小、他的戰鬥能力是最差的一個。</li>
								</p>
							</div>
						</section>
						<hr />
						
						<section class="spotlight">
							<div class="image">
								<img src="images/character3.png" alt="" style="height:300px;width:300px;margin-left:30%" />
							</div>
							<div class="content">
								<h3>啾	咪	嘎	波</h3>
								<p>
									<li>性別：男</li>
									<li>夢想：找到全世界的海洋食材聚集的傳說之海「ALL BLUE」</li>
									<li>使用的武術：紅腳哲普傳授的腿法</li>
									<li>優點：超強的烹飪技巧、有紳士風度</li>
									<li>缺點：見到美女會失控</li>
								</p>
							</div>
						</section>
						<hr />

						<section class="spotlight">
							<div class="image">
								<img src="images/character4.jpg" alt="" style="height:300px;width:300px;margin-left:30%" />
							</div>
							<div class="content">
								<h3>Love	嘎	波</h3>
								<p>
									<li>性別：女 </li>
									<li>夢想：繪畫全世界的航海地圖</li>
									<li>使用的武器：天候棒</li>
									<li>優點：航海知識豐富、口才好和擅長偷竊</li>
									<li>缺點：貪錢、吝嗇和經常欺詐人</li>
								</p>
							</div>
						</section>
						<hr />

						<section class="spotlight">
							<div class="image">
								<img src="images/character5.png" alt="" style="height:300px;width:300px;margin-left:30%" />
							</div>
							<div class="content">
								<h3>淚	眼	嘎	波</h3>
								<p>
									<li>性別：男 </li>
									<li>夢想：製成萬能藥，做一個能治好所有病的醫生 </li>
									<li>使用的武術：人類果實的變形能力</li>
									<li>優點：懂得醫術、能和動物溝通、嗅覺比其他人靈敏</li>
									<li>缺點：單純、自卑、沒有自信、口是心非</li>
								</p>
							</div>
						</section>
						<hr />
					</article>
			</div>
			
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>