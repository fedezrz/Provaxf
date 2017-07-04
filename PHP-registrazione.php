
<!--file che va a stampare tutti i dati inseriti dall'utente in un file esternodi nome "newfile.txt"-->


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
 $giorno=$_POST["giorno"].",";
 $mese=$_POST["mese"].",";
 $anno=$_POST["anno"]."\r\n";
fwrite($myfile, $nome);
fwrite($myfile, $cognome);
fwrite($myfile, $email);
fwrite($myfile, $giorno);
fwrite($myfile, $mese);
fwrite($myfile, $anno);



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbFederz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$Data= $_POST["anno"]."/".$_POST["mese"]."/".$_POST["giorno"];
$sql = "INSERT INTO users (Nome, Cognome, Mail, Data) VALUES ('".$_POST["Nome"]."', '".$_POST["Cognome"]."', '".$_POST["Email"]."', '".$Data."')";

$result = $conn->query($sql);

?>



<?php 						//richiamare un file al cui interno è presente l'header per non dover andare a riscriverlo 	ogni volta			
	include("footer.php");
?>