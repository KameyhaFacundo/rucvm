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
          //document.getElementById("op20").style.background='#BEB089';
          //document.getElementById("op19").style.background='#BEB089';
          document.getElementById("op120").style.cursor = 'default';
          document.getElementById("op120").style.color = '#585858';
          document.getElementById("op120").style.pointerEvents = "none";
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

        function habilitar(value)
        {
          if(value=="0")
          {
            // habilitamos
            document.getElementById("idgenero").readOnly=false;
            document.getElementById("idgenero").value='';
          }else{
            // deshabilitamos
            document.getElementById("idgenero").value='0';
            document.getElementById("idgenero").readOnly=true;
          }
        }
    </script>

  <?php include 'r_menuizq1E.php'; ?>
    <div id="content-wrapper" style="background-color: #e9e2e8">
      <div class="container-fluid">
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card-header">Edición ficha</div>
            <div class="card-body">
              <form class="form-horizontal" enctype="multipart/form-data"  method="post" action="">
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <b>Consultante</b> 
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['pE_per_dni'])){ echo $_SESSION['pE_per_dni'];}else{ echo $datos['per_dni'];} ?>" id="per_dni" name="per_dni" class="form-control" placeholder="DNI Consultante" size="15" maxlength="8" required="required" autofocus="autofocus" readonly>
                        <label for="per_dni"><small><b>DNI Consultante(*)</b></small></label>
                      </div>
                    </div>

                    </div>
                  </div>
                  <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                      <div class="form-label-group">
                        <input type="text" value="<?php if (isset($_SESSION['pE_per_apellido'])){ echo $_SESSION['pE_per_apellido'];}else{ echo $datos['per_apellido'];} ?>" id="per_apellido" name="per_apellido" class="form-control" placeholder="Apellido" required="required">
                        <label for="per_apellido"><small><b>Apellido(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                      <div class="form-label-group">
                        <input type="text" value="<?php if (isset($_SESSION['pE_per_nombre'])){ echo $_SESSION['pE_per_nombre'];}else{ echo $datos['per_nombre'];} ?>" id="per_nombre" name="per_nombre" class="form-control" placeholder="Nombre" required="required">
                        <label for="per_nombre"><small><b>Nombre(*)</b></small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['pE_idsexo'])){ echo $_SESSION['pE_idsexo'];}else{ echo $datos['idsexo'];} ?>" id="idsexo" name="idsexo" class="form-control" placeholder="Sexo" onkeyup="this.value=Numeros(this.value)" onfocusout="habilitar(this.value);" required="required">
                        <label for="idsexo"><small><b>Sexo(*)</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['pE_idgenero'])){ echo $_SESSION['pE_idgenero'];}else{ echo $datos['idgenero'];} ?>" id="idgenero" name="idgenero" class="form-control" onkeyup="this.value=Numeros1(this.value)" placeholder="Persona trans" required="required">
                        <label for="idgenero"><small><b>Persona Trans(*)</b></small></label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                      <div class="form-label-group">
                        <input type="number" value="<?php if (isset($_SESSION['pE_idestadocivil'])){ echo $_SESSION['pE_idestadocivil'];}else{ echo $datos['idestadocivil'];} ?>" id="idestadocivil" name="idestadocivil" class="form-control" placeholder="Estado civil" maxlength="1" required="required"  autofocus="autofocus" onkeyup="this.value=Numeros2(this.value)">
                        <label for="idestadocivil"><small><b>Estado civil</b></small></label>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                      <div class="form-label-group">
                        <?php $fechaactual = date("Y-m-d"); 
                                    //$fechamasuno = date('d-m-Y', strtotime($fechaactual.'+1 days'));
                                    $fechamenor = date('Y-m-d', strtotime($fechaactual.'- 14 year'));
                              ?>
                        <input type="date" value="<?php if (isset($_SESSION['pE_per_nacido'])){ echo $_SESSION['pE_per_nacido'];}else{ echo $datos['per_nacido'];} ?>" id="per_nacido" min="1899-01-01" max="<?php echo $fechamenor;?>" name="per_nacido" class="form-control" placeholder="Fecha de nacimiento" max="100000000000"  autofocus="autofocus">
                        <label for="per_nacido"><b>Fecha de nacimiento(*)</b></label>
                      </div>
                    </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['pE_per_discapacitada'])){ echo $_SESSION['pE_per_discapacitada'];}else{ echo $datos['per_discapacitada'];} ?>" id="per_discapacitada" name="per_discapacitada" class="form-control" placeholder="Discapacitada"  autofocus="autofocus">
                          <label for="per_discapacitada"><small>Discapacitada</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="form-label-group">
                          <input type="number" value="<?php if (isset($_SESSION['pE_per_celular'])){ echo $_SESSION['pE_per_celular'];}else{ echo $datos['per_celular'];} ?>" id="per_celular" name="per_celular" class="form-control" placeholder="DNI Consultante"  autofocus="autofocus">
                          <label for="per_celular"><small>Celular</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                        <div class="form-label-group">
                          <input type="text" value="<?php if (isset($_SESSION['pE_per_domicilio'])){ echo $_SESSION['pE_per_domicilio'];}else{ echo $datos['per_domicilio'];} ?>" id="per_domicilio" name="per_domicilio" class="form-control" placeholder="Domicilio"  autofocus="autofocus">
                          <label for="per_domicilio"><small>Domicilio</small></label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="selector-departamento">
                                  <label for="departamento"><small>Departamento</small></label>
                                <input  type="hidden" id="departamento1" name="iddepartamento" value="<?php if(isset($datos)){ echo $datos['iddepartamento']; }else{ if($_SESSION['pE_iddepartamento']){ echo $_SESSION['pE_iddepartamento'];}} ?> ">
                                <select name="departamento" id="departamento" style="font-size:11pt" class="form-control"></select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="selector-localidad">
                                  <label for="localidad"><small>Localidad</small></label>
                                <input  type="hidden" id="localidad1" name="idlocalidad" value="<?php if(isset($datos)){ echo $datos['idlocalidad']; }else{ if($_SESSION['pE_idlocalidad']){ echo $_SESSION['pE_idlocalidad'];}} ?> ">
                                <select name="localidad" id="localidad" style="font-size:11pt" class="form-control"></select>
                              </div>
                            </div>
                          </div>
                        </div>
                  <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                          <a class="btn btn-primary btn-block" href="<?php echo URL; ?>principal/buscar/">Volver</a>
                        <!-- <a class="btn btn-primary btn-block" href="<?php echo URL; ?>"><?php echo $datos['idficha']; ?></a> -->
                      </div>  
                      <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                      <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                          
                          <input type="hidden" value="<?php echo $datos['idpersona'];?>" name="idpersona" required="required">
                          <input type="hidden" value="<?php echo $datos['idficha'];?>" name="idficha" required="required">
                          <input class="btn btn-primary btn-block " type="submit" name="submit" value="Siguiente" /> 
                          <!-- <a class="btn btn-primary btn-block" href="<?php //echo URL; ?>ficha/editar">Siguiente</a> -->
                          
                          
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
      //Sexo
      function Numeros(string){//Solo numeros
        var out = '';
        var filtro = '012';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==0 || string==1 || string==2){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
        //Retornar valor filtrado
        return out;
    }

    //Persona trans
      function Numeros1(string){//Solo numeros
        var out = '';
        var filtro = '012349';//Caracteres validos
      
        //Recorrer el texto y verificar si el caracter se encuentra en la lista de validos 
        if(string==0 || string==1 || string==2 || string==3 || string==4 || string==9){
           if (filtro.indexOf(string.charAt(i)) != -1) 
                 //Se añaden a la salida los caracteres validos
           out += string.charAt(i);
        }
        //Retornar valor filtrado
        return out;
    }

    //Estado civil
      function Numeros2(string){//Solo numeros
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
    </script>
  </body>

</html>