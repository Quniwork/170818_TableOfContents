<html class="first zh-cn">

<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="stylesheet" href="css/style.css">
	<!-- Share core Javascript -->
	<script src="../template/js/jquery.js"></script>
</head>

<body>
	<!--mainBody-->
	<div id="mainBody">
		<!--page-header-->
		<div id="page-header">
			<div class="page-wrap">
				<div class="logo"><a href="index.php"><img src="image/logo.png" /></a></div>
				<!--mainnav-->
				<div class="mainnav" data-lsub-x="172" data-lsub-y="-40">
					<ul class="nav">
						<li id="LS-first" class="LS-first current"><a href="index.php"><span>首頁</span></a></li>
						<li id="LS-ball" class="LS-ball"><a href="#"><span>体育赛事</span></a>
							<div id="nav-ball" class="ele-drop-group" style="display:none">
								<div class="lsub-inner-wrap">
									<a v-for="ball in balls" :href="ball.link">{{ball.name}}</a>
								</div>
							</div>
						</li>
						<li id="LS-live" class="LS-live"><a href="live.php"><span>视讯直播</span></a></li>
						<li id="LS-game" class="LS-game"><a href="#"><span>电子游艺</span></a>
							<div id="nav-game" class="ele-drop-group" style="display:none">
								<div class="lsub-inner-wrap">
									<a v-for="game in games" :href="game.link">{{game.name}}</a>
								</div>
							</div>
						</li>
						<li id="LS-lottery" class="LS-lottery"><a href="lottery.php"><span>彩票游戏</span></a></li>
						<li id="LS-memberexclusiveii" class="LS-memberexclusiveii"><a href="promotions.php"><span>优惠活动</span></a></li>
						<li id="LS-mobile" class="LS-mobile"><a href="#"><span>手机下注</span></a></li>
						<li id="LS-service" class="LS-service"><a href="#"><span>在线客服</span></a></li>
					</ul>
				</div>
				<!--end mainnav-->

				<!--login-->
				<div id="login">
					<div class="member-btn"><img src="image/member_btn.png" /></div>
					<div class="login-wrap">
						<form class="login-input form-group">
							<input type="text" placeholder="帐号" class="form-control name">
							<input type="text" placeholder="密码" class="form-control password">
							<input type="text" placeholder="验证码" class="form-control key">
							<a class="login-btn btn-submit" href="index_login.php">登入</a>
						</form>
						<div class="login-btn-wrap">
							<ul>
								<li><a href="#" class="login-btn btn-joinus">忘记密码</a></li> |
								<li><a href="#" class="getPW">加入会员</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!--end login-->

				<!--lang-wrap -->
				<div id="lang-wrap" class="lang-wrap">
					<div id="ele-lang-wrap" class="langTitle">
						<a href="#" class="flag02">简体中文</a>
					</div>
					<div id="ele-lang-group" class="langOption" style="display: none;">
						<a href="#" class="zh-tw flag01">繁體中文</a>
						<a href="#" class="zh-tw flag02">简体中文</a>
						<a href="#" class="en flag03">ENGLISH</a>
					</div>
				</div>
				<!--end lang-wrap -->

				<!--slideshow-->
				<div id="js-ele-slideshow" class="ele-slideshow-wrap" onselectstart="return false;">
		            <div class="js-ele-slideshow-scroll ele-slideshow-scroll">
		                <ul>
		                    <li data-autoplaytime="5000">
		                        <a href="#">
		                            <div class="img" style="background-image: url('image/not-use/slider01.png');"></div>
		                        </a>
		                    </li>
		                    <li data-autoplaytime="5000">
		                        <a href="#">
		                            <div class="img" style="background-image: url('image/not-use/slider02.png');"></div>
		                        </a>
		                    </li>
		                </ul>
		            </div>
		        </div>
		        <!--end slideshow-->
			</div>
		</div>
		<!--end page-header-->

		<!--page-container-->
		<div id="page-container">
			<div class="page-wrap">
				<div id="news" class="news">
					<div class="news-title"><img src="image/lang/zh-cn/news_title.png"></div>
					<marquee id="ele-msgNews" class="msgNews" behavior="scroll" scrollamount="5" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
						<p>两岸三地最热门的机台游戏，结合4层Jackpot累积彩金玩法，移植到你的计算机里！在家就可以等待从天而降的彩金，你还在等什么？</p>
					</marquee>
				</div>
				<!--end news-->

				<!--fitst-game-->
				<div class="first-game">
					<a href="sports.php" class="first-game01"></a>
					<a href="live.php" class="first-game02"></a>
					<a href="casino_login.php" class="first-game03"></a>
					<a href="lottery.php" class="first-game04"></a>
				</div>
				<!--end first-game-->
			</div>
		</div>
		<!--end page-container-->

		<!--page-footer-->
		<div id="page-footer">
			<div class="page-wrap">
				<div class="footer-left">
					<div class="footer-nav">
						<ul>
							<li><a href="about.php">关于我们</a></li>
							<li><a href="#">联系我们</a></li>
							<li><a href="#">合作伙伴</a></li>
							<li><a href="#">存款帮助</a></li>
							<li><a href="#">取款帮助</a></li>
							<li><a href="#">常见问题</a></li>
							<li><a href="#">责任博彩</a></li>
						</ul>
					</div>
					<!--end footer-nav-->
					<div class="footer-pay">提供多种且快速的付款方式<img src="image/footer_img01.png" /></div>
					<div class="footer-info"></div>
				</div>
				<div class="footer-mobile"><a href="#"><img src="image/footer_img02.png" /></a></div>
			</div>
			<div class="footer-bottom">
				<div class="page-wrap">
					<div class="footer-copyright">COPYRIGHT &copy; BBIN RESERVED</div>
					<div class="footer-logo">
						<a href="#"><img src="image/bbinlogo.png" /></a>
						<a href="#"><img src="image/ublogo.png" /></a>
					</div>
				</div>
			</div>
		</div>
		<!--end page-footer-->
	</div>
	<!--end mainBody-->


	<?php include '../template/base.php'; ?>
	<script src="../template/js/TweenMax.min.js"></script>
	<script src="../template/js/tween.slideshow.js"></script>
	<script>
		$('#js-ele-slideshow').slideshow({
			animationType: 'fade',
			isArrow: true,
		});
		$(".member-btn").click(function(){
			$(".login-wrap").stop().fadeToggle(300);
		});
	</script>
</body>
</html>