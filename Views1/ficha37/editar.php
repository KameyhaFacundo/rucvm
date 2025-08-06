<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nueva ficha</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">
      
      
                                        <script type="text/javascript">
        window.onload=function(){
          document.getElementById("op131").style.cursor = 'default';
          document.getElementById("op131").style.color = '#585858';
          document.getElementById("op131").style.pointerEvents = "none";
          document.getElementById("op132").style.cursor = 'default';
          document.getElementById("op132").style.color = '#585858';
          document.getElementById("op132").style.pointerEvents = "none";
        }
    </script>

  <?php include 'r_menuizq1E.php'; ?>
    <div id="content-wrapper" style="background-color: #e9e2e8">
      <div class="container-fluid">
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card-header">Nueva ficha</div>
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <b>Desencadenantes de la consulta</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f37E_des_hijos'])) echo $_SESSION['f37E_des_hijos']; else echo $datos['des_hijos'];?>" name="des_hijos" id="des_hijos" class="form-control" placeholder="Hijos grandes/independientes"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="des_hijos"><small>Hijos grandes/independientes</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f37E_des_golpe'])) echo $_SESSION['f37E_des_golpe']; else echo $datos['des_golpe'];?>" name="des_golpe" id="des_golpe" class="form-control" placeholder="Golpes a los hijos" min="1" max="2" onkeyup="this.value=Numeros(this.value)" >
                        <label for="des_golpes"><small>Golpes a los hijos</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f37E_des_conoc'])) echo $_SESSION['f37E_des_conoc']; else echo $datos['des_conoc'];?>" name="des_conoc" id="des_conoc" class="form-control" placeholder="Conocimiento del problema en otros"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="des_conoc"><small>Conocimiento del problema en otros</small></label>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f37E_des_infide'])) echo $_SESSION['f37E_des_infide']; else echo $datos['des_infide'];?>" name="des_infide" id="des_infide" class="form-control" placeholder="Infidelidad"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="des_infide"><small>Infidelidad</small></label>
                        </div>
                      </div>
                  </div>
                </div>
               <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f37E_des_solic'])) echo $_SESSION['f37E_des_solic']; else echo $datos['des_solic'];?>" name="des_solic" id="des_solic" class="form-control" placeholder="Solicitud de un hijo/a" min="1" max="2" onkeyup="this.value=Numeros(this.value)" >
                        <label for="des_solic"><small>Solicitud de un hijo/a</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f37E_des_limite'])) echo $_SESSION['f37E_des_limite']; else echo $datos['des_limite'];?>" name="des_limite" id="des_limite" class="form-control" placeholder="Se siente ante una situación límite" min="1" max="2" onkeyup="this.value=Numeros(this.value)" >
                        <label for="des_limite"><small>Se siente ante una situación límite</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f37E_des_miedo'])) echo $_SESSION['f37E_des_miedo']; else echo $datos['des_miedo'];?>" name="des_miedo" id="des_miedo" class="form-control" placeholder="Tuvo miedo(más que el habitual)" min="1" max="2" onkeyup="this.value=Numeros(this.value)" >
                        <label for="des_miedo"><small>Tuvo miedo(más que el habitual)</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f37E_des_legal'])) echo $_SESSION['f37E_des_legal']; else echo $datos['des_legal'];?>" name="des_legal" id="des_legal" class="form-control" placeholder="Razones legales/jurídicas"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="des_legal"><small>Razones legales/jurídicas</small></label>
                        </div>
                      </div>
                  </div>
                </div>
                 <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f37E_des_deriv'])) echo $_SESSION['f37E_des_deriv']; else echo $datos['des_deriv'];?>" name="des_deriv" id="des_deriv" class="form-control" placeholder="Derivación"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="des_deriv"><small>Derivación</small></label>
                        </div>
                      </div>
					                       
                  </div>
                </div>
				 <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                        <div class="form-label-group">
                          <input type="text" value="<?php if (isset($_SESSION['f37E_des_otro'])) echo $_SESSION['f37E_des_otro']; else echo $datos['des_otro'];?>" name="des_otro" id="des_otro" class="form-control" placeholder="Otras(especificar)"  autofocus="autofocus">
                          <label for="des_otro"><small>Otras (especificar)</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  
                  <input type="hidden" value="<?php echo $datos['idficha37'];?>" name="idficha37" >
                  
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha36/editar">Volver</a>
                      </div>  
                      <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                          <input class="btn btn-primary btn-block " type="submit" value="Siguiente" />
                          
                      </div>
                      <div class="col-xs-3 col-sm-4 col-md-6 col-lg-3"></div>                    
                    </div>
                  </div>                
              </form>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript">
    //antecedentes agresor
    function Numeros(string){//Solo numeros
        var out = '';
        var filtro = '12';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
  }
  </script>
  </body>

</html>
