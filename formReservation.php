<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="./assets/css/reset.css">
	<link rel="stylesheet" href="./assets/css/theme.css">
	<link rel="stylesheet" href="./assets/css/center.css" />

	<?php
	session_start(); ?>

	<title>Centre de <?php echo $_SESSION["centerName"] ?></title>
</head>

<body class="secondaryColorBg">
	<header class="mainColorBg">
		<?php include("./header.php"); ?>
		<h2 class="mainFont">Centre de <?php echo $_SESSION["centerName"] ?></h2>
	</header>
	<main>
		<form action="./bookRoom.php" method="post">
			<article class="colorOnSecondaryBg">
				<label for="name" class="mainFont">Nom</label>
				<input type="text" name="name" class="mainFont" />
			</article>

			<article class="colorOnSecondaryBg">
				<label for="firstname" class="mainFont">Prénom</label>
				<input type="text" name="firstname" class="mainFont" />
			</article>

			<article class="colorOnSecondaryBg">
				<label for="birthday" class="mainFont">Date de naissance</label>
				<input type="date" name="birthday" class="mainFont" />
			</article>

			<article class="colorOnSecondaryBg">
				<label for="refSession" class="mainFont">Numéro de session de formation</label>
				<input type="number" name="refSession" class="mainFont" />
			</article>

			<article class="colorOnSecondaryBg">
				<label for="arrivalDate" class="mainFont">Date d'arrivée</label>
				<input type="date" name="arrivalDate" class="mainFont" />
			</article>

			<article class="colorOnSecondaryBg">
				<label for="departureDate" class="mainFont">Date de départ</label>
				<input type="date" name="departureDate" class="mainFont" />
			</article>

			<article class="colorOnSecondaryBg">
				<label for="typeApt" class="mainFont">Type de logement</label>
				<select name="typeApt" class="mainFont">
					<option value="Studo avec salle de bain">Studo avec salle de bain</option>
					<option value="Studio avec salle de bain et cuisine">Studio avec salle de bain et cuisine</option>
					<option value="Chambre de 9m² avec un bureau">Chambre de 9m² avec un bureau</option>
				</select>
			</article>

			<article>
				<button type="submit" class="mainFont">Réserver</button>
			</article>
		</form>

		<div>
			<p class="errorMsg">
				<?php
				if (isset($_SESSION["errorMsg"]) && !empty($_SESSION["errorMsg"])) {
					echo $_SESSION["errorMsg"];
				}
				?>
			</p>
		</div>
	</main>
	<footer class="mainColorBg mainFont">---</footer>
</body>

</html>