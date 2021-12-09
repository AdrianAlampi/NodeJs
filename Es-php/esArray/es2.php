<?php
    $nome_array = array();
    for($i = 0; $i<3; $i++)
        $nome_array[$i] = $i;
    $nome_array["a"] = "Pilota";
    foreach($nome_array as $indice=>$valore){
        echo "<br>".$indice;
        echo "-" .$valore;
    }
    echo "<p><b>Variabile di sistema FILE </br>: ";
    echo"<i>Contiene il percorso completo del file.php</i></p>";
    echo __FILE__ ;

    echo "<br><br><p><b>Variabile di sistema DIR</b>: ";
    echo "<i> Contiene il percorso completo della cartella del file.php</i></p>";
    echo __DIR__;
?>