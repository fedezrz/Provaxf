 il numero scelto è: <?php  echo $_POST["numMolt"]; ?><br>
 <?php
$numMol=$_POST["numMolt"];
 $var2=0;
 for ($i=0; $i < 10; $i++) { 
 	# code...
 	$moltiplicazione=$numMol*$i;
 	echo $numMol."*".$i."=".$moltiplicazione."<br>";
 }

   ?>
