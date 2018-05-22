<?php
include_once 'logica/funciones.php';
$fun = new funciones();
session_start();
$fun->comprobar();

$sql = $this->pdo->prepare("select*from bolsa_formulario where Id=".$_GET['id']);
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['Curriculum']==""){?>
        <p>NO tiene archivos</p>
                <?php }else{ ?>
        <iframe src="archivos/<?php echo $datos['Curriculum']; ?>"></iframe>
                
                <?php } } 
                
                
   
         
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
            
    </body>
</html>
