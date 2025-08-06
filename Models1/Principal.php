<?php namespace Models1;
//include 'conexion.php';
	class Principal{


		public function __construct(){

		}

		public function set($atributo, $contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

					
	}
?>