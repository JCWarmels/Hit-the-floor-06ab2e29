<?php

$ToGive = intval($argv[1]);
if($ToGive != 0){
    if(floor($ToGive/10)){
        $check1 = floor($ToGive/10);
        echo("$check1 x 10 euro".PHP_EOL);
        $remover1 = $check1 * 10;
        $ToGive-=$remover1;
    }
    if(floor($ToGive/5)){
        $check2 = floor($ToGive/5);
        echo("$check2 x 5 euro".PHP_EOL);
        $remover2 = $check2 * 5;
        $ToGive-=$remover2;
    }
    if(floor($ToGive/2)){
        $check3 = floor($ToGive/2);
        echo("$check3 x 2 euro".PHP_EOL);
        $remover3 = $check3 * 2;
        $ToGive-=$remover3;
    }
    if(floor($ToGive/1)){
        $check4 = floor($ToGive/1);
        echo("$check4 x 1 euro".PHP_EOL);
        $remover4 = $check4 * 1;
        $ToGive-=$remover4;
    }
}
else{
    echo("Geen wisselgeld.");
}

?>