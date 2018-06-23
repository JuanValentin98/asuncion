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
        <link rel="stylesheet" href="css/CaroAsun.css" type="text/css"/>



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
        <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cinzel|Teko" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css?family=Shrikhand" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Allerta" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <!--  codigo de play sin botones :  <audio src="music/lilly wood" autoplay="true" loop="true"></audio> -->
    </head>
    <body>
        <!-- Collect the nav links, forms, and other content for toggling -->

        <?php $fun->menu(); ?>
        <div id="mycarousel" class="carousel slide cs" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                <li data-target="#mycarousel" data-slide-to="1"></li>
                <li data-target="#mycarousel" data-slide-to="2"></li>
                <li data-target="#mycarousel" data-slide-to="3"></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner " role="listbox">
                <div class="item colorear">
                    <img src="img/Carousel/sli1.jpg"  alt="First Image">
                    <div class="carousel-caption cas">
                        <h3>CONFECCIONES LA ASUNCION</h3>
                    </div>
                </div>
                <div class="item colorear">
                    <img src="img/Carousel/sli2.jpg" data-color="firebrick" alt="Second Image">
                    <div class="carousel-caption cas">
                        <h3>CONFECCIONES LA ASUNCION</h3>
                    </div>
                </div>
                <div class="item colorear">
                    <img src="img/Carousel/sli3.jpg" data-color="violet" alt="Third Image">
                    <div class="carousel-caption cas">
                        <h3>CONFECCIONES LA ASUNCION</h3>
                    </div>
                </div>
                <div class="item colorear">
                    <img src="img/Carousel/sili4.jpg" data-color="lightgreen" alt="Fourth Image">
                    <div class="carousel-caption cas">
                        <h3>CONFECCIONES LA ASUNCION</h3>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br><hr class="style13">


        <div class="container">
            <div class="row">

                <div class="col-md-12" >
                    <p style="text-align: center ; font-size: 50px; font-family: 'Oswald', sans-serif; ">Acerca de nosotros</p>     

                    <p style="font-size: 20px;">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p> <br> <br>
                    <div class="col-md-4 col-md-offset-2" >
                        <img  class="col-md-offset-2" id="logo"width="250px" src="img/Index/mision1.png">
                        <p style="text-align: center">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                        </p> <br>
                    </div>
                    <div class="col-md-4 ">
                        <img class="col-md-offset-2" id="logo" width="250px" src="img/Index/Vision.png">
                        <p style="text-align: center">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                        </p>
                    </div>
                    
                </div>
               
                <div class="col-md-12">
                    
                    <br><br><br><br>
                    <hr class="style13">
            <p style="text-align: center ; font-size: 50px; font-family: 'Oswald', sans-serif; ">Conoce nuestras secciones</p> 
        
            <br>
                </div>
                


<div class="col-lg-12 ima">
         <div class="col-lg-6 col-sm-12">
             <a href="servicios.php">
        <div class="colorear zoom">
            <img  class="  img-responsive" src="img/Index/1.png" title="Foto10" alt="Foto10">
        </div></a><br>
    </div>
    
    <div class="col-lg-6 col-sm-12">
        <a href="catalogo.php">
        <div class="colorear zoom">
        <img  class="  img-responsive" src="img/Index/1.png" title="Foto10" alt="Foto10">
        </div></a>
    </div>
</div>
<br>
<div class="col-lg-12 ima">
         <div class="col-lg-6 col-sm-12">
             <a href="bolsa.php">
        <div class="colorear zoom">
         <img  class="  img-responsive" src="img/Index/2.png" title="Foto10" alt="Foto10">
        </div></a><br>
    </div>
    
    <div class="col-lg-6 col-sm-12">
        <a href="contact.php">
        <div class="colorear zoom">
        <img  class="  img-responsive" src="img/Index/3.png" title="Foto10" alt="Foto10">
        </div></a>
    </div>
</div>


</div><hr class="style13">
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

    <!-- Script to Activate the Carousel -->
    <script>
        var $item = $('.carousel .item');
        var $wHeight = $(window).height();
        $item.eq(0).addClass('active');
        $item.height($wHeight);
        $item.addClass('full-screen');

        $('.carousel img').each(function () {
            var $src = $(this).attr('src');
            var $color = $(this).attr('data-color');
            $(this).parent().css({
                'background-image': 'url(' + $src + ')',
                'background-color': $color
            });
            $(this).remove();
        });

        $(window).on('resize', function () {
            $wHeight = $(window).height();
            $item.height($wHeight);
        });

        $('.carousel').carousel({
            interval: 6000,
            pause: "false"
        });
    </script>

    <?php $fun->footerindex(); ?>



</html>
