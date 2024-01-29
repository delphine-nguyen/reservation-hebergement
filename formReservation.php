<form action="./bookRoom.php" method="post">
	<article>
		<label for="name" class="mainFont">Nom</label>
		<input type="text" name="name" class="mainFont" />
	</article>

	<article>
		<label for="firstname" class="mainFont">Prénom</label>
		<input type="text" name="firstname" class="mainFont" />
	</article>

	<article>
		<label for="birthday" class="mainFont">Date de naissance</label>
		<input type="date" name="birthday" class="mainFont" />
	</article>

	<article>
		<label for="refSession" class="mainFont">Numéro de session de formation</label>
		<input type="number" name="refSession" class="mainFont" />
	</article>

	<article>
		<label for="arrivalDate" class="mainFont">Date d'arrivée</label>
		<input type="date" name="arrivalDate" class="mainFont" />
	</article>

	<article>
		<label for="departureDate" class="mainFont">Date de départ</label>
		<input type="date" name="departureDate" class="mainFont" />
	</article>

	<article>
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