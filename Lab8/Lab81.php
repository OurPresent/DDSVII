<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.1</title>
</head>
<body>
<form action="lab81.php" method="post">
        <h3>Indique cual es el porcentaje de sus ventas del 0% a 100%</h3>
        <input type="number" name="valor" required>
        <input type="submit" value="Mostrar Desempeño" name="porcentaje">
    </form>
    <?php
        include("class_lib.php");
        $valor = $_POST['valor'];
        $porcentaje = new Promedio();
        $porcentaje->calcular($valor);
    ?>
</body>
</html>