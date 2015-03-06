<?php
	include_once("classes/Connectie.class.php");

		$db = new Db();
		$sql = "SELECT * FROM tbltjcms ORDER BY id DESC";
		$result = $db->conn->query($sql);

		echo "<div class='blogpost'>";

		foreach($result as $post) {
			echo "<h3>" . $post['titel'] . "</h3>";
			echo "<p>" . $post['bericht'] . "</p>";
			echo "<div class='clear'></div>";
		}

		echo "</div>";
 ?>