<?php namespace Models1;
//include_once 'conexion.php';
    
    //use Models1\conexion as Con;
    class Archivo{
        private $descargaarchivos;


        public function __construct(){
            //$this->conexion = new Conexion();
        }

        public function set($atributo, $contenido){
            $this->$atributo = $contenido;
        }

        public function get($atributo){
            return $this->$atributo;
        }

        public function descargar(){
            echo "aqui1";


        if(!empty($this->descargaarchivos)){
            echo "aqui3";
             $fileName = basename($this->descargaarchivos);
             $filePath = echo URL.'Views1/template/colorlib/docs/'.$fileName;
             echo $filePath;
             if(!empty($fileName) && file_exists($filePath)){
        // Define headers
        header("Cache-Control: public");
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$fileName");
        header("Content-Type: application/zip");
        header("Content-Transfer-Encoding: binary");
        
        // Read the file
        readfile($filePath);
        exit;
        }else{
            echo 'The file does not exist.';
        }
        }
        }

    } ?>