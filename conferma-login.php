<?php 
	include("header.php");
?>

<?php 
session_start();

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


 $sqlquery = "SELECT * FROM users WHERE Nome = '".$_POST["utente"]."' AND Mail = '".$_POST["email"]."'" ; 
 $result = $conn->query($sqlquery); 
 $trovato=$result->num_rows;


 if ( $trovato== "0"){ 
       echo "Non hai effettuato il login..."; 
       $_SESSION["logon"]= false; 
    }
    else{ 
       echo "Hai effettuato il login...";
       $_SESSION["logon"]= true; 
    }
    ?> 


<?php 
	include("footer.php");
?>
