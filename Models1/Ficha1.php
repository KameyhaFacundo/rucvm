<?php namespace Models1;
include_once 'conexion.php';

	class Ficha1{
		private $idficha1;
		private $idficha;
		private $idremunerada;
		private $leeono;
		private $ingreso;
		private $auh;
		private $psocial;
		private $migrante;
		private $idprocedencia;
		private $permanencia;
		private $rs_concurrir;
		private $rs_institucion;
		private $rs_vinculos;
		private $cv_problemas;
		private $cv_perempleo;
		private $cv_limitacion;
		private $cv_perestudio;
		private $edu_consultante;
		private $edu_agresor;
		private $idactividad;
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

		public function agregarFicha1(){
			    $this->idremunerada = !empty($this->idremunerada) ? $this->idremunerada : "NULL";
			    $this->idprocedencia = !empty($this->idprocedencia) ? $this->idprocedencia : "NULL";
			    $this->permanencia = !empty($this->permanencia) ? $this->permanencia : "NULL";
			    $this->leeono = !empty($this->leeono) ? $this->leeono : "NULL";
				$this->ingreso = !empty($this->ingreso) ? $this->ingreso : "NULL";
				$this->auh = !empty($this->auh) ? $this->auh : "NULL";
				$this->psocial = !empty($this->psocial) ? $this->psocial : "NULL";
				$this->migrante = !empty($this->migrante) ? $this->migrante : "NULL";
				$this->idprocedencia = !empty($this->idprocedencia) ? $this->idprocedencia : "NULL";
				$this->permanencia = !empty($this->permanencia) ? $this->permanencia : "NULL";
				$this->rs_concurrir = !empty($this->rs_concurrir) ? $this->rs_concurrir : "NULL";
				$this->rs_institucion = !empty($this->rs_institucion) ? $this->rs_institucion : "NULL";
				$this->rs_vinculos = !empty($this->rs_vinculos) ? $this->rs_vinculos : "NULL";
				$this->cv_problemas = !empty($this->cv_problemas) ? $this->cv_problemas : "NULL";
				$this->cv_perempleo = !empty($this->cv_perempleo) ? $this->cv_perempleo : "NULL";
				$this->cv_limitacion = !empty($this->cv_limitacion) ? $this->cv_limitacion : "NULL";
				$this->cv_perestudio = !empty($this->cv_perestudio) ? $this->cv_perestudio : "NULL";
				$this->idactividad = !empty($this->idactividad) ? $this->idactividad : 9;


                        $con = new Conexion();
			$sql = "INSERT INTO ficha1(idficha, idremunerada, leeono, ingreso, auh, psocial, migrante, idprocedencia, permanencia, rs_concurrir, rs_institucion, rs_vinculos, cv_problemas, cv_perempleo, cv_limitacion, cv_perestudio, edu_consultante, edu_agresor, idactividad) VALUES ({$this->idficha}, {$this->idremunerada}, {$this->leeono}, {$this->ingreso}, {$this->auh}, {$this->psocial}, {$this->migrante}, {$this->idprocedencia}, {$this->permanencia}, {$this->rs_concurrir}, {$this->rs_institucion}, {$this->rs_vinculos}, {$this->cv_problemas}, {$this->cv_perempleo}, {$this->cv_limitacion}, {$this->cv_perestudio}, {$this->edu_consultante}, {$this->edu_agresor}, {$this->idactividad})";
			$con->consultaSimple($sql);
			//echo $sql;
		}

		public function eliminarFicha1(){
			$sql = "DELETE FROM ficha1 WHERE idficha1 = {$this->idficha1}";
			$this->con->consultaSimple($sql);
		}

		public function updateFicha1(){
                $this->idremunerada = !empty($this->idremunerada) ? $this->idremunerada : "NULL";
			    $this->idprocedencia = !empty($this->idprocedencia) ? $this->idprocedencia : "NULL";
			    $this->permanencia = !empty($this->permanencia) ? $this->permanencia : "NULL";
			    $this->leeono = !empty($this->leeono) ? $this->leeono : "NULL";
				$this->ingreso = !empty($this->ingreso) ? $this->ingreso : "NULL";
				$this->auh = !empty($this->auh) ? $this->auh : "NULL";
				$this->psocial = !empty($this->psocial) ? $this->psocial : "NULL";
				$this->migrante = !empty($this->migrante) ? $this->migrante : "NULL";
				$this->idprocedencia = !empty($this->idprocedencia) ? $this->idprocedencia : "NULL";
				$this->permanencia = !empty($this->permanencia) ? $this->permanencia : "NULL";
				$this->rs_concurrir = !empty($this->rs_concurrir) ? $this->rs_concurrir : "NULL";
				$this->rs_institucion = !empty($this->rs_institucion) ? $this->rs_institucion : "NULL";
				$this->rs_vinculos = !empty($this->rs_vinculos) ? $this->rs_vinculos : "NULL";
				$this->cv_problemas = !empty($this->cv_problemas) ? $this->cv_problemas : "NULL";
				$this->cv_perempleo = !empty($this->cv_perempleo) ? $this->cv_perempleo : "NULL";
				$this->cv_limitacion = !empty($this->cv_limitacion) ? $this->cv_limitacion : "NULL";
				$this->cv_perestudio = !empty($this->cv_perestudio) ? $this->cv_perestudio : "NULL";
				$this->idactividad = !empty($this->idactividad) ? $this->idactividad : 9;


                 $con = new Conexion();
			$sql = "UPDATE ficha1 SET idremunerada = {$this->idremunerada}, leeono = {$this->leeono}, ingreso = {$this->ingreso}, auh = {$this->auh}, psocial = {$this->psocial}, migrante = {$this->migrante}, idprocedencia = {$this->idprocedencia}, permanencia = {$this->permanencia}, rs_concurrir = {$this->rs_concurrir}, rs_institucion = {$this->rs_institucion}, rs_vinculos = {$this->rs_vinculos}, cv_problemas = {$this->cv_problemas}, cv_perempleo = {$this->cv_perempleo}, cv_limitacion = {$this->cv_limitacion}, cv_perestudio = {$this->cv_perestudio}, edu_consultante = {$this->edu_consultante}, edu_agresor = {$this->edu_agresor}, idactividad = {$this->idactividad} WHERE idficha = {$this->idficha}";
			//echo $sql;
			$con->consultaSimple($sql);
		}

		public function verFicha1(){
            $con = new Conexion();
			$sql = "SELECT * FROM ficha1 WHERE idficha= {$this->idficha}";
			$datos = $con->consultaRetorno($sql);
			$row = pg_fetch_assoc($datos);
			return $row;	
		}

		public function eduConsultante(){
            $con = new Conexion();
			$sql = "SELECT educacion.edu_descripcion, COUNT(ficha.per_dni) as consultantes, institucion.ins_descripcion FROM ficha1, ficha, educacion, usuarios, institucion WHERE ficha1.idficha = ficha.idficha AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND educacion.ideducacion = ficha1.edu_consultante AND ficha.fec_consulta >= '{$this->fecha1}' AND ficha.fec_consulta <= '{$this->fecha2}' GROUP BY educacion.edu_descripcion, institucion.ins_descripcion ORDER BY educacion.edu_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;	
		}

		public function eduAgresor(){
            $con = new Conexion();
			$sql = "SELECT educacion.edu_descripcion, COUNT(ficha.per_dni) as consultantes, institucion.ins_descripcion FROM ficha1, ficha, educacion, usuarios, institucion WHERE ficha1.idficha = ficha.idficha AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND educacion.ideducacion = ficha1.edu_agresor AND ficha.fec_consulta >= '{$this->fecha1}' AND ficha.fec_consulta <= '{$this->fecha2}' GROUP BY educacion.edu_descripcion, institucion.ins_descripcion ORDER BY educacion.edu_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;	
		}

		public function ocuConsultante(){
            $con = new Conexion();
			$sql = "SELECT actividad.act_descripcion, COUNT(ficha.per_dni) as consultantes,
					(SELECT COUNT(ficha.per_dni) FROM ficha, institucion, usuarios WHERE ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] .") as total,
					(round(COUNT(ficha.per_dni)/(SELECT COUNT(ficha.per_dni) FROM ficha, institucion, usuarios WHERE ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] .")::numeric,3))*100 AS pnormal, institucion.ins_descripcion
					FROM ficha, actividad, ficha1, institucion, usuarios
					WHERE ficha1.idficha = ficha.idficha AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND ficha1.idactividad = actividad.idactividad AND ficha.fec_consulta >= '{$this->fecha1}' AND ficha.fec_consulta <= '{$this->fecha2}' GROUP BY actividad.act_descripcion, ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;	
		}

		public function edad_educacion(){
            $con = new Conexion();
			$sql = "CREATE OR REPLACE VIEW edad_edu_no_contesta AS SELECT COUNT(ficha.per_dni) as edad_edu_no_contesta, ficha1.edu_consultante, educacion.edu_descripcion 
				from persona,ficha, usuarios, institucion, educacion, ficha1
				WHERE
				ficha.per_dni=persona.per_dni AND
				ficha.idficha=ficha1.idficha AND
				ficha1.edu_consultante=educacion.ideducacion AND
				persona.per_nacido is NULL AND
				ficha.idusuario=usuarios.idusuario AND
				usuarios.idinstitucion=institucion.idinstitucion AND
				institucion.idinstitucion= ". $_SESSION['idinstitucion'] ." AND
				ficha.fec_consulta <= '{$this->fecha2}' AND
				ficha.fec_consulta >= '{$this->fecha1}'
				GROUP BY ficha1.edu_consultante, educacion.edu_descripcion;

				CREATE OR REPLACE VIEW edad_edu_de_85_a_150 AS SELECT COUNT(ficha.per_dni) as edad_edu_de_85_a_150, ficha1.edu_consultante, educacion.edu_descripcion 
				from persona,ficha, usuarios, institucion, educacion, ficha1
				WHERE
				ficha.per_dni=persona.per_dni AND
				ficha.idficha=ficha1.idficha AND
				ficha1.edu_consultante=educacion.ideducacion AND
				date_part('year', age(now(),persona.per_nacido)) >= 85 AND
				date_part('year', age(now(),persona.per_nacido)) <= 150 AND
				ficha.idusuario=usuarios.idusuario AND
				usuarios.idinstitucion=institucion.idinstitucion AND
				institucion.idinstitucion= ". $_SESSION['idinstitucion'] ." AND
				ficha.fec_consulta <= '{$this->fecha2}' AND
				ficha.fec_consulta >= '{$this->fecha1}'
				GROUP BY ficha1.edu_consultante, educacion.edu_descripcion;

				CREATE OR REPLACE VIEW edad_edu_de_75_a_84 AS SELECT COUNT(ficha.per_dni) as edad_edu_de_75_a_84, ficha1.edu_consultante, educacion.edu_descripcion 
				from persona,ficha, usuarios, institucion, educacion, ficha1
				WHERE
				ficha.per_dni=persona.per_dni AND
				ficha.idficha=ficha1.idficha AND
				ficha1.edu_consultante=educacion.ideducacion AND
				date_part('year', age(now(),persona.per_nacido)) >= 75 AND
				date_part('year', age(now(),persona.per_nacido)) < 85 AND
				ficha.idusuario=usuarios.idusuario AND
				usuarios.idinstitucion=institucion.idinstitucion AND
				institucion.idinstitucion= ". $_SESSION['idinstitucion'] ." AND
				ficha.fec_consulta <= '{$this->fecha2}' AND
				ficha.fec_consulta >= '{$this->fecha1}'
				GROUP BY ficha1.edu_consultante, educacion.edu_descripcion;

				CREATE OR REPLACE VIEW edad_edu_de_65_a_74 AS SELECT COUNT(ficha.per_dni) as edad_edu_de_65_a_74, ficha1.edu_consultante, educacion.edu_descripcion 
				from persona,ficha, usuarios, institucion, educacion, ficha1
				WHERE
				ficha.per_dni=persona.per_dni AND
				ficha.idficha=ficha1.idficha AND
				ficha1.edu_consultante=educacion.ideducacion AND
				date_part('year', age(now(),persona.per_nacido)) >= 65 AND
				date_part('year', age(now(),persona.per_nacido)) < 75 AND
				ficha.idusuario=usuarios.idusuario AND
				usuarios.idinstitucion=institucion.idinstitucion AND
				institucion.idinstitucion= ". $_SESSION['idinstitucion'] ." AND
				ficha.fec_consulta <= '{$this->fecha2}' AND
				ficha.fec_consulta >= '{$this->fecha1}'
				GROUP BY ficha1.edu_consultante, educacion.edu_descripcion;

				CREATE OR REPLACE VIEW edad_edu_de_55_a_64 AS SELECT COUNT(ficha.per_dni) as edad_edu_de_55_a_64, ficha1.edu_consultante, educacion.edu_descripcion 
				from persona,ficha, usuarios, institucion, educacion, ficha1
				WHERE
				ficha.per_dni=persona.per_dni AND
				ficha.idficha=ficha1.idficha AND
				ficha1.edu_consultante=educacion.ideducacion AND
				date_part('year', age(now(),persona.per_nacido)) >= 55 AND
				date_part('year', age(now(),persona.per_nacido)) < 65 AND
				ficha.idusuario=usuarios.idusuario AND
				usuarios.idinstitucion=institucion.idinstitucion AND
				institucion.idinstitucion= ". $_SESSION['idinstitucion'] ." AND
				ficha.fec_consulta <= '{$this->fecha2}' AND
				ficha.fec_consulta >= '{$this->fecha1}'
				GROUP BY ficha1.edu_consultante, educacion.edu_descripcion;

				CREATE OR REPLACE VIEW edad_edu_de_45_a_54 AS SELECT COUNT(ficha.per_dni) as edad_edu_de_45_a_54, ficha1.edu_consultante, educacion.edu_descripcion 
				from persona,ficha, usuarios, institucion, educacion, ficha1
				WHERE
				ficha.per_dni=persona.per_dni AND
				ficha.idficha=ficha1.idficha AND
				ficha1.edu_consultante=educacion.ideducacion AND
				date_part('year', age(now(),persona.per_nacido)) >= 45 AND
				date_part('year', age(now(),persona.per_nacido)) < 55 AND
				ficha.idusuario=usuarios.idusuario AND
				usuarios.idinstitucion=institucion.idinstitucion AND
				institucion.idinstitucion= ". $_SESSION['idinstitucion'] ." AND
				ficha.fec_consulta <= '{$this->fecha2}' AND
				ficha.fec_consulta >= '{$this->fecha1}'
				GROUP BY ficha1.edu_consultante, educacion.edu_descripcion;

				CREATE OR REPLACE VIEW edad_edu_de_35_a_44 AS SELECT COUNT(ficha.per_dni) as edad_edu_de_35_a_44, ficha1.edu_consultante, educacion.edu_descripcion 
				from persona,ficha, usuarios, institucion, educacion, ficha1
				WHERE
				ficha.per_dni=persona.per_dni AND
				ficha.idficha=ficha1.idficha AND
				ficha1.edu_consultante=educacion.ideducacion AND
				date_part('year', age(now(),persona.per_nacido)) >= 35 AND
				date_part('year', age(now(),persona.per_nacido)) < 45 AND
				ficha.idusuario=usuarios.idusuario AND
				usuarios.idinstitucion=institucion.idinstitucion AND
				institucion.idinstitucion= ". $_SESSION['idinstitucion'] ." AND
				ficha.fec_consulta <= '{$this->fecha2}' AND
				ficha.fec_consulta >= '{$this->fecha1}'
				GROUP BY ficha1.edu_consultante, educacion.edu_descripcion;

				CREATE OR REPLACE VIEW edad_edu_de_25_a_34 AS SELECT COUNT(ficha.per_dni) as edad_edu_de_25_a_34, ficha1.edu_consultante, educacion.edu_descripcion 
				from persona,ficha, usuarios, institucion, educacion, ficha1
				WHERE
				ficha.per_dni=persona.per_dni AND
				ficha.idficha=ficha1.idficha AND
				ficha1.edu_consultante=educacion.ideducacion AND
				date_part('year', age(now(),persona.per_nacido)) >= 25 AND
				date_part('year', age(now(),persona.per_nacido)) < 35 AND
				ficha.idusuario=usuarios.idusuario AND
				usuarios.idinstitucion=institucion.idinstitucion AND
				institucion.idinstitucion= ". $_SESSION['idinstitucion'] ." AND
				ficha.fec_consulta <= '{$this->fecha2}' AND
				ficha.fec_consulta >= '{$this->fecha1}'
				GROUP BY ficha1.edu_consultante, educacion.edu_descripcion;

				CREATE OR REPLACE VIEW edad_edu_de_14_a_24 AS SELECT COUNT(ficha.per_dni) as edad_edu_de_14_a_24, ficha1.edu_consultante, educacion.edu_descripcion 
				from persona,ficha, usuarios, institucion, educacion, ficha1
				WHERE
				ficha.per_dni=persona.per_dni AND
				ficha.idficha=ficha1.idficha AND
				ficha1.edu_consultante=educacion.ideducacion AND
				date_part('year', age(now(),persona.per_nacido)) >= 14 AND
				date_part('year', age(now(),persona.per_nacido)) < 25 AND
				ficha.idusuario=usuarios.idusuario AND
				usuarios.idinstitucion=institucion.idinstitucion AND
				institucion.idinstitucion= ". $_SESSION['idinstitucion'] ." AND
				ficha.fec_consulta <= '{$this->fecha2}' AND
				ficha.fec_consulta >= '{$this->fecha1}'
				GROUP BY ficha1.edu_consultante, educacion.edu_descripcion;

				SELECT educacion.edu_descripcion, edad_edu_de_14_a_24.edad_edu_de_14_a_24, edad_edu_de_25_a_34.edad_edu_de_25_a_34, edad_edu_de_35_a_44.edad_edu_de_35_a_44, edad_edu_de_45_a_54.edad_edu_de_45_a_54, edad_edu_de_55_a_64.edad_edu_de_55_a_64, edad_edu_de_65_a_74.edad_edu_de_65_a_74, edad_edu_de_75_a_84.edad_edu_de_75_a_84, edad_edu_de_85_a_150.edad_edu_de_85_a_150, edad_edu_no_contesta.edad_edu_no_contesta 
				FROM educacion LEFT OUTER JOIN edad_edu_de_14_a_24 
				ON edad_edu_de_14_a_24.edu_consultante = educacion.ideducacion 
				LEFT OUTER JOIN edad_edu_de_25_a_34
				ON edad_edu_de_25_a_34.edu_consultante = educacion.ideducacion
				LEFT OUTER JOIN edad_edu_de_35_a_44
				ON edad_edu_de_35_a_44.edu_consultante = educacion.ideducacion 
				LEFT OUTER JOIN edad_edu_de_45_a_54
				ON edad_edu_de_45_a_54.edu_consultante = educacion.ideducacion 
				LEFT OUTER JOIN edad_edu_de_55_a_64
				ON edad_edu_de_55_a_64.edu_consultante = educacion.ideducacion 
				LEFT OUTER JOIN edad_edu_de_65_a_74
				ON edad_edu_de_65_a_74.edu_consultante = educacion.ideducacion 
				LEFT OUTER JOIN edad_edu_de_75_a_84
				ON edad_edu_de_75_a_84.edu_consultante = educacion.ideducacion 
				LEFT OUTER JOIN edad_edu_de_85_a_150
				ON edad_edu_de_85_a_150.edu_consultante = educacion.ideducacion
				LEFT OUTER JOIN edad_edu_no_contesta
				ON edad_edu_no_contesta.edu_consultante = educacion.ideducacion";
			$datos = $con->consultaRetorno($sql);
			return $datos;	
		}

		public function eduConsultanteDep(){
            $con = new Conexion();
			$sql = "SELECT educacion.edu_descripcion, COUNT(ficha.per_dni) as consultantes FROM ficha1, ficha, educacion, usuarios, institucion WHERE ficha1.idficha = ficha.idficha AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND educacion.ideducacion = ficha1.edu_consultante AND ficha.fec_consulta >= '{$this->fecha1}' AND ficha.fec_consulta <= '{$this->fecha2}' GROUP BY educacion.edu_descripcion ORDER BY educacion.edu_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;	
		}

		public function edad_educacionDep(){
            $con = new Conexion();
			$sql = "CREATE OR REPLACE VIEW edad_edu_no_contesta AS SELECT COUNT(ficha.per_dni) as edad_edu_no_contesta, ficha1.edu_consultante, educacion.edu_descripcion 
				from persona,ficha, usuarios, institucion, educacion, ficha1
				WHERE
				ficha.per_dni=persona.per_dni AND
				ficha.idficha=ficha1.idficha AND
				ficha1.edu_consultante=educacion.ideducacion AND
				persona.per_nacido is NULL AND
				ficha.idusuario=usuarios.idusuario AND
				usuarios.idinstitucion=institucion.idinstitucion AND
				ficha.fec_consulta <= '{$this->fecha2}' AND
				ficha.fec_consulta >= '{$this->fecha1}'
				GROUP BY ficha1.edu_consultante, educacion.edu_descripcion;

				CREATE OR REPLACE VIEW edad_edu_de_85_a_150 AS SELECT COUNT(ficha.per_dni) as edad_edu_de_85_a_150, ficha1.edu_consultante, educacion.edu_descripcion 
				from persona,ficha, usuarios, institucion, educacion, ficha1
				WHERE
				ficha.per_dni=persona.per_dni AND
				ficha.idficha=ficha1.idficha AND
				ficha1.edu_consultante=educacion.ideducacion AND
				date_part('year', age(now(),persona.per_nacido)) >= 85 AND
				date_part('year', age(now(),persona.per_nacido)) <= 150 AND
				ficha.idusuario=usuarios.idusuario AND
				usuarios.idinstitucion=institucion.idinstitucion AND
				ficha.fec_consulta <= '{$this->fecha2}' AND
				ficha.fec_consulta >= '{$this->fecha1}'
				GROUP BY ficha1.edu_consultante, educacion.edu_descripcion;

				CREATE OR REPLACE VIEW edad_edu_de_75_a_84 AS SELECT COUNT(ficha.per_dni) as edad_edu_de_75_a_84, ficha1.edu_consultante, educacion.edu_descripcion 
				from persona,ficha, usuarios, institucion, educacion, ficha1
				WHERE
				ficha.per_dni=persona.per_dni AND
				ficha.idficha=ficha1.idficha AND
				ficha1.edu_consultante=educacion.ideducacion AND
				date_part('year', age(now(),persona.per_nacido)) >= 75 AND
				date_part('year', age(now(),persona.per_nacido)) < 85 AND
				ficha.idusuario=usuarios.idusuario AND
				usuarios.idinstitucion=institucion.idinstitucion AND
				ficha.fec_consulta <= '{$this->fecha2}' AND
				ficha.fec_consulta >= '{$this->fecha1}'
				GROUP BY ficha1.edu_consultante, educacion.edu_descripcion;

				CREATE OR REPLACE VIEW edad_edu_de_65_a_74 AS SELECT COUNT(ficha.per_dni) as edad_edu_de_65_a_74, ficha1.edu_consultante, educacion.edu_descripcion 
				from persona,ficha, usuarios, institucion, educacion, ficha1
				WHERE
				ficha.per_dni=persona.per_dni AND
				ficha.idficha=ficha1.idficha AND
				ficha1.edu_consultante=educacion.ideducacion AND
				date_part('year', age(now(),persona.per_nacido)) >= 65 AND
				date_part('year', age(now(),persona.per_nacido)) < 75 AND
				ficha.idusuario=usuarios.idusuario AND
				usuarios.idinstitucion=institucion.idinstitucion AND
				ficha.fec_consulta <= '{$this->fecha2}' AND
				ficha.fec_consulta >= '{$this->fecha1}'
				GROUP BY ficha1.edu_consultante, educacion.edu_descripcion;

				CREATE OR REPLACE VIEW edad_edu_de_55_a_64 AS SELECT COUNT(ficha.per_dni) as edad_edu_de_55_a_64, ficha1.edu_consultante, educacion.edu_descripcion 
				from persona,ficha, usuarios, institucion, educacion, ficha1
				WHERE
				ficha.per_dni=persona.per_dni AND
				ficha.idficha=ficha1.idficha AND
				ficha1.edu_consultante=educacion.ideducacion AND
				date_part('year', age(now(),persona.per_nacido)) >= 55 AND
				date_part('year', age(now(),persona.per_nacido)) < 65 AND
				ficha.idusuario=usuarios.idusuario AND
				usuarios.idinstitucion=institucion.idinstitucion AND
				ficha.fec_consulta <= '{$this->fecha2}' AND
				ficha.fec_consulta >= '{$this->fecha1}'
				GROUP BY ficha1.edu_consultante, educacion.edu_descripcion;

				CREATE OR REPLACE VIEW edad_edu_de_45_a_54 AS SELECT COUNT(ficha.per_dni) as edad_edu_de_45_a_54, ficha1.edu_consultante, educacion.edu_descripcion 
				from persona,ficha, usuarios, institucion, educacion, ficha1
				WHERE
				ficha.per_dni=persona.per_dni AND
				ficha.idficha=ficha1.idficha AND
				ficha1.edu_consultante=educacion.ideducacion AND
				date_part('year', age(now(),persona.per_nacido)) >= 45 AND
				date_part('year', age(now(),persona.per_nacido)) < 55 AND
				ficha.idusuario=usuarios.idusuario AND
				usuarios.idinstitucion=institucion.idinstitucion AND
				ficha.fec_consulta <= '{$this->fecha2}' AND
				ficha.fec_consulta >= '{$this->fecha1}'
				GROUP BY ficha1.edu_consultante, educacion.edu_descripcion;

				CREATE OR REPLACE VIEW edad_edu_de_35_a_44 AS SELECT COUNT(ficha.per_dni) as edad_edu_de_35_a_44, ficha1.edu_consultante, educacion.edu_descripcion 
				from persona,ficha, usuarios, institucion, educacion, ficha1
				WHERE
				ficha.per_dni=persona.per_dni AND
				ficha.idficha=ficha1.idficha AND
				ficha1.edu_consultante=educacion.ideducacion AND
				date_part('year', age(now(),persona.per_nacido)) >= 35 AND
				date_part('year', age(now(),persona.per_nacido)) < 45 AND
				ficha.idusuario=usuarios.idusuario AND
				usuarios.idinstitucion=institucion.idinstitucion AND
				ficha.fec_consulta <= '{$this->fecha2}' AND
				ficha.fec_consulta >= '{$this->fecha1}'
				GROUP BY ficha1.edu_consultante, educacion.edu_descripcion;

				CREATE OR REPLACE VIEW edad_edu_de_25_a_34 AS SELECT COUNT(ficha.per_dni) as edad_edu_de_25_a_34, ficha1.edu_consultante, educacion.edu_descripcion 
				from persona,ficha, usuarios, institucion, educacion, ficha1
				WHERE
				ficha.per_dni=persona.per_dni AND
				ficha.idficha=ficha1.idficha AND
				ficha1.edu_consultante=educacion.ideducacion AND
				date_part('year', age(now(),persona.per_nacido)) >= 25 AND
				date_part('year', age(now(),persona.per_nacido)) < 35 AND
				ficha.idusuario=usuarios.idusuario AND
				usuarios.idinstitucion=institucion.idinstitucion AND
				ficha.fec_consulta <= '{$this->fecha2}' AND
				ficha.fec_consulta >= '{$this->fecha1}'
				GROUP BY ficha1.edu_consultante, educacion.edu_descripcion;

				CREATE OR REPLACE VIEW edad_edu_de_14_a_24 AS SELECT COUNT(ficha.per_dni) as edad_edu_de_14_a_24, ficha1.edu_consultante, educacion.edu_descripcion 
				from persona,ficha, usuarios, institucion, educacion, ficha1
				WHERE
				ficha.per_dni=persona.per_dni AND
				ficha.idficha=ficha1.idficha AND
				ficha1.edu_consultante=educacion.ideducacion AND
				date_part('year', age(now(),persona.per_nacido)) >= 14 AND
				date_part('year', age(now(),persona.per_nacido)) < 25 AND
				ficha.idusuario=usuarios.idusuario AND
				usuarios.idinstitucion=institucion.idinstitucion AND
				ficha.fec_consulta <= '{$this->fecha2}' AND
				ficha.fec_consulta >= '{$this->fecha1}'
				GROUP BY ficha1.edu_consultante, educacion.edu_descripcion;

				SELECT educacion.edu_descripcion, edad_edu_de_14_a_24.edad_edu_de_14_a_24, edad_edu_de_25_a_34.edad_edu_de_25_a_34, edad_edu_de_35_a_44.edad_edu_de_35_a_44, edad_edu_de_45_a_54.edad_edu_de_45_a_54, edad_edu_de_55_a_64.edad_edu_de_55_a_64, edad_edu_de_65_a_74.edad_edu_de_65_a_74, edad_edu_de_75_a_84.edad_edu_de_75_a_84, edad_edu_de_85_a_150.edad_edu_de_85_a_150, edad_edu_no_contesta.edad_edu_no_contesta
				FROM educacion LEFT OUTER JOIN edad_edu_de_14_a_24 
				ON edad_edu_de_14_a_24.edu_consultante = educacion.ideducacion 
				LEFT OUTER JOIN edad_edu_de_25_a_34
				ON edad_edu_de_25_a_34.edu_consultante = educacion.ideducacion
				LEFT OUTER JOIN edad_edu_de_35_a_44
				ON edad_edu_de_35_a_44.edu_consultante = educacion.ideducacion 
				LEFT OUTER JOIN edad_edu_de_45_a_54
				ON edad_edu_de_45_a_54.edu_consultante = educacion.ideducacion 
				LEFT OUTER JOIN edad_edu_de_55_a_64
				ON edad_edu_de_55_a_64.edu_consultante = educacion.ideducacion 
				LEFT OUTER JOIN edad_edu_de_65_a_74
				ON edad_edu_de_65_a_74.edu_consultante = educacion.ideducacion 
				LEFT OUTER JOIN edad_edu_de_75_a_84
				ON edad_edu_de_75_a_84.edu_consultante = educacion.ideducacion 
				LEFT OUTER JOIN edad_edu_de_85_a_150
				ON edad_edu_de_85_a_150.edu_consultante = educacion.ideducacion
				LEFT OUTER JOIN edad_edu_no_contesta
				ON edad_edu_no_contesta.edu_consultante = educacion.ideducacion";
			$datos = $con->consultaRetorno($sql);
			return $datos;	
		}

		public function ocuConsultanteDep(){
            $con = new Conexion();
			$sql = "SELECT actividad.act_descripcion, COUNT(ficha.per_dni) as consultantes,
					(SELECT COUNT(ficha.per_dni) FROM ficha, institucion, usuarios WHERE ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion) as total,
					(round(COUNT(ficha.per_dni)/(SELECT COUNT(ficha.per_dni) FROM ficha, institucion, usuarios WHERE ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion)::numeric,3))*100 AS pnormal
					FROM ficha, actividad, ficha1, institucion, usuarios
					WHERE ficha1.idficha = ficha.idficha AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND ficha1.idactividad = actividad.idactividad AND ficha.fec_consulta >= '{$this->fecha1}' AND ficha.fec_consulta <= '{$this->fecha2}' GROUP BY actividad.act_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;	
		}

		public function eduAgresorDep(){
            $con = new Conexion();
			$sql = "SELECT educacion.edu_descripcion, COUNT(ficha.per_dni) as consultantes FROM ficha1, ficha, educacion, usuarios, institucion WHERE ficha1.idficha = ficha.idficha AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND educacion.ideducacion = ficha1.edu_agresor AND ficha.fec_consulta >= '{$this->fecha1}' AND ficha.fec_consulta <= '{$this->fecha2}' GROUP BY educacion.edu_descripcion ORDER BY educacion.edu_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;	
		}

		public function ocupacionRemuneradaDep(){
			$con = new Conexion();
			$sql = "SELECT
							CASE
					WHEN remunerada.rem_descripcion IS NULL THEN
							'Sin respuesta'
					ELSE
							remunerada.rem_descripcion
					END AS rem_descripcion,
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
					JOIN ficha1 ON ficha1.idficha = ficha.idficha
					JOIN usuarios ON usuarios.idusuario = ficha.idusuario
					JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
					LEFT JOIN remunerada ON ficha1.idremunerada = remunerada.idremunerada
					WHERE
						ficha.fec_consulta <= '{$this->fecha2}' 
					AND ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY
						remunerada.rem_descripcion,
						ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function ocupacionRemunerada(){
			$con = new Conexion();
			$sql = "SELECT
						CASE
					WHEN remunerada.rem_descripcion IS NULL THEN
						'Sin respuesta'
					ELSE
						remunerada.rem_descripcion
					END AS sal_descripcion,
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
					JOIN ficha1 ON ficha1.idficha = ficha.idficha
					JOIN usuarios ON usuarios.idusuario = ficha.idusuario
					JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
					LEFT JOIN remunerada ON ficha1.idremunerada = remunerada.idremunerada
					WHERE
						institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
					AND ficha.fec_consulta <= '{$this->fecha2}' 
					AND ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY
						remunerada.rem_descripcion,
						ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function auhDep(){
			$con = new Conexion();
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
					JOIN ficha1 ON ficha1.idficha = ficha.idficha
					JOIN usuarios ON usuarios.idusuario = ficha.idusuario
					JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
					LEFT JOIN sino ON ficha1.auh = sino.iddisponibilidad
					WHERE
						ficha.fec_consulta <= '{$this->fecha2}' 
					AND ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY
						sino.disp_descripcion,
						ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function auh(){
			$con = new Conexion();
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
					JOIN ficha1 ON ficha1.idficha = ficha.idficha
					JOIN usuarios ON usuarios.idusuario = ficha.idusuario
					JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
					LEFT JOIN sino ON ficha1.auh = sino.iddisponibilidad
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

		public function redSocialComunitariaDep($red){
			$con = new Conexion();

			switch ($red) {
				case 'concurrir':
					$rs = "rs_concurrir";
					break;
				
				case 'institucion':
					$rs = "rs_institucion";
					break;

				case 'vinculos':
					$rs = "rs_vinculos";
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
					JOIN ficha1 ON ficha1.idficha = ficha.idficha
					JOIN usuarios ON usuarios.idusuario = ficha.idusuario
					JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
					LEFT JOIN sino ON ficha1." . $rs . " = sino.iddisponibilidad
					WHERE
						ficha.fec_consulta <= '{$this->fecha2}' 
					AND ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY
						sino.disp_descripcion,
						ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}
	
		public function redSocialComunitaria($red){
			$con = new Conexion();

			switch ($red) {
				case 'concurrir':
					$rs = "rs_concurrir";
					break;
				
				case 'institucion':
					$rs = "rs_institucion";
					break;

				case 'vinculos':
					$rs = "rs_vinculos";
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
					JOIN ficha1 ON ficha1.idficha = ficha.idficha
					JOIN usuarios ON usuarios.idusuario = ficha.idusuario
					JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
					LEFT JOIN sino ON ficha1." . $rs . " = sino.iddisponibilidad
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

		public function consecuenciasViolenciaDep($consecuencia){
			$con = new Conexion();

			switch ($consecuencia) {
				case 'problemas':
					$cons = "cv_problemas";
					break;
				
				case 'empleo':
					$cons = "cv_perempleo";
					break;

				case 'limitacion':
					$cons = "cv_limitacion";
					break;

				case 'estudio':
					$cons = "cv_perestudio";
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
					JOIN ficha1 ON ficha1.idficha = ficha.idficha
					JOIN usuarios ON usuarios.idusuario = ficha.idusuario
					JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
					LEFT JOIN sino ON ficha1." . $cons . " = sino.iddisponibilidad
					WHERE
						ficha.fec_consulta <= '{$this->fecha2}' 
					AND ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY
						sino.disp_descripcion,
						ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}
	
		public function consecuenciasViolencia($consecuencia){
			$con = new Conexion();

			switch ($consecuencia) {
				case 'problemas':
					$cons = "cv_problemas";
					break;
				
				case 'empleo':
					$cons = "cv_perempleo";
					break;

				case 'limitacion':
					$cons = "cv_limitacion";
					break;

				case 'estudio':
					$cons = "cv_perestudio";
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
					JOIN ficha1 ON ficha1.idficha = ficha.idficha
					JOIN usuarios ON usuarios.idusuario = ficha.idusuario
					JOIN institucion ON usuarios.idinstitucion = institucion.idinstitucion
					LEFT JOIN sino ON ficha1." . $cons . " = sino.iddisponibilidad
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