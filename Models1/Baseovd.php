<?php namespace Models1;
include_once 'conexion.php';
	
	//use Models1\conexion as Con;
	class Baseovd{
//Estado: Pendiente(P), Finalizado(F)


		public function __construct(){
			//$this->conexion = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function add(){
                    
                    
                        $con = new Conexion();
			$sql = "INSERT INTO basesovd(imagen, fecha, estado, observacion) VALUES ('{$this->imagen}', '{$this->fecha}', '{$this->estado}', '{$this->observacion}')";
                        $con->consultaSimple($sql);
                        //echo $sql;
		}
                
                public function listar(){
                    $con = new Conexion();
			$sql = "SELECT idbaseovd, imagen, fecha, observacion FROM basesovd WHERE estado='P' ORDER BY fecha DESC";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}
                
                public function listarFinalizadas(){
                    $con = new Conexion();
			$sql = "SELECT idbaseovd, imagen, fecha, observacion FROM basesovd WHERE estado='F' ORDER BY fecha DESC";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

	        public function delete(){
                        $con = new Conexion();
			$sql = "DELETE FROM basesovd WHERE idbaseovd = {$this->idbaseovd}";
			$con->consultaSimple($sql);
            unlink($_SERVER["DOCUMENT_ROOT"]. DS ."rucvm". DS ."ArchivoOVD" . DS .$this->imagen);
		}

		public function edit(){
                        $con = new Conexion();
			$sql = "UPDATE basesovd SET fecha = '{$this->fecha}',observacion = '{$this->observacion}' WHERE idbaseovd = {$this->idbaseovd}";
                        //echo $sql;
                        $con->consultaSimple($sql);
		}
                
                public function finish(){
                    
                        $con = new Conexion();
			$sql = "UPDATE basesovd SET estado = '{$this->estado}' WHERE idbaseovd = {$this->idbaseovd}";
                        $con->consultaSimple($sql);
		}
                
                public function view(){
                    
			$sql = "SELECT idbaseovd, imagen, fecha, estado, observacion FROM basesovd WHERE idbaseovd = {$this->idbaseovd}";
                        $con = new Conexion();
			$datos = $con->consultaRetorno($sql);
                        //$datos = $this->con->consultaRetorno($sql);
                        $row = pg_fetch_assoc($datos);
			return $row;

		}

		
	}
?>