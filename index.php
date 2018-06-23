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
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->

        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
 
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
  <!--  codigo de play sin botones :  <audio src="music/lilly wood" autoplay="true" loop="true"></audio> -->
</head>
<body>
  

        <?php $fun->menu();  ?> 
        <!-- Start home section -->
        <div id="home">
            <!-- Start cSlider -->
            <div id="da-slider" class="da-slider">
                <div class="triangle"></div>
                <!-- mask elemet use for masking background image -->
                <div class="mask"></div>
                <!-- All slides centred in container element -->
                <div class="container">
                    <!-- Start first slide -->
                    <div class="da-slide">
                        <h2 class="fittext2">Confecciones Asuncion SA DE CV</h2>
                        <h4>Limpieza & Responsabilidad</h4>
                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.</p>
                        <a href="#" class="da-link button">Read more</a>
                        <div class="da-img">
                            <img src="img/Carousel/logoasuncion.png" alt="image01" width="320">
                        </div>
                    </div>
                    <!-- End first slide -->
                    <!-- Start second slide -->
                    <div class="da-slide">
                        <h2>Easy management</h2>
                        <h4>Easy to use</h4>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <a href="#" class="da-link button">Read more</a>
                        <div class="da-img">
                            <img src="img/Carousel/maquina.png" width="320" alt="image02">
                        </div>
                    </div>
                    <!-- End second slide -->
                    <!-- Start third slide -->
                    <div class="da-slide">
                        <h2>Revolution</h2>
                        <h4>Customizable</h4>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                        <a href="#" class="da-link button">Read more</a>
                        <div class="da-img">
                            <img src="img/Carousel/hilos.png" width="320" alt="image03">
                        </div>
                    </div>
                    <!-- Start third slide -->
                    <!-- Start cSlide navigation arrows -->
                    <div class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </div>
                    <!-- End cSlide navigation arrows -->
                </div>
            </div>
        </div>
        
        <br>
    
        
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
 
$('.carousel img').each(function() {
  var $src = $(this).attr('src');
  var $color = $(this).attr('data-color');
  $(this).parent().css({
    'background-image' : 'url(' + $src + ')',
    'background-color' : $color
  });
  $(this).remove();
});
 
$(window).on('resize', function (){
  $wHeight = $(window).height();
  $item.height($wHeight);
});
 
$('.carousel').carousel({
  interval: 6000,
  pause: "false"
});
</script>

  <?php $fun->footer();  ?>
 


</html>
