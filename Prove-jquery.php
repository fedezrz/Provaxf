<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#btn1").click(function(){  
    	var vero=0;
    	var array=[];
    	var stampa="";
    	//controlla se la casella di input non è vuota 
        if ($("#idProva").val()!="") {

        	//incrementa la var "vero" ogni volta che la casella di input non è vuota
			vero++;				
        }
        else{
        	//se la casella di input è vuota porta la stringa "prova" all'interno dell'array
        	array.push("prova");
        }

        if ($("#idNome").val()!="") {

			vero++;
        }
        else{
        	array.push("nome");
        }

		if ($("#idCognome").val()!="") {

			vero++;
        }
       else{
        	array.push("cognome");
        }

		if ($("#idData").val()!="") {

			vero++;
        }
       else{
        	array.push("data");
        }
        
        //se la variabile "vero" è uguale a 4, manda un alert che avvisa che tutte le 4 caselle sono state riempite
        if (vero==4)
         {
        	alert("true");
        }
		else{ 
			//se non tutte le caselle sono state riempite parte un for
       		 alert("false");
       		 //il for controlla tutte e quattro le caselle
       		 for (var i=0; i<array.length; i++) {
       		 	//porta gli elementi dell'array all'interno della variabile "stampa" e poi la stampa con un alert
       		 	stampa+=array[i]+"\n";
 					 		
       		 }
       		 alert(stampa);
   		}

   		 
   		
    });
});
</script>
</head>
<body>
	<form >
	<!--inserimento di quattro cassele di testo-->
		Inserisci prova: <input id="idProva" type="text" name="prova"><br>
		Inserisci nome: <input id="idNome" type="text" name="nome"><br>
		Inserisci cognome: <input id="idCognome" type="text" name="cognome"><br>
		Inserisci data: <input id="idData" type="text" name="data"><br>
		
		<button type="button" id="btn1">Show Text</button>
	</form>

</body>
</html>