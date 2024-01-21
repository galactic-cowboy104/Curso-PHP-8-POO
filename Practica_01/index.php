<?php
    require_once "spartan.php";
?>

<!DOCTYPE html>
<html lang="es-MX">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Creación de una clase</title>

    </head>

    <body>

        <h2>Spartan 1</h2>
        <?php
            $jhon_117 = new Spartan("Jhon", "Masculino", "Jefe Maestro", "117");
            echo "<h3>".$jhon_117->Saludar()."</h3>";
            echo "<h3>".$jhon_117->MostrarRango()."</h3>";
        ?>

        <br>

        <h2>Spartan 2</h2>
        <?php
            $emile_A239 = new Spartan("Emile", "Masculino", "Oficial Técnico", "A239");
            echo "<h3>".$emile_A239->Saludar()."</h3>";
            echo "<h3>".$emile_A239->MostrarRango()."</h3>";
        ?>
        
    </body>

</html>

