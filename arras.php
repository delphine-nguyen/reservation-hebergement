<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="./assets/css/reset.css">
	<link rel="stylesheet" href="./assets/css/theme.css">
	<link rel="stylesheet" href="./assets/css/center.css" />
	<title>Centre d'Arras</title>
</head>

<body class="secondaryColorBg">
	<header class="mainColorBg">
		<?php include("./header.php"); ?>
		<h2 class="mainFont">Centre d'Arras</h2>
	</header>

	<main>
		<?php
		session_start();
		$_SESSION["centerName"] = "roubaix";
		include("./formReservation.php"); ?>
	</main>

	<footer class="mainColorBg mainFont">---</footer>
</body>

</html>