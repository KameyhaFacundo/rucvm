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
                          <b>Hechos asociados a episodios violentos</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="he_embar" name="he_embar" class="form-control" placeholder="Embarazo/nacimiento de hijos" value= "<?php if (isset($_SESSION['f34_he_embar'])) echo $_SESSION['f34_he_embar']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="he_embar"><small>Embarazo/nacimiento de hijos</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="he_celos" name="he_celos" class="form-control" placeholder="Celos" value= "<?php if (isset($_SESSION['f34_he_celos'])) echo $_SESSION['f34_he_celos']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="he_celos"><small>Celos</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="he_plabor" name="he_plabor" class="form-control" placeholder="Problemas laborales" value= "<?php if (isset($_SESSION['f34_he_plabor'])) echo $_SESSION['f34_he_plabor']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="he_plabor"><small>Problemas laborales</small></label>
                        </div>
                      </div>
                      </div>
                  </div>
               <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="he_alcohol" name="he_alcohol" class="form-control" placeholder="Alcohol/sustancias psicoactivas" value= "<?php if (isset($_SESSION['f34_he_alcohol'])) echo $_SESSION['f34_he_alcohol']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="he_alcohol"><small>Alcohol/sustancias psicoactivas</small></label>
                        </div>
                      </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="he_autoco" name="he_autoco" class="form-control" placeholder="Autonomía de la consultante" value= "<?php if (isset($_SESSION['f34_he_autoco'])) echo $_SESSION['f34_he_autoco']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="he_autoco"><small>Autonomía de la consultante</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="he_impco" name="he_impco" class="form-control" placeholder="Impredecible/consuso" value= "<?php if (isset($_SESSION['f34_he_impco'])) echo $_SESSION['f34_he_impco']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="he_impco"><small>Impredecible/consuso</small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="he_separ" name="he_separ" class="form-control" placeholder="Intención de separarse" value= "<?php if (isset($_SESSION['f34_he_separ'])) echo $_SESSION['f34_he_separ']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="he_separ"><small>Intención de separarse</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                          <div class="form-label-group">
                            <input type="text" id="he_otro" name="he_otro" class="form-control" placeholder="Otro" value= "<?php if (isset($_SESSION['f34_he_otro'])) echo $_SESSION['f34_he_otro']; ?>" autofocus="autofocus">
                            <label for="he_otro"><small>Otro</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha33/agregar">Volver</a>
                      </div>  
                      <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                          <input class="btn btn-primary btn-block " type="submit" value="Siguiente" /> 
                          <!-- <a class="btn btn-primary btn-block" href="<?php //echo URL; ?>ficha35/agregar">Siguiente</a> -->
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