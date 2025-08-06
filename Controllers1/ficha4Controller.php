<?php namespace Controllers1;

use Models1\Ficha4 as Ficha4;
//use Models\Seccion as Seccion;

	class ficha4Controller{
            
            private $ficha4;
            //private $seccion;
            
            public function __construct() {
                $this->ficha4 = new Ficha4();
                //$this->seccion = new Seccion();
            }   
                
                public function agregar(){
                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        }else{
                 		
                                    /*$this->ficha4->set("idficha",$_POST['idficha']);
                                    $this->ficha4->set("recientepenal",$_POST['recientepenal']);
                                    $this->ficha4->set("recientecivil",$_POST['recientecivil']);
                                    $this->ficha4->set("previacivil",$_POST['previacivil']);
                                    $this->ficha4->set("recientepoli",$_POST['recientepoli']);
                                    $this->ficha4->set("previapoli",$_POST['previapoli']);
                                    $this->ficha4->set("idaccesibilidad",$_POST['idaccesibilidad']);
                                    $this->ficha4->set("di_noinfo",$_POST['di_noinfo']);
                                    $this->ficha4->set("di_apsico",$_POST['di_apsico']);
                                    $this->ficha4->set("di_pjuridico",$_POST['di_pjuridico']);
                                    $this->ficha4->set("di_refugio",$_POST['di_refugio']);
                                    $this->ficha4->set("di_grupos",$_POST['di_grupos']);
                                    $this->ficha4->set("di_alegal",$_POST['di_alegal']);
                                    $this->ficha4->set("di_asocial",$_POST['di_asocial']);
                                    $this->ficha4->set("di_otros",$_POST['di_otros']);
                                    $this->ficha4->set("de_noinfo",$_POST['de_noinfo']);
                                    $this->ficha4->set("de_ofemp",$_POST['de_ofemp']);
                                    $this->ficha4->set("de_consul",$_POST['de_consul']);
                                    $this->ficha4->set("de_defen",$_POST['de_defen']);
                                    $this->ficha4->set("de_psocial",$_POST['de_psocial']);
                                    $this->ficha4->set("de_amujer",$_POST['de_amujer']);
                                    $this->ficha4->set("de_otra",$_POST['de_otra']);
                                    $this->ficha4->set("de_comujer",$_POST['de_comujer']);
                                    $this->ficha4->set("ext_cual",$_POST['ext_cual']);
                                    $this->ficha4->set("idcomisaria",$_POST['idcomisaria']);
                                    $this->ficha4->set("denuncia",$_POST['denuncia']);
                                    $this->ficha4->set("p_medidas",$_POST['p_medidas']);
                                    $this->ficha4->agregarFicha4();*/
                                    session_start();/*
                                    foreach ($_POST as $clave => $valor) {
                                    $_SESSION['sesionficha4'][$clave] = $valor;
                                    }*/
                                    $_SESSION['f4_recientepenal'] = $_POST['recientepenal'];
                                    $_SESSION['f4_recientecivil'] = $_POST['recientecivil'];
                                    $_SESSION['f4_previacivil'] = $_POST['previacivil'];
                                    $_SESSION['f4_recientepoli'] = $_POST['recientepoli'];
                                    $_SESSION['f4_previapoli'] = $_POST['previapoli'];
                                    $_SESSION['f4_previapenal'] = $_POST['previapenal'];
                                    $_SESSION['f4_idaccesibilidad'] = $_POST['idaccesibilidad'];
                                    $_SESSION['f4_di_noinfo'] = $_POST['di_noinfo'];
                                    $_SESSION['f4_di_apsico'] = $_POST['di_apsico'];
                                    $_SESSION['f4_di_pjuridico'] = $_POST['di_pjuridico'];
                                    $_SESSION['f4_di_refugio'] = $_POST['di_refugio'];
                                    $_SESSION['f4_di_grupos'] = $_POST['di_grupos'];
                                    $_SESSION['f4_di_alegal'] = $_POST['di_alegal'];
                                    $_SESSION['f4_di_asocial'] = $_POST['di_asocial'];
                                    $_SESSION['f4_di_otros'] = $_POST['di_otros'];
                                    $_SESSION['f4_de_noinfo'] = $_POST['de_noinfo'];
                                    $_SESSION['f4_de_ofemp'] = $_POST['de_ofemp'];
                                    $_SESSION['f4_de_consul'] = $_POST['de_consul'];
                                    $_SESSION['f4_de_defen'] = $_POST['de_defen'];
                                    $_SESSION['f4_de_psocial'] = $_POST['de_psocial'];
                                    $_SESSION['f4_de_amujer'] = $_POST['de_amujer'];
                                    $_SESSION['f4_de_otra'] = $_POST['de_otra'];
                                    $_SESSION['f4_de_comujer'] = $_POST['de_comujer'];
                                    $_SESSION['f4_ext_cual'] = $_POST['ext_cual'];
                                    $_SESSION['f4_idcomisaria'] = $_POST['idcomisaria'];
                                    $_SESSION['f4_denuncia'] = $_POST['denuncia'];
                                    $_SESSION['f4_p_medidas'] = $_POST['p_medidas'];
                                    header("Location: " . URL . "ficha41/agregar");  
               
                        }
                }
                
                
                public function  editar(){
                    if(!$_POST){
                        session_start();
                        $this->ficha4->set("idficha",$_SESSION['pE_idficha']);
                        $datos = $this->ficha4->verFicha4();
                        return $datos;
                    }else{
                                    session_start();
                                    $_SESSION['f4E_recientepenal'] = $_POST['recientepenal'];
                                    $_SESSION['f4E_recientecivil'] = $_POST['recientecivil'];
                                    $_SESSION['f4E_previacivil'] = $_POST['previacivil'];
                                    $_SESSION['f4E_recientepoli'] = $_POST['recientepoli'];
                                    $_SESSION['f4E_previapoli'] = $_POST['previapoli'];
                                    $_SESSION['f4E_previapenal'] = $_POST['previapenal'];
                                    $_SESSION['f4E_idaccesibilidad'] = $_POST['idaccesibilidad'];
                                    $_SESSION['f4E_di_noinfo'] = $_POST['di_noinfo'];
                                    $_SESSION['f4E_de_noinfo'] = $_POST['de_noinfo'];
                                    if($_SESSION['f4E_di_noinfo'] == 1){
                                        $_SESSION['f4E_di_apsico'] = "";
                                        $_SESSION['f4E_di_pjuridico'] = "";
                                        $_SESSION['f4E_di_refugio'] = "";
                                        $_SESSION['f4E_di_grupos'] = "";
                                        $_SESSION['f4E_di_alegal'] = "";
                                        $_SESSION['f4E_di_asocial'] = "";
                                        $_SESSION['f4E_di_otros'] = "";
                                    }else{
                                        $_SESSION['f4E_di_apsico'] = $_POST['di_apsico'];
                                        $_SESSION['f4E_di_pjuridico'] = $_POST['di_pjuridico'];
                                        $_SESSION['f4E_di_refugio'] = $_POST['di_refugio'];
                                        $_SESSION['f4E_di_grupos'] = $_POST['di_grupos'];
                                        $_SESSION['f4E_di_alegal'] = $_POST['di_alegal'];
                                        $_SESSION['f4E_di_asocial'] = $_POST['di_asocial'];
                                        $_SESSION['f4E_di_otros'] = $_POST['di_otros'];
                                    }
                                    if($_SESSION['f4E_de_noinfo'] == 1){
                                        $_SESSION['f4E_de_ofemp'] = "";
                                        $_SESSION['f4E_de_consul'] = "";
                                        $_SESSION['f4E_de_defen'] = "";
                                        $_SESSION['f4E_de_psocial'] = "";
                                        $_SESSION['f4E_de_amujer'] = "";
                                        $_SESSION['f4E_de_otra'] = "";
                                        $_SESSION['f4E_de_comujer'] = "";
                                    }else{
                                        $_SESSION['f4E_de_ofemp'] = $_POST['de_ofemp'];
                                        $_SESSION['f4E_de_consul'] = $_POST['de_consul'];
                                        $_SESSION['f4E_de_defen'] = $_POST['de_defen'];
                                        $_SESSION['f4E_de_psocial'] = $_POST['de_psocial'];
                                        $_SESSION['f4E_de_amujer'] = $_POST['de_amujer'];
                                        $_SESSION['f4E_de_otra'] = $_POST['de_otra'];
                                        $_SESSION['f4E_de_comujer'] = $_POST['de_comujer'];
                                    }
                                    $_SESSION['f4E_ext_cual'] = $_POST['ext_cual'];
                                    if($_SESSION['f4E_idaccesibilidad'] != 3){
                                        $_SESSION['f4E_idcomisaria'] = '';
                                    }else{
                                        $_SESSION['f4E_idcomisaria'] = $_POST['idcomisaria'];
                                    }
                                    $_SESSION['f4E_denuncia'] = $_POST['denuncia'];
                                    $_SESSION['f4E_p_medidas'] = $_POST['p_medidas'];
                                    header("Location: " . URL . "ficha41/editar");
                    }
                    
                }
                
                public function listarSecciones(){
                    $datos = $this->seccion->listar();
                    return $datos;
                }
                
                public function ver($id){
                    $this->ficha4->set("idficha4",$id);
                    $datos = $this->ficha4->verFicha4();
                    return $datos;
                }
                
                
                public function eliminar($id){
                    $this->ficha4->set("idficha4",$id);
                    $this->ficha4->eliminarFicha4();
                    header("Location: " . URL . "ficha4");
                    
                }
                
                
	}
        $ficha4 = new ficha4Controller();
       
?>