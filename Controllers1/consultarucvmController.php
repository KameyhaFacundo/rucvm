<?php namespace Controllers1;

use Models1\Ficha as Ficha;

	class consultarucvmController{
            
            private $consultarucvm;
            private $ficha;

            
            public function __construct() {
                $this->ficha = new Ficha();
            }
           
            public function consulta_indec(){

                if(!$_POST){
                    echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                }else{
                    $fecha1 = $_POST['fecha1'];
		            $fecha2 = $_POST['fecha2'];
		            $this->ficha->set("fecha1",$fecha1);
		            $this->ficha->set("fecha2",$fecha2);
                    $datos = $this->ficha->consulta_indec();
                    return $datos;
                }
            }
}
$ficha = new consultarucvmController();
?>