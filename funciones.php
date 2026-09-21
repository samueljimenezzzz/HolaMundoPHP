<?php

$arrayPalabras = ["Hola","me","llamo","Pepe"];

function invertirArrayPalabras($arrayPalabras){
    $arrayNuevo = [];
    for($i = count($arrayPalabras)-1; $i>=0;$i--){
        array_push($arrayNuevo,$arrayPalabras[$i]);
    }
    return $arrayNuevo;
}

$resultado = invertirArrayPalabras($arrayPalabras);
print_r($arrayPalabras);
print_r($resultado);
?>