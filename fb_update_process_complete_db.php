<?php
	session_start();
	if(!isset($_SESSION['loggedIn']))
	header("Location:fb_login_db.php");
	include ("fb_header_db.inc");
?>

<?php
	include ("fb_db.inc");
	
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$update_password = $_POST['update_password'];
		$birth_date = $_POST['birth'];
		$phone = $_POST['ph_num'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$status = $_POST['love'];
		$memo = $_POST['memo'];
		
		//쿼리문에 활용할 이메일 세션 변수
		$session_email = $_SESSION['email'];
		
		// 데이터베이스 선택이 정상적으로 이루어졌는 지를 체크
		$select_status = mysql_select_db("classdb");
		if (!$select_status) {      //데이터베이스 연결에 문제가 있다면
			echo"<p>ERROR". mysql_errno() .": " . mysql_error()."</p><hr color=red>";
		}
		
		//SQL 수행
		$query = "update fb_202111729
		set name = '$name', email = '$email', password = '$update_password', birth_date = '$birth_date', phone = '$phone', gender = '$gender', address = '$address', status = '$status', memo = '$memo'
		where email = '$session_email'";
		$result = mysql_query($query, $db);
		
		//쿼리문 확인해보기
		//if($result){
		//echo "삽입완료: $query";
		//} else {
		//echo "실패:".mysql_error($db); 
		//}

		$str=<<<EOT
		<div id="content">
		<p style="padding-top:50px; font-size:18px; font-weight:bold; text-align : center;">🍀 회원 정보 수정이 완료되었습니다! 🍀</p>
		<p style= "font-size:18px; font-weight:bold; text-align : center;">수정하신 회원 정보를 확인해주세요!</p>
		<table style="text-align: left; table-layout: fixed; width: 595px; height: 380px; margin-left:auto; margin-right:auto; margin-top : 20px; border : 2px solid #009E52;" border="1" cellpadding="2" cellspacing="2">
		<tbody style = "text-weight : bold; font-size : 15px; font-weight:bold;">
		<tr style="background-color: #009E52; color: white;" align="center">
		<td colspan="2" rowspan="1" style="vertical-align: top; padding : 15px 0px 15px 0px;">입력된 회원 정보<br>
		</td>
		</tr>
		<tr>
		<td style="vertical-align: top; text-align: center; padding : 10px 0px 10px 0px; background-color: #92D6A7;">이름</span><br>
		</td>
		<td style="vertical-align: top; text-align: center; padding : 10px 0px 10px 0px; background-color: #92D6A7;">$name<br>
		</td>
		</tr>
		<tr>
		<td style="vertical-align: top; text-align: center; padding : 10px 0px 10px 0px; ">email<br>
		</td>
		<td style="vertical-align: top; text-align: center; padding : 10px 0px 10px 0px;">$email<br>
		</td>
		</tr>
		<tr>
			<td style="vertical-align: top; text-align: center; padding : 10px 0px 10px 0px; background-color: #92D6A7;">비밀번호<br>
			</td>
			<td style="vertical-align: top; text-align: center; padding : 10px 0px 10px 0px; background-color: #92D6A7;">$update_password<br>
			</td>
		</tr>
		<tr>
			<td style="vertical-align: top; text-align: center; padding : 10px 0px 10px 0px;">생년월일<br>
			</td>
			<td style="vertical-align: top; text-align: center; padding : 10px 0px 10px 0px;">$birth_date<br>
			</td>
		</tr>
		<tr>
			<td style="vertical-align: top; background-color: #92D6A7; text-align: center; padding : 10px 0px 10px 0px;">전화번호<br>
			</td>
			<td style="vertical-align: top; text-align: center; padding : 10px 0px 10px 0px; background-color: #92D6A7;">$phone<br>
			</td>
		</tr>
		<tr>
			<td style="vertical-align: top; text-align: center; padding : 10px 0px 10px 0px;">성별<br>
			</td>
			<td style="vertical-align: top; text-align: center; padding : 10px 0px 10px 0px;">$gender<br>
			</td>
		</tr>
		<tr>
			<td style="vertical-align: top; text-align: center; padding : 10px 0px 10px 0px; background-color: #92D6A7;">집주소<br>
			</td>
			<td style="vertical-align: top; text-align: center; padding : 10px 0px 10px 0px; background-color: #92D6A7;">$address<br>
			</td>
		</tr>
		<tr>
			<td style="vertical-align: top; text-align: center; padding : 10px 0px 10px 0px;">연애/결혼 여부<br>
			</td>
			<td style="vertical-align: top; text-align: center; padding : 10px 0px 10px 0px;">$status<br>
			</td>
		</tr>
		<tr>
			<td style="vertical-align: top; background-color: #92D6A7; text-align: center; padding : 10px 0px 10px 0px;">메모<br>
			</td>
			<td style="vertical-align: top; text-align: center; padding : 10px 0px 10px 0px; background-color: #92D6A7;">$memo<br>
			</td>
		</tr>
	</tbody>
</table>
</div>
EOT;
echo $str;
		mysql_close($db); 
	}
?>

<?php
	include ("fb_footer_db.inc");
?>