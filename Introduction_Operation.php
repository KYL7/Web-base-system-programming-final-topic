<?php 
include("list.php");
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>操作簡介</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<style>
			body{
				background-image: -moz-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("maxresdefault.jpg");
				background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("maxresdefault.jpg");
				background-image: -ms-linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("maxresdefault.jpg");
				background-image: linear-gradient(top, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("maxresdefault.jpg");
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
				<!-- Banner -->
				<section id="banner" style="background-color:transparent">
						<div class="inner">
							<h2><font color="#00DDAA" size="50">操	作	簡	介</font></h2>
							<p>輕	鬆	上	手	線 	上	遊	戲<br /></p>
							<a href="#two" class="more scrolly">更多</a>
						</div>
					</section>
				<!-- Main -->
						<article id="main-custom">
						<section id="two" class="wrapper alt style1 " style="background-color:transparent">
						<section class="spotlight">
						<div class="image">
								<img src="main@2x.png" alt="" style="height:300px;width:300px;margin-left:30%" />
							</div>
							<div class="content">
								<h3>移	動</h3>
								<li>上	下	左	右</li>
								<br>
								<h3>近	戰</h3>
								<li>A</li>
								<br/>
								<h3>遠	攻</h3>
								<li>S</li>
								<br/>
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