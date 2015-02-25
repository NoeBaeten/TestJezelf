<?php

	function canLogin($p_username, $p_password)
	{
		if($p_username == "tom" && $p_password == "test")
				{
					return true;
				}
				else
				{
					return false;
				}
	}

	function isLoggedIn()
	{
		if(isset($_COOKIE['loginCookie']))
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	function doLogin($p_user)
	{
		$content = $p_username;
		setcookie("loginCookie", $content, time()+60*60);
	}

	if(!empty($_POST))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];

			if (canLogin($username, $password))
				{
					doLogin($username);
					$feedback = "Welcome back!";
				}
				else
				{
					$feedback = "sorry, you can't login";
				}
		}
?>

<nav>
	<?php if( isset( $feedback) ): ?>
 		<p class="feedback"><?php echo $feedback; ?> <a href="logout.php">Logout?</a></p>
	<?php endif; ?>

	<?php if( !isLoggedIn() ): ?>
	<form action="" method="post">
		<input class="input" type="text" name="username" placeholder="Your username">
		<input class="input" type="password" name="password" placeholder="Your password">
		<button class="button" type="submit">Log in</button>
	</form>
	<?php endif; ?>
</nav>