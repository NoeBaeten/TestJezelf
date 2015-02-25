<?php
	include_once("include_products.php");
?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Products</title>
</head>
<body>
	<h1>Products</h1>
	<ul>
	<?php for($i=0; $i<$numberOfProducts; $i++)
		{ ?>
			<li>
				<h2><?php echo $products[$i]["name"]; ?> € <?php echo $products[$i]["price"]; ?></h2>
				<?php echo "<img src='" . $products[$i]["image"] . "' />"; ?>
				<?php echo "<a href='products_detail.php?id={$i}'>More info</a>" ; ?>
			</li>
		<?php } ?>
	</ul>
	<?php include_once("include_cart.php"); ?>
</body>
</html>