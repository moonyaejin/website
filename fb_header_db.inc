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
						<li><a href='fb_home_db.php'>Home</a></li>
						<li><a href='fb_register_db.php'>회원가입</a></li>
						<li><a href='fb_search_db.php'>회원검색</a></li>
						<li><a href='fb_search_v2_db.php'>회원검색 v2</a></li>
						<li><a href='fb_login_db.php'>로그인</a></li>
						<li><a href='fb_guestbook_db.php'>방명록</a></li>
						<li><a href='bizapp_final_202111729.php'>방명록 V3</a></li>
						<li><a href='fb_view_db.php'>모든회원보기</a></li>
						<li><a href='fb_delete_db.php'>회원탈퇴</a></li>
						<li><a href='fb_update_db.php'>회원정보수정</a></li>
						<li><a href='fb_logout_db.php'>로그아웃</a></li>
						<p align = "right"><img src="./image/clover.png" style="width: 30px;"></p>
					</ul>
				</nav>
			</div>