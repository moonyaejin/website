<?php
	session_start();
	if(!isset($_SESSION['loggedIn']))
	header("Location:fb_login_db.php");
	include ("fb_header_db.inc");
?>

<?php
	include ("fb_db.inc");
	
	// 데이터베이스 선택이 정상적으로 이루어졌는 지를 체크
	$status = mysql_select_db("classdb");
	if (!$status) {      //데이터베이스 연결에 문제가 있다면
		echo"<p>ERROR" .mysql_errno(). ": " . mysql_error()."</p><hr color=red>";
	}
	
	$email = $_SESSION['email'];
	$name = $_SESSION['name'];
	$birth_date = $_SESSION['birth_date'];
	$phone = $_SESSION['phone'];
	$gender = $_SESSION['gender'];
	$address = $_SESSION['address'];
	$status = $_SESSION['status'];
	$memo = $_SESSION['memo'];

	//비밀번호 확인을 위한 변수
	$session_password = $_SESSION['password'];
	$password = $_POST['password'];
	
	if ($password != $session_password) {
	echo "<script> alert ('⚠️ 잘못된 비밀번호 입니다!') </script>";
	} else {
	echo "<div id='content2'>";
		echo "<div id ='register_box1'>";
			echo "<form id ='info_box' method='post' action='fb_update_process_complete_db.php' name='register' align = 'center' style='padding-top : 30px;'>";
				echo "<fieldset>";
					echo "<legend style = 'font-size : 25px; font-weight : bold; margin-bottom : 50px;'>🍀 회원 정보 수정 🍀</legend>";
					echo "<span>이름</span><br>";
					echo "<input name='name' placeholder= '$name' value ='$name' autofocus required><br>";
					echo "<span>이메일 주소</span><br>";
					echo "<input type='email' name='email' value = '$email' placeholder='$email' required><br>";
					echo "<span>비밀번호</span><br>";
					echo "<input type='password' name='update_password' value='$session_password' placeholder='$password'><br>";
					echo "<span>생년월일</span><br>";
					echo "<input type='date' name='birth' value='$birth_date' required><br>";
					echo "<span>전화번호</span><br>";
					echo "<input type='tel' name='ph_num' value = '$phone' placeholder='$phone' maxlength='11' required><br>";
					echo "<span>성별</span><br>";
					//성별이 여자인 경우
					if($gender == '여자') {
						echo "<input id = 'info_box_radio' type='radio' name='gender' value='여자' type='radio' checked><span>여자</span><br>";
						echo "<input id = 'info_box_radio' type='radio' name='gender' value='남자' type='radio'><span>남자</span><br>";
					//성별이 남자인 경우
					} else { 
						echo "<input id = 'info_box_radio' type='radio' name='gender' value='남자' type='radio'><span>여자</span><br>";
						echo "<input id = 'info_box_radio' type='radio' name='gender' value='남자' type='radio' checked><span>남자</span><br>";
					}
					echo "<span>주소</span><br>";
					echo "<input name='address'placeholder='$address' value = '$address' required><br>";
					echo "<span>연애/결혼 여부</span><br>";
					//결혼인 경우
					if ($status == '결혼') {
						echo "<input id = 'info_box_radio' type='radio' name='love' value='결혼' type='radio' checked><span>결혼</span><br>";
						echo "<input id = 'info_box_radio' type='radio' name='love' value='미혼' type='radio'><span>미혼</span><br>";
						echo "<input id = 'info_box_radio' type='radio' name='love' value='커플' type='radio'><span>커플</span><br>";
						echo "<input id = 'info_box_radio' type='radio' name='love' value='솔로' type='radio'><span>솔로</span><br>";
					//미혼인 경우
					} else if($status == '미혼') {
						echo "<input id = 'info_box_radio' type='radio' name='love' value='결혼' type='radio'><span>결혼</span><br>";
						echo "<input id = 'info_box_radio' type='radio' name='love' value='미혼' type='radio' checked><span>미혼</span><br>";
						echo "<input id = 'info_box_radio' type='radio' name='love' value='커플' type='radio'><span>커플</span><br>";
						echo "<input id = 'info_box_radio' type='radio' name='love' value='솔로' type='radio'><span>솔로</span><br>";
					//커플인 경우
					} else if($status == '커플') {
						echo "<input id = 'info_box_radio' type='radio' name='love' value='결혼' type='radio'><span>결혼</span><br>";
						echo "<input id = 'info_box_radio' type='radio' name='love' value='미혼' type='radio'><span>미혼</span><br>";
						echo "<input id = 'info_box_radio' type='radio' name='love' value='커플' type='radio' checked><span>커플</span><br>";
						echo "<input id = 'info_box_radio' type='radio' name='love' value='솔로' type='radio'><span>솔로</span><br>";
					//솔로인 경우
					} else {
						echo "<input id = 'info_box_radio' type='radio' name='love' value='결혼' type='radio'><span>결혼</span><br>";
						echo "<input id = 'info_box_radio' type='radio' name='love' value='미혼' type='radio'><span>미혼</span><br>";
						echo "<input id = 'info_box_radio' type='radio' name='love' value='커플' type='radio'><span>커플</span><br>";
						echo "<input id = 'info_box_radio' type='radio' name='love' value='솔로' type='radio' checked><span>솔로</span><br>";
					}
					echo "<span>메모</span><br>";
					echo "<input name = 'memo' type = 'text' value ='$memo' placeholder='$memo'><br>";
				echo "</fieldset>";
					echo "<input id ='basic_button' value='수정' name='submit' type='submit'>";
					echo "<input id = 'cancel_Button' name='reset' value='취소' type='reset'><br>";
			echo "</form>";
		echo "</div>";
	echo "</div>";
	}
?>

<?php
	include ("fb_footer_db.inc");
?>