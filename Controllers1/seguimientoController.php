<?php namespace Controllers1;

use Models1\Seguimiento as Seguimiento;

	class seguimientoController{
            
            private $seguimiento;

            
            public function __construct() {
                $this->seguimiento = new Seguimiento();
            }


            public function index(){

    		}
                
                
                public function agregar(){
                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        $datos = $this->seguimiento->fechaFicha();
                        return $datos;
                    }else{
                            $this->seguimiento->set('idficha',$_POST['idficha']);   
                            $this->seguimiento->set('seg_fecha',$_POST['seg_fecha']);
                            $this->seguimiento->set('seg_denuncia',$_POST['seg_denuncia']);
                            $this->seguimiento->set('seg_derivacion',$_POST['seg_derivacion']);
                            $this->seguimiento->set('seg_violencia',$_POST['seg_violencia']);
                            $this->seguimiento->set('seg_proteccion',$_POST['seg_proteccion']);
                            $this->seguimiento->set('seg_vioprotec',$_POST['seg_vioprotec']);
                            $this->seguimiento->set('seg_medidas',$_POST['seg_medidas']);
                            $this->seguimiento->set('seg_regcom',$_POST['seg_regcom']);
                            $this->seguimiento->set('seg_regalim',$_POST['seg_regalim']);
                            $this->seguimiento->set('seg_divorcio',$_POST['seg_divorcio']);
                            $this->seguimiento->set('seg_reshijos',$_POST['seg_reshijos']);                                       
                            $this->seguimiento->set('seg_cv',$_POST['seg_cv']);
                            $this->seguimiento->set('seg_trabajo',$_POST['seg_trabajo']);
                            $this->seguimiento->set('seg_habita',$_POST['seg_habita']);
                            $this->seguimiento->set('seg_mobiliario',$_POST['seg_mobiliario']);
                            $this->seguimiento->set('seg_medica',$_POST['seg_medica']);
                            $this->seguimiento->set('seg_vaesc',$_POST['seg_vaesc']);
                            $this->seguimiento->set('seg_tramdni',$_POST['seg_tramdni']);
                            $this->seguimiento->set('seg_pension',$_POST['seg_pension']);
                            $this->seguimiento->set('seg_asisecon',$_POST['seg_asisecon']);
                            $this->seguimiento->set('seg_monto',$_POST['seg_monto']);
                            $this->seguimiento->set('seg_modalim',$_POST['seg_modalim']);
                            $this->seguimiento->set('seg_solhabita',$_POST['seg_solhabita']);
                            $this->seguimiento->set('seg_entmobila',$_POST['seg_entmobila']);
                            $this->seguimiento->set('seg_entmedica',$_POST['seg_entmedica']);
                            $this->seguimiento->set('seg_convaesc',$_POST['seg_convaesc']);
                            $this->seguimiento->set('seg_pasajes',$_POST['seg_pasajes']);
                            $this->seguimiento->set('seg_ppsocial',$_POST['seg_ppsocial']);
                            $this->seguimiento->set('seg_cualpen',$_POST['seg_cualpen']);
                            $this->seguimiento->set('seg_observacion',$_POST['seg_observacion']);
                            $this->seguimiento->agregarSeguimiento();
                            header("Location: ". URL . "principal/buscar/");
                    }
                }
                
                
                public function  editar($idseguimiento){
                    if(!$_POST){
                        $this->seguimiento->set("idseguimiento",$idseguimiento);
                        $datos = $this->seguimiento->verSeguimiento();
                        return $datos;
                    }else{ 
                            $this->seguimiento->set("idseguimiento",$idseguimiento);
                            $this->seguimiento->set('idficha',$_POST['idficha']);
                            $this->seguimiento->set('seg_fecha',$_POST['seg_fecha']);
                            $this->seguimiento->set('seg_denuncia',$_POST['seg_denuncia']);
                            $this->seguimiento->set('seg_derivacion',$_POST['seg_derivacion']);
                            $this->seguimiento->set('seg_violencia',$_POST['seg_violencia']);
                            $this->seguimiento->set('seg_proteccion',$_POST['seg_proteccion']);
                            $this->seguimiento->set('seg_vioprotec',$_POST['seg_vioprotec']);
                            $this->seguimiento->set('seg_medidas',$_POST['seg_medidas']);
                            $this->seguimiento->set('seg_regcom',$_POST['seg_regcom']);
                            $this->seguimiento->set('seg_regalim',$_POST['seg_regalim']);
                            $this->seguimiento->set('seg_divorcio',$_POST['seg_divorcio']);
                            $this->seguimiento->set('seg_reshijos',$_POST['seg_reshijos']);                                       
                            $this->seguimiento->set('seg_cv',$_POST['seg_cv']);
                            $this->seguimiento->set('seg_trabajo',$_POST['seg_trabajo']);
                            $this->seguimiento->set('seg_habita',$_POST['seg_habita']);
                            $this->seguimiento->set('seg_mobiliario',$_POST['seg_mobiliario']);
                            $this->seguimiento->set('seg_medica',$_POST['seg_medica']);
                            $this->seguimiento->set('seg_vaesc',$_POST['seg_vaesc']);
                            $this->seguimiento->set('seg_tramdni',$_POST['seg_tramdni']);
                            $this->seguimiento->set('seg_pension',$_POST['seg_pension']);
                            $this->seguimiento->set('seg_asisecon',$_POST['seg_asisecon']);
                            $this->seguimiento->set('seg_monto',$_POST['seg_monto']);
                            $this->seguimiento->set('seg_modalim',$_POST['seg_modalim']);
                            $this->seguimiento->set('seg_solhabita',$_POST['seg_solhabita']);
                            $this->seguimiento->set('seg_entmobila',$_POST['seg_entmobila']);
                            $this->seguimiento->set('seg_entmedica',$_POST['seg_entmedica']);
                            $this->seguimiento->set('seg_convaesc',$_POST['seg_convaesc']);
                            $this->seguimiento->set('seg_pasajes',$_POST['seg_pasajes']);
                            $this->seguimiento->set('seg_ppsocial',$_POST['seg_ppsocial']);
                            $this->seguimiento->set('seg_cualpen',$_POST['seg_cualpen']);
                            $this->seguimiento->set('seg_observacion',$_POST['seg_observacion']);
                            $this->seguimiento->updateSeguimiento();
                            header("Location: ". URL . "principal/buscar/");
                    }
                }
                
    
                public function ver_seguimiento($idficha){
                    $this->seguimiento->set("idficha",$_GET['idficha']);
                    $datos = $this->seguimiento->verSeguimientos();
                    return $datos;
                }
                
                
                public function eliminar($idseguimiento){
                    $this->seguimiento->set("idseguimiento",$idseguimiento);
                    $this->seguimiento->eliminarSeguimiento();
                    header("Location: " . URL . "principal/buscar");
                    
                }
                
                
	}
    $seguimiento = new SeguimientoController();        
?>