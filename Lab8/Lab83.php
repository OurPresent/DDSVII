<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.3</title>
</head>
<body>
    <form action="lab83.php" method="post" >
        <p>Introduzca el valor minimo de los datos:</p> 
        <input type="text" value="" name="min">
        <br><br>
        <p>Introduzca el valor maximo de los datos:</p> 
        <input type="text" value="" name="max">
        <br><br>
        <input type="submit" value="Evaluar">
    </form>
    <?php
        include("class_lib.php");
        $valor1 = $_POST['min'];
        $valor2 = $_POST['max'];
        $valores = new MinMax();
        $valores->Valores($valor1, $valor2);
    ?>
</body>
</html>