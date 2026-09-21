<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla Multiplicar PHP</title>
</head>
<?php
    if(isset ($_POST["numero"])){
        $numero = $_POST["numero"];
    }
    else{
        $numero= "1";
    }
    $aux = $numero;
    
    function sumar($a,$b){
        return $a+$b;
    }
    
    ?>
<body>
    <form method="post" action="">
        <label for="numero">Numero:</label>
        <input type="number" id="numero" name="numero" required>
        
        <button type="submit">Enviar</button>
    </form>

 <?php

    for($i = 1; $i <= 10; $i++){
        $numero = $numero*$i;
        echo "<p>$numero * $i= $numero<p>";
        $numero = $aux;
        
    }
    echo sumar($numero,$aux);

    ?>  
    

</body>
</html>