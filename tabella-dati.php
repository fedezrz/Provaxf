<!--file per creare una tabella contenente tutti i dati utente che vengono inseriti-->



<?php 						//richiamare un file al cui interno è presente l'header per non dover andare a riscriverlo 	ogni volta			
	include("header.php");


	$arrayN= array();

$filename = "text/newfile.txt";
$handle = fopen($filename, "r");

echo "<table>";
	echo "<tr>";
	echo "<td>"."Nome"."|"."</td>"."<td>"."Cognome"." |"."</td>"."<td>"."Email"."|"."</td>"."<td>"."giorno"."|"."</td>"."<td>"."mese"."|"."</td>"."<td>"."anno"."|"."</td>";
	echo "</tr>";
while (($line = fgets($handle,filesize($filename))) !== false){
	$arrLine=explode(",", $line);
	
	echo "<tr>";
	foreach ($arrLine as $value) {			
	
		echo "<td>".$value."</td>";
	}
	echo "</tr>";
	
}
echo "</table>";

fclose($handle);

$lenFile=filesize("text/newfile.txt");

$txt=file_get_contents ("text/newfile.txt",true);


/*// hostname
$nomehost = "localhost";   
// utente per la connessione a MySQL  
$nomeuser = "root";
// password per l'autenticazione dell'utente 
$password = "";
// connessione tramite mysql_connect()
$connessione = mysql_connect($nomehost,$nomeuser,$password);
$selezione = mysql_select_db("dbFederz",$connessione) or die (mysql_error());
$sqlTxt="SELECT * FROM users";

 $sql = mysql_query($sqlTxt) or die (mysql_error());
 $res=mysql_fetch_row($sql);
var_dump($res);
 foreach ($res as $key => $value) {
 	echo $value; 
 }
 mysql_close();*/



?><br>

<?php
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

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["Id"]. " - Name: " . $row["Nome"]. " " . $row["Cognome"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>


<?php 						//richiamare un file al cui interno è presente l'header per non dover andare a riscriverlo 	ogni volta			
	include("footer.php");
?>