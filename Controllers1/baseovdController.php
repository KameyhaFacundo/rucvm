<?php namespace Controllers1;

use Models1\Baseovd as Baseovd;


	class baseovdController{
            
            private $baseovd;

            
            public function __construct() {
                $this->baseovd = new Baseovd();

            }


            public function indexovd(){
                echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
               $datos = $this->baseovd->listar();
               return $datos;
		}
            public function mostrarfinalizadas(){
                echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
		//print "Hola soy el index del baseovd";
               $datos = $this->baseovd->listarFinalizadas();
               return $datos;
		}
                
                
                public function agregar(){
                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        }else{
                            $permitidos = array('text/plain');
                            $limite = 700;
                            if(in_array($_FILES['imagen']['type'],$permitidos) &&
                                    $_FILES['imagen']['size'] <= $limite*1024){
                                    $nombre = date('YmdHis') . $_FILES['imagen']['name'];
                                    $ruta = $_SERVER["DOCUMENT_ROOT"]. DS ."rucvm". DS ."ArchivoOVD" . DS . $nombre;
                                    move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
                                    $this->baseovd->set("imagen",$nombre);
                                    $this->baseovd->set("fecha",$_POST['fecha']);
                                    $this->baseovd->set("observacion",$_POST['observacion']);
                                    $this->baseovd->set("estado",'P');
                                    $this->baseovd->add();
                                    header("Location: " . URL . "baseovd/indexovd");
                                
                                
                            }else{echo 'aqui';
                            header("Location: " . URL);
                            
                            }
                        }

                }
                
                
                public function  editar($id){
                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        $this->baseovd->set("idbaseovd",$id);
                        $datos = $this->baseovd->view();
                        //var_dump($datos);
                        return $datos;
                    }else{
                        $this->baseovd->set("observacion",$_POST['observacion']);
                        $this->baseovd->set("fecha",$_POST['fecha']);
                        $this->baseovd->set("idbaseovd",$_POST['idbaseovd']);
                        $this->baseovd->edit();
                        header("Location: " . URL . "baseovd/indexovd");
                    }
                    
                }
                
                public function  finalizar($id){
                        echo '<div id="loader">
                            <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                        </div>';
                        $this->baseovd->set("estado",'F');
                        $this->baseovd->set("idbaseovd",$id);
                        $this->baseovd->finish();
                        header("Location: " . URL . "baseovd/indexovd");
                    
                    
                }
                
                
                public function ver($id){
                    $this->baseovd->set("id",$id);
                    $datos = $this->baseovd->view();
                    return $datos;
                }
                
                
                public function eliminar($id){
                    echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                    $this->baseovd->set("idbaseovd",$id);
                    $datos = $this->baseovd->view();
                    $this->baseovd->set("imagen",$datos['imagen']);
                    $this->baseovd->delete();
                    header("Location: " . URL . "baseovd/indexovd");
                    
                }
                
                
	}
        $baseovd = new baseovdController();
        
?>