<?php
    require_once "ODST.php";
?>

<!DOCTYPE html>
<html lang="es-MX">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Creación de una clase</title>

    </head>

    <body>

        <h3>Spartan 1</h3>
        <?php
            $jhon = new Spartan(rango:"Jefe Maestro", num_serv:"117", nombre:"Jhon", genero:"Masculino");
            echo "<h4>".$jhon->Saludar()."</h4>";
            echo "<h4>".$jhon->MostrarClase()."</h4>";
            echo "<h4>".$jhon->MostrarRango()."</h4>";
        ?>

        <br>

        <h3>Spartan 2</h3>
        <?php
            $emile = new Spartan(nombre:"Emile", rango:"Oficial Técnico", genero:"Masculino", num_serv:"A239");
            echo "<h4>".$emile->Saludar()."</h4>";
            echo "<h4>".$emile->MostrarClase()."</h4>";
            echo "<h4>".$emile->MostrarRango()."</h4>";
        ?>

        <br>

        <h3>ODST 1</h3>
        <?php
            $buck = new ODST(genero:"Masculino", nombre:"Buck", rango:"Sargento de Artillería", num_serv:"92458-37017-EB");
            echo "<h4>".$buck->Saludar()."</h4>";
            echo "<h4>".$buck->MostrarClase()."</h4>";
            echo "<h4>".$buck->MostrarRango()."</h4>";
            echo "<h4>".$buck->Ascender()."</h4>";
        ?>
        
    </body>

</html>