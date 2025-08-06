<?php namespace Controllers1;

use Models1\Sumario as Sumario;

	class homeController{
            
            private $sumario;
            
            public function __construct() {
                $this->sumario = new Sumario();
            }


            public function index(){

            } 
            
            public function inicio(){
                if($_POST){
                    // echo '<div id="loader">
                    //         <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                    //     </div>';
                    if($_POST['sum_numero1']){
                        $this->sumario->set("sum_numero",$_POST['sum_numero1']);
                        $datos = $this->sumario->verSumario();
                        return $datos;
                    }
                }else{
                    if($_SESSION['idinstitucion'] == 16){
                        $datos = $this->sumario->getSumarios();
                        
                        unset($_SESSION['p_per_dni']);
                        unset($_SESSION['p_per_apellido']);
                        unset($_SESSION['p_per_nombre']);
                        unset($_SESSION['sum_fecha']);
                        unset($_SESSION['sum_fecha_hecho']);
                        unset($_SESSION['sum_juez']);
                        unset($_SESSION['idfiscalia']);                       
                        unset($_SESSION['sum_tramite']);
                        unset($_SESSION['sum_juez']);
                        unset($_SESSION['idtipo_medida']);
                        unset($_SESSION['sum_tel_familiar']);
                        unset($_SESSION['idcomisaria']);
                        unset($_SESSION['sum_legajo']);
                        unset($_SESSION['idcausa']);
                        unset($_SESSION['per_dni_agresor']);
                        unset($_SESSION['per_apellido_agresor']);
                        unset($_SESSION['per_nombre_agresor']);
                        unset($_SESSION['per_domicilio_agresor']);
                        unset($_SESSION['per_celular_agresor']);
                        unset($_SESSION['bandera']);
                        return $datos;
                    }
                }
            }
     
    }
    $home = new homeController();
        
?>