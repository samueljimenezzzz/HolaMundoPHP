<?php
    function imprimePares(){
        $numero = 0;
        $listadoNumerosPares = [];
        while($numero<=20){

            if($numero%2==0){  
                array_push($listadoNumerosPares, $numero);
            }

            $numero++;
        }
        return $listadoNumerosPares;
    }
    $pares = imprimePares();
    print_r($pares);

    //Otra forma de imprimir (mas correcta) para mostrar SOLO los numeros
    foreach($pares as $par){

        echo $par . "\n";

    }
?>