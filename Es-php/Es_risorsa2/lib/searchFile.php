<?php
function searchFile($path , $nomeFile){
    $contenuto = opendir($path);
    echo "I FILE SONO: </br></br>";
    while (($file = readdir($contenuto)) !== false) {
        echo "- ".$file."</br>";
    }
    closedir($contenuto);
}
?>