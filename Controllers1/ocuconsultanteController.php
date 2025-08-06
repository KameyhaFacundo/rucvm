<?php namespace Controllers1;

use Models1\Ficha1 as Ficha1;

class ocuconsultanteController{
            
    private $ocuconsultante;
    private $ficha1;
    
    public function __construct() {
        $this->ficha1 = new Ficha1();
    } 
        
    public function ocu_consultante(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha1->set("fecha1",$fecha1);
            $this->ficha1->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha1->ocuConsultanteDep();    
            }else{
                $datos = $this->ficha1->ocuConsultante();
            }
            return $datos;
        }
    }

    public function remunerada_consultante(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha1->set("fecha1",$fecha1);
            $this->ficha1->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha1->ocupacionRemuneradaDep();    
            }else{
                $datos = $this->ficha1->ocupacionRemunerada();
            }
            return $datos;
        }
    }

    public function auh_consultante(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha1->set("fecha1",$fecha1);
            $this->ficha1->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha1->auhDep();    
            }else{
                $datos = $this->ficha1->auh();
            }
            return $datos;
        }
    }
}

$ficha1 = new ocuconsultanteController();

?>