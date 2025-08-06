<?php namespace Controllers1;


	class acercadeController{
            
            
            public function __construct() {
                //$this->seccion = new Seccion();
            }


            public function index(){
		//print "Hola soy el index del estudiante";
               //$datos = $this->ficha->verFicha();
               //return $datos;
		}
                
                
                public function def_rucvm(){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                    
                }

                public function contacto(){
                        echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';
                }

                public function descargar(){
                        echo '<div id="loader">
                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    </div>';            
                }
	}
        $acercade = new acercadeController();
        
?>