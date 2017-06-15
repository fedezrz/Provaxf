

il tuo numero di cellulare è <?php echo $_POST["name"]; ?><br>
il tuo numero della banca è: <?php echo $_POST["email"]; ?><br>                  
la tua matricola è: <?php echo $_POST["matricola"]; ?><br>					                  								
il tuo numero di scarpe è: <?php echo $_POST["scarpa"]; ?><br>
il tuo numero di anni è: <?php echo $_POST["anno"]; ?><br>					                  								
il tuo voto è: <?php echo $_POST["voto"]; ?><br><br>
													                  
													                  
													                  
<?php													                  
	$max=0;													                  
	$min=100;
	$somma=0;
	$cont=0;	
	$formatMultiplo="<ul>";										                  
	foreach ($_POST as $value) { 												                  	
	 	# code...													                  
    	if($value>$max)													                  
		{													                  
			$max=$value;													                  
		}													                  
											                  		
    	if($value<$min)													                  
		{													                  
			$min=$value;                  
		}
		$somma+= $value;

		$divisore=count($_POST);
		$media= $somma / $divisore;	        	                           
                  
		if ($value%2==0) {                  
			# code...                  
			$formatMultiplo.="<li>".$value." </li>";                  
			$cont++;                  
		}             


               
	$formatMultiplo.="</ul>";                  
	}


  ?>                  
                  
 il numero maggiore inserito è: <?php echo $max ?><br>                  
 il numero minore inserito è: <?php echo $min; ?><br>
 la media dei numeri inseriti è:<?php echo $media; ?><br>
 sono <?php echo $cont; ?> i numeri che sono multipli di 2 e sono: <?php echo $formatMultiplo; ?>                  
                  
                  



 	