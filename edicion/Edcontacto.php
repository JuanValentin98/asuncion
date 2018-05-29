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
          
          <h1 class="title"> Bienvenido(a) </h1>
          <a href="../index.php"><img class="boton" src="../img/Botones/back.png"></a>
          <h3 class="h3">CONTACTO</h3>
          </div>
      <header class="head col-md-4" >
		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-list2"></span>Menu</a>
		</div>
 
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
      
      <div class="form-group col-lg-4">
                <label>Nombre(s)</label>
                <input name="nombre" type="text" class="form-control " placeholder="Nombre(s)" required="required" autofocus="autofocus">
              </div>
      
  </div>


    <!-- /.container -->

        <!-- jQuery -->
        <script src="../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/modals.js"></script>

</body>

</html>

