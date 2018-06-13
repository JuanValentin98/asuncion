<?php
include_once '../logica/funciones.php';
include_once '../logica/FunEdicion.php';
$fun = new funciones();
$edi = new FunEdicion();
session_start();
$fun->comprobar();

////////////////// CONEXION A LA BASE DE DATOS ////////////////////////////////////
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
    <script>
      window.onload = detectarCarga;
      function detectarCarga(){
         document.getElementById("carga").style.display="none";
      }
    </script>
    
<div id="carga">
    <img src="../img/loader/carga.gif" />
</div>
    <body class="bod">




        <!-- Collect the nav links, forms, and other content for toggling -->

        <!-- /.navbar-collapse -->
        <div class="container">
            <div class="col-md-12 ">
                <a href="../index.php"><img class="boton"  src="../img/Botones/back.png"></a>
                <h1 class="title"> Bienvenido a SERVICIOS</h1>
            </div>
<?php $edi->menuEd();  ?>
            <section class="col-lg-10">
                <form method="post" class="">
                    <div class="col-lg-4 col-lg-offset-3  text-center">
                       <label>Titulo</label>
                       <input class="form-control" style="text-align: center" name="titulo"  ?>" />
                    <hr class="my-4">
                </div>

                    <div class="col-lg-12 text-center">
                    <div class="col-lg-3  text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i><br>
                        <label>Titulo</label>
                        <input class="form-control" style="text-align: center" name="sub1"  " /> <hr>
                        <label>Subtitulo</label>
        
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i><br>
                        <input class="form-control" style="text-align: center" name="sub2"  />
                        <p class="text-muted mb-0">-Creacion. <br><br> -Copiado y/o Modificacion de Reglas de Graduacion.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i><br>
                   <input class="form-control" style="text-align: center" name="sub3" 
                        <p class="text-muted mb-0">-Acomodos opticos. <br><br> -Calculos de Consumos. <br><br> -Impresiones de moldes y trazos.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i><br>
                      <input class="form-control" style="text-align: center" name="sub4"  /> 
                        <p class="text-muted mb-0">-Servicio de Corte Automatico. <br><br> -Fudionado y Foleo para todo tipo de prenda.</p>
                    </div>
                </div>
                    </div>
                            
                    <input type="submit" name="actualizar" value="Actualizar Registros" class="btn btn-info col-md-offset-5" />
                    
                   
                </form>
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

