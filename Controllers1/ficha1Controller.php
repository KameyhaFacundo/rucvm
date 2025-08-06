<?php namespace Controllers1;

use Models1\Ficha1 as Ficha1;
//use Models\Seccion as Seccion;

	class ficha1Controller{
            
            private $ficha1;
            //private $seccion;
            
            public function __construct() {
                $this->ficha1 = new Ficha1();
                //$this->seccion = new Seccion();
            }   
                
                public function agregar(){
                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        }else{
                                    session_start();
                                    $_SESSION['f1_idficha'] = $_POST['idficha'];
                                    $_SESSION['f1_idremunerada'] = $_POST['idremunerada'];
                                    $_SESSION['f1_leeono'] = $_POST['leeono'];
                                    $_SESSION['f1_ingreso'] = $_POST['ingreso'];
                                    $_SESSION['f1_auh'] = $_POST['auh'];
                                    $_SESSION['f1_psocial'] = $_POST['psocial'];
                                    $_SESSION['f1_migrante'] = $_POST['migrante'];
                                    if($_SESSION['f1_migrante'] != 1){
                                        $_SESSION['f1_idprocedencia'] = "NULL";
                                        $_SESSION['f1_permanencia'] = "NULL";
                                    }else{
                                        $_SESSION['f1_idprocedencia'] = $_POST['idprocedencia'];
                                        $_SESSION['f1_permanencia'] = $_POST['permanencia'];
                                    }
                                    $_SESSION['f1_rs_concurrir'] = $_POST['rs_concurrir'];
                                    $_SESSION['f1_rs_institucion'] = $_POST['rs_institucion'];
                                    $_SESSION['f1_rs_vinculos'] = $_POST['rs_vinculos'];
                                    $_SESSION['f1_cv_problemas'] = $_POST['cv_problemas'];
                                    $_SESSION['f1_cv_perempleo'] = $_POST['cv_perempleo'];
                                    $_SESSION['f1_cv_limitacion'] = $_POST['cv_limitacion'];
                                    $_SESSION['f1_cv_perestudio'] = $_POST['cv_perestudio'];
                                    $_SESSION['f1_edu_consultante'] = $_POST['edu_consultante'];
                                    $_SESSION['f1_edu_agresor'] = $_POST['edu_agresor'];
                                    $_SESSION['f1_idactividad'] = $_POST['idactividad'];                                   
                                    header("Location: " . URL . "ficha2/agregar");

                        }
                }
                
                
                public function  editar(){
                    if(!$_POST){
                        session_start();
                        $this->ficha1->set("idficha",$_SESSION['pE_idficha']);
                        //echo $_SESSION['pE_idficha'];
                        $datos = $this->ficha1->verFicha1();
                        return $datos;
                    }else{
                                    session_start();
                                    
                                    $_SESSION['f1E_leeono'] = $_POST['leeono'];
                                    $_SESSION['f1E_ingreso'] = $_POST['ingreso'];
                                    $_SESSION['f1E_auh'] = $_POST['auh'];
                                    $_SESSION['f1E_psocial'] = $_POST['psocial'];
                                    $_SESSION['f1E_migrante'] = $_POST['migrante'];
                                    if($_SESSION['f1E_migrante'] != 1){
                                        $_SESSION['f1E_idprocedencia'] = "NULL";
                                        $_SESSION['f1E_permanencia'] = "NULL";
                                    }else{
                                        $_SESSION['f1E_idprocedencia'] = $_POST['idprocedencia'];
                                        $_SESSION['f1E_permanencia'] = $_POST['permanencia'];
                                    }
                                    $_SESSION['f1E_rs_concurrir'] = $_POST['rs_concurrir'];
                                    $_SESSION['f1E_rs_institucion'] = $_POST['rs_institucion'];
                                    $_SESSION['f1E_rs_vinculos'] = $_POST['rs_vinculos'];
                                    $_SESSION['f1E_cv_problemas'] = $_POST['cv_problemas'];
                                    $_SESSION['f1E_cv_perempleo'] = $_POST['cv_perempleo'];
                                    $_SESSION['f1E_cv_limitacion'] = $_POST['cv_limitacion'];
                                    $_SESSION['f1E_cv_perestudio'] = $_POST['cv_perestudio'];
                                    $_SESSION['f1E_edu_consultante'] = $_POST['edu_consultante'];
                                    $_SESSION['f1E_edu_agresor'] = $_POST['edu_agresor'];
                                    $_SESSION['f1E_idactividad'] = $_POST['idactividad']; 
                                    if($_POST['idactividad'] != 1){
                                        $_SESSION['f1E_idremunerada'] = "NULL";
                                    }else{
                                        $_SESSION['f1E_idremunerada'] = $_POST['idremunerada'];
                                    }
                                    header("Location: " . URL . "ficha2/editar");
                    }
                    
                }
                
                public function listarSecciones(){
                    $datos = $this->seccion->listar();
                    return $datos;
                }
                
                public function ver($id){
                    $this->ficha1->set("idficha1",$id);
                    $datos = $this->ficha1->verFicha1();
                    return $datos;
                }
                
                
                public function eliminar($id){
                    $this->ficha1->set("idficha1",$id);
                    $this->ficha1->eliminarFicha1();
                    header("Location: " . URL . "ficha1");
                    
                }
                
                
	}
        $ficha1 = new ficha1Controller();
        
?>