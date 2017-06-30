<?php 						//richiamare un file al cui interno è presente l'header per non dover andare a riscriverlo 	ogni volta			
	include("header.php");
?>


il nome è :<?php echo $_POST["Nome"]; ?><br>	
il cognome è :<?php echo $_POST["Cognome"]; ?><br>
la mail è :<?php echo $_POST["Email"]; ?><br>	
la data è:<?php
 if ($_POST["giorno"]!="" && $_POST["mese"]!="" && $_POST["anno"]!="") {

	echo "la data di nascita è :".$_POST["giorno"]."/".$_POST["mese"]."/".$_POST["anno"]."<br>"; 
}


$myfile = fopen("text/newfile.txt", "a") or die("Unable to open file!");





 $nome=$_POST["Nome"].",";
 $cognome=$_POST["Cognome"].",";
 $email=$_POST["Email"].",";
 $giorno=$_POST["giorno"]."\r\n";
fwrite($myfile, $nome);
fwrite($myfile, $cognome);
fwrite($myfile, $email);
fwrite($myfile, $giorno);

?>



<?php 						//richiamare un file al cui interno è presente l'header per non dover andare a riscriverlo 	ogni volta			
	include("footer.php");
?>