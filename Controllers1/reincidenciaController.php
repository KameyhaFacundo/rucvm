<?php namespace Controllers1;

use Models1\Reincidencia as Reincidencia;
use Models1\Persona as Persona;
use Models1\Ficha as Ficha;
use Models1\Ficha31 as Ficha31;

	class reincidenciaController{
            
            private $reincidencia;
            private $persona;
            private $ficha;
            private $ficha31;

            
            public function __construct() {
                $this->reincidencia = new Reincidencia();
                $this->persona = new Persona();
                $this->ficha = new Ficha();
                $this->ficha31 = new Ficha31();
            }   
                
                public function agregar(){
                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        $datos = $this->reincidencia->traerFichas();
                        return $datos;
                    }else{
                            $this->persona->set('per_dni',$_POST['r_per_dni']);
                            $this->persona->set('per_apellido',$_POST['per_apellido']);
                            $this->persona->set('per_nombre',$_POST['per_nombre']);
                            $this->persona->set('idsexo',$_POST['idsexo']);
                            if($_POST['idsexo'] != 0){
                                $this->persona->set('idgenero',0);    
                            }else{
                                $this->persona->set('idgenero',$_POST['idgenero']);
                            }
                            $this->persona->set('idestadocivil',$_POST['idestadocivil']);
                            $this->persona->set('per_nacido',$_POST['per_nacido']);
                            $this->persona->set('per_edad',$_POST['per_edad']);
                            $this->persona->set('per_celular',$_POST['per_celular']);
                            $this->persona->set('per_domicilio',$_POST['per_domicilio']);
                            $this->persona->set('idlocalidad',$_POST['localidad']);
                            $this->persona->set('iddepartamento',$_POST['departamento']);
                            $this->persona->updatePersonaReincidencia();

                            $this->ficha->set('idficha',$_POST['idficha']);
                            $this->ficha->set('r_idprofesional',$_POST['idprofesional']);
                            $this->ficha->set('r_disponelugar',$_POST['disponelugar']);
                            $this->ficha->set('r_idsalud',$_POST['idsalud']);
                            $this->ficha->set('r_idvivienda',$_POST['idvivienda']);
                            $this->ficha->set('r_fec_agresion',$_POST['fec_agresion']);
                            $this->ficha->set('r_hora_agresion',$_POST['hora_agresion']);
                            $this->ficha->set('r_p_menores',$_POST['p_menores']);
                            $this->ficha->set('r_idmomento',$_POST['idmomento']);
                            $this->ficha->updateFichaReincidencia();

                            $this->ficha31->set('idficha',$_POST['idficha']);
                            $this->ficha31->set("r_v_fisica",$_POST['v_fisica']);
                            $this->ficha31->set("r_v_psicologica",$_POST['v_psicologica']);
                            $this->ficha31->set("r_v_sexual",$_POST['v_sexual']);
                            $this->ficha31->set("r_v_parsocial",$_POST['v_parsocial']);
                            $this->ficha31->set("r_v_simbolica",$_POST['v_simbolica']);
                            $this->ficha31->set("r_v_economica",$_POST['v_economica']);
                            $this->ficha31->set("r_co_obstaculo",$_POST['co_obstaculo']);
                            $this->ficha31->set("r_co_econo",$_POST['co_econo']);
                            $this->ficha31->updateFicha31Reincidencia();


                            $this->reincidencia->set('idficha',$_POST['idficha']);   
                            $this->reincidencia->set('re_fecha',$_POST['re_fecha']);
                            $this->reincidencia->set('re_denuncia',$_POST['re_denuncia']);
                            $this->reincidencia->set('re_horario',$_POST['re_horario']);
                            $this->reincidencia->set('re_donde',$_POST['re_donde']);
                            $this->reincidencia->set('re_porque',$_POST['re_porque']);
                            $this->reincidencia->set('idfiscalia',$_POST['idfiscalia']);
                            $this->reincidencia->set('re_observacion',$_POST['re_observacion']);
                            $this->reincidencia->agregarReincidencia();
                            header("Location: ". URL . "principal/buscar/");
                    }
                }
                
                
                public function  editar($idreincidencia){
                    if(!$_POST){
                        $this->reincidencia->set("idreincidencia",$idreincidencia);
                        $datos = $this->reincidencia->verReincidencia();
                        return $datos;
                    }else{ 

                            $this->persona->set('per_dni',$_POST['r_per_dni']);
                            $this->persona->set('per_apellido',$_POST['per_apellido']);
                            $this->persona->set('per_nombre',$_POST['per_nombre']);
                            $this->persona->set('idsexo',$_POST['idsexo']);
                            if($_POST['idsexo'] != 0){
                                $this->persona->set('idgenero',0);    
                            }else{
                                $this->persona->set('idgenero',$_POST['idgenero']);
                            }
                            $this->persona->set('idestadocivil',$_POST['idestadocivil']);
                            $this->persona->set('per_nacido',$_POST['per_nacido']);
                            $this->persona->set('per_edad',$_POST['per_edad']);
                            $this->persona->set('per_celular',$_POST['per_celular']);
                            $this->persona->set('per_domicilio',$_POST['per_domicilio']);
                            $this->persona->set('idlocalidad',$_POST['localidad']);
                            $this->persona->set('iddepartamento',$_POST['departamento']);
                            //$edad = $this->persona->busca_edad($_POST['per_nacido']);
                            //$this->persona->set('per_edad',$edad);
                            $this->persona->updatePersonaReincidencia();

                            $this->ficha->set('idficha',$_POST['idficha']);
                            $this->ficha->set('r_idprofesional',$_POST['idprofesional']);
                            $this->ficha->set('r_disponelugar',$_POST['r_disponelugar']);
                            $this->ficha->set('r_idsalud',$_POST['r_idsalud']);
                            $this->ficha->set('r_idvivienda',$_POST['r_idvivienda']);
                            $this->ficha->set('r_fec_agresion',$_POST['r_fec_agresion']);
                            $this->ficha->set('r_hora_agresion',$_POST['r_hora_agresion']);
                            $this->ficha->set('r_p_menores',$_POST['r_p_menores']);
                            $this->ficha->set('r_idmomento',$_POST['r_idmomento']);
                            $this->ficha->updateFichaReincidencia();

                            $this->ficha31->set('idficha',$_POST['idficha']);
                            $this->ficha31->set("r_v_fisica",$_POST['r_v_fisica']);
                            $this->ficha31->set("r_v_psicologica",$_POST['r_v_psicologica']);
                            $this->ficha31->set("r_v_sexual",$_POST['r_v_sexual']);
                            $this->ficha31->set("r_v_parsocial",$_POST['r_v_parsocial']);
                            $this->ficha31->set("r_v_simbolica",$_POST['r_v_simbolica']);
                            $this->ficha31->set("r_v_economica",$_POST['r_v_economica']);
                            $this->ficha31->set("r_co_obstaculo",$_POST['r_co_obstaculo']);
                            $this->ficha31->set("r_co_econo",$_POST['r_co_econo']);
                            $this->ficha31->updateFicha31Reincidencia();

                            $this->reincidencia->set('idreincidencia',$_POST['idreincidencia']);   
                            $this->reincidencia->set('idficha',$_POST['idficha']);   
                            $this->reincidencia->set('re_fecha',$_POST['re_fecha']);
                            $this->reincidencia->set('re_denuncia',$_POST['re_denuncia']);
                            $this->reincidencia->set('re_horario',$_POST['re_horario']);
                            $this->reincidencia->set('re_donde',$_POST['re_donde']);
                            $this->reincidencia->set('re_porque',$_POST['re_porque']);
                            $this->reincidencia->set('idfiscalia',$_POST['idfiscalia']);
                            $this->reincidencia->set('re_observacion',$_POST['re_observacion']);
                            $this->reincidencia->updateReincidencia();
                            header("Location: ". URL . "principal/buscar/");
                    }
                }
                
    
                public function ver_reincidencia(){
                    $datos = $this->reincidencia->verReincidencias();
                    return $datos;
                }
                
                
                public function eliminar($idreincidencia){
                    $this->reincidencia->set("idreincidencia",$idreincidencia);
                    $this->reincidencia->eliminarReincidencia();
                    header("Location: " . URL . "principal/buscar");
                    
                }
                
                
	}
    $reincidencia = new ReincidenciaController();        
?>