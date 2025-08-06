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
          document.getElementById("op124").style.cursor = 'default';
          document.getElementById("op124").style.color = '#585858';
          document.getElementById("op124").style.pointerEvents = "none";
          document.getElementById("op125").style.cursor = 'default';
          document.getElementById("op125").style.color = '#585858';
          document.getElementById("op125").style.pointerEvents = "none";
          document.getElementById("op126").style.cursor = 'default';
          document.getElementById("op126").style.color = '#585858';
          document.getElementById("op126").style.pointerEvents = "none";
          document.getElementById("op127").style.cursor = 'default';
          document.getElementById("op127").style.color = '#585858';
          document.getElementById("op127").style.pointerEvents = "none";
          document.getElementById("op128").style.cursor = 'default';
          document.getElementById("op128").style.color = '#585858';
          document.getElementById("op128").style.pointerEvents = "none";
          document.getElementById("op129").style.cursor = 'default';
          document.getElementById("op129").style.color = '#585858';
          document.getElementById("op129").style.pointerEvents = "none";
          document.getElementById("op130").style.cursor = 'default';
          document.getElementById("op130").style.color = '#585858';
          document.getElementById("op130").style.pointerEvents = "none";
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
                          <b>Evaluación de riesgo</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f3E_cohab'])) echo $_SESSION['f3E_cohab']; else echo $datos['cohab'];?>" name="cohab" id="cohab" class="form-control" placeholder="Cohabitación consultante/agresor" required="required" autofocus="autofocus" onkeyup="this.value=Numeros(this.value)">
                        <label for="cohab"><small><b>Cohabitación consultante/agresor(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f3E_idvinculo'])) echo $_SESSION['f3E_idvinculo']; else echo $datos['idvinculo'];?>" name="idvinculo" id="idvinculo" class="form-control" placeholder="Vínculo con el agresor" required="required" onkeyup="this.value=Numeros1(this.value)">
                        <label for="idvinculo"><small><b>Vínculo con el agresor(*)</b></small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f3E_anviagresor'])) echo $_SESSION['f3E_anviagresor']; else echo $datos['anviagresor'];?>" name="anviagresor" id="anviagresor" class="form-control" placeholder="Años de vínculo con el agresor"  autofocus="autofocus" min="0" max="60">
                          <label for="anviagresor"><small>Años de vínculo con el agresor</small></label>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f3E_anmaltrato'])) echo $_SESSION['f3E_anmaltrato']; else echo $datos['anmaltrato'];?>" name="anmaltrato" id="anmaltrato" class="form-control" placeholder="Años de maltrato"  autofocus="autofocus" min="0" max="60">
                          <label for="anmaltrato"><small>Años de maltrato</small></label>
                        </div>
                      </div>
                  </div>
                </div>
               <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f3E_embarazada'])) echo $_SESSION['f3E_embarazada']; else echo $datos['embarazada'];?>" name="embarazada" id="embarazada" class="form-control" placeholder="Consultante embarazada" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                        <label for="embarazada"><small>Consultante embarazada</small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <br /><hr>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f3E_idriesgo'])) echo $_SESSION['f3E_idriesgo']; else echo $datos['idriesgo'];?>" name="idriesgo" id="idriesgo" class="form-control" placeholder="Evaluación de riesgo" min="1" max="4" onkeyup="this.value=Numeros3(this.value)">
                        <label for="idriesgo"><small>Evaluación de riesgo</small></label>
                      </div>
                    </div>
                  </div>
                </div>
                  
                  <input type="hidden" value="<?php echo $datos['idficha3'];?>" name="idficha3" required="required">
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha2/editar">Volver</a>
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
    //Convivencia
      function Numeros(string){//Solo numeros
        var out = '';
        var filtro = '1299';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2 || string==99){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
      
        //Retornar valor filtrado
        return out;
    }

    //Vinculo
    function Numeros1(string){//Solo numeros
        var out = '';
        var filtro = '1234567891011121399';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2 || string==3 || string==4 || string==5 || string==6 || string==7 || string==8 || string==9 || string==10 || string==11 || string==12 || string==13 || string==99){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
      
        //Retornar valor filtrado
        return out;
    }

    //embarazada
    function Numeros2(string){//Solo numeros
        var out = '';
        var filtro = '12';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
      
        //Retornar valor filtrado
        return out;
    }

    //riesgo
    function Numeros3(string){//Solo numeros
        var out = '';
        var filtro = '1234';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2 || string==3 || string==4){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
      
        //Retornar valor filtrado
        return out;
    }
  </script>

  </body>

</html>