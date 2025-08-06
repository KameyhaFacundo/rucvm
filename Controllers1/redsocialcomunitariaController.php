<?php namespace Controllers1;

use Models1\Ficha1 as Ficha1;

class redsocialcomunitariaController{
        
    private $redsocialcomunitaria;
    private $ficha1;
        
    public function __construct() {
        $this->ficha1 = new Ficha1();
    } 
        
    public function rs_concurrir(){

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
                $datos = $this->ficha1->redSocialComunitariaDep('concurrir');    
            }else{
                $datos = $this->ficha1->redSocialComunitaria('concurrir');
            }
            return $datos;
        }
    }

    public function rs_vinculos(){

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
                $datos = $this->ficha1->redSocialComunitariaDep('vinculos');    
            }else{
                $datos = $this->ficha1->redSocialComunitaria('vinculos');
            }
            return $datos;
        }
    }

    public function rs_institucion(){

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
                $datos = $this->ficha1->redSocialComunitariaDep('institucion');    
            }else{
                $datos = $this->ficha1->redSocialComunitaria('institucion');
            }
            return $datos;
        }
    }
}

$ficha = new redsocialcomunitariaController();

?>