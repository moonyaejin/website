<?php
	include ("fb_session.inc");
	include ("fb_header_db.inc");
?>
<div style = "padding-top : 160px;">
	<p style = "text-align : center; font-size : 20px; font-weight : bold;">🔍 모든 회원 보기 🔍</p>
</div>
<?php	
	include ("fb_db.inc");
	
	// 데이터베이스 선택이 정상적으로 이루어졌는 지를 체크
	$status = mysql_select_db("classdb");
	if (!$status) {      //데이터베이스 연결에 문제가 있다면
		echo"<p>ERROR" .mysql_errno(). ": " . mysql_error()."</p><hr color=red>";
	}
	
	//SQL 수행
	$result = mysql_query("select * from fb_202111729", $db);
	
	//쿼리 실행 결과 활용
	echo "<div style='width: 1000px; height: 500px; overflow:auto; margin-left: auto; margin-right: auto;'>";
	echo "<table style='border: 2px solid #009E52; font-size : 13px; text-align: center; align : center; table-layout: fixed; width: 1800px; height : 700px' border=1 cellspacing=0 cellpadding=2>";
	echo "<tr style = 'background-color : #92D6A7; border : 2px solid #009E52; font-size : 15px; font-weight : bold;'>
	<th >고객 번호</th>
	<th>이름</th>
	<th>이메일</th>
	<th>비밀번호</th>
	<th>생년월일</th>
	<th>성별</th>
	<th>전화번호</th>
	<th>주소</th>
	<th>결혼/연애 여부</th>
	<th>메모</th>
	<th>가입일</th>
	</tr>"; 
	while ($row = mysql_fetch_array($result)) { // mysql_fetch_array는 검색결과의 행을 배열변수로 반환
		echo "<tr>"; 
		echo "<td>".$row["member_number"]."</td>"; 
		echo "<td>".$row["name"]. "</td>"; 
		echo "<td>".$row["email"]. "</td>"; 
		echo "<td>".$row["password"]. "</td>"; 
		echo "<td>".$row["birth_date"]. "</td>"; 
		echo "<td>".$row["gender"]. "</td>"; 
		echo "<td>".$row["phone"]. "</td>"; 
		echo "<td>".$row["address"]. "</td>";    
		echo "<td>".$row["status"]. "</td>"; 
		echo "<td>".$row["memo"]. "</td>"; 
		//가입일 날짜 형태 변형
		$num_date = date("Y/m/d", strtotime($row['date']));
		echo "<td>". $num_date ."</td>";
		echo "</tr>"; 
	} 
	echo "</table>"; 
	echo "</div>";
	mysql_close($db); 
?>

<?php
	include ("fb_footer_db.inc");
?>								