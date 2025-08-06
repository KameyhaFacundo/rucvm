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
                          <b>Estado salud</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f36E_t_suenio'])) echo $_SESSION['f36E_t_suenio']; else echo $datos['t_suenio'];?>" name="t_suenio" id="t_suenio" class="form-control" placeholder="Trastorno del sueño"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="t_sueño"><small>Trastorno del sueño</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f36E_t_alimen'])) echo $_SESSION['f36E_t_alimen']; else echo $datos['t_alimen'];?>" name="t_alimen" id="t_alimen" class="form-control" placeholder="Trastorno de alimentación" min="1" max="2" onkeyup="this.value=Numeros(this.value)" >
                        <label for="t_alimen"><small>Trastorno de alimentación</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f36E_t_digest'])) echo $_SESSION['f36E_t_digest']; else echo $datos['t_digest'];?>" name="t_digest" id="t_digest" class="form-control" placeholder="Trastornos digestivos"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="t_digest"><small>Trastornos digestivos</small></label>
                        </div>
                      </div>
                      </div>
                  </div>
               <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f36E_t_antidep'])) echo $_SESSION['f36E_t_antidep']; else echo $datos['t_antidep'];?>" name="t_antidep" id="t_antidep" class="form-control" placeholder="Ingesta ansiolíticos/antidepresivos"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="t_antidep"><small>Ingesta ansiolíticos/antidepresivos</small></label>
                        </div>
                      </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f36E_t_aldrog'])) echo $_SESSION['f36E_t_aldrog']; else echo $datos['t_aldrog'];?>" name="t_aldrog" id="t_aldrog" class="form-control" placeholder="Consumo alchol/drogas" min="1" max="2" onkeyup="this.value=Numeros(this.value)" >
                        <label for="t_aldrog"><small>Consumo alchol/drogas</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f36E_t_its'])) echo $_SESSION['f36E_t_its']; else echo $datos['t_its'];?>" name="t_its" id="t_its" class="form-control" placeholder="ITS"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="t_its"><small>ITS</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                        <div class="form-label-group">
                          <input type="text" value="<?php if (isset($_SESSION['f36E_t_otro'])) echo $_SESSION['f36E_t_otro']; else echo $datos['t_otro'];?>" name="t_otro" id="t_otro" class="form-control" placeholder="Otros trastornos de salud" >
                          <label for="t_otro"><small>Otros trastornos de salud</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <input type="hidden" value="<?php echo $datos['idficha36'];?>" name="idficha36" required="required">
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha35/editar">Volver</a>
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
