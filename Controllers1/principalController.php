<?php namespace Controllers1;

use Models1\Ficha as Ficha;
use Models1\Cautelar as Cautelar;

	class principalController{
            
            private $ficha;
            private $cautelar;
            
            public function __construct() {
                $this->cautelar = new Cautelar();
                $this->ficha = new Ficha();
            }


            public function index(){

            } 
     
            public function buscar(){
                    if($_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        if($_POST['ca_expediente1']){
                              $this->cautelar->set("ca_expediente",$_POST['ca_expediente1']);
                              $datos = $this->cautelar->verCautelar();
                              return $datos;
                        }
                        if($_POST['per_dni1']){
                              $this->ficha->set("per_dni",$_POST['per_dni1']);
                              $datos = $this->ficha->verFicha();
                              return $datos;
                        }
                    }else{
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                            
                        if($_SESSION['idinstitucion'] == 13){
                              $datos = $this->cautelar->verCautelarVigentes();
                              unset($_SESSION['p_per_dni']);
                              unset($_SESSION['p_per_apellido']);
                              unset($_SESSION['p_per_nombre']);
                              unset($_SESSION['idregional']);
                              unset($_SESSION['exp1']);
                              unset($_SESSION['exp2']);
                              unset($_SESSION['exp3']);
                              unset($_SESSION['fec_ingreso']);
                              unset($_SESSION['ca_oficio']);
                              unset($_SESSION['ca_resolucion']);
                              unset($_SESSION['idfiscalia']);                       
                              unset($_SESSION['fec_hecho']);
                              unset($_SESSION['ca_deporigen']);
                              unset($_SESSION['idtipo_medida']);
                              unset($_SESSION['ca_domicilio']);
                              unset($_SESSION['idcomisaria']);
                              unset($_SESSION['ca_plazo']);
                              unset($_SESSION['fec_vencimiento']);
                              unset($_SESSION['ca_observaciones']);
                              unset($_SESSION['idcausa']);
                              unset($_SESSION['per_dni_agresor']);
                              unset($_SESSION['per_apellido_agresor']);
                              unset($_SESSION['per_nombre_agresor']);
                              unset($_SESSION['bandera']);
                              //
                              unset($_SESSION['otrasvict']); 
                              unset($_SESSION['otrosagres']);          
                              return $datos;
                        }           

                                    error_reporting(0);
                                    session_start();
                                    unset($_SESSION['p_per_dni']);
                                    unset($_SESSION['p_per_apellido']);
                                    unset($_SESSION['p_per_nombre']);
                                    unset($_SESSION['p_idgenero']);
                                    unset($_SESSION['p_idestadocivil']);
                                    unset($_SESSION['p_iddepartamento']);
                                    unset($_SESSION['p_idlocalidad']);
                                    unset($_SESSION['p_idsexo']);
                                    unset($_SESSION['p_per_celular']);
                                    unset($_SESSION['p_per_discapacitada']);
                                    unset($_SESSION['p_per_domicilio']);

                                    unset($_SESSION['f41_me_acerca']);
                                    unset($_SESSION['f41_me_perten']);
                                    unset($_SESSION['f41_me_alimen']);
                                    unset($_SESSION['f41_me_exhog']);
                                    unset($_SESSION['f41_me_resper']);
                                    unset($_SESSION['f41_me_visitas']);
                                    unset($_SESSION['f41_me_prohib']);
                                    unset($_SESSION['f41_me_psico']);
                                    unset($_SESSION['f41_me_otra']);
                                    unset($_SESSION['f_idficha']);
                                    unset($_SESSION['f4_recientepenal']);
                                    unset($_SESSION['f4_recientecivil']);
                                    unset($_SESSION['f4_previacivil']);
                                    unset($_SESSION['f4_recientepoli']);
                                    unset($_SESSION['f4_previapoli']);
                                    unset($_SESSION['f4_idaccesibilidad']);
                                    unset($_SESSION['f4_di_noinfo']);
                                    unset($_SESSION['f4_di_apsico']);
                                    unset($_SESSION['f4_di_pjuridico']);
                                    unset($_SESSION['f4_di_refugio']);
                                    unset($_SESSION['f4_di_grupos']);
                                    unset($_SESSION['f4_di_alegal']);
                                    unset($_SESSION['f4_di_asocial']);
                                    unset($_SESSION['f4_di_otros']);
                                    unset($_SESSION['f4_de_noinfo']);
                                    unset($_SESSION['f4_de_ofemp']);
                                    unset($_SESSION['f4_de_consul']);
                                    unset($_SESSION['f4_de_defen']);
                                    unset($_SESSION['f4_de_psocial']);
                                    unset($_SESSION['f4_de_amujer']);
                                    unset($_SESSION['f4_de_otra']);
                                    unset($_SESSION['f4_de_comujer']);
                                    unset($_SESSION['f4_previapenal']);
                                    unset($_SESSION['f4_idcomisaria']);
                                    unset($_SESSION['f4_denuncia']);
                                    unset($_SESSION['f4_p_medidas']);
                                    unset($_SESSION['f_idficha']);
                                    unset($_SESSION['f37_des_hijos']);
                                    unset($_SESSION['f37_des_golpe']);
                                    unset($_SESSION['f37_des_conoc']);
                                    unset($_SESSION['f37_des_infide']);
                                    unset($_SESSION['f37_des_solic']);
                                    unset($_SESSION['f37_des_limite']);
                                    unset($_SESSION['f37_des_legal']);
                                    unset($_SESSION['f37_des_deriv']);
                                    unset($_SESSION['f37_des_miedo']);
                                    unset($_SESSION['f37_des_otro']);
                                    unset($_SESSION['f_idficha']);
                                    unset($_SESSION['f36_t_suenio']);
                                    unset($_SESSION['f36_t_alimen']);
                                    unset($_SESSION['f36_t_digest']);
                                    unset($_SESSION['f36_t_antidep']);
                                    unset($_SESSION['f36_t_aldrog']);
                                    unset($_SESSION['f36_t_its']);
                                    unset($_SESSION['f36_t_otro']);
                                    unset($_SESSION['f35_ind_lesfis']);
                                    unset($_SESSION['f35_ind_intmed']);
                                    unset($_SESSION['f35_ind_amuerte']);
                                    unset($_SESSION['f35_ind_armas']);
                                    unset($_SESSION['f35_ind_aborto']);
                                    unset($_SESSION['f35_ind_idsuic']);
                                    unset($_SESSION['f35_ind_insuic']);
                                    unset($_SESSION['f35_ind_sexfor']);
                                    unset($_SESSION['f35_ind_acoso']);
                                    unset($_SESSION['f35_ind_antpen']);
                                    unset($_SESSION['f35_ind_sust']);
                                    unset($_SESSION['f_idficha']);
                                    unset($_SESSION['f34_he_embar']);
                                    unset($_SESSION['f34_he_celos']);
                                    unset($_SESSION['f34_he_plabor']);
                                    unset($_SESSION['f34_he_alcohol']);
                                    unset($_SESSION['f34_he_autoco']);
                                    unset($_SESSION['f34_he_impco']);
                                    unset($_SESSION['f34_he_separ']);
                                    unset($_SESSION['f34_he_otro']);
                                    unset($_SESSION['f_idficha']);
                                    unset($_SESSION['f33_anag_fisica']);
                                    unset($_SESSION['f33_anag_psico']);
                                    unset($_SESSION['f33_anag_absex']);
                                    unset($_SESSION['f33_anag_tesvio']);
                                    unset($_SESSION['f33_anag_aban']);
                                    unset($_SESSION['f33_anag_otro']);
                                    unset($_SESSION['f_idficha']);
                                    unset($_SESSION['f32_anco_fisica']);
                                    unset($_SESSION['f32_anco_psico']);
                                    unset($_SESSION['f32_anco_absex']);
                                    unset($_SESSION['f32_anco_tesvio']);
                                    unset($_SESSION['f32_anco_aban']);
                                    unset($_SESSION['f32_anco_otro']);
                                    unset($_SESSION['f_idficha']);
                                    unset($_SESSION['f31_v_fisica']);
                                    unset($_SESSION['f31_v_psicologica']);
                                    unset($_SESSION['f31_v_sexual']);
                                    unset($_SESSION['f31_v_parsocial']);
                                    unset($_SESSION['f31_v_simbolica']);
                                    unset($_SESSION['f31_v_economica']);
                                    unset($_SESSION['f31_co_obstaculo']);
                                    unset($_SESSION['f31_co_econo']);
                                    unset($_SESSION['f_idficha']);
                                    unset($_SESSION['f3_embarazada']);
                                    unset($_SESSION['f3_anviagresor']);
                                    unset($_SESSION['f3_anmaltrato']);
                                    unset($_SESSION['f3_idvinculo']);
                                    unset($_SESSION['f3_cohab']);
                                    unset($_SESSION['f3_idriesgo']);
                                    
                                    $filas = 1;
                                    $total_filas = $_SESSION['filas_creadas']; 
                                    for ($i=$filas; $i<=$total_filas; $i++) {
                                        if(isset($_SESSION['f2_f2_apellido'.$i])){


                                            unset($_SESSION['f2_f2_apellido'.$i]);
                                            unset($_SESSION['f2_f2_nombre'.$i]);
                                            unset($_SESSION['f2_idsexo'.$i]);
                                            unset($_SESSION['f2_f2_edad'.$i]);
                                            unset($_SESSION['f2_f2_mes'.$i]); 
                                            unset($_SESSION['f2_idpariente'.$i]);
                                            unset($_SESSION['f2_discapacitado'.$i]);
                                            unset($_SESSION['f2_victimavio'.$i]);
                                            
                                        }
                                    
                                    } 
                                    unset($_SESSION['filas_creadas']);
                                    
                                    unset($_SESSION['f_idficha']);
                                    unset($_SESSION['f1_idremunerada']);
                                    unset($_SESSION['f1_leeono']);
                                    unset($_SESSION['f1_ingreso']);
                                    unset($_SESSION['f1_auh']);
                                    unset($_SESSION['f1_psocial']);
                                    unset($_SESSION['f1_migrante']);
                                    unset($_SESSION['f1_idprocedencia']);
                                    unset($_SESSION['f1_permanencia']);
                                    unset($_SESSION['f1_rs_concurrir']);
                                    unset($_SESSION['f1_rs_institucion']);
                                    unset($_SESSION['f1_rs_vinculos']);
                                    unset($_SESSION['f1_cv_problemas']);
                                    unset($_SESSION['f1_cv_perempleo']);
                                    unset($_SESSION['f1_cv_limitacion']);
                                    unset($_SESSION['f1_cv_perestudio']);
                                    unset($_SESSION['f1_edu_consultante']);
                                    unset($_SESSION['f1_edu_agresor']);
                                    unset($_SESSION['f1_idactividad']);
                                    unset($_SESSION['f_fec_consulta']);
                                    unset($_SESSION['f_horaconsulta']);
                                    unset($_SESSION['f_disponelugar']);
                                    unset($_SESSION['f_idsalud']);
                                    unset($_SESSION['f_idvivienda']);
                                    unset($_SESSION['f_agresor']);
                                    unset($_SESSION['f_fec_agresion']);
                                    unset($_SESSION['f_hora_agresion']);
                                    unset($_SESSION['f_p_menores']);
                                    unset($_SESSION['f_idmomento']);
                                    unset($_SESSION['f_idprofesional']);
                                    
                                    unset($_SESSION['f_idficha']);
                        
                        
                                    unset($_SESSION['f41E_idficha41']);
                                    unset($_SESSION['f41E_me_acerca']);
                                    unset($_SESSION['f41E_me_perten']);
                                    unset($_SESSION['f41E_me_alimen']);
                                    unset($_SESSION['f41E_me_exhog']);
                                    unset($_SESSION['f41E_me_resper']);
                                    unset($_SESSION['f41E_me_visitas']);
                                    unset($_SESSION['f41E_me_prohib']);
                                    unset($_SESSION['f41E_me_psico']);
                                    unset($_SESSION['f41E_me_otra']);
                                    unset($_SESSION['f4E_recientepenal']);
                                    unset($_SESSION['f4E_previapenal']);
                                    unset($_SESSION['f4E_recientecivil']);
                                    unset($_SESSION['f4E_previacivil']);
                                    unset($_SESSION['f4E_recientepoli']);
                                    unset($_SESSION['f4E_previapoli']);
                                    unset($_SESSION['f4E_idaccesibilidad']);
                                    unset($_SESSION['f4E_de_noinfo']);
                                    unset($_SESSION['f4E_de_ofemp']);
                                    unset($_SESSION['f4E_idcomisaria']);
                                    unset($_SESSION['f4E_denuncia']);
                                    unset($_SESSION['f4E_p_medidas']);
                                    unset($_SESSION['f4E_de_consul']);
                                    unset($_SESSION['f4E_de_defen']);
                                    unset($_SESSION['f4E_de_psocial']);
                                    unset($_SESSION['f4E_de_amujer']);
                                    unset($_SESSION['f4E_de_comujer']);
                                    unset($_SESSION['f4E_de_otra']);
                                    unset($_SESSION['f4E_di_noinfo']);
                                    unset($_SESSION['f4E_di_apsico']);
                                    unset($_SESSION['f4E_di_pjuridico']);
                                    unset($_SESSION['f4E_di_refugio']);
                                    unset($_SESSION['f4E_di_grupos']);
                                    unset($_SESSION['f4E_di_alegal']);
                                    unset($_SESSION['f4E_di_asocial']);
                                    unset($_SESSION['f4E_di_otros']);
                                    unset($_SESSION['f37E_idficha37']);
                                    unset($_SESSION['f37E_des_hijos']);
                                    unset($_SESSION['f37E_des_golpe']);
                                    unset($_SESSION['f37E_des_conoc']);
                                    unset($_SESSION['f37E_des_infide']);
                                    unset($_SESSION['f37E_des_solic']);
                                    unset($_SESSION['f37E_des_limite']);
                                    unset($_SESSION['f37E_des_legal']);
                                    unset($_SESSION['f37E_des_deriv']);
                                    unset($_SESSION['f37E_des_miedo']);
                                    unset($_SESSION['f37E_des_otro']);
                                    unset($_SESSION['f36E_idficha36']);
                                    unset($_SESSION['f36E_t_suenio']);
                                    unset($_SESSION['f36E_t_alimen']);
                                    unset($_SESSION['f36E_t_digest']);
                                    unset($_SESSION['f36E_t_antidep']);
                                    unset($_SESSION['f36E_t_aldrog']);
                                    unset($_SESSION['f36E_t_its']);
                                    unset($_SESSION['f36E_t_otro']);
                                    unset($_SESSION['f35E_idficha35']);
                                    unset($_SESSION['f35E_ind_lesfis']);
                                    unset($_SESSION['f35E_ind_intmed']);
                                    unset($_SESSION['f35E_ind_amuerte']);
                                    unset($_SESSION['f35E_ind_armas']);
                                    unset($_SESSION['f35E_ind_aborto']);
                                    unset($_SESSION['f35E_ind_idsuic']);
                                    unset($_SESSION['f35E_ind_insuic']);
                                    unset($_SESSION['f35E_ind_sexfor']);
                                    unset($_SESSION['f35E_ind_acoso']);
                                    unset($_SESSION['f35E_ind_antpen']);
                                    unset($_SESSION['f35E_ind_sust']);
                                    unset($_SESSION['f34E_idficha34']);
                                    unset($_SESSION['f34E_he_embar']);
                                    unset($_SESSION['f34E_he_celos']);
                                    unset($_SESSION['f34E_he_plabor']);
                                    unset($_SESSION['f34E_he_alcohol']);
                                    unset($_SESSION['f34E_he_autoco']);
                                    unset($_SESSION['f34E_he_impco']);
                                    unset($_SESSION['f34E_he_separ']);
                                    unset($_SESSION['f34E_he_otro']);
                                    unset($_SESSION['f33E_idficha33']);
                                    unset($_SESSION['f33E_anag_fisica']);
                                    unset($_SESSION['f33E_anag_psico']);
                                    unset($_SESSION['f33E_anag_absex']);
                                    unset($_SESSION['f33E_anag_tesvio']);
                                    unset($_SESSION['f33E_anag_aban']);
                                    unset($_SESSION['f33E_anag_otro']);
                                    unset($_SESSION['pE_idficha']);
                                    unset($_SESSION['f32E_idficha32']);
                                    unset($_SESSION['f32E_anco_fisica']);
                                    unset($_SESSION['f32E_anco_psico']);
                                    unset($_SESSION['f32E_anco_absex']);
                                    unset($_SESSION['f32E_anco_tesvio']);
                                    unset($_SESSION['f32E_anco_aban']);
                                    unset($_SESSION['f32E_anco_otro']);
                                    unset($_SESSION['f31E_idficha31']);
                                    unset($_SESSION['f31E_v_fisica']);
                                    unset($_SESSION['f31E_v_psicologica']);
                                    unset($_SESSION['f31E_v_sexual']);
                                    unset($_SESSION['f31E_v_parsocial']);
                                    unset($_SESSION['f31E_v_simbolica']);
                                    unset($_SESSION['f31E_v_economica']);
                                    unset($_SESSION['f31E_co_obstaculo']);
                                    unset($_SESSION['f31E_co_econo']);
                                    unset($_SESSION['f3E_idficha3']);
                                    unset($_SESSION['f3E_embarazada']);
                                    unset($_SESSION['f3E_anviagresor']);
                                    unset($_SESSION['f3E_anmaltrato']);
                                    unset($_SESSION['f3E_idvinculo']);
                                    unset($_SESSION['f3E_cohab']);
                                    unset($_SESSION['f3E_idriesgo']);
                                    
                                    $filas1 = 1;
                                    $total_filas1 = $_SESSION['filas_creadasE']; 
                                    for ($i=$filas1; $i<=$total_filas1; $i++) {
                                        if(isset($_SESSION['Ef2_f2_apellido'.$i])){

                                            
                                            unset($_SESSION['Ef2_f2_apellido'.$i]);
                                            unset($_SESSION['Ef2_f2_nombre'.$i]);
                                            unset($_SESSION['Ef2_idsexo'.$i]);
                                            unset($_SESSION['Ef2_f2_edad'.$i]);
                                            unset($_SESSION['Ef2_f2_mes'.$i]); 
                                            unset($_SESSION['Ef2_idpariente'.$i]);
                                            unset($_SESSION['Ef2_discapacitado'.$i]);
                                            unset($_SESSION['Ef2_victimavio'.$i]);
                                            
                                        }
                                    
                                    }
                                    
                                    unset($_SESSION['filas_creadasE']);
                                    unset($_SESSION['filas_creadasEE']);
                                    
                                    
                                    unset($_SESSION['f1E_idremunerada']);
                                    unset($_SESSION['f1E_leeono']);
                                    unset($_SESSION['f1E_ingreso']);
                                    unset($_SESSION['f1E_auh']);
                                    unset($_SESSION['f1E_psocial']);
                                    unset($_SESSION['f1E_migrante']);
                                    unset($_SESSION['f1E_idprocedencia']);
                                    unset($_SESSION['f1E_permanencia']);
                                    unset($_SESSION['f1E_rs_concurrir']);
                                    unset($_SESSION['f1E_rs_institucion']);
                                    unset($_SESSION['f1E_rs_vinculos']);
                                    unset($_SESSION['f1E_cv_problemas']);
                                    unset($_SESSION['f1E_cv_perempleo']);
                                    unset($_SESSION['f1E_cv_limitacion']);
                                    unset($_SESSION['f1E_cv_perestudio']);
                                    unset($_SESSION['f1E_edu_consultante']);
                                    unset($_SESSION['f1E_edu_agresor']);
                                    unset($_SESSION['f1E_idactividad']);
                                    unset($_SESSION['pE_idficha']);
                                    
                                    unset($_SESSION['fE_fec_consulta']);
                                    unset($_SESSION['fE_horaconsulta']);
                                    unset($_SESSION['fE_disponelugar']);
                                    unset($_SESSION['fE_idsalud']);
                                    unset($_SESSION['fE_idvivienda']);
                                    unset($_SESSION['fE_agresor']);
                                    unset($_SESSION['fE_fec_agresion']);
                                    unset($_SESSION['fE_hora_agresion']);
                                    unset($_SESSION['fE_p_menores']);
                                    unset($_SESSION['fE_idmomento']);
                  }
            }   
	}
    $principal = new principalController();
        
?>