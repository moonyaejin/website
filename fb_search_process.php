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
				<p align = "center">
					<p style="padding-top:20px; padding-bottom : 10px; font-size:18px; font-weight:bold; text-align : center;">✨ 검색하신 회원 정보입니다 ✨</p>
						<?php
							$search = $_POST['search'];
							$str=<<<EOT
							<div style="width: 870px; height: 500px; overflow:auto; margin-left: auto; margin-right: auto;">
							<table style="border: 2px solid #009E52; text-align: center; table-layout: fixed; width: 850px; height: 550px; margin-top: 20px;" border="1">
								<tbody>
									<thead>
									<tr style = "background-color : #92D6A7; border : 2px solid #009E52; margin-top : 50px; font-size : 15px; font-weight : bold;">
										<td  style="padding : 15px 0px 15px 0px;">이름<br>
										</td>
										<td style="padding : 15px 0px 15px 0px;">email<br>
										</td>
										<td style="padding : 15px 0px 15px 0px;">비밀번호<br>
										</td>
										<td style="padding : 15px 0px 15px 0px;">생년월일<br>
										</td>
										<td style="padding : 15px 0px 15px 0px;">전화번호<br>
										</td>
										<td style="padding : 15px 0px 15px 0px;">주소<br>
										</td>
										<td style="padding : 15px 0px 15px 0px;">연애/결혼 여부<br>
										</td>
										</tr>
									</thead>
									<tr style="border : 2px solid #F2F2F2">
										<td style="vertical-align: middle;">$search
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
									</tr>
									<tr style="text-align: center; border : 2px solid #F2F2F2">
										<td style="vertical-align: middle;">$search
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
									</tr>
									<tr style="text-align: center; border : 2px solid #F2F2F2"">
										<td style="vertical-align: middle;">$search
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
									</tr>
									<tr style="text-align: center; border : 2px solid #F2F2F2"">
										<td style="vertical-align: middle;">$search
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
									</tr>
									<tr style="text-align: center; border : 2px solid #F2F2F2"">
										<td style="vertical-align: middle;">$search
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
									</tr>
									<tr style="text-align: center; border : 2px solid #F2F2F2"">
										<td style="vertical-align: middle;">$search
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
									</tr>
									<tr style="text-align: center; border : 2px solid #F2F2F2"">
										<td style="vertical-align: middle;">$search
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
									</tr>
									<tr style="text-align: center; border : 2px solid #F2F2F2"">
										<td style="vertical-align: middle;">$search
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
										<td style="vertical-align: middle;">
										</td>
									</tr>
								</tbody>
							</table>
							</div>
EOT;
							echo $str;
						?>
					</div>
					<div id="footer">
						<p align = "center">@COPYRIGHT All Rights Reserved.<br>
						문예진(📞 010-2511-6898)</p>
					</div>
				</div>
			</body>
		</html>						