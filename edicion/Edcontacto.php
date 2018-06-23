<?php
include_once '../logica/funciones.php';
include_once '../logica/FunEdicion.php';
$fun = new funciones();
$funEd = new FunEdicion();
session_start();
$fun->comprobar();

?>

<!DOCTYPE html>
<html lang="en">

    <head>
<link href="img/A.ico" type="imagen/x-icon" rel="shortcut icon" >
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
        <link href="../css/Style.css" rel="stylesheet">
        <link href="../css/loader.css" rel="stylesheet">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
 
    </head>
    <script>
      window.onload = detectarCarga;
      function detectarCarga(){
         document.getElementById("carga").style.display="none";
      }
    </script>
    
<div id="carga">
    <img src="../img/loader/carga.gif" />
</div>
    <body class="bod">
        <!-- Collect the nav links, forms, and other content for toggling -->

        <!-- /.navbar-collapse -->
        <div class="container">
            <div class="col-md-12 ">
                <a href="../index.php"><img class="boton"  src="../img/Botones/back.png"></a>
                <h1 class="title"> Bienvenido a SERVICIOS</h1>
                
            </div>
            <div class="col-md-12 ">
                <div class="col-md-2 col-md-pull-1">
<?php $funEd->menuEd();  ?>
                </div>
                
                <section >
                <form method="post">
                        <div class="col-md-4 col-lg-offset-2 text-center">
                            <h3>NUESTROS SERVICIOS</h3>
                            <hr class="my-4">
                </div>

                   <div class="col-lg-10 col-lg-pull-1">
                           
                  <div class=" col-md-3 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-diamond text-primary mb-3 sr-icons"></i>
                        
                    </div>
                    </div>
                       <div class="col-md-3">
                           
        <?php echo $funEd->sub1serv(); ?>
                    </div>
                       <input type="submit" name="actualizar" value="Actualizar Registros" class="btn btn-info col-md-offset-9" />
                     <?php $funEd->EdiServ();?>
             
<!--                <div class=" col-md-3 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-paper-plane text-primary mb-3 sr-icons"></i><br>
                        
                    </div>
                </div>
                
                <div class=" col-md-3 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i><br>
                   
                    </div>
                </div>
                <div class=" col-md-3 text-center">
                    <div class="service-box mt-5 mx-auto">
                        <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i><br>
                      
                    </div>
                </div>-->
                       </div>
                    
                    
                </form>
            </section>
                ddd
                <section>
<!--            <form method="post">
                
                    

            
                <div class="row">
          <div class="form-group col-lg-6">
            <label>Aregar Subtítulo</label>
            <input name="sub1" type="text" class="form-control " placeholder="Subtítulo">
          </div>
          
      <div class="form-group col-lg-12">
        <?php $funEd->Sub1();?>
        <button name="enviar" type="submit" class="btn btn-default">Agregar</button>
      </div>
    </div>
                
                <input type="submit" name="actualizar" value="Actualizar Registros" class="btn btn-info col-md-offset-9" />
            </form>-->

        </section>
           
            </div>
            <?php $funEd->sub1serv();  ?>
        </div>


        <!-- /.container -->

        <!-- jQuery -->
        <script src="../js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/modals.js"></script>
        <script language="javascript" src="js/jquery-1.2.6.min.js"></script>




    </body>

</html>

