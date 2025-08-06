<?php namespace Controllers1;

//use Models1\Principal as Principal;
use Models1\Ficha3 as Ficha3;
//use Models\Seccion as Seccion;

	class porriesgoController{
            
            private $porriesgo;
            private $ficha3;
            //private $seccion;
            
            public function __construct() {
                //$this->pordni = new Pordni();
                $this->ficha3 = new Ficha3();
                //$this->seccion = new Seccion();
            }   
                
            public function por_riesgo(){
                    if($_POST){
                        $this->ficha3->set("idriesgo",$_POST['idriesgo']);
                        $datos = $this->ficha3->ev_riesgo();
                        return $datos;
                    }else{
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                    }
            }   
	}
    $ficha3 = new porriesgoController();
        
?>