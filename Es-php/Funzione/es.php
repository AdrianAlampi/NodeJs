<?php
    global $nome = "Adrian";

    function associa ($stato){
        $str = "<p> nome: $nome stato :  $stato </p>";
        return $str;
    }

    echo associa("molto stanco è venerdì pomeriggio");
?>