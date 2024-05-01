<?php
	include ("fb_header_guest_db.inc");
?>
<div id="content2">
	<div id ="register_box1">
		<form id ="info_box" method="post" action="fb_register_process.php" name="register" align = "center" style="padding-top : 30px;">
			<fieldset>
				<legend style = "font-size : 25px; font-weight : bold; margin-bottom : 50px;">🍀 회원가입 🍀</legend>
				<span>이름</span><br>
				<input name="name" placeholder="문예진" autofocus required><br>
				<span>이메일 주소</span><br>
				<input type="email" name="email" placeholder="ex)abc@gmail.com" required><br>
				<span>비밀번호1</span><br>
				<input type="password" name="pw1" type="password" placeholder="비밀번호1을 입력하세요" required><br>
				<span>비밀번호2</span><br>
				<input type="password" name="pw2" type="password" placeholder="비밀번호2를 입력하세요" required><br>
				<span>생년월일</span><br>
				<input type="date" name="birth" required><br>
				<span>전화번호</span><br>
				<input type="tel" name="ph_num" placeholder="ex)01012345678" maxlength="11" required><br>
				<span>성별</span><br>
				<input id = "info_box_radio" type="radio" name="gender" value="여자" type="radio"><span>여자</span><br>
				<input id = "info_box_radio" type="radio" name="gender" value="남자" type="radio"><span>남자</span><br>
				<span>주소</span><br>
				<input name="address"placeholder="정확한 주소를 입력해주세요" required><br>
				<span>연애/결혼 여부</span><br>
				<input id = "info_box_radio" type="radio" name="love" value="결혼" type="radio"><span>결혼</span><br>
				<input id = "info_box_radio" type="radio" name="love" value="미혼" type="radio"><span>미혼</span><br>
				<input id = "info_box_radio" type="radio" name="love" value="커플" type="radio"><span>커플</span><br>
				<input id = "info_box_radio" type="radio" name="love" value="솔로" type="radio"><span>솔로</span><br>
				<span>메모</span><br>
				<input name = "memo" type = "text"><br>
			</fieldset>
			<input id ="basic_button" value="회원가입" name="submit" type="submit">
			<input id = "cancel_Button" name="reset" value="취소" type="reset"><br>
		</form>
	</div>
</div>

<?php
	include ("fb_footer_db.inc");
?>				