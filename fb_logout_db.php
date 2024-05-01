<?php
	session_start();
	session_unset();
	session_destroy();
	header("Location:fb_guest_home_db.php");
?>
