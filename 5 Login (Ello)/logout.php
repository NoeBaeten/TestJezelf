<?php
	setcookie("loginCookie", "", time()-3600);
	header('location: index.php');
?>