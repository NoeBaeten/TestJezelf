<?php
	$arr_posts = 	[
						[
							"profile" 	=>	"http://aimworkout.com/wp-content/uploads/2014/08/Shia-Labeouf-Workout-Routine-and-Diet-Plan.jpg",
							"username" 	=> 	"Ladiesman217",
							"picture" 	=> 	"http://newsblogs.chicagotribune.com/.a/6a00d8341c60fd53ef0133f237a104970b-1024wi",
							"location" 	=> 	"Transformers set",
							"city"		=>	"New York",
							"time"		=>	"10min ago"
						],
						[
							"profile" 	=>	"https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg",
							"username" 	=> 	"Spaceman2000",
							"picture" 	=> 	"http://i.imgur.com/J3VAMbT.jpg?1",
							"location" 	=> 	"Crater",
							"city"		=>	"Moon",
							"time"		=>	"23min ago"
						],
						[
							"profile" 	=>	"https://s3.amazonaws.com/uifaces/faces/twitter/bermonpainter/128.jpg",
							"username" 	=> 	"Robby Lookalike",
							"picture" 	=> 	"",
							"location" 	=> 	"Creativity Gym",
							"city"		=>	"Mechelen",
							"time"		=>	"2hrs ago"
						],

					];

?><html>
<head>
	<title>Timeline</title>
	<style type="text/css">
		html{
			font-family: sans-serif;
		}

		.profile {
			width: 100px;
			height: 100px;
			border-radius: 50px;
			-webkit-border-radius: 50px;
			-moz-border-radius: 50px;
			float: left;
		}

		.name {
			font-size: 20px;
			color: #0099cc;
		}

		.text{
			margin-left: 110px;
		}

		.locatie {
			margin-top: 40px;
			font-size: 18px;
			color: #2266aa;
		}

		.stad {
			font-size: 18px;
			margin-top: -18px;
		}

		.picture{
			width: 500px;
		}

	</style>
</head>
<body>
	<?php foreach($arr_posts as $p){ ?>
	<div class="post">
		<img class="profile" src="<?php echo $p['profile']; ?>">
		<div class="text">
			<p class="name" href="#"><?php echo $p['username'];?></p>
			<p class="locatie"><b><?php echo $p['location'] ?></b></p>
			<p class="stad"><b><?php echo $p['city'] ?></b></p>
			<img class="picture" src="<?php echo $p['picture']; ?>">
		</div>

		<hr></hr>
	</div>
	<?php } ?>

</body>
</html>
