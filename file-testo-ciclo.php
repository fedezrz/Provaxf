<?php 
$handle = @fopen("text/newfile.txt", "r");

if ($handle) 
{
	$array1= array();	
	$arrayDef = array();
	$max=0;
	$min=3000;

	while (($line = fgets($handle)) !== false) {				//un ciclo per ogni volta che si inserisce un profilo 
        $arrLine=explode(":",$line);
		$car=$arrLine[0];
   
        if ($car=="n") {										//riconoscere il nome attraverso il primo carattere della stringa
        	echo "nome:".$arrLine[1]."<br>";					
        	$array1['nome']=$arrLine[1];						//
        }
        elseif ($car=="c") {
        	echo "cognome:".$arrLine[1]."<br>";
        	$array1['cognome']=$arrLine[1];
        }
        elseif ($car=="d") {
        	echo "data di nascita:".$arrLine[1]."<br>";
        	$array1['dataNasc']=$arrLine[1];
        }
        elseif ($car=="a") {
        	echo "altezza:".$arrLine[1]."<br>";
        	$array1['altezza']=$arrLine[1];
        	array_push($arrayDef, $array1);
        	$array1= array();
        
        }
    }
    foreach ($arrayDef as $key => $value) {							//for per trovare la persona più vecchia e quella più giovane
    	if ($value['dataNasc']>$max) {								//dataNasc deve essere maggiore di max
			$maxPersona=$value['nome']." ".$value['cognome'];		//stampa il nome e il cognome del array grande e li salva in maxPersona

			$max=$value['dataNasc'];								//max deve essere il valore più grande di tutti e si deve ogni 															volta aggiornare 
			              
		}													                  
											                  		
    	if($value['dataNasc']<$min){								
			$minPersona=$value['nome']." ".$value['cognome'];
			$min=$value['dataNasc'];

		                  
		}
    	}



} 
 fclose($handle);
   ?>
Il più giovane è:<?php echo $maxPersona ;					//stampa il valore max?>				
Il più vecchio è:<?php echo $minPersona ;					//stampa il valore min?>


   