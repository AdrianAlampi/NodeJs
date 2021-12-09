<?php
    if(!empty($_GET['hostname']) && !empty($_GET['user']) && !empty($_GET['pw']) && !empty($_GET['db'])){
        $filename = 'config/file.txt';
        $handler = fopen($filename, 'w+');
        if (false === $handler) {
            printf('Impossibile aprire il file ', $filename);
            exit;
        }
        fwrite($handler, $_GET['hostname']."/".$_GET['user']."/".$_GET['pw']."/".$_GET['pw']."/".$_GET['db']); 
        fclose($handler);
    }else{
        echo "";
    }
?>
<htlm>
    <body>
        <form action="verify.php" method = "POST">        
        <fieldset>
            <legend>
                Inserisco i data nel Database
            </legend>
            <p>Codice: <input type="number" name="codice"></p>
            <p>Nome: <input type="text" name="nome"></p>
            <p>Indirizzo: <input type="text" name="indirizzo"></p>
            <p>Numero: <input type="text" name="numero"></p>
            <input type="submit" value="invia">
        </fieldset>
    </form>
</htlm>