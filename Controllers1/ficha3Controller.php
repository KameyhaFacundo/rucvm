<?php namespace Controllers1;

use Models1\Ficha3 as Ficha3;
//use Models\Seccion as Seccion;

	class ficha3Controller{
            
            private $ficha3;
            //private $seccion;
            
            public function __construct() {
                $this->ficha3 = new Ficha3();
                //$this->seccion = new Seccion();
            }

                
                public function agregar(){
                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        }else{
                 		
                                   /* $this->ficha3->set("idficha",$_POST['idficha']);
                                    $this->ficha3->set("embarazada",$_POST['embarazada']);
                                    $this->ficha3->set("anviagresor",$_POST['anviagresor']);
                                    $this->ficha3->set("anmaltrato",$_POST['anmaltrato']);
                                    $this->ficha3->set("idvinculo",$_POST['idvinculo']);
                                    $this->ficha3->set("cohab",$_POST['cohab']);
                                    $this->ficha3->set("idriesgo",$_POST['idriesgo']);
                                    $this->ficha3->agregarFicha3();*/
                                    session_start();/*
                                    foreach ($_POST as $clave => $valor) {
                                    $_SESSION['sesionficha3'][$clave] = $valor;
                                    }*/
                                    $_SESSION['f3_idficha'] = $_POST['idficha'];
                                    $_SESSION['f3_embarazada'] = $_POST['embarazada'];
                                    $_SESSION['f3_anviagresor'] = $_POST['anviagresor'];
                                    $_SESSION['f3_anmaltrato'] = $_POST['anmaltrato'];
                                    $_SESSION['f3_idvinculo'] = $_POST['idvinculo'];
                                    $_SESSION['f3_cohab'] = $_POST['cohab'];
                                    $_SESSION['f3_idriesgo'] = $_POST['idriesgo'];
                                    header("Location: " . URL . "ficha31/agregar");                                 
                                    
                        }
                }
                
                
                public function  editar(){
                    if(!$_POST){
                        session_start();
                        $this->ficha3->set("idficha",$_SESSION['pE_idficha']);
                        $datos = $this->ficha3->verFicha3();
                        return $datos;
                    }else{
                                    session_start();
                                    $_SESSION['f3E_idficha'] = $_POST['idficha'];
                                    $_SESSION['f3E_embarazada'] = $_POST['embarazada'];
                                    $_SESSION['f3E_anviagresor'] = $_POST['anviagresor'];
                                    $_SESSION['f3E_anmaltrato'] = $_POST['anmaltrato'];
                                    $_SESSION['f3E_idvinculo'] = $_POST['idvinculo'];
                                    $_SESSION['f3E_cohab'] = $_POST['cohab'];
                                    $_SESSION['f3E_idriesgo'] = $_POST['idriesgo'];

                                    header("Location: " . URL . "ficha31/editar");
                    }
                    
                }
                
                public function listarSecciones(){
                    $datos = $this->seccion->listar();
                    return $datos;
                }
                
                public function ver($id){
                    $this->ficha3->set("idficha3",$id);
                    $datos = $this->ficha3->verFicha3();
                    return $datos;
                }
                
                
                public function eliminar($id){
                    $this->ficha3->set("idficha3",$id);
                    $this->ficha3->eliminarFicha3();
                    header("Location: " . URL . "ficha3");
                    
                }
                
                
	}
        $ficha3 = new ficha3Controller();
        
?>