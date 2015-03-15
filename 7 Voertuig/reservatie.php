<?php
		include_once("classes/Voertuig.class.php");

		$v = new Voertuig();
		$v->Merk = "Audi";
		$v->AantalPassagiers = 4;
		$v->AantalDeuren = 3;

		try{
			$v->Reserveer();
		}
		catch (Exception $e)
		{
			$error = $e->getMessage();
		}
	
?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reservatie/Auto</title>
</head>
<body>

</body>
</html>