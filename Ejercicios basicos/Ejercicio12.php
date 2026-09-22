<?php

function numeroMayor($numeroA,$numeroB){

    $mayor = 0;

    if($numeroA>$numeroB){
    $mayor = $numeroA;
    }

    elseif($numeroA<$numeroB){
    $mayor = $numeroB;
    }

    else{
    $mayor = $numeroA;
    echo "Ambos numeros son iguales";
    }
return $mayor;
}

echo numeroMayor(10,7);
echo numeroMayor(7,10);
?>