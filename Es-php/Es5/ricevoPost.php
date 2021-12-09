<html> 
    <body>
        <h1>Prova parametri passati in POST </h1>
        <?php
        //Recupero il valore del parametro "nome"
        $nome_utente = $_POST['nome'];
        //Recupero il valore del parametro "mail"
        $nome_email = $_POST['mail'];
        //Ora stampo semplicemente a video il risultato
        echo "<p>Ciao " . $nome_utente . "</p>";
        echo "<p>Ciao " . $nome_email . "</p>";
        ?>
    </body>
</html>