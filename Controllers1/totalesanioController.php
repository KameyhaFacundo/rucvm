<?php namespace Controllers1;

//use Models1\Principal as Principal;
use Models1\Ficha as Ficha;
//use Models\Seccion as Seccion;

	class totalesanioController{
            
            private $totalesanio;
            private $ficha;
            //private $seccion;
            
            public function __construct() {
                //$this->pordni = new Pordni();
                $this->ficha = new Ficha();
                //$this->seccion = new Seccion();
            }
  
                
            public function totales_anio_mes(){

                        if(!$_POST){
                            echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        $datos = $this->ficha->verTotales();
                        //echo $datos1;
                        return $datos;
                    }
	        }

            public function por_cantidades_mes(){

                if(!$_POST){
                    $anio = $_GET['anio'];
                    $this->ficha->set("anio",$anio);
                    $datos = $this->ficha->vermeses();
                    return $datos;
                }
            }
}
    $ficha = new totalesanioController();
?>