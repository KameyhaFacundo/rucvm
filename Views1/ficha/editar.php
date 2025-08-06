<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edición ficha</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo URL; ?>Views1/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo URL; ?>Views1/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo URL; ?>Views1/template/css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">
      
            <script type="text/javascript">
        window.onload=function(){
          //document.getElementById("op20").style.background='#BEB089';
          //document.getElementById("op19").style.background='#BEB089';
          document.getElementById("op121").style.cursor = 'default';
          document.getElementById("op121").style.color = '#585858';
          document.getElementById("op121").style.pointerEvents = "none";
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
    </script>
      
  <?php include 'r_menuizq1E.php'; ?>
    <div id="content-wrapper" style="background-color: #e9e2e8">
      <div class="container-fluid">
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card-header">Edición ficha</div>
            <div class="card-body">
              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <b>Datos consultante</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="date" value="<?php if (isset($_SESSION['fE_fec_consulta'])) echo $_SESSION['fE_fec_consulta']; else echo $datos['fec_consulta']; ?>" id="fec_consulta" name="fec_consulta" class="form-control" placeholder="Fecha consulta" min="1850-01-01" max="<?php echo date("Y-m-d");?> required="required" autofocus="autofocus">
                        <label for="fec_consulta"><b>Fecha consulta(*)</b></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="time" value="<?php if (isset($_SESSION['fE_horaconsulta'])) echo $_SESSION['fE_horaconsulta']; else echo $datos['horaconsulta']; ?>" id="horaconsulta" name="horaconsulta" class="form-control" placeholder="Hora consulta" >
                        <label for="horaconsulta">Hora consulta</label>
                      </div>
                    </div>
                  </div>
                </div>
               <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="date" value="<?php if (isset($_SESSION['fE_fec_agresion'])) echo $_SESSION['fE_fec_agresion']; else echo $datos['fec_agresion']; ?>" id="fec_agresion" name="fec_agresion" class="form-control" placeholder="Fecha agresión" required="required">
                        <label for="fec_agresion"><b>Fecha agresión(*)</b></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="time" value="<?php if (isset($_SESSION['fE_hora_agresion'])) echo $_SESSION['fE_hora_agresion']; else echo $datos['hora_agresion']; ?>" id="hora_agresion" name="hora_agresion" class="form-control" placeholder="Hora agresión" >
                        <label for="hora_agresion"><small>Hora agresión</small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['fE_idmomento'])) echo $_SESSION['fE_idmomento']; else echo $datos['idmomento']; ?>" id="idmomento" name="idmomento" class="form-control" placeholder="Momento del día" required="required" min="1" max="5" onkeyup="this.value=Numeros1(this.value)">
                        <label for="idmomento"><small><b>Momento de agresión(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['fE_p_menores'])) echo $_SESSION['fE_p_menores']; else echo $datos['p_menores']; ?>" id="p_menores" name="p_menores" class="form-control" placeholder="Presencia de menores" required="required" autofocus="autofocus" onkeyup="this.value=Numeros(this.value)">
                        <label for="p_menores"><small><b>Presencia de menores(*)</b></small></label>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                        <div class="form-label-group">
                          <input type="text" value="<?php if (isset($_SESSION['fE_agresor'])) echo $_SESSION['fE_agresor']; else echo $datos['agresor']; ?>" id="agresor" name="agresor" class="form-control" placeholder="Apellido y nombre del agresor"  autofocus="autofocus">
                          <label for="agresor"><small>Nombre del agresor</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['fE_disponelugar'])) echo $_SESSION['fE_disponelugar']; else echo $datos['disponelugar']; ?>" name="disponelugar" id="disponelugar" class="form-control" placeholder="Dispone de lugar"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros2(this.value)">
                          <label for="disponelugar"><small>Dispone de lugar</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['fE_idsalud'])) echo $_SESSION['fE_idsalud']; else echo $datos['idsalud']; ?>" id="idsalud" name="idsalud" class="form-control" placeholder="Cobertura de salud"  autofocus="autofocus" min="1" max="3" onkeyup="this.value=Numeros3(this.value)">
                          <label for="salud"><small>Cobertura de salud</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['fE_idvivienda'])) echo $_SESSION['fE_idvivienda']; else echo $datos['idvivienda']; ?>" id="idvivienda" name="idvivienda" class="form-control" placeholder="Tenencia de vivienda"  autofocus="autofocus" min="1" max="7" onkeyup="this.value=Numeros4(this.value)">
                          <label for="idvivienda"><small>Tenencia de vivienda</small></label>
                        </div>
                      </div>
                    </div>
                  </div>           
                   <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="selector-profesional">
                                <input  type="hidden" id="idprofesional1" name="idprofesional1" value="<?php if ($_SESSION['fE_idprofesional']){ echo $_SESSION['fE_idprofesional'];}else{echo $datos['idprofesional'];} ?>">
                                <label for="profesional"><small>Profesional(*)</small></label>
                                <select name="idprofesional" id="idprofesional" required="required" style="font-size:11pt" class="form-control"></select>
                              </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="selector-profesional">
                                <input  type="hidden" id="idusuario" name="idusuario" value="<?php if ($_SESSION['idusuario']){ echo $_SESSION['idusuario'];}?>">
                              </div>
                            </div>
                          </div>
                        </div>   
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>persona/editar/<?php echo $_SESSION['pE_idficha'];?>">Volver</a>
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
    <script src="<?php echo URL; ?>Views1/template/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo URL; ?>Views1/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo URL; ?>Views1/template/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo URL; ?>Views1/template/vendor/funciones.js"></script>

    <script type="text/javascript">

      //Presencia de menores
      function Numeros(string){//Solo numeros
        var out = '';
        var filtro = '0129';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==0 || string==1 || string==2 || string==9){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
      
        //Retornar valor filtrado
        return out;
    }

    //Momento de la agresion
    function Numeros1(string){//Solo numeros
        var out = '';
        var filtro = '12345';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2 || string==3 || string==4 || string==5){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
      
        //Retornar valor filtrado
        return out;
    }

    //Dispone lugar
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

    //Cobertura de salud
    function Numeros3(string){//Solo numeros
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

    //Tenencia de vivienda
    function Numeros4(string){//Solo numeros
        var out = '';
        var filtro = '1234567';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2 || string==3 || string==4 || string==5 || string==6 || string==7){
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