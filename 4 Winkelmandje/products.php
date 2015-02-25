<?php
	session_start();
	include_once("products.inc.php");
?>

<!DOCTYPE html>
<html>
<head>


	<title>
		
	</title>
</head>
<body>
    <a href='logout.inc.php'>logout</a>
		<ul>
<?php
			foreach ($products as $product)
			{
				?><li><?php
				echo "<h2>" . $product['name'] . "</h2>";
				echo "<img src='" . $product['photo'] . "' />";
				echo "<a href='detail.php?product=".$product['prodid']."'>More info</a>";
				?></li><?php
			} ?>
		</ul>
<?php
		include_once("cart.inc.php");
		
?>

</body>
</html>