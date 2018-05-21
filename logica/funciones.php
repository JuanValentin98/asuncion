<?php

include_once 'logica/database.php';

class funciones {

  private $bd;
  //creacion de la conexion y consultas de la base
  function __construct(){
    $this->bd = new database();
  }
  //funcion para mostrar el mismo menu en todas las paginas
  public function menu() {
    $menu='
    <div class="brand">CONFECCIONES LA ASUNCIÓN </div> <div class="brand">S.A DE C.V</div>
    <div class="address-bar">CENTRO DE DISEÑO Y DESARROLLO EN MODA URBANA A.C.</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>  
    </button>
    <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
    <a class="navbar-brand" href="index.html">Business Casual</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav" style="font-size:15px;">
    <li><a href="index.php">INICIO</a></li>
    <li><a href="servicios.php">SERVICIOS</a></li>
    
    <li><a href="catalogo.php">Catalogo</a></li>
    <li><a href="bolsa.php">Bolsa de trabajo</a></li>
    <li><a href="contact.php">Contacto</a></li>
    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrador<span class="caret"></span></a>
    <ul class="dropdown-menu">';
    // condicion de que exista una variable de sesion
    if(isset($_SESSION['usuario'])){
      $menu.='<li><a href="perfil.php">Ver Perfil</a></li>
      <li><a href="oportunidad.php">Oportunidad de trabajo</a></li>
      <form accion="'.$this->cerrarSession().'" method="post">
      <li><input type="submit" class="btn" name="salir" value="cerrar sesión"></li>
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
    </nav>  ';
    // agrega el modal de seccion
    if(!isset($_SESSION['usuario'])){
      $menu.='<div class="modal fade" id="modal-login" role="dialog">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
      <button class="close" data-dismiss="modal">&times;</button>
      <h3>Iniciar sesión</h3>
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
      </div>';
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
    <h4>C D D M U </h4>
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
    <li><a href="cursos.php">CURSOS</a></li>
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
      <h3>
      '.$bolsa['Nombre_vacante'].'
      </h3>
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

   public function N_afiliado(){
    if (isset($_POST['agregar'])) {
      $nombre= $_POST['nombre'];
      $apellidos=$_POST['apellidos'];
      $email= $_POST['email'];
      $direccion= $_POST['direccion'];
      $telefono=$_POST['telefono'];
      $user= $_POST['user'];
      $contraseña=$_POST['contraseña'];
      $confirmar=$_POST['confirmar'];
      //datos de la empresa
      $nombre_empresa=$_POST['nombreempresa'];
      $direccion_empresa=$_POST['direccionempresa'];
      $telefono_empresa=$_POST['telefonoempresa'];
      $email_empresa=$_POST['emailempresa'];
      $descripcion_empresa=$_POST['descripcionempresa'];
      if ($confirmar == $contraseña) {
        $this->bd->N_afiliado($nombre, $apellidos, $email, $direccion, $telefono, $user, $contraseña);
        $afiliado= $this->bd->afilidao_id($user, $contraseña);
        $id="";
        foreach ($afiliado as $afi) {
          $id=$afi['Id_admin'];
        }
        $this->bd->N_maquila($id,$nombre_empresa,$direccion_empresa,$telefono_empresa,$email_empresa,$descripcion_empresa);
        echo '<script type="text/javascript">alert("Usted ha sido afiliado con exito espere la orden de pago");</script>';
        echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=index.php">';
      }else{
        echo '<script type="text/javascript">alert("Verifique su contraseña");</script>';
      }
    }
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
    

    public function N_empleado(){
      if (isset($_POST["enviar"])) {
        $id=$_POST['Id_bolsa'];
        $nombre=$_POST['nombre'];
        $telefono=$_POST['telefono'];
        $email=$_POST['email'];
        $mensaje=$_POST['comentario'];
        $this->bd->Empleado($id, $nombre, $telefono, $email , $mensaje);
          echo '<script type="text/javascript">alert("Solicitud Enviada");</script>';
      }
    }

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

  public function maqula(){
    $maquilas= $this->bd->maquila($_SESSION['id_user']);
    $texto='';
    //recorre los datos
    foreach ($maquilas as $maq) {
      $texto.='<div style="color:black; ">
        <div ><h4>
          '.$maq['Nombre_maqui'].'
        </h4></div><br>
        <div><h4>
          '.$maq['Direccion'].'
        </h4></div><br>
        <div ><h4>
          '.$maq['Telefono'].'
        </h4></div><br>
        <div><h4>
          '.$maq['Email'].'
        </h4></div><br>
        <div><h4>
          '.$maq['Descripcion'].'
          </h4>
        </div>
      </div>';
    }
    echo $texto;
  }
}
