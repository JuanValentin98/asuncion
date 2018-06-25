<?php
include_once '../logica/funciones.php';
include_once '../logica/FunEdicion.php';
include '../logica/databaseEd.php';
$fun = new funciones();
$funEd = new FunEdicion();
session_start();
$fun->comprobar();
?>
<?php
if (isset($_POST['actualizar'])) {
    foreach ($_POST['idalu'] as $ids) {
        $editCarr = mysqli_real_escape_string($conexion, $_POST['carr'][$ids]);
        $editGru = mysqli_real_escape_string($conexion, $_POST['gru'][$ids]);
        $Sub3 = mysqli_real_escape_string($conexion, $_POST['sub3'][$ids]);
        $Sub4 = mysqli_real_escape_string($conexion, $_POST['sub4'][$ids]);
        $actualizar = $conexion->query("UPDATE servicio SET Sub1='$editCarr', Sub2='$editGru', Sub3='$Sub3', Sub4='$Sub4' WHERE Id_servicio='$ids'");
    }

    if ($actualizar == true) {
        echo "FUNCIONA! <a href='Edcatalogo.php'>CLICK AQUÍ</a>";
    } else {
        echo "NO FUNIONA!";
    }
}
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
        <link href="../css/loader.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

    </head>
<!--    <script>
      window.onload = detectarCarga;
      function detectarCarga(){
         document.getElementById("carga").style.display="none";
      }
    </script>
    
<div id="carga">
    <img src="../img/loader/carga.gif" />
</div>-->


    <body class="bod">
        <!-- Collect the nav links, forms, and other content for toggling -->

        <!-- /.navbar-collapse -->
        <div class="col-md-12 ">
<!--                <a href="../index.php"><img class="boton"  src="../img/Botones/back.png"></a>-->
            <hr>
            <h1 class="title"> Bienvenido a SERVICIOS</h1>
            <hr>
        </div>

        <?php $funEd->menuEd(); ?>       
        <div class="col-md-10 col-md-offset-2">
            <div class="col-md-3">
                <img src="../img/Icons/Diseño.png" width="100px" style="position: absolute" />
            </div>
           
            <div class="col-md-3">
                <img src="../img/Icons/Graduacion.png"  width="100px"/> 
            </div>
            
            <div class="col-md-3">
                <img src="../img/Icons/Trazo.png"  width="100px"/> 
            </div>
            
            <div class="col-md-2">
                <img src="../img/Icons/Corte.png"  width="100px"/> 
            </div>
        <section>
            <form method="post">
                <table class="table">
                    <?php 
                    while ($registroAlumnos = $resAlumnos->fetch_array(MYSQLI_BOTH)) {

                        echo'<tr> 
        
<td hidden><input name="idalu[]" value="' . $registroAlumnos['Id_servicio'] . '" /></td>
    First name:<br>
    <td><input name="carr[' . $registroAlumnos['Id_servicio'] . ']" value="' . $registroAlumnos['Sub1'] . '" /></td>
     <td><input name="gru[' . $registroAlumnos['Id_servicio'] . ']" value="' . $registroAlumnos['Sub2'] . '"/></td>
         <td><input name="sub3[' . $registroAlumnos['Id_servicio'] . ']" value="' . $registroAlumnos['Sub3'] . '"/></td>
             <td><input name="sub4[' . $registroAlumnos['Id_servicio'] . ']" value="' . $registroAlumnos['Sub4'] . '"/></td>
     </tr>';
                    }
                    ?>

                </table>
                <input type="submit" name="actualizar" value="Actualizar Registros" class="btn btn-info col-md-offset-9" />
            </form>





        </section>

        <hr>

        <hr>



        <hr>

        <hr>

        <hr>

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

