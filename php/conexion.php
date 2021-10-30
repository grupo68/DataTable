<?php

    function conexion(){
        //inicio de datos de conexion
        $server     = 'localhost';
        $user       = 'root';
        $pass       = '';
        $db         = 'consultas_68';
        //fin de datos de conexion

        //INICIO DE OTRA FORMA DE CONEXION
        // $conexion = mysqli_connect($server,$user,$pass);
        // mysqli_select_db($conexion,$db) or die("no se encuentra la base de datos");
        // echo 'exito';
        //FIN DE OTRA FORMA DE CONEXION

        //inicio de conexion
        $conexion = new mysqli($server,$user,$pass,$db);
        //fin de conexion

        // if($conexion -> connect_error){
        //     print('la conexion fallo');
        // }else{
        //     echo 'todo fue bien';
        // }

        //retorno que ocurre con la conexion
        return $conexion;

    }

    $respuesta = conexion(); //variable que utilizare en consultas.php
        

?>