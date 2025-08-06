<?php namespace Controllers1;

use Models1\Ficha41 as Ficha41;
use Models1\Persona as Persona;
use Models1\Ficha as Ficha;
use Models1\Ficha1 as Ficha1;
use Models1\Ficha2 as Ficha2;
use Models1\Ficha3 as Ficha3;
use Models1\Ficha31 as Ficha31;
use Models1\Ficha32 as Ficha32;
use Models1\Ficha33 as Ficha33;
use Models1\Ficha34 as Ficha34;
use Models1\Ficha35 as Ficha35;
use Models1\Ficha36 as Ficha36;
use Models1\Ficha37 as Ficha37;
use Models1\Ficha4 as Ficha4;

//use Models\Seccion as Seccion;

	class ficha41Controller{
            
            private $persona;
            private $ficha;
            private $ficha1;
            private $ficha2;
            private $ficha3;
            private $ficha31;
            private $ficha32;
            private $ficha33;
            private $ficha34;
            private $ficha35;
            private $ficha36;
            private $ficha37;
            private $ficha4;
            private $ficha41;
            //private $seccion;
            
            public function __construct() {
                $this->persona = new Persona();
                $this->ficha = new Ficha();
                $this->ficha1 = new Ficha1();
                $this->ficha2 = new Ficha2();
                $this->ficha3 = new Ficha3();
                $this->ficha31 = new Ficha31();
                $this->ficha32 = new Ficha32();
                $this->ficha33 = new Ficha33();
                $this->ficha34 = new Ficha34();
                $this->ficha35 = new Ficha35();
                $this->ficha36 = new Ficha36();
                $this->ficha37 = new Ficha37();
                $this->ficha4 = new Ficha4();
                $this->ficha41 = new Ficha41();
                //$this->seccion = new Seccion();
            }
                
                
                public function agregar(){
                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        }else{

                                    echo '<div id="loader">
                                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                                    </div>';

                                    session_start();
                                    $_SESSION['f41_me_acerca'] = $_POST['me_acerca'];
                                    $_SESSION['f41_me_perten'] = $_POST['me_perten'];
                                    $_SESSION['f41_me_alimen'] = $_POST['me_alimen'];
                                    $_SESSION['f41_me_exhog'] = $_POST['me_exhog'];
                                    $_SESSION['f41_me_resper'] = $_POST['me_resper'];
                                    $_SESSION['f41_me_visitas'] = $_POST['me_visitas'];
                                    $_SESSION['f41_me_prohib'] = $_POST['me_prohib'];
                                    $_SESSION['f41_me_psico'] = $_POST['me_psico'];
                                    $_SESSION['f41_me_otra'] = trim($_POST['me_otra']);
                                    $_SESSION['f41_me_dual'] = $_POST['me_dual'];
                                    $_SESSION['f41_me_prisionprev'] = $_POST['me_prisionprev'];
                                    
                                   
                                    $this->persona->set('per_dni',$_SESSION['p_per_dni']);
                                    $cantFilasP = $this->persona->cantFilaPersona();
                                    
                                    $_SESSION['p_per_edad'] = $this->persona->busca_edad($_SESSION['p_per_nacido']);
                                    
                                    if($cantFilasP == 0){
                                    $this->persona->set('per_dni',$_SESSION['p_per_dni']);
                                    $this->persona->set('per_apellido',$_SESSION['p_per_apellido']);
                                    $this->persona->set('per_nombre',$_SESSION['p_per_nombre']);
                                    $this->persona->set('idsexo',$_SESSION['p_idsexo']);
                                    $this->persona->set('idgenero',$_SESSION['p_idgenero']);
                                    $this->persona->set('idestadocivil',$_SESSION['p_idestadocivil']);
                                    $this->persona->set('per_nacido',$_SESSION['p_per_nacido']);
                                    $this->persona->set('per_edad',$_SESSION['p_per_edad']);
                                    $this->persona->set('per_celular',$_SESSION['p_per_celular']);
                                    $this->persona->set('per_discapacitada',$_SESSION['p_per_discapacitada']);
                                    $this->persona->set('per_domicilio',$_SESSION['p_per_domicilio']);
                                    $this->persona->set('idlocalidad',$_SESSION['p_idlocalidad']);
                                    $this->persona->set('iddepartamento',$_SESSION['p_iddepartamento']);
                                    $this->persona->agregarPersona();
                                    }else{
                                    $this->persona->set('per_dni',$_SESSION['p_per_dni']);
                                    $this->persona->set('per_apellido',$_SESSION['p_per_apellido']);
                                    $this->persona->set('per_nombre',$_SESSION['p_per_nombre']);
                                    $this->persona->set('idsexo',$_SESSION['p_idsexo']);
                                    $this->persona->set('idgenero',$_SESSION['p_idgenero']);
                                    $this->persona->set('idestadocivil',$_SESSION['p_idestadocivil']);
                                    $this->persona->set('per_nacido',$_SESSION['p_per_nacido']);
                                    $this->persona->set('per_celular',$_SESSION['p_per_celular']);
                                    $this->persona->set("per_discapacitada",$_SESSION['p_per_discapacitada']);
                                    $this->persona->set('per_domicilio',$_SESSION['p_per_domicilio']);
                                    $this->persona->set('idlocalidad',$_SESSION['p_idlocalidad']);
                                    $this->persona->set('iddepartamento',$_SESSION['p_iddepartamento']);
                                    $this->persona->updatePersona();
                                    }
                                    
                                    //$this->ficha1->set("idficha",1);
                                    //$this->ficha->set("idremunerada",$_SESSION['f_idremunerada']);
                                    $_SESSION['f_idficha'] = date("YmdHis");
                                    $this->ficha->set('idficha',$_SESSION['f_idficha']);
                                    $this->ficha->set('idprofesional',$_SESSION['f_idprofesional']);
                                    $this->ficha->set('per_dni',$_SESSION['p_per_dni']);
                                    $this->ficha->set('fec_consulta',$_SESSION['f_fec_consulta']);
                                    $this->ficha->set('horaconsulta',$_SESSION['f_horaconsulta']);
                                    $this->ficha->set('disponelugar',$_SESSION['f_disponelugar']);
                                    $this->ficha->set('idsalud',$_SESSION['f_idsalud']);
                                    $this->ficha->set('idvivienda',$_SESSION['f_idvivienda']);
                                    $this->ficha->set('agresor',$_SESSION['f_agresor']);
                                    $this->ficha->set('fec_agresion',$_SESSION['f_fec_agresion']);
                                    $this->ficha->set('hora_agresion',$_SESSION['f_hora_agresion']);
                                    $this->ficha->set('p_menores',$_SESSION['f_p_menores']);
                                    $this->ficha->set('idmomento',$_SESSION['f_idmomento']);
                                    $this->ficha->set('idusuario',$_SESSION['idusuario']);
                                    $this->ficha->agregarFicha();
                                    //$datosf = $this->ficha->verUltimoIdFicha();
                                    //$_SESSION['f_idficha']=$datosf['max'];
                                    $this->ficha1->set("idficha",$_SESSION['f_idficha']);
                                    $this->ficha1->set("idremunerada",$_SESSION['f1_idremunerada']);
                                    $this->ficha1->set("leeono",$_SESSION['f1_leeono']);
                                    $this->ficha1->set("ingreso",$_SESSION['f1_ingreso']);
                                    $this->ficha1->set("auh",$_SESSION['f1_auh']);
                                    $this->ficha1->set("psocial",$_SESSION['f1_psocial']);
                                    $this->ficha1->set("migrante",$_SESSION['f1_migrante']);
                                    $this->ficha1->set("idprocedencia",$_SESSION['f1_idprocedencia']);
                                    $this->ficha1->set("permanencia",$_SESSION['f1_permanencia']);
                                    $this->ficha1->set("rs_concurrir",$_SESSION['f1_rs_concurrir']);
                                    $this->ficha1->set("rs_institucion",$_SESSION['f1_rs_institucion']);
                                    $this->ficha1->set("rs_vinculos",$_SESSION['f1_rs_vinculos']);
                                    $this->ficha1->set("cv_problemas",$_SESSION['f1_cv_problemas']);
                                    $this->ficha1->set("cv_perempleo",$_SESSION['f1_cv_perempleo']);
                                    $this->ficha1->set("cv_limitacion",$_SESSION['f1_cv_limitacion']);
                                    $this->ficha1->set("cv_perestudio",$_SESSION['f1_cv_perestudio']);
                                    $this->ficha1->set("edu_consultante",$_SESSION['f1_edu_consultante']);
                                    $this->ficha1->set("edu_agresor",$_SESSION['f1_edu_agresor']);
                                    $this->ficha1->set("idactividad",$_SESSION['f1_idactividad']);
                                    $this->ficha1->agregarFicha1();
                                    
                                    $filas = 1;
                                    $total_filas = $_SESSION['filas_creadas'];

                                    for ($i=$filas; $i<=$total_filas; $i++) {
                                        if(isset($_SESSION['f2_f2_apellido'.$i]) && isset($_SESSION['f2_f2_nombre'.$i])){
                                            $this->ficha2->set("idficha",$_SESSION['f_idficha']);
                                            $this->ficha2->set("f2_apellido",$_SESSION['f2_f2_apellido'.$i]);
                                            $this->ficha2->set("f2_nombre",$_SESSION['f2_f2_nombre'.$i]);
                                            $this->ficha2->set("idsexo",$_SESSION['f2_idsexo'.$i]);
                                            $this->ficha2->set("f2_edad",$_SESSION['f2_f2_edad'.$i]);
                                            $this->ficha2->set("f2_mes",$_SESSION['f2_f2_mes'.$i]); 
                                            $this->ficha2->set("idpariente",$_SESSION['f2_idpariente'.$i]);
                                            $this->ficha2->set("discapacitado",$_SESSION['f2_discapacitado'.$i]);
                                            $this->ficha2->set("victimavio",$_SESSION['f2_victimavio'.$i]);
                                            $this->ficha2->agregarFicha2();
                                        }                                    
                                    }
                                    
                                    
                                    $this->ficha3->set("idficha",$_SESSION['f_idficha']);
                                    $this->ficha3->set("embarazada",$_SESSION['f3_embarazada']);
                                    $this->ficha3->set("anviagresor",$_SESSION['f3_anviagresor']);
                                    $this->ficha3->set("anmaltrato",$_SESSION['f3_anmaltrato']);
                                    $this->ficha3->set("idvinculo",$_SESSION['f3_idvinculo']);
                                    $this->ficha3->set("cohab",$_SESSION['f3_cohab']);
                                    $this->ficha3->set("idriesgo",$_SESSION['f3_idriesgo']);
                                    $this->ficha3->agregarFicha3();
                                    $this->ficha31->set("idficha",$_SESSION['f_idficha']);
                                    $this->ficha31->set("v_fisica",$_SESSION['f31_v_fisica']);
                                    $this->ficha31->set("v_psicologica",$_SESSION['f31_v_psicologica']);
                                    $this->ficha31->set("v_sexual",$_SESSION['f31_v_sexual']);
                                    $this->ficha31->set("v_parsocial",$_SESSION['f31_v_parsocial']);
                                    $this->ficha31->set("v_simbolica",$_SESSION['f31_v_simbolica']);
                                    $this->ficha31->set("v_economica",$_SESSION['f31_v_economica']);
                                    $this->ficha31->set("co_obstaculo",$_SESSION['f31_co_obstaculo']);
                                    $this->ficha31->set("co_econo",$_SESSION['f31_co_econo']);
                                    $this->ficha31->agregarFicha31();
                                    $this->ficha32->set("idficha",$_SESSION['f_idficha']);
                                    $this->ficha32->set("anco_fisica",$_SESSION['f32_anco_fisica']);
                                    $this->ficha32->set("anco_psico",$_SESSION['f32_anco_psico']);
                                    $this->ficha32->set("anco_absex",$_SESSION['f32_anco_absex']);
                                    $this->ficha32->set("anco_tesvio",$_SESSION['f32_anco_tesvio']);
                                    $this->ficha32->set("anco_aban",$_SESSION['f32_anco_aban']);
                                    $this->ficha32->set("anco_otro",$_SESSION['f32_anco_otro']);
                                    $this->ficha32->agregarFicha32(); 
                                    $this->ficha33->set("idficha",$_SESSION['f_idficha']);
                                    $this->ficha33->set("anag_fisica",$_SESSION['f33_anag_fisica']);
                                    $this->ficha33->set("anag_psico",$_SESSION['f33_anag_psico']);
                                    $this->ficha33->set("anag_absex",$_SESSION['f33_anag_absex']);
                                    $this->ficha33->set("anag_tesvio",$_SESSION['f33_anag_tesvio']);
                                    $this->ficha33->set("anag_aban",$_SESSION['f33_anag_aban']);
                                    $this->ficha33->set("anag_otro",$_SESSION['f33_anag_otro']);
                                    $this->ficha33->agregarFicha33(); 
                                    $this->ficha34->set("idficha",$_SESSION['f_idficha']);
                                    $this->ficha34->set("he_embar",$_SESSION['f34_he_embar']);
                                    $this->ficha34->set("he_celos",$_SESSION['f34_he_celos']);
                                    $this->ficha34->set("he_plabor",$_SESSION['f34_he_plabor']);
                                    $this->ficha34->set("he_alcohol",$_SESSION['f34_he_alcohol']);
                                    $this->ficha34->set("he_autoco",$_SESSION['f34_he_autoco']);
                                    $this->ficha34->set("he_impco",$_SESSION['f34_he_impco']);
                                    $this->ficha34->set("he_separ",$_SESSION['f34_he_separ']);
                                    $this->ficha34->set("he_otro",$_SESSION['f34_he_otro']);
                                    $this->ficha34->agregarFicha34();
                                    $this->ficha35->set("idficha",$_SESSION['f_idficha']);
                                    $this->ficha35->set("ind_lesfis",$_SESSION['f35_ind_lesfis']);
                                    $this->ficha35->set("ind_intmed",$_SESSION['f35_ind_intmed']);
                                    $this->ficha35->set("ind_amuerte",$_SESSION['f35_ind_amuerte']);
                                    $this->ficha35->set("ind_armas",$_SESSION['f35_ind_armas']);
                                    $this->ficha35->set("ind_aborto",$_SESSION['f35_ind_aborto']);
                                    $this->ficha35->set("ind_idsuic",$_SESSION['f35_ind_idsuic']);
                                    $this->ficha35->set("ind_insuic",$_SESSION['f35_ind_insuic']);
                                    $this->ficha35->set("ind_sexfor",$_SESSION['f35_ind_sexfor']);
                                    $this->ficha35->set("ind_acoso",$_SESSION['f35_ind_acoso']);
                                    $this->ficha35->set("ind_antpen",$_SESSION['f35_ind_antpen']);
                                    $this->ficha35->set("ind_sust",$_SESSION['f35_ind_sust']);
                                    $this->ficha35->agregarFicha35();
                                    $this->ficha36->set("idficha",$_SESSION['f_idficha']);
                                    $this->ficha36->set("t_suenio",$_SESSION['f36_t_suenio']);
                                    $this->ficha36->set("t_alimen",$_SESSION['f36_t_alimen']);
                                    $this->ficha36->set("t_digest",$_SESSION['f36_t_digest']);
                                    $this->ficha36->set("t_antidep",$_SESSION['f36_t_antidep']);
                                    $this->ficha36->set("t_aldrog",$_SESSION['f36_t_aldrog']);
                                    $this->ficha36->set("t_its",$_SESSION['f36_t_its']);
                                    $this->ficha36->set("t_otro",$_SESSION['f36_t_otro']);
                                    $this->ficha36->agregarFicha36();
                                    $this->ficha37->set("idficha",$_SESSION['f_idficha']);
                                    $this->ficha37->set("des_hijos",$_SESSION['f37_des_hijos']);
                                    $this->ficha37->set("des_golpe",$_SESSION['f37_des_golpe']);
                                    $this->ficha37->set("des_conoc",$_SESSION['f37_des_conoc']);
                                    $this->ficha37->set("des_infide",$_SESSION['f37_des_infide']);
                                    $this->ficha37->set("des_solic",$_SESSION['f37_des_solic']);
                                    $this->ficha37->set("des_limite",$_SESSION['f37_des_limite']);
                                    $this->ficha37->set("des_legal",$_SESSION['f37_des_legal']);
                                    $this->ficha37->set("des_deriv",$_SESSION['f37_des_deriv']);
                                    $this->ficha37->set("des_miedo",$_SESSION['f37_des_miedo']);
                                    $this->ficha37->set("des_otro",$_SESSION['f37_des_otro']);
                                    $this->ficha37->agregarFicha37();
                                    $this->ficha4->set("idficha",$_SESSION['f_idficha']);
                                    $this->ficha4->set("recientepenal",$_SESSION['f4_recientepenal']);
                                    $this->ficha4->set("recientecivil",$_SESSION['f4_recientecivil']);
                                    $this->ficha4->set("previacivil",$_SESSION['f4_previacivil']);
                                    $this->ficha4->set("recientepoli",$_SESSION['f4_recientepoli']);
                                    $this->ficha4->set("previapoli",$_SESSION['f4_previapoli']);
                                    $this->ficha4->set("idaccesibilidad",$_SESSION['f4_idaccesibilidad']);
                                    $this->ficha4->set("di_noinfo",$_SESSION['f4_di_noinfo']);
                                    $this->ficha4->set("di_apsico",$_SESSION['f4_di_apsico']);
                                    $this->ficha4->set("di_pjuridico",$_SESSION['f4_di_pjuridico']);
                                    $this->ficha4->set("di_refugio",$_SESSION['f4_di_refugio']);
                                    $this->ficha4->set("di_grupos",$_SESSION['f4_di_grupos']);
                                    $this->ficha4->set("di_alegal",$_SESSION['f4_di_alegal']);
                                    $this->ficha4->set("di_asocial",$_SESSION['f4_di_asocial']);
                                    $this->ficha4->set("di_otros",$_SESSION['f4_di_otros']);
                                    $this->ficha4->set("de_noinfo",$_SESSION['f4_de_noinfo']);
                                    $this->ficha4->set("de_ofemp",$_SESSION['f4_de_ofemp']);
                                    $this->ficha4->set("de_consul",$_SESSION['f4_de_consul']);
                                    $this->ficha4->set("de_defen",$_SESSION['f4_de_defen']);
                                    $this->ficha4->set("de_psocial",$_SESSION['f4_de_psocial']);
                                    $this->ficha4->set("de_amujer",$_SESSION['f4_de_amujer']);
                                    $this->ficha4->set("de_otra",$_SESSION['f4_de_otra']);
                                    $this->ficha4->set("de_comujer",$_SESSION['f4_de_comujer']);
                                    $this->ficha4->set("previapenal",$_SESSION['f4_previapenal']);
                                    $this->ficha4->set("idcomisaria",$_SESSION['f4_idcomisaria']);
                                    $this->ficha4->set("denuncia",$_SESSION['f4_denuncia']);
                                    $this->ficha4->set("p_medidas",$_SESSION['f4_p_medidas']);
                                    $this->ficha4->agregarFicha4();
                                    $this->ficha41->set("idficha",$_SESSION['f_idficha']);
                                    $this->ficha41->set("me_acerca",$_SESSION['f41_me_acerca']);
                                    $this->ficha41->set("me_perten",$_SESSION['f41_me_perten']);
                                    $this->ficha41->set("me_alimen",$_SESSION['f41_me_alimen']);
                                    $this->ficha41->set("me_exhog",$_SESSION['f41_me_exhog']);
                                    $this->ficha41->set("me_resper",$_SESSION['f41_me_resper']);
                                    $this->ficha41->set("me_visitas",$_SESSION['f41_me_visitas']);
                                    $this->ficha41->set("me_prohib",$_SESSION['f41_me_prohib']);
                                    $this->ficha41->set("me_psico",$_SESSION['f41_me_psico']);
                                    $this->ficha41->set("me_otra",$_SESSION['f41_me_otra']);
                                    $this->ficha41->set("me_dual",$_SESSION['f41_me_dual']);
                                    $this->ficha41->set("me_prisionprev",$_SESSION['f41_me_prisionprev']);
                                    $this->ficha41->agregarFicha41();
                                    
                                    //comente esto xq no agregaba ninguna ficha, asi no las libere a las variables de sesion y no tenga que cargar de nuevo y que no redireccione para ver que error de base de datos sale
                                    unset($_SESSION['f41_me_acerca']);
                                    unset($_SESSION['f41_me_perten']);
                                    unset($_SESSION['f41_me_alimen']);
                                    unset($_SESSION['f41_me_exhog']);
                                    unset($_SESSION['f41_me_resper']);
                                    unset($_SESSION['f41_me_visitas']);
                                    unset($_SESSION['f41_me_prohib']);
                                    unset($_SESSION['f41_me_psico']);
                                    unset($_SESSION['f41_me_otra']);
                                    unset($_SESSION['f41_me_dual']);
                                    unset($_SESSION['f41_me_prisionprev']);
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
                                    unset($_SESSION['count_click']);
                                    
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
                                    
                                    unset($_SESSION['p_per_apellido']);
                                    unset($_SESSION['p_per_nombre']);
                                    unset($_SESSION['p_idsexo']);
                                    unset($_SESSION['p_idgenero']);
                                    unset($_SESSION['p_idestadocivil']);
                                    unset($_SESSION['p_per_nacido']);
                                    unset($_SESSION['p_per_celular']);
                                    unset($_SESSION['p_per_discapacitada']);
                                    unset($_SESSION['p_per_domicilio']);
                                    unset($_SESSION['p_idlocalidad']);
                                    unset($_SESSION['p_iddepartamento']);

                                    header("Location: " . URL."principal/buscar/");
                        }
                }
                
                
                public function  editar(){
                    if(!$_POST){
                        session_start();
                        $this->ficha41->set("idficha",$_SESSION['pE_idficha']);
                        $datos = $this->ficha41->verFicha41();
                        return $datos;
                    }else{
                                    echo '<div id="loader">
                                        <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                                    </div>';
                                    session_start();
                                    $this->persona->set("per_dni",$_SESSION['pE_per_dni']);
                                    $this->persona->set("per_apellido",$_SESSION['pE_per_apellido']);
                                    $this->persona->set("per_nombre",$_SESSION['pE_per_nombre']);
                                    $this->persona->set("idsexo",$_SESSION['pE_idsexo']);
                                    $this->persona->set("idgenero",$_SESSION['pE_idgenero']);
                                    $this->persona->set("idestadocivil",$_SESSION['pE_idestadocivil']);
                                    $this->persona->set("per_nacido",$_SESSION['pE_per_nacido']);
                                    $this->persona->set("per_celular",$_SESSION['pE_per_celular']);
                                    $this->persona->set("per_discapacitada",$_SESSION['pE_per_discapacitada']);
                                    $this->persona->set("per_domicilio",$_SESSION['pE_per_domicilio']);
                                    $this->persona->set("iddepartamento",$_SESSION['pE_iddepartamento']);
                                    $this->persona->set("idlocalidad",$_SESSION['pE_idlocalidad']);
                                    $this->persona->updatePersona();
                                    $this->ficha->set("idficha",$_SESSION['pE_idficha']);
                                    $this->ficha->set('idprofesional',$_SESSION['fE_idprofesional']);
                                    $this->ficha->set('fec_consulta',$_SESSION['fE_fec_consulta']);
                                    $this->ficha->set('horaconsulta',$_SESSION['fE_horaconsulta']);
                                    $this->ficha->set('disponelugar',$_SESSION['fE_disponelugar']);
                                    $this->ficha->set('idsalud',$_SESSION['fE_idsalud']);
                                    $this->ficha->set('idvivienda',$_SESSION['fE_idvivienda']);
                                    $this->ficha->set('agresor',$_SESSION['fE_agresor']);
                                    $this->ficha->set('fec_agresion',$_SESSION['fE_fec_agresion']);
                                    $this->ficha->set('hora_agresion',$_SESSION['fE_hora_agresion']);
                                    $this->ficha->set('p_menores',$_SESSION['fE_p_menores']);
                                    $this->ficha->set('idmomento',$_SESSION['fE_idmomento']);
                                    $this->ficha->updateFicha();
                                    $this->ficha1->set("idficha",$_SESSION['pE_idficha']);
                                    $this->ficha1->set("idremunerada",$_SESSION['f1E_idremunerada']);
                                    $this->ficha1->set("leeono",$_SESSION['f1E_leeono']);
                                    $this->ficha1->set("ingreso",$_SESSION['f1E_ingreso']);
                                    $this->ficha1->set("auh",$_SESSION['f1E_auh']);
                                    $this->ficha1->set("psocial",$_SESSION['f1E_psocial']);
                                    $this->ficha1->set("migrante",$_SESSION['f1E_migrante']);
                                    $this->ficha1->set("idprocedencia",$_SESSION['f1E_idprocedencia']);
                                    $this->ficha1->set("permanencia",$_SESSION['f1E_permanencia']);
                                    $this->ficha1->set("rs_concurrir",$_SESSION['f1E_rs_concurrir']);
                                    $this->ficha1->set("rs_institucion",$_SESSION['f1E_rs_institucion']);
                                    $this->ficha1->set("rs_vinculos",$_SESSION['f1E_rs_vinculos']);
                                    $this->ficha1->set("cv_problemas",$_SESSION['f1E_cv_problemas']);
                                    $this->ficha1->set("cv_perempleo",$_SESSION['f1E_cv_perempleo']);
                                    $this->ficha1->set("cv_limitacion",$_SESSION['f1E_cv_limitacion']);
                                    $this->ficha1->set("cv_perestudio",$_SESSION['f1E_cv_perestudio']);
                                    $this->ficha1->set("edu_consultante",$_SESSION['f1E_edu_consultante']);
                                    $this->ficha1->set("edu_agresor",$_SESSION['f1E_edu_agresor']);
                                    $this->ficha1->set("idactividad",$_SESSION['f1E_idactividad']);
                                    $this->ficha1->updateFicha1();
                                    
                                    $this->ficha2->set("idficha",$_SESSION['pE_idficha']);
                                    $this->ficha2->eliminarFicha2(); 
                                    
                                    $filas1 = 1;
                                    $total_filas1 = $_SESSION['filas_creadasE'];

                                    for ($i=$filas1; $i<=$total_filas1; $i++) {
                                        if(isset($_SESSION['Ef2_f2_apellido'.$i])){
                                            $this->ficha2->set("idficha",$_SESSION['pE_idficha']);
                                            $this->ficha2->set("f2_apellido",$_SESSION['Ef2_f2_apellido'.$i]);
                                            $this->ficha2->set("f2_nombre",$_SESSION['Ef2_f2_nombre'.$i]);
                                            $this->ficha2->set("idsexo",$_SESSION['Ef2_idsexo'.$i]);
                                            $this->ficha2->set("f2_edad",$_SESSION['Ef2_f2_edad'.$i]);
                                            $this->ficha2->set("f2_mes",$_SESSION['Ef2_f2_mes'.$i]); 
                                            $this->ficha2->set("idpariente",$_SESSION['Ef2_idpariente'.$i]);
                                            $this->ficha2->set("discapacitado",$_SESSION['Ef2_discapacitado'.$i]);
                                            $this->ficha2->set("victimavio",$_SESSION['Ef2_victimavio'.$i]);
                                            $this->ficha2->agregarFicha2(); 
                                        }
                                    
                                    }
                                    
                                    

                                    
                                    
                                    
                                    
                                    $this->ficha3->set("idficha",$_SESSION['pE_idficha']);
                                    $this->ficha3->set("idficha3",$_SESSION['f3E_idficha3']);
                                    $this->ficha3->set("embarazada",$_SESSION['f3E_embarazada']);
                                    $this->ficha3->set("anviagresor",$_SESSION['f3E_anviagresor']);
                                    $this->ficha3->set("anmaltrato",$_SESSION['f3E_anmaltrato']);
                                    $this->ficha3->set("idvinculo",$_SESSION['f3E_idvinculo']);
                                    $this->ficha3->set("cohab",$_SESSION['f3E_cohab']);
                                    $this->ficha3->set("idriesgo",$_SESSION['f3E_idriesgo']);
                                    $this->ficha3->updateFicha3();
                                    $this->ficha31->set("idficha",$_SESSION['pE_idficha']);
                                    $this->ficha31->set("idficha31",$_SESSION['f31E_idficha31']);
                                    $this->ficha31->set("v_fisica",$_SESSION['f31E_v_fisica']);
                                    $this->ficha31->set("v_psicologica",$_SESSION['f31E_v_psicologica']);
                                    $this->ficha31->set("v_sexual",$_SESSION['f31E_v_sexual']);
                                    $this->ficha31->set("v_parsocial",$_SESSION['f31E_v_parsocial']);
                                    $this->ficha31->set("v_simbolica",$_SESSION['f31E_v_simbolica']);
                                    $this->ficha31->set("v_economica",$_SESSION['f31E_v_economica']);
                                    $this->ficha31->set("co_obstaculo",$_SESSION['f31E_co_obstaculo']);
                                    $this->ficha31->set("co_econo",$_SESSION['f31E_co_econo']);
                                    $this->ficha31->updateFicha31();
                                    $this->ficha32->set("idficha",$_SESSION['pE_idficha']);
                                    $this->ficha32->set("idficha32",$_SESSION['f32E_idficha32']);
                                    $this->ficha32->set("anco_fisica",$_SESSION['f32E_anco_fisica']);
                                    $this->ficha32->set("anco_psico",$_SESSION['f32E_anco_psico']);
                                    $this->ficha32->set("anco_absex",$_SESSION['f32E_anco_absex']);
                                    $this->ficha32->set("anco_tesvio",$_SESSION['f32E_anco_tesvio']);
                                    $this->ficha32->set("anco_aban",$_SESSION['f32E_anco_aban']);
                                    $this->ficha32->set("anco_otro",$_SESSION['f32E_anco_otro']);
                                    $this->ficha32->updateFicha32();
                                    $this->ficha33->set("idficha",$_SESSION['pE_idficha']);
                                    $this->ficha33->set("idficha33",$_SESSION['f33E_idficha33']);
                                    $this->ficha33->set("anag_fisica",$_SESSION['f33E_anag_fisica']);
                                    $this->ficha33->set("anag_psico",$_SESSION['f33E_anag_psico']);
                                    $this->ficha33->set("anag_absex",$_SESSION['f33E_anag_absex']);
                                    $this->ficha33->set("anag_tesvio",$_SESSION['f33E_anag_tesvio']);
                                    $this->ficha33->set("anag_aban",$_SESSION['f33E_anag_aban']);
                                    $this->ficha33->set("anag_otro",$_SESSION['f33E_anag_otro']);
                                    $this->ficha33->updateFicha33();
                                    $this->ficha34->set("idficha",$_SESSION['pE_idficha']);
                                    $this->ficha34->set("idficha34",$_SESSION['f34E_idficha34']);
                                    $this->ficha34->set("he_embar",$_SESSION['f34E_he_embar']);
                                    $this->ficha34->set("he_celos",$_SESSION['f34E_he_celos']);
                                    $this->ficha34->set("he_plabor",$_SESSION['f34E_he_plabor']);
                                    $this->ficha34->set("he_alcohol",$_SESSION['f34E_he_alcohol']);
                                    $this->ficha34->set("he_autoco",$_SESSION['f34E_he_autoco']);
                                    $this->ficha34->set("he_impco",$_SESSION['f34E_he_impco']);
                                    $this->ficha34->set("he_separ",$_SESSION['f34E_he_separ']);
                                    $this->ficha34->set("he_otro",$_SESSION['f34E_he_otro']);
                                    $this->ficha34->updateFicha34();
                                    $this->ficha35->set("idficha",$_SESSION['pE_idficha']);
                                    $this->ficha35->set("idficha35",$_SESSION['f35E_idficha35']);
                                    $this->ficha35->set("ind_lesfis",$_SESSION['f35E_ind_lesfis']);
                                    $this->ficha35->set("ind_intmed",$_SESSION['f35E_ind_intmed']);
                                    $this->ficha35->set("ind_amuerte",$_SESSION['f35E_ind_amuerte']);
                                    $this->ficha35->set("ind_armas",$_SESSION['f35E_ind_armas']);
                                    $this->ficha35->set("ind_aborto",$_SESSION['f35E_ind_aborto']);
                                    $this->ficha35->set("ind_idsuic",$_SESSION['f35E_ind_idsuic']);
                                    $this->ficha35->set("ind_insuic",$_SESSION['f35E_ind_insuic']);
                                    $this->ficha35->set("ind_sexfor",$_SESSION['f35E_ind_sexfor']);
                                    $this->ficha35->set("ind_acoso",$_SESSION['f35E_ind_acoso']);
                                    $this->ficha35->set("ind_antpen",$_SESSION['f35E_ind_antpen']);
                                    $this->ficha35->set("ind_sust",$_SESSION['f35E_ind_sust']);
                                    $this->ficha35->updateFicha35();
                                    $this->ficha36->set("idficha",$_SESSION['pE_idficha']);
                                    $this->ficha36->set("idficha36",$_SESSION['f36E_idficha36']);
                                    $this->ficha36->set("t_suenio",$_SESSION['f36E_t_suenio']);
                                    $this->ficha36->set("t_alimen",$_SESSION['f36E_t_alimen']);
                                    $this->ficha36->set("t_digest",$_SESSION['f36E_t_digest']);
                                    $this->ficha36->set("t_antidep",$_SESSION['f36E_t_antidep']);
                                    $this->ficha36->set("t_aldrog",$_SESSION['f36E_t_aldrog']);
                                    $this->ficha36->set("t_its",$_SESSION['f36E_t_its']);
                                    $this->ficha36->set("t_otro",$_SESSION['f36E_t_otro']);
                                    $this->ficha36->updateFicha36();
                                    $this->ficha37->set("idficha",$_SESSION['pE_idficha']);
                                    $this->ficha37->set("idficha37",$_SESSION['f37E_idficha37']);
                                    $this->ficha37->set("des_hijos",$_SESSION['f37E_des_hijos']);
                                    $this->ficha37->set("des_golpe",$_SESSION['f37E_des_golpe']);
                                    $this->ficha37->set("des_conoc",$_SESSION['f37E_des_conoc']);
                                    $this->ficha37->set("des_infide",$_SESSION['f37E_des_infide']);
                                    $this->ficha37->set("des_solic",$_SESSION['f37E_des_solic']);
                                    $this->ficha37->set("des_limite",$_SESSION['f37E_des_limite']);
                                    $this->ficha37->set("des_legal",$_SESSION['f37E_des_legal']);
                                    $this->ficha37->set("des_deriv",$_SESSION['f37E_des_deriv']);
                                    $this->ficha37->set("des_miedo",$_SESSION['f37E_des_miedo']);
                                    $this->ficha37->set("des_otro",$_SESSION['f37E_des_otro']);
                                    $this->ficha37->updateFicha37();
                                    $this->ficha4->set("idficha",$_SESSION['pE_idficha']);
                                    $this->ficha4->set("recientepenal",$_SESSION['f4E_recientepenal']);
                                    $this->ficha4->set("previapenal",$_SESSION['f4E_previapenal']);
                                    $this->ficha4->set("recientecivil",$_SESSION['f4E_recientecivil']);
                                    $this->ficha4->set("previacivil",$_SESSION['f4E_previacivil']);
                                    $this->ficha4->set("recientepoli",$_SESSION['f4E_recientepoli']);
                                    $this->ficha4->set("previapoli",$_SESSION['f4E_previapoli']);
                                    $this->ficha4->set("idaccesibilidad",$_SESSION['f4E_idaccesibilidad']);
                                    $this->ficha4->set("de_noinfo",$_SESSION['f4E_de_noinfo']);
                                    $this->ficha4->set("de_ofemp",$_SESSION['f4E_de_ofemp']);
                                    $this->ficha4->set("idcomisaria",$_SESSION['f4E_idcomisaria']);
                                    $this->ficha4->set("denuncia",$_SESSION['f4E_denuncia']);
                                    $this->ficha4->set("p_medidas",$_SESSION['f4E_p_medidas']);
                                    $this->ficha4->set("de_consul",$_SESSION['f4E_de_consul']);
                                    $this->ficha4->set("de_defen",$_SESSION['f4E_de_defen']);
                                    $this->ficha4->set("de_psocial",$_SESSION['f4E_de_psocial']);
                                    $this->ficha4->set("de_amujer",$_SESSION['f4E_de_amujer']);
                                    $this->ficha4->set("de_comujer",$_SESSION['f4E_de_comujer']);
                                    $this->ficha4->set("de_otra",$_SESSION['f4E_de_otra']);
                                    $this->ficha4->set("di_noinfo",$_SESSION['f4E_di_noinfo']);
                                    $this->ficha4->set("di_apsico",$_SESSION['f4E_di_apsico']);
                                    $this->ficha4->set("di_pjuridico",$_SESSION['f4E_di_pjuridico']);
                                    $this->ficha4->set("di_refugio",$_SESSION['f4E_di_refugio']);
                                    $this->ficha4->set("di_grupos",$_SESSION['f4E_di_grupos']);
                                    $this->ficha4->set("di_alegal",$_SESSION['f4E_di_alegal']);
                                    $this->ficha4->set("di_asocial",$_SESSION['f4E_di_asocial']);
                                    $this->ficha4->set("di_otros",$_SESSION['f4E_di_otros']);
                                    $this->ficha4->updateFicha4();
                                    
                                    $_SESSION['f41E_me_acerca'] = $_POST['me_acerca'];
                                    $_SESSION['f41E_me_perten'] = $_POST['me_perten'];
                                    $_SESSION['f41E_me_alimen'] = $_POST['me_alimen'];
                                    $_SESSION['f41E_me_exhog'] = $_POST['me_exhog'];
                                    $_SESSION['f41E_me_resper'] = $_POST['me_resper'];
                                    $_SESSION['f41E_me_visitas'] = $_POST['me_visitas'];
                                    $_SESSION['f41E_me_prohib'] = $_POST['me_prohib'];
                                    $_SESSION['f41E_me_psico'] = $_POST['me_psico'];
                                    $_SESSION['f41E_me_otra'] = $_POST['me_otra'];
                                    $_SESSION['f41E_me_dual'] = $_POST['me_dual'];
                                    $_SESSION['f41E_me_prisionprev'] = $_POST['me_prisionprev'];
                                    $this->ficha41->set("idficha",$_SESSION['pE_idficha']);
                                    $this->ficha41->set("idficha41",$_SESSION['f41E_idficha41']);
                                    $this->ficha41->set("me_acerca",$_SESSION['f41E_me_acerca']);
                                    $this->ficha41->set("me_perten",$_SESSION['f41E_me_perten']);
                                    $this->ficha41->set("me_alimen",$_SESSION['f41E_me_alimen']);
                                    $this->ficha41->set("me_exhog",$_SESSION['f41E_me_exhog']);
                                    $this->ficha41->set("me_resper",$_SESSION['f41E_me_resper']);
                                    $this->ficha41->set("me_visitas",$_SESSION['f41E_me_visitas']);
                                    $this->ficha41->set("me_prohib",$_SESSION['f41E_me_prohib']);
                                    $this->ficha41->set("me_psico",$_SESSION['f41E_me_psico']);
                                    $this->ficha41->set("me_otra",$_SESSION['f41E_me_otra']);
                                    $this->ficha41->set("me_dual",$_SESSION['f41E_me_dual']);
                                    $this->ficha41->set("me_prisionprev",$_SESSION['f41E_me_prisionprev']);
                                    $this->ficha41->updateFicha41();
                                    
                                    
                                    

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
                                    unset($_SESSION['f41E_me_dual']);
                                    unset($_SESSION['f41E_me_prisionprev']);
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

                                    unset($_SESSION['pE_per_dni']);
                                    unset($_SESSION['pE_per_apellido']);
                                    unset($_SESSION['pE_per_nombre']);
                                    unset($_SESSION['pE_idsexo']);
                                    unset($_SESSION['pE_idgenero']);
                                    unset($_SESSION['pE_idestadocivil']);
                                    unset($_SESSION['pE_per_nacido']);
                                    unset($_SESSION['pE_per_celular']);
                                    unset($_SESSION['pE_per_domicilio']);
                                    unset($_SESSION['pE_iddepartamento']);
                                    unset($_SESSION['pE_idlocalidad']);
                                    header("Location: " . URL. "principal/buscar/");
                    }
                    
                }
                
                public function listarSecciones(){
                    $datos = $this->seccion->listar();
                    return $datos;
                }
                
                public function ver($id){
                    $this->ficha41->set("idficha41",$id);
                    $datos = $this->ficha41->verFicha41();
                    return $datos;
                }
                
                
                public function eliminar($id){
                    $this->ficha41->set("idficha41",$id);
                    $this->ficha41->eliminarFicha41();
                    header("Location: " . URL . "ficha41");
                    
                }
                
                
	}
        $ficha41 = new ficha41Controller();
       
?>