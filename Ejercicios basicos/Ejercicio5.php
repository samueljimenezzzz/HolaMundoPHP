<?php

function calcularDiaSemana($numero){
    $diaSemana = "";
    switch($numero){
        case '1':
            $diaSemana = "Lunes";
            break;
        case '2':
            $diaSemana = "Martes";
            break;
        case '3':
            $diaSemana = "Miercoles";
            break;
        case '4':
            $diaSemana = "Jueves";
            break;
        case '5':
            $diaSemana = "Viernes";
            break;
        case '6':
            $diaSemana = "Sabado";
            break;
        case '7':
            $diaSemana = "Domingo";
            break;
        default:
        echo "Introduce un dia valido";
        
        
    }
    return $diaSemana;
}

echo calcularDiaSemana(4);
?>