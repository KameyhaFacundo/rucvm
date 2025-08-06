<?php namespace Controllers1;


use Models1\Ficha2 as Ficha2;


	class ficha2Controller{
            
            private $ficha2;
            //private $seccion;
            
            public function __construct() {
                $this->ficha2 = new Ficha2();
                //$this->seccion = new Seccion();
            }

                public function agregar(){
                    if(!$_POST){
                        echo '<div id="loader">
                                <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                            </div>';
                        $cantidad = 0;
                    }else{
                        //echo 'hay post!';
                        
                        if($_POST['filas_creadas']){
                                    session_start();
                                    $_SESSION['filas_creadas'] = $_POST['filas_creadas'];
                                        if(isset($_SESSION['cantidad'])){
                                           // echo 'entro aqui';
                                           // $filas = $_POST['filas_creadas'];
                                           // $a = $filas;
                                           // echo $filas. '<br />';
                                            $cantidad = $_SESSION['filas_creadas'];
                                            $_SESSION['cantidad'] = $cantidad;
                                        }
                                        else{
                                            //echo 'se fue por el else <br />';
                                            $cantidad = $_SESSION['filas_creadas'];
                                            $_SESSION['cantidad'] = $cantidad;
                                           // $filas = 1;
                                            //$a = 1;
                                            //echo 'else';
                                        }
                                    //echo 'cantidad '.$_POST['filas_creadas'];
                                    $total_filas = $_POST['filas_creadas'];
                                    $_SESSION['filas_creadas'] = $total_filas; 
                                    for ($i=1; $i<=$total_filas; $i++) {
                                       // echo '<br/>'.$i;
                                       // echo '<br/>a'.$a;
                                       // echo "paso";
                                        if(isset($_POST['f2_apellido'.$i])){
                                            $_SESSION['f2_f2_apellido'.$i] = ucwords(strtolower(trim($_POST['f2_apellido'.$i])));
                                           // echo $_SESSION['f2_f2_apellido'.$i];
                                            $_SESSION['f2_f2_nombre'.$i] = ucwords(strtolower(trim($_POST['f2_nombre'.$i])));
                                            $_SESSION['f2_idsexo'.$i] = $_POST['idsexo'.$i];
                                            $_SESSION['f2_f2_edad'.$i] = $_POST['f2_edad'.$i];
                                            $_SESSION['f2_f2_mes'.$i] = $_POST['f2_mes'.$i]; 
                                            $_SESSION['f2_idpariente'.$i] = $_POST['idpariente'.$i];
                                            $_SESSION['f2_discapacitado'.$i] = $_POST['discapacitado'.$i];
                                            $_SESSION['f2_victimavio'.$i] = $_POST['victimavio'.$i]; 
                                            //echo 'FUNCIONA EL IF <br />'.$i;
                                        }
                                    $a++;
                                    }
                               header("Location: " . URL . "ficha3/agregar");
                            }
                            header("Location: " . URL . "ficha3/agregar");
                        }
                    }   
                    
                     public function editar(){
                    
                /* si no var sesion filas creada es xq ingrese x primera vez y no 
                 * hice un post aun. Traigo el total de filas de la consulta de base de datos.
                 * si es por primera vez, traigo todos los datos y los mando a la vista editar, 
                 * la proxima vez ya no haria eso asi no cargue lo de la base de datos siempre */

                    if(!$_POST){
                        
                        session_start();
                        if(!isset($_SESSION['filas_creadasE'])){
                            

                            if(!isset($_SESSION['filas_creadasEE'])){

                        $_SESSION['filas_creadasEE'] = $this->ficha2->totalFilas();

                        $this->ficha2->set("idficha",$_SESSION['pE_idficha']);

                        $datos = $this->ficha2->verFicha2();                                              
                        return $datos;                                                  
                            }

                        }
                    }else{
                        //echo 'hay post!';
                        /*cuando haya post guardo los post guardo los post en variables de sesion*/
                        

                                    session_start();


                                    $total_filas = $_POST['filas_creadasE'];
                                    $_SESSION['filas_creadasE'] = $total_filas; 

                                    for ($i=1; $i<=$total_filas; $i++) {
                                        //echo '<br/>'.$i;
                                        //echo '<br/>a'.$a;
                                        if(isset($_POST['Ef2_apellido'.$i])){
                                            $_SESSION['Ef2_f2_apellido'.$i] = trim($_POST['Ef2_apellido'.$i]);
                                            $_SESSION['Ef2_f2_nombre'.$i] = trim($_POST['Ef2_nombre'.$i]);
                                            $_SESSION['Ef2_idsexo'.$i] = $_POST['Eidsexo'.$i];
                                            $_SESSION['Ef2_f2_edad'.$i] = $_POST['Ef2_edad'.$i];
                                            $_SESSION['Ef2_f2_mes'.$i] = $_POST['Ef2_mes'.$i]; 
                                            $_SESSION['Ef2_idpariente'.$i] = $_POST['Eidpariente'.$i];
                                            $_SESSION['Ef2_discapacitado'.$i] = $_POST['Ediscapacitado'.$i];
                                            $_SESSION['Ef2_victimavio'.$i] = $_POST['Evictimavio'.$i]; 
                                            //echo 'FUNCIONA EL IF <br />'.$i;
                                        }

                                    }
                               header("Location: " . URL . "ficha3/editar");

                    }
                     }
                                 
                                       

                
                public function listarSecciones(){
                    $datos = $this->seccion->listar();
                    return $datos;
                }
                
                public function ver($id){
                    $this->ficha2->set("idficha2",$id);
                    $datos = $this->ficha2->verFicha2();
                    return $datos;
                }
                
                
                public function eliminar($id){
                    $this->ficha2->set("idficha2",$id);
                    $this->ficha2->eliminarFicha2();
                    header("Location: " . URL . "ficha2");
                    
                }
                
                
	}
        $ficha2 = new ficha2Controller(); 
?>