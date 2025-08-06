<?php namespace Models1;
include_once 'conexion.php';

	class Ficha2{
		private $idficha2;
		private $idficha;
		private $f2_apellido;
		private $f2_nombre;
		private $f2_edad;
		private $idpariente;
		private $discapacitado;
		private $victimavio;
		private $idsexo;
		private $f2_mes;
                
                
                

		public function __construct(){

		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function agregarFicha2(){
					$this->f2_apellido = !empty($this->f2_apellido) ? $this->f2_apellido : " ";
					$this->f2_nombre = !empty($this->f2_nombre) ? $this->f2_nombre : " ";
                    $this->f2_edad = !empty($this->f2_edad) ? $this->f2_edad : "NULL";
                    $this->f2_mes = !empty($this->f2_mes) ? $this->f2_mes : "NULL";
                    $this->idpariente = !empty($this->idpariente) ? $this->idpariente : "NULL";
                    $this->discapacitado = !empty($this->discapacitado) ? $this->discapacitado : "NULL";
                    $this->victimavio = !empty($this->victimavio) ? $this->victimavio : "NULL";
                    $this->idsexo = !empty($this->idsexo) ? $this->idsexo : "NULL";
                    
                        $con = new Conexion();
			$sql = "INSERT INTO ficha2(idficha, f2_apellido, f2_nombre, f2_edad, idpariente, discapacitado, victimavio, idsexo, f2_mes) VALUES ({$this->idficha},'{$this->f2_apellido}', '{$this->f2_nombre}', {$this->f2_edad}, {$this->idpariente}, {$this->discapacitado}, {$this->victimavio}, {$this->idsexo}, {$this->f2_mes})";
			//echo $sql;
                        $con->consultaSimple($sql);
		}

		public function eliminarFicha2(){
                        $con = new Conexion();
			$sql = "DELETE FROM ficha2 WHERE idficha = {$this->idficha}";
			$con->consultaSimple($sql);
		}

		public function updateFicha2(){
					$this->f2_apellido = !empty($this->f2_apellido) ? $this->f2_apellido : " ";
					$this->f2_nombre = !empty($this->f2_nombre) ? $this->f2_nombre : " ";
                    $this->f2_edad = !empty($this->f2_edad) ? $this->f2_edad : "NULL";
                    $this->f2_mes = !empty($this->f2_mes) ? $this->f2_mes : "NULL";
                    $this->idpariente = !empty($this->idpariente) ? $this->idpariente : "NULL";
                    $this->discapacitado = !empty($this->discapacitado) ? $this->discapacitado : "NULL";
                    $this->victimavio = !empty($this->victimavio) ? $this->victimavio : "NULL";
                    $this->idsexo = !empty($this->idsexo) ? $this->idsexo : "NULL";
                        $con = new Conexion();
			$sql = "UPDATE ficha2 SET f2_apellido = '{$this->f2_apellido}', f2_nombre = '{$this->f2_nombre}', f2_edad = {$this->f2_edad}, idpariente = {$this->idpariente}, discapacitado = {$this->discapacitado}, victimavio = {$this->victimavio}, idsexo = {$this->idsexo}, f2_mes = {$this->f2_mes} WHERE idficha = {$this->idficha}";
			$con->consultaSimple($sql);
		}

		public function verFicha2(){
                        $con = new Conexion();
			$sql = "SELECT * FROM ficha2 WHERE idficha = {$this->idficha}";
			$datos = $con->consultaRetorno($sql);
			//$row = pg_fetch_assoc($datos);
			return $datos;
		}
                
                
                public function totalFilas(){
                        $con = new Conexion();
			$sql = "SELECT * from ficha2 where idficha={$_SESSION['pE_idficha']}";
                        //echo $sql;
			$datos = $con->consultaRetorno($sql);
                        $numrows = pg_num_rows($datos);
			return $numrows;
		}
	}
?>