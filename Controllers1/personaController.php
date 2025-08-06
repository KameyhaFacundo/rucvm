<?php namespace Controllers1;

    use Models1\Persona as Persona;

    class personaController{
            
        private $persona;
        
        
        public function __construct() {
            $this->persona = new Persona();
            //$this->seccion = new Seccion();
        }
        
        
        public function agregar(){
            if(!$_POST){
                echo '<div id="loader">
                            <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                        </div>';
            }
            if(isset($_POST['per_dni']) && isset($_POST['per_apellido'])){
                session_start();
                $_SESSION['p_per_dni'] = $_POST['per_dni'];
                $_SESSION['p_per_apellido'] = ucwords(strtolower(trim($_POST['per_apellido'])));
                $_SESSION['p_per_nombre'] = ucwords(strtolower(trim($_POST['per_nombre'])));
                $_SESSION['p_idsexo']=$_POST['idsexo'];
                if($_SESSION['p_idsexo'] != 0){
                    $_SESSION['p_idgenero']= 0;	
                }else{
                    $_SESSION['p_idgenero']=$_POST['idgenero'];
                }
                $_SESSION['p_idestadocivil'] = $_POST['idestadocivil'];
                $_SESSION['p_per_nacido'] = $_POST['per_nacido'];
                $_SESSION['p_per_celular'] = $_POST['per_celular'];
                $_SESSION['p_per_discapacitada'] = $_POST['per_discapacitada'];
                $_SESSION['p_per_domicilio'] = ucwords(strtolower(trim($_POST['per_domicilio'])));
                $_SESSION['p_idlocalidad'] = $_POST['localidad'];
                $_SESSION['p_iddepartamento'] = $_POST['departamento'];
                header("Location: " . URL . "ficha/agregar"); 

            }else{
                if(isset($_POST['per_dni'])&&trim($_POST['per_dni'])!=""){ 
                $per_dni = $_POST['per_dni'];
                $_SESSION['p_per_dni'] = $per_dni;
                $this->persona->set("per_dni",$per_dni);
                $datos = $this->persona->verPersona();
                return $datos;
                }
            }
        }
        

        public function editar11($per_dni){
            if(!$_POST){
                echo "dni".$per_dni;
                $this->persona->set("per_dni",$per_dni);
                $datos = $this->persona->verPersona();
                return $datos;
            }
        }
        
        
        public function  editar($id){
            if(!$_POST){
                session_start();
                $this->persona->set("idficha",$id);
                $datos = $this->persona->verPersona1();
                return $datos;
            }else{
                session_start();
                $_SESSION['pE_idficha']=$_POST['idficha'];
                $_SESSION['pE_idpersona']=$_POST['idpersona'];
                $_SESSION['pE_per_dni']=$_POST['per_dni'];
                $_SESSION['pE_per_apellido']=$_POST['per_apellido'];
                $_SESSION['pE_per_nombre']=$_POST['per_nombre'];
                $_SESSION['pE_idsexo']=$_POST['idsexo'];
                if($_SESSION['pE_idsexo'] != 0){
                    $_SESSION['pE_idgenero']= 0;	
                }else{
                    $_SESSION['pE_idgenero']=$_POST['idgenero'];
                }
                $_SESSION['pE_idestadocivil']=$_POST['idestadocivil'];
                $_SESSION['pE_per_nacido']=$_POST['per_nacido'];
                $_SESSION['pE_per_edad']=$_POST['per_edad'];
                $_SESSION['pE_per_celular']=$_POST['per_celular'];
                $_SESSION['pE_per_discapacitada']=$_POST['per_discapacitada'];
                $_SESSION['pE_per_domicilio']=$_POST['per_domicilio'];
                $_SESSION['pE_iddepartamento']=$_POST['departamento'];
                $_SESSION['pE_idlocalidad']=$_POST['localidad'];
                header("Location: " . URL . "ficha/editar");
            }
        }
        

        public function ver($id){
            $this->persona->set("id",$_POST['id']);
            $datos = $this->persona->verPersona();
            return $datos;
        }
        
        
        public function eliminar($id){
            $this->persona->set("idficha",$id);
            $this->persona->eliminarPersona();
            header("Location: " . URL . 'principal/buscar/');
        }

        public function edad_educacion(){
            if(!$_POST){
                echo '<div id="loader">
                    <img src="http://181.88.186.115/rucvm/Views1/template/colorlib/gif/loader.gif" width="10%" />
                </div>';
            }else{
                $fecha1 = $_POST['fecha1'];
                $fecha2 = $_POST['fecha2'];
                $this->persona->set("fecha1",$fecha1);
                $this->persona->set("fecha2",$fecha2);
                if($_SESSION['idinstitucion'] == 12){
                    $datos = $this->persona->edad_departamentoDep();
                }else{
                    $datos = $this->persona->edad_departamento();    
                }
                return $datos;
            }
        }
                
                
    }
    $persona = new personaController();
        
?>