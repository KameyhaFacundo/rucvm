<?php namespace Controllers1;

use Models1\Ficha31 as Ficha31;
//use Models\Seccion as Seccion;

	class ficha31Controller{
            
            private $ficha31;
            //private $seccion;
            
            public function __construct() {
                $this->ficha31 = new Ficha31();
                //$this->seccion = new Seccion();
            }  
                
                public function agregar(){
                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        }else{
                 		
                                    /*$this->ficha31->set("idficha",$_POST['idficha']);
                                    $this->ficha31->set("v_fisica",$_POST['v_fisica']);
                                    $this->ficha31->set("v_psicologica",$_POST['v_psicologica']);
                                    $this->ficha31->set("v_sexual",$_POST['v_sexual']);
                                    $this->ficha31->set("v_parsocial",$_POST['v_parsocial']);
                                    $this->ficha31->set("v_simbolica",$_POST['v_simbolica']);
                                    $this->ficha31->set("co_obstaculo",$_POST['co_obstaculo']);
                                    $this->ficha31->set("co_econo",$_POST['co_econo']);
                                    $this->ficha31->agregarFicha31();*/
                                    session_start();/*
                                    foreach ($_POST as $clave => $valor) {
                                    $_SESSION['sesionficha31'][$clave] = $valor;
                                    }*/
                                    $_SESSION['f31_v_fisica'] = $_POST['v_fisica'];
                                    $_SESSION['f31_v_psicologica'] = $_POST['v_psicologica'];
                                    $_SESSION['f31_v_sexual'] = $_POST['v_sexual'];
                                    $_SESSION['f31_v_parsocial'] = $_POST['v_parsocial'];
                                    $_SESSION['f31_v_simbolica'] = $_POST['v_simbolica'];
                                    $_SESSION['f31_v_economica'] = $_POST['v_economica'];
                                    $_SESSION['f31_co_obstaculo'] = $_POST['co_obstaculo'];
                                    $_SESSION['f31_co_econo'] = $_POST['co_econo'];
                                    header("Location: " . URL . "ficha32/agregar");   
                                                                       
                        }
                }
                
                
                public function  editar(){
                    if(!$_POST){
                        session_start();
                        $this->ficha31->set("idficha",$_SESSION['pE_idficha']);
                        $datos = $this->ficha31->verFicha31();
                        return $datos;
                    }else{
                                    session_start();
                                    $_SESSION['f31E_v_fisica'] = $_POST['v_fisica'];
                                    $_SESSION['f31E_v_psicologica'] = $_POST['v_psicologica'];
                                    $_SESSION['f31E_v_sexual'] = $_POST['v_sexual'];
                                    $_SESSION['f31E_v_parsocial'] = $_POST['v_parsocial'];
                                    $_SESSION['f31E_v_simbolica'] = $_POST['v_simbolica'];
                                    $_SESSION['f31E_v_economica'] = $_POST['v_economica'];
                                    $_SESSION['f31E_co_obstaculo'] = $_POST['co_obstaculo'];
                                    $_SESSION['f31E_co_econo'] = $_POST['co_econo'];
                                    header("Location: " . URL . "ficha32/editar");
               
                    }
                    
                }
                
                public function listarSecciones(){
                    $datos = $this->seccion->listar();
                    return $datos;
                }
                
                public function ver($id){
                    $this->ficha31->set("idficha31",$id);
                    $datos = $this->ficha31->verFicha31();
                    return $datos;
                }
                
                
                public function eliminar($id){
                    $this->ficha31->set("idficha31",$id);
                    $this->ficha31->eliminarFicha31();
                    header("Location: " . URL . "ficha31");
                    
                }
                
                
	}
        $ficha31 = new ficha31Controller();
        
?>