<?php
include_once 'logica/funciones.php';

$fun = new funciones();

session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <link href="img/A.ico" type="imagen/x-icon" rel="shortcut icon" >
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Confecciones La Asunción S.A DE C.V</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/business-casual.css" rel="stylesheet">
        <link href="css/Style.css" rel="stylesheet">
        <link href="css/servicio.css" rel="stylesheet">
        <!-- Boton arriba -->
        <link rel="stylesheet" href="Up/fonts.css" />
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <link href="css/Up.css" rel="stylesheet">
        <script src="Up/arriba.js"></script>


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
        <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cinzel|Teko" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">

    </head>

    <body>
        <span class="ir-arriba icon-circle-up"></span>

        <?php $fun->menu(); ?>

        <!--        SEPARADOR-->
        <img class="img-responsive" src="img/div.png" style="opacity: 0.2; margin: 0 auto; " />
        <!--        SEPARADOR-->
        <div class="text-center">
            <h1 class="section-heading">Nuestros servicios</h1>
        </div>
        
        <div class="container">
            <div class="row">
                
                <div class="box">
                    <div class="col-md-12">
                        <div class="col-sm-12">
                            <hr><h3 class="text-center">DISEÑO Y PATRONAJE</h3><hr>
                        </div>
                        
                        <div class="col-sm-4 ">
                            <ul class="demo-3">
                                <li><figure>
                                        <img class="img-responsive" src="img/Servicios/patronaje.jpg"  alt=""/>
                                        <figcaption>
                                            <h2 style="text-align: center">Patronaje</h2>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-4 ">
                            <ul class="demo-3">
                                <li><figure>
                                        <img class="img-responsive" src="img/Servicios/fichas.png"  alt=""/>
                                        <figcaption>
                                            <h2 style="text-align: center">Fichas técnicas</h2>
                                        </figcaption>
                                    </figure></li>
                            </ul>
                        </div>
                        <div class="col-md-4 ">
                            <ul class="demo-3">
                                <li><figure>
                                        <img class="img-responsive" src="img/Servicios/muestras.jpg"  alt=""/>
                                        <figcaption>
                                            <h2 style="text-align: center">Elaboración de muestras</h2>
                                        </figcaption>
                                    </figure></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="box">
                    <div class="col-md-12">
                        <div class="col-sm-12">
                            <hr><h3 class="text-center">GRADUACIÓN</h3><hr>
                        </div>
                        <div class="col-md-4 col-md-offset-2 ">
                            <ul class="demo-3">
                                <li><figure>
                                        <img class="img-responsive" src="img/Servicios/creacion.jpg"  alt=""/>
                                        <figcaption>
                                            <h2 style="text-align: center">Creación</h2>
                                        </figcaption>
                                    </figure></li>
                            </ul>
                        </div>
                        <div class="col-md-4 ">
                            <ul class="demo-3">
                                <li><figure>
                                        <img class="img-responsive" src="img/Servicios/modificado.jpg"  alt=""/>
                                        <figcaption>
                                            <h2 style="text-align: center">Copiado y/o modificado de reglas de graduación</h2>
                                        </figcaption>
                                    </figure></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="box">
                    <div class="col-md-12">
                        <div class="col-sm-12">
                            <hr><h3 class="text-center">TRAZO</h3><hr>
                        </div>
                        
                        <div class="col-sm-4 ">
                            <ul class="demo-3">
                                <li><figure>
                                        <img class="img-responsive" src="img/Servicios/opticos.jpg"  alt=""/>
                                        <figcaption>
                                            <h2 style="text-align: center">Acomodos opticos</h2>
                                        </figcaption>
                                    </figure></li>
                            </ul>
                        </div>
                        <div class="col-md-4 ">
                            <ul class="demo-3">
                                <li><figure>
                                        <img class="img-responsive" src="img/Servicios/consumos.jpg"  alt=""/>
                                        <figcaption>
                                            <h2 style="text-align: center">Calculos de consumos</h2>
                                        </figcaption>
                                    </figure></li>
                            </ul>
                        </div>
                        <div class="col-md-4 ">
                            <ul class="demo-3">
                                <li><figure>
                                        <img class="img-responsive" src="img/Servicios/moldes.jpg"  alt=""/>
                                        <figcaption>
                                            <h2 style="text-align: center">Impresiones de moldes y trazo</h2>
                                        </figcaption>
                                    </figure></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="box">
                    <div class="col-md-12">
                        <div class="col-sm-12">
                            <hr><h3 class="text-center">CORTE Y FOLEO</h3><hr>
                        </div>
                        
                        <div class="col-md-4 col-md-offset-2 ">
                            <ul class="demo-3">
                                <li><figure>
                                        <img class="img-responsive" src="img/Servicios/corte_textil.jpg"  alt=""/>
                                        <figcaption>
                                            <h2 style="text-align: center">Servicio de corte aútomatico</h2>
                                        </figcaption>
                                    </figure></li>
                            </ul>
                        </div>
                        <div class="col-md-4 ">
                            <ul class="demo-3">
                                <li><figure>
                                        <img class="img-responsive" src="img/Servicios/fucionado.jpg"  alt=""/>
                                        <figcaption>
                                            <h2 style="text-align: center">Fucionado y foleo para todo tipo de prenda</h2>
                                        </figcaption>
                                    </figure></li>
                            </ul>
                        </div>
                        
                    </div>
                </div>

                
                


            </div>
        </div>


        <!-- /.container -->
    </body>
    <!--footer start from here-->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modals.js"></script>
    <script src="js/audio.js" ></script>



    <?php $fun->footer(); ?>


</html>
