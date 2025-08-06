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
                          <b>Indicadores de riesgo</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="ind_lesfis" name="ind_lesfis" class="form-control" placeholder="Signos de lesión física" value= "<?php if (isset($_SESSION['f35_ind_lesfis'])) echo $_SESSION['f35_ind_lesfis']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="ind_lesfis"><small>Signos de lesión física</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="ind_intmed" name="ind_intmed" class="form-control" placeholder="Intervención médica" value= "<?php if (isset($_SESSION['f35_ind_intmed'])) echo $_SESSION['f35_ind_intmed']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="ind_intmed"><small>Intervención médica</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="ind_amuerte" name="ind_amuerte" class="form-control" placeholder="Amenaza de muerte" value= "<?php if (isset($_SESSION['f35_ind_amuerte'])) echo $_SESSION['f35_ind_amuerte']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="ind_amuerte"><small>Amenaza de muerte</small></label>
                        </div>
                      </div>
                      </div>
                  </div>
               <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="ind_armas" name="ind_armas" class="form-control" placeholder="Tiene armas blancas/fuego" value= "<?php if (isset($_SESSION['f35_ind_armas'])) echo $_SESSION['f35_ind_armas']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="ind_armas"><small>Tiene armas blancas/fuego</small></label>
                        </div>
                      </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="ind_aborto" name="ind_aborto" class="form-control" placeholder="Aborto provocado por agresor" value= "<?php if (isset($_SESSION['f35_ind_aborto'])) echo $_SESSION['f35_ind_aborto']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="ind_aborto"><small>Aborto provocado por agresor</small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="ind_idsuic" name="ind_idsuic" class="form-control" placeholder="Ideación suicida" value= "<?php if (isset($_SESSION['f35_ind_idsuic'])) echo $_SESSION['f35_ind_idsuic']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="ind_idsuic"><small>Ideación suicida</small></label>
                        </div>
                      </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="ind_insuic" name="ind_insuic" class="form-control" placeholder="Intento de suicidio" value= "<?php if (isset($_SESSION['f35_ind_insuic'])) echo $_SESSION['f35_ind_insuic']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="ind_insuic"><small>Intento de suicidio</small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="ind_sexfor" name="ind_sexfor" class="form-control" placeholder="Relaciones sexuales forzosas" value= "<?php if (isset($_SESSION['f35_ind_sexfor'])) echo $_SESSION['f35_ind_sexfor']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="ind_sexfor"><small>Relaciones sexuales forzosas</small></label>
                        </div>
                      </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="ind_acoso" name="ind_acoso" class="form-control" placeholder="Acoso" value= "<?php if (isset($_SESSION['f35_ind_acoso'])) echo $_SESSION['f35_ind_acoso']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="ind_acoso"><small>Acoso</small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="ind_antpen" name="ind_antpen" class="form-control" placeholder="Antecedentes penales" value= "<?php if (isset($_SESSION['f35_ind_antpen'])) echo $_SESSION['f35_ind_antpen']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="ind_antpen"><small>Antecedentes penales</small></label>
                        </div>
                      </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="ind_sust" name="ind_sust" class="form-control" placeholder="Consumo de sustancias" value= "<?php if (isset($_SESSION['f35_ind_sust'])) echo $_SESSION['f35_ind_sust']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="ind_sust"><small>Consumo de sustancias</small></label>
                      </div>
                    </div>
                  </div>
                </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha34/agregar">Volver</a>
                      </div>  
                      <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                          <input class="btn btn-primary btn-block " type="submit" value="Siguiente" /> 
                          <!-- <a class="btn btn-primary btn-block" href="<?php //echo URL; ?>ficha36/agregar">Siguiente</a> -->
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