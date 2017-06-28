<?php 						//richiamare un file al cui interno è presente l'header per non dover andare a riscriverlo 	ogni volta			
	include("header.php");
?>

il nome è :<?php echo $_POST["Nome"]; ?><br>	
il cognome è :<?php echo $_POST["Cognome"]; ?><br>
la mail è :<?php echo $_POST["Email"]; ?><br>	

<?php  
$myfile = fopen("text/newfile.txt", "a") or die("Unable to open file!");

if ($_POST["giorno"]!="" &&$_POST["mese"]!="" &&$_POST["anno"]!="") {

	echo "la data di nascita è :".$_POST["giorno"]."/".$_POST["mese"]."/".$_POST["anno"]; 
}



 $nome=$_POST["Nome"].",";
 $cognome=$_POST["Cognome"].",";
 $email=$_POST["Email"].",";
 $giorno=$_POST["giorno"]."\r\n";
fwrite($myfile, $nome);
fwrite($myfile, $cognome);
fwrite($myfile, $email);
fwrite($myfile, $giorno);


	$arrayN= array();

$filename = "text/newfile.txt";
$handle = fopen($filename, "r");
while (($line = fgets($handle,filesize($filename))) !== false){
	$arrLine=explode(",", $line);
	die(var_dump($line));
	foreach ($arrLine as $value) {
		
	
		echo $value['Nome'];
	}
}

fclose($handle);

/*$handle = @fread("text/newfile.txt", "r");
fread($handle, 100);
fclose($handle);
if ($handle) 
{
while (($line = fgets($handle)) !== false) {				//un ciclo per ogni volta che si inserisce un profilo 
        $arrLine=explode(":",$line);
		$car=$arrLine[0];
   
        if ($car=="n") {										//riconoscere il nome attraverso il primo carattere della stringa
        	echo "nome:".$arrLine[1]."<br>";					
        	$array1['nome']=$arrLine[1];						
        }

	}
}



fclose($handle);*/

$lenFile=filesize("text/newfile.txt");

$txt=file_get_contents ("text/newfile.txt",true);



fclose($myfile);



?><br>
<?php 						//richiamare un file al cui interno è presente l'header per non dover andare a riscriverlo 	ogni volta			
	include("footer.php");
?>