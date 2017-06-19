<?php 
	include("header.php");
?>
	<form action="visualizza-quattro.php" method="post">
		Cellulare: <input type="number" name="name"><br>
		Numero conto bancario: <input type="number" name="email"><br>
		La tua matricola è: <input type="number" name="matricola"><br>
		Il tuo numero di scarpe è: <input type="number" name="scarpa"><br>
		I tuoi anni sono: <input type="number" name="anno"><br>
		Il tuo voto è: <input type="number" name="voto">
		<input type="submit">
	</form>
	<form action="ricerca.php" method="post">
		Scrivi un numero: <input type="number" name="numRicerca">
		<br><br><hr>
		<input type="number" name="arrRicerca[]">
		<input type="number" name="arrRicerca[]">
		<input type="number" name="arrRicerca[]">
		<input type="number" name="arrRicerca[]">
		<input type="number" name="arrRicerca[]">
		<input type="number" name="arrRicerca[]">
		<input type="number" name="arrRicerca[]">
		<input type="number" name="arrRicerca[]">
		<input type="number" name="arrRicerca[]">
		<input type="submit">
	</form>

	<form action="moltiplicazione-successione.php" method="post">
		Scrivi un numero: <input type="number" name="numMolt">
		<input type="submit">
	</form>
	<form action="matrice.php" method="post">
		<input type="submit">
	</form>

<hr>
	<form action="writeFile.php" method="post">
		<input type="text" name="nome">
		<input type="text" name="cognome">		
		<input type="number" name="dataNasc">
		<input type="number" name="altezza">
		
		<input type="submit">
	</form>


<?php 
	include("footer.php");
?>