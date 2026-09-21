<?php

function estacionDelAño($estacion){

    switch(mb_strtoupper(trim($estacion), 'UTF-8')){
        case 'PRIMAVERA':
            echo "Estacion del año: Primavera" ;
            break;
        case 'VERANO':
            echo "Estacion del año: Verano" ;
            break;
        case 'INVIERNO':
            echo "Estacion del año: Invierno" ;
            break;
        case 'OTOÑO':
            echo "Estacion del año: Otoño" ;
            break;
        default:
            echo "'$estacion' no es una estacion del año" ;
            break;
    }
}

estacionDelAño("Vverano");

?>
