<?php namespace Models1;
include 'conexion.php';
	class Cautelar{
		private $idcautelar;
		private $ca_expediente;
		private $fec_ingreso;
		private $ca_oficio;
		private $idfiscalia;
		private $ca_causa;
		private $per_dni;
		//private $agresor;
		private $fec_hecho;
		private $ca_deporigen;
		private $ca_tipmedida;
		private $ca_domicilio;
		private $idcomisaria;
		private $ca_plazo;
		private $idregional;
		private $ca_observaciones;
		private $idusuario;
		private $ca_resolucion;
		private $per_dni_agresor;
		private $fecha1;
		private $fecha2;
		//------------------------
		private $consultante;
		private $fec_consulta;
		private $fec_agresion;
		private $ins_descripcion;
		//nuevo
		private $ca_domicilio2;
		private $ca_domicilio3;
		private $otrasvictimas;
		private $otrosagresores;
		private $ca_expedientefiscalia;
		private $fec_ingresovieja;
		private $ca_tipmedidas;

		public function __construct(){

		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function agregarCautelar(){
            $con = new Conexion();
            $this->ca_expediente = !empty($this->ca_expediente) ? $this->ca_expediente : "";
            $this->ca_resolucion = !empty($this->ca_resolucion) ? $this->ca_resolucion : "";
            $this->fec_ingreso = !empty($this->fec_ingreso) ? $this->fec_ingreso : "NULL";
            $this->ca_oficio = !empty($this->ca_oficio) ? $this->ca_oficio : "NULL";
            $this->idfiscalia = !empty($this->idfiscalia) ? $this->idfiscalia : "NULL";
            $this->ca_causa = !empty($this->ca_causa) ? $this->ca_causa : "";
            $this->per_dni = !empty($this->per_dni) ? $this->per_dni : "NULL";
            $this->per_dni_agresor = !empty($this->per_dni_agresor) ? $this->per_dni_agresor : "NULL";
            //$this->agresor = !empty($this->agresor) ? $this->agresor : "";
            $this->fec_hecho = !empty($this->fec_hecho) ? "'".$this->fec_hecho."'" : "NULL";
            $this->ca_deporigen = !empty($this->ca_deporigen) ? $this->ca_deporigen : "";
            $this->ca_tipmedida = !empty($this->ca_tipmedida) ? $this->ca_tipmedida : "NULL";
            $this->ca_tipmedidas = !empty($this->ca_tipmedidas) ? $this->ca_tipmedidas : "";
            $this->ca_domicilio = !empty($this->ca_domicilio) ? $this->ca_domicilio : "";
            $this->idcomisaria = !empty($this->idcomisaria) ? $this->idcomisaria : "NULL";
            $this->ca_plazo = !empty($this->ca_plazo) ? $this->ca_plazo : "NULL";
            $this->ca_observaciones = !empty($this->ca_observaciones) ? $this->ca_observaciones : "";
            //nuevo
            $this->ca_domicilio2 = !empty($this->ca_domicilio2) ? $this->ca_domicilio2 : "";
            $this->ca_domicilio3 = !empty($this->ca_domicilio3) ? $this->ca_domicilio3 : "";
            $this->otrasvictimas = !empty($this->otrasvictimas) ? $this->otrasvictimas : "";
            $this->otrosagresores = !empty($this->otrosagresores) ? $this->otrosagresores : "";
            $this->ca_expedientefiscalia = !empty($this->ca_expedientefiscalia) ? $this->ca_expedientefiscalia : "";
            $this->fec_ingresovieja = !empty($this->fec_ingresovieja) ? $this->fec_ingresovieja : "NULL";
			$sql = "INSERT INTO cautelar(ca_expediente, fec_ingreso, ca_oficio, idfiscalia, ca_causa, per_dni, fec_hecho, ca_deporigen, ca_tipmedida, ca_tipmedidas, ca_domicilio, idcomisaria, ca_plazo, ca_observaciones, idregional, idusuario, ca_resolucion, per_dni_agresor, ca_domicilio2, ca_domicilio3, otrasvictimas, otrosagresores, ca_expedientefiscalia, fec_ingresovieja) VALUES ('{$this->ca_expediente}', '{$this->fec_ingreso}',{$this->ca_oficio} ,{$this->idfiscalia}, '{$this->ca_causa}', {$this->per_dni}, {$this->fec_hecho}, '{$this->ca_deporigen}', {$this->ca_tipmedida}, '{$this->ca_tipmedidas}', '{$this->ca_domicilio}', {$this->idcomisaria}, {$this->ca_plazo}, '{$this->ca_observaciones}', {$this->idregional}, {$this->idusuario}, '{$this->ca_resolucion}', {$this->per_dni_agresor}, '{$this->ca_domicilio2}','{$this->ca_domicilio3}','{$this->otrasvictimas}', '{$this->otrosagresores}','{$this->ca_expedientefiscalia}','{$this->fec_ingresovieja}')";
			echo $sql;
			$con->consultaSimple($sql);
		}

		public function eliminarCautelar(){
			$con = new Conexion();
			$sql = "DELETE FROM cautelar WHERE idcautelar = {$this->idcautelar}";
			//echo $sql;
			$con->consultaSimple($sql);
		}

		public function updateCautelar(){
            $con = new Conexion();
            $this->ca_expediente = !empty($this->ca_expediente) ? $this->ca_expediente : "";
            $this->fec_ingreso = !empty($this->fec_ingreso) ? $this->fec_ingreso : "NULL";
            $this->ca_oficio = !empty($this->ca_oficio) ? $this->ca_oficio : "NULL";
            $this->idfiscalia = !empty($this->idfiscalia) ? $this->idfiscalia : "NULL";
            $this->ca_causa = !empty($this->ca_causa) ? $this->ca_causa : "";
            $this->per_dni = !empty($this->per_dni) ? $this->per_dni : "NULL";
            $this->per_dni_agresor = !empty($this->per_dni_agresor) ? $this->per_dni_agresor : "NULL";
            //$this->agresor = !empty($this->agresor) ? $this->agresor : "";
            $this->fec_hecho = !empty($this->fec_hecho) ? "'".$this->fec_hecho."'" : "NULL";
            $this->ca_deporigen = !empty($this->ca_deporigen) ? $this->ca_deporigen : "NULL";
            $this->ca_tipmedida = !empty($this->ca_tipmedida) ? $this->ca_tipmedida : "NULL";
            $this->ca_tipmedidas = !empty($this->ca_tipmedidas) ? $this->ca_tipmedidas : "";
            $this->ca_domicilio = !empty($this->ca_domicilio) ? $this->ca_domicilio : "";
            $this->ca_domicilio2 = !empty($this->ca_domicilio2) ? $this->ca_domicilio2 : "";
            $this->ca_domicilio3 = !empty($this->ca_domicilio3) ? $this->ca_domicilio3 : "";
            $this->idcomisaria = !empty($this->idcomisaria) ? $this->idcomisaria : "NULL";
            $this->ca_plazo = !empty($this->ca_plazo) ? $this->ca_plazo : "NULL";
            $this->ca_resolucion = !empty($this->ca_resolucion) ? $this->ca_resolucion : "";
            $this->otrasvictimas = !empty($this->otrasvictimas) ? $this->otrasvictimas : "";
            $this->ca_observaciones = !empty($this->ca_observaciones) ? $this->ca_observaciones : "";
            $this->ca_expedientefiscalia = !empty($this->ca_expedientefiscalia) ? $this->ca_expedientefiscalia : "";
            $this->fec_ingresovieja = !empty($this->fec_ingresovieja) ? $this->fec_ingresovieja : "NULL";
			$sql = "UPDATE cautelar SET ca_expediente = '{$this->ca_expediente}', fec_ingreso = '{$this->fec_ingreso}', ca_oficio = {$this->ca_oficio}, idfiscalia = {$this->idfiscalia}, ca_causa = '{$this->ca_causa}', per_dni = {$this->per_dni}, fec_hecho = {$this->fec_hecho}, ca_deporigen = '{$this->ca_deporigen}', ca_tipmedidas = '{$this->ca_tipmedidas}', otrosagresores = '{$this->otrosagresores}', ca_domicilio = '{$this->ca_domicilio}', ca_domicilio2 = '{$this->ca_domicilio2}', ca_domicilio3 = '{$this->ca_domicilio3}', idcomisaria = {$this->idcomisaria}, ca_plazo = {$this->ca_plazo}, ca_observaciones = '{$this->ca_observaciones}', idregional = {$this->idregional}, idusuario = {$this->idusuario}, ca_resolucion = '{$this->ca_resolucion}', per_dni_agresor = {$this->per_dni_agresor}, ca_expedientefiscalia = '{$this->ca_expedientefiscalia}' , fec_ingresovieja = '{$this->fec_ingresovieja}', otrasvictimas = '{$this->otrasvictimas}' WHERE idcautelar = {$this->idcautelar}";
			$con->consultaSimple($sql);
		}

		public function verCautelar(){
            $con = new Conexion();
			$sql = "SELECT cautelar.idcautelar, cautelar.ca_expediente, cautelar.fec_ingreso, cautelar.ca_oficio, fiscalia.fis_descripcion, cautelar.ca_causa, CONCAT(CONCAT(persona.per_apellido,', '),persona.per_nombre) as consultante, CONCAT(CONCAT(persona.per_apellido,', '),persona.per_nombre) as agresor, cautelar.fec_hecho, cautelar.ca_deporigen, cautelar.ca_tipmedidas, cautelar.ca_domicilio, comisaria.com_nombre, cautelar.ca_plazo, cautelar.ca_observaciones, regional.reg_nombre, cautelar.fec_ingreso, cautelar.ca_tipmedidas FROM cautelar, persona, comisaria, fiscalia, regional WHERE persona.per_dni = cautelar.per_dni AND cautelar.idfiscalia = fiscalia.idfiscalia AND cautelar.idcomisaria = comisaria.idcomisaria AND cautelar.idregional = regional.idregional AND cautelar.ca_expediente = '{$this->ca_expediente}' ORDER BY fec_ingreso DESC";
			//echo $sql;
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function verCautelarPorId(){
            $con = new Conexion();
			$sql = "SELECT  *
         FROM 
           (SELECT * FROM cautelar
					INNER JOIN persona ON persona.per_dni = cautelar.per_dni
					LEFT JOIN comisaria ON cautelar.idcomisaria = comisaria.idcomisaria 
					LEFT JOIN fiscalia ON cautelar.idfiscalia = fiscalia.idfiscalia 
					LEFT JOIN regional ON cautelar.idregional = regional.idregional
					WHERE cautelar.idcautelar = {$this->idcautelar}
					ORDER BY cautelar.fec_ingreso DESC) as cons1
         LEFT JOIN 
           (SELECT cautelar.idcautelar as id2, persona.per_dni as dni_agresor, persona.per_apellido as apellido_agresor, persona.per_nombre as nombre_agresor FROM persona, cautelar WHERE persona.per_dni = cautelar.per_dni_agresor) as cons2
          ON cons1.idcautelar = cons2.id2";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function verCautelares(){
            $con = new Conexion();
			$sql = "CREATE OR REPLACE VIEW cautelares_tmp_dni AS SELECT cautelar.per_dni, CONCAT(CONCAT(persona.per_apellido,', '),persona.per_nombre) as consultante, cautelar.fec_ingresovieja AS fec_consulta, cautelar.fec_hecho AS fec_agresion, institucion.ins_descripcion, cautelar.fec_ingreso, cautelar.ca_tipmedidas, cautelar.ca_plazo FROM cautelar, persona, institucion WHERE persona.per_dni = cautelar.per_dni AND institucion.idinstitucion = 13 AND cautelar.per_dni = {$this->per_dni} ORDER BY fec_consulta DESC";
			$con->consultaSimple($sql);
			$sql1 = "DROP TABLE IF EXISTS tmp_consulta_dni; CREATE TABLE tmp_consulta_dni AS SELECT * FROM cautelares_tmp_dni ORDER BY fec_consulta";
			$datos = $con->consultaRetorno($sql1);
			return $datos;
		}

		public function verCautelarVigentes(){
            $con = new Conexion();
			$sql = "SELECT  *
			FROM 
					(SELECT cautelar.idcautelar as id1, persona.per_dni, cautelar.per_dni_agresor, cautelar.idcautelar, cautelar.fec_ingresovieja, cautelar.ca_expedientefiscalia, cautelar.ca_expediente, cautelar.fec_ingreso as fechaingreso, cautelar.ca_oficio, fiscalia.fis_descripcion, cautelar.ca_causa, CONCAT(CONCAT(persona.per_apellido,', '),persona.per_nombre) as consultante, cautelar.fec_hecho, cautelar.ca_deporigen, cautelar.ca_domicilio, cautelar.ca_domicilio2, cautelar.ca_domicilio3, comisaria.com_nombre, comdep.com_nombre AS comdependencia, cautelar.ca_plazo, cautelar.ca_observaciones, regional.reg_nombre, cautelar.fec_ingreso, cautelar.ca_tipmedidas FROM cautelar
						INNER JOIN persona ON persona.per_dni = cautelar.per_dni
						LEFT JOIN comisaria ON cautelar.idcomisaria = comisaria.idcomisaria 
						LEFT JOIN comisaria AS comdep ON cautelar.ca_deporigen = comdep.idcomisaria::varchar
						LEFT JOIN fiscalia ON cautelar.idfiscalia = fiscalia.idfiscalia 
						LEFT JOIN regional ON cautelar.idregional = regional.idregional
						ORDER BY cautelar.fec_ingreso DESC) as cons1
			 LEFT JOIN 
			   (SELECT cautelar.idcautelar as id2, persona.per_dni as dni_agresor, CONCAT(CONCAT(persona.per_apellido,', '),persona.per_nombre) as agresor FROM persona, cautelar WHERE persona.per_dni = cautelar.per_dni_agresor) as cons2
			  ON cons1.id1 = cons2.id2
			  ORDER BY cons1.fechaingreso DESC";
			//echo $sql;
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function verSumarios(){
			$con = new Conexion();
			$sql = "CREATE OR REPLACE VIEW sumarios_tmp_dni AS SELECT sumario.per_dni, CONCAT(CONCAT(persona.per_apellido,', '),persona.per_nombre) as consultante, sumario.idtipo_medida AS ca_tipmedidas, sumario.sum_fecha AS fec_consulta, sumario.sum_fecha_hecho AS fec_agresion, institucion.ins_descripcion FROM sumario, persona, institucion WHERE persona.per_dni = sumario.per_dni AND institucion.idinstitucion = 16 AND sumario.per_dni = {$this->per_dni} ORDER BY sum_fecha DESC";
			$con->consultaSimple($sql);
			$sql1 = "SELECT * FROM sumarios_tmp_dni ORDER BY fec_consulta";
			$datos = $con->consultaRetorno($sql1);
			return $datos;
		}

		public function verTotalesCautelares(){
			$con = new Conexion();
			$sql1 = "CREATE OR REPLACE VIEW cautelares_por_dni AS  SELECT date_part('year'::text, cautelar.fec_ingreso) AS anio,
				    date_part('month'::text, cautelar.fec_ingreso) AS mes,
				    persona.per_dni,
				    count(cautelar.per_dni) AS dni,
				    institucion.ins_descripcion
				   FROM cautelar,
				    persona,
				    institucion,
				    usuarios
				  WHERE (((((cautelar.per_dni)::text = (persona.per_dni)::text) AND (cautelar.idusuario = usuarios.idusuario)) AND (usuarios.idinstitucion = institucion.idinstitucion)) AND (cautelar.fec_ingreso > '2000-01-01'::date))
				  GROUP BY date_part('year'::text, cautelar.fec_ingreso), date_part('month'::text, cautelar.fec_ingreso), persona.per_dni, institucion.ins_descripcion
				  ORDER BY date_part('year'::text, cautelar.fec_ingreso), date_part('month'::text, cautelar.fec_ingreso);";
			$con->consultaSimple($sql1);
			$sql = "SELECT anio, SUM(dni) as cautelares, ins_descripcion FROM cautelares_por_dni GROUP BY anio, ins_descripcion ORDER BY anio ASC";
			//echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />" . $sql;
			$datos = $con->consultaRetorno($sql);
			//$row = pg_affected_rows($datos);
			return $datos;	
		}

		public function VerCautelaresMes(){
			$con = new Conexion();
			$sql1 = "CREATE OR REPLACE VIEW cautelares_por_dni AS  SELECT date_part('year'::text, cautelar.fec_ingreso) AS anio,
				    date_part('month'::text, cautelar.fec_ingreso) AS mes,
				    persona.per_dni,
				    count(cautelar.per_dni) AS dni,
				    institucion.ins_descripcion
				   FROM cautelar,
				    persona,
				    institucion,
				    usuarios
				  WHERE (((((cautelar.per_dni)::text = (persona.per_dni)::text) AND (cautelar.idusuario = usuarios.idusuario)) AND (usuarios.idinstitucion = institucion.idinstitucion)) AND (cautelar.fec_ingreso > '2000-01-01'::date))
				  GROUP BY date_part('year'::text, cautelar.fec_ingreso), date_part('month'::text, cautelar.fec_ingreso), persona.per_dni, institucion.ins_descripcion
				  ORDER BY date_part('year'::text, cautelar.fec_ingreso), date_part('month'::text, cautelar.fec_ingreso);";
			$con->consultaSimple($sql1);
			$sql = "SELECT anio, mes, COUNT(dni) as personas, SUM(dni) as cautelares, ins_descripcion FROM cautelares_por_dni WHERE anio = ". $_GET['anio'] ." GROUP BY anio, mes, ins_descripcion ORDER BY mes ASC";
			//echo "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />" . $sql;
			$datos = $con->consultaRetorno($sql);
			//$row = pg_affected_rows($datos);
			return $datos;	
		}

		public function medidasPorTipo(){
            $con = new Conexion();
			$sql = "SELECT COUNT(cautelar.idcautelar) AS  medidas, cautelar.ca_tipmedidas FROM cautelar WHERE cautelar.fec_ingreso >= '{$this->fecha1}' AND cautelar.fec_ingreso <= '{$this->fecha2}' GROUP BY cautelar.ca_tipmedidas";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}
	}
?>