<?php
function newFile($path , $nomeFile, $testo){
    if(file_exists($path."/".$nomeFile)){
        echo "file gia esistente";
    }else{
        echo "file creato in: ".$path."/".$nomeFile;
       $file =  fopen($path."/".$nomeFile, 'w');
       if(fwrite($file,$testo)){
           echo "</br> scritto: ".$testo;
       }else{
           echo "</br> inpossibile scrivere";
       }
    }
}
?>