<?php 
 session_start();
 include("list.php");
 include("mysql_connect.php");
?>
<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>斗內(donate)我們</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<style>
			body{
				background-image: -moz-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("./images/sky3.jpg");
				background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("./images/sky3.jpg");
				background-image: -ms-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("./images/sky3.jpg");
				background-image: linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("./images/sky3.jpg");
				background-attachment: fixed;
				background-position: center center;
				background-repeat: no-repeat;
				background-size: cover;
				padding-top: 0;
			}
		</style>
	</head>
	<body class="" style="background-color:transparent">

<!-- Page Wrapper -->
			<div id="page-wrapper">
				<?php 
				navbar();
				?>
				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2><font color="#00DDAA" size="50">斗內(donate)我們</font></h2>
						</div>
						<a href="#one" class="more scrolly">更多</a>
					</section>
				

				<!-- Main -->
					
						<article id="main-custom">
						<section id="one" class="wrapper alt style1 " style="background-color:transparent">
						<section class="spotlight">
						<div class="image">
								<img src="images/donate.png" alt="" style="height:300px;width:300px;margin-left:30%" />
							</div>
							<div class="content">
								<h3>贊助方式</h3>
								<?php 
									if( @$_SESSION['name'] != null){
										echo	"<li><a href=\"https://www.alipay.com/\">支付寶</a></li>";
										echo	"<li><a href=\"https://www.allpay.com.tw/\">歐付寶</a></li>";
										echo	"<li><a href=\"https://www.paypal.com/tw/home\">Paypal</a></li>";
										echo	"<li><a href=\"http://www.8591.com.tw/\">8591</a></li>";
									}else{
										echo "<a href=\"./login.php\">請先登入</a>";
									}
								?>
							
							</div>
						</section>
						</section>

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