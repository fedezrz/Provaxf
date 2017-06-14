<?php 
	include("header.php");
?>
	<div class="tabella-scrittura">	
		<a name="cripta"></a>
		      <div class="tabella-scrittura">
		        <p class="inserisciFrase">Inserisci Frase:</p>
		        <form  method="post" action="action.php">
		       		<div class="input-group">
		       		  <span class="input-group-addon" id="basic-addon1">TESTO DA CRIPTARE:</span>
		       		  <input name="textCrypt" type="text" class="form-control" placeholder="Text" aria-describedby="basic-addon1">
		       		</div>
		       		 <button type="submit" class="btn btn-default">Submit</button>
		        </form>
		      </div>

	</div>	      
<?php 
	include("footer.php");
?>