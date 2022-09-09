<?php 
    if(array_key_exists('valor', $_POST)){
        if($_REQUEST['valor'] >= 80){
            echo "El porcentaje de desempeño ingresado es: $_REQUEST[valor]%";
            echo "<br><img src="."IMG/happy.png"." alt=".">";
        }elseif($_REQUEST['valor'] >= 50){
            echo "El porcentaje de desempeño ingresado es: $_REQUEST[valor]%";
            echo "<br><img src="."IMG/middle.png"." alt=".">";
        }else{
            echo "El porcentaje de desempeño ingresado es: $_REQUEST[valor]%";
            echo "<br><img src="."IMG/sad.png"." alt=".">";
        }
    }
?>