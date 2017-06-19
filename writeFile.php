<?php
$myfile = fopen("text/newfile.txt", "a") or die("Unable to open file!");
$max=0;

 echo $_POST["nome"]; 
 echo $_POST["cognome"]; 
 echo $_POST["dataNasc"];
 echo $_POST["altezza"]; 
 $nome="n:".$_POST["nome"]."\r\n";
 $cognome="c:".$_POST["cognome"]."\r\n";
 $dataNasc="d:".$_POST["dataNasc"]."\r\n";
 $altezza="a:".$_POST["altezza"]."\r\n";
fwrite($myfile, $nome);
fwrite($myfile, $cognome);
fwrite($myfile, $dataNasc);
fwrite($myfile, $altezza);

for ($i=0; $i < $maxAltez; $i++) { 
		if ($maxAltez>$max) {
			$max="il più alto è:".$maxAltez."\r\n";
		}
	}

fwrite($myfile,$maxAltez);



$lenFile=filesize("text/newfile.txt");

$txt=file_get_contents ("text/newfile.txt",true);



fclose($myfile);




?>

<a href="file-testo-ciclo.php">Read file</a>
