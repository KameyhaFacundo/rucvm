<?php namespace Config1;

	class Enrutador{

		public static function run(Request $request){
			$controlador = $request->getControlador() . "Controller";
			$ruta = ROOT . "Controllers1" . DS . $controlador . ".php";
			$metodo = $request->getMetodo();
			$argumento = $request->getArgumento();
			if($metodo == "index.php"){
				$metodo = "index";
			}
			if(is_readable($ruta)){
				require_once $ruta;
				$mostrar = "Controllers1\\" . $controlador;
				$controlador = new $mostrar;

				if(!isset($argumento)){
					$datos = call_user_func(array($controlador, $metodo));
				}else{
                                     error_reporting(0);
					$datos = call_user_func_array(array($controlador, $metodo), $argumento);
				}
				$ruta = ROOT . "Views1" . DS . $request->getControlador() . DS . $request->getMetodo() . ".php";
				if(is_readable($ruta)){
					require_once $ruta;
				}else{
                                     require_once "Views1/error/error404.php";
					//print "No se encontró la ruta";
				}
			}
		}
	}
?>