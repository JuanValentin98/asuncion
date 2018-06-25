<?php



    
    $host = "localhost";
$usuario = "root";
$contraseña = "";
$base = "asuncion";

$conexion = new mysqli($host, $usuario, $contraseña, $base);
if ($conexion->connect_error) {
    die("Fallo la conexion: " . $conexion->mysqli_connect_error);
}

/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////

$alumnos = "SELECT * FROM servicio";
$resAlumnos = $conexion->query($alumnos);

