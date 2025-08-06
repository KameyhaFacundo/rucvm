<?php namespace Controllers1;

//use Models1\Principal as Principal;
use Models1\Ficha4 as Ficha4;
//use Models\Seccion as Seccion;

	class poraccesibilidadController{
            
            private $poraccesibilidad;
            private $ficha4;
            //private $seccion;
            
            public function __construct() {
                //$this->pordni = new Pordni();
                $this->ficha4 = new Ficha4();
                //$this->seccion = new Seccion();
            } 

            public function denuncia(){

                if(!$_POST){
                    echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                }else{
                    $fecha1 = $_POST['fecha1'];
                    $fecha2 = $_POST['fecha2'];
                    $this->ficha4->set("fecha1",$fecha1);
                    $this->ficha4->set("fecha2",$fecha2);
                    if($_SESSION['idinstitucion'] == 12){
                        $datos = $this->ficha4->accionesLegalesDep('denuncia');    
                    }else{
                        $datos = $this->ficha4->accionesLegales('denuncia');
                    }
                    return $datos;
                }
            }

            public function medidas(){

                if(!$_POST){
                    echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                }else{
                    $fecha1 = $_POST['fecha1'];
                    $fecha2 = $_POST['fecha2'];
                    $this->ficha4->set("fecha1",$fecha1);
                    $this->ficha4->set("fecha2",$fecha2);
                    if($_SESSION['idinstitucion'] == 12){
                        $datos = $this->ficha4->accionesLegalesDep('medidas');    
                    }else{
                        $datos = $this->ficha4->accionesLegales('medidas');
                    }
                    return $datos;
                }
            }
                
            public function por_accesibilidad(){

                if(!$_POST){
                    echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                }else{
                    $fecha1 = $_POST['fecha1'];
                    //echo $fecha1;
                    $fecha2 = $_POST['fecha2'];
                    //echo $fecha2;
                    $this->ficha4->set("fecha1",$fecha1);
                    $this->ficha4->set("fecha2",$fecha2);
                    if($_SESSION['idinstitucion'] == 12){
                        $datos = $this->ficha4->filtrarAccesibilidadDep();    
                    }else{
                        $datos = $this->ficha4->filtrarAccesibilidad();
                    }
                    return $datos;
                }
	        }

            public function de_externa(){

                if(!$_POST){
                    echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                }else{
                    $fecha1 = $_POST['fecha1'];
                    $fecha2 = $_POST['fecha2'];
                    $this->ficha4->set("fecha1",$fecha1);
                    $this->ficha4->set("fecha2",$fecha2);
                    if($_SESSION['idinstitucion'] == 12){
                        $datos = $this->ficha4->derivacionExternaDep();    
                    }else{
                        $datos = $this->ficha4->derivacionExterna();
                    }
                    return $datos;
                }
	        }

            public function de_interna(){

                if(!$_POST){
                    echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                }else{
                    $fecha1 = $_POST['fecha1'];
                    $fecha2 = $_POST['fecha2'];
                    $this->ficha4->set("fecha1",$fecha1);
                    $this->ficha4->set("fecha2",$fecha2);
                    if($_SESSION['idinstitucion'] == 12){
                        $datos = $this->ficha4->derivacionInternaDep();    
                    }else{
                        $datos = $this->ficha4->derivacionInterna();
                    }
                    return $datos;
                }
	        }
}
    $ficha4 = new poraccesibilidadController();
?>