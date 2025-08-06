<?php namespace Models1;
include 'conexion.php';
	class Seguimiento{
		private $idseguimiento;
		private $idficha;
		private $seg_fecha;
		private $seg_denuncia;
		private $seg_violencia;
		private $seg_derivacion;
		private $seg_observacion;
		private $seg_proteccion;
		private $seg_vioprotec;
		private $seg_medidas;
		private $seg_regcom;
		private $seg_regalim;
		private $seg_divorcio;
		private $seg_reshijos;
		private $seg_cv;
		private $seg_trabajo;
		private $seg_habita;
		private $seg_mobiliario;
		private $seg_medica;
		private $seg_vaesc;
		private $seg_tramdni;
		private $seg_modalim;
		private $seg_asisecon;
		private $seg_monto;
		private $seg_solhabita;
		private $seg_entmobila;
		private $seg_entmedica;
		private $seg_convaesc;
		private $seg_pasajes;
		private $seg_pension;
		private $seg_cualpen;
		private $seg_ppsocial;

		public function __construct(){

		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function agregarSeguimiento(){

		$this->seg_observacion = !empty($this->seg_observacion) ? $this->seg_observacion : " ";
		$this->seg_proteccion = !empty($this->seg_proteccion) ? $this->seg_proteccion : "NULL";
		$this->seg_vioprotec = !empty($this->seg_vioprotec) ? $this->seg_vioprotec : "NULL";
		$this->seg_medidas = !empty($this->seg_medidas) ? $this->seg_medidas : "NULL";
		$this->seg_regcom = !empty($this->seg_regcom) ? $this->seg_regcom : "NULL";
		$this->seg_regalim = !empty($this->seg_regalim) ? $this->seg_regalim : "NULL";
		$this->seg_divorcio = !empty($this->seg_divorcio) ? $this->seg_divorcio : "NULL";
		$this->seg_reshijos = !empty($this->seg_reshijos) ? $this->seg_reshijos : "NULL";
		$this->seg_cv = !empty($this->seg_cv) ? $this->seg_cv : "NULL";
		$this->seg_trabajo = !empty($this->seg_trabajo) ? $this->seg_trabajo : "NULL";
		$this->seg_habita = !empty($this->seg_habita) ? $this->seg_habita : "NULL";
		$this->seg_mobiliario = !empty($this->seg_mobiliario) ? $this->seg_mobiliario : "NULL";
		$this->seg_medica = !empty($this->seg_medica) ? $this->seg_medica : "NULL";
		$this->seg_vaesc = !empty($this->seg_vaesc) ? $this->seg_vaesc : "NULL";
		$this->seg_tramdni = !empty($this->seg_tramdni) ? $this->seg_tramdni : "NULL";
		$this->seg_modalim = !empty($this->seg_modalim) ? $this->seg_modalim : "NULL";
		$this->seg_asisecon = !empty($this->seg_asisecon) ? $this->seg_asisecon : "NULL";
		$this->seg_monto = !empty($this->seg_monto) ? $this->seg_monto : "NULL";
		$this->seg_solhabita = !empty($this->seg_solhabita) ? $this->seg_solhabita : "NULL";
		$this->seg_entmobila = !empty($this->seg_entmobila) ? $this->seg_entmobila : "NULL";
		$this->seg_entmedica = !empty($this->seg_entmedica) ? $this->seg_entmedica : "NULL";
		$this->seg_convaesc = !empty($this->seg_convaesc) ? $this->seg_convaesc : "NULL";
		$this->seg_pasajes = !empty($this->seg_pasajes) ? $this->seg_pasajes : "NULL";
		$this->seg_pension = !empty($this->seg_pension) ? $this->seg_pension : "NULL";
		$this->seg_cualpen = !empty($this->seg_cualpen) ? $this->seg_cualpen : " ";
		$this->seg_ppsocial = !empty($this->seg_ppsocial) ? $this->seg_ppsocial : "NULL";

            $con = new Conexion();
			$sql = "INSERT INTO seguimiento(idficha, seg_fecha, seg_denuncia, seg_violencia, seg_derivacion, seg_observacion, seg_proteccion, seg_vioprotec, seg_medidas, seg_regcom, seg_regalim, seg_divorcio, seg_reshijos, seg_cv, seg_trabajo, seg_habita, seg_mobiliario, seg_medica, seg_vaesc, seg_tramdni, seg_modalim, seg_asisecon, seg_monto, seg_solhabita, seg_entmobila, seg_entmedica, seg_convaesc, seg_pasajes, seg_pension, seg_ppsocial, seg_cualpen) VALUES ({$this->idficha}, '{$this->seg_fecha}', {$this->seg_denuncia},{$this->seg_violencia} ,{$this->seg_derivacion}, '{$this->seg_observacion}', {$this->seg_proteccion}, {$this->seg_vioprotec}, {$this->seg_medidas}, {$this->seg_regcom}, {$this->seg_regalim}, {$this->seg_divorcio}, {$this->seg_reshijos}, {$this->seg_cv}, {$this->seg_trabajo}, {$this->seg_habita}, {$this->seg_mobiliario}, {$this->seg_medica}, {$this->seg_vaesc}, {$this->seg_tramdni}, {$this->seg_modalim}, {$this->seg_asisecon}, {$this->seg_monto}, {$this->seg_solhabita}, {$this->seg_entmobila}, {$this->seg_entmedica}, {$this->seg_convaesc}, {$this->seg_pasajes}, {$this->seg_pension}, {$this->seg_ppsocial}, '{$this->seg_cualpen}')";
			$con->consultaSimple($sql);
			//echo $sql;
		}

		public function eliminarSeguimiento(){
			$con = new Conexion();
			$sql = "DELETE FROM seguimiento WHERE idseguimiento = {$this->idseguimiento}";
			$con->consultaSimple($sql);
		}

		public function updateSeguimiento(){

		$this->seg_observacion = !empty($this->seg_observacion) ? $this->seg_observacion : " ";
		$this->seg_proteccion = !empty($this->seg_proteccion) ? $this->seg_proteccion : "NULL";
		$this->seg_vioprotec = !empty($this->seg_vioprotec) ? $this->seg_vioprotec : "NULL";
		$this->seg_medidas = !empty($this->seg_medidas) ? $this->seg_medidas : "NULL";
		$this->seg_regcom = !empty($this->seg_regcom) ? $this->seg_regcom : "NULL";
		$this->seg_regalim = !empty($this->seg_regalim) ? $this->seg_regalim : "NULL";
		$this->seg_divorcio = !empty($this->seg_divorcio) ? $this->seg_divorcio : "NULL";
		$this->seg_reshijos = !empty($this->seg_reshijos) ? $this->seg_reshijos : "NULL";
		$this->seg_cv = !empty($this->seg_cv) ? $this->seg_cv : "NULL";
		$this->seg_trabajo = !empty($this->seg_trabajo) ? $this->seg_trabajo : "NULL";
		$this->seg_habita = !empty($this->seg_habita) ? $this->seg_habita : "NULL";
		$this->seg_mobiliario = !empty($this->seg_mobiliario) ? $this->seg_mobiliario : "NULL";
		$this->seg_medica = !empty($this->seg_medica) ? $this->seg_medica : "NULL";
		$this->seg_vaesc = !empty($this->seg_vaesc) ? $this->seg_vaesc : "NULL";
		$this->seg_tramdni = !empty($this->seg_tramdni) ? $this->seg_tramdni : "NULL";
		$this->seg_modalim = !empty($this->seg_modalim) ? $this->seg_modalim : "NULL";
		$this->seg_asisecon = !empty($this->seg_asisecon) ? $this->seg_asisecon : "NULL";
		$this->seg_monto = !empty($this->seg_monto) ? $this->seg_monto : "NULL";
		$this->seg_solhabita = !empty($this->seg_solhabita) ? $this->seg_solhabita : "NULL";
		$this->seg_entmobila = !empty($this->seg_entmobila) ? $this->seg_entmobila : "NULL";
		$this->seg_entmedica = !empty($this->seg_entmedica) ? $this->seg_entmedica : "NULL";
		$this->seg_convaesc = !empty($this->seg_convaesc) ? $this->seg_convaesc : "NULL";
		$this->seg_pasajes = !empty($this->seg_pasajes) ? $this->seg_pasajes : "NULL";
		$this->seg_pension = !empty($this->seg_pension) ? $this->seg_pension : "NULL";
		$this->seg_cualpen = !empty($this->seg_cualpen) ? $this->seg_cualpen : " ";
		$this->seg_ppsocial = !empty($this->seg_ppsocial) ? $this->seg_ppsocial : "NULL";
            $con = new Conexion();
			$sql = "UPDATE seguimiento SET idficha = {$this->idficha}, seg_denuncia = {$this->seg_denuncia}, seg_derivacion = {$this->seg_derivacion}, seg_observacion = '{$this->seg_observacion}', seg_proteccion = {$this->seg_proteccion}, seg_vioprotec = {$this->seg_vioprotec}, seg_medidas = {$this->seg_medidas}, seg_regcom = {$this->seg_regcom}, seg_regalim = {$this->seg_regalim}, seg_divorcio = {$this->seg_divorcio}, seg_reshijos = {$this->seg_reshijos}, seg_cv = {$this->seg_cv}, seg_trabajo = {$this->seg_trabajo}, seg_habita = {$this->seg_habita}, seg_mobiliario = {$this->seg_mobiliario}, seg_medica = {$this->seg_medica}, seg_vaesc = {$this->seg_vaesc}, seg_tramdni = {$this->seg_tramdni}, seg_modalim = {$this->seg_modalim}, seg_asisecon = {$this->seg_asisecon}, seg_monto = {$this->seg_monto}, seg_solhabita = {$this->seg_solhabita}, seg_entmobila = {$this->seg_entmobila}, seg_entmedica = {$this->seg_entmedica}, seg_convaesc = {$this->seg_convaesc}, seg_pasajes = {$this->seg_pasajes}, seg_pension = {$this->seg_pension}, seg_violencia = {$this->seg_violencia}, seg_ppsocial = {$this->seg_ppsocial},seg_cualpen = '{$this->seg_cualpen}' WHERE idseguimiento = {$this->idseguimiento}";
			$con->consultaSimple($sql);
			echo $sql;
		}

		public function verSeguimientos(){
            $con = new Conexion();
			$sql = "SELECT seguimiento.idseguimiento, seguimiento.seg_fecha, CONCAT(CONCAT(persona.per_apellido,', '),persona.per_nombre) as consultante FROM seguimiento, persona, ficha WHERE persona.per_dni = ficha.per_dni AND seguimiento.idficha = ficha.idficha AND ficha.idficha = {$this->idficha} ORDER BY seg_fecha DESC";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function verSeguimiento(){
            $con = new Conexion();
			$sql = "SELECT * FROM seguimiento, ficha WHERE ficha.idficha = seguimiento.idficha AND seguimiento.idseguimiento = {$this->idseguimiento}";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function fechaFicha(){
            $con = new Conexion();
			$sql = "SELECT ficha.fec_consulta FROM ficha WHERE ficha.idficha = ". $_GET['idficha'] ."";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}
	}
?>