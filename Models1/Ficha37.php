<?php namespace Models1;
include_once 'conexion.php';

	class Ficha37{
		private $idficha37;
		private $idficha;
		private $des_hijos;
		private $des_golpe;
		private $des_conoc;
		private $des_infide;
		private $des_solic;
		private $des_limite;
		private $des_legal;
		private $des_deriv;
		private $des_miedo;
		private $des_otro;

		public function __construct(){

		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function agregarFicha37(){
                    $this->des_hijos = !empty($this->des_hijos) ? $this->des_hijos : "NULL";
                    $this->des_golpe = !empty($this->des_golpe) ? $this->des_golpe : "NULL";
                    $this->des_conoc = !empty($this->des_conoc) ? $this->des_conoc : "NULL";
                    $this->des_infide = !empty($this->des_infide) ? $this->des_infide : "NULL";
                    $this->des_solic = !empty($this->des_solic) ? $this->des_solic : "NULL";
                    $this->des_limite = !empty($this->des_limite) ? $this->des_limite : "NULL";
                    $this->des_legal = !empty($this->des_legal) ? $this->des_legal : "NULL";
                    $this->des_deriv = !empty($this->des_deriv) ? $this->des_deriv : "NULL";
                    $this->des_miedo = !empty($this->des_miedo) ? $this->des_miedo : "NULL";
                    $this->des_otro = !empty($this->des_otro) ? $this->des_otro : " ";
                        $con = new Conexion();
			$sql = "INSERT INTO ficha37(idficha, des_hijos, des_golpe, des_conoc, des_infide, des_solic, des_limite, des_legal, des_deriv, des_miedo, des_otro) VALUES ({$this->idficha},{$this->des_hijos}, {$this->des_golpe}, {$this->des_conoc}, {$this->des_infide}, {$this->des_solic}, {$this->des_limite}, {$this->des_legal}, {$this->des_deriv}, {$this->des_miedo}, '{$this->des_otro}')";
                        $con->consultaSimple($sql);
                        //echo $sql;
		}

		public function eliminarFicha37(){
			$sql = "DELETE FROM ficha37 WHERE idficha37 = {$this->idficha37}";
			$this->con->consultaSimple($sql);
		}

		public function updateFicha37(){
                    $this->des_hijos = !empty($this->des_hijos) ? $this->des_hijos : "NULL";
                    $this->des_golpe = !empty($this->des_golpe) ? $this->des_golpe : "NULL";
                    $this->des_conoc = !empty($this->des_conoc) ? $this->des_conoc : "NULL";
                    $this->des_infide = !empty($this->des_infide) ? $this->des_infide : "NULL";
                    $this->des_solic = !empty($this->des_solic) ? $this->des_solic : "NULL";
                    $this->des_limite = !empty($this->des_limite) ? $this->des_limite : "NULL";
                    $this->des_legal = !empty($this->des_legal) ? $this->des_legal : "NULL";
                    $this->des_deriv = !empty($this->des_deriv) ? $this->des_deriv : "NULL";
                    $this->des_miedo = !empty($this->des_miedo) ? $this->des_miedo : "NULL";
                    $this->des_otro = !empty($this->des_otro) ? $this->des_otro : " ";
                        $con = new Conexion();
			$sql = "UPDATE ficha37 SET des_hijos = {$this->des_hijos}, des_golpe = {$this->des_golpe}, des_conoc = {$this->des_conoc}, des_infide = {$this->des_infide}, des_solic = {$this->des_solic}, des_limite = {$this->des_limite}, des_legal = {$this->des_legal}, des_deriv = {$this->des_deriv}, des_miedo = {$this->des_miedo}, des_otro = '{$this->des_otro}' WHERE idficha = {$this->idficha}";
			$con->consultaSimple($sql);
		}

		public function verFicha37(){
                        $con = new Conexion();
			$sql = "SELECT * FROM ficha37 WHERE idficha = {$this->idficha}";
			$datos = $con->consultaRetorno($sql);
			$row = pg_fetch_assoc($datos);
			return $row;
		}

		public function desencadenantesConsultaDep($desencadenante){
			$con = new Conexion();

			switch ($desencadenante) {
				case 'hijos':
					$des = "des_hijos";
					break;
				
				case 'golpe':
					$des = "des_golpe";
					break;

				case 'conocimiento':
					$des = "des_conoc";
					break;

				case 'infidelidad':
					$des = "des_infide";
					break;

				case 'solicitud':
					$des = "des_solic";
					break;

				case 'limite':
					$des = "des_limite";
					break;

				case 'miedo':
					$des = "des_miedo";
					break;

				case 'legal':
					$des = "des_legal";
					break;

				case 'derivacion':
					$des = "des_deriv";
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
					JOIN ficha37 ON ficha37.idficha = ficha.idficha
					JOIN usuarios ON usuarios.idusuario = ficha.idusuario
					JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
					LEFT JOIN sino ON ficha37." . $des . " = sino.iddisponibilidad
					WHERE
						ficha.fec_consulta <= '{$this->fecha2}' 
					AND ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY
						sino.disp_descripcion,
						ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}
	
		public function desencadenantesConsulta($desencadenante){
			$con = new Conexion();

			switch ($desencadenante) {
				case 'hijos':
					$des = "des_hijos";
					break;
				
				case 'golpe':
					$des = "des_golpe";
					break;

				case 'conocimiento':
					$des = "des_conoc";
					break;

				case 'infidelidad':
					$des = "des_infide";
					break;

				case 'solicitud':
					$des = "des_solic";
					break;

				case 'limite':
					$des = "des_limite";
					break;

				case 'miedo':
					$des = "des_miedo";
					break;

				case 'legal':
					$des = "des_legal";
					break;

				case 'derivacion':
					$des = "des_deriv";
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
					JOIN ficha37 ON ficha37.idficha = ficha.idficha
					JOIN usuarios ON usuarios.idusuario = ficha.idusuario
					JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
					LEFT JOIN sino ON ficha37." . $des . " = sino.iddisponibilidad
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