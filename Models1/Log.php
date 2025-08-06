<?php namespace Models1;
//include 'conexion.php';
	class Log{
            private $username;
            private $password;


		public function __construct(){

		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}
                
        public function verLog(){
			echo "<script>console.log('Console: 8" .$datos. "' );</script>"; 
            $con = new Conexion();
			$sql = "SELECT * FROM usuarios WHERE username = '{$this->username}' AND password = '{$this->password}'";			
            $datos = $con->consultaRetorno($sql);
			$row = pg_fetch_assoc($datos);
			return $row;
		}
                

					
	}
?>
