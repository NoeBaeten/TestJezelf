<?php
	include_once("include_products.php");
	$id = $_GET["id"];
?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title><?php echo $products[$id]["name"]; ?></title>
	<style type="text/css">
		#hidden
		{
			display: none;
		}
	</style>
</head>
<body><a href="products.php">Back to store</a>
	<h1><?php echo $products[$id]["name"]." €".$products[$id]["price"]; ?></h1>
	<img src="<?php echo $products[$id]["image"]; ?>" />
	
	<form action="<?php echo "products_detail.php?id={$id}" ?>" method="post">
		<input type="text" name="hidden" id="hidden"/>
		<input type="submit" value="Buy now" />
	</form>
	<?php include_once("include_cart.php"); ?>
</body>
</html>