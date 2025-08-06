<?php namespace Controllers1;

use Models1\Ficha as Ficha;

	class pornombreController{
            
            private $pornombre;
            private $ficha;
            
            public function __construct() {
                $this->ficha = new Ficha();
            }
                
                
            public function por_nombre_consultante(){
                    if($_POST){
                        $this->ficha->set("nombre",$_POST['nombre']);
                        $this->ficha->set("apellido",$_POST['apellido']);
                        $datos = $this->ficha->verFichasPorNombre();
                        return $datos;
                    }else{
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                    }
            }   
	}
    $ficha = new pornombreController();
        
?>