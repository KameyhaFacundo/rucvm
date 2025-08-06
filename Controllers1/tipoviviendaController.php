<?php namespace Controllers1;

use Models1\Ficha as Ficha;

class tipoviviendaController{
        
    private $tipovivienda;
    private $ficha;
        
    public function __construct() {
        $this->ficha = new Ficha();
    } 
        
    public function vivienda_consultante(){

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
                $datos = $this->ficha->tipoViviendaDep();    
            }else{
                $datos = $this->ficha->tipoVivienda();
            }
            return $datos;
        }
    }
}

$ficha = new tipoviviendaController();

?>