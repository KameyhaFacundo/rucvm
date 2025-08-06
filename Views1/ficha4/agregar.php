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

    <!-- Bootstrap core CSS-->
    <link href="<?php echo URL; ?>Views1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo URL; ?>Views1/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo URL; ?>Views1/css/sb-admin.css" rel="stylesheet">
    <script type="text/javascript">
        window.onload=function(){
          document.getElementById("op32").style.cursor = 'default';
          document.getElementById("op32").style.color = '#585858';
          document.getElementById("op32").style.pointerEvents = "none";
          document.getElementById("op31").style.color = 'white';
        }

        function habilitar(value)
        {
          if(value=="3")
          {
            // habilitamos
            document.getElementById("idcomisaria").disabled=false;
          }else{
            // deshabilitamos
            document.getElementById("idcomisaria").value='Seleccionar comisaria';
            document.getElementById("idcomisaria").disabled=true;
          }
        }

        function habilitar1(value)
        {
          if(value=="2")
          {
            // habilitamos
            document.getElementById("de_ofemp").disabled=false;
            document.getElementById("de_consul").disabled=false;
            document.getElementById("de_defen").disabled=false;
            document.getElementById("de_psocial").disabled=false;
            document.getElementById("de_amujer").disabled=false;
            document.getElementById("de_comujer").disabled=false;
            document.getElementById("de_otra").disabled=false;
          }else{
            // deshabilitamos
            if(value=="1"){
              document.getElementById("de_ofemp").value='';
              document.getElementById("de_ofemp").disabled=true;
              document.getElementById("de_consul").value='';
              document.getElementById("de_consul").disabled=true;
              document.getElementById("de_defen").value='';
              document.getElementById("de_defen").disabled=true;
              document.getElementById("de_psocial").value='';
              document.getElementById("de_psocial").disabled=true;
              document.getElementById("de_amujer").value='';
              document.getElementById("de_amujer").disabled=true;
              document.getElementById("de_comujer").value='';
              document.getElementById("de_comujer").disabled=true;
              document.getElementById("de_otra").value='';
              document.getElementById("de_otra").disabled=true;
            }
          }
        }

        function habilitar2(value)
        {
          if(value=="2")
          {
            // habilitamos
            document.getElementById("di_apsico").disabled=false;
            document.getElementById("di_pjuridico").disabled=false;
            document.getElementById("di_refugio").disabled=false;
            document.getElementById("di_grupos").disabled=false;
            document.getElementById("di_alegal").disabled=false;
            document.getElementById("di_asocial").disabled=false;
            document.getElementById("di_otros").disabled=false;
          }else{
            // deshabilitamos
            if(value=="1"){
              document.getElementById("di_apsico").value='';
              document.getElementById("di_apsico").disabled=true;
              document.getElementById("di_pjuridico").value='';
              document.getElementById("di_pjuridico").disabled=true;
              document.getElementById("di_refugio").value='';
              document.getElementById("di_refugio").disabled=true;
              document.getElementById("di_grupos").value='';
              document.getElementById("di_grupos").disabled=true;
              document.getElementById("di_alegal").value='';
              document.getElementById("di_alegal").disabled=true;
              document.getElementById("di_asocial").value='';
              document.getElementById("di_asocial").disabled=true;
              document.getElementById("di_otros").value='';
              document.getElementById("di_otros").disabled=true;
            }
          }
        }
  </script>

  </head>

  <body class="bg-dark">
  <div id="enviar" name="enviar">      
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
                          <b>Antecedentes</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="recientepenal" name="recientepenal" class="form-control" placeholder="Penal reciente" value= "<?php if (isset($_SESSION['f4_recientepenal'])) echo $_SESSION['f4_recientepenal']; ?>"   autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="recientepenal"><small>Penal reciente</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="previapenal" name="previapenal" class="form-control" placeholder="Penal previo" value= "<?php if (isset($_SESSION['f4_previapenal'])) echo $_SESSION['f4_previapenal']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)"  >
                        <label for="previapenal"><small>Penal previo</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="recientecivil" name="recientecivil" class="form-control" placeholder="Civil reciente" value= "<?php if (isset($_SESSION['f4_recientecivil'])) echo $_SESSION['f4_recientecivil']; ?>"   autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="recientecivil"><small>Civil reciente</small></label>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="previacivil" name="previacivil" class="form-control" placeholder="Civil previo" value= "<?php if (isset($_SESSION['f4_previacivil'])) echo $_SESSION['f4_previacivil']; ?>"   autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="previacivil"><small>Civil previo</small></label>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="recientepoli" name="recientepoli" class="form-control" placeholder="Intervención policial reciente" value= "<?php if (isset($_SESSION['f4_recientepoli'])) echo $_SESSION['f4_recientepoli']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)"  >
                        <label for="recientepoli"><small>Intervención policial reciente</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="previapoli" name="previapoli" class="form-control" placeholder="Intervención policial previo" value= "<?php if (isset($_SESSION['f4_previapoli'])) echo $_SESSION['f4_previapoli']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)"  >
                        <label for="previapoli"><small>Intervención policial previo</small></label>
                      </div>
                    </div>
					      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="denuncia" name="denuncia" class="form-control" placeholder="¿Hizo denuncia?" value= "<?php if (isset($_SESSION['f4_denuncia'])) echo $_SESSION['f4_denuncia']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)" >
                        <label for="denuncia"><small>¿Hizo denuncia?</small></label>
                      </div>
                    </div>
					      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="p_medidas" name="p_medidas" class="form-control" placeholder="¿Pidió medidas?" value= "<?php if (isset($_SESSION['f4_p_medidas'])) echo $_SESSION['f4_p_medidas']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)" >
                        <label for="p_medidas"><small>¿Pidió medidas?</small></label>
                      </div>
                    </div>   
                  </div>
                </div>
				        <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <br /><b>Accesibilidad</b><hr>
                        </div>
                      </div>
                    </div>
                 </div>
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="idaccesibilidad" name="idaccesibilidad" class="form-control" placeholder="Accesibilidad al servicio(*)" value= "<?php if (isset($_SESSION['f4_idaccesibilidad'])) echo $_SESSION['f4_idaccesibilidad']; ?>" required="required" autofocus="autofocus" onchange="habilitar(this.value);" onkeyup="this.value=Numeros1(this.value)">
                          <label for="idaccesibilidad"><small><b>Accesibilidad al servicio(*)</b></small></label>
                        </div>
                      </div>
                      <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                              <div class="selector-comisaria">
                                <input  type="hidden" id="idcomisaria1" name="idcomisaria1" value="<?php if (isset($_SESSION['f4_idcomisaria'])){ echo $_SESSION['f4_idcomisaria'];}else{echo '+';} ?>">
                                <select name="idcomisaria" id="idcomisaria" style="font-size:11pt" class="form-control"></select>
                              </div>
                            </div>
                          </div>
                        </div>     
                  </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <br /><b>Derivación Externa</b><hr>
                        </div>
                      </div>
                    </div>
                 </div>
                 <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="de_noinfo" name="de_noinfo" class="form-control" placeholder="No Informado" value= "<?php if (isset($_SESSION['f4_de_noinfo'])) echo $_SESSION['f4_de_noinfo']; ?>" required="required" autofocus="autofocus" onchange="habilitar1(this.value);" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="de_noinfo"><small><b>No Informado(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="de_ofemp" name="de_ofemp" class="form-control" placeholder="Oficina de empleo" value= "<?php if (isset($_SESSION['f4_de_ofemp'])) echo $_SESSION['f4_de_ofemp']; ?>" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="de_ofemp"><small>Oficina de empleo</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="de_consul" name="de_consul" class="form-control" placeholder="Consulado o Cancillería" value= "<?php if (isset($_SESSION['f4_de_consul'])) echo $_SESSION['f4_de_consul']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="de_consul"><small>Consulado o Cancillería</small></label>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="de_defen" name="de_defen" class="form-control" placeholder="Juzgados o defensorías" value= "<?php if (isset($_SESSION['f4_de_defen'])) echo $_SESSION['f4_de_defen']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="de_defen"><small>Juzgados o defensorías</small></label>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="de_psocial" name="de_psocial" class="form-control" placeholder="Programa social" value= "<?php if (isset($_SESSION['f4_de_psocial'])) echo $_SESSION['f4_de_psocial']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="de_psocial"><small>Programa social</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="de_amujer" name="de_amujer" class="form-control" placeholder="Área mujer" value= "<?php if (isset($_SESSION['f4_de_amujer'])) echo $_SESSION['f4_de_amujer']; ?>"  min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="de_amujer"><small>Área mujer</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="de_comujer" name="de_comujer" class="form-control" placeholder="Policía o Comisaría de la Mujer" value= "<?php if (isset($_SESSION['f4_de_comujer'])) echo $_SESSION['f4_de_comujer']; ?>"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="de_comujer"><small>Policía o Comisaría de la Mujer</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                        <div class="form-label-group">
                          <input type="text" id="de_otra" name="de_otra" class="form-control" placeholder="Otra"  value= "<?php if (isset($_SESSION['f4_de_otra'])) echo $_SESSION['f4_de_otra']; ?>" autofocus="autofocus">
                          <label for="de_otra"><small>Otra</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <br /><b>Derivación Interna</b><hr>
                        </div>
                      </div>
                    </div>
                 </div>
                 <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="di_noinfo" name="di_noinfo" class="form-control" placeholder="No Informado" value= "<?php if (isset($_SESSION['f4_di_noinfo'])) echo $_SESSION['f4_di_noinfo']; ?>" required="required" autofocus="autofocus" onchange="habilitar2(this.value);" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="di_noinfo"><small><b>No Informado(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="di_apsico" name="di_apsico" class="form-control" placeholder="Asistencia psicológica" value= "<?php if (isset($_SESSION['f4_di_apsico'])) echo $_SESSION['f4_di_apsico']; ?>"  min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="di_apsico"><small>Asistencia psicológica</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="di_pjuridico" name="di_pjuridico" class="form-control" placeholder="Patrocinio jurídico" value= "<?php if (isset($_SESSION['f4_di_pjuridico'])) echo $_SESSION['f4_di_pjuridico']; ?>"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="di_pjuridico"><small>Patrocinio jurídico</small></label>
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="di_refugio" name="di_refugio" class="form-control" placeholder="Refugio o casa de tránsito u hogar " value= "<?php if (isset($_SESSION['f4_di_refugio'])) echo $_SESSION['f4_di_refugio']; ?>"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="di_refugio"><small>Refugio o casa de tránsito u hogar </small></label>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="di_grupos" name="di_grupos" class="form-control" placeholder="Grupos"  value= "<?php if (isset($_SESSION['f4_di_grupos'])) echo $_SESSION['f4_di_grupos']; ?>" autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                        <label for="di_grupos"><small>Grupos</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" id="di_alegal" name="di_alegal" class="form-control" placeholder="Asesoramiento legal" value= "<?php if (isset($_SESSION['f4_di_alegal'])) echo $_SESSION['f4_di_alegal']; ?>" >
                        <label for="di_alegal" min="1" max="2" onkeyup="this.value=Numeros(this.value)"><small>Asesoramiento legal</small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" id="di_asocial" name="di_asocial" class="form-control" placeholder="Asistencia social" value= "<?php if (isset($_SESSION['f4_di_asocial'])) echo $_SESSION['f4_di_asocial']; ?>"  autofocus="autofocus" min="1" max="2" onkeyup="this.value=Numeros(this.value)">
                          <label for="di_asocial"><small>Asistencia social</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                        <div class="form-label-group">
                          <input type="text" id="di_otros" name="di_otros" class="form-control" placeholder="Otros"  value= "<?php if (isset($_SESSION['f4_di_otros'])) echo $_SESSION['f4_di_otros']; ?>" autofocus="autofocus">
                          <label for="di_otros"><small>Otros</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                        <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha37/agregar">Volver</a>
                      </div>  
                      <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                          <input class="btn btn-primary btn-block " type="submit" value="Siguiente" /> 
                          <!-- <a class="btn btn-primary btn-block" href="<?php //echo URL; ?>ficha41/agregar">Siguiente</a> -->
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
    <!-- Bootstrap core JavaScript-->
<script src="<?php echo URL; ?>Views1/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
<script src="<?php echo URL; ?>Views1/template/vendor/jquery-easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>Views1/template/vendor/funciones.js"></script>

<script type="text/javascript">
    //antecedentes y derivacion
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

  //accesibilidad
    function Numeros1(string){//Solo numeros
        var out = '';
        var filtro = '1234567891011121399';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==1 || string==2 || string==3 || string==4 || string==5 || string==6 || string==7 || string==8 || string==9 || string==10 || string==11 || string==12 || string==13 || string==55 || string==99){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
  }
  </script>
  </body>
</html>