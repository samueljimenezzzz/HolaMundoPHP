<?php

function comprobarEdad($edad){
    $mayorDeEdad = "";

    if($edad<18){
        $mayorDeEdad = "Menor de edad";
    }
    else{
        $mayorDeEdad = "Mayor de edad";
    }
    return $mayorDeEdad;
}

echo comprobarEdad(17);

?>