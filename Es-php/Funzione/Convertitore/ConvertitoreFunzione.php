<?php
   $i = 0;
   $numRomano = " ";

    function convertitoreArabo($numArabo){
        global $i,$numRomano;
        $numArabi=array(1000,900,500,400,100,90,50,40,10,9,5,4,1);
        $numRomani=array("M","CM","D","CD","C","CX","L","XL","X","IX","V","IV","I");

        while($numArabo>0){
            if($numArabo>=$numArabi[$i]){
                $numArabo=$numArabo-$numArabi[$i];
                $numRomano=$numRomano.$numRomani[$i];
            }else {
                $i=$i+1;
            }
        }
        return $numRomano;
    }
?>