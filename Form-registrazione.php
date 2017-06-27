<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
	$("#btn1").click(function(){  
    	var vero=0;
    	var array=[];
    	var stampa="";

    	if ($("#name").val()!="") {

        	//incrementa la var "vero" ogni volta che la casella di input non è vuota
			vero++;				
        }
        else{
        	//se la casella di input è vuota porta la stringa "prova" all'interno dell'array
        	array.push("inserisci nome");
        }

        
		if ($("#surname").val()!="") {

			vero++;
        }
       else{
        	array.push("inserisci cognome");
        }

		if ($("#email").val()!="") {

			vero++;
        }
       else{
        	array.push("inserisci email");
        }
        
        //se la variabile "vero" è uguale a 4, manda un alert che avvisa che tutte le 4 caselle sono state riempite
        if (vero==3)
         {
        	alert("true");
        
         }else{ 
			     //se non tutte le caselle sono state riempite parte un for
       		 alert("false");
       		 //il for controlla tutte e quattro le caselle
       		 for (var i=0; i<array.length; i++) {
       		 	//porta gli elementi dell'array all'interno della variabile "stampa" e poi la stampa con un alert
       		 	stampa+=array[i]+"\n";
 					 		
       		 }
       		 alert(stampa);
           return false;

   		}
   		
    });
});


</script>

<?php 
	include("header.php");
?>	
<form action="PHP-registrazione.php" class="form-inline" method="post">

  <div class="form-group">
    Name: <input type="text" class="form-control" id="name" name="Nome">
  </div><br>
  
  <div class="form-group">
    Last name: <input type="text" class="form-control" id="surname" name="Cognome">
  </div><br>
  
  <div class="form-group">
    Email address: <input type="email" class="form-control" id="email" name="Email">
  </div><br>

  <div class="form-group">
    Password: <input type="password" class="form-control" id="password" name="Password">
  </div><br>

  <div class="form-group">
    Data di nascita: <input type="number" class="form-control" name="giorno">
   					 <input type="number" class="form-control" name="mese">
 				     <input type="number" class="form-control" name="anno">
  </div><br>

  <div class="checkbox">
    <label><input type="checkbox" value="rememberMe" id="remember_me" name="Remember"> Remember me</label>
  </div><br>

  <button type="submit" id="btn1" class="btn btn-default" name="Submit">Submit</button>
</form>




<?php 
	include("footer.php");
?>