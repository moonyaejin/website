<?php
	include ("fb_header_db.inc");
?>

<?php
	include ("fb_db.inc");
	
	if (isset($_POST['submit'])) {
		$memo = $_POST['memo'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['pw1'];
		$check_password = $_POST['pw2'];
		$birth_date = $_POST['birth'];
		$phone = $_POST['ph_num'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];
		$status = $_POST['love'];
		$memo = $_POST['memo'];
		
		if($password != $check_password) {
			echo "<script> alert('비밀번호가 일치하지 않습니다.')
			location.replace('fb_register_db.php');</script>";
			
		}
		
		// 데이터베이스 선택이 정상적으로 이루어졌는 지를 체크
		$select_status = mysql_select_db("classdb");
		if (!$select_status) {      //데이터베이스 연결에 문제가 있다면
			echo"<p>ERROR". mysql_errno() .": " . mysql_error()."</p><hr color=red>";
		}
		
		//SQL 수행
		$query = "insert into fb_202111729(name, email, password, birth_date, phone, gender, address, status, memo)
		values('$name', '$email', '$password', '$birth_date', '$phone', '$gender', '$address', '$status', '$memo')";
		$result = mysql_query($query, $db);
		
		//쿼리문 확인해보기
		//if($result){
		//echo "삽입완료: $query";
		//} else {
		//echo "실패:".mysql_error($db); 
		//}
		
		mysql_close($db); 
	}
?>

<?php
	$str=<<<EOT
	<div id="content">
	<p style="padding-top:50px; font-size:18px; font-weight:bold; text-align : center;">🍀 환영합니다 🍀</p>
<p style= "font-size:18px; font-weight:bold; text-align : center;">회원 등록이 완료되었습니다!</p>
<p style="color=#0000ff; font-size:18px; font-weight:bold; text-align : center;">등록하신 회원 정보를 확인해주세요 </p>
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
<td style="vertical-align: top; text-align: center; padding : 10px 0px 10px 0px; background-color: #92D6A7;">$password<br>
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

?>

<?php
	include ("fb_footer_db.inc");
?>