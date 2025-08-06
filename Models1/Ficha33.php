<?php namespace Models1;
include_once 'conexion.php';

	class Ficha33{
		private $idficha33;
		private $idficha;
		private $anag_fisica;
		private $anag_psico;
		private $anag_absex;
		private $anag_tesvio;
		private $anag_aban;
		private $anag_otro;

		public function __construct(){

		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function agregarFicha33(){
                    $this->anag_fisica = !empty($this->anag_fisica) ? $this->anag_fisica : "NULL";
                    $this->anag_psico = !empty($this->anag_psico) ? $this->anag_psico : "NULL";
                    $this->anag_absex = !empty($this->anag_absex) ? $this->anag_absex : "NULL";
                    $this->anag_tesvio = !empty($this->anag_tesvio) ? $this->anag_tesvio : "NULL";
                    $this->anag_aban = !empty($this->anag_aban) ? $this->anag_aban : "NULL";
                    $this->anag_otro = !empty($this->anag_otro) ? $this->anag_otro : " ";
                        $con = new Conexion();
			$sql = "INSERT INTO ficha33(idficha,anag_fisica, anag_psico, anag_absex, anag_tesvio, anag_aban, anag_otro) VALUES ({$this->idficha},{$this->anag_fisica}, {$this->anag_psico}, {$this->anag_absex}, {$this->anag_tesvio}, {$this->anag_aban}, '{$this->anag_otro}')";
			$con->consultaSimple($sql);
			//echo $sql;
		}

		public function eliminarFicha33(){
			$sql = "DELETE FROM ficha33 WHERE idficha33 = {$this->idficha33}";
			$this->con->consultaSimple($sql);
		}

		public function updateFicha33(){
                    $this->anag_fisica = !empty($this->anag_fisica) ? $this->anag_fisica : "NULL";
                    $this->anag_psico = !empty($this->anag_psico) ? $this->anag_psico : "NULL";
                    $this->anag_absex = !empty($this->anag_absex) ? $this->anag_absex : "NULL";
                    $this->anag_tesvio = !empty($this->anag_tesvio) ? $this->anag_tesvio : "NULL";
                    $this->anag_aban = !empty($this->anag_aban) ? $this->anag_aban : "NULL";
                    $this->anag_otro = !empty($this->anag_otro) ? $this->anag_otro : " ";
                        $con = new Conexion();
			$sql = "UPDATE ficha33 SET anag_fisica = {$this->anag_fisica}, anag_psico = {$this->anag_psico}, anag_absex = {$this->anag_absex}, anag_tesvio = {$this->anag_tesvio}, anag_aban = {$this->anag_aban}, anag_otro = '{$this->anag_otro}' WHERE idficha = {$this->idficha}";
                        $con->consultaSimple($sql);
		}

		public function verFicha33(){
                        $con = new Conexion();
			$sql = "SELECT * FROM ficha33 WHERE idficha = {$this->idficha}";
			$datos = $con->consultaRetorno($sql);
			$row = pg_fetch_assoc($datos);
			return $row;
		}
	}
?>