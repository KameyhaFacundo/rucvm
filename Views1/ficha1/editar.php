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
          document.getElementById("op122").style.cursor = 'default';
          document.getElementById("op122").style.color = '#585858';
          document.getElementById("op122").style.pointerEvents = "none";
          document.getElementById("op123").style.cursor = 'default';
          document.getElementById("op123").style.color = '#585858';
          document.getElementById("op123").style.pointerEvents = "none";
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

        function habilitar(value)
        {
          if(value=="1")
          {
            // habilitamos
            document.getElementById("idremunerada").disabled=false;
          }else{
            // deshabilitamos
            document.getElementById("idremunerada").value='';
            document.getElementById("idremunerada").disabled=true;
          }
        }

        function habilitar1(value)
        {
          if(value=="1")
          {
            // habilitamos
            document.getElementById("idprocedencia").disabled=false;
            document.getElementById("permanencia").disabled=false;
          }else{
            // deshabilitamos
            document.getElementById("idprocedencia").value='';
            document.getElementById("idprocedencia").disabled=true;
            document.getElementById("permanencia").value='';
            document.getElementById("permanencia").disabled=true;
          }
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
                          <b>Laboral - Educación</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php  if (isset($_SESSION['f1E_idactividad'])) echo $_SESSION['f1E_idactividad']; else echo $datos['idactividad']; ?>" name="idactividad" id="idactividad" class="form-control" placeholder="Condición laboral"  autofocus="autofocus" required="required" onkeyup="this.value=Numeros(this.value)" onfocusout="habilitar(this.value);">
                        <label for="idactividad"><small><b>Condición laboral(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php  if (isset($_SESSION['f1E_idremunerada'])) echo $_SESSION['f1E_idremunerada']; else echo $datos['idremunerada']; ?>" name="idremunerada" id="idremunerada" class="form-control" placeholder="Ocupación remunerada" min="1" max="6" onkeyup="this.value=Numeros1(this.value)">
                        <label for="idremunerada"><small>Ocupación remunerada</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f1E_ingreso'])) echo $_SESSION['f1E_ingreso']; else echo $datos['ingreso']; ?>" name="ingreso" id="ingreso" class="form-control" placeholder="Dispone ingresos propios"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                          <label for="ingreso"><small>Dispone de ingresos propios</small></label>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f1E_auh'])) echo $_SESSION['f1E_auh']; else echo $datos['auh']; ?>" name="auh" id="auh" class="form-control" placeholder="Cuenta con un auh?"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                          <label for="auh"><small>¿Cuenta con auh?</small></label>
                        </div>
                      </div>
                  </div>
                </div>
               <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f1E_leeono'])) echo $_SESSION['f1E_leeono']; else echo $datos['leeono']; ?>" name="leeono" id="leeono" class="form-control" placeholder="¿Sabe leer y escribir?" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                        <label for="leeono"><small>¿Sabe leer y escribir?</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f1E_edu_consultante'])) echo $_SESSION['f1E_edu_consultante']; else echo $datos['edu_consultante']; ?>" name="edu_consultante" id="edu_consultante" class="form-control" placeholder="Nivel educativo consultante" required="required" onkeyup="this.value=Numeros3(this.value)">
                        <label for="edu_consultante"><small><b>Nivel educativo consultante(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['f1E_edu_agresor'])) echo $_SESSION['f1E_edu_agresor']; else echo $datos['edu_agresor']; ?>" name="edu_agresor" id="edu_agresor" class="form-control" placeholder="Nivel educativo agresor" required="required" onkeyup="this.value=Numeros3(this.value)">
                        <label for="edu_agresor"><small><b>Nivel educativo agresor(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f1E_psocial'])) echo $_SESSION['f1E_psocial']; else echo $datos['psocial']; ?>" name="psocial" id="psocial" class="form-control" placeholder="Cuenta con un programa social?"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                          <label for="psocial"><small>¿Cuenta con un programa social?</small></label>
                        </div>
                      </div>
                  </div>
                </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f1E_migrante'])) echo $_SESSION['f1E_migrante']; else echo $datos['migrante']; ?>" name="migrante" id="migrante" class="form-control" placeholder="Migrante"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)" onfocusout="habilitar1(this.value);">
                          <label for="migrante"><small>Migrante</small></label>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f1E_idprocedencia'])) echo $_SESSION['f1E_idprocedencia']; else echo $datos['idprocedencia']; ?>" name="idprocedencia" id="idprocedencia" class="form-control" placeholder="Procedencia"  autofocus="autofocus" min="1" max="3" onkeyup="this.value=Numeros4(this.value)">
                          <label for="idprocedencia"><small>Procedencia</small></label>
                        </div>
                      </div>
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                          <div class="form-label-group">
                            <input type="number" value="<?php if (isset($_SESSION['f1E_permanencia'])) echo $_SESSION['f1E_permanencia']; else echo $datos['permanencia']; ?>" name="permanencia"  id="permanencia" class="form-control" placeholder="Tiempo de permanencia"  autofocus="autofocus">
                            <label for="permanencia"><small>Tiempo de permanencia</small></label>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <br /><b>Red social y comunitaria</b><hr>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f1E_rs_concurrir'])) echo $_SESSION['f1E_rs_concurrir']; else echo $datos['rs_concurrir']; ?>" name="rs_concurrir" id="rs_concurrir" class="form-control" placeholder="Parientes a concurrir"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                          <label for="rs_concurrir"><small>Parientes a concurrir</small></label>
                        </div>
                      </div>
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                          <div class="form-label-group">
                            <input type="number" value="<?php if (isset($_SESSION['f1E_rs_vinculos'])) echo $_SESSION['f1E_rs_vinculos']; else echo $datos['rs_vinculos']; ?>" name="rs_vinculos" id="rs_vinculos" class="form-control" placeholder="Amigos, vecinos, compañeros"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                            <label for="rs_vinculos"><small>Amigos, vecinos, compañeros</small></label>
                        </div>
                    </div>
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f1E_rs_institucion'])) echo $_SESSION['f1E_rs_institucion']; else echo $datos['rs_institucion']; ?>" name="rs_institucion" id="rs_institucion" class="form-control" placeholder="Participa en instituciones"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                          <label for="rs_institucion"><small>Participa en instituciones</small></label>
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
                          <input type="number" value="<?php if (isset($_SESSION['f1E_cv_problemas'])) echo $_SESSION['f1E_cv_problemas']; else echo $datos['cv_problemas']; ?>" name="cv_problemas" id="cv_problemas" class="form-control" placeholder="Problemas laborales"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                          <label for="cv_problemas"><small>Problemas laborales</small></label>
                        </div>
                      </div>
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                          <div class="form-label-group">
                            <input type="number" value="<?php if (isset($_SESSION['f1E_cv_limitacion'])) echo $_SESSION['f1E_cv_limitacion']; else echo $datos['cv_limitacion']; ?>" name="cv_limitacion" id="cv_limitacion" class="form-control" placeholder="Limitación para buscar empleo"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                            <label for="cv_limitacion"><small>Limitación para buscar empleo</small></label>
                        </div>
                    </div>
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                          <div class="form-label-group">
                            <input type="number" value="<?php if (isset($_SESSION['f1E_cv_perempleo'])) echo $_SESSION['f1E_cv_perempleo']; else echo $datos['cv_perempleo']; ?>" name="cv_perempleo" id="cv_perempleo" class="form-control" placeholder="Perdió empleo por violencia"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                            <label for="cv_perempleo"><small>Perdió empleo por violencia</small></label>
                          </div>
                        </div>
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['f1E_cv_perestudio'])) echo $_SESSION['f1E_cv_perestudio']; else echo $datos['cv_perestudio']; ?>" name="cv_perestudio" id="cv_perestudio" class="form-control" placeholder="Dificultad o perdida de estudio"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                          <label for="cv_perestudio"><small>Dificultad o perdida de estudio</small></label>
                        </div>
                      </div>
                  </div>
                </div>
                  
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha/editar">Volver</a>
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
  //Condicion laboral
      function Numeros(string){//Solo numeros
        var out = '';
        var filtro = '12349';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2 || string==3 || string==4 || string==9){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
      
        //Retornar valor filtrado
        return out;
    }

    //Ocupacion remunerada
      function Numeros1(string){//Solo numeros
        var out = '';
        var filtro = '123456';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2 || string==3 || string==4 || string==5 || string==6){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
      
        //Retornar valor filtrado
        return out;
    }

    //Dispone ingresos propios, Red social y comunitaria, Consecuencias de la violencia
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

    //Nivel educativo
    function Numeros3(string){//Solo numeros
        var out = '';
        var filtro = '012345678999';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==0 || string==1 || string==2 || string==3 || string==4 || string==5 || string==6 || string==7 || string==8 || string==9 || string==99){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
      
        //Retornar valor filtrado
        return out;
    }  

    //Procedencia
    function Numeros4(string){//Solo numeros
        var out = '';
        var filtro = '123';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2 || string==3){
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