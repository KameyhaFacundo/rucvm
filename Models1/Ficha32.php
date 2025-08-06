<?php namespace Models1;
include_once 'conexion.php';

	class Ficha32{
		private $idficha32;
		private $idficha;
		private $anco_fisica;
		private $anco_psico;
		private $anco_absex;
		private $anco_tesvio;
		private $anco_aban;
		private $anco_otro;

		public function __construct(){

		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function agregarFicha32(){
                    $this->anco_fisica = !empty($this->anco_fisica) ? $this->anco_fisica : "NULL";
                    $this->anco_psico = !empty($this->anco_psico) ? $this->anco_psico : "NULL";
                    $this->anco_absex = !empty($this->anco_absex) ? $this->anco_absex : "NULL";
                    $this->anco_tesvio = !empty($this->anco_tesvio) ? $this->anco_tesvio : "NULL";
                    $this->anco_aban = !empty($this->anco_aban) ? $this->anco_aban : "NULL";
                    $this->anco_otro = !empty($this->anco_otro) ? $this->anco_otro : " ";
                        $con = new Conexion();
			$sql = "INSERT INTO ficha32(idficha, anco_fisica, anco_psico, anco_absex, anco_tesvio, anco_aban, anco_otro) VALUES ({$this->idficha},{$this->anco_fisica}, {$this->anco_psico}, {$this->anco_absex}, {$this->anco_tesvio}, {$this->anco_aban}, '{$this->anco_otro}')";
			$con->consultaSimple($sql);
			//echo $sql;
		}

		public function eliminarFicha32(){
			$sql = "DELETE FROM ficha32 WHERE idficha32 = {$this->idficha32}";
			$this->con->consultaSimple($sql);
		}

		public function updateFicha32(){
                    $this->anco_fisica = !empty($this->anco_fisica) ? $this->anco_fisica : "NULL";
                    $this->anco_psico = !empty($this->anco_psico) ? $this->anco_psico : "NULL";
                    $this->anco_absex = !empty($this->anco_absex) ? $this->anco_absex : "NULL";
                    $this->anco_tesvio = !empty($this->anco_tesvio) ? $this->anco_tesvio : "NULL";
                    $this->anco_aban = !empty($this->anco_aban) ? $this->anco_aban : "NULL";
                    $this->anco_otro = !empty($this->anco_otro) ? $this->anco_otro : " ";
                        $con = new Conexion();
			$sql = "UPDATE ficha32 SET anco_fisica = {$this->anco_fisica}, anco_psico = {$this->anco_psico}, anco_absex = {$this->anco_absex}, anco_tesvio = {$this->anco_tesvio}, anco_aban = {$this->anco_aban}, anco_otro = '{$this->anco_otro}' WHERE idficha = {$this->idficha}";
			$con->consultaSimple($sql);
		}

		public function verFicha32(){
                        $con = new Conexion();
			$sql = "SELECT * FROM ficha32 WHERE idficha = {$this->idficha}";
			$datos = $con->consultaRetorno($sql);
			$row = pg_fetch_assoc($datos);
			return $row;
		}
	}
?>