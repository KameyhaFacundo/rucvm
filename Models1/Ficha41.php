<?php namespace Models1;
include_once 'conexion.php';
	
	class Ficha41{
		private $idficha41;
		private $idficha;
		private $me_acerca;
		private $me_perten;
		private $me_alimen;
		private $me_exhog;
		private $me_resper;
		private $me_visitas;
		private $me_prohib;
		private $me_psico;
		private $me_otra;
		private $me_prisionprev;
		private $me_dual;

		public function __construct(){

		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function agregarFicha41(){
                    $this->me_acerca = !empty($this->me_acerca) ? $this->me_acerca : "NULL";
                    $this->me_perten = !empty($this->me_perten) ? $this->me_perten : "NULL";
                    $this->me_alimen = !empty($this->me_alimen) ? $this->me_alimen : "NULL";
                    $this->me_exhog = !empty($this->me_exhog) ? $this->me_exhog : "NULL";
                    $this->me_resper = !empty($this->me_resper) ? $this->me_resper : "NULL";
                    $this->me_visitas = !empty($this->me_visitas) ? $this->me_visitas : "NULL";
                    $this->me_prohib = !empty($this->me_prohib) ? $this->me_prohib : "NULL";
                    $this->me_psico = !empty($this->me_psico) ? $this->me_psico : "NULL";
                    $this->me_otra = !empty($this->me_otra) ? $this->me_otra : " ";
					$this->me_dual = !empty($this->me_dual) ? $this->me_dual : "NULL";
					$this->me_prisionprev = !empty($this->me_prisionprev) ? $this->me_prisionprev : "NULL";
                        $con = new Conexion();
			$sql = "INSERT INTO ficha41(idficha,me_acerca, me_perten, me_alimen, me_exhog, me_resper, me_visitas, me_prohib, me_psico, me_otra, me_dual, me_prisionprev) VALUES ({$this->idficha},{$this->me_acerca}, {$this->me_perten}, {$this->me_alimen}, {$this->me_exhog}, {$this->me_resper}, {$this->me_visitas}, {$this->me_prohib}, {$this->me_psico}, '{$this->me_otra}', {$this->me_dual}, {$this->me_prisionprev})";
			$con->consultaSimple($sql);
			//echo $sql;
		}

		public function eliminarFicha41(){
			$sql = "DELETE FROM ficha41 WHERE idficha41 = {$this->idficha41}";
			$this->con->consultaSimple($sql);
		}

		public function updateFicha41(){
                    $this->me_acerca = !empty($this->me_acerca) ? $this->me_acerca : "NULL";
                    $this->me_perten = !empty($this->me_perten) ? $this->me_perten : "NULL";
                    $this->me_alimen = !empty($this->me_alimen) ? $this->me_alimen : "NULL";
                    $this->me_exhog = !empty($this->me_exhog) ? $this->me_exhog : "NULL";
                    $this->me_resper = !empty($this->me_resper) ? $this->me_resper : "NULL";
                    $this->me_visitas = !empty($this->me_visitas) ? $this->me_visitas : "NULL";
                    $this->me_prohib = !empty($this->me_prohib) ? $this->me_prohib : "NULL";
                    $this->me_psico = !empty($this->me_psico) ? $this->me_psico : "NULL";
                    $this->me_otra = !empty($this->me_otra) ? $this->me_otra : " ";
					$this->me_dual = !empty($this->me_dual) ? $this->me_dual : "NULL";
					$this->me_prisionprev = !empty($this->me_prisionprev) ? $this->me_prisionprev : "NULL";
                        $con = new Conexion();
			$sql = "UPDATE ficha41 SET me_acerca = {$this->me_acerca}, me_perten = {$this->me_perten}, me_alimen = {$this->me_alimen}, me_exhog = {$this->me_exhog}, me_resper = {$this->me_resper}, me_visitas = {$this->me_visitas}, me_prohib = {$this->me_prohib}, me_psico = {$this->me_psico}, me_otra = '{$this->me_otra}', me_dual = {$this->me_dual}, me_prisionprev = {$this->me_prisionprev} WHERE idficha = {$this->idficha}";
			$con->consultaSimple($sql);
		}

		public function verFicha41(){
                        $con = new Conexion();
			$sql = "SELECT * FROM ficha41 WHERE idficha = {$this->idficha}";
			$datos = $con->consultaRetorno($sql);
			$row = pg_fetch_assoc($datos);
			return $row;
		}

		public function medidasJudicialesDep(){
			$con = new Conexion();

			$sql = "SELECT
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_otra IS NOT NULL
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS otra,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_acerca = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS acercamiento,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_perten = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS pertenencias,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_alimen = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS alimentos,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_exhog = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS exclusion,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_resper = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS restitucion,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_visitas = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS visitas,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_prohib = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS prohibicion,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_psico = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS psiquiatrica,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_dual = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS dual,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_prisionprev = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS prision,
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
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS total,
					(
						round(
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) / (
								(
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_otra IS NOT NULL
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_acerca = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_perten = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_alimen = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_exhog = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_resper = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_visitas = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_prohib = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_psico = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_dual = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_prisionprev = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
							) :: NUMERIC,
							3
						)
					) * 100 AS potra,
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_acerca = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)* 100 AS pacercamiento,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_perten = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)
				) * 100 AS ppertenencias,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_alimen = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)
				) * 100 AS palimentos,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_exhog = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)
				) * 100 AS pexclusion,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_resper = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)
				) * 100 AS prestitucion,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_visitas = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)
				) * 100 AS pvisitas,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_prohib = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)
				) * 100 AS pprohibicion,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_psico = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)
				) * 100 AS ppsiquiatrica,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_dual = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)
				) * 100 AS pdual,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_prisionprev = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)
				) * 100 AS pprision,
				institucion.ins_descripcion
				FROM
					ficha41,
					ficha,
					institucion,
					usuarios
				WHERE
					ficha41.idficha = ficha.idficha
				AND ficha.idusuario = usuarios.idusuario
				AND usuarios.idinstitucion = institucion.idinstitucion
				AND ficha.fec_consulta >= '{$this->fecha1}'
				AND ficha.fec_consulta <= '{$this->fecha2}'
				GROUP BY
					institucion.ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function medidasJudiciales(){
			$con = new Conexion();

			$sql = "SELECT
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_otra IS NOT NULL
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS otra,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_acerca = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS acercamiento,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_perten = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS pertenencias,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_alimen = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS alimentos,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_exhog = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS exclusion,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_resper = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS restitucion,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_visitas = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS visitas,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_prohib = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS prohibicion,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_psico = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS psiquiatrica,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_dual = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS dual,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha41,
							institucion,
							usuarios
						WHERE
							ficha41.idficha = ficha.idficha
						AND ficha41.me_prisionprev = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS prision,
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
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS total,
					(
						round(
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) / (
								(
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_otra IS NOT NULL
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_acerca = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_perten = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_alimen = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_exhog = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_resper = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_visitas = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_prohib = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_psico = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_dual = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha41,
										institucion,
										usuarios
									WHERE
										ficha41.idficha = ficha.idficha
									AND ficha41.me_prisionprev = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
							) :: NUMERIC,
							3
						)
					) * 100 AS potra,
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_acerca = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)* 100 AS pacercamiento,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_perten = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)
				) * 100 AS ppertenencias,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_alimen = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)
				) * 100 AS palimentos,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_exhog = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)
				) * 100 AS pexclusion,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_resper = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)
				) * 100 AS prestitucion,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_visitas = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)
				) * 100 AS pvisitas,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_prohib = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)
				) * 100 AS pprohibicion,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_psico = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)
				) * 100 AS ppsiquiatrica,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_dual = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)
				) * 100 AS pdual,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha41,
								institucion,
								usuarios
							WHERE
								ficha41.idficha = ficha.idficha
							AND ficha41.me_prisionprev = 1
							AND ficha.idusuario = usuarios.idusuario
							AND usuarios.idinstitucion = institucion.idinstitucion
							AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
							AND ficha.fec_consulta >= '{$this->fecha1}'
							AND ficha.fec_consulta <= '{$this->fecha2}'
						) / (
							(
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_otra IS NOT NULL
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_acerca = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_perten = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_alimen = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_exhog = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_resper = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_visitas = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prohib = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_psico = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_dual = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							) + (
								SELECT
									COUNT (ficha.per_dni) AS consultantes
								FROM
									ficha,
									ficha41,
									institucion,
									usuarios
								WHERE
									ficha41.idficha = ficha.idficha
								AND ficha41.me_prisionprev = 1
								AND ficha.idusuario = usuarios.idusuario
								AND usuarios.idinstitucion = institucion.idinstitucion
								AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
								AND ficha.fec_consulta >= '{$this->fecha1}'
								AND ficha.fec_consulta <= '{$this->fecha2}'
							)
						) :: NUMERIC,
						3
					)
				) * 100 AS pprision,
				institucion.ins_descripcion
				FROM
					ficha41,
					ficha,
					institucion,
					usuarios
				WHERE
					ficha41.idficha = ficha.idficha
				AND ficha.idusuario = usuarios.idusuario
				AND usuarios.idinstitucion = institucion.idinstitucion
				AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
				AND ficha.fec_consulta >= '{$this->fecha1}'
				AND ficha.fec_consulta <= '{$this->fecha2}'
				GROUP BY
					institucion.ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}
	}
?>