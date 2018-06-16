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
      <!-- Collect the nav links, forms, and other content for toggling -->
      
      <?php $fun->menu();  ?>
<div id="mycarousel" class="carousel slide cs" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
    <li data-target="#mycarousel" data-slide-to="2"></li>
    <li data-target="#mycarousel" data-slide-to="3"></li>
    <li data-target="#mycarousel" data-slide-to="4"></li>
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
    <div class="item">
        <img src="https://unsplash.it/2000/1250?image=638" data-color="tomato" alt="Fifth Image">
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
 <br>
  
  <div class="container">

      

  <div class="row">
    <div class="box">
      <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">
            <a href="servicios.php"><strong>SERVICIOS</strong></a>
        </h2>
        <hr>
        <img class="img-responsive img-border img-left" src="img/servi.jpg" alt="">
        <hr class="visible-xs">
          <p>Los servicios se basan en el contexto operativo de la solicitud y las políticas establecidas para satisfacer las necesidades de los clientes .</p>
        <p>Se ofrecen servicios a los usuarios con el fin de que puedan conocer o encontrar las posibilidades de trabajo, saber  los beneficios que da la empresa hacia ellos.  </p>
         <p>-Capacitaciones <br> -Cursos <br> -Oportunidades de trabajo</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="box">
      <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">
          <a href=""><strong>CURSOS</strong></a>
        </h2>
        <hr>
        <img class="img-responsive img-border img-left" src="img/cur.jpg" alt="">
        <hr class="visible-xs">
        <p>Los cursos o desarrollo de personal es una actividad desarrollada en la empresa de acuerdo a sus necesidades y habilidades del personal.</p>
        <p>Damos cursos enfocados a la industria del vestido, para así tener personal más actualizado en la empresa.</p>
        <p>Los cursos no solo son un proceso, es un aprendizaje para la persona que lo tome. Son herramientas que servirán para su desempeño en la empresa. </p>


      </div>
    </div>
  </div>
  <div class="row">
    <div class="box">
      <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">
          <a href=""><strong>OPORTUNIDADES DE TRABAJO</strong></a>
        </h2>
        <hr>
        <img class="img-responsive img-border img-left" src="img/oportunidad.jpg" alt="">
        <hr class="visible-xs">
        <p>Las oportunidades de trabajo van enfocadas a las personas que quieran participar dentro de la empresa por distintos periodos de tiempo. </p>
        <p>Los aspirantes tendrán entrevistas de trabajo, pruebas para poder pasar a formar parte del equipo de trabajo.</p>

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
