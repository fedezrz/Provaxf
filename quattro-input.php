<?php 
	include("header.php");
?>
	<div class="tabella-scrittura">	
		<a name="cripta"></a>
		      <div class="tabella-scrittura">
		        <p class="inserisciFrase">Inserisci Frase:</p>
		        <form  method="post" action="visualizza-quattro.php">
		       		<div class="input-group">
		       		  <span class="input-group-addon" id="basic-addon1">TESTO DA CRIPTARE:</span>
		       		  <input name="primo" type="number" class="form-control" placeholder="Casuale" aria-describedby="basic-addon1">
		       		  <input name="secondo" type="number" class="form-control" placeholder="Name" aria-describedby="basic-addon1">
		       	      <input name="terzo" type="number" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
		       		  <input name="quarto" type="number" class="form-control" placeholder="Cellulare" aria-describedby="basic-addon1">
		       		</div>
		       		 <button type="submit" class="btn btn-default">Submit</button>
		        </form>
		      </div>

	</div>	      
<?php 
	include("footer.php");
?>