<?php
    include('../php/conexion.php'); //incluir la conexion

    $sql = "SELECT * FROM persona"; //codigo SQL

    $consulta = mysqli_query($respuesta,$sql) or die(mysqli_error());
     //$tabla= ""; //otra forma de crear el jason
    $retorno_array = array();

    while($fila = mysqli_fetch_array($consulta)){
        $row_array['id']             = $fila['id'];
        $row_array['nombre']         = $fila['nombre'];
        $row_array['documento']      = $fila['documento'];
        $row_array['tel']            = $fila['tel_1'];
        $row_array['direccion']      = $fila['direccion'];

        array_push($retorno_array, $row_array);

        // $tabla.='{ 
        //     "id":"'.$fila['id'].'", 
        //     "nombre":"'.$fila['nombre'].'", 
        //     "documento":"'.$fila['documento'].'", 
        //     "tel":"'.$fila['tel_1'].'", 
        //     "direccion":"'.$fila['direccion'].'" 
        // },'; 
    }

        print ('{"data":'.json_encode($retorno_array).'}');
    // $tabla = substr($tabla,0, strlen($tabla) -1); //otra forma de crear el jason
    // echo '{"data":['.$tabla.']}' ; //otra forma de crear el jason

?>