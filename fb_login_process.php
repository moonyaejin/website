<!DOCTYPE html>
<html>
	<head>
		<title>문예진(202111729)의 miniFacebook</title>
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
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
				<?php
					$email = $_POST['email'];
					$str=<<<EOT
					<div style = "font-size : 19px; font-weight:bold; text-align : center; width: 500px; height : 150px; background : #92D6A7; color : #071E26; text-align: center; margin-left : 250px; margin-top : 150px; padding: 100px 0px 50px 0px; border : 10px; border-radius: 15px;"
					<p>어서오세요! "$email"님 🍀</p>
					<p>💖 로그인에 성공하셨습니다! 💖</p>
					</div>
EOT;
					echo $str;
				?>

			</div>
			<div id="footer">
				<p align = "center">@COPYRIGHT All Rights Reserved.<br>
				문예진(📞 010-2511-6898)</p>
			</div>
		</body>
	</html>																												