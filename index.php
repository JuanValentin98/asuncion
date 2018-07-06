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
        <!-- Load Roboto font --> 

        <!-- Load css styles -->

        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" href="Up/fonts.css" />
        <link rel="stylesheet" href="css/index.css" />
        <link rel="stylesheet" href="css/jquery.cslider.css" />
        <script src="http://code.jquery.com/jquery-latest.js"></script>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <!-- Custom CSS -->
        <link href="css/business-casual.css" rel="stylesheet">
        <link href="css/Style.css" rel="stylesheet">
        <!-- Boton arriba -->
        <link href="css/Up.css" rel="stylesheet">
        <script src="Up/arriba.js"></script>



        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
        <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cinzel|Teko" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
        <!--  codigo de play sin botones :  <audio src="music/lilly wood" autoplay="true" loop="true"></audio> -->
    </head>
    <body>
        <span class="ir-arriba icon-circle-up"></span>
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <img class="slide" class="img-responsive"src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png"  alt="" />
                </div>
                <div class="slide">
                    <img class="slide" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png"  />
                </div>
                <div class="slide">
                    <img class="slide" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png"  />
                </div>
                <div class="slide">
                    <img class="slide" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png"  />
                </div>
                <div class="slide">
                    <img class="slide" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png"  />
                </div>
                <div class="slide">
                    <img class="slide" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png"  />
                </div>
                <div class="slide">
                    <img class="slide" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png"  />
                </div>
                <div class="slide">
                    <img class="slide" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png"  />
                </div>
                <div class="slide">
                    <img class="slide" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png"  />
                </div>
                <div class="slide">
                    <img class="slide" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png"  />
                </div>
                <div class="slide">
                    <img class="slide"  src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png"  />
                </div>
                <div class="slide">
                    <img class="slide" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png"  />
                </div>
                <div class="slide">
                    <img class="slide" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png"  />
                </div>
                <div class="slide">
                    <img class="slide" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" />
                </div>
            </div>
        </div>



        <?php $fun->menu(); ?> 
        <!-- Start home section -->
        <div id="home" >

            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>

                <div class="mask"></div>

                <div class="container">

                    <div class="da-slide">
                        <h2 class="fittext2">Confecciones Asuncion SA DE CV</h2>
                        <h4>Limpieza & Responsabilidad</h4>
                        <div class="da-img">
                            <img src="img/Carousel/logoasuncion.png" alt="image01" width="320">
                        </div>
                    </div>

                    <div class="da-slide">
                        <h2 class="fittext2">Confecciones Asuncion SA DE CV</h2>
                        <h4>Limpieza & Responsabilidad</h4>
                        <div class="da-img">
                            <img src="img/Carousel/sli1.jpg" width="320" alt="image02">
                        </div>
                    </div>

                    <div class="da-slide">
                        <h2 class="fittext2">Confecciones Asuncion SA DE CV</h2>
                        <h4>Limpieza & Responsabilidad</h4>                    
                        <div class="da-img">
                            <img src="img/Carousel/sli2.jpg" width="320" alt="image03">
                        </div>

                    </div>

                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>

                </div>
            </div>
        </div>

        <br>
        <!--SEPARADOR-->
        <img class="img-responsive" src="img/div.png" style="opacity: 0.2; margin: 0 auto; " />
        <!--        SEPARADOR--><br>
        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="col-md-12" >

                        <h2 class="brand-before text-center">
                            Bienvenidos a 
                        </h2>
                        <h1 class="brand-name text-center" >Confecciones La Asunción SA de CV</h1>
                        <br>
                        <p style="font-size: 20px;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    <!-- <<<<<<< HEAD -->
                        </p> 

                        <div id="separar">

                            <a href="nosotros.php" style="text-decoration: none;"><span class="boton3">Leer Más</span></a>

                        </div> 
                        <!--                    <div class="col-md-4 col-md-offset-2" >
                                                <img  class="col-md-offset-2" id="logo"width="250px" src="img/Index/mision1.png">
                        =======
                                            </p> <br> <br>
                                            <div class="col-md-4 col-md-offset-2" >
                        <<<<<<< HEAD
                                                <img  class="col-md-offset-2" id="logo"width="250px" src="img/Index/mision1.png">
                        =======
                                                <img  class="col-md-offset-2" id="logo" width="250px" src="img/Index/mision1.png">
                        >>>>>>> cbcf95b8cabe2ba4a7ac25282ec1d547e3746586
                        >>>>>>> ba0cf8947476adc7b271a8d90f45791885394b05
                                                <p style="text-align: center">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                                </p> <br>
                                            </div>
                                            <div class="col-md-4 ">
                                                <img class="col-md-offset-2" id="logo" width="250px" src="img/Index/Vision.png">
                                                <p style="text-align: center">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                                                </p>
                                            </div>-->

                    </div>
                </div>
                <br>
                <!--SEPARADOR-->
                <img class="img-responsive" src="img/div.png" style="opacity: 0.2; margin: 0 auto; " />
                <!--        SEPARADOR--><br>
                <div class="col-md-12">
                    <div class="row">
                        <div class="box">
                            <hr>
                            <h2 class="intro-text text-center" style="font-size: 30px;">Contáctanos</h2>
                            <hr>
                            <br>
                            <div class="col-md-8">
                                <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=18.4631771,-97.37450660000002&amp;spn=56.506174,79.013672&amp;t=m&amp;z=18&amp;output=embed"></iframe>
                            </div>
                            <div class="col-md-4">
                                <p>Phone:
                                    <strong>(044) 238 383 3131</strong>
                                </p>
                                <p>Email: 
                                    <strong><a href="confec_asuncion@contacto.com">confec_asuncion@contacto.com</a></strong>
                                </p>
                                <p>Address:
                                    <strong>Calle Emiliano Zapata #4004 Colonia La Huizachera,
                                        <br> Tehuacán Puebla.</strong>
                                </p>
                            </div>
                            <div class="clearfix"></div>

                            <br><br>
                            <div class="col-lg-12">

                                <p>Contáctanos para más información, entrevistas o visitas a la empresa.</p>
                                <form role="form">
                                    <div class="row">
                                        <div class="form-group col-lg-4">
                                            <label>Nombre</label>
                                            <input type="text" class="form-control" placeholder="Nombre">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label>Correo</label>
                                            <input type="email" class="form-control" placeholder="Correo">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label>Teléfono</label>
                                            <input type="tel" class="form-control" placeholder="Teléfono">
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="form-group col-lg-12">
                                            <label>Comentario</label>
                                            <textarea class="form-control" rows="6"></textarea>
                                        </div>
                                        <div class="form-group col-lg-12">
                                            <input type="hidden" name="save" value="contact">
                                            <button type="submit" class="btn btn-default col-sm-offset-5">Enviar Datos</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>






            </div><br><br>
        </div>


        <script src="js/jquery_1.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
    </body>
    <!--footer start from here-->

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="car.js"></script>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modals.js"></script>


    <!-- Script to Activate the Carousel -->
    <?php $fun->footer(); ?>



</html>
