 il numero scelto è: <?php  echo $_POST["numRicerca"]; ?>
 <?php  
 $arrRicerca=$_POST["arrRicerca"];
	$contatore= count($arrRicerca);
 	for ($i=0; $i < $contatore; $i++) { 
 	# code...
 		if ($numRicerca==$arrRicerca[$i]) {
 			# code...
 			$posizione=$arrRicerca[$i];
 		}
 }
 ?>
 La posizione del numero è: <?php echo $posizione; ?>