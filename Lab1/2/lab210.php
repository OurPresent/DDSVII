<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2.10</title>
</head>
<body>
<?php
        $persona = array(
            array("nombre" => "Rosa", "estatura" => 168, "sexo" => "F"),
            array("nombre" => "Ignacio", "estatura" => 175, "sexo" => "M"),
            array("nombre" => "Daniel", "estatura" => 172, "sexo" => "M"),
            array("nombre" => "Rubén", "estatura" => 182, "sexo" => "M"),
        );

        echo "<b>DATOS SOBRE EL PERSONAL<b><br><hr>";

        $numPersonas = count($persona);

        for($i=0; $i < $numPersonas; $i++){
            print "Nombre: <b>". $persona[$i]['nombre']. "</b><br>";
            print "Estatura: <b>". $persona[$i]['estatura']. " cm</b><br>";
            print "Sexo: <b>". $persona[$i]['sexo']. "</b><br><hr>";
        }
    ?>
</body>
</html>