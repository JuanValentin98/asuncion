<?php

$destino= "valentin.dejesus98@gmail.com";
$nombre = $_POST["nombre"];
$telefono = $_POST["telefono"];
$correo = $_POST["email"];
$curriculum = $_POST["curri"];
$mensaje = $_POST["comentario"];

$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "Mensaje: " . $mensaje . "\n" . $curriculum;

mail($destino, "Contacto", $contenido);
header("Location:index.php");
 
 
 ?>