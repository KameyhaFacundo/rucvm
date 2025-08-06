<?php namespace Controllers1;

use Models1\Usuario as Usuario;

	class usuarioController{
            
            private $usuario;
            
            public function __construct() {
                $this->usuario = new Usuario();
            }


            public function index(){

            }
            
            public function agregar(){
                if($_POST){
                    $this->usuario->set("username",$_POST['username']);
                    $this->usuario->set("password",$_POST['password']);
                    $this->usuario->set("nombre",$_POST['nombre']);
                    $this->usuario->set("apellido",$_POST['apellido']);
                    $this->usuario->set("us_email",$_POST['us_email']);
                    $this->usuario->set("permiso",$_POST['permiso']);
                    $this->usuario->set("idinstitucion",$_POST['idinstitucion']);
                    $this->usuario->agregarUsuario();
                    header("Location: " . URL . "usuario/ver_usuarios"); 
                }else{
                    echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                }
            }
                
                
            public function ver_usuarios(){
                    if($_POST){
                        $this->usuario->set("usuario",$_POST['usuario']);
                        $datos = $this->usuario->buscarUsuario();
                        return $datos;
                    }else{
                        $datos = $this->usuario->verUsuarios();
                        return $datos;
                    }
            }   
	}
    $usuario = new usuarioController();        
?>