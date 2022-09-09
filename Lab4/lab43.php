<?php
    $v_min = $_POST['min'];
    $v_max = $_POST['max'];
    $i_max = 0;
    $r_max = 0;
    $a = array();
    
    echo "Creando arreglos unidimensionales (Vectores)... <br><br>";
    
    for($i=1; $i<=20;$i++){
        $a[$i]=rand($v_min,$v_max);
        if($r_max==$a[$i]){
            $a[$i]=$r_max-1;
        }elseif($r_max<$a[$i]){
            $r_max=$a[$i];
            $i_max=$i;
        }
        echo " |".$a[$i]."| ";
    }
    echo "<br>El valor máximo es: ".$r_max;
    echo "<br>El indice: ".$i_max;
?>