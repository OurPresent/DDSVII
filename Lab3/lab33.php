<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorios 3.3</title>
</head>
<body>
    <?php 

        if(array_key_exists('enviar', $_POST)){
            if($_REQUEST['Apellido'] != ""){
                echo "El apellido Ingresado es: $_REQUEST[Apellido]";
            }else{
                echo "Favor coloque el apellido";
            }

            echo "<br>";

            if($_REQUEST['Nombre'] != ""){
                echo "El nombre ingresado es: $_REQUEST[Nombre]";
            }else{
                echo "Favor coloque el nombre";
            }
        }else{
    ?>
    <form action="lab33.php" method="post">
        Nombre: <input type="text" name="Nombre"><br>
        Apellido: <input type="text" name="Apellido"><br>
        <input type="submit" value="Enviar Datos" name="enviar">
    </form>
    <?php
        }
    ?>
</body>
</html>