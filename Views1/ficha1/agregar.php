<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">


  


  <body class="bg-dark">
     
      <script type="text/javascript">
        window.onload=function(){
          document.getElementById("op22").style.cursor = 'default';
          document.getElementById("op22").style.color = '#585858';
          document.getElementById("op22").style.pointerEvents = "none";
          document.getElementById("op23").style.cursor = 'default';
          document.getElementById("op23").style.color = '#585858';
          document.getElementById("op23").style.pointerEvents = "none";
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
                          <b>Laboral - Educación</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="idactividad" name="idactividad" class="form-control" placeholder="Condición laboral" value= "<?php if (isset($_SESSION['f1_idactividad'])) echo $_SESSION['f1_idactividad']; ?>" required="required" autofocus="autofocus" onkeyup="this.value=Numeros(this.value)" onfocusout="habilitar(this.value);">
                        <label for="idactividad"><small><b>Condición laboral(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="idremunerada" name="idremunerada" class="form-control" placeholder="Ocupación remunerada" value= "<?php if (isset($_SESSION['f1_idremunerada'])) echo $_SESSION['f1_idremunerada']; ?>" min="1" max="6" onkeyup="this.value=Numeros1(this.value)">
                        <label for="idremunerada"><small>Ocupación remunerada</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="ingreso" name="ingreso" class="form-control" placeholder="Dispone ingresos propios" value= "<?php if (isset($_SESSION['f1_ingreso'])) echo $_SESSION['f1_ingreso']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                          <label for="ingreso"><small>Dispone de ingresos propios</small></label>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="auh" name="auh" class="form-control" placeholder="Cuenta con un auh?" value= "<?php if (isset($_SESSION['f1_auh'])) echo $_SESSION['f1_auh']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                          <label for="auh"><small>¿Cuenta con auh?</small></label>
                        </div>
                      </div>
                  </div>
                </div>
               <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="leeono" name="leeono" class="form-control" placeholder="¿Sabe leer y escribir?" value= "<?php if (isset($_SESSION['f1_leeono'])) echo $_SESSION['f1_leeono']; ?>" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                        <label for="leeono"><small>¿Sabe leer y escribir?</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="edu_consultante" name="edu_consultante" class="form-control" placeholder="Nivel educativo consultante" value= "<?php if (isset($_SESSION['f1_edu_consultante'])) echo $_SESSION['f1_edu_consultante']; ?>" required="required" onkeyup="this.value=Numeros3(this.value)">
                        <label for="edu_consultante"><small><b>Nivel educativo consultante(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="edu_agresor" name="edu_agresor" class="form-control" placeholder="Nivel educativo agresor" value= "<?php if (isset($_SESSION['f1_edu_agresor'])) echo $_SESSION['f1_edu_agresor']; ?>" required="required" onkeyup="this.value=Numeros3(this.value)">
                        <label for="edu_agresor"><small><b>Nivel educativo agresor(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="psocial" name="psocial" class="form-control" placeholder="Cuenta con un programa social?" value= "<?php if (isset($_SESSION['f1_psocial'])) echo $_SESSION['f1_psocial']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                          <label for="psocial"><small>¿Cuenta con un programa social?</small></label>
                        </div>
                      </div>
                  </div>
                </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="migrante" name="migrante" class="form-control" placeholder="Migrante" value= "<?php if (isset($_SESSION['f1_migrante'])) echo $_SESSION['f1_migrante']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)" onfocusout="habilitar1(this.value);">
                          <label for="migrante"><small>Migrante</small></label>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="idprocedencia" name="idprocedencia" class="form-control" placeholder="Procedencia" value= "<?php if (isset($_SESSION['f1_idprocedencia'])) echo $_SESSION['f1_idprocedencia']; ?>" autofocus="autofocus" min="1" max="3" onkeyup="this.value=Numeros4(this.value)">
                          <label for="idprocedencia"><small>Procedencia</small></label>
                        </div>
                      </div>
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                          <div class="form-label-group">
                            <input type="number" id="permanencia" name="permanencia" class="form-control" placeholder="Tiempo de permanencia" value= "<?php if (isset($_SESSION['f1_permanencia'])) echo $_SESSION['f1_permanencia']; ?>" autofocus="autofocus">
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
                          <input type="number" id="rs_concurrir" name="rs_concurrir" class="form-control" placeholder="Parientes a concurrir" value= "<?php if (isset($_SESSION['f1_rs_concurrir'])) echo $_SESSION['f1_rs_concurrir']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                          <label for="rs_concurrir"><small>Parientes a concurrir</small></label>
                        </div>
                      </div>
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                          <div class="form-label-group">
                            <input type="number" id="rs_vinculos" name="rs_vinculos" class="form-control" placeholder="Amigos, vecinos, compañeros" value= "<?php if (isset($_SESSION['f1_rs_vinculos'])) echo $_SESSION['f1_rs_vinculos']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                            <label for="rs_vinculos"><small>Amigos, vecinos, compañeros</small></label>
                        </div>
                    </div>
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="rs_institucion" name="rs_institucion" class="form-control" placeholder="Participa en instituciones" value= "<?php if (isset($_SESSION['f1_rs_institucion'])) echo $_SESSION['f1_rs_institucion']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
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
                          <input type="number" id="cv_problemas" name="cv_problemas" class="form-control" placeholder="Problemas laborales" value= "<?php if (isset($_SESSION['f1_cv_problemas'])) echo $_SESSION['f1_cv_problemas']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                          <label for="cv_problemas"><small>Problemas laborales</small></label>
                        </div>
                      </div>
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                          <div class="form-label-group">
                            <input type="number" id="cv_limitacion" name="cv_limitacion" class="form-control" placeholder="Limitación para buscar empleo" value= "<?php if (isset($_SESSION['f1_cv_limitacion'])) echo $_SESSION['f1_cv_limitacion']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                            <label for="cv_limitacion"><small>Limitación para buscar empleo</small></label>
                        </div>
                    </div>
                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                          <div class="form-label-group">
                            <input type="number" id="cv_perempleo" name="cv_perempleo" class="form-control" placeholder="Perdió empleo por violencia" value= "<?php if (isset($_SESSION['f1_cv_perempleo'])) echo $_SESSION['f1_cv_perempleo']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                            <label for="cv_perempleo"><small>Perdió empleo por violencia</small></label>
                          </div>
                        </div>
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="cv_perestudio" name="cv_perestudio" class="form-control" placeholder="Dificultad o perdida de estudio" value= "<?php if (isset($_SESSION['f1_cv_perestudio'])) echo $_SESSION['f1_cv_perestudio']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                          <label for="cv_perestudio"><small>Dificultad o perdida de estudio</small></label>
                        </div>
                      </div>
                  </div>
                </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha/agregar">Volver</a>
                      </div>  
                      <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                          <input class="btn btn-primary btn-block " type="submit" value="Siguiente" /> 
                          <!-- <a class="btn btn-primary btn-block" href="<?php //echo URL; ?>ficha2/agregar">Siguiente</a> -->
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