<?php
include_once '../logica/funciones.php';
$fun = new funciones();
session_start();
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
  
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
   

</head>
<body>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <!-- /.navbar-collapse -->
  <div class="container">
          <div>
          <h1 class="title"> Bienvenido a SERVICIOS</h1>
          <a href="../index.php"><img class="boton" src="../img/Botones/back.png"></a>
          </div>
      <header class="head col-md-4" >
		<nav>
			<ul>
                            <li><a href="edicion.php"><span class="icon-house"></span>Inicio</a></li>
                            <li><a href="Edservicio.php"><span class="icon-suitcase"></span>Servicios</a></li>
                            <li><a href="Edcatalogo.php"><span class="icon-rocket"></span>Catalogo</a></li>
                            <li><a href="Edbolsa.php"><span class="icon-earth"></span>Bolsa de trabajo</a></li>
                            <li><a href="Edcontacto.php"><span class="icon-mail"></span>Contacto</a></li>
			</ul>
		</nav>
	</header>
      <div class="col-md-4"> 
      <form role="form" id="formulario" method="post" enctype="multipart/form-data" >
      <div class="form-group">
                <label>NUEVO TÍTULO</label>
                <input name="tituloo" type="text" class="form-control " placeholder="TITULO" required="required" autofocus="autofocus">
              </div>
      <input type="hidden" name="Id_bolsa" id="id_bolsa">
                <button name="enviar" type="submit" class="btn btn-default col-sm-offset-5">Enviar</button>
                 <?php $fun->Edtitle();?>
      </form>
      </div>
      
      <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1 class="section-heading"><?php echo $fun->tituloserv(); ?></h1>
                        
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


    <!-- /.container -->

        <!-- jQuery -->
        <script src="../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/modals.js"></script>

</body>

</html>

