<?php 
	include("header.php");
?>	<!--creazione di un form per indirizzare delle 																						caselle di input ad un file php-->
	<form action="visualizza-quattro.php" method="post">					
		<!--creazione di caselle di testo di tipo numerico e 																		con nome non ricopiabile dalle altre caselle di 																			testo -->
		Cellulare: <input type="number" name="name"><br>					
		Numero conto bancario: <input type="number" name="email"><br>
		La tua matricola è: <input type="number" name="matricola"><br>
		Il tuo numero di scarpe è: <input type="number" name="scarpa"><br>
		I tuoi anni sono: <input type="number" name="anno"><br>
		Il tuo voto è: <input type="number" name="voto">
		<input type="submit">
	</form>
	<div id="hidd" class="hiddami">
		<form action="ricerca.php" method="post">
			Scrivi un numero: <input type="number" name="numRicerca">
			<br><br><hr>
			<!--creazione di un array con gli elementi inseriti dall'utente 															attraverso caselle di input-->
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
	</div>
	<form action="moltiplicazione-successione.php" method="post">
		Scrivi un numero: <input type="number" name="numMolt">
		<input type="submit">
	</form>
	<form action="matrice.php" method="post">	<!--unico pulsante senza caselle di testo-->
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

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript">
		$("document").ready(function(){
			$('.hiddami').hide(2000,'linear',);
			//document.getElementById('hidd').style.display = 'none';
		})
	</script>

<?php 
	include("footer.php");
?>
