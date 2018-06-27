<?php
include_once '../logica/funciones.php';
include_once '../logica/FunEdicion.php';
include '../logica/databaseEd.php';
$fun = new funciones();
$funEd = new FunEdicion();
session_start();
$fun->comprobar();
?>


<html lang="es">

    <head>
        <link href="img/A.ico" type="imagen/x-icon" rel="shortcut icon" >
        <title>Actualizar Registros PHP</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

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

    <body>
        <div class="col-md-12 ">
<!--                <a href="../index.php"><img class="boton"  src="../img/Botones/back.png"></a>-->
            <hr>
            <h1 class="title"> Bienvenido a SERVICIOS</h1>
            <hr>
        </div>

        <?php $funEd->menuEd(); ?>    
        
                            <div class="col-md-10 col-md-offset-2">
                        <hr>
                        
                            <h3 class="text-center">DISEÑO Y PATRONAJE</h3>
                        
                        <hr>
                        <img class="img-responsive img-border img-left" src="../img/corte_textil.jpg" width="300px"alt="">

                        <hr class="visible-xs">
                        <br><br> <p>-Patronaje. <br><br> -Fichas Tecnicas. <br><br> -Elaboracion de Muestras.</p>
                    </div>
        
        <div class="col-md-10 col-md-offset-2">
                        <hr>
                        <h2 class="intro-text text-center">
                            <h3 class="text-center">DISEÑO Y PATRONAJE</h3>
                        </h2>
                        <hr>
                        <img class="img-responsive img-border img-left" src="../img/corte_textil.jpg" width="300px"alt="">

                        <hr class="visible-xs">
                        <br><br> <p>-Patronaje. <br><br> -Fichas Tecnicas. <br><br> -Elaboracion de Muestras.</p>
                    </div>
     

        <footer>
        </footer>
    </body>

</html>
