<?php namespace Config1;

    class Autoload{
        public static function run(){
            spl_autoload_register(function($class){
                $ruta = str_replace("\\", "/", $class) . ".php";
				echo "<script>console.log('Console: " . $ruta. "' );</script>";
                if(file_exists( $ruta )){
					
                    include $ruta;     
                }      
            });
            
        }
            
    }
    

?>