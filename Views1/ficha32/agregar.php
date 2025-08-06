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
          document.getElementById("op26").style.cursor = 'default';
          document.getElementById("op26").style.color = '#585858';
          document.getElementById("op26").style.pointerEvents = "none";
          document.getElementById("op27").style.cursor = 'default';
          document.getElementById("op27").style.color = '#585858';
          document.getElementById("op27").style.pointerEvents = "none";
          document.getElementById("op28").style.cursor = 'default';
          document.getElementById("op28").style.color = '#585858';
          document.getElementById("op28").style.pointerEvents = "none";
          document.getElementById("op29").style.cursor = 'default';
          document.getElementById("op29").style.color = '#585858';
          document.getElementById("op29").style.pointerEvents = "none";
          document.getElementById("op30").style.cursor = 'default';
          document.getElementById("op30").style.color = '#585858';
          document.getElementById("op30").style.pointerEvents = "none";
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
                          <b>Antecedente violencia consultante</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="anco_fisica" name="anco_fisica" class="form-control" placeholder="Física" value= "<?php if (isset($_SESSION['f32_anco_fisica'])) echo $_SESSION['f32_anco_fisica']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="anco_fisica"><small>Física</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="anco_psico" name="anco_psico" class="form-control" placeholder="Psicológica" value= "<?php if (isset($_SESSION['f32_anco_psico'])) echo $_SESSION['f32_anco_psico']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="anco_psico"><small>Psicológica</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="anco_absex" name="anco_absex" class="form-control" placeholder="Abuso sexual" value= "<?php if (isset($_SESSION['f32_anco_absex'])) echo $_SESSION['f32_anco_absex']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="anco_absex"><small>Abuso sexual</small></label>
                        </div>
                      </div>
                      </div>
                  </div>
               <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="anco_tesvio" name="anco_tesvio" class="form-control" placeholder="Testigo de violencia" value= "<?php if (isset($_SESSION['f32_anco_tesvio'])) echo $_SESSION['f32_anco_tesvio']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="anco_tesvio"><small>Testigo de violencia</small></label>
                        </div>
                      </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="anco_aban" name="anco_aban" class="form-control" placeholder="Abandono" value= "<?php if (isset($_SESSION['f32_anco_aban'])) echo $_SESSION['f32_anco_aban']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="anco_aban"><small>Abandono</small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                      <div class="form-label-group">
                        <input type="text" id="anco_otro" name="anco_otro" class="form-control" placeholder="Otro" value= "<?php if (isset($_SESSION['f32_anco_otro'])) echo $_SESSION['f32_anco_otro']; ?>" >
                        <label for="anco_otro"><small>Otro</small></label>
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha31/agregar">Volver</a>
                      </div>  
                      <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                          <!-- <a class="btn btn-primary btn-block" href="<?php //echo URL; ?>ficha33/agregar">Siguiente</a> -->
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