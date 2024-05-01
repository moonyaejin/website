<?php
//mysql 서버 연결
$db = mysql_connect("localhost", "studentuser", "goodstudent"); // DB 서버에 연결
if ($db == false) {
	echo "에러: DB 서버에 접근할
	수 없습니다!";
	exit;
}

//문자셋 설정
mysql_query("SET NAMES 'utf8'");

//DB 선택
mysql_select_db("classdb", $db);      //데이터베이스 선택
?>