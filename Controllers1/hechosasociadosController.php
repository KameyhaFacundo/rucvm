<?php namespace Controllers1;

use Models1\Ficha34 as Ficha34;

class hechosasociadosController{
        
    private $hechosasociados;
    private $ficha34;
        
    public function __construct() {
        $this->ficha34 = new Ficha34();
    } 
        
    public function ha_ev_embarazo(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha34->set("fecha1",$fecha1);
            $this->ficha34->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha34->hechosAsociadosDep('embarazo');    
            }else{
                $datos = $this->ficha34->hechosAsociados('embarazo');
            }
            return $datos;
        }
    }

    public function ha_ev_celos(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha34->set("fecha1",$fecha1);
            $this->ficha34->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha34->hechosAsociadosDep('celos');    
            }else{
                $datos = $this->ficha34->hechosAsociados('celos');
            }
            return $datos;
        }
    }

    public function ha_ev_laborales(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha34->set("fecha1",$fecha1);
            $this->ficha34->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha34->hechosAsociadosDep('laborales');    
            }else{
                $datos = $this->ficha34->hechosAsociados('laborales');
            }
            return $datos;
        }
    }

    public function ha_ev_alcohol(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha34->set("fecha1",$fecha1);
            $this->ficha34->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha34->hechosAsociadosDep('alcohol');    
            }else{
                $datos = $this->ficha34->hechosAsociados('alcohol');
            }
            return $datos;
        }
    }

    public function ha_ev_autonomia(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha34->set("fecha1",$fecha1);
            $this->ficha34->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha34->hechosAsociadosDep('autonomia');    
            }else{
                $datos = $this->ficha34->hechosAsociados('autonomia');
            }
            return $datos;
        }
    }

    public function ha_ev_impredecible(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha34->set("fecha1",$fecha1);
            $this->ficha34->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha34->hechosAsociadosDep('impredecible');    
            }else{
                $datos = $this->ficha34->hechosAsociados('impredecible');
            }
            return $datos;
        }
    }

    public function ha_ev_separacion(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha34->set("fecha1",$fecha1);
            $this->ficha34->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha34->hechosAsociadosDep('separacion');    
            }else{
                $datos = $this->ficha34->hechosAsociados('separacion');
            }
            return $datos;
        }
    }
}

$ficha = new hechosasociadosController();

?>