<?php
    if (is_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name'])){
        $nombreDirectorio = "IMG/";
        $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
        $tamArchivo = $_FILES['nombre_archivo_cliente']['size'];
        $tipoArchivo = $_FILES['nombre_archivo_cliente']['type'];
        $limpiarArchivo = explode(".", $nombrearchivo);
        $extension = strtolower(end($limpiarArchivo));
        $nuevoArchivo = md5(time() . $nombrearchivo) . '.' . $extension;
        $nombreCompleto = $nuevoArchivo;
        //$peso = filesize($tamArchivo);
        $arrayExtensiones = array('jpg', 'jpeg','gif', 'png');
        if (in_array($extension, $arrayExtensiones)){
            if($tamArchivo <= 1024000){
                if (is_file($nombreCompleto)){
                    $idUnico = time();
                    $nombrearchivo = $idUnico . "-" . $nombrearchivo;
                    echo "Archivo repetido, se cambiara el nombre a $nombrearchivo <br><br>";
                }
                move_uploaded_file ($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio . $nombreCompleto);
                echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
            }else{
                echo "El archivo contiene un tamaño superior a 1MB";
            }            
        }else{
            echo "Archivo con formato incorrecto, por favor colocar uno de los solicitados. <br>";
        }
    }else
    echo "No se ha podido subir el archivo <br>";
?>