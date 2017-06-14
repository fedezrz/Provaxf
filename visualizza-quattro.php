

il tuo numero di cellulare è <?php echo $_POST["name"]; ?><br>
il tuo numero della banca è: <?php echo $_POST["email"]; ?><br>
la tua matricola è: <?php echo $_POST["matricola"]; ?><br>
il tuo numero di scarpe è: <?php echo $_POST["scarpa"]; ?><br>

Il numero più grande tra quelli inseriti è: <?php echo (max($_POST["name"], $_POST["email"], $_POST["matricola"], $_POST["scarpa"])); ?>