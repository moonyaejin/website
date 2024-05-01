<?php
	include ("fb_header_guest_db.inc");
?>
<div id="content">
		<form id = "login_box" method="post" action="fb_login_process_db.php" name="login" align = "center">
			email : <input type="email" size="25" name="email" placeholder="이메일을 입력하세요" autofocus required><br><br>
			password : <input size="21" name="password" type="password" placeholder="비밀번호를 입력하세요" required><br><br>
			<input id = "basic_button" name="login" value="로그인" type="submit">
			<input id = "cancel_Button" name="reset" value="취소" type="reset"><br>
		</form>
</div>
<?php
	include ("fb_footer_db.inc");
?>