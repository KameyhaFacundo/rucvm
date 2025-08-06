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
                          <b>Tipos de violencia</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f31E_v_fisica'])) echo $_SESSION['f31E_v_fisica']; else echo $datos['v_fisica'];?>" name="v_fisica" id="v_fisica" class="form-control" placeholder="Violencia física" required="required" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="v_fisica"><small><b>Violencia física(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f31E_v_psicologica'])) echo $_SESSION['f31E_v_psicologica']; else echo $datos['v_psicologica'];?>" name="v_psicologica" id="v_psicologica" class="form-control" placeholder="Violencia verbal/psicologica/emocional" required="required" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="v_psicologica"><small><b>Violencia verbal/psicologica/emocional(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f31E_v_sexual'])) echo $_SESSION['f31E_v_sexual']; else echo $datos['v_sexual'];?>" name="v_sexual" id="v_sexual" class="form-control" placeholder="Violencia sexual/reproductiva" required="required" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="v_sexual"><small><b>Violencia sexual/reproductiva(*)</b></small></label>
                        </div>
                      </div>
                      </div>
                  </div>
               <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f31E_v_economica'])) echo $_SESSION['f31E_v_economica']; else echo $datos['v_economica'];?>" name="v_economica" id="v_economica" class="form-control" placeholder="Violencia económica/patrimonial" required="required" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="v_economica"><small><b>Violencia económica/patrimonial(*)</b></small></label>
                        </div>
                      </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f31E_v_parsocial'])) echo $_SESSION['f31E_v_parsocial']; else echo $datos['v_parsocial'];?>" name="v_parsocial" id="v_parsocial" class="form-control" placeholder="Restricción participación social" min="1" max="2" onkeyup="this.value=Numeros(this.value)" required="required">
                        <label for="v_parsocial"><small><b>Restricción participación social(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f31E_v_simbolica'])) echo $_SESSION['f31E_v_simbolica']; else echo $datos['v_simbolica'];?>" name="v_simbolica" id="v_simbolica" class="form-control" placeholder="Violencia simbólica" min="1" max="2" onkeyup="this.value=Numeros(this.value)" required="required">
                        <label for="v_simbolica"><small><b>Violencia simbólica(*)</b></small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <br /><b>Consecuencias de la violencia</b><hr>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f31E_co_obstaculo'])) echo $_SESSION['f31E_co_obstaculo']; else echo $datos['co_obstaculo'];?>" name="co_obstaculo" id="co_obstaculo" class="form-control" placeholder="Impedimento/obstaculación del contacto con los hijos"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="co_obstaculo"><small>Impedimento del contacto con los hijos</small></label>
                        </div>
                      </div>
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                          <div class="form-label-group">
                            <input type="number" value="<?php if (isset($_SESSION['f31E_co_econo'])) echo $_SESSION['f31E_co_econo']; else echo $datos['co_econo'];?>" name="co_econo" id="co_econo" class="form-control" placeholder="Limitación de recursos económicos"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                            <label for="co_econo"><small>Limitación de recursos económicos</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <input type="hidden" value="<?php echo $datos['idficha31'];?>" name="idficha31" required="required">
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha3/editar">Volver</a>
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
  //violencias
    function Numeros(string){//Solo numeros
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
</script>
  </body>

</html>
