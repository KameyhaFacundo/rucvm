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
          document.getElementById("op24").style.cursor = 'default';
          document.getElementById("op24").style.color = '#585858';
          document.getElementById("op24").style.pointerEvents = "none";
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
                          <b>Evaluación de riesgo</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="cohab" name="cohab" class="form-control" placeholder="Cohabitación consultante/agresor" value= "<?php if (isset($_SESSION['f3_cohab'])) echo $_SESSION['f3_cohab']; ?>" required="required" autofocus="autofocus" onkeyup="this.value=Numeros(this.value)">
                        <label for="cohab"><small><b>Cohabitación consultante/agresor(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="idvinculo" name="idvinculo" class="form-control" placeholder="Vínculo con el agresor" value= "<?php if (isset($_SESSION['f3_idvinculo'])) echo $_SESSION['f3_idvinculo']; ?>" required="required" onkeyup="this.value=Numeros1(this.value)">
                        <label for="idvinculo"><small><b>Vínculo con el agresor(*)</b></small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="anviagresor" name="anviagresor" class="form-control" placeholder="Años de vínculo con el agresor" value= "<?php if (isset($_SESSION['f3_anviagresor'])) echo $_SESSION['f3_anviagresor']; ?>" autofocus="autofocus" min="0" max="60">
                          <label for="anviagresor"><small>Años de vínculo con el agresor</small></label>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="anmaltrato" name="anmaltrato" class="form-control" placeholder="Años de maltrato" value= "<?php if (isset($_SESSION['f3_anmaltrato'])) echo $_SESSION['f3_anmaltrato']; ?>" autofocus="autofocus" min="0" max="60">
                          <label for="anmaltrato"><small>Años de maltrato</small></label>
                        </div>
                      </div>
                  </div>
                </div>
               <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="embarazada" name="embarazada" class="form-control" placeholder="Consultante embarazada" value= "<?php if (isset($_SESSION['f3_embarazada'])) echo $_SESSION['f3_embarazada']; ?>" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
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
                        <input type="number" id="idriesgo" name="idriesgo" class="form-control" placeholder="Evaluación de riesgo" value= "<?php if (isset($_SESSION['f3_idriesgo'])) echo $_SESSION['f3_idriesgo']; ?>" min="1" max="4" onkeyup="this.value=Numeros3(this.value)">
                        <label for="idriesgo"><small>Evaluación de riesgo</small></label>
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha2/agregar">Volver</a>
                      </div>  
                      <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                          <input class="btn btn-primary btn-block " type="submit" value="Siguiente" /> 
                          <!-- <a class="btn btn-primary btn-block" href="<?php //echo URL; ?>ficha31/agregar">Siguiente</a> -->
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
    //Convivencia
      function Numeros(string){//Solo numeros
        var out = '';
        var filtro = '129';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2 || string==9){
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