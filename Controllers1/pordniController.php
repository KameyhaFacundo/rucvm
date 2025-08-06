<?php namespace Controllers1;

//use Models1\Principal as Principal;
use Models1\Ficha as Ficha;
use Models1\Cautelar as Cautelar;
//use Models\Seccion as Seccion;

	class pordniController{
            
            private $pordni;
            private $ficha;
            private $cautelar;
            //private $seccion;
            
            public function __construct() {
                //$this->pordni = new Pordni();
                $this->cautelar = new Cautelar();
                $this->ficha = new Ficha();
                //$this->seccion = new Seccion();
            }


            public function por_dni_consultante(){
                    if($_POST){
                        $this->ficha->set("per_dni",$_POST['per_dni2']);
                        $datos = $this->ficha->verFichas();
                        $this->cautelar->set("per_dni",$_POST['per_dni2']);
                        $datos1 = $this->cautelar->verCautelares();
                        $datos2 = $this->cautelar->verSumarios();
                        $filas = pg_num_rows($datos);
                        //echo $filas;
                        if($filas > 0){
                            while($row = pg_fetch_array($datos)){
                                $this->ficha->set("per_dni",$row['per_dni']);
                                $this->ficha->set("consultante",$row['consultante']);
                                $this->ficha->set("fec_consulta",$row['fec_consulta']);
                                $this->ficha->set("fec_agresion",$row['fec_agresion']);
                                $this->ficha->set("ins_descripcion",$row['ins_descripcion']);
                                $this->ficha->agregarFichaTemporal();
                            }
                        }
                        $filas1 = pg_num_rows($datos2);
                        //echo $filas;
                        if($filas1 > 0){
                            while($row = pg_fetch_array($datos2)){
                                $this->ficha->set("per_dni",$row['per_dni']);
                                $this->ficha->set("consultante",$row['consultante']);
                                $this->ficha->set("fec_consulta",$row['fec_consulta']);
                                $this->ficha->set("fec_agresion",$row['fec_agresion']);
                                $this->ficha->set("ins_descripcion",$row['ins_descripcion']);
                                $this->ficha->set("ca_tipmedidas",$row['ca_tipmedidas']);
                                $this->ficha->agregarSumarioTemporal();
                            }
                        }
                        $datos = $this->ficha->verConsultasPorDni();
                        return $datos;
                    }else{
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                    }
            }   
	}
    $ficha = new pordniController();
        
?>