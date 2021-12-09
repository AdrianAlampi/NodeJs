<?php
echo "ciao";
    include("Function.php")
    $conn=connDB($_POST);
    if(!empty($_POST)){
        if($conn->connect_error){
            die("Connessione fallita: ". $conn->connect_error);
        }else{
            echo '
            <form action="selezione.php" method="post">
            <p>Codice:<input type="number" name="hostName"></p>
            <p>Nome:<input type="text" name="username"></p>
            <p>Indirizzo:<input type="text" name="pw"></p>
            <p>Telefono:<input type="text" name="NameDB"></p>
            <input type="submit" values="Invia">
            </form>';
            $sql = "insert into scuola values (".$_post.",,,)";
            echo sqli;

            // $rs = $conn->query($sql);
        }
    }  
   
?>