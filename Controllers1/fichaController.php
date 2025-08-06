<?php namespace Controllers1;

use Models1\Ficha as Ficha;
//use Models\Seccion as Seccion;

	class fichaController{
            
            private $ficha;
            //private $seccion;
            
            public function __construct() {
                $this->ficha = new Ficha();
                //$this->seccion = new Seccion();
            }
  
                public function agregar(){
                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        $datos = $this->ficha->listarProfesional();
                        return $datos;
                        }else{      
                                    session_start();
                                    //echo "hola";
                                    //$_SESSION['test2']= $_POST['fec_consulta'];
                                    /*foreach ($_POST as $clave => $valor) {
                                    $_SESSION['sesionficha'][$clave] = $valor;
                                    }*/
                                    $_SESSION['f_idprofesional'] = $_POST['idprofesional'];
                                    $_SESSION['f_fec_consulta'] = $_POST['fec_consulta'];
                                    $_SESSION['f_horaconsulta'] = $_POST['horaconsulta'];
                                    $_SESSION['f_disponelugar'] = $_POST['disponelugar'];
                                    $_SESSION['f_idsalud'] = $_POST['idsalud'];
                                    $_SESSION['f_idvivienda'] = $_POST['idvivienda'];
                                    $_SESSION['f_agresor'] = ucwords(strtolower(trim($_POST['agresor'])));
                                    $_SESSION['f_fec_agresion'] = $_POST['fec_agresion'];
                                    $_SESSION['f_hora_agresion'] = $_POST['hora_agresion'];
                                    $_SESSION['f_p_menores'] = $_POST['p_menores'];
                                    $_SESSION['f_idmomento'] = $_POST['idmomento'];
                                    $_SESSION['f_idprofesional'] = $_POST['profesional'];
                                    
                                    
                                    header("Location: " . URL . "ficha1/agregar");
                                   /* echo '<b>Datos form1</b>';
                                    $sesionficha=$_SESSION['sesionficha'];
                                    print_r($sesionficha);
                                    echo '<pre>';*/
                                    //$this->ficha->set("fec_consulta",$_POST['fec_consulta']);
                                    //$this->ficha->set("horaconsulta",$_POST['horaconsulta']);
                                    //$this->ficha->set("agresor",$_POST['agresor']);
                                    //$this->ficha->set($_POST['id_seccion']);
                                    //$this->ficha->agregarFicha();

                        }
                }
                
                
                public function  editar(){
                    if(!$_POST){
                        session_start();
                        $this->ficha->set("idficha",$_SESSION['pE_idficha']);
                        $datos = $this->ficha->verFichaNueva();
                        return $datos;
                    }else{
                        session_start();
                                    $_SESSION['fE_idprofesional'] = $_POST['idprofesional'];
                                    $_SESSION['fE_fec_consulta'] = $_POST['fec_consulta'];
                                    $_SESSION['fE_horaconsulta'] = $_POST['horaconsulta'];
                                    $_SESSION['fE_disponelugar'] = $_POST['disponelugar'];
                                    $_SESSION['fE_idsalud'] = $_POST['idsalud'];
                                    $_SESSION['fE_idvivienda'] = $_POST['idvivienda'];
                                    $_SESSION['fE_agresor'] = ucwords(strtolower(trim($_POST['agresor'])));
                                    $_SESSION['fE_fec_agresion'] = $_POST['fec_agresion'];
                                    $_SESSION['fE_hora_agresion'] = $_POST['hora_agresion'];
                                    $_SESSION['fE_p_menores'] = $_POST['p_menores'];
                                    $_SESSION['fE_idmomento'] = $_POST['idmomento'];
                                    $_SESSION['fE_idprofesional'] = $_POST['idprofesional'];
                                    header("Location: " . URL . "ficha1/editar");
                    }
                }

                public function detalles($id){
                    session_start();
                    $_SESSION['idfichaDetalles'] = $id;
                    $this->ficha->set("idficha",$id);
                    $this->ficha->set("idinstitucion",$_SESSION['idinstitucion']);
                    $datos = $this->ficha->verTodasLasFichas();
                    //$datos1 = $this->ficha->verTodasLasFichasSin2();
                    //$datos = $this->ficha->verTodasLasFichasCon2();
                     return $datos; 
                }
                
                public function descargarpdf($id){
                    $this->ficha->set("idficha",$id);
                    $this->ficha->set("idinstitucion",$_SESSION['idinstitucion']);
                    $datos = $this->ficha->verTodasLasFichas();
                    //$datos1 = $this->ficha->verTodasLasFichasSin2();
                    //$datos = $this->ficha->verTodasLasFichasCon2();
                    return $datos; 
                    
                }



                
                public function listarSecciones(){
                    $datos = $this->seccion->listar();
                    return $datos;
                }
                
                public function ver($id){
                    $this->ficha->setId($id);
                    $datos = $this->ficha->verFicha();
                    return $datos;
                }
                
                
                public function eliminar($id){
                    $this->ficha->set("idficha",$id);
                    $this->ficha->eliminarFicha();
                    header("Location: " . URL . 'principal/buscar/');
                    
                    
                }
                
                
	}
        $ficha = new fichaController();
        
?>