<?php namespace Controllers1;

use Models1\Ficha34 as Ficha34;
//use Models\Seccion as Seccion;

	class ficha34Controller{
            
            private $ficha34;
            //private $seccion;
            
            public function __construct() {
                $this->ficha34 = new Ficha34();
                //$this->seccion = new Seccion();
            }
                
                
                public function agregar(){
                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        }else{
                 		
                                    /*$this->ficha34->set("idficha",$_POST['idficha']);
                                    $this->ficha34->set("he_embar",$_POST['he_embar']);
                                    $this->ficha34->set("he_celos",$_POST['he_celos']);
                                    $this->ficha34->set("he_plabor",$_POST['he_plabor']);
                                    $this->ficha34->set("he_alcohol",$_POST['he_alcohol']);
                                    $this->ficha34->set("he_autoco",$_POST['he_autoco']);
                                    $this->ficha34->set("he_impco",$_POST['he_impco']);
                                    $this->ficha34->set("he_separ",$_POST['he_separ']);
                                    $this->ficha34->set("he_otro",$_POST['he_otro']);
                                    $this->ficha34->agregarFicha34();*/
                                    session_start();/*
                                    foreach ($_POST as $clave => $valor) {
                                    $_SESSION['sesionficha34'][$clave] = $valor;
                                    }*/
                                    $_SESSION['f34_he_embar'] = $_POST['he_embar'];
                                    $_SESSION['f34_he_celos'] = $_POST['he_celos'];
                                    $_SESSION['f34_he_plabor'] = $_POST['he_plabor'];
                                    $_SESSION['f34_he_alcohol'] = $_POST['he_alcohol'];
                                    $_SESSION['f34_he_autoco'] = $_POST['he_autoco'];
                                    $_SESSION['f34_he_impco'] = $_POST['he_impco'];
                                    $_SESSION['f34_he_separ'] = $_POST['he_separ'];
                                    $_SESSION['f34_he_otro'] = trim($_POST['he_otro']);
                                    header("Location: " . URL . "ficha35/agregar");  
                                       
                        }
                }
                
                
                public function  editar(){
                    if(!$_POST){
                        session_start();
                        $this->ficha34->set("idficha",$_SESSION['pE_idficha']);
                        $datos = $this->ficha34->verFicha34();
                        return $datos;
                    }else{
                                    session_start();
                                    $_SESSION['f34E_he_embar'] = $_POST['he_embar'];
                                    $_SESSION['f34E_he_celos'] = $_POST['he_celos'];
                                    $_SESSION['f34E_he_plabor'] = $_POST['he_plabor'];
                                    $_SESSION['f34E_he_alcohol'] = $_POST['he_alcohol'];
                                    $_SESSION['f34E_he_autoco'] = $_POST['he_autoco'];
                                    $_SESSION['f34E_he_impco'] = $_POST['he_impco'];
                                    $_SESSION['f34E_he_separ'] = $_POST['he_separ'];
                                    $_SESSION['f34E_he_otro'] = trim($_POST['he_otro']);
                                    header("Location: " . URL . "ficha35/editar");
                    }
                    
                }
                
                public function listarSecciones(){
                    $datos = $this->seccion->listar();
                    return $datos;
                }
                
                public function ver($id){
                    $this->ficha34->set("idficha34",$id);
                    $datos = $this->ficha34->verFicha34();
                    return $datos;
                }
                
                
                public function eliminar($id){
                    $this->ficha34->set("idficha34",$id);
                    $this->ficha34->eliminarFicha34();
                    header("Location: " . URL . "ficha34");
                    
                }
                
                
	}
        $ficha34 = new ficha34Controller();
        
?>