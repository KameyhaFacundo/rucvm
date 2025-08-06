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
    <link href="/rucvm1/Views1/template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="/rucvm1/Views1/template/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="/rucvm1/Views1/template/css/sb-admin.css" rel="stylesheet">
  </head>

  <body class="bg-dark">
      <?php //error_reporting(0);?>
      
            <script type="text/javascript">
        window.onload=function(){
          //document.getElementById("op120").style.background='#BEB089';
          //document.getElementById("op119").style.background='#BEB089';
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
    </script>
    
    
    <script type="text/javascript">
        function enlacesDes(){
          //document.getElementById("op120").style.background='#BEB089';
          //document.getElementById("op119").style.background='#BEB089';
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
    </script>
      
      
      
  <div id="enviar" name="enviar"> 
      <?php include 'r_menuizq1.php';?>
    <div id="content-wrapper">
      <div class="container-fluid">
        <div class="card col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="card-header">Nueva ficha</div>
            <div class="card-body">
              <form role="form" class="form-horizontal" enctype="multipart/form-data"  method="post" action="">
                <div class="form-group">
                    <div class="form-row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="form-label-group">
                          <b>Alta consultante</b>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                  <div class="form-row">


                    <?php
                      //echo URL;

                        $row = pg_fetch_assoc($datos);
                        echo "ape".$row['per_apellido'];

                      //echo $filas;
                       ?>
                          </div>
                        </div>  
                  
                  <div class="form-group">
                        <div class="form-row">
                                      <div class="col-xs-12 col-sm-6 col-md-8 col-lg-3">
                      <div class="form-label-group">
                        <input  type="number" id="per_dni" name="per_dni" class="form-control" placeholder="DNI Consultante" min="1000000" max="99999999" required="required" autofocus="autofocus" value="<?php if(isset($row)){ echo $row['per_dni']; } ?>">
                        <label for="per_dni"><small>DNI Consultante</small></label>
                      </div>
                    </div>
                              </div>
                    </div>
                  
                  
                  
                  
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                            <div class="form-label-group">
                              <input type="text" id="per_apellido" name="per_apellido" class="form-control" placeholder="Apellido" required="required" value="<?php if(isset($row)){ echo $row['per_apellido']; } ?>">
                              <label for="per_apellido"><small>Apellido</small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-8 col-lg-6">
                            <div class="form-label-group">
                              <input type="text" id="per_nombre" name="per_nombre" class="form-control" placeholder="Nombre" required="required" value="<?php if(isset($row)){ echo $row['per_nombre']; } ?>">
                              <label for="per_nombre"><small>Nombre</small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="idsexo" name="idsexo" class="form-control" placeholder="Sexo" required="required" value="<?php if(isset($row)){ echo $row['idsexo']; } ?>">
                              <label for="idsexo"><small>Sexo</small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="idgenero" name="idgenero" class="form-control" placeholder="Persona trans" required="required" value="<?php if(isset($row)){ echo $row['idgenero']; } ?>">
                              <label for="idgenero"><small>Persona Trans</small></label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="number" id="idestadocivil" name="idestadocivil" class="form-control" placeholder="Estado civil" maxlength="1" required="required" autofocus="autofocus" value="<?php if(isset($row)){ echo $row['idestadocivil']; } ?>">
                              <label for="idestadocivil"><small>Estado civil</small></label>
                            </div>
                          </div>
                          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <div class="form-label-group">
                              <input type="date" id="per_nacido" name="per_nacido" class="form-control" placeholder="Fecha de nacimiento" required="required" autofocus="autofocus" value="<?php if(isset($row)){ echo $row['per_nacido']; } ?>">
                              <label for="per_nacido">Fecha de nacimiento</label>
                            </div>
                          </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="form-label-group">
                                <input type="number" id="per_celular" name="per_celular" class="form-control" placeholder="DNI Consultante" required="required" autofocus="autofocus" value="<?php if(isset($row)){ echo $row['per_celular']; } ?>">
                                <label for="per_celular"><small>Celular</small></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                              <div class="form-label-group">
                                <input type="text" id="per_domicilio" name="per_domicilio" class="form-control" placeholder="Domicilio" required="required" autofocus="autofocus" value="<?php if(isset($row)){ echo $row['per_domicilio']; } ?>">
                                <label for="per_domicilio"><small>Domicilio</small></label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="selector-departamento">
                                <input  type="hidden" id="departamento1" name="iddepartamento" value="<?php if(isset($row)){ echo $row['iddepartamento']; } ?> ">
                                <select name="departamento" id="departamento" style="font-size:11pt" class="form-control"></select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="form-row">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                              <div class="selector-localidad">
                                <input  type="hidden" id="localidad1" name="idlocalidad" value="<?php if(isset($row)){ echo $row['idlocalidad']; } ?> ">
                                <select name="localidad" id="localidad" style="font-size:11pt" class="form-control"></select>
                              </div>
                            </div>
                          </div>
                        </div>
                      <div class="form-group">
                        <div class="form-row">
                          <div class="col-xs-3 col-sm-3 col-md-6 col-lg-3"></div>
                          <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                            <a class="btn btn-primary btn-block" href="<?php URL.'principal/buscar/'; ?>">Volver</a>
                          </div>  
                          <div class="col-xs-2 col-sm-1 col-md-6 col-lg-2"></div>                                      
                          <div class="col-xs-2 col-sm-3 col-md-8 col-lg-2">
                              <input class="btn btn-primary btn-block " type="submit" name="submit" value="Siguiente" /> 
                             <!-- <a class="btn btn-primary btn-block" href="<?php echo URL; ?>ficha/agregar">Siguiente</a> -->
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
<script src="/rucvm1/Views1/template/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript-->
<script src="/rucvm1/Views1/template/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
<script src="/rucvm1/Views1/template/vendor/jquery-easing/jquery.easing.min.js"></script>
<script type="text/javascript" src="http://localhost/rucvm1/Views1/template/vendor/funciones.js"></script>
<script type="text/javascript">
      $('#buscar').on('click', function(event) {
        event.preventDefault();
        var per_dni = $('#per_dni').val();
          $.ajax({
            url: '<?php echo URL; ?>persona/agregar',
            type: 'POST',
            dataType: 'html',
            data: {per_dni: per_dni},
          })
          .done(function(data) {
            //console.log(JSON.stringify(data));
            //var p_dni = data.per_dni,
            //var p_apellido = data.per_apellido;
            $('#enviar').empty();
            $('#enviar').html(data);
            //$('.enviarap').html(JSON.stringify(data.per_apellido, null, 2));
          })
          .fail(function() {
            console.log("error");
          })
          .always(function() {
            console.log("complete");
          });          
      });
    </script>
</body>
</html>