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
			<div id="content">
				<div id="columns">
					<img src="./image/log-in.jpg" style="width: 400px; margin-top: 155px; margin-bottom: 155px">
					<form id = "login_box" method="post" action="fb_login_process.php" name="login" align = "center">
						email : <input type="email" size="25" name="email" placeholder="이메일을 입력하세요" autofocus required><br><br>
						password : <input size="21" name="password" type="password" placeholder="비밀번호를 입력하세요" required><br><br>
						<input id = "basic_button" name="login" value="로그인" type="submit">
						<input id = "cancel_Button" name="reset" value="취소" type="reset"><br>
					</form>
				</div>
			</div>
			<div id="footer">
				<p align = "center">@COPYRIGHT All Rights Reserved.<br>
				문예진(📞 010-2511-6898)</p>
			</div>
		</div>
	</body>
</html>											