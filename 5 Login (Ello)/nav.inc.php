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
		/*if(isset($_COOKIE['loginCookie']))
		{
			return true;
		}
		else
		{
			return false;
		}*/
		if (isset($_COOKIE['mycookie']))
		{
			$salt="zecgfbzar652resvtsyg96581";
			$cookie = $_COOKIE['mycookie'];
			$crumbs = explode(",", $cookie);
			if (md5($crumbs[0] . $salt) == $crumbs[1])
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}

	function doLogin($username)
	{
		$salt="zecgfbzar652resvtsyg96581";
		$data = $username . "," . md5($username . $salt);
		setcookie("mycookie", $data, time()+3600);
	}

	if(!empty($_POST))
		{
			$username = $_POST['username'];
			$password = $_POST['password'];

			if (canLogin($username, $password))
				{
					doLogin($username);
					$feedback = "Welcome back! <a href='logout.php'>Logout?</a>";
				}
				else
				{
					$feedback = "Wrong username or password";
				}
		}
?>

<nav>
	<?php if( isset( $feedback) ): ?>
 		<p class="feedback"><?php echo $feedback; ?></p>
	<?php endif; ?>

	<?php if( isLoggedIn() ): ?>
	<form action="" method="post">
		<input class="input" type="text" name="username" placeholder="Your username">
		<input class="input" type="password" name="password" placeholder="Your password">
		<button class="button" type="submit">Log in</button>
	</form>
	<?php else:?>
		<p>Welcome back!</p>
	<?php endif; ?>
</nav>