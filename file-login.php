<?php 
	include("header.php");
?>

<form action="conferma-login.php" method="post">					
	<div class="form-group">

		Nome: <input type="text" class="form-control" name="utente"><br>
		Email: <input type="text" class="form-control" name="email"><br>			
		<input type="submit">
	</div>		
	</form>

<?php 
	include("footer.php");
?>