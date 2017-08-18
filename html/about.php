<!DOCTYPE html>
<html class="madvertis at1 zh-cn">

<head>
	<meta charset="UTF-8">
	<title>关于我们</title>
	<link rel="stylesheet" href="css/style.css">
	<!-- Share core Javascript -->
	<script src="../template/js/jquery.js"></script>
</head>

<body>
	<!--mainBody-->
	<div id="mainBody">
		<!--page-header-->
		<div id="page-header">
			<div class="header-top-bg"></div>
			<div class="page-wrap">
				<div class="header-top">
					<div class="logo"><a href="index.php"><img src="image/logo.png" /></a></div>
					<!--mainnav-->
					<div class="mainnav" data-lsub-y="20">
						<ul class="nav">
							<li id="LS-first" class="LS-first"><a href="index.php">首頁</a></li>
							<li id="LS-ball" class="LS-ball"><a href="#">体育赛事</a>
								<div id="nav-ball" class="ele-drop-group" style="display:none">
									<div class="lsub-inner-wrap">
										<a v-for="ball in balls" :href="ball.link">{{ball.name}}</a>
									</div>
								</div>
							</li>
							<li id="LS-live" class="LS-live"><a href="live.php">视讯直播</a></li>
							<li id="LS-game" class="LS-game"><a href="#">电子游艺</a>
								<div id="nav-game" class="ele-drop-group" style="display:none">
									<div class="lsub-inner-wrap">
										<a v-for="game in games" :href="game.link">{{game.name}}</a>
									</div>
								</div>
							</li>
							<li id="LS-lottery" class="LS-lottery"><a href="lottery.php">彩票游戏</a></li>
							<li id="LS-memberexclusiveii" class="LS-memberexclusiveii"><a href="promotions.php">优惠活动</a></li>
							<li id="LS-mobile" class="LS-mobile"><a href="#">手机下注</a></li>
							<li id="LS-service" class="LS-service"><a href="#">在线客服</a></li>
						</ul>
					</div>
					<!--end mainnav-->
				</div>
				<!--end header-top-->

				<!--banner-->
				<div class="banner"></div>

				<!--login-->
				<div id="login">
					<div class="login-wrap">
						<form class="login-input form-group">
							<span><input type="text" placeholder="帐号" class="form-control name"></span>
							<span><input type="text" placeholder="密码" class="form-control password"></span>
							<span><input type="text" placeholder="验证码" class="form-control key"></span>
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
			</div>
		</div>
		<!--end page-header-->
		<div id="page-container">
			<div class="page-wrap">
				<!--about -->
				<div class="about-wrap">
					<!--sidebar -->
					<div id="page-sidebar">
						<ul class="sidemenu">
							<li><a href="sports.php">BB体育</a></li>
							<li><a href="#">体育投注</a></li>
							<li><a href="live.php">视讯直播</a></li>
							<li><a href="casino_login.php">BB电子</a></li>
							<li><a class="current" href="#">MG电子</a></li>
							<li><a href="lottery.php">彩票游戏</a></li>
							<li><a href="#">加入会员</a></li>
						</ul>
					</div>
					<!--end sidebar -->

					<!--article -->
					<div class="page-right">
						<p>BBIN与BBIN进行技术合作，共同打造高品质游戏平台，目前拥有菲律宾合法注册之博彩公司。我们一切博彩营业行为皆遵从菲律宾政府博彩条约。我们在越来越热络的网博彩市场中，不断地求新求变，寻找最新的创意，秉持最好的服务。以带给客户高品质的服务、产品、娱乐，是我们的企业永恒宗旨。</p>
						<p>我们的运动博彩拥有顶级的盘房操盘，投入大量的人力以及资源，提高完整赛事，丰富玩法给热爱体育的玩家。真人视讯游戏拥有经国际赌场专业训练的荷官，进行各种赌场游戏，所有赌局都依荷官动作，而不是预设的电脑机率结果，以高科技的网路直播技术，带给玩家身历赌场的刺激经验! 各式彩票游戏，是依官方赛果产生游戏结果，让玩家在活泼的投注界面，享受最公正的娱乐。而我们的电子游戏使用最公平的随机数产生机率，让玩家安心​​享受多元的娱乐性游戏。 BBIN所有的游戏皆有共同的优点: 无须下载、介面操作简易、功能齐全、画面精致、游戏秉持公平、公正、公开 !</p>
						<p>在市场上众多的博彩网站中，玩家选择BBIN，除了多元化的产品，也是因为BBIN-波音公司良好的信誉，以及高品质的服务，我们的用心随处可见，并获得GEOTRUST国际认证，确保网站公平公正性，所有会员资料均经过加密，保障玩家隐私。 BBIN以服务会员不打烊的精神，24小时处理会员出入款相关事宜，令我们骄傲的客服团队，亲切又专业，解决玩家对于网站、游戏的种种疑难杂症，让每位玩家有宾至如归的感觉!我们自豪的以业界最强的各种优惠方式回馈我们的会员，BBIN绝对是玩家最明智的选择 !</p>
					</div>
					<!--end article-->
				</div>
				<!--end about -->
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
	<!--end mainBody -->

<?php include '../template/base.php'; ?>
</body>
</html>