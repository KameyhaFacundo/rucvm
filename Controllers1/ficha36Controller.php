<?php namespace Controllers1;

use Models1\Ficha36 as Ficha36;
//use Models\Seccion as Seccion;

	class ficha36Controller{
            
            private $ficha36;
            //private $seccion;
            
            public function __construct() {
                $this->ficha36 = new Ficha36();
                //$this->seccion = new Seccion();
            }

                
                public function agregar(){
                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        }else{
                 		
                                    /*$this->ficha36->set("idficha",$_POST['idficha']);
                                    $this->ficha36->set("t_suenio",$_POST['t_suenio']);
                                    $this->ficha36->set("t_alimen",$_POST['t_alimen']);
                                    $this->ficha36->set("t_digest",$_POST['t_digest']);
                                    $this->ficha36->set("t_antidep",$_POST['t_antidep']);
                                    $this->ficha36->set("t_aldrog",$_POST['t_aldrog']);
                                    $this->ficha36->set("t_its",$_POST['t_its']);
                                    $this->ficha36->set("t_otro",$_POST['t_otro']);
                                    $this->ficha36->agregarFicha36();*/
                                    session_start();/*
                                    foreach ($_POST as $clave => $valor) {
                                    $_SESSION['sesionficha36'][$clave] = $valor;
                                    }*/
                                    $_SESSION['f36_t_suenio'] = $_POST['t_suenio'];
                                    $_SESSION['f36_t_alimen'] = $_POST['t_alimen'];
                                    $_SESSION['f36_t_digest'] = $_POST['t_digest'];
                                    $_SESSION['f36_t_antidep'] = $_POST['t_antidep'];
                                    $_SESSION['f36_t_aldrog'] = $_POST['t_aldrog'];
                                    $_SESSION['f36_t_its'] = $_POST['t_its'];
                                    $_SESSION['f36_t_otro'] = trim($_POST['t_otro']);
                                    header("Location: " . URL . "ficha37/agregar");  
                                                       
                        }
                }
                
                
                public function  editar(){
                    if(!$_POST){
                        session_start();
                        $this->ficha36->set("idficha",$_SESSION['pE_idficha']);
                        $datos = $this->ficha36->verFicha36();
                        return $datos;
                    }else{
                                    session_start();
                                    $_SESSION['f36E_t_suenio'] = $_POST['t_suenio'];
                                    $_SESSION['f36E_t_alimen'] = $_POST['t_alimen'];
                                    $_SESSION['f36E_t_digest'] = $_POST['t_digest'];
                                    $_SESSION['f36E_t_antidep'] = $_POST['t_antidep'];
                                    $_SESSION['f36E_t_aldrog'] = $_POST['t_aldrog'];
                                    $_SESSION['f36E_t_its'] = $_POST['t_its'];
                                    $_SESSION['f36E_t_otro'] = trim($_POST['t_otro']);
                                    header("Location: " . URL . "ficha37/editar");
                    }
                    
                }
                
                public function listarSecciones(){
                    $datos = $this->seccion->listar();
                    return $datos;
                }
                
                public function ver($id){
                    $this->ficha36->set("idficha36",$id);
                    $datos = $this->ficha36->verFicha36();
                    return $datos;
                }
                
                
                public function eliminar($id){
                    $this->ficha36->set("idficha36",$id);
                    $this->ficha36->eliminarFicha36();
                    header("Location: " . URL . "ficha36");
                    
                }
                
                
	}
        $ficha36 = new ficha36Controller();
        
?>