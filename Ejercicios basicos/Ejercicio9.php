<?php

function comprobarNumero($numero){
    $tipoNumero = "";
    if($numero%2!=0){
        $tipoNumero = "Impar";
    }
    else{
        $tipoNumero = "Par";
    }
    return $tipoNumero;
}

$numero = 2;
echo comprobarNumero($numero);
?>