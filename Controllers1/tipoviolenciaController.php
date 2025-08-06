<?php namespace Controllers1;

//use Models1\Principal as Principal;
use Models1\Ficha31 as Ficha31;
//use Models\Seccion as Seccion;

	class tipoviolenciaController{
            
            private $tipoviolencia;
            private $ficha31;
            //private $seccion;
            
            public function __construct() {
                //$this->pordni = new Pordni();
                $this->ficha31 = new Ficha31();
                //$this->seccion = new Seccion();
            }
                
                
            public function tipo_violencia(){

                if(!$_POST){
                    echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                }else{
                    $fecha1 = $_POST['fecha1'];
                    $fecha2 = $_POST['fecha2'];
                    $this->ficha31->set("fecha1",$fecha1);
                    $this->ficha31->set("fecha2",$fecha2);
                    if($_SESSION['idinstitucion'] == 12){
                        $datos = $this->ficha31->tipo_violenciaDep();    
                    }else{
                        $datos = $this->ficha31->tipo_violencia();
                    }
                    return $datos;
                }
	        }
}
    $ficha31 = new tipoviolenciaController();
?>