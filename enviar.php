<?php
        if (isset($_POST['enviar'])) {


            $destino = "valentin.dejesus98@gmail.com";
            $id = $_POST['Id_bolsa'];
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $mensaje = $_POST['comentario'];
            $this->bd->Empleado($id, $nombre, $telefono, $email, $mensaje);
            $contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "Mensaje: " . $mensaje . "\n" . $curriculum;
            mail($destino, "Contacto", $contenido);
            echo '<script type="text/javascript">alert("Solicitud Enviada");</script>';
        }
    





 ?>