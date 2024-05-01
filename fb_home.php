<!DOCTYPE html>
<html>
	<head>
		<title>문예진(202111729)의 miniFacebook</title>
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<link rel="icon" type="image/png" href="favicon.ico"/>
		<link rel="stylesheet" type="text/css" href="./css/fb_style.css"/>
		<link rel="stylesheet" type="text/css" href="./css/fb_menu.css"/>
		<script>
			function updatemenu() {
				if (document.getElementById('responsive-menu').checked == true) {
					document.getElementById('menu').style.borderBottomRightRadius = '0';
					document.getElementById('menu').style.borderBottomLeftRadius = '0';
					}else{
					document.getElementById('menu').style.borderRadius = '0px';
				}
			}
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<h1>문예진의 miniFacebook</h1>
			</div>
			<div id="navigation">
				<nav id='menu'>
					<input type='checkbox' id='responsive-menu' onclick='updatemenu()'><label></label>
					<ul>
						<li><a href='fb_home.php'>Home</a></li>
						<li><a href='fb_register.php'>회원가입</a></li>
						<li><a href='fb_search.php'>회원검색</a></li>
						<li><a href='fb_login.php'>로그인</a></li>
						<li><a href='fb_guestbook.php'>방명록</a></li>
						<p align = "right"><img src="./image/clover.png" style="width: 30px;"></p>
					</ul>
				</nav>
			</div>		
			<div id = "content">
				<div class="bookcover">
					<div class="bookdot">
						<div class="page">
							<div class="container">
								<div class="content_layout">
									<div class="status_bar">
										<p text align > TODAY <span style="color: red;">28</span> | TOTAL <span style="color: blue;">10720</span></p> 
										<p style = "margin-left : 80px; font-weight : bold;">♥ 예진이의 미니홈피 ♥</p>
									</div>
									<div class="body_content">
										<div class="body_update">
											<div class="profile_img"><img src="./image/newjeans.png"></div>
											<p style = "font-size: 10px; flex: 2;">🍀 공사중 🍀</p>
										</div>
										<div class="body_miniroom">
											<div class="item1">
												<div class="item_title">New Post !!!<br><hr></div>
												<div class="item1_container">
													<div class="item1_update_news">
														<p>- ♥</p>
														<p>- 3월의 일상</p>
														<p>- New SNKRS </p>
														<p>- 2월 일상 모음</p>
													</div>
												</div>
												
											</div>
											<div class="item2">
												<div class="item_title">Miniroom<br><hr></div>
												<p style="text-align : center;">
													<img src="./image/cherry.gif" style="width : 430px; height: 170px;">
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="footer">
					<p align = "center">@COPYRIGHT All Rights Reserved.<br>
					문예진(📞 010-2511-6898)</p>
				</div>
			</div>
		</body>
	</html>																										