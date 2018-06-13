<?php
include_once '../logica/funciones.php';
include_once '../logica/FunEdicion.php';
$funEd = new FunEdicion;
$fun = new funciones();
session_start();
$fun->comprobar();
/////////////////////// CONSULTA A LA BASE DE DATOS ////////////////////////
?>

<html lang="es">

    <head>
        <title>Actualizar Registros PHP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

        <link href="css/estilos.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    </head>

    <body>
        <header>
            <div class="alert alert-info">
                <h2>Actualizar Registros de la BD con PHP</h2>
            </div>
        </header>
        

        <section>
            <form method="post">
                
            <?php echo $funEd->sub1serv(); ?>
            <?php echo $funEd->sub2serv(); ?>
            <?php echo $funEd->sub3serv(); ?> 
            <?php echo $funEd->sub4serv(); ?>    
                       
                        

                        



                    
                <input type="submit" name="actualizar" value="Actualizar Registros" class="btn btn-info col-md-offset-9" />
                 <?php $fun->EdiServicio(); ?>
            </form>

                    



        </section>

        <footer>
        </footer>
    </body>

</html>
