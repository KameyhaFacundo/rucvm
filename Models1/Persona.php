<?php namespace Models1;
include_once 'conexion.php';


	class Persona{
		private $idpersona;
		private $per_dni;
		private $per_apellido;
		private $per_nombre;
		private $idsexo;
		private $idgenero;
		private $idestadocivil;
		private $per_nacido;
		private $per_edad;
		private $per_celular;
		private $per_discapacitada;
		private $per_domicilio;
		private $idlocalidad;
		private $iddepartamento;
		private $agresor;
		private $victima;
        private $fecha1;
		private $fecha2;
        //private $con;

		public function __construct(){
                    //$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo, $contenido){
			return $this->$atributo;
		}

		public function agregarPersona(){
			        $this->iddepartamento = !empty($this->iddepartamento) ? $this->iddepartamento : "NULL";
                    $this->idsexo = !empty($this->idsexo) ? $this->idsexo : "NULL";
                    $this->idgenero = !empty($this->idgenero) ? $this->idgenero : "NULL";
                    $this->idestadocivil = !empty($this->idestadocivil) ? $this->idestadocivil : "NULL";
                    $this->per_nacido = !empty($this->per_nacido) ? $this->per_nacido : "NULL";
                    $this->per_celular = !empty($this->per_celular) ? $this->per_celular : "NULL";
                    $this->per_discapacitada = !empty($this->per_discapacitada) ? $this->per_discapacitada : "NULL";
                    $this->per_domicilio = !empty($this->per_domicilio) ? $this->per_domicilio : "NULL";
                    $this->idlocalidad = !empty($this->idlocalidad) ? $this->idlocalidad : "NULL";
                        $con = new Conexion();
			$sql = "INSERT INTO persona(per_dni, per_apellido, per_nombre, idsexo, idgenero, idestadocivil, per_nacido, per_celular, per_discapacitada, per_domicilio, idlocalidad, iddepartamento, victima) VALUES ({$this->per_dni}, '{$this->per_apellido}', '{$this->per_nombre}', {$this->idsexo}, {$this->idgenero}, {$this->idestadocivil}, '{$this->per_nacido}', {$this->per_celular}, {$this->per_discapacitada}, '{$this->per_domicilio}', {$this->idlocalidad}, {$this->iddepartamento}, 1)";                     
                        $con->consultaSimple($sql);
                        //echo $sql;                  
		}

		public function agregarPersonaPol(){
            $con = new Conexion();
			$sql = "INSERT INTO persona(per_dni, per_apellido, per_nombre, victima, agresor) VALUES ({$this->per_dni}, '{$this->per_apellido}', '{$this->per_nombre}', {$this->victima}, {$this->agresor})";                     
            $con->consultaSimple($sql);
            //echo $sql;                  
		}		

		public function eliminarPersona(){
			$sql = "DELETE FROM persona WHERE per_dni = '{$this->per_dni}'";
			$this->con->consultaSimple($sql);
		}

		public function updatePersona(){
				     $this->iddepartamento = ($this->iddepartamento==0) ? "NULL" : $this->iddepartamento;
				     $this->idlocalidad = ($this->idlocalidad==0) ? "NULL" : $this->idlocalidad;
                    $this->idsexo = !empty($this->idsexo) ? $this->idsexo : "NULL";
                    $this->idestadocivil = !empty($this->idestadocivil) ? $this->idestadocivil : "NULL";
                    $this->per_nacido = !empty($this->per_nacido) ? $this->per_nacido : "NULL";
                    $this->per_celular = !empty($this->per_celular) ? $this->per_celular : "NULL";
                    $this->per_discapacitada = !empty($this->per_discapacitada) ? $this->per_discapacitada : "NULL";
                    $this->per_domicilio = !empty($this->per_domicilio) ? $this->per_domicilio : " ";
                        $con = new Conexion();
			$sql = "UPDATE persona SET per_apellido = '{$this->per_apellido}', per_nombre = '{$this->per_nombre}', idsexo = {$this->idsexo}, idgenero = {$this->idgenero}, idestadocivil = {$this->idestadocivil}, per_nacido = '{$this->per_nacido}', per_celular = {$this->per_celular}, per_discapacitada = {$this->per_discapacitada}, per_domicilio = '{$this->per_domicilio}', idlocalidad = {$this->idlocalidad}, iddepartamento = {$this->iddepartamento}, victima = 1 WHERE per_dni = {$this->per_dni}";
            $con->consultaSimple($sql);
		}

		public function updatePersonaPol_v(){
            $con = new Conexion();
			$sql = "UPDATE persona SET per_apellido = '{$this->per_apellido}', per_nombre = '{$this->per_nombre}', victima = {$this->victima}, per_domicilio = '{$this->per_domicilio}' , per_celular = {$this->per_celular} WHERE per_dni = {$this->per_dni}";			
            $con->consultaSimple($sql);
		}

		public function updatePersonaPol_a(){
            $con = new Conexion();
			$sql = "UPDATE persona SET per_apellido = '{$this->per_apellido}', per_nombre = '{$this->per_nombre}', per_domicilio = '{$this->per_domicilio}' , per_celular = {$this->per_celular} , agresor = {$this->agresor} WHERE per_dni = {$this->per_dni}";
            $con->consultaSimple($sql);
		}

		public function verPersona(){
			$con = new Conexion();
			$sql = "SELECT * FROM persona WHERE per_dni = {$this->per_dni}";
			//echo $sql;
			$datos = $con->consultaRetorno($sql);
			//$row = pg_fetch_assoc($datos);
			return $datos;
		}
                
                
                
                
        public function verPersona1(){
            $con = new Conexion();
			$sql = "SELECT p.*,f.idficha AS idficha FROM ficha AS f INNER JOIN persona AS p ON p.per_dni=f.per_dni WHERE f.idficha = {$this->idficha}";
			//echo $sql;
            $datos = $con->consultaRetorno($sql);
			$row = pg_fetch_assoc($datos);
			return $row;
		}

		public function listarDepartamento(){
			$con = new Conexion();
			$sql = "SELECT * FROM departamento ORDER BY iddepartamento ASC";
			$datos1 = $con->consultaRetorno($sql);
			//$row = pg_fetch_assoc($datos);
			return $datos1;
		}

		public function listarLocalidad(){
			$con = new Conexion();
			$sql = "SELECT * FROM localidad, departamento WHERE localidad.iddperatamento = departamento.iddepartamento AND departamento.iddepartamento = {$this->idlocalidad} ORDER BY idlocalidad ASC";
			$datos1 = $con->consultaRetorno($sql);
			//$row = pg_fetch_assoc($datos);
			return $datos1;
		}
                

                
                function busca_edad($fecha_nacimiento){
                        $dia=date("d");
                        $mes=date("m");
                        $ano=date("Y");

                        $dianaz=date("d",strtotime($fecha_nacimiento));
                        $mesnaz=date("m",strtotime($fecha_nacimiento));
                        $anonaz=date("Y",strtotime($fecha_nacimiento));

                        //si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual
                        if (($mesnaz == $mes) && ($dianaz > $dia)) {
                        $ano=($ano-1); }

                        //si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual
                        if ($mesnaz > $mes) {
                        $ano=($ano-1);}

                        //ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad
                        $edad=($ano-$anonaz);

                        return $edad;
                 }
                 
        public function cantFilaPersona(){
                        $con = new Conexion();
			$sql = "SELECT * from persona where per_dni={$this->per_dni}";
                        //echo $sql;
			$datos = $con->consultaRetorno($sql);
                        $numrows = pg_num_rows($datos);
                        //echo "cantidad: ".$numrows;
			return $numrows;
		}
                
        public function edadConsultante(){
			$con = new Conexion();
			
			$sql = " SELECT (SELECT institucion.ins_descripcion FROM institucion WHERE institucion.idinstitucion = ". $_SESSION['idinstitucion']. "),
					(SELECT count(persona) as de_15_a_17 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (15)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (18)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons1),
					(SELECT count(persona) as de_18_a_19 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (18)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (20)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons2),
					(SELECT count(persona) as de_20_a_24 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (20)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (25)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons3),
					(SELECT count(persona) as de_25_a_29 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (25)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (30)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons4),
					(SELECT count(persona) as de_30_a_34 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (30)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (35)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons5),
					(SELECT count(persona) as de_35_a_39 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (35)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (40)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons6),
					(SELECT count(persona) as de_40_a_44 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (40)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (45)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons7),
					(SELECT count(persona) as de_45_a_49 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (45)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (50)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons8),
					(SELECT count(persona) as de_50_a_54 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (50)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (55)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons9),
					(SELECT count(persona) as de_55_a_59 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (55)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (60)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons10),
					(SELECT count(persona) as de_60_a_64 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (60)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (65)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons11),
					(SELECT count(persona) as de_65_a_69 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (65)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (70)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons12),
					(SELECT count(persona) as de_70_a_74 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (70)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (75)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons13),
					(SELECT count(persona) as de_75_a_79 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (75)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (80)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons14),
					(SELECT count(persona) as de_80_a_84 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (80)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (85)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons15),
					(SELECT count(persona) as de_85_a_89 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (85)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (90)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons16),
					(SELECT count(persona) as de_90_a_94 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (90)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (95)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons17),
					(SELECT count(persona) as no_contesta FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND persona.per_nacido IS NULL AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ." GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons18);";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}
                 
        public function updatePersonaReincidencia(){
        	$this->iddepartamento = ($this->iddepartamento==0) ? "NULL" : $this->iddepartamento;
			$this->idlocalidad = ($this->idlocalidad==0) ? "NULL" : $this->idlocalidad;
            $this->idsexo = !empty($this->idsexo) ? $this->idsexo : "NULL";
            $this->idestadocivil = !empty($this->idestadocivil) ? $this->idestadocivil : "NULL";
            $this->per_nacido = !empty($this->per_nacido) ? $this->per_nacido : "NULL";
            $this->per_celular = !empty($this->per_celular) ? $this->per_celular : "NULL";
            $this->per_domicilio = !empty($this->per_domicilio) ? $this->per_domicilio : " ";
            
            $con = new Conexion();
			$sql = "UPDATE persona SET per_apellido = '{$this->per_apellido}', per_nombre = '{$this->per_nombre}', idsexo = {$this->idsexo}, idgenero = {$this->idgenero}, idestadocivil = {$this->idestadocivil}, per_nacido = '{$this->per_nacido}',per_celular = {$this->per_celular}, per_domicilio = '{$this->per_domicilio}', idlocalidad = {$this->idlocalidad}, iddepartamento = {$this->iddepartamento} WHERE per_dni = {$this->per_dni}";
            $con->consultaSimple($sql);
		}             


		public function edadConsultanteDep(){
			$con = new Conexion();
			
			$sql = " SELECT 
					(SELECT count(persona) as de_15_a_17 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (14)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (18)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons1),
					(SELECT count(persona) as de_18_a_19 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (18)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (20)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons2),
					(SELECT count(persona) as de_20_a_24 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (20)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (25)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons3),
					(SELECT count(persona) as de_25_a_29 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (25)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (30)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons4),
					(SELECT count(persona) as de_30_a_34 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (30)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (35)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons5),
					(SELECT count(persona) as de_35_a_39 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (35)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (40)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons6),
					(SELECT count(persona) as de_40_a_44 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (40)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (45)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons7),
					(SELECT count(persona) as de_45_a_49 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (45)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (50)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons8),
					(SELECT count(persona) as de_50_a_54 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (50)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (55)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons9),
					(SELECT count(persona) as de_55_a_59 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (55)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (60)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons10),
					(SELECT count(persona) as de_60_a_64 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (60)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (65)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons11),
					(SELECT count(persona) as de_65_a_69 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (65)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (70)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons12),
					(SELECT count(persona) as de_70_a_74 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (70)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (75)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons13),
					(SELECT count(persona) as de_75_a_79 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (75)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (80)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons14),
					(SELECT count(persona) as de_80_a_84 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (80)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (85)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons15),
					(SELECT count(persona) as de_85_a_89 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (85)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (90)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons16),
					(SELECT count(persona) as de_90_a_94 FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) >= (90)::double precision) AND (date_part('year'::text, age(now(), (persona.per_nacido)::timestamp with time zone)) < (130)::double precision) AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons17),
					(SELECT count(persona) as no_contesta FROM (SELECT persona.per_dni AS persona, count(ficha.per_dni) AS fichas FROM persona, ficha, institucion, usuarios WHERE persona.per_dni = ficha.per_dni AND ficha.fec_consulta <= '{$this->fecha2}' AND ficha.fec_consulta >= '{$this->fecha1}' AND persona.per_nacido IS NULL AND ficha.idusuario = usuarios.idusuario AND usuarios.idinstitucion = institucion.idinstitucion GROUP BY persona.per_dni ORDER BY fichas DESC) AS cons18);";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}
		

		public function edad_departamento(){
            $con = new Conexion();
			$sql = "CREATE
			OR REPLACE VIEW edad_dep_no_contesta AS SELECT
				COUNT (ficha.per_dni) AS edad_dep_no_contesta,
				persona.iddepartamento,
				departamento.dep_descripcion
			FROM
				persona,
				ficha,
				usuarios,
				institucion,
				departamento
			WHERE
				ficha.per_dni = persona.per_dni
			AND persona.iddepartamento = departamento.iddepartamento
			AND persona.per_nacido IS NULL
			AND ficha.idusuario = usuarios.idusuario
			AND usuarios.idinstitucion = institucion.idinstitucion
			AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
			AND ficha.fec_consulta <= '{$this->fecha2}'
			AND ficha.fec_consulta >= '{$this->fecha1}'
			GROUP BY
				persona.iddepartamento,
				departamento.dep_descripcion;
			
			CREATE
			OR REPLACE VIEW edad_dep_de_85_a_150 AS SELECT
				COUNT (ficha.per_dni) AS edad_dep_de_85_a_150,
				persona.iddepartamento,
				departamento.dep_descripcion
			FROM
				persona,
				ficha,
				usuarios,
				institucion,
				departamento
			WHERE
				ficha.per_dni = persona.per_dni
			AND persona.iddepartamento = departamento.iddepartamento
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) >= 85
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) <= 150
			AND ficha.idusuario = usuarios.idusuario
			AND usuarios.idinstitucion = institucion.idinstitucion
			AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
			AND ficha.fec_consulta <= '{$this->fecha2}'
			AND ficha.fec_consulta >= '{$this->fecha1}'
			GROUP BY
				persona.iddepartamento,
				departamento.dep_descripcion;
			
			CREATE
			OR REPLACE VIEW edad_dep_de_75_a_84 AS SELECT
				COUNT (ficha.per_dni) AS edad_dep_de_75_a_84,
				persona.iddepartamento,
				departamento.dep_descripcion
			FROM
				persona,
				ficha,
				usuarios,
				institucion,
				departamento
			WHERE
				ficha.per_dni = persona.per_dni
			AND persona.iddepartamento = departamento.iddepartamento
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) >= 75
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) < 85
			AND ficha.idusuario = usuarios.idusuario
			AND usuarios.idinstitucion = institucion.idinstitucion
			AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
			AND ficha.fec_consulta <= '{$this->fecha2}'
			AND ficha.fec_consulta >= '{$this->fecha1}'
			GROUP BY
				persona.iddepartamento,
				departamento.dep_descripcion;
			
			CREATE
			OR REPLACE VIEW edad_dep_de_65_a_74 AS SELECT
				COUNT (ficha.per_dni) AS edad_dep_de_65_a_74,
				persona.iddepartamento,
				departamento.dep_descripcion
			FROM
				persona,
				ficha,
				usuarios,
				institucion,
				departamento
			WHERE
				ficha.per_dni = persona.per_dni
			AND persona.iddepartamento = departamento.iddepartamento
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) >= 65
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) < 75
			AND ficha.idusuario = usuarios.idusuario
			AND usuarios.idinstitucion = institucion.idinstitucion
			AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
			AND ficha.fec_consulta <= '{$this->fecha2}'
			AND ficha.fec_consulta >= '{$this->fecha1}'
			GROUP BY
				persona.iddepartamento,
				departamento.dep_descripcion;
			
			CREATE
			OR REPLACE VIEW edad_dep_de_55_a_64 AS SELECT
				COUNT (ficha.per_dni) AS edad_dep_de_55_a_64,
				persona.iddepartamento,
				departamento.dep_descripcion
			FROM
				persona,
				ficha,
				usuarios,
				institucion,
				departamento
			WHERE
				ficha.per_dni = persona.per_dni
			AND persona.iddepartamento = departamento.iddepartamento
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) >= 55
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) < 65
			AND ficha.idusuario = usuarios.idusuario
			AND usuarios.idinstitucion = institucion.idinstitucion
			AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
			AND ficha.fec_consulta <= '{$this->fecha2}'
			AND ficha.fec_consulta >= '{$this->fecha1}'
			GROUP BY
				persona.iddepartamento,
				departamento.dep_descripcion;
			
			CREATE
			OR REPLACE VIEW edad_dep_de_45_a_54 AS SELECT
				COUNT (ficha.per_dni) AS edad_dep_de_45_a_54,
				persona.iddepartamento,
				departamento.dep_descripcion
			FROM
				persona,
				ficha,
				usuarios,
				institucion,
				departamento
			WHERE
				ficha.per_dni = persona.per_dni
			AND persona.iddepartamento = departamento.iddepartamento
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) >= 45
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) < 55
			AND ficha.idusuario = usuarios.idusuario
			AND usuarios.idinstitucion = institucion.idinstitucion
			AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
			AND ficha.fec_consulta <= '{$this->fecha2}'
			AND ficha.fec_consulta >= '{$this->fecha1}'
			GROUP BY
				persona.iddepartamento,
				departamento.dep_descripcion;
			
			CREATE
			OR REPLACE VIEW edad_dep_de_35_a_44 AS SELECT
				COUNT (ficha.per_dni) AS edad_dep_de_35_a_44,
				persona.iddepartamento,
				departamento.dep_descripcion
			FROM
				persona,
				ficha,
				usuarios,
				institucion,
				departamento
			WHERE
				ficha.per_dni = persona.per_dni
			AND persona.iddepartamento = departamento.iddepartamento
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) >= 35
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) < 45
			AND ficha.idusuario = usuarios.idusuario
			AND usuarios.idinstitucion = institucion.idinstitucion
			AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
			AND ficha.fec_consulta <= '{$this->fecha2}'
			AND ficha.fec_consulta >= '{$this->fecha1}'
			GROUP BY
				persona.iddepartamento,
				departamento.dep_descripcion;
			
			CREATE
			OR REPLACE VIEW edad_dep_de_25_a_34 AS SELECT
				COUNT (ficha.per_dni) AS edad_dep_de_25_a_34,
				persona.iddepartamento,
				departamento.dep_descripcion
			FROM
				persona,
				ficha,
				usuarios,
				institucion,
				departamento
			WHERE
				ficha.per_dni = persona.per_dni
			AND persona.iddepartamento = departamento.iddepartamento
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) >= 25
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) < 35
			AND ficha.idusuario = usuarios.idusuario
			AND usuarios.idinstitucion = institucion.idinstitucion
			AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
			AND ficha.fec_consulta <= '{$this->fecha2}'
			AND ficha.fec_consulta >= '{$this->fecha1}'
			GROUP BY
				persona.iddepartamento,
				departamento.dep_descripcion;
			
			CREATE
			OR REPLACE VIEW edad_dep_de_14_a_24 AS SELECT
				COUNT (ficha.per_dni) AS edad_dep_de_14_a_24,
				persona.iddepartamento,
				departamento.dep_descripcion
			FROM
				persona,
				ficha,
				usuarios,
				institucion,
				departamento
			WHERE
				ficha.per_dni = persona.per_dni
			AND persona.iddepartamento = departamento.iddepartamento
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) >= 14
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) < 25
			AND ficha.idusuario = usuarios.idusuario
			AND usuarios.idinstitucion = institucion.idinstitucion
			AND institucion.idinstitucion = ". $_SESSION['idinstitucion'] ."
			AND ficha.fec_consulta <= '{$this->fecha2}'
			AND ficha.fec_consulta >= '{$this->fecha1}'
			GROUP BY
				persona.iddepartamento,
				departamento.dep_descripcion;
			
			SELECT
				departamento.dep_descripcion,
				edad_dep_de_14_a_24.edad_dep_de_14_a_24,
				edad_dep_de_25_a_34.edad_dep_de_25_a_34,
				edad_dep_de_35_a_44.edad_dep_de_35_a_44,
				edad_dep_de_45_a_54.edad_dep_de_45_a_54,
				edad_dep_de_55_a_64.edad_dep_de_55_a_64,
				edad_dep_de_65_a_74.edad_dep_de_65_a_74,
				edad_dep_de_75_a_84.edad_dep_de_75_a_84,
				edad_dep_de_85_a_150.edad_dep_de_85_a_150,
				edad_dep_no_contesta.edad_dep_no_contesta
			FROM
				departamento
			LEFT OUTER JOIN edad_dep_de_14_a_24 ON edad_dep_de_14_a_24.iddepartamento = departamento.iddepartamento
			LEFT OUTER JOIN edad_dep_de_25_a_34 ON edad_dep_de_25_a_34.iddepartamento = departamento.iddepartamento
			LEFT OUTER JOIN edad_dep_de_35_a_44 ON edad_dep_de_35_a_44.iddepartamento = departamento.iddepartamento
			LEFT OUTER JOIN edad_dep_de_45_a_54 ON edad_dep_de_45_a_54.iddepartamento = departamento.iddepartamento
			LEFT OUTER JOIN edad_dep_de_55_a_64 ON edad_dep_de_55_a_64.iddepartamento = departamento.iddepartamento
			LEFT OUTER JOIN edad_dep_de_65_a_74 ON edad_dep_de_65_a_74.iddepartamento = departamento.iddepartamento
			LEFT OUTER JOIN edad_dep_de_75_a_84 ON edad_dep_de_75_a_84.iddepartamento = departamento.iddepartamento
			LEFT OUTER JOIN edad_dep_de_85_a_150 ON edad_dep_de_85_a_150.iddepartamento = departamento.iddepartamento
			LEFT OUTER JOIN edad_dep_no_contesta ON edad_dep_no_contesta.iddepartamento = departamento.iddepartamento";
			$datos = $con->consultaRetorno($sql);
			return $datos;	
		}


		public function edad_departamentoDep(){
            $con = new Conexion();
			$sql = "CREATE
			OR REPLACE VIEW edad_dep_no_contesta AS SELECT
				COUNT (ficha.per_dni) AS edad_dep_no_contesta,
				persona.iddepartamento,
				departamento.dep_descripcion
			FROM
				persona,
				ficha,
				usuarios,
				institucion,
				departamento
			WHERE
				ficha.per_dni = persona.per_dni
			AND persona.iddepartamento = departamento.iddepartamento
			AND persona.per_nacido IS NULL
			AND ficha.idusuario = usuarios.idusuario
			AND usuarios.idinstitucion = institucion.idinstitucion
			AND ficha.fec_consulta <= '{$this->fecha2}'
			AND ficha.fec_consulta >= '{$this->fecha1}'
			GROUP BY
				persona.iddepartamento,
				departamento.dep_descripcion;
			
			CREATE
			OR REPLACE VIEW edad_dep_de_85_a_150 AS SELECT
				COUNT (ficha.per_dni) AS edad_dep_de_85_a_150,
				persona.iddepartamento,
				departamento.dep_descripcion
			FROM
				persona,
				ficha,
				usuarios,
				institucion,
				departamento
			WHERE
				ficha.per_dni = persona.per_dni
			AND persona.iddepartamento = departamento.iddepartamento
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) >= 85
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) <= 150
			AND ficha.idusuario = usuarios.idusuario
			AND usuarios.idinstitucion = institucion.idinstitucion
			AND ficha.fec_consulta <= '{$this->fecha2}'
			AND ficha.fec_consulta >= '{$this->fecha1}'
			GROUP BY
				persona.iddepartamento,
				departamento.dep_descripcion;
			
			CREATE
			OR REPLACE VIEW edad_dep_de_75_a_84 AS SELECT
				COUNT (ficha.per_dni) AS edad_dep_de_75_a_84,
				persona.iddepartamento,
				departamento.dep_descripcion
			FROM
				persona,
				ficha,
				usuarios,
				institucion,
				departamento
			WHERE
				ficha.per_dni = persona.per_dni
			AND persona.iddepartamento = departamento.iddepartamento
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) >= 75
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) < 85
			AND ficha.idusuario = usuarios.idusuario
			AND usuarios.idinstitucion = institucion.idinstitucion
			AND ficha.fec_consulta <= '{$this->fecha2}'
			AND ficha.fec_consulta >= '{$this->fecha1}'
			GROUP BY
				persona.iddepartamento,
				departamento.dep_descripcion;
			
			CREATE
			OR REPLACE VIEW edad_dep_de_65_a_74 AS SELECT
				COUNT (ficha.per_dni) AS edad_dep_de_65_a_74,
				persona.iddepartamento,
				departamento.dep_descripcion
			FROM
				persona,
				ficha,
				usuarios,
				institucion,
				departamento
			WHERE
				ficha.per_dni = persona.per_dni
			AND persona.iddepartamento = departamento.iddepartamento
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) >= 65
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) < 75
			AND ficha.idusuario = usuarios.idusuario
			AND usuarios.idinstitucion = institucion.idinstitucion
			AND ficha.fec_consulta <= '{$this->fecha2}'
			AND ficha.fec_consulta >= '{$this->fecha1}'
			GROUP BY
				persona.iddepartamento,
				departamento.dep_descripcion;
			
			CREATE
			OR REPLACE VIEW edad_dep_de_55_a_64 AS SELECT
				COUNT (ficha.per_dni) AS edad_dep_de_55_a_64,
				persona.iddepartamento,
				departamento.dep_descripcion
			FROM
				persona,
				ficha,
				usuarios,
				institucion,
				departamento
			WHERE
				ficha.per_dni = persona.per_dni
			AND persona.iddepartamento = departamento.iddepartamento
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) >= 55
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) < 65
			AND ficha.idusuario = usuarios.idusuario
			AND usuarios.idinstitucion = institucion.idinstitucion
			AND ficha.fec_consulta <= '{$this->fecha2}'
			AND ficha.fec_consulta >= '{$this->fecha1}'
			GROUP BY
				persona.iddepartamento,
				departamento.dep_descripcion;
			
			CREATE
			OR REPLACE VIEW edad_dep_de_45_a_54 AS SELECT
				COUNT (ficha.per_dni) AS edad_dep_de_45_a_54,
				persona.iddepartamento,
				departamento.dep_descripcion
			FROM
				persona,
				ficha,
				usuarios,
				institucion,
				departamento
			WHERE
				ficha.per_dni = persona.per_dni
			AND persona.iddepartamento = departamento.iddepartamento
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) >= 45
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) < 55
			AND ficha.idusuario = usuarios.idusuario
			AND usuarios.idinstitucion = institucion.idinstitucion
			AND ficha.fec_consulta <= '{$this->fecha2}'
			AND ficha.fec_consulta >= '{$this->fecha1}'
			GROUP BY
				persona.iddepartamento,
				departamento.dep_descripcion;
			
			CREATE
			OR REPLACE VIEW edad_dep_de_35_a_44 AS SELECT
				COUNT (ficha.per_dni) AS edad_dep_de_35_a_44,
				persona.iddepartamento,
				departamento.dep_descripcion
			FROM
				persona,
				ficha,
				usuarios,
				institucion,
				departamento
			WHERE
				ficha.per_dni = persona.per_dni
			AND persona.iddepartamento = departamento.iddepartamento
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) >= 35
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) < 45
			AND ficha.idusuario = usuarios.idusuario
			AND usuarios.idinstitucion = institucion.idinstitucion
			AND ficha.fec_consulta <= '{$this->fecha2}'
			AND ficha.fec_consulta >= '{$this->fecha1}'
			GROUP BY
				persona.iddepartamento,
				departamento.dep_descripcion;
			
			CREATE
			OR REPLACE VIEW edad_dep_de_25_a_34 AS SELECT
				COUNT (ficha.per_dni) AS edad_dep_de_25_a_34,
				persona.iddepartamento,
				departamento.dep_descripcion
			FROM
				persona,
				ficha,
				usuarios,
				institucion,
				departamento
			WHERE
				ficha.per_dni = persona.per_dni
			AND persona.iddepartamento = departamento.iddepartamento
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) >= 25
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) < 35
			AND ficha.idusuario = usuarios.idusuario
			AND usuarios.idinstitucion = institucion.idinstitucion
			AND ficha.fec_consulta <= '{$this->fecha2}'
			AND ficha.fec_consulta >= '{$this->fecha1}'
			GROUP BY
				persona.iddepartamento,
				departamento.dep_descripcion;
			
			CREATE
			OR REPLACE VIEW edad_dep_de_14_a_24 AS SELECT
				COUNT (ficha.per_dni) AS edad_dep_de_14_a_24,
				persona.iddepartamento,
				departamento.dep_descripcion
			FROM
				persona,
				ficha,
				usuarios,
				institucion,
				departamento
			WHERE
				ficha.per_dni = persona.per_dni
			AND persona.iddepartamento = departamento.iddepartamento
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) >= 14
			AND date_part(
				'year',
				age(now(), persona.per_nacido)
			) < 25
			AND ficha.idusuario = usuarios.idusuario
			AND usuarios.idinstitucion = institucion.idinstitucion
			AND ficha.fec_consulta <= '{$this->fecha2}'
			AND ficha.fec_consulta >= '{$this->fecha1}'
			GROUP BY
				persona.iddepartamento,
				departamento.dep_descripcion;
			
			SELECT
				departamento.dep_descripcion,
				edad_dep_de_14_a_24.edad_dep_de_14_a_24,
				edad_dep_de_25_a_34.edad_dep_de_25_a_34,
				edad_dep_de_35_a_44.edad_dep_de_35_a_44,
				edad_dep_de_45_a_54.edad_dep_de_45_a_54,
				edad_dep_de_55_a_64.edad_dep_de_55_a_64,
				edad_dep_de_65_a_74.edad_dep_de_65_a_74,
				edad_dep_de_75_a_84.edad_dep_de_75_a_84,
				edad_dep_de_85_a_150.edad_dep_de_85_a_150,
				edad_dep_no_contesta.edad_dep_no_contesta
			FROM
				departamento
			LEFT OUTER JOIN edad_dep_de_14_a_24 ON edad_dep_de_14_a_24.iddepartamento = departamento.iddepartamento
			LEFT OUTER JOIN edad_dep_de_25_a_34 ON edad_dep_de_25_a_34.iddepartamento = departamento.iddepartamento
			LEFT OUTER JOIN edad_dep_de_35_a_44 ON edad_dep_de_35_a_44.iddepartamento = departamento.iddepartamento
			LEFT OUTER JOIN edad_dep_de_45_a_54 ON edad_dep_de_45_a_54.iddepartamento = departamento.iddepartamento
			LEFT OUTER JOIN edad_dep_de_55_a_64 ON edad_dep_de_55_a_64.iddepartamento = departamento.iddepartamento
			LEFT OUTER JOIN edad_dep_de_65_a_74 ON edad_dep_de_65_a_74.iddepartamento = departamento.iddepartamento
			LEFT OUTER JOIN edad_dep_de_75_a_84 ON edad_dep_de_75_a_84.iddepartamento = departamento.iddepartamento
			LEFT OUTER JOIN edad_dep_de_85_a_150 ON edad_dep_de_85_a_150.iddepartamento = departamento.iddepartamento
			LEFT OUTER JOIN edad_dep_no_contesta ON edad_dep_no_contesta.iddepartamento = departamento.iddepartamento";
			$datos = $con->consultaRetorno($sql);
			return $datos;	
		}
	}
?>