<?php

    class Promedio{
        public $valor;

        public Function calcular($valor){
            if($valor >= 80){
                echo "El porcentaje de desempeño ingresado es: ".$valor."%";
                echo "<br><img src="."IMG/happy.png"." alt=".">";
            }elseif($valor >= 50){
                echo "El porcentaje de desempeño ingresado es: ".$valor."%";
                echo "<br><img src="."IMG/middle.png"." alt=".">";
            }else{
                echo "El porcentaje de desempeño ingresado es: ".$valor."%";
                echo "<br><img src="."IMG/sad.png"." alt=".">";
            }
        }
    }

    class Factorial{
        public $valor;

        public function factorial($valor){
            $factorial = 1;
            for($i = 1; $i<=$valor; $i++){
                $factorial = $factorial  * $i;
            }
            echo "<br/> El factorial de ".$valor." es de: ".$factorial;
        }
    }

    class MinMax{
        public int $valor1;
        public int $valor2;

        public function Valores(int $valor1, int $valor2){
            $i_max = 0;
            $r_max = 0;
            $a = array();
            
            echo "Creando arreglos unidimensionales (Vectores)... <br><br>";
            
            for($i=1; $i <= 20; $i++){
                $a[$i] = rand($valor1, $valor2);
                if($r_max == $a[$i]){
                    $a[$i] = $r_max - 1;
                }elseif($r_max < $a[$i]){
                    $r_max = $a[$i];
                    $i_max = $i;
                }
                echo " |".$a[$i]."| ";
            }
            echo "<br>El valor máximo es: ".$r_max;
            echo "<br>El indice: ".$i_max;
        }
    }
?>