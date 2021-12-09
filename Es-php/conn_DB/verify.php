<?php
if(!empty($_POST['nome']) && !empty($_POST['indirizzo']) && !empty($_POST['numero'])){
    $File_Name = 'config/file.php';
    $File = fopen($File_Name, 'r');
    $content=  fread($File, filesize($File_Name));
    $data = explode("/", $content);
    $Password =  $data[2];
    $Database_Name="c165_Esercitazione";
   //  $conn = new mysqli($data[0], $data[1], $Password, $Database_Name);
   $conn = new mysqli($_POST['hostname'], $_POST['user'], $_POST['pw'], $_POST['db']);
    if($conn === false){
        echo "connessione non riuscita";
    }else{
        $sql="INSERT INTO Scuola (Codice, Nome , Indirizzo, Telefono) VALUES ('".$_POST['codice']."','".$_POST['nome']."','".$_POST['indirizzo']."','".$_POST['telefono']."')";
        if($conn->query($sql)  === true){
            header("Location: http://alampi.adrian.tave.osdb.it/conn_DB/login.php");
        }else{
            echo "errore: ".$conn->error;
        }
    }
}else{
    echo "non riuscita";
}
?>