<?php namespace Models1;
include_once 'conexion.php';

	class Ficha3{
		private $idficha3;
		private $idficha;
		private $embarazada;
		private $anviagresor;
		private $anmaltrato;
		private $idvinculo;
		private $cohab;
		private $idriesgo;
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

		public function agregarFicha3(){
                    $this->embarazada = !empty($this->embarazada) ? $this->embarazada : "NULL";
                    $this->anviagresor = !empty($this->anviagresor) ? $this->anviagresor : "NULL";
                    $this->anmaltrato = !empty($this->anmaltrato) ? $this->anmaltrato : "NULL";
                    $this->idriesgo = !empty($this->idriesgo) ? $this->idriesgo : "NULL";
                        $con = new Conexion();
			$sql ="INSERT INTO ficha3(idficha, embarazada, anviagresor, anmaltrato, idvinculo, cohab, idriesgo) VALUES ({$this->idficha}, {$this->embarazada}, {$this->anviagresor}, {$this->anmaltrato}, {$this->idvinculo}, {$this->cohab}, {$this->idriesgo})";
			$con->consultaSimple($sql);
			echo $sql;
		}

		public function eliminarFicha3(){
			$sql = "DELETE FROM ficha3 WHERE idficha3 = {$this->idficha3}";
			$this->con->consultaSimple($sql);
		}

		public function updateFicha3(){
                    $this->embarazada = !empty($this->embarazada) ? $this->embarazada : "NULL";
                    $this->anviagresor = !empty($this->anviagresor) ? $this->anviagresor : "NULL";
                    $this->anmaltrato = !empty($this->anmaltrato) ? $this->anmaltrato : "NULL";
                    $this->idriesgo = !empty($this->idriesgo) ? $this->idriesgo : "NULL";
                        $con = new Conexion();
			$sql = "UPDATE ficha3 SET embarazada = {$this->embarazada}, anviagresor = {$this->anviagresor}, anmaltrato = {$this->anmaltrato}, idvinculo = {$this->idvinculo}, cohab = {$this->cohab}, idriesgo = {$this->idriesgo} WHERE idficha = {$this->idficha}";
			$con->consultaSimple($sql);
		}

		public function verFicha3(){
                        $con = new Conexion();
			$sql = "SELECT * FROM ficha3 WHERE idficha = {$this->idficha}";
			$datos = $con->consultaRetorno($sql);
			$row = pg_fetch_assoc($datos);
			return $row;
		}
                
        public function ev_riesgo(){
			$con = new Conexion();
			$sql = "SELECT persona.per_dni, CONCAT(CONCAT(persona.per_apellido,', '),persona.per_nombre) as consultante, persona.per_celular, riesgo.rie_descripcion FROM persona, ficha, ficha3, riesgo, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha3.idficha = ficha.idficha AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND ficha3.idriesgo = riesgo.idriesgo AND ficha3.idriesgo = {$this->idriesgo}";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function agr_vinculo(){
			$con = new Conexion();
			$sql = "SELECT vinculo.vin_descripcion, COUNT(ficha.per_dni) as consultantes, institucion.ins_descripcion FROM vinculo, ficha3, ficha, usuarios, institucion WHERE ficha3.idficha = ficha.idficha AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND ficha3.idvinculo = vinculo.idvinculo AND ficha.fec_consulta >= '{$this->fecha1}' AND ficha.fec_consulta <= '{$this->fecha2}' GROUP BY vinculo.idvinculo, institucion.ins_descripcion ";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function agr_convivencia(){
			$con = new Conexion();
			$sql = "SELECT convivencia.conv_descripcion, COUNT(ficha.per_dni) as consultantes,
					(SELECT COUNT(ficha.per_dni) FROM ficha, usuarios, institucion WHERE ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] .") as total,

					(round(COUNT(ficha.per_dni)/(SELECT COUNT(ficha.per_dni) FROM ficha, usuarios, institucion WHERE ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] .")::numeric,3))*100 AS pnormal, institucion.ins_descripcion
					FROM ficha, convivencia, ficha3, usuarios, institucion
					WHERE ficha3.idficha = ficha.idficha AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND ficha3.cohab = convivencia.idconvivencia AND ficha.fec_consulta >= '{$this->fecha1}' AND ficha.fec_consulta <= '{$this->fecha2}' GROUP BY convivencia.conv_descripcion, institucion.ins_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function edad_vinculo(){
			$con = new Conexion();
			$sql = "CREATE OR REPLACE VIEW no_contesta AS SELECT COUNT(ficha.per_dni) as no_contesta, ficha3.idvinculo, vinculo.vin_descripcion 
					from persona,ficha, ficha3, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.idvinculo=vinculo.idvinculo AND
					persona.per_nacido is NULL AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND 
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.idvinculo, vinculo.vin_descripcion;

					CREATE OR REPLACE VIEW de_85_a_150 AS SELECT COUNT(ficha.per_dni) as de_85_a_150, ficha3.idvinculo, vinculo.vin_descripcion 
					from persona,ficha, ficha3, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.idvinculo=vinculo.idvinculo AND
					date_part('year', age(now(),persona.per_nacido)) >= 85 AND
					date_part('year', age(now(),persona.per_nacido)) <= 150 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND 
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.idvinculo, vinculo.vin_descripcion;

					CREATE OR REPLACE VIEW de_75_a_84 AS SELECT COUNT(ficha.per_dni) as de_75_a_84, ficha3.idvinculo, vinculo.vin_descripcion 
					from persona,ficha, ficha3, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.idvinculo=vinculo.idvinculo AND
					date_part('year', age(now(),persona.per_nacido)) >= 75 AND
					date_part('year', age(now(),persona.per_nacido)) < 85 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND 
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.idvinculo, vinculo.vin_descripcion;

					CREATE OR REPLACE VIEW de_65_a_74 AS SELECT COUNT(ficha.per_dni) as de_65_a_74, ficha3.idvinculo, vinculo.vin_descripcion 
					from persona,ficha, ficha3, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.idvinculo=vinculo.idvinculo AND
					date_part('year', age(now(),persona.per_nacido)) >= 65 AND
					date_part('year', age(now(),persona.per_nacido)) < 75 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND 
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.idvinculo, vinculo.vin_descripcion;

					CREATE OR REPLACE VIEW de_55_a_64 AS SELECT COUNT(ficha.per_dni) as de_55_a_64, ficha3.idvinculo, vinculo.vin_descripcion 
					from persona,ficha, ficha3, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.idvinculo=vinculo.idvinculo AND
					date_part('year', age(now(),persona.per_nacido)) >= 55 AND
					date_part('year', age(now(),persona.per_nacido)) < 65 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND 
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.idvinculo, vinculo.vin_descripcion;

					CREATE OR REPLACE VIEW de_45_a_54 AS SELECT COUNT(ficha.per_dni) as de_45_a_54, ficha3.idvinculo, vinculo.vin_descripcion 
					from persona,ficha, ficha3, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.idvinculo=vinculo.idvinculo AND
					date_part('year', age(now(),persona.per_nacido)) >= 45 AND
					date_part('year', age(now(),persona.per_nacido)) < 55 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND 
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.idvinculo, vinculo.vin_descripcion;

					CREATE OR REPLACE VIEW de_35_a_44 AS SELECT COUNT(ficha.per_dni) as de_35_a_44, ficha3.idvinculo, vinculo.vin_descripcion 
					from persona,ficha, ficha3, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.idvinculo=vinculo.idvinculo AND
					date_part('year', age(now(),persona.per_nacido)) >= 35 AND
					date_part('year', age(now(),persona.per_nacido)) < 45 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND 
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.idvinculo, vinculo.vin_descripcion;

					CREATE OR REPLACE VIEW de_25_a_34 AS SELECT COUNT(ficha.per_dni) as de_25_a_34, ficha3.idvinculo, vinculo.vin_descripcion 
					from persona,ficha, ficha3, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.idvinculo=vinculo.idvinculo AND
					date_part('year', age(now(),persona.per_nacido)) >= 25 AND
					date_part('year', age(now(),persona.per_nacido)) < 35 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND 
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.idvinculo, vinculo.vin_descripcion;

					CREATE OR REPLACE VIEW de_14_a_24 AS SELECT COUNT(ficha.per_dni) as de_14_a_24, ficha3.idvinculo, vinculo.vin_descripcion 
					from persona,ficha, ficha3, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.idvinculo=vinculo.idvinculo AND
					date_part('year', age(now(),persona.per_nacido)) >= 15 AND
					date_part('year', age(now(),persona.per_nacido)) < 25 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND 
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.idvinculo, vinculo.vin_descripcion;

					SELECT vinculo.vin_descripcion, de_14_a_24.de_14_a_24, de_25_a_34.de_25_a_34, de_35_a_44.de_35_a_44, de_45_a_54.de_45_a_54, de_55_a_64.de_55_a_64, de_65_a_74.de_65_a_74, de_75_a_84.de_75_a_84, de_85_a_150.de_85_a_150, no_contesta.no_contesta
					FROM VINCULO LEFT OUTER JOIN de_14_a_24 
					ON de_14_a_24.idvinculo = vinculo.idvinculo 
					LEFT OUTER JOIN de_25_a_34
					ON de_25_a_34.idvinculo = vinculo.idvinculo
					LEFT OUTER JOIN de_35_a_44
					ON de_35_a_44.idvinculo = vinculo.idvinculo 
					LEFT OUTER JOIN de_45_a_54
					ON de_45_a_54.idvinculo = vinculo.idvinculo 
					LEFT OUTER JOIN de_55_a_64
					ON de_55_a_64.idvinculo = vinculo.idvinculo 
					LEFT OUTER JOIN de_65_a_74
					ON de_65_a_74.idvinculo = vinculo.idvinculo 
					LEFT OUTER JOIN de_75_a_84
					ON de_75_a_84.idvinculo = vinculo.idvinculo 
					LEFT OUTER JOIN de_85_a_150
					ON de_85_a_150.idvinculo = vinculo.idvinculo
					LEFT OUTER JOIN no_contesta
					ON no_contesta.idvinculo = vinculo.idvinculo";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function vin_convivencia(){
			$con = new Conexion();
			$sql = "CREATE OR REPLACE VIEW pareja_novio AS SELECT COUNT(ficha.per_dni) as pareja_novio, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 1 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW ex_pareja AS SELECT COUNT(ficha.per_dni) as ex_pareja, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 2 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW ex_novio AS SELECT COUNT(ficha.per_dni) as ex_novio, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 3 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW padre AS SELECT COUNT(ficha.per_dni) as padre, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 4 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW padrastro AS SELECT COUNT(ficha.per_dni) as padrastro, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 5 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW madre AS SELECT COUNT(ficha.per_dni) as madre, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 6 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW madrastra AS SELECT COUNT(ficha.per_dni) as madrastra, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 7 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW hijo AS SELECT COUNT(ficha.per_dni) as hijo, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 8 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW hija AS SELECT COUNT(ficha.per_dni) as hija, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 9 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW hermano AS SELECT COUNT(ficha.per_dni) as hermano, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 10 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW hermana AS SELECT COUNT(ficha.per_dni) as hermana, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 11 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW otros_parientes AS SELECT COUNT(ficha.per_dni) as otros_parientes, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 12 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW otro_vinculo AS SELECT COUNT(ficha.per_dni) as otro_vinculo, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 13 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW agr_desconocido AS SELECT COUNT(ficha.per_dni) as agr_desconocido, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 99 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					SELECT convivencia.conv_descripcion, pareja_novio.pareja_novio, ex_pareja.ex_pareja, ex_novio.ex_novio, padre.padre, padrastro.padrastro, madre.madre, madrastra.madrastra, hijo.hijo, hija.hija, hermano.hermano, hermana.hermana, otros_parientes.otros_parientes, otro_vinculo.otro_vinculo, agr_desconocido.agr_desconocido
					FROM convivencia LEFT OUTER JOIN pareja_novio 
					ON pareja_novio.cohab = convivencia.idconvivencia
					LEFT OUTER JOIN ex_pareja
					ON ex_pareja.cohab = convivencia.idconvivencia
					LEFT OUTER JOIN ex_novio
					ON ex_novio.cohab = convivencia.idconvivencia 
					LEFT OUTER JOIN padre
					ON padre.cohab = convivencia.idconvivencia 
					LEFT OUTER JOIN padrastro
					ON padrastro.cohab = convivencia.idconvivencia 
					LEFT OUTER JOIN madre
					ON madre.cohab = convivencia.idconvivencia 
					LEFT OUTER JOIN madrastra
					ON madrastra.cohab = convivencia.idconvivencia 
					LEFT OUTER JOIN hijo
					ON hijo.cohab = convivencia.idconvivencia
					LEFT OUTER JOIN hija
					ON hija.cohab = convivencia.idconvivencia
					LEFT OUTER JOIN hermano
					ON hermano.cohab = convivencia.idconvivencia
					LEFT OUTER JOIN hermana
					ON hermana.cohab = convivencia.idconvivencia
					LEFT OUTER JOIN otros_parientes
					ON otros_parientes.cohab = convivencia.idconvivencia
					LEFT OUTER JOIN otro_vinculo
					ON otro_vinculo.cohab = convivencia.idconvivencia
					LEFT OUTER JOIN agr_desconocido
					ON agr_desconocido.cohab = convivencia.idconvivencia";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function agr_vinculoDep(){
			$con = new Conexion();
			$sql = "SELECT vinculo.vin_descripcion, COUNT(ficha.per_dni) as consultantes FROM vinculo, ficha3, ficha, usuarios, institucion WHERE ficha3.idficha = ficha.idficha AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND ficha3.idvinculo = vinculo.idvinculo AND ficha.fec_consulta >= '{$this->fecha1}' AND ficha.fec_consulta <= '{$this->fecha2}' GROUP BY vinculo.idvinculo ";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function edad_vinculoDep(){
			$con = new Conexion();
			$sql = "CREATE OR REPLACE VIEW no_contesta AS SELECT COUNT(ficha.per_dni) as no_contesta, ficha3.idvinculo, vinculo.vin_descripcion 
					from persona,ficha, ficha3, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.idvinculo=vinculo.idvinculo AND
					persona.per_nacido is NULL AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.idvinculo, vinculo.vin_descripcion;

					CREATE OR REPLACE VIEW de_85_a_150 AS SELECT COUNT(ficha.per_dni) as de_85_a_150, ficha3.idvinculo, vinculo.vin_descripcion 
					from persona,ficha, ficha3, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.idvinculo=vinculo.idvinculo AND
					date_part('year', age(now(),persona.per_nacido)) >= 85 AND
					date_part('year', age(now(),persona.per_nacido)) <= 150 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.idvinculo, vinculo.vin_descripcion;

					CREATE OR REPLACE VIEW de_75_a_84 AS SELECT COUNT(ficha.per_dni) as de_75_a_84, ficha3.idvinculo, vinculo.vin_descripcion 
					from persona,ficha, ficha3, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.idvinculo=vinculo.idvinculo AND
					date_part('year', age(now(),persona.per_nacido)) >= 75 AND
					date_part('year', age(now(),persona.per_nacido)) < 85 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.idvinculo, vinculo.vin_descripcion;

					CREATE OR REPLACE VIEW de_65_a_74 AS SELECT COUNT(ficha.per_dni) as de_65_a_74, ficha3.idvinculo, vinculo.vin_descripcion 
					from persona,ficha, ficha3, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.idvinculo=vinculo.idvinculo AND
					date_part('year', age(now(),persona.per_nacido)) >= 65 AND
					date_part('year', age(now(),persona.per_nacido)) < 75 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.idvinculo, vinculo.vin_descripcion;

					CREATE OR REPLACE VIEW de_55_a_64 AS SELECT COUNT(ficha.per_dni) as de_55_a_64, ficha3.idvinculo, vinculo.vin_descripcion 
					from persona,ficha, ficha3, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.idvinculo=vinculo.idvinculo AND
					date_part('year', age(now(),persona.per_nacido)) >= 55 AND
					date_part('year', age(now(),persona.per_nacido)) < 65 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.idvinculo, vinculo.vin_descripcion;

					CREATE OR REPLACE VIEW de_45_a_54 AS SELECT COUNT(ficha.per_dni) as de_45_a_54, ficha3.idvinculo, vinculo.vin_descripcion 
					from persona,ficha, ficha3, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.idvinculo=vinculo.idvinculo AND
					date_part('year', age(now(),persona.per_nacido)) >= 45 AND
					date_part('year', age(now(),persona.per_nacido)) < 55 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.idvinculo, vinculo.vin_descripcion;

					CREATE OR REPLACE VIEW de_35_a_44 AS SELECT COUNT(ficha.per_dni) as de_35_a_44, ficha3.idvinculo, vinculo.vin_descripcion 
					from persona,ficha, ficha3, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.idvinculo=vinculo.idvinculo AND
					date_part('year', age(now(),persona.per_nacido)) >= 35 AND
					date_part('year', age(now(),persona.per_nacido)) < 45 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.idvinculo, vinculo.vin_descripcion;

					CREATE OR REPLACE VIEW de_25_a_34 AS SELECT COUNT(ficha.per_dni) as de_25_a_34, ficha3.idvinculo, vinculo.vin_descripcion 
					from persona,ficha, ficha3, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.idvinculo=vinculo.idvinculo AND
					date_part('year', age(now(),persona.per_nacido)) >= 25 AND
					date_part('year', age(now(),persona.per_nacido)) < 35 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.idvinculo, vinculo.vin_descripcion;

					CREATE OR REPLACE VIEW de_14_a_24 AS SELECT COUNT(ficha.per_dni) as de_14_a_24, ficha3.idvinculo, vinculo.vin_descripcion 
					from persona,ficha, ficha3, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.idvinculo=vinculo.idvinculo AND
					date_part('year', age(now(),persona.per_nacido)) >= 14 AND
					date_part('year', age(now(),persona.per_nacido)) < 25 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.idvinculo, vinculo.vin_descripcion;

					SELECT vinculo.vin_descripcion, de_14_a_24.de_14_a_24, de_25_a_34.de_25_a_34, de_35_a_44.de_35_a_44, de_45_a_54.de_45_a_54, de_55_a_64.de_55_a_64, de_65_a_74.de_65_a_74, de_75_a_84.de_75_a_84, de_85_a_150.de_85_a_150, no_contesta.no_contesta
					FROM VINCULO LEFT OUTER JOIN de_14_a_24 
					ON de_14_a_24.idvinculo = vinculo.idvinculo 
					LEFT OUTER JOIN de_25_a_34
					ON de_25_a_34.idvinculo = vinculo.idvinculo
					LEFT OUTER JOIN de_35_a_44
					ON de_35_a_44.idvinculo = vinculo.idvinculo 
					LEFT OUTER JOIN de_45_a_54
					ON de_45_a_54.idvinculo = vinculo.idvinculo 
					LEFT OUTER JOIN de_55_a_64
					ON de_55_a_64.idvinculo = vinculo.idvinculo 
					LEFT OUTER JOIN de_65_a_74
					ON de_65_a_74.idvinculo = vinculo.idvinculo 
					LEFT OUTER JOIN de_75_a_84
					ON de_75_a_84.idvinculo = vinculo.idvinculo 
					LEFT OUTER JOIN de_85_a_150
					ON de_85_a_150.idvinculo = vinculo.idvinculo
					LEFT OUTER JOIN no_contesta
					ON no_contesta.idvinculo = vinculo.idvinculo";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function agr_convivenciaDep(){
			$con = new Conexion();
			$sql = "SELECT convivencia.conv_descripcion, COUNT(ficha.per_dni) as consultantes,
					(SELECT COUNT(ficha.per_dni) FROM ficha, usuarios, institucion WHERE ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion) as total,

					(round(COUNT(ficha.per_dni)/(SELECT COUNT(ficha.per_dni) FROM ficha, usuarios, institucion WHERE ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion)::numeric,3))*100 AS pnormal
					FROM ficha, convivencia, ficha3, usuarios, institucion
					WHERE ficha3.idficha = ficha.idficha AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND ficha3.cohab = convivencia.idconvivencia AND ficha.fec_consulta >= '{$this->fecha1}' AND ficha.fec_consulta <= '{$this->fecha2}' GROUP BY convivencia.conv_descripcion";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function vin_convivenciaDep(){
			$con = new Conexion();
			$sql = "CREATE OR REPLACE VIEW pareja_novio AS SELECT COUNT(ficha.per_dni) as pareja_novio, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 1 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW ex_pareja AS SELECT COUNT(ficha.per_dni) as ex_pareja, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 2 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW ex_novio AS SELECT COUNT(ficha.per_dni) as ex_novio, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 3 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW padre AS SELECT COUNT(ficha.per_dni) as padre, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 4 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW padrastro AS SELECT COUNT(ficha.per_dni) as padrastro, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 5 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW madre AS SELECT COUNT(ficha.per_dni) as madre, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 6 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW madrastra AS SELECT COUNT(ficha.per_dni) as madrastra, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 7 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW hijo AS SELECT COUNT(ficha.per_dni) as hijo, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 8 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW hija AS SELECT COUNT(ficha.per_dni) as hija, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 9 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW hermano AS SELECT COUNT(ficha.per_dni) as hermano, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 10 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW hermana AS SELECT COUNT(ficha.per_dni) as hermana, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 11 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW otros_parientes AS SELECT COUNT(ficha.per_dni) as otros_parientes, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 12 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW otro_vinculo AS SELECT COUNT(ficha.per_dni) as otro_vinculo, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 13 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					CREATE OR REPLACE VIEW agr_desconocido AS SELECT COUNT(ficha.per_dni) as agr_desconocido, ficha3.cohab, convivencia.conv_descripcion 
					from persona,ficha, ficha3, convivencia, vinculo, usuarios, institucion
					WHERE
					ficha.per_dni=persona.per_dni AND
					ficha.idficha=ficha3.idficha AND
					ficha3.cohab = convivencia.idconvivencia AND
					ficha3.idvinculo=vinculo.idvinculo AND
					ficha3.idvinculo = 99 AND
					ficha.idusuario=usuarios.idusuario AND
					usuarios.idinstitucion=institucion.idinstitucion AND
					ficha.fec_consulta <= '{$this->fecha2}' AND
					ficha.fec_consulta >= '{$this->fecha1}'
					GROUP BY ficha3.cohab, convivencia.conv_descripcion;

					SELECT convivencia.conv_descripcion, pareja_novio.pareja_novio, ex_pareja.ex_pareja, ex_novio.ex_novio, padre.padre, padrastro.padrastro, madre.madre, madrastra.madrastra, hijo.hijo, hija.hija, hermano.hermano, hermana.hermana, otros_parientes.otros_parientes, otro_vinculo.otro_vinculo, agr_desconocido.agr_desconocido
					FROM convivencia LEFT OUTER JOIN pareja_novio 
					ON pareja_novio.cohab = convivencia.idconvivencia
					LEFT OUTER JOIN ex_pareja
					ON ex_pareja.cohab = convivencia.idconvivencia
					LEFT OUTER JOIN ex_novio
					ON ex_novio.cohab = convivencia.idconvivencia 
					LEFT OUTER JOIN padre
					ON padre.cohab = convivencia.idconvivencia 
					LEFT OUTER JOIN padrastro
					ON padrastro.cohab = convivencia.idconvivencia 
					LEFT OUTER JOIN madre
					ON madre.cohab = convivencia.idconvivencia 
					LEFT OUTER JOIN madrastra
					ON madrastra.cohab = convivencia.idconvivencia 
					LEFT OUTER JOIN hijo
					ON hijo.cohab = convivencia.idconvivencia
					LEFT OUTER JOIN hija
					ON hija.cohab = convivencia.idconvivencia
					LEFT OUTER JOIN hermano
					ON hermano.cohab = convivencia.idconvivencia
					LEFT OUTER JOIN hermana
					ON hermana.cohab = convivencia.idconvivencia
					LEFT OUTER JOIN otros_parientes
					ON otros_parientes.cohab = convivencia.idconvivencia
					LEFT OUTER JOIN otro_vinculo
					ON otro_vinculo.cohab = convivencia.idconvivencia
					LEFT OUTER JOIN agr_desconocido
					ON agr_desconocido.cohab = convivencia.idconvivencia";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}
	}
?>