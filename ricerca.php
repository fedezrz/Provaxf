 il numero scelto è: <?php  echo $_POST["numRicerca"]; ?><br>
 <?php  
 $arrRicerca=$_POST["arrRicerca"];
 $numRicerca=$_POST["numRicerca"];
	$lenArray= count($arrRicerca);
	$numVolte= 0;
	
	$posizione="";
 	for ($i=0; $i < $lenArray; $i++) { 
 		if ($numRicerca==$arrRicerca[$i]) {
 			# code...
 			$posizione.="|".$i; 		
 			$numVolte++;
 		
 		}
 }
 	if ($posizione=="") {
 		# code...
 		echo "Non c'è niente";
 	}
 	else {
 		# code...
 		echo $posizione;
 		echo "<br>".$numVolte;
 	}


 ?>

<hr>


il numero scelto è: <?php  echo $_POST["numRicerca"]; ?><br>
<?php  
    $arrRicerca=$_POST["arrRicerca"];
    $numRicerca=$_POST["numRicerca"];
    $numVolte=0;
    $posizione="";

foreach ($arrRicerca as $key=>$value) {
	# code...
	if ($numRicerca==$value) {
		# code...
		$posizione.="|".$key;
		$numVolte++;
	}
}
	if ($posizione=="") {
		# code...
		echo "Non c'è niente";
	}
	else{
		echo $posizione;
		echo "<br>".$numVolte;
	}

?>