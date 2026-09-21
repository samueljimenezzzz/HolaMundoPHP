<?php

function calcularDiaSemana($numero){
    $diaSemana = "";
    switch($numero){
        case '1':
            $diaSemana = "Lunes";
        case '2':
            $diaSemana = "Martes";
        case '3':
            $diaSemana = "Miercoles";
        case '4':
            $diaSemana = "Jueves";
        case '5':
            $diaSemana = "Viernes";
        case '6':
            $diaSemana = "Sabado";
        case '7':
            $diaSemana = "Domingo";
        
        return $diaSemana;
    }
}

echo calcularDiaSemana(1);
?>