<?php
	include ("fb_header_db.inc");
?>

<div id="content">
	<form id = "search_box" method="post" action="" name="search" align = "center">
		<h1>
			<span>m</span>
			<span>e</span>
			<span>m</span>
			<span>b</span>
			<span>e</span>
			<span>r</span><br>
			<span>s</span>
			<span>e</span>
			<span>a</span>
			<span>r</span>
			<span>c</span>
			<span>h</span>
		</h1>
		<input id = "search_box_search" size = "30" name="search" placeholder=" 검색어를 입력하세요."autofocus required>
		<input id = "search_button" name="submit" value="검색" type="submit"><br>
	</form>
</div>

<?php
	require ("fb_db.inc");
	if (isset($_POST['submit'])) {
		$input_name = $_POST['search'];
		
		include ("fb_db.inc");
		
		// 데이터베이스 선택이 정상적으로 이루어졌는 지를 체크
		$status = mysql_select_db("classdb");
		if (!$status) {      //데이터베이스 연결에 문제가 있다면
			echo"<p>ERROR". mysql_errno() .": " . mysql_error()."</p><hr color=red>";
		}
		
		//SQL 수행
		$query = "SELECT * FROM fb_202111729 WHERE name like '%$input_name%'";
		$result = mysql_query($query, $db);
		
		//쿼리 실행 결과 활용
		echo "<div style='width: 1000px; height: 500px; overflow:auto; margin-left: auto; margin-right: auto;'>";
		echo "<table style='border: 2px solid #009E52; font-size : 13px; text-align: center; align : center; table-layout: fixed; width: 1800px;' border=1 cellspacing=0 cellpadding=2>";
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
		<th>나이</th>
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
			$num_date = date("Y/m/d", strtotime($row['reg_date']));
			echo "<td>". $num_date ."</td>";
			//한국 나이로 계산
			$birth = date("Y", strtotime($row['birth_date']));
			$age = 2023 - $birth + 1;
			echo "<td>". $age ."</td>";
			echo "</tr>"; 
		} 
		echo "</table>"; 
		echo "</div>";
	}
	mysql_close($db); 
?>

<?php
	include ("fb_footer_db.inc");
?>		