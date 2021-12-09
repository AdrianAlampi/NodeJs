<html> 
    <body>
        <h1>Prodotto:</h1>
        <?php
        $nome = $_POST['nome'];
        $descrizione = $_POST["descrizione"];
        $numero = $_POST["numero"];
        echo "<p>Nome Prodotto: " . $nome . "</p>";
        echo "<p>Descrizione " . $descrizione . "</p>";
        echo "<p>Prezzo " . $numero . "</p>";
        ?>
    </body>
</html>