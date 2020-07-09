<?php

$usuario = "root";
$contrasena = ""; 
$servidor = "localhost";
$basededatos = "hotel_gaby_reservas";

/*CREATE DATABASE hotel_gaby_reservas DEFAULT CHARACTER set utf8 COLLATE utf8_spanish2_ci;*/

$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

if(!$conexion->set_charset("utf8")){
  printf("Error cargando el conjunto de caracteres utf8: %\n", $conexion->error);
  exit();
}

$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! no se ha podido conectar a la base de datos elegida");

?>