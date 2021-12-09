<?php
if(empty($_GET))
    echo"inserisci un numero</br>";
    else{
        foreach($_GET as $k=>$v){
           $numero=$v;
        }
        $prodotto;
        echo "la tabellina del numero ".$numero.": "."</br>";
        for($i = 0; $i<11; $i++){
            $prodotto= $i*$numero;
            echo $numero."*".$i."=".$prodotto."<br>";
        }
    }
?>