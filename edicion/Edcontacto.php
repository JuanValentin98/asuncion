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
      <p>Provided by <a href="http://www.graphicdesk.ro" target="_blank">www.GraphicDesk.ro</a></p>
<a href="#contactModal" role="button" data-toggle="modal" class="btn btn-default btn-lg"><i class="fa fa-contact "></i> <span class="network-name">Contact</span></a>
  <!-- Modal -->
            <div id="contactModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">Contact</h4>
                    </div>
                    <div class="modal-body">
                        <div class="containter">
                            <div class="row">
                                <form class="form-horizontal" name="commentform" method="post" action="send_form_email.php">
                                    <div class="col-xs-8">
                                        <div class="form-group">
                                            <label for="InputName" class="col-lg-4 control-label">Name</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" name="first_name" id="first_name"  required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="InputEmail" class="col-lg-4 control-label">Email</label>
                                            <div class="col-lg-8">
                                                <input type="email" class="form-control" id="email" name="email"  required  >
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="InputMessage" class="col-lg-4 control-label">Message</label>
                                            <div class="col-lg-8">
                                                <textarea name="comments" id="comments" class="form-control" rows="5" required></textarea>
                                            </div>
                                        </div>
                                        
                                        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
                                    </div>
                                </form>
                                <hr class="featurette-divider hidden-lg">
                                <div class="col-xs-4 text-right ">
                                    <address>
                                        <h3>Locatie</h3>
                                        <p class="lead"><a href="https://goo.gl/maps/7ryTz">City<br>
                                            </a><br>
                                            Phone: xxx<br>
                                            E-mail: xxxxx</p>
                                    </address>
                                </div>

                            </div>

                        </div>
                    </div><!-- End of Modal body -->
                </div><!-- End of Modal content -->
            </div><!-- End of Modal dialog -->
        </div><!-- End of Modal -->
      
  </div>


    <!-- /.container -->

        <!-- jQuery -->
        <script src="../js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/modals.js"></script>

</body>

</html>

