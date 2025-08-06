<?php namespace Controllers1;

use Models1\Ficha35 as Ficha35;
//use Models\Seccion as Seccion;

	class ficha35Controller{
            
            private $ficha35;
            //private $seccion;
            
            public function __construct() {
                $this->ficha35 = new Ficha35();
                //$this->seccion = new Seccion();
            }
                
                
                public function agregar(){
                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        }else{
                 		
                                    /*$this->ficha35->set("idficha",$_POST['idficha']);
                                    $this->ficha35->set("ind_lesfis",$_POST['ind_lesfis']);
                                    $this->ficha35->set("ind_intmed",$_POST['ind_intmed']);
                                    $this->ficha35->set("ind_amuerte",$_POST['ind_amuerte']);
                                    $this->ficha35->set("ind_armas",$_POST['ind_armas']);
                                    $this->ficha35->set("ind_aborto",$_POST['ind_aborto']);
                                    $this->ficha35->set("ind_idsuic",$_POST['ind_idsuic']);
                                    $this->ficha35->set("ind_sexfor",$_POST['ind_sexfor']);
                                    $this->ficha35->set("ind_acoso",$_POST['ind_acoso']);
                                    $this->ficha35->set("ind_antpen",$_POST['ind_antpen']);
                                    $this->ficha35->set("ind_sust",$_POST['ind_sust']);
                                    $this->ficha35->agregarFicha35();*/
                                    session_start();/*
                                    foreach ($_POST as $clave => $valor) {
                                    $_SESSION['sesionficha35'][$clave] = $valor;
                                    }*/
                                    $_SESSION['f35_ind_lesfis'] = $_POST['ind_lesfis'];
                                    $_SESSION['f35_ind_intmed'] = $_POST['ind_intmed'];
                                    $_SESSION['f35_ind_amuerte'] = $_POST['ind_amuerte'];
                                    $_SESSION['f35_ind_armas'] = $_POST['ind_armas'];
                                    $_SESSION['f35_ind_aborto'] = $_POST['ind_aborto'];
                                    $_SESSION['f35_ind_idsuic'] = $_POST['ind_idsuic'];
                                    $_SESSION['f35_ind_insuic'] = $_POST['ind_insuic'];
                                    $_SESSION['f35_ind_sexfor'] = $_POST['ind_sexfor'];
                                    $_SESSION['f35_ind_acoso'] = $_POST['ind_acoso'];
                                    $_SESSION['f35_ind_antpen'] = $_POST['ind_antpen'];
                                    $_SESSION['f35_ind_sust'] = $_POST['ind_sust'];
                                    /*echo '<b>Datos form4</b>';
                                    $sesionficha3=$_SESSION['sesionficha3'];
                                    echo '<pre>';
                                    print_r($sesionficha3);
                                    echo '</pre>';
                                    echo '<b>Datos form5</b>';
                                    $sesionficha31=$_SESSION['sesionficha31'];
                                    echo '<pre>';
                                    print_r($sesionficha31);
                                    echo '</pre>';
                                    echo '<b>Datos form6</b>';
                                    $sesionficha32=$_SESSION['sesionficha32'];
                                    echo '<pre>';
                                    print_r($sesionficha32);
                                    echo '</pre>';
                                    echo '<b>Datos form7</b>';
                                    $sesionficha33=$_SESSION['sesionficha33'];
                                    echo '<pre>';
                                    print_r($sesionficha33);
                                    echo '</pre>';
                                    echo '<b>Datos form8</b>';
                                    $sesionficha34=$_SESSION['sesionficha34'];
                                    echo '<pre>';
                                    print_r($sesionficha34);
                                    echo '</pre>';
                                    echo '<b>Datos form9</b>';
                                    $sesionficha35=$_SESSION['sesionficha35'];
                                    echo '<pre>';
                                    print_r($sesionficha35);
                                    echo '</pre>';*/
                                    
                                    header("Location: " . URL . "ficha36/agregar");  
                                                                          
                        }
                }
                
                
                public function  editar(){
                    if(!$_POST){
                        session_start();
                        $this->ficha35->set("idficha",$_SESSION['pE_idficha']);
                        $datos = $this->ficha35->verFicha35();
                        return $datos;
                    }else{
                                    session_start();
                                    $_SESSION['f35E_ind_lesfis'] = $_POST['ind_lesfis'];
                                    $_SESSION['f35E_ind_intmed'] = $_POST['ind_intmed'];
                                    $_SESSION['f35E_ind_amuerte'] = $_POST['ind_amuerte'];
                                    $_SESSION['f35E_ind_armas'] = $_POST['ind_armas'];
                                    $_SESSION['f35E_ind_aborto'] = $_POST['ind_aborto'];
                                    $_SESSION['f35E_ind_idsuic'] = $_POST['ind_idsuic'];
                                    $_SESSION['f35E_ind_insuic'] = $_POST['ind_insuic'];
                                    $_SESSION['f35E_ind_sexfor'] = $_POST['ind_sexfor'];
                                    $_SESSION['f35E_ind_acoso'] = $_POST['ind_acoso'];
                                    $_SESSION['f35E_ind_antpen'] = $_POST['ind_antpen'];
                                    $_SESSION['f35E_ind_sust'] = $_POST['ind_sust'];
                                    header("Location: " . URL . "ficha36/editar");
                    }
                    
                }
                
                public function listarSecciones(){
                    $datos = $this->seccion->listar();
                    return $datos;
                }
                
                public function ver($id){
                    $this->ficha35->set("idficha35",$id);
                    $datos = $this->ficha35->verFicha35();
                    return $datos;
                }
                
                
                public function eliminar($id){
                    $this->ficha35->set("idficha35",$id);
                    $this->ficha35->eliminarFicha35();
                    header("Location: " . URL . "ficha35");
                    
                }
                
                
	}
        $ficha35 = new ficha35Controller();
        
?>