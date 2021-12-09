<?php
if(!empty($_POST['nome']) && !empty($_POST['indirizzo']) && !empty($_POST['numero'])){
    $conn = new mysqli($_POST['hostname'], $_POST['user'], $_POST['pw'], $_POST['db']);
    $filename = "log/log.txt";
    $handler = fopen($filename, 'w+');

    if($conn === false){
        echo "connessione non riuscita";
    }else{
        $sql = "INSERT INTO Scuola (Codice, Nome , Indirizzo, Telefono) VALUES ('".$_POST['codice']."','".$_POST['nome']."','".$_POST['indirizzo']."','".$_POST['telefono']."')";  
        if($conn->query($sql)  === true){
            $testo = "i dati sono stati inseriti correttamente";
        }else{
            echo "errore: ".$conn->error;
            $testo = "errore ricevuto dal DBMS: ".$conn->error;
        }

        $nomeFile = "log.txt";
        if(file_exists($filename)){
            if(!(fwrite($handler,$testo))){
                echo "</br> inpossibile scrivere";
            }
        }else{
            $file =  fopen($filename, 'w+');
            if(!(fwrite($file,$testo))){
                echo "</br> inpossibile scrivere";
            }
       // header("Location: http://alampi.adrian.tave.osdb.it/conn_DB/login.php");
        }
    }
}else{
    echo "non riuscita";
}
?>
