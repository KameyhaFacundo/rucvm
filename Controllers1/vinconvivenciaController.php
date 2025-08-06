<?php namespace Controllers1;

//use Models1\Principal as Principal;
use Models1\Ficha3 as Ficha3;
//use Models\Seccion as Seccion;

	class vinconvivenciaController{
            
            private $edadvinculo;
            private $ficha3;
            //private $seccion;
            
            public function __construct() {
                //$this->pordni = new Pordni();
                $this->ficha3 = new Ficha3();
                //$this->seccion = new Seccion();
            }
                
            public function vin_convivencia(){

                if(!$_POST){
                    echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                }else{
                    $fecha1 = $_POST['fecha1'];
                    //echo $fecha1;
                    $fecha2 = $_POST['fecha2'];
                    //echo $fecha2;
                    $this->ficha3->set("fecha1",$fecha1);
                    $this->ficha3->set("fecha2",$fecha2);
                    if($_SESSION['idinstitucion'] == 12){
                        $datos = $this->ficha3->vin_convivenciaDep();    
                    }else{
                        $datos = $this->ficha3->vin_convivencia();    
                    }
                    return $datos;
                }
	        }
}
    $ficha3 = new vinconvivenciaController();
?>