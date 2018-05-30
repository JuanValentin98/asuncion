<?php

include_once 'database.php';

class funciones {
    
  private $bd;
  //creacion de la conexion y consultas de la base
  function __construct(){
    $this->bd = new database();
  }
  //funcion para mostrar el mismo menu en todas las paginas
  public function menu() {
 
    $menu='

    <!-- Navigation -->
    <SCRIPT LANGUAGE="JavaScript">var txt="CONFECCIONES LA ASUNCION SA DE CV   ";var espera=140;var refresco=null;function rotulo_title() {document.title=txt;txt=txt.substring(1,txt.length)+txt.charAt(0);refresco=setTimeout("rotulo_title()",espera);}rotulo_title();</script>
                <nav class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
        <ul class="nav navbar-nav navbar-center">
             <li class="active"><img src="img/la_asuncion3.png" width="350px" height="200px"/></li>
             <li><a href="index.php">inicio</a></li>
            <li><a href="servicios.php">Servicios</a></li>
            <li><a href="catalogo.php">Catalogo</a></li>
            <li><a href="bolsa.php">Bolsa de Trabajo</a></li>
            <li><a href="contact.php">Contacto</a></li>
            <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrador<span class="caret"></span></a>
    <ul class="dropdown-menu" style="text-align:center">';
    // condicion de que exista una variable de sesion
    if(isset($_SESSION['usuario'])){
      $menu.='<li><a href="perfil.php">Solicitudes</a></li>
      <li><a href="oportunidad.php">Oportunidad de trabajo</a></li>
      <li><a href="edicion/edicion.php">Editar Sitio Web</a></li>
      <form accion="'.$this->cerrarSession().'" method="post">
      <li><input type="submit" class="btn" name="salir" value="Cerrar Sesión"></li>
      </form>';
    }else{
      $menu.='<li><a href="#" data-toggle="modal" data-target="#modal-login">Iniciar Sesión</a></li>';
    }
    $menu.='</ul>
    </li>
    </ul>
    </div>
    <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
    </nav>  <hr>
    <div class="brand">CONFECCIONES LA ASUNCIÓN </div> <div class="brand">S.A DE C.V</div>
    <hr>s'; 
    // agrega el modal de seccion
    if(!isset($_SESSION['usuario'])){
      $menu.='<div class="modal fade" id="modal-login" role="dialog">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
      <button class="close" data-dismiss="modal">&times;</button>
      <h2>Iniciar sesión</h2>
      </div>
      <div class="modal-body">
      <form class="login-form" id="login" method="post" action="'.$this->login().'">
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
      </div>'
              
              ;
    }
    echo $menu;
  }
  //muestra el mismo footer
  
  public function music() {
     echo'
    <footer>
    <div class="container">
    <div class="row" style="color:white";>
    <div class="col-xs-1 col-sm-1 col-md-1 ">
    <h4>REPRODUCTOR</h4>
    <embed src="music/lilly wood" width="300px" height="60px" console="true" autostart="true" autoplay="true" >
    </div>
    </div>
    <!-- /.row --> 
    </div>
    <!-- /.container --> 
    <!-- /.footer -->
    </footer> ';
}
  
  public function footer() {
    echo'<footer>
    <div class="footer">
    <div class="container">
    <div class="row" style="color:white";>
    <br>
    <div class="col-xs-6 col-sm-4 col-md-4 ">
    <h4>CONFECCIONES LA ASUNCIÓN </h4>
    <ul class="footer-social">
    <li><a href=""><i class="fa fa-facebook social-icon facebook" style="font-size:50px" aria-hidden="true"></a></i></li>
    <li><i class="fa fa-twitter social-icon twitter" style="font-size:50px" aria-hidden="true"></i></li>

    </ul>
    </div>
    <div class="col-xs-6 col-sm-2 col-md-4 ">
    <h4>SECCIONES</h4>
    <ul class="list-unstyled">
    <li><a href="index.php">INICIO</a></li>
    <li><a href="servicios.php">SERVICIOS</a></li>
    <li><a href="catalogo.php">CATALOGO</a></li>
    <li><a href="bolsa.php">BOLSA DE TRABAJO</a></li>
    <li><a href="contact.php">CONTACTO</a></li>

    </ul>
    </div>
    <div class="clearfix visible-xs"></div>

    <div class="col-xs-12 col-sm-4 col-md-4 ">
    <h4>Contáctanos</h4>
    <ul class="list-unstyled">
    <li><i class="glyphicon glyphicon-globe"></i> Calle Emiliano Zapata #4004 Colonia La Huizachera, Tehuacán Puebla.</li>
    <li><i class="glyphicon glyphicon-earphone"></i> (238) 383 3131</li>
    <li><i class="glyphicon glyphicon-earphone"></i> (238) 380 2754</li>
    
    </ul>
    </div>
    </div> <br>
    <!-- /.row -->
    </div>
    <!-- /.container -->
    </div>
    <!-- /.footer -->
    </footer>';
  }
    public function solicitud(){
    //realiza la consulta
    $con=$this->bd->solicitud();
    $texto='';
    //recorre los datos
    foreach ($con as $datos) {

    $texto.='<div style="font-family: 
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
    <p>'.$datos['Nombre'].'</p>
    <p>'.$datos['Correo'].'</p>
    <p>'.$datos['Telefono'].'</p>
    <p>'.$datos['Mensaje'].'</p>
    <a  data-id="'.$datos['Id'].'" class="btn btn-default btn-lg">'.$datos['Curriculum'].'</a>
    </div>
    </div>';

      $texto.='<div class="row">
      <div class="box">
      <div class="col-lg-12">
      <hr>
      <p>'.$datos['Nombre'].'</p>
      <p>'.$datos['Correo'].'</p>
      <p>'.$datos['Telefono'].'</p>
      <p>'.$datos['Mensaje'].'</p>
          <p>'.$datos['Curriculum'].'</p>
      <a  data-id="'.$datos['Id'].'" class="btn btn-default btn-lg">'.$datos['Curriculum'].'</a>
      </div>
      </div>';

    }
    return $texto;
  }
  

  public function bolsa(){
    //se usa la caonsulta
    date_default_timezone_set ("America/Mexico_City");
    $fecha_actual = date("Y-m-d");
    $con = $this->bd->bolsa();
    $texto='';
    //recorre los datos
    foreach ($con as $bolsa) {
      if($bolsa['Fecha_limite'] > $fecha_actual){
      $texto.='<div class="col-sm-4 text-center">
      <h2>
      '.$bolsa['Nombre_vacante'].'
      </h2>
      <h4 class="text-justify">
      <small>'.$bolsa['Contenido'].'<br> Teléfono:'.$bolsa['Telefono'].'</small>
      </h4>
      <a data-toggle="modal" data-target="#modal-contact-form" data-id="'.$bolsa['Id_bolsa'].'" class="btn btn-default btn-lg">Mandar Información</a>
      </div>';
}
    }
    return $texto;
  }

  public function servicios(){
    //realiza la consulta
    $con=$this->bd->servicio();
    $texto='';
    //recorre los datos
    foreach ($con as $serv) {
      $texto.='<div class="row">
      <div class="box">
      <div class="col-lg-12">
      <hr>
      <h2 class="intro-text text-center">'.$serv['Tipo_serv'].'
      </h2>
      <hr>
      </div>
      <div class="col-md-6">
      <img class="img-responsive img-border-left" src="img/'.$serv['imagen'].'" alt="">
      </div>
      <div>
      <p>'.$serv['Contenido'].'</p>
      </div>
      <div class="clearfix"></div>
      </div>
      </div>';
    }
    return $texto;
  }

  public function N_bolsa(){
    if (isset($_POST['enviar'])) {
        $id= $_SESSION['id_user'];
        $nombre= $_POST['vacante'];
        $contenido=$_POST['contenido'];
        $telefono= $_POST['telefono'];
        $fecha=$_POST['fecha'];
        $fecha_limite= date("Y-m-d",strtotime($fecha));
        $this->bd->N_bolsa($id, $nombre, $contenido, $telefono,$fecha_limite);
          echo '<script type="text/javascript">alert("Registro correcto");</script>';
      }
    }
    

    public function N_empleado() {
        
    if (isset($_POST['enviar'])) {
        $Curriculum =$_FILES['curri']['name'];
        $carpeta = "archivos/";
        opendir($carpeta);
        $destino = $carpeta.$Curriculum;
        $ruta = $_FILES['curri']['tmp_name'];
         if ($Curriculum != "") {
         if (copy($ruta, $destino)) {
       
        $id=$_POST['Id_bolsa'];
        $nombre=$_POST['nombre'];
        $telefono=$_POST['telefono'];
        $email=$_POST['email'];
        $mensaje=$_POST['comentario'];

        $this->bd->Empleado($id, $nombre, $telefono, $email ,$mensaje, $Curriculum);
        echo '<script type="text/javascript">alert("Solicitud Enviada");</script>';
        }
          
    }}}

     
    

  public function login(){
    if(isset($_POST['logear'])){
      $user= $_POST['user'];
      $contraseña= $_POST['contraseña'];
      $afi= $this->bd->afilidao_id($user,$contraseña);
      if (empty($afi)) {
        echo '<script type="text/javascript">alert("No eres administrador.");</script>';
      }else {
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

  public function cerrarSession(){
    if (isset($_POST["salir"])) {
      session_destroy();
      echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=index.php">';
    }
  }

  public function activo(){
    $usuario=$_SESSION['alias'  ];
    $contraseña=$_SESSION['contraseña'];
    $afi= $this->bd->afilidao_id($usuario,$contraseña);
    $activo = "";
    foreach ($afi as $v) {
      $activo = $v['activo'];
    }
    return $activo;
  }

  public function comprobar(){
    if(!isset($_SESSION['usuario'])){
        echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=index.php">';
    }
  }
  
    public function tituloserv(){
    //ejecuta la consulta
    $con= $this->bd->titleservicio();
    $texto='';
    //recorre los datos
    foreach ($con as $tit) {
      $texto.=''.$tit['tituloserv'].'';
    }
    return $texto;
  }
  
     public function Edtitle(){
   
      if (isset($_POST["enviar"])) {
        $titulo=$_POST['tituloo'];
        $this->bd->title($titulo);
          echo '<script type="text/javascript">alert("Registro correcto");</script>';
      }
    }
  
  
  
}

