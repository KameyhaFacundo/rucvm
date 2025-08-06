<?php namespace Config1;


                class Request{

		private $controlador;
		private $metodo;
		private $argumento;

		public function __construct(){
                    //session_start();
			if(isset($_GET['url'])){
				
									$ruta = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
									$ruta = explode("/", $ruta);
									$ruta = array_filter($ruta);
													//echo $ruta;                                
									if($ruta[0] == "verificar.php"){
														//echo "here";
										$this->controlador = "log";
									}
									else{
														if(isset($_SESSION['username'])&&isset($_SESSION['password']))
														{
														//echo "here2";
														$this->controlador = strtolower(array_shift($ruta));
														}
														else{ 
															require_once "Views1/error/error401.php";
														}
                                    }			
									$this->metodo = strtolower(array_shift($ruta));
									if(!$this->metodo){
													   // echo "here4";
														require_once "Views1/error/error404.php";
														$this->metodo = "index";
									}
									$this->argumento = $ruta;
								}
								else{
									//echo "here1";
									echo "<script>console.log('Console: 2" .$_GET['url']. "' );</script>";	
									$this->controlador = "log";
									$this->metodo = "verificar";
								}
                        }
                        
public function getControlador() {
    return $this->controlador;
}

public function getMetodo() {
    return $this->metodo;
}

public function getArgumento() {
    return $this->argumento;
}                 
                    
            }
        
   
?>
