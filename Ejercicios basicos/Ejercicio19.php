<?php

$a = 10;
$b = 0;
$operador = "/";


if ($operador == "+") {
    $resultado = $a+$b;
    echo "$a+$b = $resultado";
} elseif ($operador == "-") {
    $resultado = $a-$b;
    echo "$a-$b = $resultado";
} elseif ($operador=="*") {
    $resultado = $a * $b;
    echo "$a*$b = $resultado";
} elseif ($operador == "/") {
    
    if ($b == 0) {
        echo "Error: no se puede dividir entre 0";
    } else {
        $resultado = $a/$b;
        echo "$a/$b = $resultado";
    }
} else {
    echo "Error: el operador '$operador' no es válido";
}
?>