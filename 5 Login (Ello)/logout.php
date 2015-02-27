<?php
	setcookie("mycookie", "", time()-3600);
	header('location: index.php');
?>