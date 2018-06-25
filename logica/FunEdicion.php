<?php
include_once 'database.php';
class FunEdicion {
    
    private $bd;

    //creacion de la conexion y consultas de la base
    function __construct() {
        $this->bd = new database();
    }

    public function menuEd() {
         $menu = '
        <header class="menu ">
                <nav>
                    <ul >
                        <li><a href="edicion.php"><span class="icon-house"></span>Inicio</a></li>
                        <li><a href="Edservicio.php"><span class="icon-suitcase"></span>Servicios</a></li>
                        <li><a href="Edcatalogo.php"><span class="icon-rocket"></span>Catalogo</a></li>
                        <li><a href="Edbolsa.php"><span class="icon-earth"></span>Bolsa de trabajo</a></li>
                        <li><a href="Edcontacto.php"><span class="icon-mail"></span>Contacto</a></li>
                    </ul>
                </nav>
            </header>';
         echo $menu;
        }
            public function Sub1() {

        if (isset($_POST['enviar'])) {
            $sub1 = $_POST['sub1'];
            
            $this->bd->Sub1($sub1);
            echo '<script type="text/javascript">alert("Registro correcto");</script>';
        }
    }
    
    public function EdiServ(){
        
//               <input name="idalu[]" value="' . $registroAlumnos['Id_servicio'] . '" />

                            if (isset($_POST['actualizar'])) {
                            $Subtitulo1 =$_POST['sub1'];
                            
                            $this->bd->EdiServ($Subtitulo1);

                        }
                    }
        
    


/////EDICION SUBTITULOS
    public function sub1serv() {
        //ejecuta la consulta
        $con = $this->bd->Ediservicio();
        $texto = '';
        //recorre los datos
        foreach ($con as $tit) {
            }           
        return $texto;
    }

    
        public function sub2serv() {
        //ejecuta la consulta
        $con = $this->bd->Ediservicio1();
        $texto = '';
        //recorre los datos
        foreach ($con as $tit) {
            $texto .= '<td><input class="form-control"  style="text-align: center" name="sub2"  value="'  . $tit['Sub2'] . '" /></td>'
                    . '';           
        }
        return $texto;
    }
    
        public function sub3serv() {
        //ejecuta la consulta
        $con = $this->bd->Ediservicio1();
        $texto = '';
        //recorre los datos
        foreach ($con as $tit) {
            $texto .= '<td><input class="form-control"  style="text-align: center" name="sub3"  value="'  . $tit['Sub3'] . '" /></td>'
                    . '';           
        }
        return $texto;
    }
    
        public function sub4serv() {
        //ejecuta la consulta
        $con = $this->bd->Ediservicio1();
        $texto = '';
        //recorre los datos
        foreach ($con as $tit) {
            $texto .= '<td><input class="form-control"  style="text-align: center" name="sub4"  value="'  . $tit['Sub4'] . '" /></td>'
                    . '';           
        }
        return $texto;
    }
    //////FIN SUBTITULOS        
       
    }
                        
                        


