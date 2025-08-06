<?php namespace Models1;
include_once 'conexion.php';

	class Ficha36{
		private $idficha36;
		private $idficha;
		private $t_suenio;
		private $t_alimen;
		private $t_digest;
		private $t_antidep;
		private $t_aldrog;
		private $t_its;
		private $t_otro;

		public function __construct(){

		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function agregarFicha36(){
                    $this->t_suenio = !empty($this->t_suenio) ? $this->t_suenio : "NULL";
                    $this->t_alimen = !empty($this->t_alimen) ? $this->t_alimen : "NULL";
                    $this->t_digest = !empty($this->t_digest) ? $this->t_digest : "NULL";
                    $this->t_antidep = !empty($this->t_antidep) ? $this->t_antidep : "NULL";
                    $this->t_aldrog = !empty($this->t_aldrog) ? $this->t_aldrog : "NULL";
                    $this->t_its = !empty($this->t_its) ? $this->t_its : "NULL";
                    $this->t_otro = !empty($this->t_otro) ? $this->t_otro : " ";

                        $con = new Conexion();
			$sql = "INSERT INTO ficha36(idficha,t_suenio, t_alimen, t_digest, t_antidep, t_aldrog, t_its, t_otro) VALUES ({$this->idficha},{$this->t_suenio}, {$this->t_alimen}, {$this->t_digest}, {$this->t_antidep}, {$this->t_aldrog}, {$this->t_its}, '{$this->t_otro}')";
			$con->consultaSimple($sql);
			//echo $sql;
		}

		public function eliminarFicha36(){
			$sql = "DELETE FROM ficha36 WHERE idficha36 = {$this->idficha36}";
			$this->con->consultaSimple($sql);
		}

		public function updateFicha36(){
                    $this->t_suenio = !empty($this->t_suenio) ? $this->t_suenio : "NULL";
                    $this->t_alimen = !empty($this->t_alimen) ? $this->t_alimen : "NULL";
                    $this->t_digest = !empty($this->t_digest) ? $this->t_digest : "NULL";
                    $this->t_antidep = !empty($this->t_antidep) ? $this->t_antidep : "NULL";
                    $this->t_aldrog = !empty($this->t_aldrog) ? $this->t_aldrog : "NULL";
                    $this->t_its = !empty($this->t_its) ? $this->t_its : "NULL";
                    $this->t_otro = !empty($this->t_otro) ? $this->t_otro : " ";
                    
                        $con = new Conexion();
                        $con->consultaSimple($sql);
			$sql = "UPDATE ficha36 SET t_suenio = {$this->t_suenio}, t_alimen = {$this->t_alimen}, t_digest = {$this->t_digest}, t_antidep = {$this->t_antidep}, t_aldrog = {$this->t_aldrog}, t_its = {$this->t_its}, t_otro = '{$this->t_otro}' WHERE idficha = {$this->idficha}";
			$con->consultaSimple($sql);
		}

		public function verFicha36(){
                        $con = new Conexion();
			$sql = "SELECT * FROM ficha36 WHERE idficha = {$this->idficha}";
			$datos = $con->consultaRetorno($sql);
			$row = pg_fetch_assoc($datos);
			return $row;
		}
	}
?>