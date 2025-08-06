<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Nueva ficha</title>



  </head>

  <body class="bg-dark">

                                  <script type="text/javascript">
        window.onload=function(){
          document.getElementById("op31").style.cursor = 'default';
          document.getElementById("op31").style.color = '#585858';
          document.getElementById("op31").style.pointerEvents = "none";
          document.getElementById("op32").style.cursor = 'default';
          document.getElementById("op32").style.color = '#585858';
          document.getElementById("op32").style.pointerEvents = "none";
        }
    </script>
    
  <?php include 'r_menuizq1.php'; ?>
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
                        <input type="number" id="des_hijos" name="des_hijos" class="form-control" placeholder="Hijos grandes/independientes" value= "<?php if (isset($_SESSION['f37_des_hijos'])) echo $_SESSION['f37_des_hijos']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="des_hijos"><small>Hijos grandes/independientes</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="des_golpe" name="des_golpe" class="form-control" placeholder="Golpes a los hijos" value= "<?php if (isset($_SESSION['f37_des_golpe'])) echo $_SESSION['f37_des_golpe']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="des_golpe"><small>Golpes a los hijos</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="des_conoc" name="des_conoc" class="form-control" placeholder="Conocimiento del problema en otros" value= "<?php if (isset($_SESSION['f37_des_conoc'])) echo $_SESSION['f37_des_conoc']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="des_conoc"><small>Conocimiento del problema en otros</small></label>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="des_infide" name="des_infide" class="form-control" placeholder="Infidelidad" value= "<?php if (isset($_SESSION['f37_des_infide'])) echo $_SESSION['f37_des_infide']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="des_infide"><small>Infidelidad</small></label>
                        </div>
                      </div>
                  </div>
                </div>
               <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="des_solic" name="des_solic" class="form-control" placeholder="Solicitud de un hijo/a" value= "<?php if (isset($_SESSION['f37_des_solic'])) echo $_SESSION['f37_des_solic']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="des_solic"><small>Solicitud de un hijo/a</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="des_limite" name="des_limite" class="form-control" placeholder="Se siente ante una situación límite" value= "<?php if (isset($_SESSION['f37_des_limite'])) echo $_SESSION['f37_des_limite']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="des_limite"><small>Se siente ante una situación límite</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="des_miedo" name="des_miedo" class="form-control" placeholder="Tuvo miedo(más que el habitual)" value= "<?php if (isset($_SESSION['f37_des_miedo'])) echo $_SESSION['f37_des_miedo']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="des_miedo"><small>Tuvo miedo(más que el habitual)</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="des_legal" name="des_legal" class="form-control" placeholder="Razones legales/jurídicas" value= "<?php if (isset($_SESSION['f37_des_legal'])) echo $_SESSION['f37_des_legal']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="des_legal"><small>Razones legales/jurídicas</small></label>
                        </div>
                      </div>
                  </div>
                </div>
                 <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="des_deriv" name="des_deriv" class="form-control" placeholder="Derivación" value= "<?php if (isset($_SESSION['f37_des_deriv'])) echo $_SESSION['f37_des_deriv']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="des_deriv"><small>Derivación</small></label>
                        </div>
                      </div>
					                       
                  </div>
                </div>
				 <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                        <div class="form-label-group">
                          <input type="text" id="des_otro" name="des_otro" class="form-control" placeholder="Otras(especificar)" value= "<?php if (isset($_SESSION['f37_des_otro'])) echo $_SESSION['f37_des_otro']; ?>" autofocus="autofocus">
                          <label for="des_otro"><small>Otras (especificar)</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                
                  
                  
                  
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha36/agregar">Volver</a>
                      </div>  
                      <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                          <input class="btn btn-primary btn-block " type="submit" value="Siguiente" /> 
                          <!-- <a class="btn btn-primary btn-block" href="<?php //echo URL; ?>ficha4/agregar">Siguiente</a> -->
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