<?php
	include ("fb_header_db.inc");
?>

<div id="content">
	<form id = "login_box" method="post" action="" name="login" align = "center">
		<p style = "margin-left : 80px; font-weight : bold;">회원 탈퇴</p>
		email : <input type="email" size="25" name="email" placeholder="이메일을 입력하세요" autofocus required><br><br>
		password : <input size="21" name="password" type="password" placeholder="비밀번호를 입력하세요" required><br><br>
		<input id = "basic_button" name="delete" value="탈퇴" type="submit">
		<input id = "cancel_Button" name="reset" value="취소" type="reset"><br>
	</form>
</div>

<div id="content">
	<?php
		include ("fb_db.inc");
		if (isset($_POST['delete'])) {
			$delEmail = $_POST['email'];
			$delPW = $_POST['password'];
			
			include ("fb_db.inc");
			
			// 데이터베이스 선택이 정상적으로 이루어졌는 지를 체크
			$status = mysql_select_db("classdb");
			if (!$status) {      //데이터베이스 연결에 문제가 있다면
				echo"<p>ERROR". mysql_errno() .": " . mysql_error()."</p><hr color=red>";
			}
			
			//검색 방법에 따라 쿼리문을 다르게 함
			//SQL 수행
			$query = "DELETE FROM fb_202111729 WHERE email = '$delEmail' and password = '$delPW'";
			$result = mysql_query($query, $db);
			
			//쿼리 실행 결과 활용
			echo "<div style = 'font-size : 15px; font-weight:bold; text-align : center; width: 500px; height : 150px; background : #92D6A7; color : #071E26; text-align: center; margin : 0px 0px 0px 250px; padding: 100px 0px 50px 0px; border : 10px; border-radius: 15px;'";
			
			echo "회원 탈퇴가 완료되었습니다! <br>";
			echo "< 탈퇴 회원 정보 > <br>";
			
			echo "email : $delEmail <br>";
			echo "password : $delPW <br><br>";
			echo "탈퇴한 회원 : " . mysql_affected_rows();
			echo "</div>";
		}
		mysql_close($db); 
	?>
</div>

<?php
	include ("fb_footer_db.inc");
?>