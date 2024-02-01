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
            $jhon = new Spartan("Jhon", "Masculino", "Jefe Maestro", "117");
            echo "<p>".$jhon->Saludar()."</p>";
            echo "<p>".$jhon->MostrarClase()."<p>";
            echo "<p>".$jhon->MostrarRango()."<p>";
        ?>

        <br>

        <h3>Spartan 2</h3>
        <?php
            $emile = new Spartan("Emile", "Masculino", "Oficial Técnico", "A239");
            echo "<p>".$emile->Saludar()."</p>";
            echo "<p>".$emile->MostrarClase()."</p>";
            echo "<p>".spartan::MostrarRango()."</p>";
        ?>

        <br>

        <h3>ODST 1</h3>
        <?php
            $buck = new ODST("Buck", "Masculino", "Sargento de Artillería", "92458-37017-EB");
            echo "<p>".$buck->Saludar()."</p>";
            echo "<p>".ODST::MostrarClase()."</p>";
            echo "<p>".$buck->MostrarRango()."</p>";
            echo "<p>".$buck->Ascender()."</p>";
            echo "<p>".$buck->MostrarApodo()."</p>";
        ?>
        
    </body>

</html>