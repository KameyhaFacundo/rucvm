<?php namespace Controllers1;

//use Models1\Principal as Principal;
use Models1\Cautelar as Cautelar;
//use Models\Seccion as Seccion;

	class tipomedidaController{
            
            private $tipomedida;
            private $cautelar;
            //private $seccion;
            
            public function __construct() {
                //$this->pordni = new Pordni();
                $this->cautelar = new Cautelar();
                //$this->seccion = new Seccion();
            }
                
                
            public function medidasportipo(){

                if(!$_POST){
                    echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                }else{
                    $fecha1 = $_POST['fecha1'];
                    //echo $fecha1;
                    $fecha2 = $_POST['fecha2'];
                    //echo $fecha2;
                    $this->cautelar->set("fecha1",$fecha1);
                    $this->cautelar->set("fecha2",$fecha2);
                    $datos = $this->cautelar->medidasPorTipo();
                    return $datos;
                }
	        }
}
    $cautelar = new tipomedidaController();
?>