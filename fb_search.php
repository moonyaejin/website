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
				<form id = "search_box" method="post" action="fb_search_process.php" name="login" align = "center">
					<h1>
						<span>m</span>
						<span>e</span>
						<span>m</span>
						<span>b</span>
						<span>e</span>
						<span>r</span><br>
						<span>s</span>
						<span>e</span>
						<span>a</span>
						<span>r</span>
						<span>c</span>
						<span>h</span>
					</h1>
					<select id = "search_select">
					<option value="type_name">이름</option>
					<option value="type_email">email</option>
					<option value="type_ph_num">전화번호</option>
					</select>
					<input id = "search_box_search" type=text size = "30" name="search" placeholder=" 검색어를 입력하세요."autofocus required>
					<input id = "search_button" name="search_botton" value="검색" type="submit"><br>
				</form>
			</div>
			<div id="footer">
				<p align = "center">@COPYRIGHT All Rights Reserved.<br>
				문예진(📞 010-2511-6898)</p>
			</div>
		</div>
	</body>
</html>		