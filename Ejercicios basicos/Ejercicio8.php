<?php

function mostrarAlumnos($alumnos){

    foreach ($alumnos as $alumno){
        echo $alumno . "\n";
    }
}
$listadoAlumnos = ["Jose","Pepe","Manuel","Daniel","Samuel"];
mostrarAlumnos($listadoAlumnos)
?>