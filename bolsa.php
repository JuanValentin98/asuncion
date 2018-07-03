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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>
 <span class="ir-arriba icon-circle-up"></span>

  <?php $fun->menu(); ?>

  <div class="container">

    <div class="row">
      <div class="box">
        <div class="col-lg-12">
          <hr>
          <h2 class="intro-text text-center">
            <strong>Trabajos Disponibles</strong>
          </h2>
          <hr>
        </div>
        <?php echo $fun->bolsa(); ?>
      </div>
    </div>
  </div><br>
  <!-- /.container -->
  <!-- modal del formulario -->
  <div class="modal fade" id="modal-contact-form" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal">&times;</button>
          <h2>Solicita una entrevista</h2>
        </div>
        <div class="modal-body">
            <form role="form" id="formulario"  method="post" enctype="multipart/form-data" >
            <div class="row">
              <div class="form-group col-lg-4">
                <label>Nombre(s)</label>
                <input name="nombre" type="text" class="form-control " placeholder="Nombre(s)" required="required" autofocus="autofocus">
              </div>
              <div class="form-group col-lg-4">
                <label>Numero de teléfono</label>
                <input name="telefono" type="text" class="form-control" placeholder="Teléfono" required="required" autofocus="autofocus">
              </div>
              <div class="form-group col-lg-4">
                <label>Correo</label>
                <input name="email" type="email" class="form-control" placeholder="Correo@" required="required" autofocus="autofocus">
              </div>
              <div class="form-group col-lg-4">
                <label>Curriculum</label>
                <td colspan="2"> <input type="file" name="curri" required="required"></td>
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-lg-12">
                <label>Deja un mensaje</label>
                <textarea name="comentario" class="form-control" rows="6" required="required"></textarea>
              </div>
              <div class="form-group col-lg-12">

                  
                <input type="hidden" name="Id_bolsa" id="id_bolsa">
                <button name="enviar" type="submit" class="btn btn-default col-sm-offset-5">Enviar</button>
              
              </div>
            </div>
         
            <?php $fun->N_empleado();?>
            </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- jQuery -->
  <script src="js/jquery.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/modals.js"></script>


</body>
<?php $fun->footer();  ?>
</html>
