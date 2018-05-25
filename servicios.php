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

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  <!--  codigo de play sin botones :  <audio src="music/lilly wood" autoplay="true" loop="true"></audio> -->
</head>

<body>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <?php $fun->menu();  ?>


  <div class="container">

    <div class="row">
      <div class="box">
        <div class="col-lg-12 text-center">

            <h1 class="brand-name" style="color: #000; font-size: 50px ">S E R V I C I O S</h1>

        
      </div>
    </div>
  </div>

      
      
        <div class="row">
    <div class="box">

        
            <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1 class="section-heading">Nuestros servicios</h1>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
              <h2 class="mb-3">DISEÑO Y PATRONAJE</h2>
              <p class="text-muted mb-0">-Patrocinaje. <br><br> -Fichas Tecnicas. <br><br> -Elaboracion de Muestras.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i>
              <h2 class="mb-3">GRADUACION</h2>
              <p class="text-muted mb-0">-Creacion. <br><br> -Copiado y/o Modificacion de Reglas de Graduacion.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
              <h2 class="mb-3">TRAZO</h2>
              <p class="text-muted mb-0">-Acomodos opticos. <br><br> -Calculos de Consumos. <br><br> -Impresiones de moldes y trazos.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h2 class="mb-3">CORTE Y FOLEO</h2>
              <p class="text-muted mb-0">-Servicio de Corte Automatico. <br><br> -Fudionado y Foleo para todo tipo de prenda.</p>
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
          <a href=""><strong><li><a href="index.php">DISEÑO Y PATRONAJE</a></li></strong></a>
        </h2>
        <hr>
        <img class="img-responsive img-border img-left" src="img/serv.jpg" alt="">
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
          <a href=""><strong><a href="index.php">GRADUACION</a></li></strong></a>
        </h2>
        <hr>
        <img class="img-responsive img-border img-left" src="img/cur.jpg" alt="">
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
          <a href=""><strong><a href="index.php">TRAZO</a></li></strong></a>
        </h2>
        <hr>
        <img class="img-responsive img-border img-left" src="img/oportunidad.jpg" alt="">
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
          <a href=""><strong><a href="index.php">CORTE Y FOLEO</a></li></strong></a>
        </h2>
        <hr>
        <img class="img-responsive img-border img-left" src="img/cur.jpg" alt="">
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
        <img class="img-responsive img-border img-left" src="img/serv.jpg" alt="">
        <hr class="visible-xs">
       <br><br><br> <p>-Fusionado en bloque. <br><br> -Fusionado por pieza.</p>


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



  <?php $fun->footer();  ?>
 <?php $fun->music();  ?>

</html>
