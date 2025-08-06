<?php namespace Controllers1;

use Models1\Ficha32 as Ficha32;
//use Models\Seccion as Seccion;

	class ficha32Controller{
            
            private $ficha32;
            //private $seccion;
            
            public function __construct() {
                $this->ficha32 = new Ficha32();
                //$this->seccion = new Seccion();
            }

                public function agregar(){
                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        }else{
                 		
                                    /*$this->ficha32->set("idficha",$_POST['idficha']);
                                    $this->ficha32->set("anco_fisica",$_POST['anco_fisica']);
                                    $this->ficha32->set("anco_psico",$_POST['anco_psico']);
                                    $this->ficha32->set("anco_absex",$_POST['anco_absex']);
                                    $this->ficha32->set("anco_tesvio",$_POST['anco_tesvio']);
                                    $this->ficha32->set("anco_aban",$_POST['anco_aban']);
                                    $this->ficha32->set("anco_otro",$_POST['anco_otro']);
                                    $this->ficha32->agregarFicha32();*/
                                    session_start();/*
                                    foreach ($_POST as $clave => $valor) {
                                    $_SESSION['sesionficha32'][$clave] = $valor;
                                    }*/
                                    $_SESSION['f32_anco_fisica'] = $_POST['anco_fisica'];
                                    $_SESSION['f32_anco_psico'] = $_POST['anco_psico'];
                                    $_SESSION['f32_anco_absex'] = $_POST['anco_absex'];
                                    $_SESSION['f32_anco_tesvio'] = $_POST['anco_tesvio'];
                                    $_SESSION['f32_anco_aban'] = $_POST['anco_aban'];
                                    $_SESSION['f32_anco_otro'] = trim($_POST['anco_otro']);
                                    header("Location: " . URL . "ficha33/agregar");  
                                                                       
                        }
                }
                
                
                public function  editar(){
                    if(!$_POST){
                        session_start();
                        $this->ficha32->set("idficha",$_SESSION['pE_idficha']);
                        $datos = $this->ficha32->verFicha32();
                        return $datos;
                    }else{
                                    session_start();
                                    $_SESSION['f32E_anco_fisica'] = $_POST['anco_fisica'];
                                    $_SESSION['f32E_anco_psico'] = $_POST['anco_psico'];
                                    $_SESSION['f32E_anco_absex'] = $_POST['anco_absex'];
                                    $_SESSION['f32E_anco_tesvio'] = $_POST['anco_tesvio'];
                                    $_SESSION['f32E_anco_aban'] = $_POST['anco_aban'];
                                    $_SESSION['f32E_anco_otro'] = trim($_POST['anco_otro']);
                                    header("Location: " . URL . "ficha33/editar");
                    }
                    
                }
                
                public function listarSecciones(){
                    $datos = $this->seccion->listar();
                    return $datos;
                }
                
                public function ver($id){
                    $this->ficha32->set("idficha32",$id);
                    $datos = $this->ficha32->verFicha32();
                    return $datos;
                }
                
                
                public function eliminar($id){
                    $this->ficha32->set("idficha32",$id);
                    $this->ficha32->eliminarFicha32();
                    header("Location: " . URL . "ficha32");
                    
                }
                
                
	}
        $ficha32 = new ficha32Controller();
        
?>