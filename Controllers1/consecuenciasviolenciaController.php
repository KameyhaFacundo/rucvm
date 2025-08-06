<?php namespace Controllers1;

use Models1\Ficha1 as Ficha1;

class consecuenciasviolenciaController{
        
    private $consecuenciasviolencia;
    private $ficha1;
        
    public function __construct() {
        $this->ficha1 = new Ficha1();
    } 
        
    public function cv_empleo(){

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
                $datos = $this->ficha1->consecuenciasViolenciaDep('empleo');    
            }else{
                $datos = $this->ficha1->consecuenciasViolencia('empleo');
            }
            return $datos;
        }
    }

    public function cv_problemas(){

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
                $datos = $this->ficha1->consecuenciasViolenciaDep('problemas');    
            }else{
                $datos = $this->ficha1->consecuenciasViolencia('problemas');
            }
            return $datos;
        }
    }

    public function cv_limitacion(){

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
                $datos = $this->ficha1->consecuenciasViolenciaDep('limitacion');    
            }else{
                $datos = $this->ficha1->consecuenciasViolencia('limitacion');
            }
            return $datos;
        }
    }

    public function cv_estudio(){

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
                $datos = $this->ficha1->consecuenciasViolenciaDep('estudio');    
            }else{
                $datos = $this->ficha1->consecuenciasViolencia('estudio');
            }
            return $datos;
        }
    }
}

$ficha = new consecuenciasviolenciaController();

?>