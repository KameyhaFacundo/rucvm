<?php namespace Models1;
include_once 'conexion.php';


	class Usuario{
		private $idusuario;
		private $username;
		private $password;
		private $nombre;
		private $apellido;
		private $idinstitucion;
		private $permiso;
        private $us_email;
        //campo para buscar por usuario: nombre o apellido
        private $usuario;

		public function __construct(){
                    //$this->con = new Conexion();
		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo, $contenido){
			return $this->$atributo;
		}

		public function agregarUsuario(){
			$this->email = !empty($this->email) ? $this->email : NULL;
            $con = new Conexion();
			$sql = "INSERT INTO usuarios(username, password, permiso, nombre, apellido, idinstitucion, us_email) VALUES ('{$this->username}', '{$this->password}', {$this->permiso}, '{$this->nombre}', '{$this->apellido}', {$this->idinstitucion}, '{$this->us_email}')";                     
            $con->consultaSimple($sql);
		}

		public function eliminarUsuario(){
			$sql = "DELETE FROM usuarios WHERE idusuario = {$this->idusuario}";
			$this->con->consultaSimple($sql);
		}

		public function updateUsuario(){
            $con = new Conexion();
			$sql = "UPDATE usuarios SET username = '{$this->username}', password = '{$this->password}', permiso = {$this->permiso}, nombre = '{$this->nombre}', apellido = '{$this->apellido}', idinstitucion = {$this->idinstitucion}, us_email = '{$this->us_email}'";
            $con->consultaSimple($sql);
		}

		public function buscarUsuario(){
			$con = new Conexion();
			$sql = "SELECT * FROM usuarios WHERE nombre ILIKE '%{$this->usuario}%' OR apellido ILIKE '%{$this->usuario}%'";
			$datos = $con->consultaRetorno($sql);
			return $datos;
        } 
        
        public function verUsuarios(){
			$con = new Conexion();
			$sql = "SELECT * FROM usuarios, institucion WHERE usuarios.idinstitucion = institucion.idinstitucion ORDER BY idusuario DESC";
			$datos = $con->consultaRetorno($sql);
			return $datos;
		}
	}
?>