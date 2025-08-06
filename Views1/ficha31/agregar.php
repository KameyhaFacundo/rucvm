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
          document.getElementById("op25").style.cursor = 'default';
          document.getElementById("op25").style.color = '#585858';
          document.getElementById("op25").style.pointerEvents = "none";
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
                          <b>Tipos de violencia</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="v_fisica" name="v_fisica" class="form-control" placeholder="Violencia física" value= "<?php if (isset($_SESSION['f31_v_fisica'])) echo $_SESSION['f31_v_fisica']; ?>" required="required" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="v_fisica"><small><b>Violencia física(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="v_psicologica" name="v_psicologica" class="form-control" placeholder="Violencia verbal/psicologica/emocional" value= "<?php if (isset($_SESSION['f31_v_psicologica'])) echo $_SESSION['f31_v_psicologica']; ?>" required="required" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="v_psicologica"><small><b>Violencia verbal/psicologica/emocional(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="v_sexual" name="v_sexual" class="form-control" placeholder="Violencia sexual/reproductiva" required="required" value= "<?php if (isset($_SESSION['f31_v_sexual'])) echo $_SESSION['f31_v_sexual']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="v_sexual"><small><b>Violencia sexual/reproductiva(*)</b></small></label>
                        </div>
                      </div>
                      </div>
                  </div>
               <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="v_economica" name="v_economica" class="form-control" placeholder="Violencia económica/patrimonial" value= "<?php if (isset($_SESSION['f31_v_economica'])) echo $_SESSION['f31_v_economica']; ?>" required="required" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="v_economica"><small><b>Violencia económica/patrimonial(*)</b></small></label>
                        </div>
                      </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="v_parsocial" name="v_parsocial" class="form-control" placeholder="Restricción participación social" value= "<?php if (isset($_SESSION['f31_v_parsocial'])) echo $_SESSION['f31_v_parsocial']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)" required="required">
                        <label for="v_parsocial"><small><b>Restricción participación social(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="v_simbolica" name="v_simbolica" class="form-control" placeholder="Violencia simbólica" value= "<?php if (isset($_SESSION['f31_v_simbolica'])) echo $_SESSION['f31_v_simbolica']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)" required="required">
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
                          <input type="number" id="co_obstaculo" name="co_obstaculo" class="form-control" placeholder="Impedimento/obstaculación del contacto con los hijos" value= "<?php if (isset($_SESSION['f31_co_obstaculo'])) echo $_SESSION['f31_co_obstaculo']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="co_obstaculo"><small>Impedimento del contacto con los hijos</small></label>
                        </div>
                      </div>
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                          <div class="form-label-group">
                            <input type="number" id="co_econo" name="co_econo" class="form-control" placeholder="Limitación de recursos económicos" value= "<?php if (isset($_SESSION['f31_co_econo'])) echo $_SESSION['f31_co_econo']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                            <label for="co_econo"><small>Limitación de recursos económicos</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha3/agregar">Volver</a>
                      </div>  
                      <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                          <!-- <a class="btn btn-primary btn-block" href="<?php //echo URL; ?>ficha32/agregar">Siguiente</a> -->
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