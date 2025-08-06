<?php namespace Models1;
include_once 'conexion.php';

	class Ficha35{
		private $idficha35;
		private $idficha;
		private $ind_lesfis;
		private $ind_intmed;
		private $ind_amuerte;
		private $ind_armas;
		private $ind_aborto;
		private $ind_idsuic;
		private $ind_insuic;
		private $ind_sexfor;
		private $ind_acoso;
		private $ind_antpen;
		private $ind_sust;

		public function __construct(){

		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function agregarFicha35(){
                    $this->ind_lesfis = !empty($this->ind_lesfis) ? $this->ind_lesfis : "NULL";
                    $this->ind_intmed = !empty($this->ind_intmed) ? $this->ind_intmed : "NULL";
                    $this->ind_amuerte = !empty($this->ind_amuerte) ? $this->ind_amuerte : "NULL";
                    $this->ind_armas = !empty($this->ind_armas) ? $this->ind_armas : "NULL";
                    $this->ind_aborto = !empty($this->ind_aborto) ? $this->ind_aborto : "NULL";
                    $this->ind_idsuic = !empty($this->ind_idsuic) ? $this->ind_idsuic : "NULL";
                    $this->ind_insuic = !empty($this->ind_insuic) ? $this->ind_insuic : "NULL";
                    $this->ind_sexfor = !empty($this->ind_sexfor) ? $this->ind_sexfor : "NULL";
                    $this->ind_acoso = !empty($this->ind_acoso) ? $this->ind_acoso : "NULL";
                    $this->ind_antpen = !empty($this->ind_antpen) ? $this->ind_antpen : "NULL";
                    $this->ind_sust = !empty($this->ind_sust) ? $this->ind_sust : "NULL";
                        $con = new Conexion();
			$sql = "INSERT INTO ficha35(idficha,ind_lesfis, ind_intmed, ind_amuerte, ind_armas, ind_aborto, ind_idsuic, ind_insuic, ind_sexfor, ind_acoso, ind_antpen, ind_sust) VALUES ({$this->idficha},{$this->ind_lesfis}, {$this->ind_intmed}, {$this->ind_amuerte}, {$this->ind_armas}, {$this->ind_aborto}, {$this->ind_idsuic}, {$this->ind_insuic}, {$this->ind_sexfor}, {$this->ind_acoso}, {$this->ind_antpen}, {$this->ind_sust})";
			$con->consultaSimple($sql);
			//echo $sql;
		}

		public function eliminarFicha35(){
			$sql = "DELETE FROM ficha35 WHERE idficha35 = {$this->idficha35}";
			$this->con->consultaSimple($sql);
		}

		public function updateFicha35(){
                    $this->ind_lesfis = !empty($this->ind_lesfis) ? $this->ind_lesfis : "NULL";
                    $this->ind_intmed = !empty($this->ind_intmed) ? $this->ind_intmed : "NULL";
                    $this->ind_amuerte = !empty($this->ind_amuerte) ? $this->ind_amuerte : "NULL";
                    $this->ind_armas = !empty($this->ind_armas) ? $this->ind_armas : "NULL";
                    $this->ind_aborto = !empty($this->ind_aborto) ? $this->ind_aborto : "NULL";
                    $this->ind_idsuic = !empty($this->ind_idsuic) ? $this->ind_idsuic : "NULL";
                    $this->ind_insuic = !empty($this->ind_insuic) ? $this->ind_insuic : "NULL";
                    $this->ind_sexfor = !empty($this->ind_sexfor) ? $this->ind_sexfor : "NULL";
                    $this->ind_acoso = !empty($this->ind_acoso) ? $this->ind_acoso : "NULL";
                    $this->ind_antpen = !empty($this->ind_antpen) ? $this->ind_antpen : "NULL";
                    $this->ind_sust = !empty($this->ind_sust) ? $this->ind_sust : "NULL";
                        $con = new Conexion();
                        $con->consultaSimple($sql);
			$sql = "UPDATE ficha35 SET ind_lesfis = {$this->ind_lesfis}, ind_intmed = {$this->ind_intmed}, ind_amuerte = {$this->ind_amuerte}, ind_armas = {$this->ind_armas}, ind_aborto = {$this->ind_aborto}, ind_idsuic = {$this->ind_idsuic}, ind_insuic = {$this->ind_insuic}, ind_sexfor = {$this->ind_sexfor}, ind_acoso = {$this->ind_acoso}, ind_antpen = {$this->ind_antpen}, ind_sust = {$this->ind_sust} WHERE idficha = {$this->idficha}";
			$con->consultaSimple($sql);
		}

		public function verFicha35(){
                        $con = new Conexion();
			$sql = "SELECT * FROM ficha35 WHERE idficha = {$this->idficha}";
			$datos = $con->consultaRetorno($sql);
			$row = pg_fetch_assoc($datos);
			return $row;
		}

		public function indicadoresRiesgoDep($indicador){
			$con = new Conexion();

			switch ($indicador) {
				case 'lesion':
					$ha_ev = "ind_lesfis";
					break;
				
				case 'intervencion':
					$ha_ev = "ind_intmed";
					break;

				case 'amenaza':
					$ha_ev = "ind_amuerte";
					break;

				case 'armas':
					$ha_ev = "ind_armas";
					break;

				case 'aborto':
					$ha_ev = "ind_aborto";
					break;

				case 'ideacion':
					$ha_ev = "ind_idsuic";
					break;

				case 'suicidio':
					$ha_ev = "ind_insuic";
					break;

				case 'violacion':
					$ha_ev = "ind_sexfor";
					break;

				case 'acoso':
					$ha_ev = "ind_acoso";
					break;

				case 'antecedentes':
					$ha_ev = "ind_antpen";
					break;

				case 'sustancias':
					$ha_ev = "ind_sust";
					break;
			}

			$sql = "SELECT
						CASE
					WHEN sino.disp_descripcion IS NULL THEN
						'Sin respuesta'
					ELSE
						sino.disp_descripcion
					END AS disp_descripcion,
					COUNT (ficha.per_dni) AS consultantes,
					(
						SELECT
							COUNT (ficha.per_dni)
						FROM
							ficha,
							institucion,
							usuarios
						WHERE
							ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta <= '{$this->fecha2}' 
						AND ficha.fec_consulta >= '{$this->fecha1}'
					) AS total,
					(
						round(
							COUNT (ficha.per_dni) / (
									SELECT
										COUNT (ficha.per_dni)
									FROM
										ficha,
										institucion,
										usuarios
									WHERE
										ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion 
									AND ficha.fec_consulta <= '{$this->fecha2}' 
									AND ficha.fec_consulta >= '{$this->fecha1}'
							) :: NUMERIC,
							3
						)
					) * 100 AS pnormal,
					institucion.ins_descripcion
					FROM
						ficha
					JOIN ficha35 ON ficha35.idficha = ficha.idficha
					JOIN usuarios ON usuarios.idusuario = ficha.idusuario
					JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
					LEFT JOIN sino ON ficha35." . $ha_ev . " = sino.iddisponibilidad
					WHERE
						ficha.fec_consulta <= '{$this->fecha2}' 
					AND ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY
						sino.disp_descripcion,
						ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}
	
		public function indicadoresRiesgo($indicador){
			$con = new Conexion();

			switch ($indicador) {
				case 'lesion':
					$ha_ev = "ind_lesfis";
					break;
				
				case 'intervencion':
					$ha_ev = "ind_intmed";
					break;

				case 'amenaza':
					$ha_ev = "ind_amuerte";
					break;

				case 'armas':
					$ha_ev = "ind_armas";
					break;

				case 'aborto':
					$ha_ev = "ind_aborto";
					break;

				case 'ideacion':
					$ha_ev = "ind_idsuic";
					break;

				case 'suicidio':
					$ha_ev = "ind_insuic";
					break;

				case 'violacion':
					$ha_ev = "ind_sexfor";
					break;

				case 'acoso':
					$ha_ev = "ind_acoso";
					break;

				case 'antecedentes':
					$ha_ev = "ind_antpen";
					break;

				case 'sustancias':
					$ha_ev = "ind_sust";
					break;
			}

			$sql = "SELECT
						CASE
					WHEN sino.disp_descripcion IS NULL THEN
						'Sin respuesta'
					ELSE
						sino.disp_descripcion
					END AS disp_descripcion,
					COUNT (ficha.per_dni) AS consultantes,
					(
						SELECT
							COUNT (ficha.per_dni)
						FROM
							ficha,
							institucion,
							usuarios
						WHERE
							ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta <= '{$this->fecha2}' 
						AND ficha.fec_consulta >= '{$this->fecha1}'
					) AS total,
					(
						round(
							COUNT (ficha.per_dni) / (
								SELECT
									COUNT (ficha.per_dni)
								FROM
									ficha,
									institucion,
									usuarios
								WHERE
									ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion 
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta <= '{$this->fecha2}' 
								AND ficha.fec_consulta >= '{$this->fecha1}'
							) :: NUMERIC,
							3
						)
					) * 100 AS pnormal,
					institucion.ins_descripcion
					FROM
						ficha
					JOIN ficha35 ON ficha35.idficha = ficha.idficha
					JOIN usuarios ON usuarios.idusuario = ficha.idusuario
					JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
					LEFT JOIN sino ON ficha35." . $ha_ev . " = sino.iddisponibilidad
					WHERE
						institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
					AND ficha.fec_consulta <= '{$this->fecha2}' 
					AND ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY
						sino.disp_descripcion,
						ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}
	}
?>