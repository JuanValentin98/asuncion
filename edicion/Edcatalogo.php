<?php
//include_once '../logica/funciones.php';
//$fun = new funciones();
//session_start();
//$fun->comprobar();

////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////

$host = "localhost";
$usuario = "root";
$contraseña = "";
$base = "asuncion";

$conexion = new mysqli($host, $usuario, $contraseña, $base);
if ($conexion->connect_errno) {
    die("Fallo la conexion:(" . $conexion->mysqli_connect_errno() . ")" . $conexion->mysqli_connect_error());
}

/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////

$servicio = "SELECT * FROM servicios";
$resServicio = $conexion->query($servicio);
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <title>Confecciones La Asunción S.A DE C.V</title>

        <!-- Bootstrap Core CSS -->  
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/diseño.css" rel="stylesheet">
        <link href="../css/Style.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">


    </head>
    <body class="body" >


        <!-- Collect the nav links, forms, and other content for toggling -->

        <!-- /.navbar-collapse -->
        <div class="container">
            <div class="col-md-12">
                <a href="../index.php"><img class="boton"  src="../img/Botones/back.png"></a>
                <h1 class="title"> Bienvenido a SERVICIOS</h1>
            </div>



            <header class="head col-md-12 menu ">
                <nav>
                    <ul >
                        <li><a href="edicion.php"><span class="icon-house"></span>Inicio</a></li>
                        <li><a href="Edservicio.php"><span class="icon-suitcase"></span>Servicios</a></li>
                        <li><a href="Edcatalogo.php"><span class="icon-rocket"></span>Catalogo</a></li>
                        <li><a href="Edbolsa.php"><span class="icon-earth"></span>Bolsa de trabajo</a></li>
                        <li><a href="Edcontacto.php"><span class="icon-mail"></span>Contacto</a></li>
                    </ul>
                </nav>
            </header>
            
            
            <section>
            <form method="post">
                
<?php
while ($registroSer = $resServicio->fetch_array(MYSQLI_BOTH)) {
echo'<tr>
    
<div class="row">
                <div class="box">


                    <section id="services">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h1 class="section-heading">     <td><input name="nom[' . $registroSer['Id_servicio'] . ']" value="' . $registroSer['titulo'] . '" /></td>
</h1>
                                    <hr class="my-4">
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box mt-5 mx-auto">
                                        <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
                                        <h2 class="mb-3">     <td><input name="carr[' . $registroSer['Id_servicio'] . ']" value="' . $registroSer['sub1'] . '" /></td>
</h2>
                                        <p class="text-muted mb-0">-Patrocinaje. <br><br> -Fichas Tecnicas. <br><br> -Elaboracion de Muestras.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box mt-5 mx-auto">
                                        <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
                                        <h2 class="mb-3">     <td><input name="gru[' . $registroSer['Id_servicio'] . ']" value="' . $registroSer['sub2'] . '"/></td>
</h2>
                                        <p class="text-muted mb-0">-Creacion. <br><br> -Copiado y/o Modificacion de Reglas de Graduacion.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box mt-5 mx-auto">
                                        <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
                                        <h2 class="mb-3">         <td><input name="sub3[' . $registroSer['Id_servicio'] . ']" value="' . $registroSer['sub3'] . '"/></td>
</h2>
                                        <p class="text-muted mb-0">-Acomodos opticos. <br><br> -Calculos de Consumos. <br><br> -Impresiones de moldes y trazos.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box mt-5 mx-auto">
                                        <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
                                        <h2 class="mb-3">             <td><input name="sub4[' . $registroSer['Id_servicio'] . ']" value="' . $registroSer['sub4'] . '"/></td>
</h2>
                                        <p class="text-muted mb-0">-Servicio de Corte Automatico. <br><br> -Fudionado y Foleo para todo tipo de prenda.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

    <td hidden><input name="Id_ser[]" value="' . $registroSer['Id_servicio'] . '" /></td>

    
     </tr>';
}
?>

                
                <input type="submit" name="actualizar" value="Actualizar Registros" class="btn btn-info col-md-offset-9" />
            </form>

                    <?php
                    if (isset($_POST['actualizar'])) {
                        foreach ($_POST['Id_ser'] as $ids) {
                            
                            $editNom = mysqli_real_escape_string($conexion, $_POST['nom'][$ids]);
                            $editCarr = mysqli_real_escape_string($conexion, $_POST['carr'][$ids]);
                            $editGru = mysqli_real_escape_string($conexion, $_POST['gru'][$ids]);
                             $SUB3 = mysqli_real_escape_string($conexion, $_POST['sub3'][$ids]);
                              $SUB4 = mysqli_real_escape_string($conexion, $_POST['sub4'][$ids]);
                            $actualizar = $conexion->query("UPDATE servicios SET titulo='$editNom', sub1='$editCarr', sub2='$editGru', sub3='$SUB3', sub4='$SUB4' WHERE Id_servicio='$ids'");
                        }

                        if ($actualizar == true) {
                            echo "FUNCIONA! <a href='Edcatalogo.php'>CLICK AQUÍ</a>";
                        } else {
                            echo "NO FUNIONA!";
                        }
                    }
                    ?>



        </section>
            
        </div>
           

       






        <!-- /.container -->

        <!-- jQuery -->
        <script src="../js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/modals.js"></script>
        <script language="javascript" src="js/jquery-1.2.6.min.js"></script>



    </body>

</html>

