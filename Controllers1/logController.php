<?php namespace Controllers1;

use Models1\Log as log;
use Config1\Enrutador as Enrutador;

	class logController{
            
            private $log;

            
            public function __construct() {
                $this->log = new Log();
            }
                
                public function verificar(){
					echo "<script>console.log('Console: 3" .$_GET['url']. "' );</script>";
                    if(!$_POST){
                    echo "<script>console.log('Console: 4" .$_GET['url']. "' );</script>";
                    }else{
						echo "<script>console.log('Console: 7" .$datos. "' );</script>"; 	
                        session_start();
						
                        $this->log->set('username',$_POST['username']);
                        $this->log->set('password',$_POST['password']);
                        $datos= $this->log->verLog();
                        if($_POST['username']==$datos['username']){
                            if($_POST['password']==$datos['password']){
                                $_SESSION['username'] = $_POST['username'];
                                $_SESSION['password'] = $_POST['password'];
                                $_SESSION['idusuario'] = $datos['idusuario'];
                                $_SESSION['idinstitucion'] = $datos['idinstitucion'];
                                $_SESSION['permiso'] = $datos['permiso'];
                                $_SESSION['u_nombre'] = $datos['nombre'];
                                $_SESSION['u_apellido'] = $datos['apellido'];
                                if($_SESSION['idinstitucion'] == 16){
                                    header("Location: " . URL . "home/inicio");
                                }else{
									echo "<script>console.log('Console: 10" .$ruta. "' );</script>"; 
									 //use Config1\Autoload.php;
									 //Config1\Autoload::run();
									//$this->controlador = "principal";
									//$this->metodo = "buscar";
									//new Config1\Request();
									$objeto = new Enrutador();
									$objeto->run(new Config1\Request());
                                    header("Location:principal/buscar");
                                }
                            }else{
                                return ["message" => "¡Error! Contraseña incorrecta."];
                            }
                        }else{
                            return ["message" => "¡Error! Usuario no encontrado."];
                        }
                    }
                }
                
                
                
                public function logout(){
                    if(!$_POST){
                                echo '<div id="loader">
                                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                                    </div>';
                               session_start();

                               session_destroy();

                               header("Location: " . URL);

                        }
                }
            }   
	
    $log = new logController();
        
?>
