<?php

$persona = [
    'nombre' => 'Samuel',
    'edad'   => 22,
    'email'  => 'samuel@iesnervion.es'
];
//Metodo 1 (Mas codigo, forma de acceder al atributo concreto del objeto)
echo "El nombre es: " . $persona['nombre'] . "\n";
echo "La edad es: "   . $persona['edad']   . "\n";
echo "El email es: "  . $persona['email']  . "\n";

//Metodo 2 (Mas rapido para sacar TODOS los atributosS)
foreach ($persona as $clave => $valor) {
    echo "El campo $clave tiene el valor: $valor\n";
}

echo "Nombre: {$persona['nombre']}\n";
?>