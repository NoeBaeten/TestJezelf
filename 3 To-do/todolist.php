<?php

	$updates = array(
					array(
							"description" => "Test Jezelf 3 - PHP",
							"deadline" => 1,
							"category" => "School"
						 ),
					array(
							"description" => "Carwash",
							"deadline" => 25,
							"category" => "Thuis"
						 ),
					array(
							"description" => "IM",
							"deadline" => 11,
							"category" => "School"
						 ),
					array(
							"description" => "Sideproject",
							"deadline" => 22,
							"category" => "Werk"
						 ),
					array(
							"description" => "Paper Act",
							"deadline" => 34,
							"category" => "School"
						 )
					);

?><!doctype html>
<html lang ="en">
<head>
	<meta charset="UTF-8'">
	<title>To Do List</title>
	<link rel="stylesheet" href="css/reset.css">
</head>
	<style type="text/css">
		body {
			width:100%;
			margin:0 auto;
			font-family: Arial, "Helvetica", sans-serif;
		}

		.todolist {
			width:33%;
			height:auto;
			margin:0 auto;
		}

		.todoitem {
			border-bottom:1px solid #FFFFFF;
		}
		h1 {
			text-align: center;
			font-size: 24px;
			font-weight: bold;
			line-height: 50px;
		}
		h3 {
			font-size:12px;
			text-align:center;
			color:#FFFFFF;
			padding-top:15px;
			padding-bottom:5px;
		}

		h4 {
			font-size:12px;
			text-align:center;
			color:#FFFFFF;
			padding-bottom:15px;
		}

		h2 {
			font-size:20px;
			text-align:center;
			color:#FFFFFF;
			font-weight: bold;
			padding-bottom:5px;
		}

		.red {
			background-color:#B80000 ;
		}

		.orange {
			background-color:#FF9900;
		}

		.green {
			background-color:#006633;
		}
	</style>
<body>
	<h1>To-do list</h1>
		<ul class='todolist'>
			<?php foreach ($updates as $update) { ?>
					<li class='todoitem'>
						<?php if($update['deadline'] < 2) {
							echo "<h3 class='red'>" . $update['category'] . "</h2>";
							echo "<h2 class='red'>" . $update['description'] . "</p>";
							echo "<h4 class='red'>" . "Deadline in " . $update['deadline'] . " uur </h3>";
						} else if($update['deadline'] < 24) {
							echo "<h3 class='orange'>" . $update['category'] . "</h2>";
							echo "<h2 class='orange'>" . $update['description'] . "</p>";
							echo "<h4 class='orange'>" . "Deadline in "  . $update['deadline'] . " uur</h3>";
						} else {
							echo "<h3 class='green'>" . $update['category'] . "</h2>";
							echo "<h2 class='green'>" . $update['description'] . "</p>";
							echo "<h4 class='green'>" . "Deadline in "  . $update['deadline'] . " uur </h3>";
						}?>
					</li>
				<?php } ?>
		</ul>
</body>
</html>

