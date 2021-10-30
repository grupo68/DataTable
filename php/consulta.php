<?php
    include('../php/conexion.php'); //incluir la conexion

    $sql = "SELECT * FROM persona"; //codigo SQL

    $consulta = mysqli_query($respuesta,$sql) or die(mysqli_error());
    // $tabla= ""; //otra forma de crear el jason
    $retorno_array = array();

    while($fila = mysqli_fetch_array($consulta)){
        $row_array['id']             = utf8_encode($fila['id']);
        $row_array['nombre']         = utf8_encode($fila['nombre']);
        $row_array['documento']      = utf8_encode($fila['documento']);
        $row_array['tel']            = utf8_encode($fila['tel_1']);
        $row_array['direccion']      = utf8_encode($fila['direccion']);

        array_push($retorno_array, $row_array);

        // $tabla.='{ //otra forma de crear el jason
        //     "id":"'.$fila['id'].'", //otra forma de crear el jason
        //     "nombre":"'.$fila['nombre'].'", //otra forma de crear el jason
        //     "documento":"'.$fila['documento'].'", //otra forma de crear el jason
        //     "tel":"'.$fila['tel_1'].'", //otra forma de crear el jason
        //     "direccion":"'.$fila['direccion'].'" //otra forma de crear el jason
        // },'; //otra forma de crear el jason
    }

        print ('{"data":'.json_encode($retorno_array).'}');
    // $tabla = substr($tabla,0, strlen($tabla) -1); //otra forma de crear el jason
    // echo '{"data":['.$tabla.']}' ; //otra forma de crear el jason

?>