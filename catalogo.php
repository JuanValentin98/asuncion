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
  <link rel="stylesheet" href="css/estiloAsun.css"> 
  <link rel="stylesheet" href="css/estilos.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Arbutus+Slab" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/script.js"></script>
        
</head>

<body>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php $fun->menu();  ?>
            <!-- /.navbar-collapse -->

<div class="wrap">
		<h1>Nuestros Productos</h1>
		<div class="store-wrapper">
			<div class="category_list" >
				<a href="#" class="category_item" category="all">Todo</a>
				<a href="#" class="category_item" category="camisas">Camisas</a>
                                <a href="#" class="category_item" category="pantalones">Pantalones</a>
                                <a href="#" class="category_item" category="shorts">Shorts</a>
			</div>
			<section class="products-list">
                                       <!--Camisas-->
				<div class="product-item" category="camisas">
                                    <img src="img/ropa/camisa1.png" alt="" >
                                    <a href="#">CALVIN KLEIN</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
 				</div>
                                       
				<div class="product-item" category="camisas">
                                    <img src="img/ropa/camisa2.png" alt="" >
					<a href="#">LACOSTE</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
                            <div class="product-item" category="camisas">
                                    <img src="img/ropa/camisa3.jpg" alt="" >
					<a href="#">NAUTICA</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
				<div class="product-item" category="camisas">
                                    <img src="img/ropa/camisa4.jpg" alt="" >
					<a href="#">AEROPOSTALE</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
				
				<div class="product-item" category="camisas">
                                    <img src="img/ropa/camisa2.png" alt="" >
					<a href="#">CALVIN KLEIN</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
				<div class="product-item" category="camisas">
                                    <img src="img/ropa/camisa8.jpeg" alt="" >
					<a href="#">LACOSTE</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
				<div class="product-item" category="camisas">
                                    <img src="img/ropa/camisa9.jpg" alt="" >
					<a href="#">NAUTICA</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div> 
                               <div class="product-item" category="camisas">
                                   <img src="img/ropa/camisa3.jpg" alt="" >
					<a href="#">AEROPOSTALE</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				 </div>
                            
                                   <!--Pantalones-->
				<div class="product-item" category="pantalones">
                                    <img src="img/ropa/pantalon5.jpg" alt="" >
					<a href="#">LEVI'S</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
				<div class="product-item" category="pantalones">
                                    <img src="img/ropa/pantalon1.png" alt="" >
					<a href="#">AEROPOSTALE</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
                                   <div class="product-item" category="pantalones">
                                       <img src="img/ropa/pantalon2.jpg" alt="" >
					<a href="#">CALVIN KLEIN</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
				<div class="product-item" category="pantalones">
                                    <img src="img/ropa/pantalon5.jpg" alt="" >
					<a href="#">LACOSTE</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
                                <div class="product-item" category="pantalones">
                                    <img src="img/ropa/pantalon5.jpg" alt="" >
					<a href="#">LEVI'S</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
				<div class="product-item" category="pantalones">
                                    <img src="img/ropa/pantalon1.png" alt="" >
					<a href="#">AEROPOSTALE</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
                                   <div class="product-item" category="pantalones">
                                       <img src="img/ropa/pantalon2.jpg" alt="" >
					<a href="#">CALVIN KLEIN</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
				<div class="product-item" category="pantalones">
                                    <img src="img/ropa/pantalon5.jpg" alt="" >
					<a href="#">LACOSTE</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
                                   
                                   <!--Shorts-->
				<div class="product-item" category="shorts">
                                    <img src="img/ropa/short.jpg" alt="" >
					<a href="#">LACOSTE</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
				<div class="product-item" category="shorts">
					<img src="img/ropa/short.jpg" alt="" >
					<a href="#">AEROPOSTALE</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
				<div class="product-item" category="shorts">
					<img src="img/ropa/short.jpg" alt="" >
					<a href="#">CALVIN KLEIN</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
				<div class="product-item" category="shorts">
					<img src="img/ropa/short.jpg" alt="" >
					<a href="#">LEVI'S</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
                                <div class="product-item" category="shorts">
                                    <img src="img/ropa/short.jpg" alt="" >
					<a href="#">LACOSTE</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
				<div class="product-item" category="shorts">
					<img src="img/ropa/short.jpg" alt="" >
					<a href="#">AEROPOSTALE</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
				<div class="product-item" category="shorts">
					<img src="img/ropa/short.jpg" alt="" >
					<a href="#">CALVIN KLEIN</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
				<div class="product-item" category="shorts">
					<img src="img/ropa/short.jpg" alt="" >
					<a href="#">LEVI'S</a><br>    
                                    Marca: <p style="color: red">Calvin Klein</p>
                                    Corte:<p style="color: blue">Regular Fit</p>
                                    Color: <p style="color: gray">Gris</p>
				</div>
			</section>
		</div>
	</div>

      
       <!-- /.container -->

        <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modals.js"></script>

</body>
<?php $fun->footer();  ?>
</html>