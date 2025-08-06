<?php namespace Controllers1;

//use Models1\Principal as Principal;
use Models1\Ficha as Ficha;
//use Models\Seccion as Seccion;

	class premenoresController{
            
            private $ocuconsultante;
            private $ficha;
            //private $seccion;
            
            public function __construct() {
                //$this->pordni = new Pordni();
                $this->ficha = new Ficha();
                //$this->seccion = new Seccion();
            }
                
                
            public function pre_menores(){

                if(!$_POST){
                    echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                }else{
                    $fecha1 = $_POST['fecha1'];
                    $fecha2 = $_POST['fecha2'];
                    $this->ficha->set("fecha1",$fecha1);
                    $this->ficha->set("fecha2",$fecha2);
                    if($_SESSION['idinstitucion'] == 12){
                        $datos = $this->ficha->preMenoresDep();    
                    }else{
                        $datos = $this->ficha->preMenores();
                    }
                    return $datos;
                }
	        }
}
    $ficha = new premenoresController();
?>