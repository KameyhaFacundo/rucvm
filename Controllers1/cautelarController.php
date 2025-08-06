<?php namespace Controllers1;

//require_once('C:\wamp\www\rucvm1\Models1\Persona.php');
use Models1\Persona as Persona;
use Models1\Cautelar as Cautelar;
//use Models\Seccion as Seccion;

    class cautelarController{
            
            private $persona;
            private $cautelar;
            //private $seccion;
            
            public function __construct() {
                $this->cautelar = new Cautelar();
                $this->persona = new Persona();
                //$this->cautelar = new Cautelar();
                //$this->seccion = new Seccion();
            }
            
            public function agregar(){
                if(!$_POST){
                    echo '<div id="loader">
                            <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                        </div>';
                }
                    //error_reporting(0);
                    if(isset($_POST['per_dni']) && isset($_POST['per_apellido']) && isset($_POST['per_dni_agresor']) && isset($_POST['per_apellido_agresor'])){
                        $this->persona->set('per_dni',$_POST['per_dni']);
                        $cantFilasP = $this->persona->cantFilaPersona();
                        //echo  $cantFilasP;
                        if($cantFilasP == 0){
                                $this->persona->set('per_apellido',ucwords(strtolower(trim($_POST['per_apellido']))));
                                $this->persona->set('per_nombre',ucwords(strtolower(trim($_POST['per_nombre']))));
                                $this->persona->set('per_dni',ucwords(strtolower(trim($_POST['per_dni']))));
                                $this->persona->set('victima',1);
                                $this->persona->set('agresor',0);
                                $this->persona->agregarPersonaPol();
                                 }else{
                                $this->persona->set('per_apellido',ucwords(strtolower(trim($_POST['per_apellido']))));
                                    $this->persona->set('per_nombre',ucwords(strtolower(trim($_POST['per_nombre']))));
                                    $this->persona->set('per_dni',ucwords(strtolower(trim($_POST['per_dni']))));
                                    $this->persona->set('victima',1);
                                    $this->persona->updatePersonaPol_v();
                                 }
                        $this->persona->set('per_dni',$_POST['per_dni_agresor']);
                        $cantFilasPA = $this->persona->cantFilaPersona();
                        //echo  $cantFilasPA;
                        if($cantFilasPA == 0){
                                $this->persona->set('per_apellido',ucwords(strtolower(trim($_POST['per_apellido_agresor']))));
                                $this->persona->set('per_nombre',ucwords(strtolower(trim($_POST['per_nombre_agresor']))));
                        
                                 $this->persona->set('per_dni',ucwords(strtolower(trim($_POST['per_dni_agresor']))));
                                 $this->persona->set('agresor',1);
                                 $this->persona->set('victima',0);
                                $this->persona->agregarPersonaPol();
                                 }else{
                                    $this->persona->set('per_apellido',ucwords(strtolower(trim($_POST['per_apellido_agresor']))));
                                    $this->persona->set('per_nombre',ucwords(strtolower(trim($_POST['per_nombre_agresor']))));
                        
                                    $this->persona->set('per_dni',ucwords(strtolower(trim($_POST['per_dni_agresor']))));
                                    $this->persona->set('agresor',1);
                                    $this->persona->updatePersonaPol_a();
                                 }
                                 

    $var='';
    $b=1;
foreach ($_POST['idcausa'] as $selectedOption)
{
 
    if($b==1){
        $var= $selectedOption;
        $b=0;
    }
    else{
        $var= $var.','.$selectedOption;
    //echo $selectedOption."\n";  
    }

   
}
//echo $var;



                       $this->cautelar->set('ca_causa',$var);

    $var_tmedida='';
    $bandera=1;
foreach ($_POST['idtipo_medida'] as $selectedOption_tm)
{
 
    if($bandera==1){
        $var_tmedida= $selectedOption_tm;
        $bandera=0;
    }
    else{
        $var_tmedida= $var_tmedida.','.$selectedOption_tm;
    //echo $selectedOption_tm."\n";  
    }

   
}
//echo $var_tmedida;



                       $this->cautelar->set('ca_tipmedidas',$var_tmedida);

                        $this->cautelar->set('per_dni',$_POST['per_dni']);
                        $this->cautelar->set('per_dni_agresor',$_POST['per_dni_agresor']);
                        $this->cautelar->set('idregional',$_POST['idregional']);
                        //lo nuevo 06/12/2019
                        $fis1 = $_POST['fis1'];
                        $fis2 = $_POST['fis2'];

                        $fiscompleto = $fis1."/".$fis2;

                        $this->cautelar->set('ca_expedientefiscalia',$fiscompleto);
                        $exp1 = $_POST['exp1'];
                        $exp2 = $_POST['exp2'];
                        $exp3 = $_POST['exp3'];

                        $exped = $exp1."/".$exp2."-".$exp3;
                        $this->cautelar->set('ca_expediente',$exped);

                        $this->cautelar->set('fec_ingreso',$_POST['fec_ingreso']);
                        $this->cautelar->set('ca_oficio',$_POST['ca_oficio']);
                        $this->cautelar->set('ca_resolucion',$_POST['ca_resolucion']);
                        $this->cautelar->set('idfiscalia',$_POST['idfiscalia']);
                        //$this->cautelar->set('agresor',$_POST['agresor']);
                        $this->cautelar->set('fec_hecho',$_POST['fec_hecho']);
                        $this->cautelar->set('ca_deporigen',$_POST['ca_deporigen']);
                        //$this->cautelar->set('ca_tipmedida',$_POST['idtipo_medida']);
                        $this->cautelar->set('ca_domicilio',ucwords(strtolower(trim($_POST['ca_domicilio']))));
                        $this->cautelar->set('idcomisaria',$_POST['idcomisaria']);
                        $this->cautelar->set('ca_plazo',$_POST['ca_plazo']);
                        $this->cautelar->set('ca_observaciones',$_POST['ca_observaciones']);
                        
                        $this->cautelar->set('fec_ingresovieja',$_POST['fec_ingresovieja']);
                        $this->cautelar->set('otrosagresores',$_POST['otrosagres']);
                        $this->cautelar->set('otrasvictimas',$_POST['otrasvict']);
                        $this->cautelar->set('ca_domicilio2',$_POST['ca_domicilio2']);
                        $this->cautelar->set('ca_domicilio3',$_POST['ca_domicilio3']);
                        $this->cautelar->set('idusuario',$_SESSION['idusuario']);
                        $this->cautelar->agregarCautelar();

                        unset($_SESSION['idregional']);
                        unset($_SESSION['exp1']);
                        unset($_SESSION['exp2']);
                        unset($_SESSION['exp3']);
                        unset($_SESSION['fec_ingreso']);
                        unset($_SESSION['ca_oficio']);
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
                        unset($_SESSION['ca_resolucion']);
                        unset($_SESSION['per_dni']);
                        unset($_SESSION['per_apellido']);
                        unset($_SESSION['per_nombre']);
                        unset($_SESSION['per_dni_agresor']);
                        unset($_SESSION['per_apellido_agresor']);
                        unset($_SESSION['per_nombre_agresor']);
                        unset($_SESSION['bandera']);     
                        unset($_SESSION['fis1']);
                        unset($_SESSION['fis2']);
                        unset($_SESSION['fis_oculto']);

                        header("Location: " . URL . "principal/buscar"); 

                    }else{
                        session_start();
                        if(isset($_POST['per_dni'])&&trim($_POST['per_dni'])!="" && !isset($_POST['per_dni_agresor'])){ 
                        $this->persona->set("per_dni",$_POST['per_dni']);

                        $_SESSION['bandera'] = 0;
                        //$_SESSION['per_dni_agresor'] = $_POST['per_dni_agresor'];
                        //$_SESSION['per_apellido_agresor'] = $_POST['per_apellido_agresor'];
                        //$_SESSION['per_nombre_agresor'] = $_POST['per_nombre_agresor'];
                        $_SESSION['idregional'] = $_POST['idregional'];
                        $_SESSION['fis1'] = $_POST['fis1'];
                        $_SESSION['fis2'] = $_POST['fis2'];
                        $_SESSION['exp1'] = $_POST['exp1'];
                        $_SESSION['exp2'] = $_POST['exp2'];
                        $_SESSION['exp3'] = $_POST['exp3'];
                        $_SESSION['fec_ingreso'] = $_POST['fec_ingreso'];
                        $_SESSION['ca_oficio'] = $_POST['ca_oficio'];
                        $_SESSION['ca_resolucion'] = $_POST['ca_resolucion'];
                        $_SESSION['idfiscalia'] = $_POST['idfiscalia'];
                        //$_SESSION['idcausa'] = $_POST['causa'];                           
                        $_SESSION['fec_hecho'] = $_POST['fec_hecho'];
                        $_SESSION['ca_deporigen'] = $_POST['ca_deporigen'];
                        //$_SESSION['idtipo_medida'] = $_POST['idtipo_medida'];
                        $_SESSION['ca_domicilio'] = $_POST['ca_domicilio'];
                        $_SESSION['idcomisaria'] = $_POST['idcomisaria'];
                        $_SESSION['ca_plazo'] = $_POST['ca_plazo'];
                        $_SESSION['fec_vencimiento'] = $_POST['fec_vencimiento'];
                        $_SESSION['ca_observaciones'] = $_POST['ca_observaciones'];

                        $var='';
                        $b=1;
                        foreach ($_POST['idcausa'] as $selectedOption)
                        {
 
                        if($b==1){
                            $var= $selectedOption;
                            $b=0;
                        }
                        else{
                            $var= $var.','.$selectedOption;
                        //echo $selectedOption."\n";  
                        }

   
                        }

                        $_SESSION['idcausa'] = $var;


                        $var_tmedida='';
                        $bandera=1;
                        foreach ($_POST['idtipo_medida'] as $selectedOption_tm)
                        {
 
                        if($bandera==1){
                            $var_tmedida= $selectedOption_tm;
                            $bandera=0;
                        }
                        else{
                            $var_tmedida= $var_tmedida.','.$selectedOption_tm;
                        //echo $selectedOption_tm."\n";  
                        }

   
                        }

                        $_SESSION['idtipo_medida'] = $var_tmedida;

                        $datos = $this->persona->verPersona();
                        return $datos;
                        }

                        session_start();
                        if(isset($_POST['per_dni_agresor'])&&trim($_POST['per_dni_agresor'])!=""){ 
                        $this->persona->set("per_dni",$_POST['per_dni_agresor']);

                        $_SESSION['p_per_dni'] = $_POST['per_dni'];
                        $_SESSION['p_per_apellido'] = $_POST['per_apellido'];
                        $_SESSION['p_per_nombre'] = $_POST['per_nombre'];
                        $_SESSION['bandera'] = 1;
                        $_SESSION['idregional'] = $_POST['idregional'];
                        $_SESSION['fis1'] = $_POST['fis1'];
                        $_SESSION['fis2'] = $_POST['fis2'];
                        $_SESSION['exp1'] = $_POST['exp1'];
                        $_SESSION['exp2'] = $_POST['exp2'];
                        $_SESSION['exp3'] = $_POST['exp3'];
                        $_SESSION['fec_ingreso'] = $_POST['fec_ingreso'];
                        $_SESSION['ca_oficio'] = $_POST['ca_oficio'];
                        $_SESSION['ca_resolucion'] = $_POST['ca_resolucion'];
                        $_SESSION['idfiscalia'] = $_POST['idfiscalia'];
                        //$_SESSION['idcausa'] = $_POST['causa'];                           
                        $_SESSION['fec_hecho'] = $_POST['fec_hecho'];
                        $_SESSION['ca_deporigen'] = $_POST['ca_deporigen'];
                        $_SESSION['idtipo_medida'] = $_POST['idtipo_medida'];
                        $_SESSION['ca_domicilio'] = $_POST['ca_domicilio'];
                        $_SESSION['idcomisaria'] = $_POST['idcomisaria'];
                        $_SESSION['ca_plazo'] = $_POST['ca_plazo'];
                        $_SESSION['fec_vencimiento'] = $_POST['fec_vencimiento'];
                        $_SESSION['ca_observaciones'] = $_POST['ca_observaciones'];

                        $var='';
                        $b=1;
                        foreach ($_POST['idcausa'] as $selectedOption)
                        {
 
                        if($b==1){
                            $var= $selectedOption;
                            $b=0;
                        }
                        else{
                            $var= $var.','.$selectedOption;
                        //echo $selectedOption."\n";  
                        }

   
                        }

                        $_SESSION['idcausa'] = $var;

                        $var_tmedida='';
                        $bandera=1;
                        foreach ($_POST['idtipo_medida'] as $selectedOption_tm)
                        {
 
                        if($bandera==1){
                            $var_tmedida= $selectedOption_tm;
                            $bandera=0;
                        }
                        else{
                            $var_tmedida= $var_tmedida.','.$selectedOption_tm;
                        //echo $selectedOption_tm."\n";  
                        }

   
                        }

                        $_SESSION['idtipo_medida'] = $var_tmedida;
                        $datos = $this->persona->verPersona();
                        return $datos;
                        }
                    }
                }


            
            
            
            
            
            public function vencidas($per_dni){
                 if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        $datos = $this->cautelar->verCautelarVigentes();
                        return $datos;    
                    }else{
                        $this->cautelar->set("ca_expediente",$_POST['ca_expediente1']);
                        $datos = $this->cautelar->verCautelar();
                        return $datos;    
                    }
                }
            
            
            public function  editar($id){
                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        session_start();
                        //$_SESSION['pE_idficha']=$id;
                        $this->cautelar->set("idcautelar",$id);
                        $datos = $this->cautelar->verCautelarPorId();

                        return $datos;
                        
                    }else{
                        $this->persona->set('per_apellido',ucwords(strtolower(trim($_POST['per_apellido']))));
                        $this->persona->set('per_nombre',ucwords(strtolower(trim($_POST['per_nombre']))));
                        $this->persona->set('per_dni',ucwords(strtolower(trim($_POST['per_dni']))));
                        $this->persona->set('victima',1);
                        $this->persona->updatePersonaPol_v();
                        $this->persona->set('per_apellido',ucwords(strtolower(trim($_POST['per_apellido_agresor']))));
                        $this->persona->set('per_nombre',ucwords(strtolower(trim($_POST['per_nombre_agresor']))));
                        $this->persona->set('per_dni',ucwords(strtolower(trim($_POST['per_dni_agresor']))));
                        $this->persona->set('agresor',1);
                        $this->persona->updatePersonaPol_a();

                        $var='';
                        $b=1;
                        foreach ($_POST['idcausa'] as $selectedOption)
                        {                       
                            if($b==1){
                                $var= $selectedOption;
                                $b=0;
                            }else{
                                $var= $var.','.$selectedOption;
                            //echo $selectedOption."\n";  
                            }     
                        }
                        $this->cautelar->set('ca_causa',$var);

                        $var_tmedida='';
                        $bandera=1;
                        foreach ($_POST['idtipo_medida'] as $selectedOption_tm)
                        {                       
                            if($bandera==1){
                                $var_tmedida= $selectedOption_tm;
                                $bandera=0;
                            }else{
                                $var_tmedida= $var_tmedida.','.$selectedOption_tm;
                            //echo $selectedOption_tm."\n";  
                            }     
                        }
                        echo $var_tmedida;
                        $this->cautelar->set('ca_tipmedidas',$var_tmedida);

                        $this->cautelar->set('per_dni',$_POST['per_dni']);
                        $this->cautelar->set('per_dni_agresor',$_POST['per_dni_agresor']);
                        $this->cautelar->set('idregional',$_POST['idregional']);
                        
                        $exp1fis = $_POST['exp1fis'];
                        $exp2fis = $_POST['exp2fis'];

                        $expedfis = $exp1fis."/".$exp2fis;
                        $this->cautelar->set('ca_expedientefiscalia',$expedfis);

                        $exp1 = $_POST['exp1'];
                        $exp2 = $_POST['exp2'];
                        $exp3 = $_POST['exp3'];

                        $exped = $exp1."/".$exp2."-".$exp3;
                        $this->cautelar->set('ca_expediente',$exped);

                        $this->cautelar->set('fec_ingreso',$_POST['fec_ingreso']);
                        $this->cautelar->set('fec_ingresovieja',$_POST['fec_ingresovieja']);
                        $this->cautelar->set('otrosagresores',$_POST['otrosagres']);
                        $this->cautelar->set('otrasvictimas',$_POST['otrasvict']);
                        $this->cautelar->set('ca_oficio',$_POST['ca_oficio']);
                        $this->cautelar->set('idfiscalia',$_POST['idfiscalia']);
                        $this->cautelar->set('ca_domicilio2',ucwords(strtolower(trim($_POST['ca_domicilio2']))));
                        $this->cautelar->set('ca_domicilio3',ucwords(strtolower(trim($_POST['ca_domicilio3']))));
                        $this->cautelar->set('fec_hecho',$_POST['fec_hecho']);
                        $this->cautelar->set('ca_deporigen',$_POST['ca_deporigen']);
                        $this->cautelar->set('ca_resolucion',$_POST['ca_resolucion']);
                        $this->cautelar->set('ca_tipmedida',$_POST['idtipo_medida']);
                        $this->cautelar->set('ca_domicilio',ucwords(strtolower(trim($_POST['ca_domicilio']))));
                        $this->cautelar->set('idcomisaria',$_POST['idcomisaria']);
                        $this->cautelar->set('ca_plazo',$_POST['ca_plazo']);
                        $this->cautelar->set('ca_observaciones',$_POST['ca_observaciones']);
                        $this->cautelar->set('idcautelar',$id);
                        $this->cautelar->set('idusuario',$_SESSION['idusuario']);
                        $this->cautelar->updateCautelar();

                        header("Location: " . URL . "principal/buscar");
                    }
                }
                
                public function listarSecciones(){
                    $datos = $this->seccion->listar();
                    return $datos;
                }
                
                public function ver($id){
                    $this->persona->set("id",$_POST['id']);
                    $datos = $this->persona->verPersona();
                    return $datos;
                }
                
                
                public function eliminar($id){
                    $this->cautelar->set("idcautelar",$id);
                    $this->cautelar->eliminarCautelar();
                    header("Location: " . URL . 'principal/buscar/');
                }           
    }
    $cautelar = new cautelarController();
        
?>