<?php

	if(!empty($_POST)) {
		include_once("classes/Post.class.php");
		if (isset($_POST['title']) && isset($_POST['post'])) {
			$postblog = new Blogpost();
			$postblog->Title = $_POST['title'];
			$postblog->Message = $_POST['post'];
			$postblog->Save();
		}
	}
 ?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js"></script>
	<title>Mini CMS</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div>
		<h2>Mini CMS (Zonder PDO want ik krijg mijne MAMP ni op tijd in orde)</h2>
		<form action="" method="post">
			<input type="text" name="title" placeholder="Title">
			<textarea rows="4" placeholder="Text" name="post"></textarea>

			<button type="submit">Post</button>
		</form>
	</div>

	<p><?php include_once("print.php"); ?></p>
</body>
</html>