<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.5</title>
<body>
</head>
        <?php
            $i=1;
            if(array_key_exists('enviar', $_POST)){
                
                if($_REQUEST['num']!=""){
                    $m_size = $_REQUEST['num'];
                    if($m_size>1){
                        $unit = 1;
                        echo "<table border=1>";
                        
                        for ($n1=1; $n1<=$m_size; $n1++)
                        {
                            echo "<tr>";
                        
                        for($n2=1;$n2<=$m_size;$n2++)
                        {   
                            if($unit==$n2){
                                echo"<td bgcolor=#bdc3d6>",1,"</td>";
                            }
                            else{
                                echo "<td>",0,"</td>";
                            }
                        }  
                        $unit = $unit +1;
                        echo "</tr>";
                        }
                        echo "</table>";
                    }
                    else{
                        echo "Ingrese un Numero mayor a 1!";
                    }
                }
            }
        ?>
        <form action="lab45.php" method="post">
            <br><br>
            Ingrese el tamaño de la matriz: 
            <input type="text" name="num">
            <br><br>
            <input type="submit" name="enviar" value="Ingresar">
        </form>
    </body>
</html>