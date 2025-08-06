<?php namespace Controllers1;

//use Models1\Principal as Principal;
use Models1\Persona as Persona;
//use Models\Seccion as Seccion;

	class edadconsultanteController{
            
            private $edadconsultante;
            private $persona;
            //private $seccion;
            
            public function __construct() {
                //$this->pordni = new Pordni();
                $this->persona = new Persona();
                //$this->seccion = new Seccion();
            }
                
                
            public function edad_consultante(){

                if(!$_POST){
                    echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                }else{
                    $fecha1 = $_POST['fecha1'];
                    $fecha2 = $_POST['fecha2'];
                    $this->persona->set("fecha1",$fecha1);
                    $this->persona->set("fecha2",$fecha2);
                    if($_SESSION['idinstitucion'] == 12){
                        $datos = $this->persona->edadConsultanteDep();
                    }else{
                        $datos = $this->persona->edadConsultante();
                    }
                    return $datos;
                }
	        }
}
    $persona = new edadconsultanteController();
?>