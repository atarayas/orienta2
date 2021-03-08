<?php

function conectarDB(){
//Conexión a DB
        // $servidor = "localhost";
        // $usuario = "orienta_adminMEP";
        // $password = "Orienta210*MEP";
        // $bd = "orienta_registro";
        $servidor = "localhost";
        $usuario = "prueba_gespro";
        $password = "Hola123Gespro";
        $bd = "orienta_registro";
    $conexion = mysqli_connect($servidor, $usuario, $password,$bd);

        if($conexion){
            echo "";
        }else{
            echo 'Ha sucedido un error inexperado en la conexion de la base de datos';
        }

    return $conexion;
}
?>