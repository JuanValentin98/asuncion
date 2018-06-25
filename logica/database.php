<?php

class database {

    private $pdo; //variable para iniciar el pdo
    var $HOST = "localhost"; //nombre del host que se ocupara
    var $BDNAME = "asuncion"; //nombre de la base de datos
    var $USUARIO = "root"; //nombre del usuario
    var $PASSWORD = ""; //la contraseña para acceder a la base

  public function __construct() {
    try {
      //se conecta a la base
      $this->pdo = new PDO('mysql:host=' . $this->HOST . ';dbname=' . $this->BDNAME, $this->USUARIO, $this->PASSWORD);//prepara la conexión
      $this->pdo->exec("set character set utf8");
    } catch (PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();//mensaje por si surge un error
    }
  }

//cierra la conexion
    function CerrarConexion() {
        $this->pdo = null;
    }

    
    ////MUESTRA
    function servicio() {
        //prepara la consulta de servicios
        $sql = $this->pdo->prepare("select * from servicio");
        if ($sql->execute(array(1))) {
            //retorna los datos obtenidos de la base
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    function solicitud() {
        //prepara la consulta de solicitud
        $sql = $this->pdo->prepare("select * from bolsa_formulario");
        if ($sql->execute(array(1))) {
            //retorna los datos obtenidos de la base
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }

  function bolsa(){
    //prepara la consulta de bolsa de trabajo
    $sql = $this->pdo->prepare("select * from bolsa_trabajo");
    if ($sql->execute(array(1))) {
      //retorna los datos obtenidos de la base
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
  }

    function afilidao_id($user, $contraseña) {
        $sql = $this->pdo->prepare("SELECT * FROM `administrador` WHERE `Nombre_usuario` = ? AND `passwors`= ?");
        if ($sql->execute(array($user, $contraseña))) {
            //retorna los datos obtenidos de la base
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }

    function Ediservicio() {
        //prepara la consulta de bolsa de trabajo
        $sql = $this->pdo->prepare("select * from servicio");
        if ($sql->execute(array(1))) {
            //retorna los datos obtenidos de la base
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
    }

//////FIN MUESTRA
    ///////////////----------------------------------///////////////////////////
    //////ACTUALIZA
    function N_bolsa($id, $nombre, $contenido, $telefono, $fecha_limite) {
        //inserta una nueva afiliacion
        $sql = $this->pdo->prepare("INSERT INTO bolsa_trabajo(`Id_admin`,`Nombre_vacante`, `Contenido`, `Telefono`,  `Fecha_limite`) VALUES ('{$id}','{$_POST['vacante']}','{$_POST['contenido']}','{$_POST['telefono']}
      ','{$_POST['fecha']}')");
        $sql->execute(array($id, $nombre, $contenido, $telefono, $fecha_limite));
    }

    function Sub1($sub1) {
        //inserta una nueva afiliacion
        $sql = $this->pdo->prepare("INSERT INTO `servicio`(`Sub1`) VALUES ('{$_POST['sub1']}')");
        $sql->execute(array($sub1));
    }

    function EdiServ($Subtitulo1) {
        //inserta una nueva afiliacion
        $sql = $this->pdo->prepare("UPDATE servicio Sub1='{$_POST['sub1']}'");
        $sql->execute(array($Subtitulo1));
    }

    function N_maquila($id, $nombre_empresa, $direccion_empresa, $telefono_empresa, $email_empresa, $descripcion_empresa) {
        //inserta una nueva maquila
        $sql = $this->pdo->prepare("INSERT INTO `maquila`( `Id_afiliado`, `Nombre_maqui`, `Direccion`, `Telefono`, `Email`, `Descripcion`) VALUES ('{$id}','{$_POST['nombreempresa']}','{$_POST['direccionempresa']}','{$_POST['telefonoempresa']}
      ','{$_POST['emailempresa']}','{$_POST['descripcionempresa']}')");
        $sql->execute(array($id, $nombre_empresa, $direccion_empresa, $telefono_empresa, $email_empresa, $descripcion_empresa));
    }

    function Empleado($id, $nombre, $telefono, $email, $mensaje) {
        //inserta una nueva afiliacion
        $sql = $this->pdo->prepare("INSERT INTO `bolsa_formulario`(`Id_bolsa`, `Nombre`,`Correo`, `Telefono`, `Mensaje`) VALUES ('{$_POST['Id_bolsa']}','{$_POST['nombre']}','{$_POST['email']}','{$_POST['telefono']}','{$_POST['comentario']}')");
        $sql->execute(array($id, $nombre, $telefono, $email, $mensaje));
    }

}
