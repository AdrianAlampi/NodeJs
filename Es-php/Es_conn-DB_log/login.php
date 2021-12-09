<htlm>
    <body>
        <form action="ConnDB.php" method = "POST">        
            <fieldset>
                <legend>
                    Connessione DataBase:
                </legend>
                <p>HOSTNAME (indirizzo ip): <input type="text" name="hostname"></p>
                <p>USER (utente database): <input type="text" name="user"></p>
                <p>PASSWORD (password utente database): <input type="password" name="pw"></p>
                <p>DATABASEB NAME (nome del database): <input type="text" name="db"></p>
                <input type="submit" value="invia">
            </fieldset>
        </form>
</htlm>
<?php
    include "lib/FunnConnDB.php";
    if(!empty($_POST)){
        $conn = connessioneDB($_POST['hostname'], $_POST['user'], $_POST['pw'], $_POST['db']);
        if ($conn -> connect_error) { 
            die('connessione al database fallita: '  . $conn->connect_error); 
        }else{ 
            echo 'Connessione al database riuscita!';
            header("Location: http://alampi.adrian.tave.osdb.it/conn_DB/ConnDB.php?hostname=".$_POST['hostname']."&user=".$_POST['user']."&pw=".$_POST['pw']."&db=".$_POST['db']);
        }
    }
     
?>
