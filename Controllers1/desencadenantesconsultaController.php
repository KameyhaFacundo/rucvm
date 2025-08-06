<?php namespace Controllers1;

use Models1\Ficha37 as Ficha37;

class desencadenantesconsultaController{
        
    private $desencadenantesconsulta;
    private $ficha37;
        
    public function __construct() {
        $this->ficha37 = new Ficha37();
    } 
        
    public function des_hijos(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha37->set("fecha1",$fecha1);
            $this->ficha37->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha37->desencadenantesConsultaDep('hijos');    
            }else{
                $datos = $this->ficha37->desencadenantesConsulta('hijos');
            }
            return $datos;
        }
    }

    public function des_golpes(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha37->set("fecha1",$fecha1);
            $this->ficha37->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha37->desencadenantesConsultaDep('golpe');    
            }else{
                $datos = $this->ficha37->desencadenantesConsulta('golpe');
            }
            return $datos;
        }
    }

    public function des_conocimiento(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha37->set("fecha1",$fecha1);
            $this->ficha37->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha37->desencadenantesConsultaDep('conocimiento');    
            }else{
                $datos = $this->ficha37->desencadenantesConsulta('conocimiento');
            }
            return $datos;
        }
    }

    public function des_infidelidad(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha37->set("fecha1",$fecha1);
            $this->ficha37->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha37->desencadenantesConsultaDep('infidelidad');    
            }else{
                $datos = $this->ficha37->desencadenantesConsulta('infidelidad');
            }
            return $datos;
        }
    }

    public function des_solicitud(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha37->set("fecha1",$fecha1);
            $this->ficha37->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha37->desencadenantesConsultaDep('solicitud');    
            }else{
                $datos = $this->ficha37->desencadenantesConsulta('solicitud');
            }
            return $datos;
        }
    }

    public function des_limite(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha37->set("fecha1",$fecha1);
            $this->ficha37->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha37->desencadenantesConsultaDep('limite');    
            }else{
                $datos = $this->ficha37->desencadenantesConsulta('limite');
            }
            return $datos;
        }
    }

    public function des_miedo(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha37->set("fecha1",$fecha1);
            $this->ficha37->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha37->desencadenantesConsultaDep('miedo');    
            }else{
                $datos = $this->ficha37->desencadenantesConsulta('miedo');
            }
            return $datos;
        }
    }

    public function des_legal(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha37->set("fecha1",$fecha1);
            $this->ficha37->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha37->desencadenantesConsultaDep('legal');    
            }else{
                $datos = $this->ficha37->desencadenantesConsulta('legal');
            }
            return $datos;
        }
    }

    public function des_derivacion(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha37->set("fecha1",$fecha1);
            $this->ficha37->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha37->desencadenantesConsultaDep('derivacion');    
            }else{
                $datos = $this->ficha37->desencadenantesConsulta('derivacion');
            }
            return $datos;
        }
    }
}

$ficha = new desencadenantesconsultaController();

?>