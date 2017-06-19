<?php 
echo "<table>";
for ($i=1; $i<=10; $i++) { 
	echo "<tr>";
	for ($j=1; $j <= 10; $j++) {
			echo"<td>".($j*$i)."<td>";
	}
	echo "</tr>";
}	
echo "</table>";


?>
<hr>

<?php 

echo "<table>";
for ($i=10; $i>=1; $i--) { 
	echo "<tr>";
	for ($j=10; $j >= 1; $j--) {
			echo"<td>".($j*$i)."<td>";
	}
	echo "</tr>";
}	
echo "</table>";

 ?>

 <hr>

<?php 

echo "<table>";
for ($i=1; $i<=10; $i++) { 
	echo "<tr>";
	for ($j=10; $j >= 1; $j--) {
			echo"<td>".($j*$i)."<td>";
	}
	echo "</tr>";
}	
echo "</table>";

 ?>

  <hr>

<?php 

echo "<table>";
for ($i=10; $i>=1; $i--) { 
	echo "<tr>";
	for ($j=1; $j <= 10; $j++) {
			echo"<td>".($j*$i)."<td>";
	}
	echo "</tr>";
}	
echo "</table>";

 ?>

 <hr>

 <?php 
$righe = array("1","2","3","4","5","6","7","8","9","10" );
 $colonne = array("1","2","3","4","5","6","7","8","9","10" );
 
	echo "<table>";
 		foreach ($righe as $key => $value) {
 			echo "<tr>";
 			foreach ($colonne as $key => $value2) {
 				echo "<td>".($value*$value2)."</td>";
 			}
 			echo "</tr>";
 		}

	echo "</table>";


  ?>