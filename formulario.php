<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hola Mundo PHP</title>
</head>
<?php
    if(isset ($_GET["nombre"])){
        $nombre = $_GET["nombre"];
    }
    else{
        $nombre = "";
    }
    if(isset ($_GET["edad"])){
        $edad = $_GET["edad"];
    }
    else{
        $edad = "0";
    }
    ?>
<body>
    <form method="get" action="">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>
        <button type="submit">Enviar</button>
    </form>


    
    <?php
        echo "<h1>¡Hola, $nombre!</h1>";
        echo $nombre;
        if($edad >=18){
            echo "<h1>¡Bienvenido!</h1>";
        }
        else if($edad == 0){
            echo "";
        }
        else{
            echo "<h1>¡No puedes pasar!</h1>";
        }
        
           
    ?>
</body>
</html>