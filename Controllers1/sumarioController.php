<?php namespace Controllers1;

use Models1\Persona as Persona;
use Models1\Sumario as Sumario;

    class sumarioController{

            private $persona;
            private $sumario;

            public function __construct() {
                $this->sumario = new Sumario();
                $this->persona = new Persona();
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
                                $this->persona->set('per_domicilio',ucwords(strtolower(trim($_POST['per_domicilio']))));
                                $this->persona->set('per_celular',ucwords(strtolower(trim($_POST['per_celular']))));
                                $this->persona->set('per_dni',ucwords(strtolower(trim($_POST['per_dni']))));
                                $this->persona->set('victima',1);
                                $this->persona->set('agresor',0);
                                $this->persona->agregarPersonaPol();
                                 }else{
                                $this->persona->set('per_apellido',ucwords(strtolower(trim($_POST['per_apellido']))));
                                    $this->persona->set('per_nombre',ucwords(strtolower(trim($_POST['per_nombre']))));
                                    $this->persona->set('per_domicilio',ucwords(strtolower(trim($_POST['per_domicilio']))));
                                    $this->persona->set('per_celular',ucwords(strtolower(trim($_POST['per_celular']))));
                                    $this->persona->set('per_dni',ucwords(strtolower(trim($_POST['per_dni']))));
                                    $this->persona->set('victima',1);
                                    $this->persona->updatePersonaPol_v();
                                 }
                        if(!empty($_POST['per_dni_agresor'])) {

                            $this->persona->set('per_dni',$_POST['per_dni_agresor']);
                            $cantFilasPA = $this->persona->cantFilaPersona();
                            //echo  $cantFilasPA;
                            if($cantFilasPA == 0){
                                $this->persona->set('per_apellido',ucwords(strtolower(trim($_POST['per_apellido_agresor']))));
                                $this->persona->set('per_nombre',ucwords(strtolower(trim($_POST['per_nombre_agresor']))));
                                $this->persona->set('per_domicilio',ucwords(strtolower(trim($_POST['per_domicilio_agresor']))));
                                $this->persona->set('per_celular',ucwords(strtolower(trim($_POST['per_celular_agresor']))));
                                $this->persona->set('per_dni',ucwords(strtolower(trim($_POST['per_dni_agresor']))));
                                $this->persona->set('agresor',1);
                                $this->persona->set('victima',0);
                                $this->persona->agregarPersonaPol();
                            }else{
                                $this->persona->set('per_apellido',ucwords(strtolower(trim($_POST['per_apellido_agresor']))));
                                $this->persona->set('per_nombre',ucwords(strtolower(trim($_POST['per_nombre_agresor']))));
                                $this->persona->set('per_domicilio',ucwords(strtolower(trim($_POST['per_domicilio_agresor']))));
                                $this->persona->set('per_celular',ucwords(strtolower(trim($_POST['per_celular_agresor']))));
                                $this->persona->set('per_dni',ucwords(strtolower(trim($_POST['per_dni_agresor']))));
                                $this->persona->set('agresor',1);
                                $this->persona->updatePersonaPol_a();
                            }
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
                                }


                            }


                            $this->sumario->set('idcausa',$var);

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
                            }
                        }



                        $this->sumario->set('idtipo_medida',$var_tmedida);
                        $this->sumario->set('per_dni',$_POST['per_dni']);
                        $this->sumario->set('per_dni_agresor',$_POST['per_dni_agresor']);
                        $this->sumario->set('sum_numero',$_POST['sum_numero']);
                        $this->sumario->set('sum_legajo',$_POST['sum_legajo']);
                        $this->sumario->set('sum_tramite',$_POST['sum_tramite']);
                        $this->sumario->set('sum_fecha',$_POST['sum_fecha']);
                        $this->sumario->set('sum_fecha_hecho',$_POST['sum_fecha_hecho']);
                        $this->sumario->set('sum_resultado',$_POST['sum_resultado']);
                        $this->sumario->set('idfiscalia',$_POST['idfiscalia']);
                        $this->sumario->set('sum_juez',$_POST['sum_juez']);
                        $this->sumario->set('idvinculo',$_POST['idvinculo']);
                        $this->sumario->set('idcomisaria',$_POST['idcomisaria']);
                        $this->sumario->set('idde_externa',$_POST['idde_externa']);
                        $this->sumario->set('sum_menor',$_POST['sum_menor']);
                        $this->sumario->set('sum_tel_familiar',$_POST['sum_tel_familiar']);

                        $this->sumario->agregarsumario();

                        unset($_SESSION['sum_fecha']);
                        unset($_SESSION['sum_fecha_hecho']);
                        unset($_SESSION['idfiscalia']);
                        unset($_SESSION['sum_numero']);
                        unset($_SESSION['sum_tramite']);
                        unset($_SESSION['sum_juez']);
                        unset($_SESSION['sum_legajo']);
                        unset($_SESSION['sum_menor']);
                        unset($_SESSION['idcomisaria']);
                        unset($_SESSION['idvinculo']);
                        unset($_SESSION['idtipo_medida']);
                        unset($_SESSION['idcausa']);
                        unset($_SESSION['idde_externa']);
                        unset($_SESSION['per_dni']);
                        unset($_SESSION['per_apellido']);
                        unset($_SESSION['per_nombre']);
                        unset($_SESSION['per_domicilio']);
                        unset($_SESSION['per_celular']);
                        unset($_SESSION['per_dni_agresor']);
                        unset($_SESSION['per_apellido_agresor']);
                        unset($_SESSION['per_nombre_agresor']);
                        unset($_SESSION['per_domicilio_agresor']);
                        unset($_SESSION['per_celular_agresor']);
                        unset($_SESSION['sum_tel_familiar']);
                        unset($_SESSION['bandera']);
                        header("Location: " . URL . "home/inicio/");

                    }else{
                        session_start();
                        if(isset($_POST['per_dni'])&&trim($_POST['per_dni'])!="" && !isset($_POST['per_dni_agresor'])){
                            $this->persona->set("per_dni",$_POST['per_dni']);

                            $_SESSION['bandera'] = 0;

                            $_SESSION['sum_fecha'] = $_POST['sum_fecha'];
                            $_SESSION['sum_causa'] = $_POST['sum_causa'];
                            $_SESSION['sum_legajo'] = $_POST['sum_legajo'];
                            $_SESSION['idfiscalia'] = $_POST['idfiscalia'];
                            $_SESSION['sum_numero'] = $_POST['sum_numero'];
                            $_SESSION['sum_fecha_hecho'] = $_POST['sum_fecha_hecho'];
                            $_SESSION['idde_externa'] = $_POST['idde_externa'];
                            $_SESSION['idvinculo'] = $_POST['idvinculo'];
                            $_SESSION['sum_menor'] = $_POST['sum_menor'];
                            $_SESSION['idcomisaria'] = $_POST['idcomisaria'];
                            $_SESSION['sum_resultado'] = $_POST['sum_resultado'];
                            $_SESSION['sum_juez'] = $_POST['sum_juez'];
                            $_SESSION['sum_tramite'] = $_POST['sum_tramite'];
                            $_SESSION['idtipo_medida'] = $_POST['idtipo_medida'];
                            $_SESSION['sum_tel_familiar'] = $_POST['sum_tel_familiar'];

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
                            $_SESSION['p_per_domicilio'] = $_POST['per_domicilio'];
                            $_SESSION['p_per_celular'] = $_POST['per_celular'];
                            $_SESSION['bandera'] = 1;
                            $_SESSION['sum_fecha'] = $_POST['sum_fecha'];
                            $_SESSION['sum_legajo'] = $_POST['sum_legajo'];
                            $_SESSION['sum_tramite'] = $_POST['sum_tramite'];
                            $_SESSION['idfiscalia'] = $_POST['idfiscalia'];
                            $_SESSION['idcausa'] = $_POST['idcausa'];
                            $_SESSION['sum_fecha_hecho'] = $_POST['sum_fecha_hecho'];
                            $_SESSION['idde_externa'] = $_POST['idde_externa'];
                            $_SESSION['idtipo_medida'] = $_POST['idtipo_medida'];
                            $_SESSION['idvinculo'] = $_POST['idvinculo'];
                            $_SESSION['idcomisaria'] = $_POST['idcomisaria'];
                            $_SESSION['sum_resultado'] = $_POST['sum_resultado'];
                            $_SESSION['sum_menor'] = $_POST['sum_menor'];
                            $_SESSION['sum_numero'] = $_POST['sum_numero'];
                            $_SESSION['sum_juez'] = $_POST['sum_juez'];
                            $_SESSION['sum_tel_familiar'] = $_POST['sum_tel_familiar'];

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
                                }


                            }

                            $_SESSION['idtipo_medida'] = $var_tmedida;
                            $datos = $this->persona->verPersona();
                            return $datos;
                        }
                    }
            }

            public function getDerivaciones(){
                $idde_externa = $_POST['idde_externa'];
                //q1
                $datos1 = $this->sumario->getExternas1();
                //q2
                $datos2 = $this->sumario->getExternas2($idde_externa);
                $row2 =  pg_fetch_array($datos2);
                echo '<option value="NULL">Seleccionar procedencia</option>';
                if(isset($row2)){
                    echo '<option value="'.$row2['idexterna'].'" selected>'.$row2['ext_descripcion'].'</option>';
                }
                while ( $row =  pg_fetch_array($datos1))
                {
                    echo '<option value="'.$row['idexterna'].'">'.$row['ext_descripcion'].'</option>';
                }
            }

            public function getVinculos(){
                $idvinculo = $_POST['idvinculo'];
                //q1
                $datos1 = $this->sumario->getVinculo1();
                //q2
                $datos2 = $this->sumario->getVinculo2($idvinculo);
                $row2 =  pg_fetch_array($datos2);
                echo '<option value="NULL">Seleccionar vinculo</option>';
                if(isset($row2)){
                    echo '<option value="'.$row2['idvinculo'].'" selected>'.$row2['vin_descripcion'].'</option>';
                }
                while ( $row =  pg_fetch_array($datos1))
                {
                    echo '<option value="'.$row['idvinculo'].'">'.$row['vin_descripcion'].'</option>';
                }
            }

            public function  editar($id){
                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        session_start();
                        $this->sumario->set("idsumario",$id);
                        $datos = $this->sumario->verSumarioPorId();

                        return $datos;

                    }else{
                        echo '<div id="loader">
                            <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                        </div>';
                        $this->persona->set('per_apellido',ucwords(strtolower(trim($_POST['per_apellido']))));
                        $this->persona->set('per_nombre',ucwords(strtolower(trim($_POST['per_nombre']))));
                        $this->persona->set('per_dni',ucwords(strtolower(trim($_POST['per_dni']))));
                        $this->persona->set('per_domicilio',ucwords(strtolower(trim($_POST['per_domicilio']))));
                        $this->persona->set('per_celular',$_POST['per_celular']);
                        $this->persona->set('victima',1);
                        $this->persona->updatePersonaPol_v();
                        if(!empty($_POST['per_dni_agresor'])) {
                            $this->persona->set('per_apellido',ucwords(strtolower(trim($_POST['per_apellido_agresor']))));
                            $this->persona->set('per_nombre',ucwords(strtolower(trim($_POST['per_nombre_agresor']))));
                            $this->persona->set('per_dni',ucwords(strtolower(trim($_POST['per_dni_agresor']))));
                            $this->persona->set('per_domicilio',ucwords(strtolower(trim($_POST['per_domicilio_agresor']))));
                            $this->persona->set('per_celular',$_POST['per_celular_agresor']);
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
                            }else{
                                $var= $var.','.$selectedOption;
                            //echo $selectedOption."\n";
                            }
                        }
                        $this->sumario->set('idcausa',$var);

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
                        $this->sumario->set('idtipo_medida',$var_tmedida);

                        $this->sumario->set('per_dni',$_POST['per_dni']);
                        $this->sumario->set('per_dni_agresor',$_POST['per_dni_agresor']);
                        $this->sumario->set('sum_numero',$_POST['sum_numero']);

                        $this->sumario->set('sum_fecha',$_POST['sum_fecha']);

                        $this->sumario->set('sum_fecha_hecho',$_POST['sum_fecha_hecho']);

                        $this->sumario->set('idde_externa',$_POST['idde_externa']);
                        $this->sumario->set('sum_tel_familiar',$_POST['sum_tel_familiar']);
                        $this->sumario->set('sum_menor',$_POST['sum_menor']);
                        $this->sumario->set('sum_juez',$_POST['sum_juez']);
                        $this->sumario->set('idfiscalia',$_POST['idfiscalia']);
                        $this->sumario->set('sum_tramite',ucwords(strtolower(trim($_POST['sum_tramite']))));
                        $this->sumario->set('sum_legajo',ucwords(strtolower(trim($_POST['sum_legajo']))));
                        $this->sumario->set('sum_resultado',$_POST['sum_resultado']);
                        $this->sumario->set('idcomisaria',$_POST['idcomisaria']);
                        $this->sumario->set('idvinculo',$_POST['idvinculo']);
                        $this->sumario->set('idde_externa',$_POST['idde_externa']);
                        $this->sumario->set('idsumario',$id);
                        $this->sumario->set('idusuario',$_SESSION['idusuario']);
                        $this->sumario->updateSumario();

                        header("Location: " . URL . "home/inicio");
                    }
                }


                public function ver($id){
                    $this->persona->set("id",$_POST['id']);
                    $datos = $this->persona->verPersona();
                    return $datos;
                }


                public function eliminar($id){
                    $this->sumario->set("idsumario",$id);
                    $this->sumario->eliminarSumario();
                    header("Location: " . URL . 'home/inicio/');
                }
    }
    $sumario = new sumarioController();

?>
