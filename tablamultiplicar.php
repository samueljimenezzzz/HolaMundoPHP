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
    $aux = $numero
    
    ?>
<body>
    <form method="post" action="">
        <label for="numero">numero:</label>
        <input type="number" id="numero" name="numero" required>
        
        <button type="submit">Enviar</button>
    </form>

 <?php

    for($i = 1; $i <= 10; $i++){
        $numero = $numero*$i;
        echo "<p>$numero<p>";
        $numero = $aux;
    }

    ?>  
    

</body>
</html>