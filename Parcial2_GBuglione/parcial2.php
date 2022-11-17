<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Parcial N°2</title>
</head>
<body>
    <h1>Aplicación web que realiza la Sumatoria</h1>

    <form action="parcial2.php" method="post">
        Valor N: <input type="number" name="n" id="n"><br>
        Valor Factorial: <input type="number" name="factorial" id="factorial"><br>
        Guardar Valores -> <input type="submit" value="Guardar" name="Guardar"><br>
        Mostrar Resultado -> <input type="submit" value="Resultado" name="Resultado"><br>

        <br>
        Modificar N:
        <br>
        ID: <input type="number" name="ID" id="ID"><br>
        N: <input type="number" name="n" id="n"><br>
        Cambiar <input type="submit" value="Modificar" name="Modificar"><br>
        <br><br>
    </form>
    <?php
        require_once("class/sumatoria.php");

        $obj_sumatoria = new sumatoria();
        
        if(array_key_exists('Guardar', $_POST)){
            $p = $obj_sumatoria->factorial($_REQUEST['n']);
            $obj_sumatoria->ingresar_numero($_REQUEST['n'], $_REQUEST['factorial'], $p);
        }

        if(array_key_exists('Resultado', $_POST)){        
            $r1 = $obj_sumatoria->mostrar_resultado();

            //Elementos
            foreach($r1 as $value){
                print("<tr>\n");
                print_r($value);
                print("<br>");
            }
        }

        if(array_key_exists('Modificar', $_POST)){        
            $r2 = $obj_sumatoria->modificar_sumatoria($_REQUEST['n'], $_REQUEST['ID']);
        }
    ?>
</body>
</html>