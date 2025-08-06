<?php namespace Controllers1;

use Models1\Ficha41 as Ficha41;

	class medidasjudicialesController{
            
            private $medidasjudiciales;
            private $ficha41;
            
            public function __construct() {
                $this->ficha41 = new Ficha41();
            }
                
                
            public function medidas(){

                if(!$_POST){
                    echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                }else{
                    $fecha1 = $_POST['fecha1'];
                    $fecha2 = $_POST['fecha2'];
                    $this->ficha41->set("fecha1",$fecha1);
                    $this->ficha41->set("fecha2",$fecha2);
                    if($_SESSION['idinstitucion'] == 12){
                        $datos = $this->ficha41->medidasJudicialesDep();    
                    }else{
                        $datos = $this->ficha41->medidasJudiciales();
                    }
                    return $datos;
                }
	        }
}
    $ficha41 = new medidasjudicialesController();
?>