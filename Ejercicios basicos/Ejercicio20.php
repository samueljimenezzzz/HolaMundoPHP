<h4> EJERCICIO 20 </h4>

<?php
$alumnos = [
 ["nombre" => "Ana", "edad" => 19, "nota" => 7.5],
 ["nombre" => "Luis", "edad" => 21, "nota" => 6.8],
 ["nombre" => "Marta", "edad" => 18, "nota" => 9.2],
 ["nombre" => "Carlos", "edad" => 20, "nota" => 5.4],
];

$mayor = 0;
$nombre = "";
foreach ($alumnos as $personas) {
        if ($personas["nota"]>$mayor) {
            $mayor = $personas["nota"];
            $nombre = $personas["nombre"];
        } 

        }
    echo $nombre . "<br>";




$media = 0;
$sumaNotas = 0;
foreach ($alumnos as $persona) {
    $sumaNotas += $persona["nota"];
}
$media = $sumaNotas / count($alumnos);
echo $media . "<br>";




$alumnosMayor = [];
foreach($alumnos as $personas) {
     if ($personas["edad"]>19){
        array_push($alumnosMayor, $personas["nombre"]);
     }
}
echo implode(", ", $alumnosMayor);

if (isset($opcion)) {
$opcion = $_GET["opcion"];
} else {
    $opcion = "";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
        <a  href="http://localhost/ej20resultados.php?opcion=2">Ver media</a>
        <a  href="http://localhost/ej20resultados.php?opcion=3">Ver nombre del que tiene mayor nota</a>
        <a  href="http://localhost/ej20resultados.php?opcion=4">Ver alumnos mayores de 19</a>

</nav>



</body>
</html>
<?php


switch ($opcion) {
        case 1:
            echo "Hola";
            break;
        case 2:
            echo $media;
            break;
        case 3:
            echo $nombre;
            break;
        case 4:
            echo implode(", ", $alumnosMayor);
            break;
        default:
            echo "Nada";
    }

?>