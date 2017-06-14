

 <?php 
  include('header.php');
 ?>
 <a name="Decript">
    <a name="Home"></a>
    <div class="container">
    
    <img class="img-circle" src="css/persona-digitando.jpg">
      <h1 class="namesito">Criptazione & Decriptazione</h1>
      
    </div>
         
    <a name="about"></a>
      <div class="starter-template">
      
       <h1 class="primotitolo">Significato cripta e decripta</h1><br>
        <p class="lead">In informatica e nelle telecomunicazioni si definisce Criptazione,<br>  
        l'operazione con cui si traduce un'informazione in codice
        </p>
         <p class="lead">In informatica e nelle telecomunicazioni si definisce Decriptazione,<br>  
         l'operazione con cui si cerca di intepretare un testo cifrato
         </p>
      </div>
    

      <div>
        <h1 class="spiegazioneAlgoritmi">Tipi di algoritmi che si possono utilizzare:</h1>

      </div>

       <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
       1°Algoritmo Reverse</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">L'algoritmo Reverse consiste nell'inserimento di una parola o di una frase da parte di un utente 
       e con l'inserimento di questa frase/parola ,cliccando il bottone per criptare ,la parola/frase verrà capovolta </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        2°Algoritmo Cesàr</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">In crittografia, un cifrario di Cesare, noto anche come spostamento crittografia , si tratta di un tipo di sostituzione cifrario in cui una lettera nel testo originale è sostituita da un'altra lettera che è un numero fisso di posizioni nel corso della dell'alfabeto 
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        3°Algoritmo Vigenère</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body"> L'algoritmo di Vigenère coinsiste invece di spostare sempre dello stesso numero di posti la lettera da cifrare, questa viene spostata di un numero di posti variabile ma ripetuto, determinato in base ad una parola chiave, da concordarsi tra mittente e destinatario, e da scrivere ripetutamente sotto il messaggio, carattere per carattere</div>
    </div>
  </div>
 <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        4°Algoritmo Personale</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body">In crittografia, un cifrario di Cesare, noto anche come spostamento crittografia , si tratta di un tipo di sostituzione cifrario in cui una lettera nel testo originale è sostituita da un'altra lettera che è un numero fisso di posizioni nel corso della dell'alfabeto 
      </div>
    </div>
  </div>
</div>
<!-- /.container -->
  <div class="container-fluid bg-2 text-center" >
    <h3>
    Vuoi iniziare a Criptare?
    </h3>
    <a href="crypt.php" class="btn btn-default btn-lg">
    <i class="fa fa-play" aria-hidden="true"></i>Start</a>
  </div>

<?php
  include("footer.php");
?>