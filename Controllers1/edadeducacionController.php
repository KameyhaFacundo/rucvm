<?php namespace Controllers1;

//use Models1\Principal as Principal;
use Models1\Ficha1 as Ficha1;
//use Models\Seccion as Seccion;

	class edadeducacionController{
            
            private $edadeducion;
            private $ficha1;
            //private $seccion;
            
            public function __construct() {
                //$this->pordni = new Pordni();
                $this->ficha1 = new Ficha1();
                //$this->seccion = new Seccion();
            }
                
                
            public function edad_educacion(){

                if(!$_POST){
                    echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                }else{
                    $fecha1 = $_POST['fecha1'];
                    //echo $fecha1;
                    $fecha2 = $_POST['fecha2'];
                    //echo $fecha2;
                    $this->ficha1->set("fecha1",$fecha1);
                    $this->ficha1->set("fecha2",$fecha2);
                    if($_SESSION['idinstitucion'] == 12){
                        $datos = $this->ficha1->edad_educacionDep();
                    }else{
                        $datos = $this->ficha1->edad_educacion();    
                    }
                    return $datos;
                }
	        }
}
    $ficha1 = new edadeducacionController();
?>