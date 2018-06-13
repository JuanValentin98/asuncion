<?php

class database {

  private $pdo;//variable para iniciar el pdo
  var $HOST = "localhost";//nombre del host que se ocupara
  var $BDNAME = "asuncion";//nombre de la base de datos
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
    }
      function subservicio(){
    //prepara la consulta de servicios
    $sql = $this->pdo->prepare("select Sub1.1 from servicios Where Id_servicios=1");
    if ($sql->execute(array(1))) {
      //retorna los datos obtenidos de la base
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    }
  
  function solicitud(){
    //prepara la consulta de solicitud
    $sql = $this->pdo->prepare("select * from bolsa_formulario");
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


 /////SELECCIONA
  function afilidao_id($user, $contraseña){
    $sql = $this->pdo->prepare("SELECT * FROM `administrador` WHERE `Nombre_usuario` = ? AND `passwors`= ?");
    if ($sql->execute(array($user, $contraseña))) {
      //retorna los datos obtenidos de la base
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
  }
  
  
  
  
  
 //////FIN SELECCION
  
  
  //////ACTUALIZA
  function N_bolsa($id, $nombre, $contenido, $telefono,$fecha_limite){
    //inserta una nueva afiliacion
    $sql = $this->pdo->prepare("INSERT INTO bolsa_trabajo(`Id_admin`,`Nombre_vacante`, `Contenido`, `Telefono`,  `Fecha_limite`) VALUES ('{$id}','{$_POST['vacante']}','{$_POST['contenido']}','{$_POST['telefono']}
      ','{$_POST['fecha']}')");
    $sql->execute(array($id, $nombre,$contenido, $telefono,$fecha_limite));
  }


  function Empleado ($id, $nombre, $telefono, $email , $mensaje){
    //inserta una nueva afiliacion
    $sql = $this->pdo->prepare("INSERT INTO `bolsa_formulario`(`Id_bolsa`, `Nombre`,`Correo`, `Telefono`, `Mensaje`) VALUES ('{$_POST['Id_bolsa']}','{$_POST['nombre']}','{$_POST['email']}','{$_POST['telefono']}','{$_POST['comentario']}')");
    $sql->execute(array($id, $nombre, $telefono, $email , $mensaje));
  }
  Function EdiServicio($editCarr,$editGru, $Sub3, $Sub4 ){
      $sql = $this->pdo->prepare("UPDATE servicio SET Sub1='$editCarr', Sub2='$editGru', Sub3='$Sub3', Sub4='$Sub4'");
       $sql->execute(array($editCarr,$editGru, $Sub3, $Sub4));
  }
  
  function Ediservicio1(){
    //prepara la consulta de bolsa de trabajo
    $sql = $this->pdo->prepare("select * from servicio");
    if ($sql->execute(array(1))) {
      //retorna los datos obtenidos de la base
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
  }
  
}
