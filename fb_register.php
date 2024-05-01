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
			<div id="content2">
				<div id ="register_box1">
					<form id ="info_box" method="post" action="fb_register_process.php " name="register" align = "center" style="padding-top : 30px;">
						<fieldset>
							<legend style = "font-size : 25px; font-weight : bold; margin-bottom : 50px;">🍀 회원가입 🍀</legend>
							<span>이름</span><br>
							<input name="name" placeholder="문예진" autofocus required><br>
							<span>이메일 주소</span><br>
							<input type="email" name="email" placeholder="ex)abc@gmail.com" required><br>
							<span>비밀번호1</span><br>
							<input type="password" name="pw1" type="password" placeholder="비밀번호1을 입력하세요" required><br>
							<span>비밀번호2</span><br>
							<input type="password" name="pw2" type="password" placeholder="비밀번호2를 입력하세요" required><br>
							<span>생년월일</span><br>
							<input type="date" name="birth" required><br>
							<span>전화번호</span><br>
							<input type="tel" name="ph_num" placeholder="ex)01012345678" maxlength="11" required><br>
							<span>주소</span><br>
							<input name="address"placeholder="정확한 주소를 입력해주세요" required><br>
							<span>연애/결혼 여부</span><br>
							<input id = "info_box_radio" type="radio" name="check" value="결혼" type="radio"><span>결혼</span><br>
							<input id = "info_box_radio" type="radio" name="check" value="미혼" type="radio"><span>미혼</span><br>
							<input id = "info_box_radio" type="radio" name="check" value="커플" type="radio"><span>커플</span><br>
							<input id = "info_box_radio" type="radio" name="check" value="솔로" type="radio"><span>솔로</span><br>
							<span>자기소개</span><br>
							<input id ="info_box_introduce" type = "text" name="introduce" placeholder="자유롭게 자기소개를 입력해주세요"><br>
						</fieldset>
						<input id ="basic_button" value="회원가입" name="register_button" type="submit">
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