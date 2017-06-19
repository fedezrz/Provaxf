<?php 
$handle = @fopen("text/newfile.txt", "r");

if ($handle) 
{
	$array1= array();	
	$arrayDef = array();
	$max=0;
	$min=3000;

	while (($line = fgets($handle)) !== false) {
        $arrLine=explode(":",$line);
		$car=$arrLine[0];
   
        if ($car=="n") {
        	echo "nome:".$arrLine[1]."<br>";
        	$array1['nome']=$arrLine[1];
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
    foreach ($arrayDef as $key => $value) {
    	if ($value['dataNasc']>$max) {
			$maxPersona=$value['nome']." ".$value['cognome'];

			$max=$value['dataNasc'];				
			              
		}													                  
											                  		
    	if($value['dataNasc']<$min){					
			$minPersona=$value['nome']." ".$value['cognome'];
			$min=$value['dataNasc'];

		                  
		}
    	}



} 
 fclose($handle);
   ?>
Il più giovane è:<?php echo $maxPersona ;?>
Il più vecchio è:<?php echo $minPersona ;?>


   