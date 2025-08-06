<?php namespace Models1;
include_once 'conexion.php';

	class Ficha34{
		private $idficha34;
		private $idficha;
		private $he_embar;
		private $he_celos;
		private $he_plabor;
		private $he_alcohol;
		private $he_autoco;
		private $he_impco;
		private $he_separ;
		private $he_otro;

		public function __construct(){

		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function agregarFicha34(){
                    $this->he_embar = !empty($this->he_embar) ? $this->he_embar : "NULL";
                    $this->he_celos = !empty($this->he_celos) ? $this->he_celos : "NULL";
                    $this->he_plabor = !empty($this->he_plabor) ? $this->he_plabor : "NULL";
                    $this->he_alcohol = !empty($this->he_alcohol) ? $this->he_alcohol : "NULL";
                    $this->he_autoco = !empty($this->he_autoco) ? $this->he_autoco : "NULL";
                    $this->he_impco = !empty($this->he_impco) ? $this->he_impco : "NULL";
                    $this->he_separ = !empty($this->he_separ) ? $this->he_separ : "NULL";
                    $this->he_otro = !empty($this->he_otro) ? $this->he_otro : " ";
                        $con = new Conexion();
			$sql = "INSERT INTO ficha34(idficha,he_embar, he_celos, he_plabor, he_alcohol, he_autoco, he_impco, he_separ, he_otro) VALUES ({$this->idficha},{$this->he_embar}, {$this->he_celos}, {$this->he_plabor}, {$this->he_alcohol}, {$this->he_autoco}, {$this->he_impco}, {$this->he_separ}, '{$this->he_otro}')";
			$con->consultaSimple($sql);
			//echo $sql;
		}

		public function eliminarFicha34(){
			$sql = "DELETE FROM ficha34 WHERE idficha34 = {$this->idficha34}";
			$this->con->consultaSimple($sql);
		}

		public function updateFicha34(){
                    $this->he_embar = !empty($this->he_embar) ? $this->he_embar : "NULL";
                    $this->he_celos = !empty($this->he_celos) ? $this->he_celos : "NULL";
                    $this->he_plabor = !empty($this->he_plabor) ? $this->he_plabor : "NULL";
                    $this->he_alcohol = !empty($this->he_alcohol) ? $this->he_alcohol : "NULL";
                    $this->he_autoco = !empty($this->he_autoco) ? $this->he_autoco : "NULL";
                    $this->he_impco = !empty($this->he_impco) ? $this->he_impco : "NULL";
                    $this->he_separ = !empty($this->he_separ) ? $this->he_separ : "NULL";
                    $this->he_otro = !empty($this->he_otro) ? $this->he_otro : " ";
                        $con = new Conexion();
			$sql = "UPDATE ficha34 SET he_embar = {$this->he_embar}, he_celos = {$this->he_celos}, he_plabor = {$this->he_plabor}, he_alcohol = {$this->he_alcohol}, he_autoco = {$this->he_autoco}, he_impco = {$this->he_impco}, he_separ = {$this->he_separ}, he_otro = '{$this->he_otro}' WHERE idficha = {$this->idficha}";
			$con->consultaSimple($sql);
		}

		public function verFicha34(){
                        $con = new Conexion();
			$sql = "SELECT * FROM ficha34 WHERE idficha = {$this->idficha}";
			$datos = $con->consultaRetorno($sql);
			$row = pg_fetch_assoc($datos);
			return $row;
		}

		public function hechosAsociadosDep($hecho){
			$con = new Conexion();

			switch ($hecho) {
				case 'embarazo':
					$ha_ev = "he_embar";
					break;
				
				case 'celos':
					$ha_ev = "he_celos";
					break;

				case 'laborales':
					$ha_ev = "he_plabor";
					break;

				case 'alcohol':
					$ha_ev = "he_alcohol";
					break;

				case 'autonomia':
					$ha_ev = "he_autoco";
					break;

				case 'impredecible':
					$ha_ev = "he_impco";
					break;

				case 'separacion':
					$ha_ev = "he_separ";
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
					JOIN ficha34 ON ficha34.idficha = ficha.idficha
					JOIN usuarios ON usuarios.idusuario = ficha.idusuario
					JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
					LEFT JOIN sino ON ficha34." . $ha_ev . " = sino.iddisponibilidad
					WHERE
						ficha.fec_consulta <= '{$this->fecha2}' 
					AND ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY
						sino.disp_descripcion,
						ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}
	
		public function hechosAsociados($hecho){
			$con = new Conexion();

			switch ($hecho) {
				case 'embarazo':
					$ha_ev = "he_embar";
					break;
				
				case 'celos':
					$ha_ev = "he_celos";
					break;

				case 'laborales':
					$ha_ev = "he_plabor";
					break;

				case 'alcohol':
					$ha_ev = "he_alcohol";
					break;

				case 'autonomia':
					$ha_ev = "he_autoco";
					break;

				case 'impredecible':
					$ha_ev = "he_impco";
					break;

				case 'separacion':
					$ha_ev = "he_separ";
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
					JOIN ficha34 ON ficha34.idficha = ficha.idficha
					JOIN usuarios ON usuarios.idusuario = ficha.idusuario
					JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
					LEFT JOIN sino ON ficha34." . $ha_ev . " = sino.iddisponibilidad
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