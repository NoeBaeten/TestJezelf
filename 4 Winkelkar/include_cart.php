<?php
	session_start();
	include_once("include_products.php"); ?>
	<h2>Products in your cart:</h2>
<?php
	if(isset($_SESSION["cart"]))
	{
		if(isset($_POST["hidden"]))
		{
			$cart = $_SESSION["cart"];
			array_push($cart, $products[$id]["name"] . " € " . $products[$id]["price"]);
			$_SESSION["cart"] = $cart;
		}
?>
	<ul>
<?php
		foreach($_SESSION["cart"] as $cartItems)
		{
			echo "<li>Product: " . $cartItems . "</li>";
		}
?>
	</ul>
<?php
		}
		else
		{
			echo "Your cart is empty";
			$_SESSION["cart"] = array();
		}
?>