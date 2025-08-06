<?php namespace Controllers1;

use Models1\Ficha33 as Ficha33;
//use Models\Seccion as Seccion;

	class ficha33Controller{
            
            private $ficha33;
            //private $seccion;
            
            public function __construct() {
                $this->ficha33 = new Ficha33();
                //$this->seccion = new Seccion();
            }
                
                
                public function agregar(){
                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        }else{
                 		
                                    /*$this->ficha33->set("idficha",$_POST['idficha']);
                                    $this->ficha33->set("anco_fisica",$_POST['anco_fisica']);
                                    $this->ficha33->set("anco_psico",$_POST['anco_psico']);
                                    $this->ficha33->set("anco_absex",$_POST['anco_absex']);
                                    $this->ficha33->set("anco_tesvio",$_POST['anco_tesvio']);
                                    $this->ficha33->set("anco_aban",$_POST['anco_aban']);
                                    $this->ficha33->set("anco_otro",$_POST['anco_otro']);
                                    $this->ficha33->agregarFicha33();*/
                                    session_start();/*
                                    foreach ($_POST as $clave => $valor) {
                                    $_SESSION['sesionficha33'][$clave] = $valor;
                                    }*/
                                    $_SESSION['f33_anag_fisica'] = $_POST['anag_fisica'];
                                    $_SESSION['f33_anag_psico'] = $_POST['anag_psico'];
                                    $_SESSION['f33_anag_absex'] = $_POST['anag_absex'];
                                    $_SESSION['f33_anag_tesvio'] = $_POST['anag_tesvio'];
                                    $_SESSION['f33_anag_aban'] = $_POST['anag_aban'];
                                    $_SESSION['f33_anag_otro'] = trim($_POST['anag_otro']);
                                    header("Location: " . URL . "ficha34/agregar");  
                                                                      
                        }
                }
                
                
                public function  editar(){
                    if(!$_POST){
                        session_start();
                        $this->ficha33->set("idficha",$_SESSION['pE_idficha']);
                        $datos = $this->ficha33->verFicha33();
                        return $datos;
                    }else{
                                    session_start();
                                    $_SESSION['f33E_anag_fisica'] = $_POST['anag_fisica'];
                                    $_SESSION['f33E_anag_psico'] = $_POST['anag_psico'];
                                    $_SESSION['f33E_anag_absex'] = $_POST['anag_absex'];
                                    $_SESSION['f33E_anag_tesvio'] = $_POST['anag_tesvio'];
                                    $_SESSION['f33E_anag_aban'] = $_POST['anag_aban'];
                                    $_SESSION['f33E_anag_otro'] = trim($_POST['anag_otro']);
                                    header("Location: " . URL . "ficha34/editar");
                    }
                    
                }
                
                public function listarSecciones(){
                    $datos = $this->seccion->listar();
                    return $datos;
                }
                
                public function ver($id){
                    $this->ficha33->set("idficha33",$id);
                    $datos = $this->ficha33->verFicha33();
                    return $datos;
                }
                
                
                public function eliminar($id){
                    $this->ficha33->set("idficha33",$id);
                    $this->ficha33->eliminarFicha33();
                    header("Location: " . URL . "ficha33");
                    
                }
                
                
	}
        $ficha33 = new ficha33Controller();
        
?>