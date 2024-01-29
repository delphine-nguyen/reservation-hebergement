<form action="./bookRoom.php" method="post">
	<article>
		<label for="name">Nom</label>
		<input type="text" name="name" required />
	</article>

	<article>
		<label for="firstname">Prénom</label>
		<input type="text" name="firstname" required />
	</article>

	<article>
		<label for="birthday">Date de naissance</label>
		<input type="date" name="birthday" required />
	</article>

	<article>
		<label for="refSession">Numéro de session de formation</label>
		<input type="number" name="refSession" required />
	</article>

	<article>
		<label for="arrivalDate">Date d'arrivée</label>
		<input type="date" name="arrivalDate" required />
	</article>

	<article>
		<label for="departureDate">Date de départ</label>
		<input type="date" name="departureDate" required />
	</article>

	<article>
		<label for="typeApt">Type de logement</label>
		<select name="typeApt" required>
			<option value="Studo avec salle de bain">Studo avec salle de bain</option>
			<option value="Studio avec salle de bain et cuisine">Studio avec salle de bain et cuisine</option>
			<option value="Chambre de 9m² avec un bureau">Chambre de 9m² avec un bureau</option>
		</select>
	</article>

	<article>
		<button type="submit">Réserver</button>
	</article>
</form>