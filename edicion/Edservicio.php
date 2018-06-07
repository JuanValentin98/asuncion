<?php
include_once '../logica/funciones.php';
$fun = new funciones();
session_start();
$fun->comprobar();
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

            <div class="row">
                <div class="box">


                    <section id="services">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h1 class="section-heading"><?php echo $fun->tituloserv();?> </h1>
                                    <a data-toggle="modal" data-target="#titulo" data-id="' Id_titulo '" class="btn btn-default btn-lg"><img style="width: 40px" src="../img/Botones/editar.png"></a>
                                    <hr class="my-4">
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box mt-5 mx-auto">
                                        <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
                                        <h2 class="mb-3"><?php echo $fun->sub1serv();?> </h2>
                                        <a data-toggle="modal" data-target="#sub1" data-id="' Id_sub1 '" class="btn btn-default btn-lg"><img style="width: 40px" src="../img/Botones/editar.png"></a>
                                        <p class="text-muted mb-0">-Patrocinaje. <br><br> -Fichas Tecnicas. <br><br> -Elaboracion de Muestras.</p>
                                        <a data-toggle="modal" data-target="#modal-contact-form" data-id="'.['Id_subtitulo1']. '" class="btn btn-default btn-lg"><img style="width: 40px" src="../img/Botones/editar.png"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box mt-5 mx-auto">
                                        <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
                                        <h2 class="mb-3"><?php echo $fun->sub2serv();?> </h2>
                                        <a data-toggle="modal" data-target="#sub2" data-id="' Id_sub2 '" class="btn btn-default btn-lg"><img style="width: 40px" src="../img/Botones/editar.png"></a>
                                        <p class="text-muted mb-0">-Creacion. <br><br> -Copiado y/o Modificacion de Reglas de Graduacion.</p>
                                        <a data-toggle="modal" data-target="#modal-contact-form" data-id="' id_bolsa '" class="btn btn-default btn-lg"><img style="width: 40px" src="../img/Botones/editar.png"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box mt-5 mx-auto">
                                        <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
                                        <h2 class="mb-3"><?php echo $fun->sub3serv();?> </h2>
                                        <a data-toggle="modal" data-target="#sub3" data-id="' Id_sub3 '" class="btn btn-default btn-lg"><img style="width: 40px" src="../img/Botones/editar.png"></a>
                                        <p class="text-muted mb-0">-Acomodos opticos. <br><br> -Calculos de Consumos. <br><br> -Impresiones de moldes y trazos.</p>
                                        <a data-toggle="modal" data-target="#modal-contact-form" data-id="' id_bolsa '" class="btn btn-default btn-lg"><img style="width: 40px" src="../img/Botones/editar.png"></a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 text-center">
                                    <div class="service-box mt-5 mx-auto">
                                        <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
                                        <h2 class="mb-3"><?php echo $fun->sub4serv();?> </h2>
                                        <a data-toggle="modal" data-target="#sub4" data-id="' Id_sub4 '" class="btn btn-default btn-lg"><img style="width: 40px" src="../img/Botones/editar.png"></a>
                                        <p class="text-muted mb-0">-Servicio de Corte Automatico. <br><br> -Fudionado y Foleo para todo tipo de prenda.</p>
                                        <a data-toggle="modal" data-target="#modal-contact-form" data-id="' id_bolsa '" class="btn btn-default btn-lg"><img style="width: 40px" src="../img/Botones/editar.png"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>



            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">
                            <strong><li><?php echo $fun->sub1serv();?> </li></strong>
                        </h2>
                        <hr>
                        <img class="img-responsive img-border img-left" src="../img/serv.jpg" alt="">
                        <hr class="visible-xs">
                        <br><br> <p>-Patronaje. <br><br> -Fichas Tecnicas. <br><br> -Elaboracion de Muestras.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">
                            <strong><li><?php echo $fun->sub2serv();?> </li></strong>
                        </h2>
                        <hr>
                        <img class="img-responsive img-border img-left" src="../img/cur.jpg" alt="">
                        <hr class="visible-xs">
                        <br><br><br> <p>-Creacion. <br><br> -Copiado y/o Modificacion de Reglas de Graduacion.</p>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">
                            <strong><li><?php echo $fun->sub3serv();?> </li></strong>
                        </h2>
                        <hr>
                        <img class="img-responsive img-border img-left" src="../img/oportunidad.jpg" alt="">
                        <hr class="visible-xs">
                        <br><br> <p>-Acomodos opticos. <br><br> -Calculos de Consumos. <br><br> -Impresiones de moldes y trazos.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">
                            <strong><li><?php echo $fun->sub4serv();?> </li></strong>
                        </h2>
                        <hr>
                        <img class="img-responsive img-border img-left" src="../img/cur.jpg" alt="">
                        <hr class="visible-xs">
                        <br><br><br> <p>-Servicio de Corte Automatico. <br><br> -Fudionado y Foleo para todo tipo de prenda.</p>


                    </div>
                </div>
            </div>

            <div class="row">
                <div class="box">
                    <div class="col-lg-12">
                        <hr>
                        <h2 class="intro-text text-center">
                            <a href=""><strong><a href="index.php">FUSIONADO</a></li></strong></a>
                        </h2>
                        <hr>
                        <img class="img-responsive img-border img-left" src="../img/serv.jpg" alt="">
                        <hr class="visible-xs">
                        <br><br><br> <p>-Fusionado en bloque. <br><br> -Fusionado por pieza.</p>


                    </div>
                </div>
            </div>
        </div>
        
        
        <!--FORMULARIOS-->

<!--TITULO-->
<div class="modal fade" id="titulo" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal1">&times;</button>
          <h2>Actualizar información</h2>
        </div>
        <div class="modal-body">
            <form role="form" id="formulario"  method="post" enctype="multipart/form-data" >
            <div class="row">
              <div class="form-group col-lg-8 col-lg-offset-2 ">
                  <label >TITULO</label>
                <input name="tituloo" type="text" class="form-control "  required="required" autofocus="autofocus">
              </div>
              
              <div class="form-group col-lg-12">
                <input type="hidden" name="Id_servicio" id="id_servicio">
                <button name="enviar" type="submit" class="btn btn-default col-sm-offset-5">Actualizar</button>
              
              </div>
            </div>
         
            <?php $fun->Edtitle(); ?>
            </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
<!--FIN TITULO-->

<!--SUBTITULOS 4-->
<div class="modal fade" id="sub1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal1">&times;</button>
          <h2>Actualizar información</h2>
        </div>
        <div class="modal-body">
            <form role="form" id="formulario"  method="post" enctype="multipart/form-data" >
            <div class="row">
              <div class="form-group col-lg-8 col-lg-offset-2 ">
                  <label >SUBTÍTULO</label>
                <input name="sub1" type="text" class="form-control "  required="required" autofocus="autofocus">
              </div>
              
              <div class="form-group col-lg-12">
                <input type="hidden" name="Id_servicio" id="id_servicio">
                <button name="enviar" type="submit" class="btn btn-default col-sm-offset-5">Actualizar</button>
              
              </div>
            </div>
         
            <?php $fun->Edtitle(); ?>
            </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

<!--FIN SUBTITULOS 4-->

<!--SUB SUBTITULOS 4-->
<!--FINSUB SUBTITULOS 4-->

<!--TITULOS ABAJO 5-->
<!--FIN TITULOS ABAJO 5-->

<!--SUB TITULOS ABAJO 5-->



<!--FIN FORMULARIOS-->
        
        <!--    </section>-->

        <script language="javascript">
            function recargar() {
                var variable_post = "<?php echo $fun->tituloserv(); ?>";
                $.post("miscript.php", {variable: variable_post}, function (data) {
                    $("#recargadoo").html(data);
                });
            }
        </script>


        <p align="center">
            <a href="#" onclick="javascript:recargar();">Mostrar Modificaciones</a>

        </p>  






        <!-- /.container -->

        <!-- jQuery -->
        <script src="../js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/modals.js"></script>
        <script language="javascript" src="js/jquery-1.2.6.min.js"></script>



    </body>

</html>

