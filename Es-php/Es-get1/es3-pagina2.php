<?php
if(empty($_GET))
    echo"inserisci un messaggio</br>";
    else{
        foreach($_GET as $k=>$v){
            echo $k."->".$v."<br>";
        }
    }
?>