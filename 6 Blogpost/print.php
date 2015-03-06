<?php
	include_once("classes/Connectie.class.php");

		$db = new Db();
		$sql = "SELECT * FROM tbltjcms ORDER BY id DESC";
		$result = $db->conn->query($sql);

		echo "<div class='row'>";
		echo "<div class='col-md-12'>";

		foreach($result as $post) {
			echo "<h2>" . $post['titel'] . "</h2>";
			echo "<p>" . $post['bericht'] . "</p>";
		}
 ?>