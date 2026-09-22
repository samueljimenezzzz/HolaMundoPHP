<?php

function celsiusToFarenheit($celsius){
    $farenheit = 0;

    $farenheit = ($celsius*9/5) + 32;

    return $farenheit;
}

echo celsiusToFarenheit(10);

?>