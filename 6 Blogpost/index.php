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
	<div class="container">
		<h2>Mini CMS</h2>
		<form action="" method="post">
			<input type="text" name="title" placeholder="Title">
			<textarea rows="7" placeholder="Text" name="post"></textarea>
			<br />
			<button type="submit">Post</button>
		</form>

		<div class="clear"></div>
		
		<?php include_once("print.php"); ?>
	</div>
</body>
</html>