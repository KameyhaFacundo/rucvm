<?php namespace Models1;
include 'conexion.php';
	class Reincidencia{
		private $idreincidencia;
		private $idficha;
		private $re_fecha;
		private $re_denuncia;
		private $re_horario;
		private $seg_observacion;
		private $re_donde;
		private $idfiscalia;
		private $re_porque;

		public function __construct(){

		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function agregarReincidencia(){

		$this->seg_observacion = !empty($this->seg_observacion) ? $this->seg_observacion : " ";
		$this->re_donde = !empty($this->re_donde) ? $this->re_donde : " ";
		$this->idfiscalia = !empty($this->idfiscalia) ? $this->idfiscalia : "NULL";
		$this->re_porque = !empty($this->re_porque) ? $this->re_porque : " ";

            $con = new Conexion();
			$sql = "INSERT INTO reincidencia(idficha, re_fecha, re_horario, re_denuncia, re_donde, idfiscalia, re_porque, re_observacion) VALUES ({$this->idficha}, '{$this->re_fecha}', '{$this->re_horario}',{$this->re_denuncia} ,'{$this->re_donde}', {$this->idfiscalia}, '{$this->re_porque}', '{$this->re_observacion}')";
			//echo $sql;
			$con->consultaSimple($sql);
		}

		public function eliminarReincidencia(){
			$con = new Conexion();
			$sql = "DELETE FROM reincidencia WHERE idreincidencia = {$this->idreincidencia}";
			$con->consultaSimple($sql);
		}

		public function updateReincidencia(){

		$this->seg_observacion = !empty($this->seg_observacion) ? $this->seg_observacion : " ";
		$this->re_donde = !empty($this->re_donde) ? $this->re_donde : " ";
		$this->idfiscalia = !empty($this->idfiscalia) ? $this->idfiscalia : "NULL";
		$this->re_porque = !empty($this->re_porque) ? $this->re_porque : " ";
            $con = new Conexion();
			$sql = "UPDATE reincidencia SET re_fecha = '{$this->re_fecha}', re_horario = '{$this->re_horario}', re_denuncia = {$this->re_denuncia}, re_donde = '{$this->re_donde}', idfiscalia = {$this->idfiscalia}, re_porque = '{$this->re_porque}', re_observacion = '{$this->re_observacion}' WHERE idreincidencia = {$this->idreincidencia}";
			$con->consultaSimple($sql);
		}

		public function verReincidencias(){
            $con = new Conexion();
			$sql = "SELECT reincidencia.idreincidencia, reincidencia.re_fecha, ficha.fec_consulta, ficha.per_dni, CONCAT(CONCAT(persona.per_apellido,', '),persona.per_nombre) as consultante, ficha.agresor FROM persona, ficha, ficha31, reincidencia WHERE persona.per_dni = ficha.per_dni AND ficha.idficha = ficha31.idficha AND ficha.idficha = reincidencia.idficha AND reincidencia.idficha = ". $_GET['idficha'] ." ORDER BY reincidencia.re_fecha DESC";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function verReincidencia(){
            $con = new Conexion();
			$sql = "SELECT * FROM persona, ficha, ficha31, reincidencia WHERE persona.per_dni = ficha.per_dni AND ficha.idficha = ficha31.idficha AND ficha.idficha = reincidencia.idficha AND reincidencia.idreincidencia = {$this->idreincidencia}";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function fechaFicha(){
            $con = new Conexion();
			$sql = "SELECT ficha.fec_consulta FROM ficha WHERE ficha.idficha = ". $_GET['idficha'] ."";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function traerFichas(){
			$con = new Conexion();
			$sql = "SELECT * FROM persona, ficha, ficha31 WHERE persona.per_dni = ficha.per_dni AND ficha.idficha = ficha31.idficha AND ficha.idficha = ". $_GET['idficha'] ."";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}
	}
?>