<?php

function promedio($numeros){
    $promedio = 0;
    $suma = 0;
    for($i = 0; $i<count($numeros);$i++){
        $suma+=$numeros[$i];
        $promedio = $suma/$i;
    }
    return $promedio;

}

echo promedio([1,5,7,12,10]);
?>