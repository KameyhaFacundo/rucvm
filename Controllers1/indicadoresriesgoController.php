<?php namespace Controllers1;

use Models1\Ficha35 as Ficha35;

class indicadoresriesgoController{
        
    private $indicadoresriesgo;
    private $ficha35;
        
    public function __construct() {
        $this->ficha35 = new Ficha35();
    } 
        
    public function ind_lesion(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha35->set("fecha1",$fecha1);
            $this->ficha35->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha35->indicadoresRiesgoDep('lesion');    
            }else{
                $datos = $this->ficha35->indicadoresRiesgo('lesion');
            }
            return $datos;
        }
    }

    public function ind_intervencion(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha35->set("fecha1",$fecha1);
            $this->ficha35->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha35->indicadoresRiesgoDep('intervencion');    
            }else{
                $datos = $this->ficha35->indicadoresRiesgo('intervencion');
            }
            return $datos;
        }
    }

    public function ind_amenaza(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha35->set("fecha1",$fecha1);
            $this->ficha35->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha35->indicadoresRiesgoDep('amenaza');    
            }else{
                $datos = $this->ficha35->indicadoresRiesgo('amenaza');
            }
            return $datos;
        }
    }

    public function ind_armas(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha35->set("fecha1",$fecha1);
            $this->ficha35->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha35->indicadoresRiesgoDep('armas');    
            }else{
                $datos = $this->ficha35->indicadoresRiesgo('armas');
            }
            return $datos;
        }
    }

    public function ind_aborto(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha35->set("fecha1",$fecha1);
            $this->ficha35->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha35->indicadoresRiesgoDep('aborto');    
            }else{
                $datos = $this->ficha35->indicadoresRiesgo('aborto');
            }
            return $datos;
        }
    }

    public function ind_ideacion(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha35->set("fecha1",$fecha1);
            $this->ficha35->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha35->indicadoresRiesgoDep('ideacion');    
            }else{
                $datos = $this->ficha35->indicadoresRiesgo('ideacion');
            }
            return $datos;
        }
    }

    public function ind_suicidio(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha35->set("fecha1",$fecha1);
            $this->ficha35->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha35->indicadoresRiesgoDep('suicidio');    
            }else{
                $datos = $this->ficha35->indicadoresRiesgo('suicidio');
            }
            return $datos;
        }
    }

    public function ind_violacion(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha35->set("fecha1",$fecha1);
            $this->ficha35->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha35->indicadoresRiesgoDep('violacion');    
            }else{
                $datos = $this->ficha35->indicadoresRiesgo('violacion');
            }
            return $datos;
        }
    }

    public function ind_acoso(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha35->set("fecha1",$fecha1);
            $this->ficha35->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha35->indicadoresRiesgoDep('acoso');    
            }else{
                $datos = $this->ficha35->indicadoresRiesgo('acoso');
            }
            return $datos;
        }
    }

    public function ind_antecedentes(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha35->set("fecha1",$fecha1);
            $this->ficha35->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha35->indicadoresRiesgoDep('antecedentes');    
            }else{
                $datos = $this->ficha35->indicadoresRiesgo('antecedentes');
            }
            return $datos;
        }
    }

    public function ind_sustancias(){

        if(!$_POST){
            echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
        }else{
            $fecha1 = $_POST['fecha1'];
            $fecha2 = $_POST['fecha2'];
            $this->ficha35->set("fecha1",$fecha1);
            $this->ficha35->set("fecha2",$fecha2);
            if($_SESSION['idinstitucion'] == 12){
                $datos = $this->ficha35->indicadoresRiesgoDep('sustancias');    
            }else{
                $datos = $this->ficha35->indicadoresRiesgo('sustancias');
            }
            return $datos;
        }
    }
}

$ficha = new indicadoresriesgoController();

?>