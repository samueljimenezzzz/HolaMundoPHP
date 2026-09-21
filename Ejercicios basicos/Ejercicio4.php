<?php

function tipoNumero($numero){
    
    $cadena = "";

    if($numero>0){
        $cadena = "El numero es positivo";
    }
    elseif($numero<0){
        $cadena = "El numero es negativo";
    }
    else{
        $cadena = "El numero es cero";
    }
    return $cadena;
    
}

echo tipoNumero(1)

?>