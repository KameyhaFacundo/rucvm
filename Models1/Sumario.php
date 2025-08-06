<?php namespace Models1;
include 'conexion.php';
	class Sumario{
		private $idsumario;
		private $sum_numero;
		private $sum_fecha;
		private $idfiscalia;
		private $sum_fecha_hecho;
        private $per_dni;
        private $per_dni_agresor;
		private $idde_externa;
		private $sum_dom_hecho;
		private $sum_tel_familiar;
		private $sum_menor;
		private $idcomisaria;
		private $sum_legajo;
		private $sum_juez;
		private $sum_tramite;
		private $idtipo_medida;
		private $sum_fecha_medida;
		private $sum_resultado;
        private $idcausa;
        private $idvinculo;
		//------------------------

		public function __construct(){

		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function agregarSumario(){
            $con = new Conexion();
            $this->sum_menor = !empty($this->sum_menor) ? $this->sum_menor : NULL;
            $this->sum_legajo = !empty($this->sum_legajo) ? $this->sum_legajo : "";
            $this->sum_juez = !empty($this->sum_juez) ? $this->sum_juez : "";
            $this->sum_tramite = !empty($this->sum_tramite) ? $this->sum_tramite : "";
            $this->idtipo_medida = !empty($this->idtipo_medida) ? $this->idtipo_medida : "";
            $this->sum_resultado = !empty($this->sum_resultado) ? $this->sum_resultado : "";
            $this->sum_tel_familiar = !empty($this->sum_tel_familiar) ? $this->sum_tel_familiar : "";
            $this->per_dni_agresor = !empty($this->per_dni_agresor) ? $this->per_dni_agresor : 'null';
			$sql = "INSERT INTO sumario(sum_numero, sum_fecha, idfiscalia, sum_fecha_hecho, idde_externa, per_dni,sum_tel_familiar, idcomisaria, sum_menor, sum_legajo, sum_juez, sum_tramite, idtipo_medida, sum_resultado, idcausa, per_dni_agresor, idvinculo) VALUES ('{$this->sum_numero}', '{$this->sum_fecha}',{$this->idfiscalia} ,'{$this->sum_fecha_hecho}', {$this->idde_externa}, {$this->per_dni}, {$this->sum_tel_familiar}, {$this->idcomisaria}, {$this->sum_menor}, '{$this->sum_legajo}', '{$this->sum_juez}', '{$this->sum_tramite}', '{$this->idtipo_medida}', '{$this->sum_resultado}', '{$this->idcausa}', {$this->per_dni_agresor}, {$this->idvinculo})";
			$con->consultaSimple($sql);
		}

		public function eliminarSumario(){
			$con = new Conexion();
			$sql = "DELETE FROM sumario WHERE idsumario = {$this->idsumario}";
			$con->consultaSimple($sql);
		}

		public function updateSumario(){
            $con = new Conexion();
            $this->sum_menor = !empty($this->sum_menor) ? $this->sum_menor : NULL;
            $this->sum_legajo = !empty($this->sum_legajo) ? $this->sum_legajo : "";
            $this->sum_juez = !empty($this->sum_juez) ? $this->sum_juez : "";
            $this->sum_tramite = !empty($this->sum_tramite) ? $this->sum_tramite : "";
            $this->idtipo_medida = !empty($this->idtipo_medida) ? $this->idtipo_medida : "";
            $this->sum_resultado = !empty($this->sum_resultado) ? $this->sum_resultado : "";
            $this->sum_tel_familiar = !empty($this->sum_tel_familiar) ? $this->sum_tel_familiar : "";
            $this->per_dni_agresor = !empty($this->per_dni_agresor) ? $this->per_dni_agresor : 'null';
			$sql = "UPDATE sumario SET sum_numero = '{$this->sum_numero}', sum_fecha = '{$this->sum_fecha}', idfiscalia = {$this->idfiscalia}, sum_fecha_hecho = '{$this->sum_fecha_hecho}', sum_tel_familiar = {$this->sum_tel_familiar}, idcomisaria = {$this->idcomisaria}, sum_menor = {$this->sum_menor}, sum_legajo = '{$this->sum_legajo}', sum_juez = '{$this->sum_juez}', sum_tramite = '{$this->sum_tramite}', idtipo_medida = '{$this->idtipo_medida}', sum_resultado = '{$this->sum_resultado}', idcausa = '{$this->idcausa}', per_dni_agresor = {$this->per_dni_agresor}, idvinculo = {$this->idvinculo}, idde_externa = '{$this->idde_externa}' WHERE idsumario = {$this->idsumario}";
			$con->consultaSimple($sql);
		}

		public function verSumario(){
            $con = new Conexion();
			$sql = "SELECT  *
			FROM
					(SELECT sumario.idsumario as id1, persona.per_dni, persona.per_celular, persona.per_domicilio, sumario.per_dni_agresor, sumario.idsumario, sumario.sum_numero, sumario.sum_tramite, sumario.sum_fecha as sum_fecha, sumario.sum_legajo, fiscalia.fis_descripcion, sumario.idcausa, CONCAT(CONCAT(persona.per_apellido,', '),persona.per_nombre) as consultante, sumario.sum_fecha_hecho, sumario.sum_juez, sumario.sum_tel_familiar, de_externa.ext_descripcion, sumario.sum_menor, comisaria.com_nombre, sumario.sum_resultado, vinculo.vin_descripcion, sumario.idtipo_medida FROM sumario
						INNER JOIN persona ON persona.per_dni = sumario.per_dni
						LEFT JOIN comisaria ON sumario.idcomisaria = comisaria.idcomisaria
						LEFT JOIN fiscalia ON sumario.idfiscalia = fiscalia.idfiscalia
						LEFT JOIN vinculo ON sumario.idvinculo = vinculo.idvinculo
						LEFT JOIN de_externa ON sumario.idde_externa = de_externa.idexterna
						ORDER BY sumario.sum_fecha DESC) as cons1
			 LEFT JOIN
			   (SELECT sumario.idsumario as id2, persona.per_dni as dni_agresor, CONCAT(CONCAT(persona.per_apellido,', '),persona.per_nombre) as agresor, persona.per_celular as per_celular_agresor, persona.per_domicilio as per_domicilio_agresor FROM persona, sumario WHERE persona.per_dni = sumario.per_dni_agresor) as cons2
			  ON cons1.id1 = cons2.id2
			  WHERE cons1.sum_numero = '{$this->sum_numero}'
			  ORDER BY cons1.sum_fecha DESC";

			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function verSumarioPorId(){
            $con = new Conexion();
			$sql = "SELECT  *
         FROM
           (SELECT * FROM sumario
		    INNER JOIN persona ON persona.per_dni = sumario.per_dni
			LEFT JOIN comisaria ON sumario.idcomisaria = comisaria.idcomisaria
			LEFT JOIN fiscalia ON sumario.idfiscalia = fiscalia.idfiscalia
			LEFT JOIN vinculo ON sumario.idvinculo = vinculo.idvinculo
			LEFT JOIN de_externa ON sumario.idde_externa = de_externa.idexterna
					WHERE sumario.idsumario = {$this->idsumario}) as cons1
         LEFT JOIN
           (SELECT sumario.idsumario as id2, persona.per_dni as dni_agresor, persona.per_apellido as apellido_agresor, persona.per_nombre as nombre_agresor, persona.per_domicilio as domicilio_agresor, persona.per_celular as celular_agresor FROM persona, sumario WHERE persona.per_dni = sumario.per_dni_agresor) as cons2
		  ON cons1.idsumario = cons2.id2";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function verSumarios(){
            $con = new Conexion();
			$sql = "CREATE OR REPLACE VIEW sumarios_tmp_dni AS SELECT sumario.per_dni, CONCAT(CONCAT(persona.per_apellido,', '),persona.per_nombre) as consultante, sumario.sum_fecha AS fec_consulta, sumario.sum_fecha_hecho AS fec_agresion, institucion.ins_descripcion, sumario.sum_fecha, sumario.idtipo_medida FROM sumario, persona, institucion WHERE persona.per_dni = sumario.per_dni AND institucion.idinstitucion = 16 AND sumario.per_dni = {$this->per_dni} ORDER BY sum_fecha DESC";
			$con->consultaSimple($sql);
			$sql1 = "DROP TABLE IF EXISTS tmp_consulta_dni; CREATE TABLE tmp_consulta_dni AS SELECT * FROM sumarios_tmp_dni ORDER BY fec_consulta";
			$datos = $con->consultaRetorno($sql1);
			return $datos;
		}

		public function getSumarios(){
            $con = new Conexion();
			$sql = "SELECT  *
			FROM
					(SELECT sumario.idsumario as id1, persona.per_dni, persona.per_celular, persona.per_domicilio, sumario.per_dni_agresor, sumario.idsumario, sumario.sum_numero, sumario.sum_tramite, sumario.sum_fecha as sum_fecha, sumario.sum_legajo, fiscalia.fis_descripcion, sumario.idcausa, CONCAT(CONCAT(persona.per_apellido,', '),persona.per_nombre) as consultante, sumario.sum_fecha_hecho, sumario.sum_juez, sumario.sum_tel_familiar, de_externa.ext_descripcion, sumario.sum_menor, comisaria.com_nombre, sumario.sum_resultado, vinculo.vin_descripcion, sumario.idtipo_medida FROM sumario
						INNER JOIN persona ON persona.per_dni = sumario.per_dni
						LEFT JOIN comisaria ON sumario.idcomisaria = comisaria.idcomisaria
						LEFT JOIN fiscalia ON sumario.idfiscalia = fiscalia.idfiscalia
						LEFT JOIN vinculo ON sumario.idvinculo = vinculo.idvinculo
						LEFT JOIN de_externa ON sumario.idde_externa = de_externa.idexterna
						ORDER BY sumario.sum_fecha DESC) as cons1
			 LEFT JOIN
			   (SELECT sumario.idsumario as id2, persona.per_dni as dni_agresor, CONCAT(CONCAT(persona.per_apellido,', '),persona.per_nombre) as agresor, persona.per_celular as per_celular_agresor, persona.per_domicilio as per_domicilio_agresor FROM persona, sumario WHERE persona.per_dni = sumario.per_dni_agresor) as cons2
			  ON cons1.id1 = cons2.id2
			  ORDER BY cons1.sum_fecha DESC";
			//echo $sql;
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}

		public function getExternas1(){
			$con = new Conexion();
			$sql = "SELECT * FROM de_externa ORDER BY ext_descripcion";
			$datos1 = $con->consultaRetorno($sql);
			return $datos1;
		}

		public function getExternas2($idde_externa){
			$con = new Conexion();
			$sql2 = "SELECT * FROM de_externa where idexterna = $idde_externa";
			$datos2 = $con->consultaRetorno($sql2);
			return $datos2;
		}

		public function getVinculo1(){
			$con = new Conexion();
			$sql = "SELECT * FROM vinculo ORDER BY vin_descripcion";
			$datos1 = $con->consultaRetorno($sql);
			return $datos1;
		}

		public function getVinculo2($idvinculo){
			$con = new Conexion();
			$sql2 = "SELECT * FROM vinculo where idvinculo = $idvinculo ORDER BY vin_descripcion";
			$datos2 = $con->consultaRetorno($sql2);
			return $datos2;
		}
	}
?>
