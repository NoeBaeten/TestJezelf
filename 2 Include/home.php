<html>
<head>
	<title>home</title>

	<style type="text/css">
		html{
			font-family: sans-serif;
		}
		ul {
			list-style: none;
		}
		ul a {
			color: black;
			text-decoration:none;
		}
		ul a:active, ul a:focus, ul a:hover, ul #current {
			color: blue;
		}
	</style>
</head>
<body
	<?php $pageName = "Home"; ?>
>
	<?php include("include_nav.php"); ?>
	
	<h1>Homepage</h1>

	<?php include("include_footer.php"); ?>
</body>
</html>