<?php
	include ("fb_header_guest_db.inc");
?>

<div id="content">
	<?php
		require ("fb_db.inc");
		
		$email = $_POST['email'];
		$password = $_POST['password'];
		$query = "select * from fb_202111729 where email = '$email' and password = '$password'";
		$result = mysql_query($query, $db);
		$row = mysql_fetch_array($result);
		if($row['email']) {
			session_start();
			//세션 변수가 세팅되지 않았다면 로그인 페이지로 이동
			$_SESSION["loggedIn"] = true;
			$_SESSION['name'] = $row['name'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['password'] = $row['password'];
			$_SESSION['birth_date'] = $row['birth_date'];
			$_SESSION['phone'] = $row['phone'];
			$_SESSION['gender'] = $row['gender'];
			$_SESSION['address'] = $row['address'];
			$_SESSION['status'] = $row['status'];
			$_SESSION['memo'] = $row['memo'];
			header("Location:fb_home_db.php");
			} else {
			header("Location:fb_login_db.php");
		}
	?>
	
</div>
<div id="footer">
	<p align = "center">@COPYRIGHT All Rights Reserved.<br>
	문예진(📞 010-2511-6898)</p>
</div>
</body>
</html>																												