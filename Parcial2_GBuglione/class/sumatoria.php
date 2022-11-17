<?php 
    require_once('modelo.php');

    class sumatoria extends modeloCredencialesBD{
        public function __construct(){
            parent::__construct();
        }

        public function mostrar_resultado(){
            $instruccion = "CALL sp_mostrar_resultados()";
            $consulta = $this->_db->query($instruccion);
            $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

                if($resultado){
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
        }

        public function modificar_sumatoria($n, $id){
            $instruccion = "CALL sp_modificar_sumatoria(".$n.", ".$id.")";
            $actualiza = $this->_db->query($instruccion);

                if($actualiza){
                    return $actualiza;
                    $actualiza->close();
                    $this->_db->close();
                }
        }

        public function ingresar_numero($n, $factorial, $sumatoria){
            $instruccion = "INSERT INTO parcial2 (N, Factorial, Sumatoria) values (".$n.", ".$factorial.", ".$sumatoria.")";
            $ingresar = $this->_db->query($instruccion);

                if($ingresar){
                    return $ingresar;
                    $ingresar->close();
                    $this->_db->close();
                }
        }

        public function factorial($n){
            $factorial = 1;
            for ($i = 1; $i <= $n; $i++){ 
                $factorial = $factorial * $i; 
              } 
            return $factorial;
        }
    }
?>