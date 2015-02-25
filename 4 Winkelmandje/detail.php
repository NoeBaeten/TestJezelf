<?php
session_start();

$productid=0;
include_once("products.inc.php");


if (isset($_GET['product'])){
$productid=$_GET['product'];
}

if(!empty($_POST))
	{
		$productcode = $_POST['text'];

		 // Session exists && !empty?
		if(isset($_SESSION['cart']) && !empty($_SESSION['cart']))
		{
			// add item
			array_push($_SESSION['cart'],$productcode);
		} else {
			// If session isset, add productcode
			$_SESSION['cart'] = array($productcode);
		}

		header("location: products.php");
	}



?><!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method='post' action=''>
	<?php
		foreach ($products as $product)
		{
				
        	if($product['prodid']==$productid){
    ?>
        		<h2><?php $product['name'] ?></h2>
				<?php echo "<img src='".$product['photo'] . "' />"; ?>
				<?php echo "<input type='text' class='text' name='text' value=".$product['prodid'] .">"; ?>
				<input type='submit' name='submit' value='buy now'>
	<?php
				if (isset($_POST['submit'])) {
					array_push($cart, array('test'));
					var_dump($cart);
				}
        	}
      	} ?>
</form>


<?php
	include_once("cart.inc.php");
?>
	<a href="products.php">go back</a>
</body>
</html>