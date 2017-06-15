

il tuo numero di cellulare è <?php echo $_POST["name"]; ?><br>
il tuo numero della banca è: <?php echo $_POST["email"]; ?><br>                  
la tua matricola è: <?php echo $_POST["matricola"]; ?><br>					                  								
il tuo numero di scarpe è: <?php echo $_POST["scarpa"]; ?><br>	
la tua matricola è: <?php echo $_POST["anno"]; ?><br>					                  								
il tuo numero di scarpe è: <?php echo $_POST["voto"]; ?><br><br>	                  									
													                  
													                  
													                  
<?php													                          
	$massimo = array($_POST["name"] ,$_POST["email"], $_POST["matricola"], $_POST["scarpa"], $_POST["anno"], $_POST["voto"]);	
	$max=0;
	$min=100;
	$somma=0;
	$multiplo="<ul>";
	$cont=0;
	$contatore= count($massimo);
	for ($i=0; $i < $contatore; $i++) {

		if ($massimo[$i]>$max) {
			# code...
			$max=$massimo[$i];

		}
		if ($massimo[$i]<$min) {
			# code...
			$min=$massimo[$i];
		}

		if ($massimo[$i]%2==0) {
			# code...
			$multiplo.="<li>".$massimo[$i]."</li>";
			$cont++;
		}

	   }
	   $multiplo.="</ul>";		
	$somma= $_POST["name"]+$_POST["email"]+$_POST["matricola"]+$_POST["scarpa"]+$_POST["anno"]+$_POST["voto"];
	$media= $somma / $contatore;             
      

	  																												
  ?>                  
                  
 il numero maggiore inserito è: <?php echo $max; ?> <br>                 
il numero minore inserito è: <?php echo $min; ?><br>  
la media dei numeri è:<?php echo $media; ?><br>        
i multipli di due sono: <?php echo $multiplo; ?>