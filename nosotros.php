<?php
include_once 'logica/funciones.php';
$fun = new funciones();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""> 
        <meta name="author" content="">

        <title>Confecciones La Asunción S.A DE C.V</title>
        <!-- Load Roboto font -->
       
        <!-- Load css styles -->
        <link href="css/Up.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />      
        
        

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/business-casual.css" rel="stylesheet">
        <link href="css/Style.css" rel="stylesheet">
                        <!-- Boton arriba -->
        <link rel="stylesheet" href="Up/fonts.css" />
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        
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
        
            <?php $fun->menu(); ?> 
        
        <!-- Start home section -->
              
        <br>
        <!--SEPARADOR-->
        <img class="img-responsive" src="img/div.png" style="opacity: 0.2; margin: 0 auto; " />
        <!--        SEPARADOR--><br>
        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="col-md-12" >
                        <p class="text-center" style="font-size: 70px;">Acerca de nosotros</p>     

                        <p style="font-size: 20px;">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p> 

                        <div class="col-sm-6">
                            <div class="thumbnail" style="background-color: black">
                                <img src="img/Index/trazo.jpg" alt="" height="500px" width="980px"/>

                            </div>

                        </div>
                        <div class="col-sm-6">

                            <div class="embed-responsive embed-responsive-4by3">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2dJUdcbWAJ8"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                
                <br>
                <!--SEPARADOR-->
                <img class="img-responsive" src="img/div.png" style="opacity: 0.2; margin: 0 auto; " />
                <!--        SEPARADOR--><br>
                
                <div class="box">
                    <div class="col-lg-12 text-center"><hr>
                        <h1 class="section-heading">Areas de la Empresa</h1>
                        <hr>
                    </div>

                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i><img src="img/Areas/recepcion.jpg" alt="HTML5 Icon" style="width:270px;height:180px;"></i>
                            <h2 class="mb-3">Recepcion de Area</h2>
                            <p class="text-muted mb-0">Our templates are updated regularly so they don't break.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i><img src="img/Areas/supervision.jpg" alt="HTML5 Icon" style="width:270px;height:180px;"></i>
                            <h2 class="mb-3">Supervisión</h2>
                            <p class="text-muted mb-0">You can use this theme as is, or you can make changes!Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i><img src="img/Areas/recursos.jpg" alt="HTML5 Icon" style="width:270px;height:180px;"></i>
                            <h2 class="mb-3">Recursos Humanos</h2>
                            <p class="text-muted mb-0">We update dependencies to keep things fresh.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i><img src="img/Areas/produccion.jpg" alt="HTML5 Icon" style="width:270px;height:180px;"></i>
                            <h2 class="mb-3">Area de Produccion</h2>
                            <p class="text-muted mb-0">You have to make your websites with love these days!Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i><img src="img/Areas/gerencia.jpg" alt="HTML5 Icon" style="width:270px;height:180px;"></i>
                            <h2 class="mb-3">Gerencia de materiales</h2>
                            <p class="text-muted mb-0">Our templates are updated regularly so they don't break.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i><img src="img/Areas/bodega.jpg" alt="HTML5 Icon" style="width:270px;height:180px;"></i>
                            <h2 class="mb-3">Bodega de Accesorios</h2>
                            <p class="text-muted mb-0">You can use this theme as is, or you can make changes!Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i><img src="img/Areas/desperdicios.jpg" alt="HTML5 Icon" style="width:270px;height:180px;"></i>
                            <h2 class="mb-3">Cuarto de Desperdicios</h2>
                            <p class="text-muted mb-0">We update dependencies to keep things fresh.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i><img src="img/Areas/mantenimiento.jpg" alt="HTML5 Icon" style="width:270px;height:180px;"></i>
                            <h2 class="mb-3">Mantenimiento</h2>
                            <p class="text-muted mb-0">You have to make your websites with love these days!Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div><br>
                <!--SEPARADOR-->
                <img class="img-responsive" src="img/div.png" style="opacity: 0.2; margin: 0 auto; " />
                <!--        SEPARADOR--><br>
                <div class="box">

                    <div class="col-sm-6 col-md-6">
                        <div class="thumbnail">

                            <h1 style="text-align: center ; font-size: 50px; font-family: 'Oswald', sans-serif; ">Mision</h1>
                            <p style="font-size: 20px;text-align: center;">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>  


                        </div>
                    </div>                     
                    <div class="col-sm-6 col-md-6">
                        <div class="thumbnail">

                            <h1 style="text-align: center ; font-size: 50px; font-family: 'Oswald', sans-serif; ">Vision</h1>
                            <p style="font-size: 20px;text-align: center;">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>                         
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <?php $fun->footer(); ?>



</html>
