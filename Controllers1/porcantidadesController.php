<?php namespace Controllers1;

//use Models1\Principal as Principal;
use Models1\Ficha as Ficha;
use Models1\Cautelar as Cautelar;
//use Models\Seccion as Seccion;

	class porcantidadesController{
            
            private $porcantidades;
            private $ficha;
            private $cautelar;
            //private $seccion;
            
            public function __construct() {
                //$this->pordni = new Pordni();
                $this->cautelar = new Cautelar();
                $this->ficha = new Ficha();
                //$this->seccion = new Seccion();
            }
                
            public function por_cantidades(){

                        if(!$_POST){
                            echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                            if($_SESSION['idinstitucion'] != 12){
                                $datos = $this->ficha->verTotales();
                            }else{
                                $datos = $this->ficha->verTotalesDep();
                            }
                            return $datos;
                        }
	        }

            public function por_cantidades_mes(){

                if(!$_POST){
                    echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                    if($_SESSION['idinstitucion'] != 12){
                        $datos = $this->ficha->vermeses();
                    }else{
                        $datos = $this->ficha->verTotalesMesDep();
                        
                    }
                    return $datos;
                }
            }


            public function cautelares(){

                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        $datos = $this->cautelar->verTotalesCautelares();
                        return $datos;
                    }
            }

            public function cautelares_mes(){

                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        $anio = $_GET['anio'];
                        $this->ficha->set("anio",$anio);
                        $datos = $this->cautelar->verCautelaresMes();
                        return $datos;
                    }
            }
}
    $ficha = new porcantidadesController();
?>