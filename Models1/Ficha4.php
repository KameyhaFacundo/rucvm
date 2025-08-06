<?php namespace Models1;
include_once 'conexion.php';

	class Ficha4{
		private $idficha4;
		private $idficha;
		private $recientepenal;
		private $recientecivil;
		private $previacivil;
		private $recientepoli;
		private $previapoli;
		private $previapenal;
		private $idaccesibilidad;
		private $di_noinfo;
		private $di_apsico;
		private $di_pjuridico;
		private $di_refugio;
		private $di_grupos;
		private $di_alegal;
		private $di_asocial;
		private $di_otros;
		private $de_noinfo;
		private $de_ofemp;
		private $de_consul;
		private $de_defen;
		private $de_psocial;
		private $de_amujer;
		private $de_comujer;
		private $de_otra;
		private $ext_cual;
		private $idcomisaria;
		private $denuncia;
		private $p_medidas;
		private $fecha1;
		private $fecha2;

		public function __construct(){

		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function agregarFicha4(){
                    
                        $this->recientepenal = !empty($this->recientepenal) ? $this->recientepenal : "NULL";
                        $this->recientecivil = !empty($this->recientecivil) ? $this->recientecivil : "NULL";
                        $this->previapoli = !empty($this->previapoli) ? $this->previapoli : "NULL";
                        $this->previacivil = !empty($this->previacivil) ? $this->previacivil : "NULL";
                        $this->previapenal = !empty($this->previapenal) ? $this->previapenal : "NULL";
                        $this->recientepoli = !empty($this->recientepoli) ? $this->recientepoli : "NULL";
                        $this->denuncia = !empty($this->denuncia) ? $this->denuncia : "NULL";
                        $this->p_medidas = !empty($this->p_medidas) ? $this->p_medidas : "NULL";
                        $this->di_noinfo = !empty($this->di_noinfo) ? $this->di_noinfo : "NULL";
                        $this->di_apsico = !empty($this->di_apsico) ? $this->di_apsico : "NULL";
                        $this->di_pjuridico = !empty($this->di_pjuridico) ? $this->di_pjuridico : "NULL";
                        $this->di_refugio = !empty($this->di_refugio) ? $this->di_refugio : "NULL";
                        $this->di_grupos = !empty($this->di_grupos) ? $this->di_grupos : "NULL";
                        $this->di_alegal = !empty($this->di_alegal) ? $this->di_alegal : "NULL";
                        $this->di_asocial = !empty($this->di_asocial) ? $this->di_asocial : "NULL";
                        $this->di_otros = !empty($this->di_otros) ? $this->di_otros : " ";
                        
                        $this->de_noinfo = !empty($this->de_noinfo) ? $this->de_noinfo : "NULL";
                        $this->de_ofemp = !empty($this->de_ofemp) ? $this->de_ofemp : "NULL";
                        $this->de_consul = !empty($this->de_consul) ? $this->de_consul : "NULL";
                        $this->de_defen = !empty($this->de_defen) ? $this->de_defen : "NULL";
                        $this->de_psocial = !empty($this->de_psocial) ? $this->de_psocial : "NULL";
                        $this->de_amujer = !empty($this->de_amujer) ? $this->de_amujer : "NULL";
                        $this->de_comujer = !empty($this->de_comujer) ? $this->de_comujer : "NULL";
                        $this->idcomisaria = !empty($this->idcomisaria) ? $this->idcomisaria : "NULL";
                        $this->de_otra = !empty($this->de_otra) ? $this->de_otra : " ";
                    
                        $con = new Conexion();
			$sql = "INSERT INTO ficha4(idficha,recientepenal, previapenal, recientecivil, previacivil, recientepoli, previapoli, idaccesibilidad, de_noinfo, de_ofemp, idcomisaria, denuncia, p_medidas, de_consul, de_defen, de_psocial, de_amujer, de_comujer,  de_otra, di_noinfo, di_apsico, di_pjuridico, di_refugio, di_grupos, di_alegal, di_asocial, di_otros) VALUES ({$this->idficha}, {$this->recientepenal}, {$this->previapenal}, {$this->recientecivil}, {$this->previacivil}, {$this->recientepoli}, {$this->previapoli}, {$this->idaccesibilidad}, {$this->de_noinfo}, {$this->de_ofemp}, {$this->idcomisaria}, {$this->denuncia}, {$this->p_medidas},{$this->de_consul},{$this->de_defen}, {$this->de_psocial}, {$this->de_amujer}, {$this->de_comujer}, '{$this->de_otra}',{$this->di_noinfo}, {$this->di_apsico}, {$this->di_pjuridico}, {$this->di_refugio}, {$this->di_grupos}, {$this->di_alegal}, {$this->di_asocial}, '{$this->di_otros}')";
			echo $sql;
			$con->consultaSimple($sql);
			//echo $sql;
		}

		public function eliminarFicha4(){
			$sql = "DELETE FROM ficha4 WHERE idficha4 = {$this->idficha4}";
			$this->con->consultaSimple($sql);
		}

		public function updateFicha4(){
                        $this->recientepenal = !empty($this->recientepenal) ? $this->recientepenal : "NULL";
                        $this->recientecivil = !empty($this->recientecivil) ? $this->recientecivil : "NULL";
                        $this->previapoli = !empty($this->previapoli) ? $this->previapoli : "NULL";
                        $this->previacivil = !empty($this->previacivil) ? $this->previacivil : "NULL";
                        $this->previapenal = !empty($this->previapenal) ? $this->previapenal : "NULL";
                        $this->recientepoli = !empty($this->recientepoli) ? $this->recientepoli : "NULL";
                        $this->denuncia = !empty($this->denuncia) ? $this->denuncia : "NULL";
                        $this->p_medidas = !empty($this->p_medidas) ? $this->p_medidas : "NULL";
                        $this->di_noinfo = !empty($this->di_noinfo) ? $this->di_noinfo : "NULL";
                        $this->di_apsico = !empty($this->di_apsico) ? $this->di_apsico : "NULL";
                        $this->di_pjuridico = !empty($this->di_pjuridico) ? $this->di_pjuridico : "NULL";
                        $this->di_refugio = !empty($this->di_refugio) ? $this->di_refugio : "NULL";
                        $this->di_grupos = !empty($this->di_grupos) ? $this->di_grupos : "NULL";
                        $this->di_alegal = !empty($this->di_alegal) ? $this->di_alegal : "NULL";
                        $this->di_asocial = !empty($this->di_asocial) ? $this->di_asocial : "NULL";
                        $this->di_otros = !empty($this->di_otros) ? $this->di_otros : " ";
                        $this->idcomisaria = !empty($this->idcomisaria) ? $this->idcomisaria : "NULL";
                        $this->de_noinfo = !empty($this->de_noinfo) ? $this->de_noinfo : "NULL";
                        $this->de_ofemp = !empty($this->de_ofemp) ? $this->de_ofemp : "NULL";
                        $this->de_consul = !empty($this->de_consul) ? $this->de_consul : "NULL";
                        $this->de_defen = !empty($this->de_defen) ? $this->de_defen : "NULL";
                        $this->de_psocial = !empty($this->de_psocial) ? $this->de_psocial : "NULL";
                        $this->de_amujer = !empty($this->de_amujer) ? $this->de_amujer : "NULL";
                        $this->de_comujer = !empty($this->de_comujer) ? $this->de_comujer : "NULL";
                        $this->de_otra = !empty($this->de_otra) ? $this->de_otra : " ";
                        
                        $con = new Conexion();
			$sql = "UPDATE ficha4 SET recientepenal = {$this->recientepenal}, previapenal = {$this->previapenal}, recientecivil = {$this->recientecivil}, previacivil = {$this->previacivil}, recientepoli = {$this->recientepoli}, previapoli = {$this->previapoli}, idaccesibilidad = {$this->idaccesibilidad}, de_noinfo = {$this->de_noinfo}, de_ofemp = {$this->de_ofemp}, idcomisaria = {$this->idcomisaria}, denuncia = {$this->denuncia}, p_medidas = {$this->p_medidas},de_consul = {$this->de_consul}, de_defen = {$this->de_defen}, de_psocial = {$this->de_psocial}, de_amujer = {$this->de_amujer}, de_comujer = {$this->de_comujer}, de_otra = '{$this->de_otra}', di_noinfo = {$this->di_noinfo}, di_apsico = {$this->di_apsico}, di_pjuridico = {$this->di_pjuridico}, di_refugio = {$this->di_refugio}, di_grupos = {$this->di_grupos}, di_alegal = {$this->di_alegal}, di_asocial = {$this->di_asocial}, di_otros = '{$this->di_otros}'  WHERE idficha = {$this->idficha}";
                        $con->consultaSimple($sql);
		}

		public function verFicha4(){
            $con = new Conexion();
			$sql = "SELECT * FROM ficha4 WHERE idficha = {$this->idficha}";
			$datos = $con->consultaRetorno($sql);
			$row = pg_fetch_assoc($datos);
			return $row;
		}

		public function filtrarAccesibilidad(){
            $con = new Conexion();
			$sql = "SELECT COUNT(ficha4.idaccesibilidad)as tdato, ac_servicio.ac_descripcion, institucion.ins_descripcion FROM ficha4, ac_servicio, ficha, usuarios, institucion WHERE ficha4.idaccesibilidad = ac_servicio.idaccesibilidad AND ficha.idficha = ficha4.idficha AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND ficha.fec_consulta >= '{$this->fecha1}' AND ficha.fec_consulta <= '{$this->fecha2}' GROUP BY ficha4.idaccesibilidad, ac_servicio.idaccesibilidad, institucion.ins_descripcion ORDER BY ficha4.idaccesibilidad";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function filtrarAccesibilidadDep(){
            $con = new Conexion();
			$sql = "SELECT COUNT(ficha4.idaccesibilidad)as tdato, ac_servicio.ac_descripcion FROM ficha4, ac_servicio, ficha, usuarios, institucion WHERE ficha4.idaccesibilidad = ac_servicio.idaccesibilidad AND ficha.idficha = ficha4.idficha AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND ficha.fec_consulta >= '{$this->fecha1}' AND ficha.fec_consulta <= '{$this->fecha2}' GROUP BY ficha4.idaccesibilidad, ac_servicio.idaccesibilidad ORDER BY ficha4.idaccesibilidad";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function accionesLegalesDep($accion){
			$con = new Conexion();

			switch ($accion) {
				case 'denuncia':
					$action = "denuncia";
					break;
				
				case 'medidas':
					$action = "p_medidas";
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
					JOIN ficha4 ON ficha4.idficha = ficha.idficha
					JOIN usuarios ON usuarios.idusuario = ficha.idusuario
					JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
					LEFT JOIN sino ON ficha4." . $action .  " = sino.iddisponibilidad
					WHERE
						ficha.fec_consulta <= '{$this->fecha2}' 
					AND ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY
						sino.disp_descripcion,
						ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}
	
		public function accionesLegales($accion){
			$con = new Conexion();

			switch ($accion) {
				case 'denuncia':
					$action = "denuncia";
					break;
				
				case 'medidas':
					$action = "p_medidas";
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
					JOIN ficha4 ON ficha4.idficha = ficha.idficha
					JOIN usuarios ON usuarios.idusuario = ficha.idusuario
					JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
					LEFT JOIN sino ON ficha4." . $action .  " = sino.iddisponibilidad
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

		public function derivacionExterna(){
			$con = new Conexion();

			$sql = "SELECT
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.de_otra IS NOT NULL
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
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.de_noinfo = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS noinformado,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.de_ofemp = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS ofempleo,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.de_consul = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS consulado,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.de_defen = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS defensoria,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.de_psocial = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS progsocial,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.de_amujer = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS amujer,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.de_comujer = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS comujer,
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
									ficha4,
									institucion,
									usuarios
								WHERE
									ficha4.idficha = ficha.idficha
								AND ficha4.de_otra IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_otra IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_ofemp = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_consul = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_defen = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_psocial = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_amujer = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_comujer = 1
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
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.de_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_otra IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_ofemp = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_consul = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_defen = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_psocial = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_amujer = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_comujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)* 100 AS pnoinfo,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.de_ofemp = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_otra IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_ofemp = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_consul = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_defen = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_psocial = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_amujer = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_comujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS pofempleo,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.de_consul = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_otra IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_ofemp = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_consul = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_defen = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_psocial = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_amujer = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_comujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS pconsulado,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.de_defen = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_otra IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_ofemp = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_consul = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_defen = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_psocial = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_amujer = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_comujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS pdefensoria,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.de_psocial = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_otra IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_ofemp = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_consul = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_defen = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_psocial = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_amujer = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_comujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS pprogsocial,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.de_amujer = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_otra IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_ofemp = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_consul = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_defen = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_psocial = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_amujer = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_comujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS pamujer,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.de_comujer = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_otra IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_ofemp = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_consul = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_defen = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_psocial = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_amujer = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_comujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS pcomujer,
				institucion.ins_descripcion
				FROM
					ficha4,
					ficha,
					institucion,
					usuarios
				WHERE
					ficha4.idficha = ficha.idficha
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

		public function derivacionExternaDep(){
			$con = new Conexion();

			$sql = "SELECT
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.de_otra IS NOT NULL
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
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.de_noinfo = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS noinformado,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.de_ofemp = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS ofempleo,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.de_consul = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS consulado,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.de_defen = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS defensoria,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.de_psocial = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS progsocial,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.de_amujer = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS amujer,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.de_comujer = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS comujer,
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
									ficha4,
									institucion,
									usuarios
								WHERE
									ficha4.idficha = ficha.idficha
								AND ficha4.de_otra IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_otra IS NOT NULL
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_noinfo = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_ofemp = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_consul = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_defen = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_psocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_amujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_comujer = 1
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
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.de_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_otra IS NOT NULL
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_noinfo = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_ofemp = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_consul = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_defen = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_psocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_amujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_comujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)* 100 AS pnoinfo,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.de_ofemp = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_otra IS NOT NULL
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_noinfo = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_ofemp = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_consul = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_defen = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_psocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_amujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_comujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS pofempleo,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.de_consul = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_otra IS NOT NULL
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_noinfo = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_ofemp = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_consul = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_defen = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_psocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_amujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_comujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS pconsulado,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.de_defen = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_otra IS NOT NULL
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_noinfo = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_ofemp = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_consul = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_defen = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_psocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_amujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_comujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS pdefensoria,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.de_psocial = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_otra IS NOT NULL
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_noinfo = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_ofemp = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_consul = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_defen = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_psocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_amujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_comujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS pprogsocial,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.de_amujer = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_otra IS NOT NULL
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_noinfo = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_ofemp = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_consul = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_defen = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_psocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_amujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_comujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS pamujer,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.de_comujer = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_otra IS NOT NULL
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_noinfo = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_ofemp = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_consul = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_defen = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_psocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_amujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.de_comujer = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS pcomujer,
				institucion.ins_descripcion
				FROM
					ficha4,
					ficha,
					institucion,
					usuarios
				WHERE
					ficha4.idficha = ficha.idficha
				AND ficha.idusuario = usuarios.idusuario
				AND usuarios.idinstitucion = institucion.idinstitucion
				AND ficha.fec_consulta >= '{$this->fecha1}'
				AND ficha.fec_consulta <= '{$this->fecha2}'
				GROUP BY
					institucion.ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function derivacionInterna(){
			$con = new Conexion();

			$sql = "SELECT
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.di_otros IS NOT NULL
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
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.di_noinfo = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS noinformado,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.di_apsico = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS apsicologica,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.di_pjuridico = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS juridico,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.di_refugio = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS refugio,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.di_grupos = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS grupos,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.di_alegal = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS alegal,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.di_asocial = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS asocial,
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
									ficha4,
									institucion,
									usuarios
								WHERE
									ficha4.idficha = ficha.idficha
								AND ficha4.di_otros IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_otros IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_apsico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_pjuridico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_refugio = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_grupos = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_alegal = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_asocial = 1
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
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.di_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_otros IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_apsico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_pjuridico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_refugio = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_grupos = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_alegal = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_asocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)* 100 AS pnoinfo,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.di_apsico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_otros IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_apsico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_pjuridico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_refugio = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_grupos = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_alegal = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_asocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS papsicologica,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.di_pjuridico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_otros IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_apsico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_pjuridico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_refugio = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_grupos = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_alegal = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_asocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS pjuridico,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.di_refugio = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_otros IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_apsico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_pjuridico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_refugio = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_grupos = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_alegal = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_asocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS prefugio,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.di_grupos = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_otros IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_apsico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_pjuridico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_refugio = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_grupos = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_alegal = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_asocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS pgrupos,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.di_alegal = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_otros IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_apsico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_pjuridico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_refugio = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_grupos = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_alegal = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_asocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS palegal,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.di_asocial = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_otros IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_apsico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_pjuridico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_refugio = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_grupos = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_alegal = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_asocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS pasocial,
				institucion.ins_descripcion
				FROM
					ficha4,
					ficha,
					institucion,
					usuarios
				WHERE
					ficha4.idficha = ficha.idficha
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

		public function derivacionInternaDep(){
			$con = new Conexion();

			$sql = "SELECT
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.di_otros IS NOT NULL
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
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.di_noinfo = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS noinformado,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.di_apsico = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS apsicologica,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.di_pjuridico = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS juridico,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.di_refugio = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS refugio,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.di_grupos = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS grupos,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.di_alegal = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS alegal,
					(
						SELECT
							COUNT (ficha.per_dni) AS consultantes
						FROM
							ficha,
							ficha4,
							institucion,
							usuarios
						WHERE
							ficha4.idficha = ficha.idficha
						AND ficha4.di_asocial = 1
						AND ficha.idusuario = usuarios.idusuario
						AND usuarios.idinstitucion = institucion.idinstitucion
						AND ficha.fec_consulta >= '{$this->fecha1}'
						AND ficha.fec_consulta <= '{$this->fecha2}'
					) AS asocial,
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
									ficha4,
									institucion,
									usuarios
								WHERE
									ficha4.idficha = ficha.idficha
								AND ficha4.di_otros IS NOT NULL
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_otros IS NOT NULL
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_noinfo = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_apsico = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_pjuridico = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_refugio = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_grupos = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_alegal = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_asocial = 1
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
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.di_noinfo = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_otros IS NOT NULL
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_noinfo = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_apsico = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_pjuridico = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_refugio = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_grupos = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_alegal = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_asocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)* 100 AS pnoinfo,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.di_apsico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_otros IS NOT NULL
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_noinfo = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_apsico = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_pjuridico = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_refugio = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_grupos = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_alegal = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_asocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS papsicologica,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.di_pjuridico = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_otros IS NOT NULL
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_noinfo = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_apsico = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_pjuridico = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_refugio = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_grupos = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_alegal = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_asocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS pjuridico,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.di_refugio = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_otros IS NOT NULL
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_noinfo = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_apsico = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_pjuridico = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_refugio = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_grupos = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_alegal = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_asocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS prefugio,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.di_grupos = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_otros IS NOT NULL
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_noinfo = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_apsico = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_pjuridico = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_refugio = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_grupos = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_alegal = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_asocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS pgrupos,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.di_alegal = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_otros IS NOT NULL
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_noinfo = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_apsico = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_pjuridico = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_refugio = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_grupos = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_alegal = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_asocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS palegal,
				(
					round(
						(
							SELECT
								COUNT (ficha.per_dni) AS consultantes
							FROM
								ficha,
								ficha4,
								institucion,
								usuarios
							WHERE
								ficha4.idficha = ficha.idficha
							AND ficha4.di_asocial = 1
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
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_otros IS NOT NULL
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_noinfo = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_apsico = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_pjuridico = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_refugio = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_grupos = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_alegal = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								) + (
									SELECT
										COUNT (ficha.per_dni) AS consultantes
									FROM
										ficha,
										ficha4,
										institucion,
										usuarios
									WHERE
										ficha4.idficha = ficha.idficha
									AND ficha4.di_asocial = 1
									AND ficha.idusuario = usuarios.idusuario
									AND usuarios.idinstitucion = institucion.idinstitucion
									AND ficha.fec_consulta >= '{$this->fecha1}'
									AND ficha.fec_consulta <= '{$this->fecha2}'
								)
						) :: NUMERIC,
						3
					)
				) * 100 AS pasocial,
				institucion.ins_descripcion
				FROM
					ficha4,
					ficha,
					institucion,
					usuarios
				WHERE
					ficha4.idficha = ficha.idficha
				AND ficha.idusuario = usuarios.idusuario
				AND usuarios.idinstitucion = institucion.idinstitucion
				AND ficha.fec_consulta >= '{$this->fecha1}'
				AND ficha.fec_consulta <= '{$this->fecha2}'
				GROUP BY
					institucion.ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}
	}
?>