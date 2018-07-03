<?php

include_once 'database.php';

class funciones {

    private $bd;

    //creacion de la conexion y consultas de la base
    function __construct() {
        $this->bd = new database();
    }

    //funcion para mostrar el mismo menu en todas las paginas
    public function menu() {
        $menu = '
    <!-- Navigation -->
     <SCRIPT LANGUAGE="JavaScript">var txt="CONFECCIONES LA ASUNCION SA DE CV   ";var espera=140;var refresco=null;function rotulo_title() {document.title=txt;txt=txt.substring(1,txt.length)+txt.charAt(0);refresco=setTimeout("rotulo_title()",espera);}rotulo_title();</script>
     <nav class="barras" id="button" >
   <div class="container">
        
        
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="background-color:black;" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar" style="background-color:#fff;"></span>
        <span class="icon-bar" style="background-color:#fff;"></span>
        <span class="icon-bar" style="background-color:#fff;"></span>
      </button>
       
    
    <img class="img1" src="img/Carousel/logoasuncion.png" alt="">
       
        
      </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse col-md-12 barra" id="bs-example-navbar-collapse-1"  >
      <ul class="nav navbar-nav men">
      <li><a href="index.php"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="fa fa-cog"></i> Servicios<span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a href="servicios.php">Elaboración</a></li>
        <li><a href="catalogo.php">Catalogo</a></li>
        <li><a href="bolsa.php">Bolsa de Trabajo</a></li>
        </ul>
    </li>
            <li><a href="nosotros.php" ><i class="fa fa-exclamation-circle"></i> Nosotros</a></li>
            <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="fa fa-user"></i> Administrador<span class="caret"></span></a>
    <ul class="dropdown-menu">';
        // condicion de que exista una variable de sesion
        if (isset($_SESSION['usuario'])) {
            $menu .= '<li><a href="perfil.php">Solicitudes</a></li>
      <li><a href="oportunidad.php">Oportunidad de trabajo</a></li>
      <li><a href="edicion/edicion.php">Editar Sitio Web</a></li>
      <form accion="' . $this->cerrarSession() . '" method="post">
      <li><input type="submit" class="btn" name="salir" value="Cerrar Sesión"></li>
      </form>';
        } else {
            $menu .= '<li><a href="#" data-toggle="modal" data-target="#modal-login">Iniciar Sesión</a></li>';
        }
        $menu .= '</ul>
    </li>
    
    </ul>
      
      
    </div><!-- /.navbar-collapse -->
    </div>
    
</nav>';
        // agrega el modal de seccion
        if (!isset($_SESSION['usuario'])) {
            $menu .= '<div class="modal fade" id="modal-login" role="dialog">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
      <button class="close" data-dismiss="modal">&times;</button>
      <p  style="text-align: center">CONFECCIONES LA ASUNCIÓN</p>
      </div>
      <div class="modal-body">
      <form class="login-form" id="login" method="post" action="' . $this->login() . '">
      <div class="form-group">
      <div class="input-group">
      <input name="user" type="text" id="focus-login" class="form-control" placeholder="Nombre de usuario">
      <span class="input-group-addon">
      <i class="glyphicon glyphicon-user"></i>
      </span>
      </div> <br>
      </div>
      <div class="form-group">
      <div class="input-group">
      <input name="contraseña" type="password" class="form-control" placeholder="Escribe tu contraseña">
      <span class="input-group-addon">
      <i class="glyphicon glyphicon-lock"></i>
      </span>
      </div>
      </div>
      <div class="form-group sign-btn">
      <input type="submit" class="btn" name="logear" value="Entrar"> <br><br>
      
      </div>
      </form>
      </div>
      <div class="modal-footer">
      <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
      </div>
      </div>
      </div>
    ';
        }echo $menu;
    }

    //muestra el mismo footer




    public function footer() {
        echo'<footer>
    <div class="footer">
    <div class="container">
    <div class="row" style="color:white">
    <br>
    <div class="col-xs-7 col-xs-offset-5  ">
    
    <ul class="footer-social">
    <li><a href="https://www.facebook.com/ConfeccionesLaAsuncion/"><i class="fa fa-facebook social-icon facebook" style="font-size:50px" aria-hidden="true"></a></i></li>
    <li><i class="fa fa-twitter social-icon twitter" style="font-size:50px" aria-hidden="true"></i></li>

    </ul> 
    </div>
    
    <div class="col-xs-12" style="text-align:center; text-shadow:1px 2px 5px #000000;">
    <hr class="hr1">
    <h2 style="word-spacing: 5px;">VISITA NUESTRAS INSTALACIONES</h2>
   
 
    
    </div>
    <div class="clearfix visible-xs"></div>

    </div> 
    
    <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="fiit">
    <h4 class="fiit1">CONFECCIONES LA ASUNCIÓN S.A DE C.V</h4>
    </div>
    </div>
    
    
    <!-- /.footer -->
    </footer>';
    }

    public function solicitud() {
        //realiza la consulta
        $con = $this->bd->solicitud();
        $texto = '';
        //recorre los datos
        foreach ($con as $datos) {

            $texto .= '<div style="font-family: 
    Century Gothic,CenturyGothic,AppleGothic,sans-serif;
    color: #ffffff;
    font-size: 18px;
    font-weight: 400;
    text-align: center;
    background: #189ccf;
    margin: 0 0 25px;
    overflow: hidden;
    padding: 20px;
    border-radius: 35px 0px 35px 0px;
    -moz-border-radius: 35px 0px 35px 0px;
    -webkit-border-radius: 35px 0px 35px 0px;
    border: 2px solid #5878ca;">
    <div class="box">
    <div class="col-lg-12">
    <hr>
    <p>' . $datos['Nombre'] . '</p>
    <p>' . $datos['Correo'] . '</p>
    <p>' . $datos['Telefono'] . '</p>
    <p>' . $datos['Mensaje'] . '</p>
    <a  data-id="' . $datos['Id'] . '" class="btn btn-default btn-lg">' . $datos['Curriculum'] . '</a>
    </div>
    </div>';

            $texto .= '<div class="row">
      <div class="box">
      <div class="col-lg-12">
      <hr>
      <p>' . $datos['Nombre'] . '</p>
      <p>' . $datos['Correo'] . '</p>
      <p>' . $datos['Telefono'] . '</p>
      <p>' . $datos['Mensaje'] . '</p>
          <p>' . $datos['Curriculum'] . '</p>
      <a  data-id="' . $datos['Id'] . '" class="btn btn-default btn-lg">' . $datos['Curriculum'] . '</a>
      </div>
      </div>';
        }
        return $texto;
    }

    public function servicios() {
        //realiza la consulta
        $con = $this->bd->servicio();
        $texto = '';
        //recorre los datos
        foreach ($con as $serv) {
            $texto .= '<div class="row">
      <div class="box">
      <div class="col-lg-12">
      <hr>
      <h2 class="intro-text text-center">' . $serv['Tipo_serv'] . '
      </h2>
      <hr>
      </div>
      <div class="col-md-6">
      <img class="img-responsive img-border-left" src="img/' . $serv['imagen'] . '" alt="">
      </div>
      <div>
      <p>' . $serv['Contenido'] . '</p>
      </div>
      <div class="clearfix"></div>
      </div>
      </div>';
        }
        return $texto;
    }

    public function N_bolsa() {

        if (isset($_POST['enviar'])) {
            $id = $_SESSION['id_user'];
            $nombre = $_POST['vacante'];
            $contenido = $_POST['contenido'];
            $telefono = $_POST['telefono'];
            $fecha = $_POST['fecha'];
            $fecha_limite = date("Y-m-d", strtotime($fecha));
            $this->bd->N_bolsa($id, $nombre, $contenido, $telefono, $fecha_limite);
            echo '<script type="text/javascript">alert("Registro correcto");</script>';
        }
    }

    public function N_empleado() {

        if (isset($_POST['enviar'])) {
            ini_set("SMTP", "valentin.dejesus98@gmail.com");
            ini_set("smtp_port", "localhost");
            ini_set('sendmail_from', 'valentin.dejesus98@gmail.com');

            //variables para los campos de texto
            $id = $_POST['Id_bolsa'];
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $mensaje = $_POST['comentario'];
            $this->bd->Empleado($id, $nombre, $telefono, $email, $mensaje);

            //variables para los datos del archivo
            $nameFile = $_FILES['curri']['name'];
            $sizeFile = $_FILES['curri']['size'];
            $typeFile = $_FILES['curri']['type'];
            $tempFile = $_FILES["curri"]["tmp_name"];
            $fecha = time();
            $fechaFormato = date("j/n/Y", $fecha);

            $correoDestino = "valentin.dejesus98@gmail.com";

            //asunto del correo
            $asunto = "Enviado por " . $nombre;


            // -> mensaje en formato Multipart MIME
            $cabecera = "MIME-VERSION: 1.0\r\n";
            $cabecera .= "Content-type: multipart/mixed;";
            //$cabecera .="boundary='=P=A=L=A=B=R=A=Q=U=E=G=U=S=T=E=N='"
            $cabecera .= "boundary=\"=C=T=E=C=\"\r\n";
            $cabecera .= "From: {$email}";

            //Primera parte del cuerpo del mensaje
            ///$contenido = "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "Mensaje: " . $mensaje;
            $cuerpo = "--=C=T=E=C=\r\n";

            $cuerpo .= "Content-Transfer-Encoding: 8bit\r\n";
            $cuerpo .= "\r\n"; // línea vacía
            $cuerpo .= "Correo enviado por: " . $nombre;
            $cuerpo .= " con fecha: " . $fechaFormato . "\r\n";
            $cuerpo .= "Email: " . $email . "\r\n";
            $cuerpo .= "Mensaje: " . $mensaje . "\r\n";

            // -> segunda parte del mensaje (archivo adjunto)
            //    -> encabezado de la parte
            $cuerpo .= "--=C=T=E=C=\r\n";
            $cuerpo .= "Content-Type: application/octet-stream; ";
            $cuerpo .= "name=" . $nameFile . "\r\n";
            $cuerpo .= "Content-Transfer-Encoding: base64\r\n";
            $cuerpo .= "Content-Disposition: attachment; ";
            $cuerpo .= "filename=" . $nameFile . "\r\n";
            $cuerpo .= "\r\n"; // línea vacía

            $fp = fopen($tempFile, "rb");
            $file = fread($fp, $sizeFile);
            $file = chunk_split(base64_encode($file));

            $cuerpo .= "$file\r\n";
            $cuerpo .= "\r\n"; // línea vacía
            // Delimitador de final del mensaje.
            $cuerpo .= "--=C=T=E=C=--\r\n";

            //Enviar el correo
            if (mail($correoDestino, $asunto, $cuerpo, $cabecera)) {

                header("Location:bolsa.php");
            }
        }
    }

    public function login() {
        if (isset($_POST['logear'])) {
            $user = $_POST['user'];
            $contraseña = $_POST['contraseña'];
            $afi = $this->bd->afilidao_id($user, $contraseña);
            if (empty($afi)) {
                echo '<script type="text/javascript">alert("No eres administrador.");</script>';
            } else {
                foreach ($afi as $v) {
                    $_SESSION['usuario'] = $v['Nombre'];
                    $_SESSION['alias'] = $v['Nombre_usuario'];
                    $_SESSION['id_user'] = $v['Id_admin'];
                    $_SESSION['contraseña'] = $v['passwors'];
                    echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=index.php">';
                }
            }
        }
    }

    public function cerrarSession() {
        if (isset($_POST["salir"])) {
            session_destroy();
            echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=index.php">';
        }
    }

    public function activo() {
        $usuario = $_SESSION['alias'];
        $contraseña = $_SESSION['contraseña'];
        $afi = $this->bd->afilidao_id($usuario, $contraseña);
        $activo = "";
        foreach ($afi as $v) {
            $activo = $v['activo'];
        }
        return $activo;
    }

    public function comprobar() {
        if (!isset($_SESSION['usuario'])) {
            echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=index.php">';
        }
    }

    public function bolsa() {
        //se usa la caonsulta
        date_default_timezone_set("America/Mexico_City");
        $fecha_actual = date("Y-m-d");
        $con = $this->bd->bolsa();
        $texto = '';
        //recorre los datos
        foreach ($con as $bolsa) {
            if ($bolsa['Fecha_limite'] > $fecha_actual) {
                $texto .= '<div class="col-sm-4 text-center">
      <h2>
      ' . $bolsa['Nombre_vacante'] . '
      </h2>
      <h4 class="text-justify">
      <small>' . $bolsa['Contenido'] . '</small>
      </h4>
      
      <h4 class="text-justify">
      <small>Teléfono:' . $bolsa['Telefono'] . '</small>
      </h4>
     
      <a data-toggle="modal" data-target="#modal-contact-form" data-id="' . $bolsa['Id_bolsa'] . '" class="btn btn-default btn-lg">Mandar Información</a>
      </div>';
            }
        }
        return $texto;
    }

    //MUESTRA LOS TITULOS Y SUBTITULOS DE SERVICIOS//
    public function tituloserv() {
        //ejecuta la consulta
        $con = $this->bd->servicio();
        $texto = '';
        //recorre los datos
        foreach ($con as $tit) {
            $texto .= '' . $tit['Titulo'] . '';
        }
        return $texto;
    }

    //////fin titulo y subtitulo





    public function EdiServicio() {

        if (isset($_POST['actualizar'])) {
            $editCarr = $_POST['sub1'];
            $editGru = $_POST['sub2'];
            $Sub3 = $_POST['sub3'];
            $Sub4 = $_POST['sub4'];
            $this->bd->EdiServicio($editCarr, $editGru, $Sub3, $Sub4);
        }
    }

}
