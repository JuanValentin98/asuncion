<?php

class database {

  private $pdo;//variable para iniciar el pdo
  var $HOST = "localhost";//nombre del host que se ocupara
  var $BDNAME = "cdmu";//nombre de la base de datos
    var $USUARIO = "root";//nombre del usuario
  var $PASSWORD = "";//la contraseña para acceder a la base

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

  function servicio(){
    //prepara la consulta de servicios
    $sql = $this->pdo->prepare("select * from servicios");
    if ($sql->execute(array(1))) {
      //retorna los datos obtenidos de la base
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
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




  function afilidao_id($user, $contraseña){
    $sql = $this->pdo->prepare("SELECT * FROM `administrador` WHERE `Nombre_usuario` = ? AND `Password`= ?");
    if ($sql->execute(array($user, $contraseña))) {
      //retorna los datos obtenidos de la base
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
  }

  function N_bolsa($id, $nombre, $contenido, $telefono,$fecha_limite){
    //inserta una nueva afiliacion
    $sql = $this->pdo->prepare("INSERT INTO bolsa_trabajo(`Id_afiliado`,`Nombre_vacante`, `Contenido`, `Telefono`,  `Fecha_limite`) VALUES ('{$id}','{$_POST['vacante']}','{$_POST['contenido']}','{$_POST['telefono']},'{$_POST['fecha']}')");
    $sql->execute(array($id, $nombre,$contenido, $telefono,$fecha_limite));
  }


  function Empleado ($id, $nombre, $telefono, $email , $mensaje){
    //inserta una nueva afiliacion
    $sql = $this->pdo->prepare("INSERT INTO `bolsa_aspirante`(`Id_bolsa`, `Nombre`, `Telefono`, `Correo`, `Mensaje`) VALUES ('{$_POST['Id_bolsa']}','{$_POST['nombre']}','{$_POST['telefono']}','{$_POST['email']}
      ','{$_POST['comentario']}')");
    $sql->execute(array($id, $nombre, $telefono, $email , $mensaje));
  }



}
