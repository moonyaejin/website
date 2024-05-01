<?php
	session_start();
	//세션 변수가 세팅되지 않았다면 로그인 페이지로 이동
	if (!isset($_SESSION['loggedIn'])) {
		header("Location:fb_login_db.php");
	}
?>