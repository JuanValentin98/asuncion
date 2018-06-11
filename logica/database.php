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

    
  function edicionservicio($titulo, $sub1, $sub11, $sub111, $sub1111, $sub2, $sub3, $sub4){
    //inserta una nuevo titulo
    $sql = $this->pdo->prepare("UPDATE `servicios` SET `Titulo`='{$_POST['titulo']}', `Sub1`='{$_POST['sub1']}',`Sub1.1`='{$_POST['sub11']}', `Sub1.2`='{$_POST['sub111']}',`Sub1.3`='{$_POST['sub1111']}', `Sub2`='{$_POST['sub2']}', `Sub3`='{$_POST['sub3']}', `Sub4`='{$_POST['sub4']}' WHERE Id_servicios= 1");
    $sql->execute(array($titulo, $sub1, $sub11, $sub111, $sub1111, $sub2, $sub3, $sub4 ));
  }
  
  
//  function sub4($editNom, $editCarr, $editGru, $SUB3, $SUB4 ){
//      
//      if (isset($_POST['actualizar'])) {
//                        foreach ($_POST['Id_ser'] as $ids) {
//                            
//                            $editNom = mysqli_real_escape_string($conexion, $_POST['nom'][$ids]);
//                            $editCarr = mysqli_real_escape_string($conexion, $_POST['carr'][$ids]);
//                            $editGru = mysqli_real_escape_string($conexion, $_POST['gru'][$ids]);
//                             $SUB3 = mysqli_real_escape_string($conexion, $_POST['sub3'][$ids]);
//                              $SUB4 = mysqli_real_escape_string($conexion, $_POST['sub4'][$ids]);
//                            $actualizar = $conexion->query("UPDATE servicios SET titulo='$editNom', sub1='$editCarr', sub2='$editGru', sub3='$SUB3', sub4='$SUB4' WHERE Id_servicio='$ids'");
//                        }
  
  
  
  ///  FIN ACTUALIZADO
        
  
}
