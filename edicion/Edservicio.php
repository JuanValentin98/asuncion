<?php
include_once '../logica/funciones.php';
$fun = new funciones();
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
<body>




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
                <form method="post" class="">
                    
                    <div class="col-lg-4 col-lg-offset-4  text-center">
                        <br class="my-4">
                        <label>Titulo</label>
                       <input class="form-control" style="text-align: center" name="titulo"  value="<?php echo $fun->tituloserv(); ?>" />
                    <hr class="my-4">
                </div>

                    <div class="col-lg-12 text-center">
                    <div class="col-md-3  text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i><br>
                        <label>Titulo</label>
                        <input class="form-control" style="text-align: center" name="sub1"  value="<?php echo $fun->sub1serv(); ?>" /> <hr>
                        <label>Subtitulo</label>
        <input class="form-control" style="text-align: center" name="sub11"  value="<?php echo $fun->sub11serv(); ?>" />
        <input class="form-control" style="text-align: center" name="sub111"  value="<?php echo $fun->sub111serv(); ?>" />
        <input class="form-control" style="text-align: center" name="sub1111"  value="<?php echo $fun->sub1111serv(); ?>" />
                    </div>
                </div>
                <div class="col-md-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i><br>
                        <input class="form-control" style="text-align: center" name="sub2" value=<?php echo $fun->sub2serv(); ?> />
                        <p class="text-muted mb-0">-Creacion. <br><br> -Copiado y/o Modificacion de Reglas de Graduacion.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i><br>
                   <input class="form-control" style="text-align: center" name="sub3" value=<?php echo $fun->sub3serv(); ?>
                        <p class="text-muted mb-0">-Acomodos opticos. <br><br> -Calculos de Consumos. <br><br> -Impresiones de moldes y trazos.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i><br>
                      <input class="form-control" style="text-align: center" name="sub4" value=<?php echo $fun->sub4serv(); ?> /> 
                        <p class="text-muted mb-0">-Servicio de Corte Automatico. <br><br> -Fudionado y Foleo para todo tipo de prenda.</p>
                    </div>
                </div>
                    </div>
                            
                    <input type="submit" name="actualizar" value="Actualizar Registros" class="btn btn-info col-md-offset-5" />
                    <?php $fun->Edicion(); ?>
                   
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

