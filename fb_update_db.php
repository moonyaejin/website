<?php
	session_start();
	if(!isset($_SESSION['loggedIn']))
	header("Location:fb_login_db.php");
	include ("fb_header_db.inc");
?>
<?php	
	//비밀번호 확인
	echo "<div id='content'>";
		echo "<form id = 'login_box' method='post' action='fb_update_process_db.php' name='login' align = 'center'>";
			echo "email : <input type='email' size='25' name='email' placeholder='이메일을 입력하세요' autofocus required><br><br>";
			echo "password : <input size='21' name='password' type='password' placeholder='비밀번호를 입력하세요' required><br><br>";
			echo "<input id = 'basic_button' name='login' value='로그인' type='submit'>";
			echo "<input id = 'cancel_Button' name='reset' value='취소' type='reset'><br>";
		echo "</form>";
	echo "</div>";
?>
<?php
	include ("fb_footer_db.inc");
?>