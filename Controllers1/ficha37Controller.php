<?php namespace Controllers1;

use Models1\Ficha37 as Ficha37;
//use Models\Seccion as Seccion;

	class ficha37Controller{
            
            private $ficha37;
            //private $seccion;
            
            public function __construct() {
                $this->ficha37 = new Ficha37();
                //$this->seccion = new Seccion();
            }

                public function agregar(){
                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        }else{
                 		
                                   /* $this->ficha37->set("idficha",$_POST['idficha']);
                                    $this->ficha37->set("des_hijos",$_POST['des_hijos']);
                                    * _POST['des_golpes'];
                                    $this->ficha37->set("des_conoc",$_POST['des_conoc']);
                                    $this->ficha37->set("des_infide",$_POST['des_infide']);
                                    $this->ficha37->set("des_solic",$_POST['des_solic']);
                                    $this->ficha37->set("des_limite",$_POST['des_limite']);
                                    $this->ficha37->set("des_legal",$_POST['des_legal']);
                                    $this->ficha37->set("des_deriv",$_POST['des_deriv']);
                                    $this->ficha34->set("des_miedo",$_POST['des_miedo']);
                                    $this->ficha37->set("des_otro",$_POST['des_otro']);
                                    $this->ficha37->agregarFicha37();*/
                                    session_start();/*
                                    foreach ($_POST as $clave => $valor) {
                                    $_SESSION['sesionficha37'][$clave] = $valor;
                                    }*/
                                    $_SESSION['f37_des_hijos'] = $_POST['des_hijos'];
                                    $_SESSION['f37_des_golpe'] = $_POST['des_golpe'];
                                    $_SESSION['f37_des_conoc'] = $_POST['des_conoc'];
                                    $_SESSION['f37_des_infide'] = $_POST['des_infide'];
                                    $_SESSION['f37_des_solic'] = $_POST['des_solic'];
                                    $_SESSION['f37_des_limite'] = $_POST['des_limite'];
                                    $_SESSION['f37_des_legal'] = $_POST['des_legal'];
                                    $_SESSION['f37_des_deriv'] = $_POST['des_deriv'];
                                    $_SESSION['f37_des_miedo'] = $_POST['des_miedo'];
                                    $_SESSION['f37_des_otro'] = trim($_POST['des_otro']);
                                    header("Location: " . URL . "ficha4/agregar");  
                                       
                        }
                }
                
                
                public function  editar(){
                    if(!$_POST){
                        session_start();
                        $this->ficha37->set("idficha",$_SESSION['pE_idficha']);
                        $datos = $this->ficha37->verFicha37();
                        return $datos;
                    }else{
                                    session_start();
                                    $_SESSION['f37E_des_hijos'] = $_POST['des_hijos'];
                                    $_SESSION['f37E_des_golpe'] = $_POST['des_golpe'];
                                    $_SESSION['f37E_des_conoc'] = $_POST['des_conoc'];
                                    $_SESSION['f37E_des_infide'] = $_POST['des_infide'];
                                    $_SESSION['f37E_des_solic'] = $_POST['des_solic'];
                                    $_SESSION['f37E_des_limite'] = $_POST['des_limite'];
                                    $_SESSION['f37E_des_legal'] = $_POST['des_legal'];
                                    $_SESSION['f37E_des_deriv'] = $_POST['des_deriv'];
                                    $_SESSION['f37E_des_miedo'] = $_POST['des_miedo'];
                                    $_SESSION['f37E_des_otro'] = trim($_POST['des_otro']);
                                    header("Location: " . URL . "ficha4/editar");

                    }
                    
                }
                
                public function listarSecciones(){
                    $datos = $this->seccion->listar();
                    return $datos;
                }
                
                public function ver($id){
                    $this->ficha37->set("idficha37",$id);
                    $datos = $this->ficha37->verFicha37();
                    return $datos;
                }
                
                
                public function eliminar($id){
                    $this->ficha37->set("idficha37",$id);
                    $this->ficha37->eliminarFicha37();
                    header("Location: " . URL . "ficha37");
                    
                }
                
                
	}
        $ficha37 = new ficha37Controller();
        
?>