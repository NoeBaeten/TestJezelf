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
	}
?>

<nav>
	<?php if( !isLoggedIn() ): ?>
	<form action="" method="post">
		<input class="input" type="text" name="username" placeholder="Your username">
		<input class="input" type="password" name="password" placeholder="Your password">
		<button class="button" type="submit">Log in</button>
	</form>
	<?php else: ?>
	<p class="welcome">Welcome back! <a href="logout.php">Log out?</a></p>
	<?php endif; ?>
</nav>