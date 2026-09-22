<?php

function cadenaPorCaracteres($cadenaOriginal){
    $arrayCaracteres = [];

    for ($i = 0; $i < strlen($cadenaOriginal); $i++){
        array_push($arrayCaracteres, $cadenaOriginal[$i]);
    }

    return $arrayCaracteres;

}

print_r(cadenaPorCaracteres("Hola"));

?>