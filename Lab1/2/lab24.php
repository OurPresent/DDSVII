<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2.4</title>
</head>
<body>
    <?php
        // Creación del arreglo ("Clave" => "Valor")
        $personas = array("Juan" => "Panama", "John" => "USA", "Eica" => "Finlandia", "Kusunagi" => "Japon");

        //Recorrer todo el arreglo
        foreach($personas as $persona => $pais){
            print "$persona es de $pais <br>";
        }
    ?>
</body>
</html>