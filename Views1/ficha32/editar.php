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
                          <b>Antecedente violencia consultante</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f32E_anco_fisica'])) echo $_SESSION['f32E_anco_fisica']; else echo $datos['anco_fisica'];?>" name="anco_fisica" id="anco_fisica" class="form-control" placeholder="Física"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="anco_fisica"><small>Física</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f32E_anco_psico'])) echo $_SESSION['f32E_anco_psico']; else echo $datos['anco_psico'];?>" name="anco_psico" id="anco_psico" class="form-control" placeholder="Psicológica" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="anco_psico"><small>Psicológica</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f32E_anco_absex'])) echo $_SESSION['f32E_anco_absex']; else echo $datos['anco_absex'];?>" name="anco_absex" id="anco_absex" class="form-control" placeholder="Abuso sexual"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="anco_absex"><small>Abuso sexual</small></label>
                        </div>
                      </div>
                      </div>
                  </div>
               <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f32E_anco_tesvio'])) echo $_SESSION['f32E_anco_tesvio']; else echo $datos['anco_tesvio'];?>" name="anco_tesvio" id="anco_tesvio" class="form-control" placeholder="Testigo de violencia"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="anco_tesvio"><small>Testigo de violencia</small></label>
                        </div>
                      </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f32E_anco_aban'])) echo $_SESSION['f32E_anco_aban']; else echo $datos['anco_aban'];?>" name="anco_aban" id="anco_aban" class="form-control" placeholder="Abandono" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="anco_aban"><small>Abandono</small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                      <div class="form-label-group">
                        <input type="text" value="<?php if (isset($_SESSION['f32E_anco_otro'])) echo $_SESSION['f32E_anco_otro']; else echo $datos['anco_otro'];?>" name="anco_otro" id="anco_otro" class="form-control" placeholder="Otro" >
                        <label for="anco_otro"><small>Otro</small></label>
                      </div>
                    </div>
                  </div>
                </div>
                  <input type="hidden" value="<?php echo $datos['idficha32'];?>" name="idficha32" required="required">
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha31/editar">Volver</a>
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
    //antecedentes
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
