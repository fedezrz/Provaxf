
<?php 						//richiamare un file al cui interno è presente l'header per non dover andare a riscriverlo 	ogni volta			
	include("header.php");


	$arrayN= array();

$filename = "text/newfile.txt";
$handle = fopen($filename, "r");

echo "<table>";
	echo "<tr>";
	echo "<td>"."Nome"."|"."</td>"."<td>"."Cognome"."|"."</td>"."<td>"."Email"."   "."|"."</td>"."<td>"."giorno"."|"."</td>";
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






?><br>




<?php 						//richiamare un file al cui interno è presente l'header per non dover andare a riscriverlo 	ogni volta			
	include("footer.php");
?>